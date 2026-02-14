(function () {
    'use strict';

    var toggle = document.querySelector('.menu-toggle');
    var menu = document.querySelector('.primary-menu');

    if (!toggle || !menu) {
        return;
    }

    toggle.addEventListener('click', function () {
        menu.classList.toggle('toggled');
        var expanded = toggle.getAttribute('aria-expanded') === 'true';
        toggle.setAttribute('aria-expanded', !expanded);
    });
})();
