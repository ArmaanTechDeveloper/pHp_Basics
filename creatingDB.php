<?php
// establishing a connection with sql
$servername = "localhost";
$username ="root";
$password = "";

$connection = mysqli_connect($servername , $username , $password); // fuction to establish a connection

// Checking if connection is established successfully or not
if($connection){
    echo "Connection establish successfullly !! <br> ";
}
else{
    echo "Failed to eastablish the connection <br>". mysqli_connect_error();
}

//Creating a data base using php
$sql = "CREATE DATABASE db1"; // storing the query
$checkDatabaseCreation = mysqli_query($connection , $sql); // running the query

// Checking if the data base was created succesfully or not 
if($checkDatabaseCreation){
    echo "DataBase was created Successfully !! ";
}
else{
    echo "Failed to Create a Database due to : <br> ";
    //printing the error if the database is not established succesfullly
    echo mysqli_error($connection);
}

?>