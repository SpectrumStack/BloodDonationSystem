<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Blood Request List | BloodCare</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet">

<link rel="stylesheet" href="../../assets/css/style.css">

<style>

body{
    background:#f4f7fc;
    font-family:'Poppins',sans-serif;
}

.main{
    margin-left:260px;
    padding:35px;
}

/* Header */

.page-header{

    background:white;
    border-radius:20px;
    padding:25px;
    margin-bottom:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);

}

/* Cards */

.stat-card{

    background:white;
    border-radius:20px;
    padding:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.3s;

}

.stat-card:hover{

    transform:translateY(-5px);

}

.icon-box{

    width:60px;
    height:60px;
    border-radius:15px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    font-size:25px;
    margin-bottom:15px;

}

.red{
background:#dc3545;
}

.green{
background:#198754;
}

.orange{
background:#fd7e14;
}

.blue{
background:#0d6efd;
}

.stat-card h3{

font-weight:700;

}

.stat-card p{

color:#777;

margin-bottom:0;

}

/* Search */

.search-card{

background:white;
padding:30px;
border-radius:20px;
margin-top:35px;
box-shadow:0 10px 25px rgba(0,0,0,.08);

}



.form-control,
.form-select{

height:52px;
border-radius:12px;

}

.search-btn{

height:52px;
border-radius:12px;
background:#dc3545;
color:white;
font-weight:600;

}

.search-btn:hover{

background:#bb2d3b;
color:white;

}

/* ===========================
      TABLE DESIGN
===========================*/

.table-card{

    background:#fff;

    margin-top:35px;

    padding:30px;

    border-radius:20px;

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}

.table thead th{

    font-weight:600;

}

.table tbody tr{

    transition:.3s;

}

.table tbody tr:hover{

    background:#fff5f5;

}

.table td{

    vertical-align:middle;

}

.btn-sm{

    margin:2px;

}

</style>

</head>

<body>

<?php include '../../includes/admin_sidebar.php'; ?>


<div class="main">

<!-- Header -->

<div class="page-header">

<div class="d-flex justify-content-between align-items-center">

<div>

<h2 class="fw-bold">

<i class="bi bi-droplet-half text-danger"></i>

Blood Request Management

</h2>

<p class="text-muted mb-0">

Manage all blood requests from one place

</p>

</div>

<button class="btn btn-danger rounded-pill px-4">

<i class="bi bi-download"></i>

Export

</button>

</div>

</div>

<!-- Statistics -->

<div class="row g-4">

<div class="col-lg-3">

<div class="stat-card">

<div class="icon-box red">

<i class="bi bi-droplet-fill"></i>

</div>

<h3>125</h3>

<p>Total Requests</p>

</div>

</div>

<div class="col-lg-3">

<div class="stat-card">

<div class="icon-box green">

<i class="bi bi-check-circle-fill"></i>

</div>

<h3>78</h3>

<p>Accepted</p>

</div>

</div>

<div class="col-lg-3">

<div class="stat-card">

<div class="icon-box orange">

<i class="bi bi-hourglass-split"></i>

</div>

<h3>32</h3>

<p>Pending</p>

</div>

</div>

<div class="col-lg-3">

<div class="stat-card">

<div class="icon-box blue">

<i class="bi bi-x-circle-fill"></i>

</div>

<h3>15</h3>

<p>Rejected</p>

</div>

</div>

</div>

<!-- Search -->

<div class="search-card">

<h4 class="fw-bold mb-4">

Search Blood Request

</h4>

<div class="row g-3">

<div class="col-md-3">

<input type="text"
class="form-control"
placeholder="Patient Name">

</div>

<div class="col-md-3">

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

<div class="col-md-3">

<select class="form-select">

<option>Status</option>

<option>Pending</option>

<option>Accepted</option>

<option>Rejected</option>

</select>

</div>

<div class="col-md-3">

<button class="btn search-btn w-100">

<i class="bi bi-search"></i>

Search

</button>

</div>

</div>

</div>
<!-- =========================
     REQUEST TABLE
========================== -->

