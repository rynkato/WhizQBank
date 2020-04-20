<?php


class ParentModal {

    public $parentID, $parentName, $parentEmail, $childID;

    function __construct($id, $name, $email, $cID) {
        $this->parentID = $id;
        $this->parentName = $name;
        $this->parentEmail = $email;
        $this->childID = $cID;
    }

    function getParentID() {
        return $this->parentID;
    }

    function getParentName() {
        return $this->parentName;
    }

    function getParentEmail() {
        return $this->parentEmail;
    }

    function getChildID() {
        return $this->childID;
    }

}