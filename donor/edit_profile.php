<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>Edit Profile | BloodCare</title>

<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
>

<link
    rel="stylesheet"
    href="../assets/css/style.css"
>

<link
    rel="stylesheet"
    href="../assets/css/donor-pages.css"
>

    <!-- DASHBOARD CSS -->
    <link
        rel="stylesheet"
        href="../assets/css/dashboard.css"
    >
</head>

<body>

<div class="donor-app">

<?php include "../includes/donor_sidebar.php"; ?>

<main class="donor-main">


<nav class="donor-navbar">

<div class="donor-navbar-left">

<button class="donor-menu-btn">
<i class="bi bi-list"></i>
</button>

<div class="donor-page-title">

<small>Donor Portal</small>

<strong>Edit Profile</strong>

</div>

</div>


<div class="donor-navbar-right">

<a
href="notifications.php"
class="donor-nav-icon"
>
<i class="bi bi-bell"></i>
</a>

<div class="donor-navbar-divider"></div>

<div class="donor-user-mini">

<img
src="../assets/images/default-user.png"
alt="Donor"
>

<div class="donor-user-mini-info">

<strong>John Donor</strong>

<span>Blood Donor</span>

</div>

</div>

</div>

</nav>


<div class="donor-content">


<div class="donor-page-header">

<div class="donor-page-header-left">

<div class="donor-breadcrumb">

<i class="bi bi-house-fill"></i>

<span>Dashboard</span>

<i class="bi bi-chevron-right"></i>

<span>Edit Profile</span>

</div>

<h1>Edit Profile</h1>

<p>
Update your personal and donor information.
</p>

</div>

</div>


<form>


<div class="donor-form-card">


<div class="donor-form-header">

<h3>
Personal Information
</h3>

<p>
Keep your information accurate and up to date.
</p>

</div>


<div class="donor-form-body">


<div class="donor-photo-upload">

<img
src="../assets/images/default-user.png"
class="donor-photo-preview"
alt="Profile Photo"
>

<div class="donor-upload-info">

<strong>
Profile Photo
</strong>

<span>
JPG, PNG or WEBP. Maximum 2MB.
</span>

<input
type="file"
accept="image/*"
>

</div>

</div>


<br>


<div class="donor-form-grid">


<div class="donor-form-group">

<label class="donor-form-label">
Full Name <span>*</span>
</label>

<input
type="text"
class="donor-form-control"
value="John Donor"
>

</div>


<div class="donor-form-group">

<label class="donor-form-label">
Email Address <span>*</span>
</label>

<input
type="email"
class="donor-form-control"
value="john@example.com"
>

</div>


<div class="donor-form-group">

<label class="donor-form-label">
Phone Number <span>*</span>
</label>

<input
type="text"
class="donor-form-control"
value="+880 1712-345678"
>

</div>


<div class="donor-form-group">

<label class="donor-form-label">
Date of Birth
</label>

<input
type="date"
class="donor-form-control"
value="2001-03-12"
>

</div>


<div class="donor-form-group">

<label class="donor-form-label">
Gender
</label>

<select class="donor-form-control">

<option>Male</option>
<option>Female</option>
<option>Other</option>

</select>

</div>


<div class="donor-form-group">

<label class="donor-form-label">
Blood Group <span>*</span>
</label>


<div class="blood-group-select">


<div class="blood-option">

<input
type="radio"
name="blood"
id="a-positive"
>

<label for="a-positive">
A+
</label>

</div>


<div class="blood-option">

<input
type="radio"
name="blood"
id="a-negative"
>

<label for="a-negative">
A-
</label>

</div>


<div class="blood-option">

<input
type="radio"
name="blood"
id="b-positive"
>

<label for="b-positive">
B+
</label>

</div>


<div class="blood-option">

<input
type="radio"
name="blood"
id="b-negative"
>

<label for="b-negative">
B-
</label>

</div>


<div class="blood-option">

<input
type="radio"
name="blood"
id="o-positive"
checked
>

<label for="o-positive">
O+
</label>

</div>


<div class="blood-option">

<input
type="radio"
name="blood"
id="o-negative"
>

<label for="o-negative">
O-
</label>

</div>


<div class="blood-option">

<input
type="radio"
name="blood"
id="ab-positive"
>

<label for="ab-positive">
AB+
</label>

</div>


<div class="blood-option">

<input
type="radio"
name="blood"
id="ab-negative"
>

<label for="ab-negative">
AB-
</label>

</div>


</div>

</div>


<div class="donor-form-group">

<label class="donor-form-label">
District
</label>

<select class="donor-form-control">

<option>Dhaka</option>
<option>Chattogram</option>
<option>Sylhet</option>
<option>Rajshahi</option>
<option>Khulna</option>

</select>

</div>


<div class="donor-form-group">

<label class="donor-form-label">
Area
</label>

<input
type="text"
class="donor-form-control"
value="Dhanmondi"
>

</div>


<div class="donor-form-group full">

<label class="donor-form-label">
Full Address
</label>

<textarea
class="donor-form-control"
placeholder="Enter your full address"
>Dhanmondi, Dhaka, Bangladesh</textarea>

</div>


</div>

</div>


<div class="donor-form-footer">

<a
href="profile.php"
class="btn btn-outline"
>
Cancel
</a>

<button
type="submit"
class="btn btn-primary"
>
<i class="bi bi-check-lg"></i>
Save Changes
</button>

</div>


</div>


</form>


</div>

</main>

</div>

</body>

</html>