<div class="table-card mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="fw-bold mb-1">
                <i class="bi bi-list-check text-danger"></i>
                Blood Request List
            </h4>
            <small class="text-muted">
                Showing all blood requests
            </small>
        </div>

        <button class="btn btn-outline-danger rounded-pill">
            <i class="bi bi-arrow-clockwise"></i>
            Refresh
        </button>

    </div>

    <div class="table-responsive">

        <table class="table table-hover align-middle">

            <thead class="table-danger">

                <tr>

                    <th>#</th>

                    <th>Patient</th>

                    <th>Blood</th>

                    <th>Hospital</th>

                    <th>Required Date</th>

                    <th>Status</th>

                    <th width="260">
                        Action
                    </th>

                </tr>

            </thead>

            <tbody>

                <!-- Row 1 -->

                <tr>

                    <td>1</td>

                    <td>

                        <div class="d-flex align-items-center">

                            <img src="../../assets/images/default-user.png"
                                 width="45"
                                 height="45"
                                 class="rounded-circle me-3">

                            <div>

                                <b>Rahim Ahmed</b>

                                <br>

                                <small class="text-muted">
                                    01700000000
                                </small>

                            </div>

                        </div>

                    </td>

                    <td>

                        <span class="badge bg-danger px-3 py-2">

                            A+

                        </span>

                    </td>

                    <td>

                        Dhaka Medical College

                    </td>

                    <td>

                        15 Aug 2026

                    </td>

                    <td>

                        <span class="badge bg-warning text-dark px-3 py-2">

                            Pending

                        </span>

                    </td>

                    <td>

                        <button class="btn btn-primary btn-sm">

                            <i class="bi bi-eye-fill"></i>

                        </button>

                        <button class="btn btn-success btn-sm">

                            <i class="bi bi-check-lg"></i>

                        </button>

                        <button class="btn btn-warning btn-sm text-white">

                            <i class="bi bi-x-lg"></i>

                        </button>

                        <button class="btn btn-danger btn-sm">

                            <i class="bi bi-trash-fill"></i>

                        </button>

                    </td>

                </tr>

                <!-- Row 2 -->

                <tr>

                    <td>2</td>

                    <td>

                        <div class="d-flex align-items-center">

                            <img src="../../assets/images/default-user.png"
                                 width="45"
                                 height="45"
                                 class="rounded-circle me-3">

                            <div>

                                <b>Nusrat Jahan</b>

                                <br>

                                <small class="text-muted">

                                    01800000000

                                </small>

                            </div>

                        </div>

                    </td>

                    <td>

                        <span class="badge bg-primary px-3 py-2">

                            O-

                        </span>

                    </td>

                    <td>

                        Square Hospital

                    </td>

                    <td>

                        18 Aug 2026

                    </td>

                    <td>

                        <span class="badge bg-success px-3 py-2">

                            Accepted

                        </span>

                    </td>

                    <td>

                        <button class="btn btn-primary btn-sm">

                            <i class="bi bi-eye-fill"></i>

                        </button>

                        <button class="btn btn-danger btn-sm">

                            <i class="bi bi-trash-fill"></i>

                        </button>

                    </td>

                </tr>

                <!-- Row 3 -->

                <tr>

                    <td>3</td>

                    <td>

                        <div class="d-flex align-items-center">

                            <img src="../../assets/images/default-user.png"
                                 width="45"
                                 height="45"
                                 class="rounded-circle me-3">

                            <div>

                                <b>Sakib Hasan</b>

                                <br>

                                <small class="text-muted">

                                    01900000000

                                </small>

                            </div>

                        </div>

                    </td>

                    <td>

                        <span class="badge bg-dark px-3 py-2">

                            AB+

                        </span>

                    </td>

                    <td>

                        United Hospital

                    </td>

                    <td>

                        20 Aug 2026

                    </td>

                    <td>

                        <span class="badge bg-danger px-3 py-2">

                            Rejected

                        </span>

                    </td>

                    <td>

                        <button class="btn btn-primary btn-sm">

                            <i class="bi bi-eye-fill"></i>

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