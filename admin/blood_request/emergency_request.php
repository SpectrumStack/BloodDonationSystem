<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Emergency Blood Requests | BloodCare Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../../assets/css/style.css">

<style>

body{

background:#f5f7fb;

font-family:'Poppins',sans-serif;

}

.main{

margin-left:260px;

padding:30px;

}



/* PAGE HEADER */

.page-header{

background:#fff;

padding:25px;

border-radius:20px;

box-shadow:0 8px 20px rgba(0,0,0,.08);

margin-bottom:25px;

display:flex;

justify-content:space-between;

align-items:center;

}



.page-header h2{

font-weight:700;

}



.page-header p{

margin:0;

color:#777;

}



/* CARD */

.stat-card{

background:#fff;

padding:25px;

border-radius:18px;

box-shadow:0 8px 20px rgba(0,0,0,.08);

transition:.3s;

}



.stat-card:hover{

transform:translateY(-6px);

}



.icon-box{

width:65px;

height:65px;

border-radius:15px;

display:flex;

align-items:center;

justify-content:center;

font-size:28px;

color:#fff;

margin-bottom:15px;

}



.bg-red{

background:#dc3545;

}

.bg-orange{

background:#fd7e14;

}

.bg-blue{

background:#0d6efd;

}

.bg-green{

background:#198754;

}



.stat-card h3{

font-weight:700;

margin-bottom:5px;

}



/* SEARCH */

.search-card{

background:#fff;

padding:25px;

margin-top:30px;

border-radius:18px;

box-shadow:0 8px 20px rgba(0,0,0,.08);

}



.form-control,

.form-select{

height:52px;

border-radius:12px;

}



.btn-search{

height:52px;

background:#dc3545;

color:#fff;

border:none;

border-radius:12px;

font-weight:600;

transition:.3s;

}



.btn-search:hover{

background:#b02a37;

}



/* MOBILE */

@media(max-width:992px){

.main{

margin-left:80px;

}

}

</style>

</head>

<body>

<?php include '../../includes/admin_sidebar.php'; ?>

<div class="main">

<div class="page-header">

<div>

<h2>

<i class="bi bi-exclamation-triangle-fill text-danger"></i>

Emergency Blood Requests

</h2>

<p>Monitor and manage all emergency blood requests.</p>

</div>

</div>

<!-- Statistics -->

<div class="row g-4">

<div class="col-lg-3 col-md-6">

<div class="stat-card">

<div class="icon-box bg-red">

<i class="bi bi-heart-pulse-fill"></i>

</div>

<h3>58</h3>

<p class="text-muted mb-0">

Active Requests

</p>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="stat-card">

<div class="icon-box bg-orange">

<i class="bi bi-clock-history"></i>

</div>

<h3>14</h3>

<p class="text-muted mb-0">

Pending

</p>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="stat-card">

<div class="icon-box bg-green">

<i class="bi bi-check-circle-fill"></i>

</div>

<h3>39</h3>

<p class="text-muted mb-0">

Completed

</p>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="stat-card">

<div class="icon-box bg-blue">

<i class="bi bi-people-fill"></i>

</div>

<h3>120</h3>

<p class="text-muted mb-0">

Available Donors

</p>

</div>

</div>

</div>

<!-- Search -->

<div class="search-card">

<h4 class="fw-bold mb-4">

Search Emergency Requests

</h4>

<div class="row g-3">

<div class="col-lg-4">

<input type="text"

class="form-control"

placeholder="Patient Name / Hospital">

</div>

<div class="col-lg-3">

<select class="form-select">

<option>Blood Group</option>

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

<div class="col-lg-3">

<select class="form-select">

<option>Status</option>

<option>Critical</option>

<option>Pending</option>

<option>Accepted</option>

<option>Completed</option>

</select>

</div>

<div class="col-lg-2">

<button class="btn-search w-100">

<i class="bi bi-search"></i>

Search

</button>

</div>

</div>

</div>

<!-- ===== Part-2 starts here ===== -->
<!-- ===========================
     EMERGENCY REQUEST TABLE
=========================== -->

