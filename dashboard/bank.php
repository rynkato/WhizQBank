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
            $Whiz->getUI()->getDashboard()->getNavigation(2);
        ?>
        <!-- End: Navbar -->
        <div class="main-content fade-in-page">
            <!-- Start: Header -->
            <?php
                $Whiz->getUI()->getDashboard()->getHeader();
            ?>
            <!-- End: Header -->
            <div class="header bg-gradient-purple pb-8 pt-5 pt-md-8">
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
                                                <h5 class="card-title text-uppercase text-muted mb-0">Student</h5>
                                                <span class="h2 font-weight-bold mb-0">Question Bank</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-purple text-white rounded-circle shadow">
                                                    <i class="fas fa-university"></i>
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
                    <div class="col-12 mb-5 mb-xl-0">
                        <div class="card bg-gradient-white shadow">
                            <div class="card-header bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h2 class="h2 font-weight-bold mb-0 text-center text-purple">
                                            <i class="fas fa-trophy mr-2"></i>SPM
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div id="leaderboard-content" class="card-body">
                                <div class="row">
                                    <div class="col-4 text-center mb-5">
                                        <a class="text-lg" href="">English</a>
                                    </div>
                                    <div class="col-4 text-center mb-5">
                                        <a class="text-lg" href="">Bahasa Melayu</a>
                                    </div>
                                    <div class="col-4 text-center mb-5">
                                        <a class="text-lg" href="">Science</a>
                                    </div>
                                    <div class="col-4 text-center mb-5">
                                        <a class="text-lg" href="">Chemistry</a>
                                    </div>
                                    <div class="col-4 text-center mb-5">
                                        <a class="text-lg" href="">Physics</a>
                                    </div>
                                    <div class="col-4 text-center mb-5">
                                        <a class="text-lg" href="">Biology</a>
                                    </div>
                                    <div class="col-4 text-center mb-5">
                                        <a class="text-lg" href="">Additional Mathematics</a>
                                    </div>
                                    <div class="col-4 text-center mb-5">
                                        <a class="text-lg" href="">Sejarah</a>
                                    </div>
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