<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactus</title>
    <link rel="stylesheet" href="contactus.css">
    <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
</head>
<body>
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

    <form class="contact" action="/phpt/formtest/contactus.php" method="post">
        <div class="heading">CONTACT US</div>
        <div class="tags">Name</div>
        <input type="text" name="name">
        <div class="tags">Email</div>
        <input type="email" name="email">
        <div class="tags">Your Concern</div>
        <textarea name="concern"  cols="30" rows="10" name="concern"></textarea>
        <button>Submit</button>
</form>


</body>
</html>



