<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "testtutorial";

//connecting statement 
$connect = mysqli_connect($servername, $username , $password , $database);
if($connect){
    echo "Connection with the server was successfull ";
}
else{
    echo "Unable to connect with the server ";
}
?>