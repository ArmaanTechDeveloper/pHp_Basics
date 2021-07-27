<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send messages in a chat</title>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    
    
    <!-- Linking the css file  -->
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="messageStyle.css?v=<?php echo time(); ?>">
</head>
<body>
    <div id="mainChatBody">
        <div class="mainAlign">
        <div class="upperBody"></div>
        <div class="middleBody">
        <!-- <div class="SentMessage">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus optio odit recusandae dignissimos. Libero natus eum aliquid quibusdam neque ea!</div> -->
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
                    mysqli_query($connect,$sql);
                    $print = "SELECT * FROM `messages`";
                    $result = mysqli_query($connect, $print);
                    while($row = mysqli_fetch_assoc($result)){
                        echo '<div class="SentMessage">'.$row['message'].'</div>';
                    }
                    // echo '<div class="SentMessage">'.$name.'</div>';
                }
                else{
                    echo "Connection Unsuccessful";
                }
            }
            ?>
            
            
        </div>
        <div class="lowerBody">
            <form action="/phpt/Chats/main.php" class="SendingMessage" method="post" autocomplete="off">
                <input type="text" name="inputMessage" placeholder=" Write your message here ">
                <button class="SendMessage">send</button>
            </form>
        </div>
    </div>
    </div>
</body>
</html>
