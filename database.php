<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "samplelogin";

// create connection
$conn = new mysql(
    $servername,
    $username,
    $password,
    $database,
);

// check connection
if($conn -> connect_error){
    die("Connection failed" .$conn -> connect_error);
}


?>