/**
 * =========================================================
 * Napoleon Bikes Platform
 * Main JavaScript
 * =========================================================
 */

'use strict';


/* =========================================================
   RUN AFTER HTML IS FULLY LOADED
========================================================= */

document.addEventListener('DOMContentLoaded', () => {

    initFAQ();

    initStatisticsCounter();

    initHeroSlider();

});


/* =========================================================
   FAQ ACCORDION
========================================================= */

function initFAQ() {

    const faqItems = document.querySelectorAll(
        '.faq-item'
    );


    if (faqItems.length === 0) {
        return;
    }


    faqItems.forEach((item) => {

        const button = item.querySelector(
            '.faq-question'
        );

        const answer = item.querySelector(
            '.faq-answer'
        );


        if (!button || !answer) {
            return;
        }


        /*
        Set initial state
        */

        if (
            item.classList.contains(
                'active'
            )
        ) {

            answer.style.maxHeight =
                answer.scrollHeight + 'px';

            button.setAttribute(
                'aria-expanded',
                'true'
            );

        } else {

            answer.style.maxHeight =
                '0px';

            button.setAttribute(
                'aria-expanded',
                'false'
            );

        }


        /*
        FAQ click event
        */

        button.addEventListener(
            'click',
            () => {

                const isActive =
                    item.classList.contains(
                        'active'
                    );


                /*
                Close every FAQ
                */

                faqItems.forEach((faq) => {

                    faq.classList.remove(
                        'active'
                    );


                    const faqButton =
                        faq.querySelector(
                            '.faq-question'
                        );


                    const faqAnswer =
                        faq.querySelector(
                            '.faq-answer'
                        );


                    if (faqButton) {

                        faqButton.setAttribute(
                            'aria-expanded',
                            'false'
                        );

                    }


                    if (faqAnswer) {

                        faqAnswer.style.maxHeight =
                            '0px';

                    }

                });


                /*
                Open selected FAQ
                */

                if (!isActive) {

                    item.classList.add(
                        'active'
                    );


                    button.setAttribute(
                        'aria-expanded',
                        'true'
                    );


                    answer.style.maxHeight =
                        answer.scrollHeight +
                        'px';

                }

            }
        );

    });

}


/* =========================================================
   STATISTICS COUNTER
========================================================= */

function initStatisticsCounter() {

    const counters = document.querySelectorAll(
        '.counter'
    );


    if (counters.length === 0) {
        return;
    }


    /*
    Browser fallback
    */

    if (
        !(
            'IntersectionObserver'
            in window
        )
    ) {

        counters.forEach(
            setCounterFinalValue
        );

        return;

    }


    const counterObserver =
        new IntersectionObserver(

            (entries) => {

                entries.forEach(
                    (entry) => {

                        if (
                            !entry.isIntersecting
                        ) {
                            return;
                        }


                        animateCounter(
                            entry.target
                        );


                        counterObserver.unobserve(
                            entry.target
                        );

                    }
                );

            },

            {
                threshold: 0.45
            }

        );


    counters.forEach(
        (counter) => {

            counterObserver.observe(
                counter
            );

        }
    );

}


/* =========================================================
   ANIMATE COUNTER
========================================================= */

function animateCounter(counter) {

    const target = Number(
        counter.dataset.target
    );


    if (
        Number.isNaN(target)
    ) {
        return;
    }


    const duration = 1800;

    const startTime =
        performance.now();


    function updateCounter(
        currentTime
    ) {

        const elapsed =
            currentTime -
            startTime;


        const progress =
            Math.min(
                elapsed / duration,
                1
            );


        const easedProgress =

            1 -

            Math.pow(
                1 - progress,
                3
            );


        const currentValue =

            Math.floor(
                target *
                easedProgress
            );


        counter.textContent =

            currentValue.toLocaleString(
                'en-IN'
            );


        if (
            progress < 1
        ) {

            requestAnimationFrame(
                updateCounter
            );

        } else {

            counter.textContent =

                target.toLocaleString(
                    'en-IN'
                ) + '+';

        }

    }


    requestAnimationFrame(
        updateCounter
    );

}


/* =========================================================
   COUNTER FALLBACK
========================================================= */

