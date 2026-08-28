<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<aside class="sidebar">

    <!-- =====================================================
         LOGO
    ====================================================== -->

    <div class="sidebar-logo">

        <div class="logo-icon">
            <i class="bi bi-droplet-fill"></i>
        </div>

        <div class="sidebar-logo-text">
            <strong>
                Blood<span style="color: var(--primary);">Care</span>
            </strong>

            <span>
                Save Life • Donate Blood
            </span>
        </div>

    </div>


    <!-- =====================================================
         USER PROFILE
    ====================================================== -->

    <div class="sidebar-profile">

        <div class="sidebar-profile-avatar">
            <img
                src="../assets/images/default-user.png"
                alt="User"
            >
        </div>

        <div class="sidebar-profile-info">

            <strong>
                User Account
            </strong>

            <span>
                <i class="bi bi-circle-fill"></i>
                Active
            </span>

        </div>

    </div>


    <!-- =====================================================
         MAIN MENU
    ====================================================== -->

    <div class="sidebar-section-title">
        MAIN MENU
    </div>


    <ul class="sidebar-menu">

        <!-- Dashboard -->
        <li>
            <a
                href="dashboard.php"
                class="<?= $current_page == 'dashboard.php' ? 'active' : '' ?>"
            >

                <span class="menu-icon">
                    <i class="bi bi-grid-1x2-fill"></i>
                </span>

                <span>
                    Dashboard
                </span>

            </a>
        </li>


        <!-- Search Donor -->
        <li>
            <a
                href="search_donor.php"
                class="<?= $current_page == 'search_donor.php' ? 'active' : '' ?>"
            >

                <span class="menu-icon">
                    <i class="bi bi-search"></i>
                </span>

                <span>
                    Search Donor
                </span>

            </a>
        </li>


        <!-- Donor Profile -->
        <li>
            <a
                href="donor_profile.php"
                class="<?= $current_page == 'donor_profile.php' ? 'active' : '' ?>"
            >

                <span class="menu-icon">
                    <i class="bi bi-person-vcard-fill"></i>
                </span>

                <span>
                    Donor Profile
                </span>

            </a>
        </li>


        <!-- Blood Request -->
        <li>
            <a
                href="blood_request.php"
                class="<?= $current_page == 'blood_request.php' ? 'active' : '' ?>"
            >

                <span class="menu-icon">
                    <i class="bi bi-droplet-half"></i>
                </span>

                <span>
                    Blood Request
                </span>

            </a>
        </li>


        <!-- Emergency Request -->
        <li>
            <a
                href="emergency_request.php"
                class="<?= $current_page == 'emergency_request.php' ? 'active' : '' ?>"
            >

                <span class="menu-icon emergency-icon">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                </span>

                <span>
                    Emergency Request
                </span>

                <span class="menu-count">
                    SOS
                </span>

            </a>
        </li>


        <!-- My Requests -->
        <li>
            <a
                href="my_requests.php"
                class="<?= $current_page == 'my_requests.php' ? 'active' : '' ?>"
            >

                <span class="menu-icon">
                    <i class="bi bi-file-earmark-medical-fill"></i>
                </span>

                <span>
                    My Requests
                </span>

            </a>
        </li>

    </ul>


    <!-- =====================================================
         ACCOUNT
    ====================================================== -->

    <div class="sidebar-section-title">
        ACCOUNT
    </div>


    <ul class="sidebar-menu">

        <!-- Profile -->
        <li>
            <a
                href="profile.php"
                class="<?= $current_page == 'profile.php' ? 'active' : '' ?>"
            >

                <span class="menu-icon">
                    <i class="bi bi-person-circle"></i>
                </span>

                <span>
                    My Profile
                </span>

            </a>
        </li>


        <!-- Notifications -->
        <li>
            <a
                href="notifications.php"
                class="<?= $current_page == 'notifications.php' ? 'active' : '' ?>"
            >

                <span class="menu-icon">
                    <i class="bi bi-bell-fill"></i>
                </span>

                <span>
                    Notifications
                </span>

                <span class="menu-count">
                    3
                </span>

            </a>
        </li>

    </ul>


    <!-- =====================================================
         SIDEBAR BOTTOM
    ====================================================== -->

    <div class="sidebar-bottom">

        <div class="help-box">

            <div class="help-icon">
                <i class="bi bi-headset"></i>
            </div>

            <div>

                <strong>
                    Need Help?
                </strong>

                <small>
                    Contact BloodCare Support
                </small>

            </div>

        </div>


        <!-- Logout -->
        <a
            href="../logout.php"
            class="logout-link"
        >

            <span>
                <i class="bi bi-box-arrow-right"></i>
                Logout
            </span>

            <i class="bi bi-chevron-right"></i>

        </a>

    </div>

</aside>