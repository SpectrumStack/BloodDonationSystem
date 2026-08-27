<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Blood Request | BloodCare</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link
    rel="stylesheet"
    href="../assets/css/style.css"
>

<link
    rel="stylesheet"
    href="../assets/css/dashboard.css"
>

<link
    rel="stylesheet"
    href="../assets/css/user-pages.css"
>
</head>

<body>

<div class="admin-app">

<?php include "../includes/user_sidebar.php"; ?>

<main class="admin-main">

<?php include "../includes/navbar.php"; ?>

<div class="user-page">


    <div class="user-page-header">

        <div class="user-page-title">

            <div class="title-icon">
                <i class="bi bi-droplet-fill"></i>
            </div>

            <div>
                <h1>Request Blood</h1>
                <p>Create a blood request for yourself or someone in need.</p>
            </div>

        </div>

    </div>


    <div class="request-hero">

        <h2>Need Blood?</h2>

        <p>
            Submit your request and our donor network will help you
            find suitable blood donors.
        </p>

    </div>


    <div class="user-panel request-form-card">

        <div class="user-panel-header">

            <div>

                <h3>Blood Request Information</h3>

                <p>
                    Please provide accurate information.
                </p>

            </div>

        </div>


        <div class="user-panel-body">

            <form>


                <div class="form-section-title">

                    <i class="bi bi-droplet-fill"></i>

                    <h3>Blood Requirement</h3>

                </div>


                <div class="form-grid">

                    <div class="form-group">

                        <label class="form-label">
                            Blood Group <span>*</span>
                        </label>

                        <select class="form-select">

                            <option>Select Blood Group</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label class="form-label">
                            Required Units <span>*</span>
                        </label>

                        <input
                            type="number"
                            class="form-control"
                            placeholder="Example: 2"
                        >

                    </div>

                </div>


                <div class="form-section-title">

                    <i class="bi bi-hospital"></i>

                    <h3>Patient Information</h3>

                </div>


                <div class="form-grid">

                    <div class="form-group">

                        <label class="form-label">
                            Patient Name <span>*</span>
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Enter patient name"
                        >

                    </div>


                    <div class="form-group">

                        <label class="form-label">
                            Hospital / Medical Center <span>*</span>
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Hospital name"
                        >

                    </div>


                    <div class="form-group">

                        <label class="form-label">
                            Required Date <span>*</span>
                        </label>

                        <input
                            type="date"
                            class="form-control"
                        >

                    </div>


                    <div class="form-group">

                        <label class="form-label">
                            Contact Number <span>*</span>
                        </label>

                        <input
                            type="tel"
                            class="form-control"
                            placeholder="01XXXXXXXXX"
                        >

                    </div>


                    <div class="form-group full">

                        <label class="form-label">
                            Hospital Address <span>*</span>
                        </label>

                        <textarea
                            class="form-control"
                            placeholder="Enter complete address"
                        ></textarea>

                    </div>


                    <div class="form-group full">

                        <label class="form-label">
                            Additional Information
                        </label>

                        <textarea
                            class="form-control"
                            placeholder="Add any additional information..."
                        ></textarea>

                    </div>

                </div>


                <div class="divider"></div>


                <div class="flex justify-between align-center">

                    <span class="text-muted">
                        <i class="bi bi-shield-check"></i>
                        Your information is kept secure.
                    </span>

                    <button class="btn btn-primary btn-lg">

                        <i class="bi bi-send-fill"></i>

                        Submit Request

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

</main>

</div>

</body>
</html>