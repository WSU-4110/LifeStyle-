<?php
// Establish Connection to Database
function connect() {
    static $conn;
    if ($conn === NULL){
        $conn = mysqli_connect('localhost','john','pass1234','socialnetwork');
    }
    return $conn;
}

?>
