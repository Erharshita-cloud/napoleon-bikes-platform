/**
 * =========================================================
 * Napoleon Bikes Platform
 * Main JavaScript
 * =========================================================
 */

document.addEventListener('DOMContentLoaded', () => {

    initFAQ();

});

/* =========================================================
   FAQ Accordion
========================================================= */

function initFAQ() {

    const faqItems = document.querySelectorAll('.faq-item');

    if (faqItems.length === 0) {
        return;
    }

    faqItems.forEach((item) => {

        const button = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');

        if (!button || !answer) {
            return;
        }

        if (item.classList.contains('active')) {

            answer.style.maxHeight = answer.scrollHeight + 'px';
            button.setAttribute('aria-expanded', 'true');

        } else {

            answer.style.maxHeight = null;
            button.setAttribute('aria-expanded', 'false');

        }

        button.addEventListener('click', () => {

            const isActive = item.classList.contains('active');

            faqItems.forEach((faq) => {

                faq.classList.remove('active');

                const faqButton = faq.querySelector('.faq-question');
                const faqAnswer = faq.querySelector('.faq-answer');

                if (faqButton) {
                    faqButton.setAttribute('aria-expanded', 'false');
                }

                if (faqAnswer) {
                    faqAnswer.style.maxHeight = null;
                }

            });

            if (!isActive) {

                item.classList.add('active');

                button.setAttribute('aria-expanded', 'true');

                answer.style.maxHeight = answer.scrollHeight + 'px';

            }

        });

    });

}

/*=========================================
  Statistics Counter
=========================================*/

const counters = document.querySelectorAll('.counter');

const counterObserver = new IntersectionObserver((entries) => {

    entries.forEach(entry => {

        if (!entry.isIntersecting) return;

        const counter = entry.target;

        const target = +counter.dataset.target;

        let count = 0;

        const speed = target / 120;

        const updateCounter = () => {

            count += speed;

            if (count < target) {

                counter.innerText = Math.floor(count).toLocaleString();

                requestAnimationFrame(updateCounter);

            } else {

                counter.innerText = target.toLocaleString() + '+';

            }

        };

        updateCounter();

        counterObserver.unobserve(counter);

    });

}, {

    threshold:0.5

});

counters.forEach(counter=>counterObserver.observe(counter));
