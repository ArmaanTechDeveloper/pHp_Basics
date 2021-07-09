<?php
function sumOftheMarks($marks){
    $sum = 0;
    foreach($marks as $value){
        $sum +=$value;
    }
    return $sum;
}

$tindi = array(20,10,30,50,45);
$totalmarks = sumOftheMarks($tindi);
echo "The sum of the marks is ".$totalmarks."<br>";

?>