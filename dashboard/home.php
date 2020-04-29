<?php

    include '../php/Whiz.php';

    $Whiz = new Whiz();

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo SITE_NAME; ?> | Home</title>

        <?php echo $Whiz->getUI()->getDashboardHead() ?>
    </head>

    <body class="container">

        <div class="row">
            <div class="col col-lg-1"></div>
            <div class="col-12 col-lg-10">
                <div class="card">
                    <div class="card-title">SPM</div>
                </div>
            </div>
            <div class="col col-lg-1"></div>
        </div>


        <?php echo $Whiz->getUI()->getDashboardScripts(); ?>
    </body>

</html>