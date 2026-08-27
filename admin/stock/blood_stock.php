<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Blood Stock | BloodCare Admin</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet"
          href="../../assets/css/style.css">

    <link rel="stylesheet"
          href="../../assets/css/dashboard.css">

    <link rel="stylesheet"
          href="../../assets/css/admin-pages.css">

</head>

<body>

<div class="admin-app">

    <?php include '../../includes/admin_sidebar.php'; ?>

    <main class="admin-main">

        <?php include '../../includes/navbar.php'; ?>

        <div class="admin-page">

            <!-- HEADER -->

            <div class="page-header">

                <div class="page-header-left">

                    <div class="breadcrumb">

                        <i class="bi bi-grid"></i>
                        <span>Admin</span>

                        <i class="bi bi-chevron-right"></i>

                        <span>Blood Stock</span>

                    </div>

                    <h1>Blood Stock Management</h1>

                    <p>
                        Monitor blood inventory and availability in real time.
                    </p>

                </div>


                <div class="page-header-actions">

                    <button class="btn btn-outline">
                        <i class="bi bi-arrow-clockwise"></i>
                        Refresh
                    </button>

                    <button class="btn btn-primary">
                        <i class="bi bi-plus-lg"></i>
                        Add Stock
                    </button>

                </div>

            </div>


            <!-- STOCK GRID -->

            <div class="stock-page-grid">

                <?php

                $stocks = [

                    ['O+', '245', 'Units Available', 'high'],
                    ['O-', '86', 'Units Available', 'medium'],
                    ['A+', '198', 'Units Available', 'high'],
                    ['A-', '54', 'Units Available', 'medium'],
                    ['B+', '156', 'Units Available', 'high'],
                    ['B-', '39', 'Units Available', 'low'],
                    ['AB+', '74', 'Units Available', 'medium'],
                    ['AB-', '12', 'Units Available', 'critical']

                ];

                foreach ($stocks as $stock):

                ?>

                <div class="stock-page-card">

                    <div class="stock-page-top">

                        <div class="stock-blood-icon">
                            <?php echo $stock[0]; ?>
                        </div>

                        <span class="stock-status <?php echo $stock[3]; ?>">

                            <?php

                            if ($stock[3] == 'high') {
                                echo 'Healthy';
                            } elseif ($stock[3] == 'medium') {
                                echo 'Moderate';
                            } elseif ($stock[3] == 'low') {
                                echo 'Low';
                            } else {
                                echo 'Critical';
                            }

                            ?>

                        </span>

                    </div>


                    <div class="stock-page-number">

                        <strong>
                            <?php echo $stock[1]; ?>
                        </strong>

                        <span>
                            <?php echo $stock[2]; ?>
                        </span>

                    </div>


                    <div class="stock-page-progress">

                        <div
                            class="stock-page-progress-bar <?php echo $stock[3]; ?>"
                            style="width:
                            <?php
                                echo $stock[3] == 'high'
                                    ? '82%'
                                    : ($stock[3] == 'medium'
                                        ? '58%'
                                        : ($stock[3] == 'low'
                                            ? '31%'
                                            : '12%'));
                            ?>"
                        ></div>

                    </div>


                    <div class="stock-page-bottom">

                        <span>
                            Last updated today
                        </span>

                        <i class="bi bi-three-dots"></i>

                    </div>

                </div>

                <?php endforeach; ?>

            </div>


            <!-- STOCK TABLE -->

            <div class="page-card">

                <div class="page-card-header">

                    <div>

                        <h3>
                            <i class="bi bi-droplet-half"></i>
                            Inventory Details
                        </h3>

                        <p>
                            Detailed blood stock information.
                        </p>

                    </div>

                    <select class="form-select page-filter">

                        <option>All Blood Groups</option>
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


                <div class="page-table-wrapper">

                    <table class="page-table">

                        <thead>

                        <tr>

                            <th>BLOOD GROUP</th>
                            <th>AVAILABLE</th>
                            <th>RESERVED</th>
                            <th>TOTAL</th>
                            <th>STATUS</th>
                            <th>LAST UPDATED</th>
                            <th>ACTION</th>

                        </tr>

                        </thead>


                        <tbody>

                        <tr>

                            <td>
                                <span class="blood-badge">O+</span>
                            </td>

                            <td><strong>245 Units</strong></td>

                            <td>18 Units</td>

                            <td>263 Units</td>

                            <td>
                                <span class="status-badge completed">
                                    Healthy
                                </span>
                            </td>

                            <td>Today, 10:30 AM</td>

                            <td>
                                <button class="action-btn edit">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>

                        </tr>


                        <tr>

                            <td>
                                <span class="blood-badge">AB-</span>
                            </td>

                            <td><strong>12 Units</strong></td>

                            <td>8 Units</td>

                            <td>20 Units</td>

                            <td>
                                <span class="status-badge rejected">
                                    Critical
                                </span>
                            </td>

                            <td>Today, 09:15 AM</td>

                            <td>
                                <button class="action-btn edit">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>

                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>


            <?php include '../../includes/footer.php'; ?>

        </div>

    </main>

</div>


<script src="../../assets/js/script.js"></script>
<script src="../../assets/js/dashboard.js"></script>

</body>
</html>