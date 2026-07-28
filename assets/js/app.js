/**
 * ==========================================================
 * Napoleon Bikes Platform
 * Main JavaScript
 * Version 2.0
 * ==========================================================
 */

"use strict";

/* ==========================================================
   DOM READY
========================================================== */

document.addEventListener("DOMContentLoaded", () => {

    initFAQ();

    initStatisticsCounter();

    initHeroSlider();

    initNavbar();

    initSearchOverlay();

    initThemeToggle();

    initScrollTop();

});


/* ==========================================================
   HELPERS
========================================================== */

function $(selector) {
    return document.querySelector(selector);
}

function $$(selector) {
    return Array.from(document.querySelectorAll(selector));
}


/* ==========================================================
   SMOOTH FADE
========================================================== */

function fadeOut(elements) {

    elements.forEach(el => {

        if (!el) return;

        el.style.opacity = "0";

        el.style.transform = "translateY(10px)";

    });

}


function fadeIn(elements) {

    elements.forEach(el => {

        if (!el) return;

        el.style.opacity = "1";

        el.style.transform = "translateY(0px)";

    });

}


/* ==========================================================
   SAFE TEXT UPDATE
========================================================== */

function updateText(element, value) {

    if (!element) return;

    element.textContent = value;

}

/* ==========================================================
   FAQ ACCORDION
========================================================== */

function initFAQ() {

    const faqItems = $$(".faq-item");

    if (!faqItems.length) return;

    faqItems.forEach(item => {

        const button = item.querySelector(".faq-question");
        const answer = item.querySelector(".faq-answer");

        if (!button || !answer) return;

        if (item.classList.contains("active")) {

            answer.style.maxHeight = answer.scrollHeight + "px";
            button.setAttribute("aria-expanded", "true");

        } else {

            answer.style.maxHeight = "0px";
            button.setAttribute("aria-expanded", "false");

        }

        button.addEventListener("click", () => {

            const isActive = item.classList.contains("active");

            faqItems.forEach(faq => {

                faq.classList.remove("active");

                const b = faq.querySelector(".faq-question");
                const a = faq.querySelector(".faq-answer");

                if (b) {
                    b.setAttribute("aria-expanded", "false");
                }

                if (a) {
                    a.style.maxHeight = "0px";
                }

            });

            if (!isActive) {

                item.classList.add("active");

                button.setAttribute("aria-expanded", "true");

                answer.style.maxHeight =
                    answer.scrollHeight + "px";

            }

        });

    });

}


/* ==========================================================
   STATISTICS COUNTER
========================================================== */

function initStatisticsCounter() {

    const counters = $$(".counter");

    if (!counters.length) return;

    if (!("IntersectionObserver" in window)) {

        counters.forEach(setCounterFinalValue);

        return;

    }

    const observer = new IntersectionObserver(

        entries => {

            entries.forEach(entry => {

                if (!entry.isIntersecting) return;

                animateCounter(entry.target);

                observer.unobserve(entry.target);

            });

        },

        {
            threshold: 0.45
        }

    );

    counters.forEach(counter => {

        observer.observe(counter);

    });

}


/* ==========================================================
   COUNTER ANIMATION
========================================================== */

function animateCounter(counter) {

    const target = Number(counter.dataset.target);

    if (Number.isNaN(target)) return;

    const duration = 1800;

    const start = performance.now();

    function frame(time) {

        const progress = Math.min(
            (time - start) / duration,
            1
        );

        const eased =
            1 - Math.pow(1 - progress, 3);

        const value = Math.floor(
            target * eased
        );

        counter.textContent =
            value.toLocaleString("en-IN");

        if (progress < 1) {

            requestAnimationFrame(frame);

        } else {

            counter.textContent =
                target.toLocaleString("en-IN") + "+";

        }

    }

    requestAnimationFrame(frame);

}


/* ==========================================================
   COUNTER FALLBACK
========================================================== */

function setCounterFinalValue(counter) {

    const target = Number(counter.dataset.target);

    if (Number.isNaN(target)) return;

    counter.textContent =
        target.toLocaleString("en-IN") + "+";

}

/* ==========================================================
   HERO SLIDER
========================================================== */

