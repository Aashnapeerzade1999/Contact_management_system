<?php
include('conn.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <center><br><br><br><br><br><br><br><br><h1>MY CONTACT BOOK</h1>
    <a href="contact.php" class="home">&#8592;</button></a>
    <button class="add" ><a href="index.php"><h3>+</h3></a></button>
    <table class="table">
        <tr>
        
            <th> <i class="fa fa-user icon"></i>Name</th>
            <th>&#128222Number</th>
            <th>Operation</th>

        </tr>
      <?php
      $sql = "select * from  contacts";
      $resu = mysqli_query($conn,$sql);
      if ($resu) {
        while ($row = mysqli_fetch_assoc($resu)) {
            $id=$row['id'];
            $name=$row['name'];
            $number=$row['number'];
            echo '<tr> 
        
            <td>'.$name.'</td>
            <td>'.$number.'</td>
            <td>
            <button class="edit"><a href="update.php?Unumber='.$id.'"> <i class="fa fa-edit"></i></a></button>
            <button class="delete"><a href="delete.php?Dnumber='.$id.'"> <i class="fa fa-trash"></i></a></button>

            </td>
            </tr>
            ';
            
        }

      }

      ?>
</body>
</html>