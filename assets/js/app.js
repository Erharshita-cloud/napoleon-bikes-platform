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
