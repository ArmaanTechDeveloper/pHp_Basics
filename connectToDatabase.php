<?php

// Connecting to a database requires servername username and password

$servername = "localhost";
$username = "root";
$password = "";


//connecting statement 
$connection = mysqli_connect($servername , $username , $password);


// printing the connection statement using echo
if($connection){
    echo "Connection was successfully Established to my sql database";
}
else{
    die("sorry we failed to connect : ".mysqli_connect_error());
}


?>