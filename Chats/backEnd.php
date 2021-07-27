<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['inputMessage'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "chattingdatabase";

    $connect = mysqli_connect($servername,$username,$password,$database);
    if($connect){
        $sql = "INSERT INTO `messages` (`message`) VALUES ('$name')";
    }
    else{
        echo "Connection Unsuccessful";
    }
}
?>