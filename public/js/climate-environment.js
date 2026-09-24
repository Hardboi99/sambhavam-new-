(function () {
    'use strict';

    var page = document.querySelector('.climate-page');
    if (!page) return;

    var revealItems = page.querySelectorAll('[data-climate-reveal]');
    var timelines = page.querySelectorAll('.climate-timeline');
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    revealItems.forEach(function (item) {
        var delay = Number(item.getAttribute('data-climate-delay'));
        if (Number.isFinite(delay) && delay > 0) {
            item.style.setProperty('--climate-delay', Math.min(delay, 400) + 'ms');
        }
    });

    function reveal(item) {
        item.classList.add('is-visible');
    }

    if (reduceMotion || !('IntersectionObserver' in window)) {
        revealItems.forEach(reveal);
        timelines.forEach(reveal);
        return;
    }

    var observer = new IntersectionObserver(function (entries, activeObserver) {
        entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            reveal(entry.target);
            activeObserver.unobserve(entry.target);
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -36px 0px' });

    revealItems.forEach(function (item) { observer.observe(item); });
    timelines.forEach(function (timeline) { observer.observe(timeline); });

    // Animated Number Counter
    var counterElements = page.querySelectorAll('[data-counter]');
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
            el.textContent = target.toLocaleString('en-US') + suffix;
        });
    } else {
        var counterObserver = new IntersectionObserver(function (entries, activeObserver) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    activeObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.25 });

        counterElements.forEach(function (el) {
            counterObserver.observe(el);
        });
    }

    // Focus Areas interactive table row & floating preview
    var tableSections = page.querySelectorAll('.climate-focus-awards-section');
    tableSections.forEach(function (section) {
        var rows = section.querySelectorAll('.focus-award-row');
        var preview = section.querySelector('[data-award-preview]');
        if (!preview || !rows.length) return;

        function activateRow(row) {
            rows.forEach(function (item) {
                item.classList.toggle('is-active', item === row);
            });
            var newSrc = row.getAttribute('data-image');
            var newAlt = row.getAttribute('data-alt') || '';
            if (newSrc && preview.src !== newSrc) {
                preview.style.opacity = '0.3';
                preview.style.transform = 'scale(1.04)';
                setTimeout(function () {
                    preview.src = newSrc;
                    preview.alt = newAlt;
                    preview.style.opacity = '1';
                    preview.style.transform = 'scale(1)';
                }, 130);
            }
        }

        rows.forEach(function (row) {
            row.addEventListener('mouseenter', function () { activateRow(row); });
            row.addEventListener('focus', function () { activateRow(row); });
            row.addEventListener('click', function () { activateRow(row); });
        });
    });
})();
