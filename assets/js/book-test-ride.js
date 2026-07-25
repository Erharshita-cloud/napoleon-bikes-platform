/**
 * ==========================================================
 * Napoleon Bikes
 * Book Test Ride
 * ==========================================================
 */

document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("bookingForm");

    if (!form) return;

    /* ==========================================
       Minimum Date = Today
    ========================================== */

    const dateInput = form.querySelector("input[name='preferred_date']");

    if (dateInput) {

        const today = new Date();

        const yyyy = today.getFullYear();

        const mm = String(today.getMonth() + 1).padStart(2, "0");

        const dd = String(today.getDate()).padStart(2, "0");

        dateInput.min = `${yyyy}-${mm}-${dd}`;

    }

    /* ==========================================
       Form Validation
    ========================================== */

    form.addEventListener("submit", function (e) {

        const name = form.querySelector("input[name='name']");
        const email = form.querySelector("input[name='email']");
        const phone = form.querySelector("input[name='phone']");
        const bike = form.querySelector("select[name='bike']");
        const date = form.querySelector("input[name='preferred_date']");
        const time = form.querySelector("select[name='preferred_time']");

        if (
            !name.value.trim() ||
            !email.value.trim() ||
            !phone.value.trim() ||
            !bike.value ||
            !date.value ||
            !time.value
        ) {

            e.preventDefault();

            alert("Please complete all required fields.");

            return;

        }

        const emailRegex =
            /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailRegex.test(email.value)) {

            e.preventDefault();

            alert("Please enter a valid email address.");

            email.focus();

            return;

        }

        const phoneRegex =
            /^[0-9+\-\s]{10,15}$/;

        if (!phoneRegex.test(phone.value)) {

            e.preventDefault();

            alert("Please enter a valid phone number.");

            phone.focus();

            return;

        }

        const submitBtn =
            form.querySelector("button[type='submit']");

        submitBtn.disabled = true;

        submitBtn.innerHTML =
            '<i class="ri-loader-4-line ri-spin"></i> Booking...';

    });

    /* ==========================================
       Phone Number Formatting
    ========================================== */

    const phoneInput =
        form.querySelector("input[name='phone']");

    if (phoneInput) {

        phoneInput.addEventListener("input", () => {

            phoneInput.value =
                phoneInput.value.replace(/[^0-9+\-\s]/g, "");

        });

    }

    /* ==========================================
       Auto Capitalize Name
    ========================================== */

    const nameInput =
        form.querySelector("input[name='name']");

    if (nameInput) {

        nameInput.addEventListener("blur", () => {

            nameInput.value =
                nameInput.value
                    .toLowerCase()
                    .replace(/\b\w/g, c => c.toUpperCase());

        });

    }

    /* ==========================================
       Fade-in Animation
    ========================================== */

    const animatedElements =
        document.querySelectorAll(
            ".booking-form-card,.dealer-card,.process-card,.info-item"
        );

    const observer =
        new IntersectionObserver(entries => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    entry.target.classList.add("visible");

                }

            });

        }, {
            threshold: 0.15
        });

    animatedElements.forEach(el => observer.observe(el));

});
