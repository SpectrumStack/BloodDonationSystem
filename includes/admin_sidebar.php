<?php

$current_page = basename($_SERVER['PHP_SELF']);
$current_path = $_SERVER['PHP_SELF'];

/*
|--------------------------------------------------------------------------
| ADMIN BASE PATH
|--------------------------------------------------------------------------
| Automatically calculates how many ../ are needed to return to /admin/
*/

$admin_position = strpos($current_path, '/admin/');

if ($admin_position !== false) {

    $after_admin = substr(
        $current_path,
        $admin_position + strlen('/admin/')
    );

    $admin_relative_dir = dirname($after_admin);

    if ($admin_relative_dir === '.' || $admin_relative_dir === '') {
        $admin_base = '';
    } else {
        $depth = substr_count(trim($admin_relative_dir, '/'), '/') + 1;
        $admin_base = str_repeat('../', $depth);
    }

} else {

    $admin_base = 'admin/';

}


/*
|--------------------------------------------------------------------------
| ROOT PATH
|--------------------------------------------------------------------------
*/

$root_base = $admin_base . '../';


/*
|--------------------------------------------------------------------------
| ACTIVE MENU
|--------------------------------------------------------------------------
*/

$is_donor_page =
    strpos($current_path, '/admin/donor/') !== false;

$is_blood_request_page =
    strpos($current_path, '/admin/blood_request/') !== false
    && $current_page !== 'emergency_request.php';

$is_emergency_page =
    $current_page === 'emergency_request.php';

$is_appointment_page =
    strpos($current_path, '/admin/appointment/') !== false;

$is_stock_page =
    strpos($current_path, '/admin/stock/') !== false;

$is_camp_page =
    strpos($current_path, '/admin/camp/') !== false;

$is_notification_page =
    strpos($current_path, '/admin/notification/') !== false;

?>



<!-- =========================================================
     ADMIN SIDEBAR
     ========================================================= -->

