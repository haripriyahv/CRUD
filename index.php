<?php include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mobile=$_POST['num'];

    $query="insert into crud(name,mobile) values('$name','$mobile')";
    $result=mysqli_query($conn,$query);
    if($result){
        // echo "inserted successfully";
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class=index>
    <div class=form>
    <form method="post">
        <h3>DATA ENTRY</h3>
        <lable>NAME:</lable> 
        <input type="text" name="name"><br><br>
        <lable>MOBILE:</lable>
        <input type="text" name="num"><br><br>
        <button type="submit" name="submit" >Submit</button>
    </form>
    </div>
    </div>

</body>
</html>
