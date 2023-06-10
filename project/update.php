<?php 

  include('conn.php');

    $id = $_GET['Unumber'];
  if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $number = $_POST['number'];

      $sql = "update  contacts set id=$id, name='$name', number=$number where id=$id"   ;

      $result = mysqli_query($conn,$sql);
       
      if($result)

      {
          header('location:display.php');

  }
      else
      {
          // die(mysqli_error($conn));
          echo '<script> window.alert("please enter the correct detail")</script>';
      }
         $conn->close();

  }
?>



<!DOCTYPE html>
<html lang="en">

  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="btn.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">

  </head>
  <body><center><br><br><br><br><br><br><br><br>
    <h1>UPDATE YOUR DETAIL:</h1>
    
    <form method="post">
    <h1><i class="fa fa-user icon"></i><input type="text" name="name" id="name" placeholder="enter name ">
    <h1>&#128222<input type="text" name="number" id="number" placeholder="enter number ">
    <br><button class="add" name="submit"  onlick="myfunction()">update contact</button>
    
    </form>

    <script>
      function myfuntion(){
        alert("contact updated!");
      }
      </script>
        <a href="contact.php" class="home">&#8592;</button></a>
  </body>
</html>

