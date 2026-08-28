/* =========================================================
   BLOODCARE ADMIN DASHBOARD JS
   ========================================================= */

document.addEventListener("DOMContentLoaded", function () {

    const sidebar = document.getElementById("adminSidebar");
    const sidebarToggle = document.getElementById("sidebarToggle");
    const sidebarClose = document.getElementById("sidebarClose");
    const sidebarOverlay = document.getElementById("sidebarOverlay");


    /* =====================================================
       OPEN SIDEBAR
       ===================================================== */

    if (sidebarToggle) {

        sidebarToggle.addEventListener("click", function () {

            sidebar.classList.add("open");

            sidebarOverlay.classList.add("active");

            document.body.style.overflow = "hidden";

        });

    }


    /* =====================================================
       CLOSE SIDEBAR
       ===================================================== */

    function closeSidebar() {

        if (sidebar) {
            sidebar.classList.remove("open");
        }

        if (sidebarOverlay) {
            sidebarOverlay.classList.remove("active");
        }

        document.body.style.overflow = "";

    }


    if (sidebarClose) {

        sidebarClose.addEventListener(
            "click",
            closeSidebar
        );

    }


    if (sidebarOverlay) {

        sidebarOverlay.addEventListener(
            "click",
            closeSidebar
        );

    }


    /* =====================================================
       ESC KEY
       ===================================================== */

    document.addEventListener(
        "keydown",
        function (event) {

            if (event.key === "Escape") {

                closeSidebar();

            }

        }
    );


    /* =====================================================
       SEARCH - CTRL + K
       ===================================================== */

    const searchInput =
        document.getElementById("globalSearch");


    document.addEventListener(
        "keydown",
        function (event) {

            if (
                (event.ctrlKey || event.metaKey) &&
                event.key.toLowerCase() === "k"
            ) {

                event.preventDefault();

                if (searchInput) {

                    searchInput.focus();

                }

            }

        }
    );


    /* =====================================================
       SEARCH CLEAR
       ===================================================== */

    if (searchInput) {

        searchInput.addEventListener(
            "keydown",
            function (event) {

                if (event.key === "Escape") {

                    searchInput.value = "";

                    searchInput.blur();

                }

            }
        );

    }


    /* =====================================================
       WINDOW RESIZE
       ===================================================== */

    window.addEventListener(
        "resize",
        function () {

            if (window.innerWidth > 850) {

                closeSidebar();

            }

        }
    );


    /* =====================================================
       STAT CARD ANIMATION
       ===================================================== */

    const statCards =
        document.querySelectorAll(".stat-card");


    statCards.forEach(function (card, index) {

        card.style.opacity = "0";

        card.style.transform =
            "translateY(10px)";

        setTimeout(function () {

            card.style.transition =
                "opacity .4s ease, transform .4s ease";

            card.style.opacity = "1";

            card.style.transform =
                "translateY(0)";

        }, index * 80);

    });


});