function initHeroSlider() {

    const hero = $(".hero-horizontal");

    if (!hero) return;

    const sliderWindow = $(".hero-slider-window");
    const sliderTrack = $("#hero-slider-track");

    const slides = $$(".hero-bike-slide");

    const indicators = $$(".hero-slider-indicator");

    const previousButton = $("#hero-prev");
    const nextButton = $("#hero-next");

    const currentNumber = $("#hero-current-slide");

    const eyebrow = $("#hero-eyebrow-text");
    const titleMain = $("#hero-title-main");
    const titleHighlight = $("#hero-title-highlight");
    const description = $("#hero-description");

    if (
        !sliderWindow ||
        !sliderTrack ||
        slides.length === 0
    ) {
        return;
    }

    const heroData =
        window.napoleonHeroSlides || [];

    let currentSlide = 0;

    let autoSlide = null;

    const slideDuration = 6000;

    /* ==========================================
       UPDATE HERO TEXT
    ========================================== */

    function updateText(index) {

        if (!heroData[index]) return;

        const data = heroData[index];

        const elements = [
            eyebrow,
            titleMain,
            titleHighlight,
            description
        ];

        elements.forEach(el => {

            if (!el) return;

            el.style.opacity = "0";
            el.style.transform = "translateY(8px)";

        });

        setTimeout(() => {

            if (eyebrow)
                eyebrow.textContent =
                    data.category;

            if (titleMain)
                titleMain.textContent =
                    data.title;

            if (titleHighlight)
                titleHighlight.textContent =
                    data.highlight;

            if (description)
                description.textContent =
                    data.description;

            elements.forEach(el => {

                if (!el) return;

                el.style.opacity = "1";
                el.style.transform =
                    "translateY(0)";

            });

        }, 180);

    }

    /* ==========================================
       MOVE SLIDER
    ========================================== */

    function moveSlider() {

        const active =
            slides[currentSlide];

        if (!active) return;

        const centerWindow =
            sliderWindow.clientWidth / 2;

        const centerSlide =
            active.offsetLeft +
            active.offsetWidth / 2;

        let translate =
            centerWindow -
            centerSlide;

        const minTranslate =
            Math.min(
                0,
                sliderWindow.clientWidth -
                sliderTrack.scrollWidth
            );

        translate = Math.max(
            minTranslate,
            Math.min(0, translate)
        );

        sliderTrack.style.transform =
            `translate3d(${translate}px,0,0)`;
               slides.forEach((slide, index) => {

            slide.classList.toggle(
                "is-active",
                index === currentSlide
            );

        });

        indicators.forEach((indicator, index) => {

            indicator.classList.toggle(
                "is-active",
                index === currentSlide
            );

        });

        if (currentNumber) {

            currentNumber.textContent =
                String(currentSlide + 1)
                .padStart(2, "0");

        }

        updateText(currentSlide);

    }


    /* ==========================================
       SHOW SLIDE
    ========================================== */

    function showSlide(index) {

        if (index >= slides.length) {

            currentSlide = 0;

        }

        else if (index < 0) {

            currentSlide =
                slides.length - 1;

        }

        else {

            currentSlide = index;

        }

        moveSlider();

    }


    /* ==========================================
       AUTO PLAY
    ========================================== */

    function stopAutoSlide() {

        if (autoSlide) {

            clearInterval(autoSlide);

            autoSlide = null;

        }

    }

    function startAutoSlide() {

        stopAutoSlide();

        autoSlide = setInterval(() => {

            showSlide(currentSlide + 1);

        }, slideDuration);

    }


    /* ==========================================
       BUTTONS
    ========================================== */

    if (nextButton) {

        nextButton.addEventListener("click", () => {

            showSlide(currentSlide + 1);

            startAutoSlide();

        });

    }

    if (previousButton) {

        previousButton.addEventListener("click", () => {

            showSlide(currentSlide - 1);

            startAutoSlide();

        });

    }


    /* ==========================================
       INDICATORS
    ========================================== */

    indicators.forEach((indicator, index) => {

        indicator.addEventListener("click", () => {

            showSlide(index);

            startAutoSlide();

        });

    });


    /* ==========================================
       PAUSE ON HOVER
    ========================================== */

    hero.addEventListener(
        "mouseenter",
        stopAutoSlide
    );

    hero.addEventListener(
        "mouseleave",
        startAutoSlide
    );


    /* ==========================================
       PAUSE WHEN TAB IS HIDDEN
    ========================================== */

    document.addEventListener(
        "visibilitychange",
        () => {

            if (document.hidden) {

                stopAutoSlide();

            } else {

                startAutoSlide();

            }

        }
    );


    /* ==========================================
       RESPONSIVE
    ========================================== */

    window.addEventListener(
        "resize",
        moveSlider
    );


    /* ==========================================
       KEYBOARD
    ========================================== */

    document.addEventListener(
        "keydown",
        (event) => {

            if (event.key === "ArrowRight") {

                showSlide(currentSlide + 1);

                startAutoSlide();

            }

            if (event.key === "ArrowLeft") {

                showSlide(currentSlide - 1);

                startAutoSlide();

            }

        }
    );


    /* ==========================================
       START
    ========================================== */

    moveSlider();

    startAutoSlide();

}

