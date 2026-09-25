/**
 * innovation-livelihoods.js
 * Interactive Focus Spotlight — tab switching, crossfade, keyboard nav, reduced-motion.
 */
(function () {
    'use strict';

    /* ── Reveal animation (shared with other sections) ── */
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function revealEls() {
        var els = document.querySelectorAll('[data-innovative-reveal]');
        if (!els.length) return;

        function show(el) {
            var delay = el.dataset.innovativeDelay;
            if (delay && !reduceMotion) el.style.transitionDelay = delay + 'ms';
            el.classList.add('is-visible');
        }

        if (reduceMotion || !('IntersectionObserver' in window)) {
            els.forEach(show);
            return;
        }

        var io = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    show(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        els.forEach(function (el) { io.observe(el); });
    }

    /* ── Timeline track animation ── */
    function animateTimeline() {
        var track = document.querySelector('.innovative-timeline');
        if (!track) return;

        if (reduceMotion) {
            track.classList.add('is-visible');
            return;
        }

        var io = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.25 });

        io.observe(track);
    }

    /* ── Animated Number Counter ── */
    function initCounters() {
        var counterElements = document.querySelectorAll('[data-counter]');
        if (!counterElements.length) return;

        function animateCounter(el) {
            if (el.hasAttribute('data-counter-done')) return;
            el.setAttribute('data-counter-done', 'true');

            var target = parseFloat(el.getAttribute('data-target')) || 0;
            var suffix = el.getAttribute('data-suffix') || '';
            var duration = 1800; // ms
            var startTime = null;

            function easeOutExpo(t) {
                return t === 1 ? 1 : 1 - Math.pow(2, -10 * t);
            }

            function formatNumber(num) {
                return Math.floor(num).toLocaleString('en-US');
            }

            function step(timestamp) {
                if (!startTime) startTime = timestamp;
                var progress = Math.min((timestamp - startTime) / duration, 1);
                var easedProgress = easeOutExpo(progress);
                var currentVal = easedProgress * target;

                el.textContent = formatNumber(currentVal) + suffix;

                if (progress < 1) {
                    requestAnimationFrame(step);
                } else {
                    el.textContent = formatNumber(target) + suffix;
                }
            }

            requestAnimationFrame(step);
        }

        if (reduceMotion || !('IntersectionObserver' in window)) {
            counterElements.forEach(function (el) {
                var target = parseFloat(el.getAttribute('data-target')) || 0;
                var suffix = el.getAttribute('data-suffix') || '';
                el.textContent = Math.floor(target).toLocaleString('en-US') + suffix;
            });
            return;
        }

        var counterObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.25, rootMargin: '0px 0px -20px 0px' });

        counterElements.forEach(function (el) {
            counterObserver.observe(el);
        });
    }

    /* ── Focus Spotlight ── */
    function initSpotlight() {
        var spotlight = document.querySelector('.focus-spotlight');
        if (!spotlight) return; // guard — not on this page

        /* Read data from embedded JSON */
        var dataEl = document.getElementById('fs-data');
        if (!dataEl) return;
        var areas;
        try { areas = JSON.parse(dataEl.textContent); }
        catch (e) { return; }

        /* DOM refs */
        var tabs     = Array.from(spotlight.querySelectorAll('.focus-spotlight__tab'));
        var img      = document.getElementById('fs-pane-img');
        var details  = document.getElementById('fs-pane-details');
        var numEl    = document.getElementById('fs-pane-num');
        var titleEl  = document.getElementById('fs-pane-title');
        var descEl   = document.getElementById('fs-pane-desc');
        var pane     = spotlight.querySelector('.focus-spotlight__pane');

        if (!img || !pane) return;

        var current = 0;
        var switching = false;

        /* Preload all images for smoother switching */
        areas.forEach(function (a, i) {
            if (i === 0) return; // first is already loaded
            var preload = new Image();
            preload.src = a.image;
        });

        function activateTab(index) {
            if (index === current && switching) return;
            if (index === current) return;

            /* Update tab states */
            tabs.forEach(function (tab, i) {
                var active = i === index;
                tab.classList.toggle('is-active', active);
                tab.setAttribute('aria-selected', active ? 'true' : 'false');
                tab.setAttribute('tabindex', active ? '0' : '-1');
            });

            /* Update pane aria */
            pane.id = areas[index].panelId;
            pane.setAttribute('aria-labelledby', areas[index].tabId);

            if (reduceMotion) {
                /* Instant swap */
                img.src = areas[index].image;
                img.alt = areas[index].alt;
                if (numEl) numEl.textContent   = 'Focus Area ' + areas[index].num;
                if (titleEl) titleEl.textContent = areas[index].title;
                if (descEl) descEl.textContent  = areas[index].desc;
                current = index;
                return;
            }

            /* Crossfade */
            switching = true;
            img.classList.add('is-switching');
            if (details) details.classList.add('is-switching');

            setTimeout(function () {
                img.src = areas[index].image;
                img.alt = areas[index].alt;
                if (numEl) numEl.textContent   = 'Focus Area ' + areas[index].num;
                if (titleEl) titleEl.textContent = areas[index].title;
                if (descEl) descEl.textContent  = areas[index].desc;

                img.classList.remove('is-switching');
                if (details) details.classList.remove('is-switching');
                current = index;
                switching = false;
            }, 250);
        }

        /* Click */
        tabs.forEach(function (tab, i) {
            tab.addEventListener('click', function () { activateTab(i); });

            /* Hover on desktop also activates */
            tab.addEventListener('mouseenter', function () { activateTab(i); });
        });

        /* Arrow-key keyboard navigation */
        spotlight.querySelector('.focus-spotlight__list').addEventListener('keydown', function (e) {
            var key = e.key;
            if (key === 'ArrowDown' || key === 'ArrowUp') {
                e.preventDefault();
                var next = key === 'ArrowDown'
                    ? (current + 1) % tabs.length
                    : (current - 1 + tabs.length) % tabs.length;
                tabs[next].focus();
                activateTab(next);
            }
            if (key === 'Home') { e.preventDefault(); tabs[0].focus(); activateTab(0); }
            if (key === 'End')  { e.preventDefault(); var last = tabs.length - 1; tabs[last].focus(); activateTab(last); }
            if (key === 'Enter' || key === ' ') { e.preventDefault(); activateTab(current); }
        });
    }

    /* ── Expanding Audience Panels (Builders, Earners & Changemakers) ── */
    function initAudiencePanels() {
        var audienceSections = document.querySelectorAll('.innovative-audiences');
        audienceSections.forEach(function (section) {
            var panels = section.querySelectorAll('.innovative-audience-panel');
            if (!panels.length) return;

            var activeIndex = 0;
            var timer = null;
            var isUserInteracted = false;
            var isSectionVisible = false;

            function setActivePanel(index, animateBar) {
                activeIndex = index;
                panels.forEach(function (panel, i) {
                    var isActive = (i === index);
                    panel.classList.toggle('is-active', isActive);
                    panel.classList.remove('is-animating-progress');
                    panel.setAttribute('aria-selected', isActive ? 'true' : 'false');
                    panel.setAttribute('aria-expanded', isActive ? 'true' : 'false');
                    panel.setAttribute('tabindex', isActive ? '0' : '-1');

                    if (isActive && animateBar && !reduceMotion && !isUserInteracted) {
                        void panel.offsetWidth; // Reflow to restart progress animation
                        panel.classList.add('is-animating-progress');
                    }
                });
            }

            function startAutoAdvance() {
                if (isUserInteracted || reduceMotion || timer) return;
                setActivePanel(activeIndex, true);
                timer = setInterval(function () {
                    if (isSectionVisible && !isUserInteracted) {
                        var nextIndex = (activeIndex + 1) % panels.length;
                        setActivePanel(nextIndex, true);
                    }
                }, 5000);
            }

            function stopAutoAdvance(permanent) {
                if (timer) {
                    clearInterval(timer);
                    timer = null;
                }
                if (permanent) {
                    isUserInteracted = true;
                }
                var activePanel = section.querySelector('.innovative-audience-panel.is-active');
                if (activePanel) {
                    activePanel.classList.remove('is-animating-progress');
                }
            }

            panels.forEach(function (panel, idx) {
                panel.addEventListener('mouseenter', function () {
                    stopAutoAdvance(false);
                    setActivePanel(idx, false);
                });

                panel.addEventListener('mouseleave', function () {
                    if (!isUserInteracted) {
                        startAutoAdvance();
                    }
                });

                panel.addEventListener('click', function () {
                    stopAutoAdvance(true);
                    setActivePanel(idx, false);
                });

                panel.addEventListener('keydown', function (e) {
                    if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
                        e.preventDefault();
                        var next = (idx + 1) % panels.length;
                        stopAutoAdvance(true);
                        setActivePanel(next, false);
                        panels[next].focus();
                    } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
                        e.preventDefault();
                        var prev = (idx - 1 + panels.length) % panels.length;
                        stopAutoAdvance(true);
                        setActivePanel(prev, false);
                        panels[prev].focus();
                    } else if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        stopAutoAdvance(true);
                        setActivePanel(idx, false);
                    }
                });
            });

            if ('IntersectionObserver' in window) {
                var audObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        isSectionVisible = entry.isIntersecting;
                        if (isSectionVisible && !isUserInteracted && !reduceMotion) {
                            startAutoAdvance();
                        } else if (!isSectionVisible) {
                            stopAutoAdvance(false);
                        }
                    });
                }, { threshold: 0.2 });
                audObserver.observe(section);
            }
        });
    }

    /* ── Boot ── */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', boot);
    } else {
        boot();
    }

    function boot() {
        revealEls();
        animateTimeline();
        initCounters();
        initSpotlight();
        initAudiencePanels();
    }
})();
