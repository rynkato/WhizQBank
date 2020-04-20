<?php


class Register {

    function __construct() {}

    function registerStudent($name, $email, $pswd, $dob) {
        $DatabaseHandler = new DatabaseHandler();
        $connection = $DatabaseHandler->getMySQLiConnection();

        $sql = "INSERT INTO qbank_users_students(Full_Name, Email_Address, Password_Hash, DOB) VALUES (?, ?, ?, ?)";

        $statement = $connection->prepare($sql);

        $pswdHash = password_hash($pswd, PASSWORD_DEFAULT);

        $statement->bind_param("ssss",$name, $email, $pswdHash, $dob);

        if($statement->execute()) {
            $response['error'] = false;
            $response['studentEmail'] = $email;
        } else {
            $response['error'] = true;
            $response['message'] = "There was an error while registering you with us.";
        }

        $statement->close();
        $connection->close();

        return $response;
    }

    function registerParent($childID, $name, $email, $pswd) {
        $DatabaseHandler = new DatabaseHandler();
        $connection = $DatabaseHandler->getMySQLiConnection();

        $sql = "INSERT INTO qbank_users_parents(Child_ID, Full_Name, Email_Address, Password_Hash) VALUES (?, ?, ?, ?)";

        $statement = $connection->prepare($sql);

        $pswdHash = password_hash($pswd, PASSWORD_DEFAULT);

        $statement->bind_param("isss", $childID, $name, $email, $pswdHash);

        if($statement->execute()) {
            $response['error'] = false;
        } else {
            $response['error'] = true;
            $response['message'] = "There was an error while registering you with us.";
        }

        $statement->close();
        $connection->close();

        return $response;
    }

    function crosscheckPassword($pswd, $cpswd) {
        if($pswd === $cpswd) {
            $response['error'] = false;
        } else {
            $response['error'] = true;
            $response['message'] = "The passwords do not match";
        }

        return $response;
    }

    function getStudentID($email) {
        $response['studentID'] = "";

        $DatabaseHandler = new DatabaseHandler();
        $connection = $DatabaseHandler->getMySQLiConnection();

        $sql = "SELECT * FROM qbank_users_students WHERE Email_Address = ?";
        $statement = $connection->prepare($sql);
        $statement->bind_param("s", $email);
        $statement->execute();

        if($statement->num_rows > 0) {
            $response['error'] = false;

            while($row = $statement->get_result()->fetch_assoc()) {
                $response['studentID'] = $row['ID'];
            }
        } else {
            $response['error'] = true;
            $response['message'] = "The Student ID could not be found.";
        }

        $statement->close();
        $connection->close();

        return $response;
    }

}