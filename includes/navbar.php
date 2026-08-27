<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header class="admin-navbar">

    <!-- =====================================================
         LEFT SIDE
         ===================================================== -->

    <div class="navbar-left">

        <!-- Mobile Sidebar Button -->

        <button
            type="button"
            class="sidebar-toggle"
            id="sidebarToggle"
            aria-label="Open Sidebar"
        >
            <i class="bi bi-list"></i>
        </button>


        <!-- Page Heading -->

        <div class="navbar-heading">

            <span>BloodCare Administration</span>

            <strong>
                <?php

                $page_titles = [

                    'dashboard.php'        => 'Admin Dashboard',
                    'donor_list.php'      => 'Donor Management',
                    'add_donor.php'      => 'Add New Donor',
                    'donor_profile.php'  => 'Donor Profile',
                    'update_donor.php'   => 'Update Donor',

                    'request_list.php'    => 'Blood Requests',
                    'emergency_request.php' => 'Emergency Requests',

                    'appointment_list.php' => 'Appointments',

                    'blood_stock.php'    => 'Blood Inventory',

                    'blood_camp.php'     => 'Blood Donation Camps',

                    'notification.php'   => 'Notifications'

                ];

                echo $page_titles[$current_page] ?? 'BloodCare Admin';

                ?>
            </strong>

        </div>

    </div>


    <!-- =====================================================
         RIGHT SIDE
         ===================================================== -->

    <div class="navbar-right">


        <!-- Search -->

        <div class="navbar-search">

            <i class="bi bi-search"></i>

            <input
                type="text"
                placeholder="Search anything..."
                id="globalSearch"
            >

            <span class="search-shortcut">
                Ctrl K
            </span>

        </div>


        <!-- Notification -->

        <button
            type="button"
            class="navbar-icon-btn"
            title="Notifications"
            onclick="window.location.href='<?php echo (strpos($_SERVER['PHP_SELF'], '/admin/') !== false) ? 'notification/notification.php' : 'admin/notification/notification.php'; ?>'"
        >

            <i class="bi bi-bell"></i>

            <span class="notification-dot"></span>

        </button>


        <!-- Messages -->

        <button
            type="button"
            class="navbar-icon-btn"
            title="Messages"
        >

            <i class="bi bi-chat-left-text"></i>

        </button>


        <div class="navbar-divider"></div>


        <!-- User -->

        <div class="navbar-user">

            <img
                src="<?php echo (strpos($_SERVER['PHP_SELF'], '/admin/') !== false) ? '../assets/images/default-user.png' : 'assets/images/default-user.png'; ?>"
                alt="Admin"
            >

            <div class="navbar-user-info">

                <strong>
                    System Admin
                </strong>

                <span>
                    Administrator
                </span>

            </div>

            <i class="bi bi-chevron-down"></i>

        </div>

    </div>

</header>