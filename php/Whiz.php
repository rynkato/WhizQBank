<?php

// Defines
include_once $_SERVER['DOCUMENT_ROOT'] . '/qbank/settings/Database.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/qbank/settings/General.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/qbank/settings/Messages.php';

// Modals
include_once $_SERVER['DOCUMENT_ROOT'] . '/qbank/php/modals/UserModal.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/qbank/php/modals/StudentModal.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/qbank/php/modals/ParentModal.php';

// UI
include_once $_SERVER['DOCUMENT_ROOT'] . '/qbank/php/ui/Alerts.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/qbank/php/ui/Dashboard.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/qbank/php/ui/UI.php';

include_once $_SERVER['DOCUMENT_ROOT'] . '/qbank/php/DatabaseHandler.php';

include_once $_SERVER['DOCUMENT_ROOT'] . '/qbank/php/credentials/Credentials.php';

include_once $_SERVER['DOCUMENT_ROOT'] . '/qbank/php/modals/ParentModal.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/qbank/php/modals/StudentModal.php';

class Whiz {

    function __construct() {
        if(session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

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

    function getUserModal() {
        return new UserModal();
    }



}