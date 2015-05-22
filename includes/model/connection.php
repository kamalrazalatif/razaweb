<?php

require_once("config.php");

// database connection and selection

//1. set up the connection
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// 2. Test the connection
if(mysqli_connect_errno()){
    die("Database Connection Failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno . ")");
}

?>