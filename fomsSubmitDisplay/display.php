<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- linking the bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Displaying the submits</title>
    <style>
      
    </style>
</head>
<body>



  <?php 
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "getanddisplay";

        $connect = mysqli_connect($servername,$username,$password,$database);
        if($connect){
          $sql = "SELECT * FROM `display`";
          $result = mysqli_query($connect,$sql);
        }
        
        else{
          echo "Unsuccessfull to connect to the database ";
        }

        // if(isset($_GET['delete'])){
        //   $name = $_GET['delete'];
        //   echo $name;
        //   // $delete = true;
        //   // $sql = "DELETE FROM `notes` WHERE `sno` = $sno";
        //   // $result = mysqli_query($conn, $sql);
        // }
        ?>
    

    <!-- making a table  -->

    <table class="table">
        <thead>
          <tr>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">concern</th>
            <th scope="col">date</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>

        <tbody>
          <?php while($row = mysqli_fetch_assoc($result)){ 
            $items[] = $row;
          }
          $items = array_reverse($items ,true);
          ?>

          <?php foreach($items as $item){ ?>
          <tr>
            <th scope="row"><?php echo ($item["name"]); ?></th>
            <td><?php echo ($item["email"]); ?></td>
            <td><?php echo ($item["concern"]); ?></td>
            <td><?php echo ($item["Date"]); ?></td>
            <td><button type="button" class="delete btn btn-warning">Delete</button></td>
          </tr>
          <?php } ?>
        </tbody>


      </table>


    <!-- linking the bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>