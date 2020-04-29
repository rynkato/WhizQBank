<?php

class UI {

    function getMaterialHead() {
        return "<link href='assets/images/logo.png' rel='icon' type='image/png' />
                <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>";
    }

    function getMaterialScripts() {
        return "<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js'></script>";
    }

    function getBootstrapHead() {
        return "<link href='../assets/images/logo.png' rel='icon' type='image/png'>
                <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
                <link href='https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' rel='stylesheet'>";
    }

    function getCustomBootstrapHead() {
        return "<link rel='stylesheet' href='assets/css/bootstrap/bootstrap.css' />
                <link href='https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' rel='stylesheet'>";
    }

    function getBootstrapScripts() {
        return "<script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
        <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js'></script>";
    }

    function getDashboardHead() {
        return "<!-- Favicon -->
                <link href='../assets/images/logo.png' rel='icon' type='image/png'>
                <!-- Fonts -->
                <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet'>
                <!-- Icons -->
                <link href='../assets/js/plugins/nucleo/css/nucleo.css' rel='stylesheet' />
                <link href='../assets/js/plugins/fontawesome-free/css/all.min.css' rel='stylesheet' />
                <!-- CSS Files -->
                <link href='../assets/css/dashboard.css' rel='stylesheet' />";
    }

    function getDashboardScripts() {
        return "<!--   Core   -->
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.bundle.min.js\"></script>
                <!--   Chart JS   -->
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js\"></script>
                <!--   Dashboard JS   -->
                <script src=\"../assets/js/dashboard.min.js\"></script>";
    }

    function getDashboard() {
        return new Dashboard();
    }

}