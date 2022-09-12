<?php

$sname = "localhost";
$username = "root";
$password = "";

$db_name ="Eastleigh";

$conn = mysqli_connect($sname, $username, $password, $db_name );

if(!$conn){
    echo "connection failed!";
}
