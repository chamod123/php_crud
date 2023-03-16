<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "php_crud";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("connection fail" . mysqli_connect_error());
}

// echo "Connected Sucessfully";










