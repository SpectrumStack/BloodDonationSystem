<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Emergency Blood Request | BloodCare</title>

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
                <i class="bi bi-exclamation-triangle-fill"></i>
            </div>

            <div>
                <h1>Emergency Request</h1>
                <p>Send an urgent blood request to nearby donors.</p>
            </div>

        </div>

    </div>


    <div class="emergency-hero">

        <h2>
            <i class="bi bi-lightning-fill"></i>
            Emergency Blood Request
        </h2>

        <p>
            Use this service only for urgent situations where blood
            is needed immediately.
        </p>

        <div class="emergency-alert">

            <i class="bi bi-info-circle-fill"></i>

            <span>
                Emergency requests receive higher priority
                and may notify nearby compatible donors.
            </span>

        </div>

    </div>


    <div class="user-panel request-form-card">

        <div class="user-panel-header">

            <div>

                <h3>Emergency Details</h3>

                <p>
                    Provide accurate information for faster response.
                </p>

            </div>

            <span class="badge badge-danger">
                Emergency
            </span>

        </div>


        <div class="user-panel-body">

            <form>

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
                            Units Needed <span>*</span>
                        </label>

                        <input
                            type="number"
                            class="form-control"
                            placeholder="Example: 2"
                        >

                    </div>


                    <div class="form-group">

                        <label class="form-label">
                            Patient Name <span>*</span>
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Patient name"
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
                            Hospital / Location <span>*</span>
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Hospital and location"
                        >

                    </div>


                    <div class="form-group full">

                        <label class="form-label">
                            Emergency Details <span>*</span>
                        </label>

                        <textarea
                            class="form-control"
                            placeholder="Describe the emergency..."
                        ></textarea>

                    </div>

                </div>


                <div class="divider"></div>


                <button class="btn btn-danger btn-lg btn-block">

                    <i class="bi bi-megaphone-fill"></i>

                    Send Emergency Request

                </button>

            </form>

        </div>

    </div>

</div>

</main>

</div>

</body>
</html>