<aside class="admin-sidebar" id="adminSidebar">


    <!-- =====================================================
         SIDEBAR HEADER
         ===================================================== -->

    <div class="sidebar-logo">

        <a
            href="<?php echo $root_base; ?>dashboard.php"
            class="sidebar-logo-link"
        >

            <div class="sidebar-logo-icon">
                <i class="bi bi-droplet-fill"></i>
            </div>

            <div class="sidebar-logo-text">

                <strong>BloodCare</strong>

                <span>
                    BLOOD DONATION MANAGEMENT
                </span>

            </div>

        </a>


        <button
            type="button"
            class="sidebar-close"
            id="sidebarClose"
            aria-label="Close Sidebar"
        >

            <i class="bi bi-x-lg"></i>

        </button>

    </div>



    <!-- =====================================================
         ADMIN PROFILE
         ===================================================== -->

    <div class="sidebar-profile">

        <img
            src="<?php echo $admin_base; ?>assets/images/default-user.png"
            alt="Admin"
        >

        <div class="sidebar-profile-info">

            <strong>System Admin</strong>

            <span>

                <i class="bi bi-circle-fill"></i>

                Online

            </span>

        </div>


        <button
            type="button"
            class="profile-menu-btn"
            title="Profile"
        >

            <i class="bi bi-three-dots-vertical"></i>

        </button>

    </div>



    <!-- =====================================================
         NAVIGATION
         ===================================================== -->

    <nav class="sidebar-navigation">


        <!-- =================================================
             MAIN MENU
             ================================================= -->

        <div class="sidebar-section-title">
            MAIN MENU
        </div>


        <ul class="sidebar-menu">


            <!-- =================================================
                 DASHBOARD
                 ================================================= -->

            <li>

                <a
                    href="<?php echo $root_base; ?>dashboard.php"
                    class="<?php echo ($current_page === 'dashboard.php') ? 'active' : ''; ?>"
                >

                    <span class="menu-icon">
                        <i class="bi bi-grid-1x2-fill"></i>
                    </span>

                    <span>Dashboard</span>

                </a>

            </li>



            <!-- =================================================
                 DONORS
                 ================================================= -->

            <li>

                <a
                    href="<?php echo $admin_base; ?>donor/donor_list.php"
                    class="<?php echo $is_donor_page ? 'active' : ''; ?>"
                >

                    <span class="menu-icon">
                        <i class="bi bi-people-fill"></i>
                    </span>

                    <span>Donors</span>

                    <span class="menu-count">
                        248
                    </span>

                </a>

            </li>



            <!-- =================================================
                 BLOOD REQUESTS
                 ================================================= -->

            <li>

                <a
                    href="<?php echo $admin_base; ?>blood_request/request_list.php"
                    class="<?php echo $is_blood_request_page ? 'active' : ''; ?>"
                >

                    <span class="menu-icon">
                        <i class="bi bi-file-earmark-medical-fill"></i>
                    </span>

                    <span>Blood Requests</span>

                    <span class="menu-count">
                        18
                    </span>

                </a>

            </li>



            <!-- =================================================
                 APPOINTMENTS
                 ================================================= -->

            <li>

                <a
                    href="<?php echo $admin_base; ?>appointment/appointment_list.php"
                    class="<?php echo $is_appointment_page ? 'active' : ''; ?>"
                >

                    <span class="menu-icon">

                        <i class="bi bi-calendar-check-fill"></i>

                    </span>

                    <span>
                        Appointments
                    </span>

                </a>

            </li>



            <!-- =================================================
                 BLOOD STOCK
                 ================================================= -->

            <li>

                <a
                    href="<?php echo $admin_base; ?>stock/blood_stock.php"
                    class="<?php echo $is_stock_page ? 'active' : ''; ?>"
                >

                    <span class="menu-icon">

                        <i class="bi bi-droplet-half"></i>

                    </span>

                    <span>
                        Blood Stock
                    </span>

                </a>

            </li>



            <!-- =================================================
                 BLOOD CAMPS
                 ================================================= -->

            <li>

                <a
                    href="<?php echo $admin_base; ?>camp/blood_camp.php"
                    class="<?php echo $is_camp_page ? 'active' : ''; ?>"
                >

                    <span class="menu-icon">

                        <i class="bi bi-geo-alt-fill"></i>

                    </span>

                    <span>
                        Blood Camps
                    </span>

                </a>

            </li>

        </ul>



        <!-- =================================================
             MANAGEMENT
             ================================================= -->

        <div class="sidebar-section-title">
            MANAGEMENT
        </div>


        <ul class="sidebar-menu">


            <!-- =================================================
                 EMERGENCY REQUESTS
                 ================================================= -->

            <li>

                <a
                    href="<?php echo $admin_base; ?>blood_request/emergency_request.php"
                    class="<?php echo $is_emergency_page ? 'active' : ''; ?>"
                >

                    <span class="menu-icon emergency-icon">

                        <i class="bi bi-exclamation-triangle-fill"></i>

                    </span>

                    <span>
                        Emergency Requests
                    </span>

                    <span class="menu-count danger-count">
                        05
                    </span>

                </a>

            </li>



            <!-- =================================================
                 NOTIFICATIONS
                 ================================================= -->

            <li>

                <a
                    href="<?php echo $admin_base; ?>notification/notification.php"
                    class="<?php echo $is_notification_page ? 'active' : ''; ?>"
                >

                    <span class="menu-icon">

                        <i class="bi bi-bell-fill"></i>

                    </span>

                    <span>
                        Notifications
                    </span>

                    <span class="menu-count">
                        12
                    </span>

                </a>

            </li>



            <!-- =================================================
                 REPORTS
                 ================================================= -->

            <li>

                <a href="#">

                    <span class="menu-icon">

                        <i class="bi bi-bar-chart-fill"></i>

                    </span>

                    <span>
                        Reports
                    </span>

                    <span class="menu-arrow">

                        <i class="bi bi-chevron-right"></i>

                    </span>

                </a>

            </li>



            <!-- =================================================
                 SETTINGS
                 ================================================= -->

            <li>

                <a href="#">

                    <span class="menu-icon">

                        <i class="bi bi-gear-fill"></i>

                    </span>

                    <span>
                        Settings
                    </span>

                    <span class="menu-arrow">

                        <i class="bi bi-chevron-right"></i>

                    </span>

                </a>

            </li>

        </ul>

    </nav>



    <!-- =====================================================
         SIDEBAR FOOTER
         ===================================================== -->

    <div class="sidebar-footer">


        <!-- HELP -->

        <div class="sidebar-help">

            <div class="help-icon">

                <i class="bi bi-headset"></i>

            </div>

            <div>

                <strong>
                    Need Help?
                </strong>

                <span>
                    Contact support
                </span>

            </div>

            <i class="bi bi-arrow-up-right"></i>

        </div>


        <div style="height: 10px;"></div>


        <!-- LOGOUT -->

        <a
            href="<?php echo $root_base; ?>logout.php"
            class="sidebar-menu logout-link"
            style="min-height: 36px;"
        >

            <span class="menu-icon">

                <i class="bi bi-box-arrow-right"></i>

            </span>

            <span>
                Logout
            </span>

        </a>

    </div>

</aside>



<!-- =========================================================
     MOBILE OVERLAY
     ========================================================= -->

<div
    class="sidebar-overlay"
    id="sidebarOverlay"
></div>