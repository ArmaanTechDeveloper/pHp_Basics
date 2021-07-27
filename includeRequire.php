<?php
// Using include and require in php

require 'testtutorial.php';
// selecting the data table

$sql = 'SELECT * FROM `employees`';
$result = mysqli_query($connect , $sql);

echo "<br>";
while($rows = mysqli_fetch_assoc($result)){
    echo $rows['sno'].$rows['name'].$rows['role'].$rows['doj'];
    echo "<br>";
}
?>