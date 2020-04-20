<?php


class Login {

    function __construct() {}

    function loginStudent($email, $pswd) {
        $pswdHash = "";

        $DatabaseHandler = new DatabaseHandler();
        $connection = $DatabaseHandler->getMySQLiConnection();

        $sql = "SELECT * FROM qbank_users_students WHERE Email_Address = ?";

        $statement = $connection->prepare($sql);
        $statement->bind_param("s", $email);
        $statement->execute();

        if($statement->num_rows > 0) {
            while($row = $statement->get_result()->fetch_assoc()) {
                $pswdHash = $row["Password_Hash"];
            }

            if(password_verify($pswd, $pswdHash)) {
                $response['error'] = false;
            } else {
                $response['error'] = true;
                $response['message'] = "The password entered is incorrect.";
            }
        } else {
            $response['error'] = true;
            $response['message'] = "There is no account with that email.";
        }

        $statement->close();
        $connection->close();

        return $response;
    }

}