<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>My Requests | BloodCare</title>

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
                <i class="bi bi-file-earmark-medical-fill"></i>
            </div>

            <div>

                <h1>My Blood Requests</h1>

                <p>
                    Track and manage all your blood requests.
                </p>

            </div>

        </div>


        <a href="blood_request.php"
           class="btn btn-primary">

            <i class="bi bi-plus-lg"></i>

            New Request

        </a>

    </div>


    <div class="user-stats">

        <div class="user-stat">

            <div class="user-stat-top">

                <div class="user-stat-icon orange">
                    <i class="bi bi-hourglass-split"></i>
                </div>

            </div>

            <h2>01</h2>
            <p>Pending Requests</p>

        </div>


        <div class="user-stat">

            <div class="user-stat-top">

                <div class="user-stat-icon blue">
                    <i class="bi bi-check-circle"></i>
                </div>

            </div>

            <h2>01</h2>
            <p>Approved Requests</p>

        </div>


        <div class="user-stat">

            <div class="user-stat-top">

                <div class="user-stat-icon green">
                    <i class="bi bi-check2-all"></i>
                </div>

            </div>

            <h2>02</h2>
            <p>Completed</p>

        </div>


        <div class="user-stat">

            <div class="user-stat-top">

                <div class="user-stat-icon red">
                    <i class="bi bi-list-ul"></i>
                </div>

            </div>

            <h2>04</h2>
            <p>Total Requests</p>

        </div>

    </div>


    <div class="user-panel">

        <div class="user-panel-header">

            <div>

                <h3>Request History</h3>

                <p>
                    Complete history of your blood requests.
                </p>

            </div>

            <select class="card-filter">

                <option>All Requests</option>
                <option>Pending</option>
                <option>Approved</option>
                <option>Completed</option>

            </select>

        </div>


        <div class="request-table-wrapper">

            <table class="user-table">

                <thead>

                    <tr>

                        <th>Request ID</th>
                        <th>Blood Group</th>
                        <th>Patient</th>
                        <th>Hospital</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>

                </thead>


                <tbody>

                    <tr>

                        <td>
                            <span class="request-id">
                                #REQ-1024
                            </span>
                        </td>

                        <td>
                            <span class="request-blood">
                                A+
                            </span>
                        </td>

                        <td>Karim Ahmed</td>

                        <td>Dhaka Medical</td>

                        <td>25 Aug 2026</td>

                        <td>
                            <span class="status approved">
                                Approved
                            </span>
                        </td>

                        <td>

                            <button class="btn btn-sm btn-outline">
                                <i class="bi bi-eye"></i>
                            </button>

                        </td>

                    </tr>


                    <tr>

                        <td>
                            <span class="request-id">
                                #REQ-1021
                            </span>
                        </td>

                        <td>
                            <span class="request-blood">
                                O+
                            </span>
                        </td>

                        <td>Rahim Ahmed</td>

                        <td>Uttara Hospital</td>

                        <td>20 Aug 2026</td>

                        <td>
                            <span class="status completed">
                                Completed
                            </span>
                        </td>

                        <td>

                            <button class="btn btn-sm btn-outline">
                                <i class="bi bi-eye"></i>
                            </button>

                        </td>

                    </tr>


                    <tr>

                        <td>
                            <span class="request-id">
                                #REQ-1018
                            </span>
                        </td>

                        <td>
                            <span class="request-blood">
                                B+
                            </span>
                        </td>

                        <td>Sumaiya Islam</td>

                        <td>Square Hospital</td>

                        <td>18 Aug 2026</td>

                        <td>
                            <span class="status pending">
                                Pending
                            </span>
                        </td>

                        <td>

                            <button class="btn btn-sm btn-outline">
                                <i class="bi bi-eye"></i>
                            </button>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

</main>

</div>

</body>
</html>