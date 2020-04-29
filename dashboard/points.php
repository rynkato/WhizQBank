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
            $Whiz->getUI()->getDashboard()->getNavigation(1);
        ?>
        <!-- End: Navbar -->
        <div class="main-content fade-in-page">
            <!-- Start: Header -->
            <?php
                $Whiz->getUI()->getDashboard()->getHeader();
            ?>
            <!-- End: Header -->
            <div class="header bg-gradient-orange pb-8 pt-5 pt-md-8">
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
                                                <span class="h2 font-weight-bold mb-0">Your Points</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                    <i class="fas fa-medal"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="m-0 text-orange text-xl text-center font-weight-bold">
                                                    1589 points
                                                </p>
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
                    <div class="col-xl-3"></div>
                    <div class="col-xl-6 mb-5 mb-xl-0">
                        <div class="card bg-gradient-white shadow">
                            <div class="card-header bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h2 class="h2 font-weight-bold mb-0 text-center text-orange">
                                            <i class="fas fa-trophy mr-2"></i>Leaderboard
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div id="leaderboard-content" class="card-body">
                                <div class="row mb-1">
                                    <div class="col-2 text-center">
                                        <i class="fas fa-medal text-orange"></i>
                                    </div>
                                    <div class="col-6">
                                        <p class="h2 text-default">Student #1</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="h2 text-default text-right">12600 Pts</p>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-2 text-center">
                                        <p class="h3 text-default">2</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="h3 text-default">Student #2</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="h3 text-default text-right">8578 Pts</p>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-2 text-center">
                                        <p class="h3 text-default">3</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="h3 text-default">Student #3</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="h3 text-default text-right">7600 Pts</p>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-2 text-center">
                                        <p class="h3 text-default">4</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="h3 text-default">Student #4</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="h3 text-default text-right">5300 Pts</p>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-2 text-center">
                                        <p class="h3 text-default">5</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="h3 text-default">Student #5</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="h3 text-default text-right">2700 Pts</p>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-12 text-center">
                                        <p class="h3 text-center">...</p>
                                    </div>
                                </div>

                                <div class="row mb-1 outline-orange">
                                    <div class="col-2 text-center">
                                        <p class="h3 text-orange">6</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="h3 text-orange">You</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="h3 text-orange text-right">1589 Pts</p>
                                    </div>
                                </div>

                                <!-- Chart
                                <div class="chart">
                                    Chart wrapper
                                    <canvas id="chart-total-sales" class="chart-canvas"></canvas>
                                </div>
                                -->

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3"></div>
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