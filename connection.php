<?php

$conn = new mysqli("localhost","root","","crud");
if($conn){
   // echo"Connection successfully done";
}else{
    die(mysqli_error($conn));
}

?>