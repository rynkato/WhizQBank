<?php

// Defines
include_once 'settings/Database.php';
include_once 'settings/General.php';
include_once 'settings/Messages.php';

// Custom Classes
include_once 'ui/UI.php';
include_once 'DatabaseHandler.php';

class Whiz {

    function getUI() {
        return new UI();
    }

    function getDatabaseHandler() {
        return new DatabaseHandler();
    }



}