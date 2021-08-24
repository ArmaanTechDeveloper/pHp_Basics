<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formsSubmit</title>

    
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Klee+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $concern = $_POST['concern'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "getanddisplay";

        $connect = mysqli_connect($servername,$username,$password,$database);

        if($connect){
            $sql = "INSERT INTO `display` (`name`, `email`, `concern`, `Date`) VALUES ('$name', '$email', '$concern', current_timestamp());";
            $result = mysqli_query($connect,$sql);
            if($result){
                echo "<div class='succesfull'>Your Concern Was registered successfully !! </div>";
            }
            else{
                echo "<div class='unsuccessfull'>Sorry our Website is facing a downtime !! Your concern was not registered please try again after Some time... </div>";
            }
        }
        else{
            echo "Unable to connect to the database ";
        }
    }
    ?>
    
    <form action="formSubmit.php" method="post" class="center form" autocomplete="off">
        <div class="container center">

        <h1 class="heading">Enter Your name </h1>
        <input type="text" class="inputHeight"  name="name">

        <h1 class="heading">Enter Your email </h1>
        <input type="email" class="inputHeight" name="email">


        <h1 class="heading">Enter your concern </h1>
        <textarea name="concern" id="" cols="30" rows="10" ></textarea>
        <button class="button">Submit</button>
    </div>
    </form>

</body>
</html>