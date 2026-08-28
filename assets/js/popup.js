/* =========================================================
   BLOODCARE
   POPUP / MODAL SYSTEM
   ========================================================= */


/* =========================================================
   OPEN POPUP
   ========================================================= */

function openPopup(popupId) {

    const popup = document.getElementById(popupId);

    if (!popup) return;

    popup.classList.add("active");

    document.body.style.overflow = "hidden";
}


/* =========================================================
   CLOSE POPUP
   ========================================================= */

function closePopup(popupId) {

    const popup = document.getElementById(popupId);

    if (!popup) return;

    popup.classList.remove("active");

    document.body.style.overflow = "";
}


/* =========================================================
   CLOSE ALL POPUPS
   ========================================================= */

function closeAllPopups() {

    document
        .querySelectorAll(".popup-overlay.active")
        .forEach(function(popup) {

            popup.classList.remove("active");

        });

    document.body.style.overflow = "";
}


/* =========================================================
   CLICK OUTSIDE MODAL
   ========================================================= */

document.addEventListener("click", function(event) {

    if (
        event.target.classList.contains("popup-overlay")
    ) {

        event.target.classList.remove("active");

        document.body.style.overflow = "";

    }

});


/* =========================================================
   ESC KEY
   ========================================================= */

document.addEventListener("keydown", function(event) {

    if (event.key === "Escape") {

        closeAllPopups();

    }

});


/* =========================================================
   CONFIRM DELETE
   ========================================================= */

function confirmDelete(
    popupId,
    itemName = "this item"
) {

    const popup = document.getElementById(popupId);

    if (!popup) return;

    const nameElement =
        popup.querySelector("[data-delete-name]");

    if (nameElement) {

        nameElement.textContent = itemName;

    }

    openPopup(popupId);
}


/* =========================================================
   TOAST
   ========================================================= */

function showToast(
    title,
    message,
    icon = "bi-check-circle-fill"
) {

    let container =
        document.querySelector(".toast-container");


    if (!container) {

        container =
            document.createElement("div");

        container.className =
            "toast-container";

        document.body.appendChild(container);

    }


    const toast =
        document.createElement("div");

    toast.className = "toast";


    toast.innerHTML = `

        <div class="toast-icon">

            <i class="bi ${icon}"></i>

        </div>

        <div class="toast-content">

            <strong>${title}</strong>

            <span>${message}</span>

        </div>

    `;


    container.appendChild(toast);


    setTimeout(function() {

        toast.style.opacity = "0";

        toast.style.transform =
            "translateX(30px)";

        setTimeout(function() {

            toast.remove();

        }, 300);

    }, 3500);

}


/* =========================================================
   AUTO CLOSE TOAST
   ========================================================= */

document.addEventListener("click", function(event) {

    const toast =
        event.target.closest(".toast");

    if (toast) {

        toast.remove();

    }

});