<?php 

$filePointer = fopen("this.txt" , 'r');
// mode r to read and w to write 
if(!$filePointer){
    echo "Unable to open the file please enter a valid file syntax";
}
$fileSize = filesize("this.txt");
$content = fread($filePointer , $fileSize);

fclose($filePointer); // closing the file to get a lesser load on the server
echo "<h1>".$content."</h1>";
echo "thank you !! ";
?>