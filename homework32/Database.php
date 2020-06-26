<?php

class DB {
    public $host;
    public $username;
    public $password;
    public $database;

    public $conn;

    public function __construct($host = '127.0.0.1', $username = 'homestead', $password = 'secret', $database = 'crud_app') {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        
        $this->connect();
    }

    public function connect() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }

    
    public function select($sql) {

        // $sql = "SELECT * FROM users"; ??

        $query = mysqli_query($this->conn, $sql);

        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

        return $result;
    }

    public function delete($sql) {

        mysqli_query($this->conn, $sql);
    }

    public function update() {

    }
    // $params = [
        // 'id'=>NULL,
        // 'firstname'=> $firstname,
        // 'lastname'=> $lastname,
        // 'created_at'=> date('Y-m-d H:m:s')
    public function insert($table, $params) {

        $rowsNames = "";
        $rowsValues = "";

        foreach ($table as $key => $param) {
            $rowsNames.=$key." ";
            $rowsValues.="'".$param."' " ;
        }
        if (!empty($rowsNames) && !empty($rowsValues)) {
        $sql = "INSERT INTO $table($rowsNames) VALUES($rowsValues)";
    
        mysqli_query($this->conn, $sql);
        }
    }

    public function close() {
        mysqli_close($this->conn);
    }

}

// CONNECT
// $getUsers = mysqli_connect("127.0.0.1", "homestead", "secret", "crud_app");

// SELECT
// $sql = "SELECT * FROM users";

// $query = mysqli_query($getUsers, $sql);

// $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
// 

// $users = [];
// foreach ($result as $row) {
//   $users[] = new User($row['id'], $row['firstname'], $row['lastname'], $row['created_at']);    
// }
// var_dump($users);

// mysqli_close($getUsers);