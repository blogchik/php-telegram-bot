<?php

// MySQL Info
$servername = ""; // MySQL Server Name
$username = ""; // MySQL Username
$password = ""; // MySQL Password
$dbname = ""; // MySQL DataBase Name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error){

    echo "Connection Error: " . $conn->connect_error;

    exit();

}

?>