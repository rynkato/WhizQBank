<?php


class Login {

    function __construct() {}

    function login($email, $pswd) {
        $pswdHash = "";

        $DatabaseHandler = new DatabaseHandler();
        $connection = $DatabaseHandler->getMySQLiConnection();

        $sqlS = "SELECT * FROM qbank_users_students WHERE Email_Address = '$email'";

        $statementS = $connection->query($sqlS);

        if($statementS->num_rows > 0) {
            $idFromDB = 0;
            $nameFromDB = "";
            $emailFromDB = "";
            $dobFromDB = "";

            while($row = $statementS->fetch_assoc()) {
                $pswdHash = $row["Password_Hash"];

                $idFromDB = $row["ID"];
                $nameFromDB = $row["Full_Name"];
                $emailFromDB = $row["Email_Address"];
                $dobFromDB = $row["DOB"];
            }

            if(password_verify($pswd, $pswdHash)) {
                $response['error'] = false;
                $response['StudentModal'] = new StudentModal($idFromDB, $nameFromDB, $emailFromDB, $dobFromDB);
            } else {
                $response['error'] = true;
                $response['message'] = "The password entered is incorrect.";
            }
        } else {
            $sqlP = "SELECT * FROM qbank_users_parents WHERE Email_Address = '$email'";

            $statementP = $connection->query($sqlP);

            if($statementP->num_rows > 0) {
                $idFromDB = 0;
                $nameFromDB = "";
                $emailFromDB = "";
                $childIDFromDB = "";

                while($row = $statementS->fetch_assoc()) {
                    $pswdHash = $row["Password_Hash"];

                    $idFromDB = $row["ID"];
                    $nameFromDB = $row["Full_Name"];
                    $emailFromDB = $row["Email_Address"];
                    $childIDFromDB = $row["Child_ID"];
                }

                if(password_verify($pswd, $pswdHash)) {
                    $response['error'] = false;
                    $response['ParentModal'] = new ParentModal($idFromDB, $nameFromDB, $emailFromDB, $childIDFromDB);
                } else {
                    $response['error'] = true;
                    $response['message'] = "The password entered is incorrect.";
                }
            } else {
                $response['error'] = true;
                $response['message'] = "There's no account with that email address.";
            }

            $statementP->close();
        }

        $statementS->close();
        $connection->close();

        return $response;
    }

}