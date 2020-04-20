<?php


class StudentModal {

    public $studentID, $studentName, $studentEmail, $studentDOB;

    function __construct($id, $name, $email, $dob) {
        $this->studentID = $id;
        $this->studentName = $name;
        $this->studentEmail = $email;
        $this->studentDOB = $dob;
    }

    function getStudentID() {
        return $this->studentID;
    }

    function getStudentName() {
        return $this->studentName;
    }

    function getStudentEmail() {
        return $this->studentEmail;
    }

    function getStudentDateOfBirth() {
        return $this->studentDOB;
    }

}