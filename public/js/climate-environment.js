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
                preview.style.opacity = '0.4';
                preview.style.transform = 'scale(0.97)';
                setTimeout(function () {
                    preview.src = newSrc;
                    preview.alt = newAlt;
                    preview.style.opacity = '1';
                    preview.style.transform = 'scale(1)';
                }, 120);
            }
        }

        rows.forEach(function (row) {
            row.addEventListener('mouseenter', function () { activateRow(row); });
            row.addEventListener('focus', function () { activateRow(row); });
            row.addEventListener('click', function () { activateRow(row); });
        });
    });
})();
