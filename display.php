<?php include ("connection.php");

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
    <div class=container>
    <table border='1'>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>MOBILE</th>
                <th>EDIT</th>
                <th>DELETE</th>    
            </tr>
        </thead>
        <tbody>
            <?php
                $query="select * from crud";
                $result=mysqli_query($conn,$query);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['ID'];
                        $name = $row['Name'];
                        $mobile = $row['Mobile'];

                        echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$mobile.'</td>
                        <td><button><a href="edit.php?editdata='.$id.'">EDIT</a></button></td>
                        <td><button><a href="delete.php?deletedata='.$id.'">DELETE</a></button></td>
                        </tr>';
                    }
                }
            ?>
        </tbody>
    </table>
    <br><br>
    </div>
    <div class=add>
    <button type=submit name=add><a href="index.php">ADD</a></button>
    </div>
</body>
</html>