/* =========================================================
   MOBILE MENU
========================================================= */

(function () {

    const mobileMenu =
        document.getElementById("mobileMenu");

    const menuButton =
        document.getElementById("mobileMenuBtn");

    const closeButton =
        document.getElementById("closeMobileMenu");

    const overlay =
        document.getElementById("mobileOverlay");

    if (
        !mobileMenu ||
        !menuButton
    ) {
        return;
    }

    function openMenu() {

        mobileMenu.classList.add("active");

        mobileMenu.setAttribute(
            "aria-hidden",
            "false"
        );

        document.body.style.overflow = "hidden";

    }

    function closeMenu() {

        mobileMenu.classList.remove("active");

        mobileMenu.setAttribute(
            "aria-hidden",
            "true"
        );

        document.body.style.overflow = "";

    }

    menuButton.addEventListener(
        "click",
        openMenu
    );

    if (closeButton) {

        closeButton.addEventListener(
            "click",
            closeMenu
        );

    }

    if (overlay) {

        overlay.addEventListener(
            "click",
            closeMenu
        );

    }

})();

/* =========================================================
   SEARCH OVERLAY
========================================================= */

(function () {

    const overlay =
        document.getElementById("searchOverlay");

    const openButton =
        document.getElementById("searchBtn");

    const closeButton =
        document.getElementById("closeSearch");

    if (
        !overlay ||
        !openButton
    ) {
        return;
    }

    function openSearch() {

        overlay.classList.add("active");

        overlay.setAttribute(
            "aria-hidden",
            "false"
        );

        document.body.style.overflow = "hidden";

        const input =
            overlay.querySelector("input");

        if (input) {

            setTimeout(() => {

                input.focus();

            }, 100);

        }

    }

    function closeSearch() {

        overlay.classList.remove("active");

        overlay.setAttribute(
            "aria-hidden",
            "true"
        );

        document.body.style.overflow = "";

    }

    openButton.addEventListener(
        "click",
        openSearch
    );

    if (closeButton) {

        closeButton.addEventListener(
            "click",
            closeSearch
        );

    }

})();
/* =========================================================
   THEME TOGGLE
========================================================= */

(function () {

    const button =
        document.getElementById("themeToggle");

    if (!button) {
        return;
    }

    const savedTheme =
        localStorage.getItem("theme");

    if (savedTheme === "dark") {

        document.body.classList.add("dark-mode");

        button.innerHTML =
            '<i class="ri-sun-line"></i>';

    }

    button.addEventListener(
        "click",
        () => {

            document.body.classList.toggle(
                "dark-mode"
            );

            const dark =
                document.body.classList.contains(
                    "dark-mode"
                );

            localStorage.setItem(
                "theme",
                dark ? "dark" : "light"
            );

            button.innerHTML = dark
                ? '<i class="ri-sun-line"></i>'
                : '<i class="ri-moon-line"></i>';

        }
    );

})();

/* =========================================================
   SCROLL TO TOP
========================================================= */

(function () {

    const button =
        document.getElementById("scrollTop");

    if (!button) {
        return;
    }

    window.addEventListener(
        "scroll",
        () => {

            if (
                window.scrollY > 500
            ) {

                button.classList.add("show");

            }

            else {

                button.classList.remove("show");

            }

        }
    );

    button.addEventListener(
        "click",
        () => {

            window.scrollTo({

                top: 0,

                behavior: "smooth"

            });

        }
    );

})();

/* =========================================================
   STICKY HEADER
========================================================= */

(function () {

    const header =
        document.getElementById("siteHeader");

    if (!header) {
        return;
    }

    function updateHeader() {

        if (window.scrollY > 80) {

            header.classList.add("sticky");

        } else {

            header.classList.remove("sticky");

        }

    }

    updateHeader();

    window.addEventListener(
        "scroll",
        updateHeader,
        { passive: true }
    );

})();

/* =========================================================
   SMOOTH SCROLL
========================================================= */

(function () {

    document
        .querySelectorAll('a[href^="#"]')
        .forEach((link) => {

            link.addEventListener(
                "click",
                function (e) {

                    const target =
                        document.querySelector(
                            this.getAttribute("href")
                        );

                    if (!target) {
                        return;
                    }

                    e.preventDefault();

                    window.scrollTo({

                        top:
                            target.offsetTop - 80,

                        behavior: "smooth"

                    });

                }
            );

        });

})();

/* =========================================================
   ACTIVE NAVIGATION
========================================================= */

