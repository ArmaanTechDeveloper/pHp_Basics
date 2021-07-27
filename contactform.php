<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $concern= $_POST['concern'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contactFormTest";

    $connect = mysqli_connect($servername,$username,$password,$database);
    if($connect){
        $sql = "INSERT INTO `contactus` ( `name`, `email`, `concern`, `date`) VALUES ('$name', '$email', '$concern', current_timestamp())";
        $result = mysqli_query($connect,$sql);
        if($result){
            echo "<div class='succesfull'>Your Concern Was registered successfully !! </div>";
        }
        else{
            echo "<div class='unsuccessfull'>Sorry our Website is facing a downtime !! Your concern was not registered please try again after Some time... </div>";
        }
    }
    else{
        echo "<div class='unsuccessfull'>Sorry our Website is facing a downtime !! Your concern was not registered please try again after Some time... </div>";
    }
}
?>