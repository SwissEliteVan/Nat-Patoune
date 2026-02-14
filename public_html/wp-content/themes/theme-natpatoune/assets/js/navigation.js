(function () {
    'use strict';

    var toggle = document.querySelector('.menu-toggle');
    var nav = document.querySelector('.main-navigation');

    if (!toggle || !nav) {
        return;
    }

    toggle.addEventListener('click', function () {
        nav.classList.toggle('toggled');
        var expanded = toggle.getAttribute('aria-expanded') === 'true';
        toggle.setAttribute('aria-expanded', String(!expanded));
    });

    document.addEventListener('click', function (e) {
        if (!nav.contains(e.target) && !toggle.contains(e.target) && nav.classList.contains('toggled')) {
            nav.classList.remove('toggled');
            toggle.setAttribute('aria-expanded', 'false');
        }
    });

    var links = nav.querySelectorAll('a');
    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener('click', function () {
            if (nav.classList.contains('toggled')) {
                nav.classList.remove('toggled');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });
    }
})();
