<?php

$current = basename($_SERVER['PHP_SELF']);

?>

<div class="sidebar">




<!-- LOGO -->


<div class="logo">

<i class="bi bi-heart-pulse-fill"></i>

<span>BloodCare</span>

</div>






<!-- ADMIN PROFILE -->


<div class="admin-profile">


<img
src="../assets/images/default-user.png"
alt="">


<h4>

Administrator

</h4>


<p>

System Admin

</p>


</div>







<!-- MENU -->


<ul class="menu">




<!-- Dashboard -->


<li>

<a
href="../admin/dashboard.php"
class="<?=($current=="dashboard.php")?'active':'';?>">

<i class="bi bi-grid-fill"></i>

<span>

Dashboard

</span>

</a>

</li>








<!-- Donor -->


<li class="dropdown">


<div class="dropdown-btn">


<div>

<i class="bi bi-people-fill"></i>

<span>

Donor Management

</span>

</div>


<i class="bi bi-chevron-down arrow"></i>


</div>






<ul class="submenu">


<li>

<a href="../admin/donor/add_donor.php">

Add Donor

</a>

</li>




<li>

<a href="../admin/donor/donor_list.php">

Donor List

</a>

</li>




<li>

<a href="../admin/donor/update_donor.php">

Update Donor

</a>

</li>




</ul>


</li>








<!-- Blood Request -->


<li>

<a
href="../admin/blood_request/request_list.php">

<i class="bi bi-droplet-fill"></i>

<span>

Blood Request

</span>


<span class="badge">

12

</span>

</a>

</li>








<!-- Appointment -->


<li>

<a
href="../admin/appointment/appointment_list.php">

<i class="bi bi-calendar-check-fill"></i>

<span>

Appointment

</span>

</a>

</li>








<!-- Blood Stock -->


<li>

<a
href="../admin/stock/blood_stock.php">

<i class="bi bi-box-seam-fill"></i>

<span>

Blood Stock

</span>

</a>

</li>








<!-- Camp -->


<li>

<a
href="../admin/camp/blood_camp.php">

<i class="bi bi-hospital-fill"></i>

<span>

Blood Camp

</span>

</a>

</li>








<!-- Notification -->


<li>

<a
href="../admin/notification/notification.php">

<i class="bi bi-bell-fill"></i>

<span>

Notification

</span>


<span class="badge">

5

</span>

</a>

</li>







</ul>







<!-- LOGOUT -->


<div class="logout">


<a href="../logout.php">


<i class="bi bi-box-arrow-right"></i>

<span>

Logout

</span>


</a>


</div>






</div>