function setCounterFinalValue(
    counter
) {

    const target = Number(
        counter.dataset.target
    );


    if (
        Number.isNaN(target)
    ) {
        return;
    }


    counter.textContent =

        target.toLocaleString(
            'en-IN'
        ) + '+';

}


/* =========================================================
   NAPOLEON HORIZONTAL HERO SLIDER
========================================================= */

function initHeroSlider() {

    const hero = document.querySelector(
        '.hero-horizontal'
    );


    const sliderWindow =
        document.querySelector(
            '.hero-slider-window'
        );


    const sliderTrack =
        document.getElementById(
            'hero-slider-track'
        );


    const slides =
        Array.from(
            document.querySelectorAll(
                '.hero-bike-slide'
            )
        );


    const indicators =
        Array.from(
            document.querySelectorAll(
                '.hero-slider-indicator'
            )
        );


    const previousButton =
        document.getElementById(
            'hero-prev'
        );


    const nextButton =
        document.getElementById(
            'hero-next'
        );


    const currentNumber =
        document.getElementById(
            'hero-current-slide'
        );


    const eyebrow =
        document.getElementById(
            'hero-eyebrow'
        );


    const titleMain =
        document.querySelector(
            '.hero-title-main'
        );


    const titleHighlight =
        document.querySelector(
            '.hero-title-highlight'
        );


    const description =
        document.getElementById(
            'hero-description'
        );


    /*
    Stop safely if hero is unavailable
    */

    if (
        !hero ||
        !sliderWindow ||
        !sliderTrack ||
        slides.length === 0
    ) {

        return;

    }


    /*
    Hero content
    The order matches hero.php
    */

    const heroContent = [

        {

            eyebrow:
                'NEXT GENERATION MOTORCYCLES',

            title:
                'Ride Beyond',

            highlight:
                'Limits',

            description:
                'Discover premium motorcycles engineered with advanced technology, powerful performance, and unmatched comfort for every journey.'

        },

        {

            eyebrow:
                'BUILT FOR PURE PERFORMANCE',

            title:
                'Own Every',

            highlight:
                'Curve',

            description:
                'Experience responsive handling, powerful acceleration, and track-inspired performance designed for riders who demand more.'

        },

        {

            eyebrow:
                'ENGINEERED FOR THE OPEN ROAD',

            title:
                'Chase New',

            highlight:
                'Horizons',

            description:
                'Go beyond the city with adventure-ready capability, long-distance comfort, and confidence on every road.'

        }

    ];


    let currentSlide = 0;

    let autoSlideTimer = null;

    let textTimer = null;


    const slideDuration = 6000;


    /* =====================================================
       UPDATE HERO TEXT
    ===================================================== */

    function updateHeroText(
        index
    ) {

        const content =
            heroContent[index];


        if (!content) {
            return;
        }


        const textElements = [

            eyebrow,

            titleMain,

            titleHighlight,

            description

        ].filter(
            Boolean
        );


        textElements.forEach(
            (element) => {

                element.style.opacity =
                    '0';

                element.style.transform =
                    'translateY(10px)';

            }
        );


        if (textTimer) {

            window.clearTimeout(
                textTimer
            );

        }


        textTimer =
            window.setTimeout(

                () => {

                    if (eyebrow) {

                        eyebrow.innerHTML =

                            '<i class="ri-flashlight-fill"></i>' +

                            content.eyebrow;

                    }


                    if (titleMain) {

                        titleMain.textContent =

                            content.title;

                    }


                    if (titleHighlight) {

                        titleHighlight.textContent =

                            content.highlight;

                    }


                    if (description) {

                        description.textContent =

                            content.description;

                    }


                    textElements.forEach(
                        (element) => {

                            element.style.opacity =
                                '1';

                            element.style.transform =
                                'translateY(0)';

                        }
                    );

                },

                220

            );

    }


    /* =====================================================
       MOVE HORIZONTAL SLIDER
    ===================================================== */

    function moveSlider() {

        const activeSlide =
            slides[currentSlide];


        if (!activeSlide) {
            return;
        }


        const windowCenter =

            sliderWindow.clientWidth /
            2;


        const slideCenter =

            activeSlide.offsetLeft +

            (
                activeSlide.offsetWidth /
                2
            );


        let position =

            windowCenter -

            slideCenter;


        const maximumPosition = 0;


        const minimumPosition =

            Math.min(

                0,

                sliderWindow.clientWidth -

                sliderTrack.scrollWidth

            );


        position =

            Math.min(

                maximumPosition,

                Math.max(

                    minimumPosition,

                    position

                )

            );


        sliderTrack.style.transform =

            `translate3d(${position}px, 0, 0)`;


        /*
        Update active motorcycle
        */

        slides.forEach(
            (
                slide,
                index
            ) => {

                slide.classList.toggle(

                    'is-active',

                    index ===
                    currentSlide

                );

            }
        );


        /*
        Update indicators
        */

        indicators.forEach(
            (
                indicator,
                index
            ) => {

                indicator.classList.toggle(

                    'is-active',

                    index ===
                    currentSlide

                );

            }
        );


        /*
        Update current number
        */

        if (currentNumber) {

            currentNumber.textContent =

                String(
                    currentSlide + 1
                ).padStart(
                    2,
                    '0'
                );

        }


        updateHeroText(
            currentSlide
        );

    }


    /* =====================================================
       SHOW SLIDE
    ===================================================== */

    function showSlide(
        index
    ) {

        currentSlide =

            (
                index +
                slides.length
            ) %

            slides.length;


        moveSlider();

    }


    /* =====================================================
       AUTO SLIDESHOW
    ===================================================== */

    function stopAutoSlide() {

        if (
            autoSlideTimer !== null
        ) {

            window.clearInterval(
                autoSlideTimer
            );


            autoSlideTimer = null;

        }

    }


    function startAutoSlide() {

        stopAutoSlide();


        if (
            slides.length <= 1
        ) {
            return;
        }


        autoSlideTimer =

            window.setInterval(

                () => {

                    showSlide(
                        currentSlide + 1
                    );

                },

                slideDuration

            );

    }


    /* =====================================================
       BUTTON CONTROLS
    ===================================================== */

    if (nextButton) {

        nextButton.addEventListener(

            'click',

            () => {

                showSlide(
                    currentSlide + 1
                );


                startAutoSlide();

            }

        );

    }


    if (previousButton) {

        previousButton.addEventListener(

            'click',

            () => {

                showSlide(
                    currentSlide - 1
                );


                startAutoSlide();

            }

        );

    }


    /* =====================================================
       INDICATOR CONTROLS
    ===================================================== */

    indicators.forEach(

        (
            indicator,
            index
        ) => {

            indicator.addEventListener(

                'click',

                () => {

                    showSlide(
                        index
                    );


                    startAutoSlide();

                }

            );

        }

    );


    /* =====================================================
       PAUSE ON HOVER
    ===================================================== */

    hero.addEventListener(

        'mouseenter',

        stopAutoSlide

    );


    hero.addEventListener(

        'mouseleave',

        startAutoSlide

    );


    /* =====================================================
       PAUSE WHEN TAB IS HIDDEN
    ===================================================== */

    document.addEventListener(

        'visibilitychange',

        () => {

            if (
                document.hidden
            ) {

                stopAutoSlide();

            } else {

                startAutoSlide();

            }

        }

    );


    /* =====================================================
       KEYBOARD CONTROLS
    ===================================================== */

    document.addEventListener(

        'keydown',

        (event) => {

            if (
                event.key ===
                'ArrowRight'
            ) {

                showSlide(
                    currentSlide + 1
                );


                startAutoSlide();

            }


            if (
                event.key ===
                'ArrowLeft'
            ) {

                showSlide(
                    currentSlide - 1
                );


                startAutoSlide();

            }

        }

    );


    /* =====================================================
       RESPONSIVE RECENTER
    ===================================================== */

    let resizeTimer = null;


    window.addEventListener(

        'resize',

        () => {

            window.clearTimeout(
                resizeTimer
            );


            resizeTimer =

                window.setTimeout(

                    moveSlider,

                    150

                );

        }

    );


    /*
    Start slider
    */

    showSlide(
        currentSlide
    );


    startAutoSlide();

}
