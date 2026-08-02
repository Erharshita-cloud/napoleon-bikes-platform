'use strict';

/* ============================================================
   Napoleon Bikes Platform V2
   Global Application Script
============================================================ */

document.addEventListener('DOMContentLoaded', () => {

    initStickyHeader();
    initMobileMenu();

});

/* ============================================================
   Sticky Header
============================================================ */

function initStickyHeader() {

    const header = document.getElementById('site-header');

    if (!header) return;

    const handleScroll = () => {

        if (window.scrollY > 40) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

    };

    handleScroll();

    window.addEventListener(
        'scroll',
        handleScroll,
        {
            passive: true
        }
    );

}

/* ============================================================
   Mobile Navigation
============================================================ */

function initMobileMenu() {

    const toggle = document.getElementById('mobile-toggle');
    const close = document.getElementById('mobile-close');
    const menu = document.getElementById('mobile-menu');

    if (!toggle || !menu) return;

    const openMenu = () => {

        menu.classList.add('active');

        menu.setAttribute('aria-hidden', 'false');

        toggle.setAttribute('aria-expanded', 'true');

        document.body.style.overflow = 'hidden';

    };

    const closeMenu = () => {

        menu.classList.remove('active');

        menu.setAttribute('aria-hidden', 'true');

        toggle.setAttribute('aria-expanded', 'false');

        document.body.style.overflow = '';

    };

    toggle.addEventListener('click', openMenu);

    if (close) {
        close.addEventListener('click', closeMenu);
    }

    menu.addEventListener('click', (event) => {

        if (event.target === menu) {
            closeMenu();
        }

    });

    document.addEventListener('keydown', (event) => {

        if (event.key === 'Escape') {
            closeMenu();
        }

    });

    menu.querySelectorAll('a').forEach(link => {

        link.addEventListener('click', closeMenu);

    });

}