(function () {

    const sections =
        document.querySelectorAll("section[id]");

    const navLinks =
        document.querySelectorAll(
            ".nav-menu a"
        );

    if (
        sections.length === 0 ||
        navLinks.length === 0
    ) {
        return;
    }

    function updateNavigation() {

        let current = "";

        sections.forEach((section) => {

            const top =
                section.offsetTop - 120;

            const height =
                section.offsetHeight;

            if (
                window.scrollY >= top &&
                window.scrollY <
                top + height
            ) {

                current =
                    section.getAttribute("id");

            }

        });

        navLinks.forEach((link) => {

            link.classList.remove("active");

            const href =
                link.getAttribute("href");

            if (
                href &&
                href.endsWith("#" + current)
            ) {

                link.classList.add("active");

            }

        });

    }

    window.addEventListener(
        "scroll",
        updateNavigation,
        { passive: true }
    );

    updateNavigation();

})();

/* =========================================================
   BUTTON RIPPLE EFFECT
========================================================= */

(function () {

    document
        .querySelectorAll(".btn")
        .forEach((button) => {

            button.addEventListener(
                "click",
                function (e) {

                    const ripple =
                        document.createElement(
                            "span"
                        );

                    ripple.className =
                        "btn-ripple";

                    const rect =
                        this.getBoundingClientRect();

                    ripple.style.left =
                        e.clientX -
                        rect.left +
                        "px";

                    ripple.style.top =
                        e.clientY -
                        rect.top +
                        "px";

                    this.appendChild(
                        ripple
                    );

                    setTimeout(() => {

                        ripple.remove();

                    }, 600);

                }
            );

        });

})();

/* =========================================================
   IMAGE FADE-IN
========================================================= */

(function () {

    const images =
        document.querySelectorAll("img");

    images.forEach((image) => {

        image.addEventListener(
            "load",
            () => {

                image.classList.add(
                    "loaded"
                );

            }
        );

        if (image.complete) {

            image.classList.add(
                "loaded"
            );

        }

    });

})();

/* =========================================================
   REDUCED MOTION SUPPORT
========================================================= */

(function () {

    const reduceMotion =
        window.matchMedia(
            "(prefers-reduced-motion: reduce)"
        );

    if (!reduceMotion.matches) {
        return;
    }

    document.documentElement.style.scrollBehavior =
        "auto";

})();

/* =========================================================
   ESC KEY SUPPORT
========================================================= */

(function () {

    document.addEventListener(
        "keydown",
        (event) => {

            if (event.key !== "Escape") {
                return;
            }

            const search =
                document.getElementById(
                    "searchOverlay"
                );

            const mobile =
                document.getElementById(
                    "mobileMenu"
                );

            if (
                search &&
                search.classList.contains("active")
            ) {

                search.classList.remove("active");

                document.body.style.overflow = "";

            }

            if (
                mobile &&
                mobile.classList.contains("active")
            ) {

                mobile.classList.remove("active");

                document.body.style.overflow = "";

            }

        }
    );

})();

/* =========================================================
   DEBOUNCE UTILITY
========================================================= */

function debounce(fn, delay = 200) {

    let timer;

    return function (...args) {

        clearTimeout(timer);

        timer = setTimeout(() => {

            fn.apply(this, args);

        }, delay);

    };

}

/* =========================================================
   PASSIVE SCROLL OPTIMIZATION
========================================================= */

(function () {

    let ticking = false;

    window.addEventListener(

        "scroll",

        () => {

            if (ticking) {
                return;
            }

            ticking = true;

            requestAnimationFrame(() => {

                ticking = false;

            });

        },

        {
            passive: true
        }

    );

})();

/* =========================================================
   IMAGE LAZY LOADING
========================================================= */

(function () {

    const images =
        document.querySelectorAll(
            "img[loading='lazy']"
        );

    if (
        !(
            "IntersectionObserver"
            in window
        )
    ) {

        images.forEach((img) => {

            img.src = img.dataset.src || img.src;

        });

        return;

    }

    const observer =
        new IntersectionObserver(

            (entries) => {

                entries.forEach((entry) => {

                    if (
                        !entry.isIntersecting
                    ) {
                        return;
                    }

                    const img =
                        entry.target;

                    if (img.dataset.src) {

                        img.src =
                            img.dataset.src;

                    }

                    observer.unobserve(img);

                });

            },

            {
                rootMargin: "150px"
            }

        );

    images.forEach((img) => {

        observer.observe(img);

    });

})();

/* =========================================================
   GLOBAL ERROR HANDLER
========================================================= */

window.addEventListener(

    "error",

    function (event) {

        console.error(

            "[Napoleon Bikes]",

            event.message

        );

    }

);

/* =========================================================
   PAGE READY
========================================================= */

window.addEventListener(

    "load",

    () => {

        document.body.classList.add(
            "page-loaded"
        );

    }

);
