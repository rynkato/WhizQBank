<?php

    include "php/Whiz.php";

    $Whiz = new Whiz();

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title><?php echo SITE_NAME; ?> | Home</title>

        <?php echo $Whiz->getUI()->getMaterialHead();?>

        <link rel="stylesheet" type="text/css" href='assets/css/material-design/md.css' />
    </head>

    <body style="background: #f7f7fd;">

        <!-- Main Content -->
        <div class="container">
            <div class="row">
                <div class="col s12 l6">
                    <div class="card">
                        <div class="card-content">
                            <h3 class="card-title center">Login</h3>
                            <div class="input-field">
                                <i class="far fa-envelope prefix"></i>
                                <input id="email_input" type="email" class="validate"/>
                                <label for="email_input">Email Address</label>
                            </div>

                            <div class="input-field">
                                <i class="fas fa-lock prefix"></i>
                                <input id="password_input" type="password" class="validate"/>
                                <label for="password_input">Password</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 l6">

                </div>
            </div>
        </div>


        <?php echo $Whiz->getUI()->getMaterialScripts(); ?>
    </body>

</html>