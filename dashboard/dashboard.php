<?php

    include '../php/Whiz.php';

    $Whiz = new Whiz();
    $Whiz->getUI()->getDashboard()->checkSessionLogic();

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo SITE_NAME; ?> | Dashboard</title>
        <?php
            echo $Whiz->getUI()->getDashboardHead();
        ?>
    </head>

    <body class="">
        <!-- Start: Navbar -->
        <?php
            $Whiz->getUI()->getDashboard()->getNavigation(0);
        ?>
        <!-- End: Navbar -->
        <div class="main-content fade-in-page">
            <!-- Start: Header -->
            <?php
                $Whiz->getUI()->getDashboard()->getHeader();
            ?>
            <!-- End: Header -->
            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
                <div class="container-fluid">
                    <div class="header-body">
                        <!-- Card stats -->
                        <div class="row">
                            <div class="col-xl-4 col-lg-3"></div>
                            <div class="col-xl-4 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Dashboard</h5>
                                                <span class="h2 font-weight-bold mb-0">Home</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                                                    <i class="ni ni-tv-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt--7">
                <div class="row">
                    <div class="col-xl-8 mb-5 mb-xl-0">
                        <div class="card bg-gradient-default shadow">
                            <div class="card-header bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                                        <h2 class="text-white mb-0">Development</h2>
                                    </div>
                                    <div class="col">
                                        <ul class="nav nav-pills justify-content-end">
                                            <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales">
                                                <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                                                    <span class="d-none d-md-block">Month</span>
                                                    <span class="d-md-none">M</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mr-2 mr-md-0">
                                                <a href="" id="download-total-sales" class="nav-link py-2 px-3 active" data-toggle="tab">
                                                    <span class="d-none d-md-block"><i class="fa fa-download"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="chart-content" class="card-body">
                                <!-- Chart -->
                                <div class="chart">
                                    <!-- Chart wrapper -->
                                    <canvas id="chart-total-sales" class="chart-canvas"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card shadow">
                            <div class="card-header bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                                        <h2 class="mb-0">Total orders</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Chart -->
                                <div class="chart">
                                    <canvas id="chart-total-orders" class="chart-canvas"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="footer">
                    <div class="row align-items-center justify-content-xl-between">
                        <div class="col-xl-6">
                            <div class="copyright text-center text-xl-left text-muted">
                                &copy; 2020<a href="" class="font-weight-bold ml-1" target="_blank"><?php echo SITE_NAME; ?></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <?php
            echo $Whiz->getUI()->getDashboardScripts();
        ?>
    </body>

</html>