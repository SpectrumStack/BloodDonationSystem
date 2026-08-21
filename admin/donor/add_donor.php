<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Add Donor | BloodCare</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">


<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet">



<style>


*{

margin:0;

padding:0;

box-sizing:border-box;

font-family:'Poppins',sans-serif;

}


body{

background:#f6f8fb;

}



/* MAIN */

.main{

margin-left:260px;

padding:30px;

}



/* HEADER */


.page-header{

background:white;

padding:25px;

border-radius:20px;

box-shadow:0 10px 25px rgba(0,0,0,.08);

margin-bottom:30px;

}



/* FORM CARD */


.form-card{

background:white;

padding:35px;

border-radius:25px;

box-shadow:0 10px 30px rgba(0,0,0,.08);

}



/* PROFILE */


.photo-upload{

text-align:center;

margin-bottom:30px;

}


.profile-circle{

width:120px;

height:120px;

background:#ffe5e8;

border-radius:50%;

display:flex;

justify-content:center;

align-items:center;

margin:auto;

font-size:50px;

color:#dc3545;

}




/* INPUT */


.form-label{

font-weight:600;

}


.form-control,
.form-select{

height:55px;

border-radius:12px;

}



.form-control:focus,
.form-select:focus{

border-color:#dc3545;

box-shadow:0 0 0 .2rem rgba(220,53,69,.15);

}



/* BUTTON */


.submit-btn{

height:55px;

border-radius:30px;

background:#dc3545;

color:white;

font-weight:600;

border:none;

font-size:17px;

transition:.3s;

}


.submit-btn:hover{

background:#b02a37;

transform:translateY(-3px);

}



/* SIDEBAR PLACE */

@media(max-width:992px){

.main{

margin-left:80px;

}

}


</style>


</head>


<body>





<!-- MAIN CONTENT -->


<div class="main">


<div class="page-header">


<h3 class="fw-bold">

<i class="bi bi-person-plus-fill text-danger"></i>

Add New Donor

</h3>


<p class="text-muted mb-0">

Enter donor information carefully

</p>


</div>







<div class="form-card">



<form>



<!-- Photo -->


<div class="photo-upload">


<div class="profile-circle">

<i class="bi bi-person-fill"></i>

</div>


<input type="file"
class="form-control mt-3">


</div>







<div class="row g-4">





<!-- Name -->


<div class="col-md-6">


<label class="form-label">

Full Name

</label>


<input type="text"
class="form-control"
placeholder="Enter donor name">


</div>







<!-- Blood -->


<div class="col-md-6">


<label class="form-label">

Blood Group

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







<!-- Gender -->


<div class="col-md-6">


<label class="form-label">

Gender

</label>


<select class="form-select">


<option>Select Gender</option>

<option>Male</option>

<option>Female</option>

<option>Other</option>


</select>


</div>







<!-- Age -->


<div class="col-md-6">


<label class="form-label">

Age

</label>


<input type="number"
class="form-control"
placeholder="Age">


</div>








<!-- Phone -->


<div class="col-md-6">


<label class="form-label">

Phone Number

</label>


<input type="text"
class="form-control"
placeholder="+880">


</div>







<!-- Email -->


<div class="col-md-6">


<label class="form-label">

Email

</label>


<input type="email"
class="form-control"
placeholder="Email">


</div>







<!-- Address -->


<div class="col-12">


<label class="form-label">

Address

</label>


<textarea class="form-control"
rows="3"
placeholder="Full address"></textarea>


</div>







<!-- Donation Date -->


<div class="col-md-6">


<label class="form-label">

Last Donation Date

</label>


<input type="date"
class="form-control">


</div>








<!-- Medical Status -->


<div class="col-md-6">


<label class="form-label">

Medical Status

</label>


<select class="form-select">


<option>Select Status</option>

<option>Healthy</option>

<option>Under Treatment</option>

<option>Not Eligible</option>


</select>


</div>







<!-- Availability -->


<div class="col-md-6">


<label class="form-label">

Availability Status

</label>


<select class="form-select">


<option>Available</option>

<option>Unavailable</option>


</select>


</div>





</div>







<button class="submit-btn w-100 mt-5">


<i class="bi bi-check-circle-fill"></i>

Add Donor


</button>




</form>


</div>


</div>





</body>

</html>