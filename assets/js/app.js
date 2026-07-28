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
        -----------------------------------------------------
        SET INITIAL FAQ STATE
        -----------------------------------------------------
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
                null;

            button.setAttribute(
                'aria-expanded',
                'false'
            );

        }


        /*
        -----------------------------------------------------
        FAQ CLICK EVENT
        -----------------------------------------------------
        */

        button.addEventListener(
            'click',
            () => {

                const isActive =
                    item.classList.contains(
                        'active'
                    );


                /*
                Close all FAQ items
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
                            null;

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


    /*
    Do nothing if no counters exist
    */

    if (counters.length === 0) {
        return;
    }


    /*
    Check browser support
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


    /*
    Watch counters
    */

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


/*
---------------------------------------------------------
ANIMATE SINGLE COUNTER
---------------------------------------------------------
*/

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


        /*
        Smooth animation
        */

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

        }

        else {

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


/*
---------------------------------------------------------
FALLBACK COUNTER VALUE
---------------------------------------------------------
*/

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
   HERO BACKGROUND SLIDESHOW
========================================================= */

function initHeroSlider() {

    const hero = document.querySelector(
        '.hero'
    );


    const slides =
        document.querySelectorAll(
            '.hero-background-slide'
        );


    const indicators =
        document.querySelectorAll(
            '.hero-slider-indicator'
        );


    const previousButton =
        document.getElementById(
            'hero-prev'
        );


    const nextButton =
        document.getElementById(
            'hero-next'
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
    -----------------------------------------------------
    STOP IF HERO DOES NOT EXIST
    -----------------------------------------------------
    */

    if (
        !hero ||
        slides.length === 0
    ) {
        return;
    }


    /*
    -----------------------------------------------------
    HERO CONTENT

    IMPORTANT:

    The order must match the order of images
    in hero.php.
    -----------------------------------------------------
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
                'Experience track-inspired performance, responsive handling, and thrilling power designed for riders who demand more.'

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


    /*
    -----------------------------------------------------
    SETTINGS
    -----------------------------------------------------
    */

    let currentSlide = 0;

    let autoSlideTimer = null;

    const slideDuration = 6000;

    const textTransitionDuration = 220;


    /*
    -----------------------------------------------------
    FIND CURRENT ACTIVE SLIDE
    -----------------------------------------------------
    */

    slides.forEach(
        (slide, index) => {

            if (
                slide.classList.contains(
                    'is-active'
                )
            ) {

                currentSlide = index;

            }

        }
    );


    /*
    -----------------------------------------------------
    UPDATE HERO TEXT
    -----------------------------------------------------
    */

    function updateHeroText(
        index
    ) {

        const content =
            heroContent[index];


        if (!content) {
            return;
        }


        /*
        Fade out
        */

        if (eyebrow) {

            eyebrow.style.opacity =
                '0';

            eyebrow.style.transform =
                'translateY(8px)';

        }


        if (titleMain) {

            titleMain.style.opacity =
                '0';

            titleMain.style.transform =
                'translateY(10px)';

        }


        if (titleHighlight) {

            titleHighlight.style.opacity =
                '0';

            titleHighlight.style.transform =
                'translateY(10px)';

        }


        if (description) {

            description.style.opacity =
                '0';

            description.style.transform =
                'translateY(8px)';

        }


        /*
        Change text
        */

        window.setTimeout(
            () => {

                if (eyebrow) {

                    eyebrow.innerHTML = `

                        <i
                            class="ri-flashlight-fill"
                        ></i>

                        ${content.eyebrow}

                    `;

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


                /*
                Fade in
                */

                if (eyebrow) {

                    eyebrow.style.opacity =
                        '1';

                    eyebrow.style.transform =
                        'translateY(0)';

                }


                if (titleMain) {

                    titleMain.style.opacity =
                        '1';

                    titleMain.style.transform =
                        'translateY(0)';

                }


                if (titleHighlight) {

                    titleHighlight.style.opacity =
                        '1';

                    titleHighlight.style.transform =
                        'translateY(0)';

                }


                if (description) {

                    description.style.opacity =
                        '1';

                    description.style.transform =
                        'translateY(0)';

                }

            },

            textTransitionDuration

        );

    }


    /*
    -----------------------------------------------------
    SHOW SELECTED SLIDE
    -----------------------------------------------------
    */

    function showSlide(
        index
    ) {

        /*
        Keep index inside range
        */

        if (
            index >=
            slides.length
        ) {

            currentSlide = 0;

        }

        else if (
            index < 0
        ) {

            currentSlide =
                slides.length - 1;

        }

        else {

            currentSlide = index;

        }


        /*
        Update images
        */

        slides.forEach(
            (slide, slideIndex) => {

                slide.classList.toggle(

                    'is-active',

                    slideIndex ===
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
                indicatorIndex
            ) => {

                indicator.classList.toggle(

                    'is-active',

                    indicatorIndex ===
                    currentSlide

                );

            }
        );


        /*
        Update text
        */

        updateHeroText(
            currentSlide
        );

    }


    /*
    -----------------------------------------------------
    NEXT SLIDE
    -----------------------------------------------------
    */

    function nextSlide() {

        showSlide(
            currentSlide + 1
        );

    }


    /*
    -----------------------------------------------------
    PREVIOUS SLIDE
    -----------------------------------------------------
    */

    function previousSlide() {

        showSlide(
            currentSlide - 1
        );

    }


    /*
    -----------------------------------------------------
    STOP AUTO SLIDER
    -----------------------------------------------------
    */

    function stopAutoSlide() {

        if (
            autoSlideTimer
        ) {

            window.clearInterval(
                autoSlideTimer
            );

            autoSlideTimer =
                null;

        }

    }


    /*
    -----------------------------------------------------
    START AUTO SLIDER
    -----------------------------------------------------
    */

    function startAutoSlide() {

        /*
        Prevent multiple timers
        */

        stopAutoSlide();


        if (
            slides.length <= 1
        ) {
            return;
        }


        autoSlideTimer =
            window.setInterval(

                nextSlide,

                slideDuration

            );

    }


    /*
    -----------------------------------------------------
    NEXT BUTTON
    -----------------------------------------------------
    */

    if (
        nextButton
    ) {

        nextButton.addEventListener(

            'click',

            () => {

                nextSlide();

                startAutoSlide();

            }

        );

    }


    /*
    -----------------------------------------------------
    PREVIOUS BUTTON
    -----------------------------------------------------
    */

    if (
        previousButton
    ) {

        previousButton.addEventListener(

            'click',

            () => {

                previousSlide();

                startAutoSlide();

            }

        );

    }


    /*
    -----------------------------------------------------
    SLIDE INDICATORS
    -----------------------------------------------------
    */

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


    /*
    -----------------------------------------------------
    PAUSE ON HOVER
    -----------------------------------------------------
    */

    hero.addEventListener(

        'mouseenter',

        stopAutoSlide

    );


    hero.addEventListener(

        'mouseleave',

        startAutoSlide

    );


    /*
    -----------------------------------------------------
    PAUSE WHEN TAB IS NOT ACTIVE
    -----------------------------------------------------
    */

    document.addEventListener(

        'visibilitychange',

        () => {

            if (
                document.hidden
            ) {

                stopAutoSlide();

            }

            else {

                startAutoSlide();

            }

        }

    );


    /*
    -----------------------------------------------------
    KEYBOARD CONTROLS

    Left Arrow  → Previous slide
    Right Arrow → Next slide
    -----------------------------------------------------
    */

    document.addEventListener(

        'keydown',

        (event) => {

            if (
                event.key ===
                'ArrowRight'
            ) {

                nextSlide();

                startAutoSlide();

            }


            if (
                event.key ===
                'ArrowLeft'
            ) {

                previousSlide();

                startAutoSlide();

            }

        }

    );


    /*
    -----------------------------------------------------
    START HERO
    -----------------------------------------------------
    */

    showSlide(
        currentSlide
    );


    startAutoSlide();

}
