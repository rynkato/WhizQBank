<?php

// Defines
include_once 'settings/Database.php';
include_once 'settings/General.php';
include_once 'settings/Messages.php';

// Custom Classes
include_once 'ui/Alerts.php';
include_once 'ui/UI.php';
include_once 'DatabaseHandler.php';
include_once 'credentials/Credentials.php';

class Whiz {

    function getAlerts() {
        return new Alerts();
    }

    function getUI() {
        return new UI();
    }

    function getDatabaseHandler() {
        return new DatabaseHandler();
    }

    function getCredentials() {
        return new Credentials();
    }



}