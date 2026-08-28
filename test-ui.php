<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>BloodCare UI Test</title>


    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >

    <link
        rel="stylesheet"
        href="assets/css/form.css"
    >

    <link
        rel="stylesheet"
        href="assets/css/table.css"
    >

    <link
        rel="stylesheet"
        href="assets/css/popup.css"
    >

</head>


<body>


<div class="form-page">


    <div class="form-container">


        <div class="form-header">

            <div class="form-header-left">

                <div class="form-breadcrumb">

                    <a href="#">
                        Dashboard
                    </a>

                    <i class="bi bi-chevron-right"></i>

                    <span>
                        Add Donor
                    </span>

                </div>


                <h1>
                    Add New Donor
                </h1>

                <p>
                    Register a new blood donor into the system.
                </p>

            </div>


            <button
                class="form-btn form-btn-secondary"
                onclick="showToast(
                    'Saved Successfully',
                    'Donor information has been saved.'
                )"
            >

                <i class="bi bi-check2"></i>

                Test Toast

            </button>

        </div>



        <div class="form-card">


            <div class="form-card-header">

                <div class="form-card-icon">

                    <i class="bi bi-person-plus"></i>

                </div>

                <div>

                    <h3>
                        Personal Information
                    </h3>

                    <p>
                        Basic donor information
                    </p>

                </div>

            </div>


            <div class="form-card-body">


                <div class="form-grid">


                    <div class="form-group">

                        <label class="form-label">
                            Full Name <span>*</span>
                        </label>

                        <div class="input-icon-wrapper">

                            <i class="bi bi-person"></i>

                            <input
                                class="form-control"
                                type="text"
                                placeholder="Enter full name"
                            >

                        </div>

                    </div>


                    <div class="form-group">

                        <label class="form-label">
                            Phone Number <span>*</span>
                        </label>

                        <div class="input-icon-wrapper">

                            <i class="bi bi-telephone"></i>

                            <input
                                class="form-control"
                                type="text"
                                placeholder="01XXXXXXXXX"
                            >

                        </div>

                    </div>


                    <div class="form-group">

                        <label class="form-label">
                            District
                        </label>

                        <select class="form-select">

                            <option>
                                Select District
                            </option>

                            <option>
                                Dhaka
                            </option>

                            <option>
                                Sylhet
                            </option>

                            <option>
                                Chittagong
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label class="form-label">
                            Age
                        </label>

                        <input
                            class="form-control"
                            type="number"
                            placeholder="Enter age"
                        >

                    </div>


                </div>


                <br>


                <div class="form-group">

                    <label class="form-label">
                        Blood Group
                    </label>


                    <div class="blood-group-grid">


                        <label class="blood-group-option">

                            <input
                                type="radio"
                                name="blood"
                            >

                            <div class="blood-group-card">

                                <strong>
                                    A+
                                </strong>

                                <span>
                                    Positive
                                </span>

                            </div>

                        </label>


                        <label class="blood-group-option">

                            <input
                                type="radio"
                                name="blood"
                            >

                            <div class="blood-group-card">

                                <strong>
                                    A-
                                </strong>

                                <span>
                                    Negative
                                </span>

                            </div>

                        </label>


                        <label class="blood-group-option">

                            <input
                                type="radio"
                                name="blood"
                            >

                            <div class="blood-group-card">

                                <strong>
                                    B+
                                </strong>

                                <span>
                                    Positive
                                </span>

                            </div>

                        </label>


                        <label class="blood-group-option">

                            <input
                                type="radio"
                                name="blood"
                            >

                            <div class="blood-group-card">

                                <strong>
                                    O+
                                </strong>

                                <span>
                                    Positive
                                </span>

                            </div>

                        </label>


                    </div>

                </div>


            </div>


            <div class="form-actions">

                <button
                    class="form-btn form-btn-secondary"
                >

                    Cancel

                </button>


                <button
                    class="form-btn form-btn-primary"
                    onclick="showToast(
                        'Donor Added',
                        'The donor has been added successfully.'
                    )"
                >

                    <i class="bi bi-check-lg"></i>

                    Save Donor

                </button>

            </div>


        </div>



        <div class="form-card">


            <div class="form-card-header">

                <div class="form-card-icon">

                    <i class="bi bi-image"></i>

                </div>

                <div>

                    <h3>
                        Donor Photo
                    </h3>

                    <p>
                        Upload profile picture
                    </p>

                </div>

            </div>


            <div class="form-card-body">


                <label class="file-upload">

                    <i class="bi bi-cloud-arrow-up"></i>

                    <strong>
                        Click to upload
                    </strong>

                    <span>
                        PNG, JPG or JPEG up to 2MB
                    </span>

                    <input type="file">

                </label>


            </div>


        </div>


    </div>

</div>



<!-- =====================================================
     PROFILE POPUP
     ===================================================== -->

<div
    class="popup-overlay"
    id="donorProfilePopup"
>

    <div class="popup-modal profile-popup">


        <div class="profile-cover">

            <img
                src="assets/images/default-user.png"
                class="profile-avatar-large"
                alt="Donor"
            >

        </div>


        <div class="profile-popup-content">

            <div class="profile-name">

                <h3>
                    Rahim Ahmed
                </h3>

                <i class="bi bi-patch-check-fill profile-verified"></i>

            </div>


            <div class="profile-role">
                Active Blood Donor
            </div>


            <div class="profile-stats">


                <div class="profile-stat">

                    <strong>
                        O+
                    </strong>

                    <span>
                        Blood Group
                    </span>

                </div>


                <div class="profile-stat">

                    <strong>
                        8
                    </strong>

                    <span>
                        Donations
                    </span>

                </div>


                <div class="profile-stat">

                    <strong>
                        Active
                    </strong>

                    <span>
                        Availability
                    </span>

                </div>


            </div>


            <div class="profile-info-grid">


                <div class="profile-info-item">

                    <span>
                        Phone
                    </span>

                    <strong>
                        01XXXXXXXXX
                    </strong>

                </div>


                <div class="profile-info-item">

                    <span>
                        District
                    </span>

                    <strong>
                        Dhaka
                    </strong>

                </div>


                <div class="profile-info-item">

                    <span>
                        Age
                    </span>

                    <strong>
                        24 Years
                    </strong>

                </div>


                <div class="profile-info-item">

                    <span>
                        Last Donation
                    </span>

                    <strong>
                        12 August 2026
                    </strong>

                </div>


            </div>


        </div>


        <div class="popup-footer">

            <button
                class="form-btn form-btn-secondary"
                onclick="closePopup('donorProfilePopup')"
            >
                Close
            </button>

        </div>


    </div>

</div>



<!-- =====================================================
     DELETE POPUP
     ===================================================== -->

<div
    class="popup-overlay"
    id="deletePopup"
>

    <div class="popup-modal confirm-popup">


        <div class="confirm-icon">

            <i class="bi bi-trash3"></i>

        </div>


        <h3>
            Delete Donor?
        </h3>


        <p>

            Are you sure you want to delete this donor?
            This action cannot be undone.

        </p>


        <div class="popup-footer">

            <button
                class="form-btn form-btn-secondary"
                onclick="closePopup('deletePopup')"
            >
                Cancel
            </button>


            <button
                class="form-btn form-btn-danger"
                onclick="
                    closePopup('deletePopup');
                    showToast(
                        'Deleted',
                        'Donor has been removed.'
                    );
                "
            >

                Delete

            </button>

        </div>


    </div>

</div>



<script src="assets/js/popup.js"></script>


</body>

</html>