<?php

class User {
    public $id;
    public $fistname;
    public $lastname;
    public $jobs;
    public $createdAt;

    public function __construct($id, $firstname, $lastname, $createdAt) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->createdAt = $createdAt;
    }

    public function fullname() {
        return $this->firstname . " " . $this->lastname;
    }

    public function getDeleteUrl() {
        return "delete.php?id=" . $this->id;
    }

    
    public function getUpdateUrl() {
        return "update.php?id=" . $this->id;
    }

    public function getCreatedDate() {
        return date("d-M", strtotime($this->createdAt));
    }
}