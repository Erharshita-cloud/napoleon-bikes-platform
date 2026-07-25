/**
 * ==========================================================
 * Napoleon Bikes
 * Pricing Page JavaScript
 * ==========================================================
 */

document.addEventListener("DOMContentLoaded", () => {

    const modal = document.getElementById("bookingModal");
    const overlay = document.querySelector(".booking-modal-overlay");
    const closeBtn = document.getElementById("closeBookingModal");
    const bikeInput = document.getElementById("selectedBike");

    const bookButtons = document.querySelectorAll(".bookBtn");

    /* ==========================================
       Open Booking Modal
    ========================================== */

    function openModal(bikeName) {

        if (bikeInput) {
            bikeInput.value = bikeName;
        }

        modal.classList.add("active");

        document.body.style.overflow = "hidden";

    }

    /* ==========================================
       Close Booking Modal
    ========================================== */

    function closeModal() {

        modal.classList.remove("active");

        document.body.style.overflow = "";

    }

    /* ==========================================
       Open Buttons
    ========================================== */

    bookButtons.forEach(button => {

        button.addEventListener("click", () => {

            const bike = button.dataset.bike;

            openModal(bike);

        });

    });

    /* ==========================================
       Close Button
    ========================================== */

    if (closeBtn) {

        closeBtn.addEventListener("click", closeModal);

    }

    /* ==========================================
       Overlay Click
    ========================================== */

    if (overlay) {

        overlay.addEventListener("click", closeModal);

    }

    /* ==========================================
       ESC Key
    ========================================== */

    document.addEventListener("keydown", e => {

        if (e.key === "Escape") {

            closeModal();

        }

    });

    /* ==========================================
       Booking Form Validation
    ========================================== */

    const bookingForm = document.querySelector(".booking-modal form");

    if (bookingForm) {

        bookingForm.addEventListener("submit", function (e) {

            const name = this.querySelector("input[name='name']");
            const email = this.querySelector("input[name='email']");
            const phone = this.querySelector("input[name='phone']");
            const date = this.querySelector("input[name='preferred_date']");
            const time = this.querySelector("select[name='preferred_time']");

            if (
                !name.value.trim() ||
                !email.value.trim() ||
                !phone.value.trim() ||
                !date.value ||
                !time.value
            ) {

                e.preventDefault();

                alert("Please complete all required fields.");

                return;

            }

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(email.value)) {

                e.preventDefault();

                alert("Please enter a valid email address.");

                return;

            }

            const phoneRegex = /^[0-9+\-\s]{10,15}$/;

            if (!phoneRegex.test(phone.value)) {

                e.preventDefault();

                alert("Please enter a valid phone number.");

                return;

            }

        });

    }

    /* ==========================================
       Highlight Current Bike
    ========================================== */

    document.querySelectorAll(".pricing-card").forEach(card => {

        card.addEventListener("mouseenter", () => {

            card.classList.add("active-card");

        });

        card.addEventListener("mouseleave", () => {

            card.classList.remove("active-card");

        });

    });

});
