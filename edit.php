<?php include 'connection.php';

$id = $_GET['editdata'];
$edit_query = "select * from crud where id =$id";
$result = mysqli_query($conn,$edit_query);
$row = mysqli_fetch_assoc($result);
$name = $row['Name'];
$mobile= $row['Mobile'];

if(isset($_POST['edit'])){
    $name = $_POST['name'];
    $mobile = $_POST['num'];

    $edit_query = "Update crud set id='$id' ,name ='$name',mobile='$mobile' where id=$id";
    $result=mysqli_query($conn,$edit_query);
    if($result){
        //echo "edited successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <div class=container>
    <div class=edit>  
    <form method="post">     
        <h3>EDIT-DATA</h3>
        <lable>NAME:</lable> 
        <input type="text" name="name" value =<?php echo "$name"?>><br><br>
        <lable>MOBILE:</lable>
        <input type="text" name="num" value =<?php echo "$mobile"?>><br><br>
        <button type="submit" name="edit" >Edit</button>
    </form>
</div>
</div>
</body>
</html>
