<?php
include ("connection.php");

if(isset($_GET['deletedata'])){
    $id = $_GET['deletedata'];

    $delete_query = "delete from crud where id = $id";
    $result = mysqli_query($conn,$delete_query);
    if($result){
        // echo "deleted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>