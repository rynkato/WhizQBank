<?php

    include "php/Whiz.php";

    $Whiz = new Whiz();

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title><?php echo SITE_NAME; ?> | Login</title>

        <?php
            echo $Whiz->getUI()->getMaterialHead();
            echo $Whiz->getUI()->getBootstrapHead();
        ?>

        <link rel="stylesheet" type="text/css" href='assets/css/material-design/md.css' />
        <link rel="stylesheet" type="text/css" href='assets/css/whiz.css' />
    </head>

    <body class="container-fluid bg-light fade-in-page">

        <!-- Main Content -->
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="mt-4">
                            <img src="assets/images/logo.png" width="30px" alt="Whiz QBank"/>
                            <h1 class="mt-4 ml-2 navbar-brand">Whiz QBank</h1>

                            <h3 class="mt-5 pl-1 text-purple">Log in.</h3>
                            <h5 class="text-black-50 pl-1">Ready to head back in?</h5>

                            <form method="post">
                                <div class="input-field mt-5">
                                    <i class="far fa-envelope prefix"></i>
                                    <input id="email_input" type="email" class="validate w-75"/>
                                    <label for="email_input">Email Address</label>
                                </div>

                                <div class="input-field mt-4">
                                    <i class="fas fa-lock prefix"></i>
                                    <input id="password_input" type="password" class="validate w-75"/>
                                    <label for="password_input">Password</label>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-2"></div>
                                    <div class="col-8">
                                        <button class="btn btn-outline-purple mt-5 w-100" type="submit" name="btn_login">
                                            Log in <i class="fas fa-chevron-right"></i>
                                        </button>
                                    </div>
                                    <div class="col-2"></div>
                                </div>


                            </form>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>



                <div class="d-flex d-lg-none row mt-n4">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <button class="btn btn-purple w-100" onclick="location.href = 'register.php';">Register</button>
                    </div>
                    <div class="col-4"></div>
                </div>

            </div>
            <div class="col-12 d-none d-lg-block col-lg-7 bg-dark min-vh-100 mb-n5">
                <br/><br/><br/><br/><br/><br/><br/> <!-- Lazy code, I know :') -->
                <h1 class="display-4 text-center text-purple mt-5 font-weight-light">Welcome to Whiz QBank.</h1>
                <h5 class="text-white text-center font-weight-light">Are you new here? Register now!</h5>

                <div class="row mt-5">
                    <div class="col-5"></div>
                    <div class="col-2">
                        <button class="btn btn-purple w-100" onclick="location.href = 'register.php';">Register</button>
                    </div>
                    <div class="col-5"></div>
                </div>

            </div>
        </div>


        <?php echo $Whiz->getUI()->getMaterialScripts(); ?>
    </body>

</html>