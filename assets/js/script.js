/* =========================================================
   BLOODCARE GLOBAL JAVASCRIPT
   ========================================================= */


/* =========================================================
   PAGE LOADED
   ========================================================= */

document.addEventListener("DOMContentLoaded", function () {


    /* =====================================================
       AUTO HIDE ALERT
       ===================================================== */

    const alerts =
        document.querySelectorAll(
            ".alert[data-auto-hide]"
        );


    alerts.forEach(function (alert) {

        setTimeout(function () {

            alert.style.opacity = "0";

            alert.style.transform =
                "translateY(-5px)";

            setTimeout(function () {

                alert.remove();

            }, 300);

        }, 4000);

    });


    /* =====================================================
       PASSWORD TOGGLE
       ===================================================== */

    const passwordToggles =
        document.querySelectorAll(".password-toggle");


    passwordToggles.forEach(function (toggle) {

        toggle.addEventListener("click", function () {

            const input =
                document.querySelector(
                    toggle.dataset.target
                );


            if (!input) return;


            if (input.type === "password") {

                input.type = "text";

                toggle.classList.remove(
                    "bi-eye"
                );

                toggle.classList.add(
                    "bi-eye-slash"
                );

            } else {

                input.type = "password";

                toggle.classList.remove(
                    "bi-eye-slash"
                );

                toggle.classList.add(
                    "bi-eye"
                );

            }

        });

    });


});