<div class="search-card mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h4 class="fw-bold mb-0">
            <i class="bi bi-table text-danger"></i>
            Emergency Request List
        </h4>

        <span class="badge bg-danger fs-6">
            58 Active Requests
        </span>

    </div>

    <div class="table-responsive">

        <table class="table table-hover align-middle">

            <thead class="table-danger">

                <tr>

                    <th>#</th>

                    <th>Patient</th>

                    <th>Blood</th>

                    <th>Hospital</th>

                    <th>Location</th>

                    <th>Contact</th>

                    <th>Priority</th>

                    <th>Status</th>

                    <th width="260">Action</th>

                </tr>

            </thead>

            <tbody>

                <!-- ROW 1 -->

                <tr>

                    <td>01</td>

                    <td>

                        <strong>Rahim Ahmed</strong><br>

                        <small class="text-muted">

                            Required Today

                        </small>

                    </td>

                    <td>

                        <span class="badge bg-danger">

                            A+

                        </span>

                    </td>

                    <td>

                        Dhaka Medical College

                    </td>

                    <td>

                        Dhaka

                    </td>

                    <td>

                        +8801712345678

                    </td>

                    <td>

                        <span class="badge bg-danger">

                            Critical

                        </span>

                    </td>

                    <td>

                        <span class="badge bg-warning text-dark">

                            Pending

                        </span>

                    </td>

                    <td>

                        <button class="btn btn-primary btn-sm">

                            <i class="bi bi-eye-fill"></i>

                        </button>

                        <button class="btn btn-success btn-sm">

                            <i class="bi bi-person-plus-fill"></i>

                        </button>

                        <button class="btn btn-secondary btn-sm">

                            <i class="bi bi-check-circle-fill"></i>

                        </button>

                        <button class="btn btn-danger btn-sm">

                            <i class="bi bi-trash-fill"></i>

                        </button>

                    </td>

                </tr>

                <!-- ROW 2 -->

                <tr>

                    <td>02</td>

                    <td>

                        <strong>Nusrat Jahan</strong><br>

                        <small class="text-muted">

                            Tomorrow

                        </small>

                    </td>

                    <td>

                        <span class="badge bg-danger">

                            O-

                        </span>

                    </td>

                    <td>

                        Square Hospital

                    </td>

                    <td>

                        Dhaka

                    </td>

                    <td>

                        +8801811111111

                    </td>

                    <td>

                        <span class="badge bg-warning text-dark">

                            High

                        </span>

                    </td>

                    <td>

                        <span class="badge bg-success">

                            Accepted

                        </span>

                    </td>

                    <td>

                        <button class="btn btn-primary btn-sm">

                            <i class="bi bi-eye-fill"></i>

                        </button>

                        <button class="btn btn-success btn-sm">

                            <i class="bi bi-person-plus-fill"></i>

                        </button>

                        <button class="btn btn-secondary btn-sm">

                            <i class="bi bi-check-circle-fill"></i>

                        </button>

                        <button class="btn btn-danger btn-sm">

                            <i class="bi bi-trash-fill"></i>

                        </button>

                    </td>

                </tr>

                <!-- ROW 3 -->

                <tr>

                    <td>03</td>

                    <td>

                        <strong>Karim Uddin</strong><br>

                        <small class="text-muted">

                            Completed

                        </small>

                    </td>

                    <td>

                        <span class="badge bg-danger">

                            B+

                        </span>

                    </td>

                    <td>

                        United Hospital

                    </td>

                    <td>

                        Gulshan

                    </td>

                    <td>

                        +8801912345678

                    </td>

                    <td>

                        <span class="badge bg-info">

                            Normal

                        </span>

                    </td>

                    <td>

                        <span class="badge bg-secondary">

                            Completed

                        </span>

                    </td>

                    <td>

                        <button class="btn btn-primary btn-sm">

                            <i class="bi bi-eye-fill"></i>

                        </button>

                        <button class="btn btn-success btn-sm">

                            <i class="bi bi-person-plus-fill"></i>

                        </button>

                        <button class="btn btn-secondary btn-sm">

                            <i class="bi bi-check-circle-fill"></i>

                        </button>

                        <button class="btn btn-danger btn-sm">

                            <i class="bi bi-trash-fill"></i>

                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>
</div>

</body>

</html>