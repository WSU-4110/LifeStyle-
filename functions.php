<?php
// Establish Connection to Database
function connect() {
    static $conn;
    if ($conn === NULL){
        $conn = mysqli_connect('127.0.0.1:3306','john','pass1234','socialnetwork');
    }
    return $conn;
}

?>
