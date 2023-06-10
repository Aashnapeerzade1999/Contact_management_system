<?php 

  include('conn.php');
  if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $number = $_POST['number'];

      $sql = "insert into contacts (name,number)
      values ('$name',$number)";

      $result = mysqli_query($conn,$sql);
       
      if($result)

      {
          header('location:display.php');
  }
      else
      {
          die(mysqli_error($conn));
      }
         $conn->close();

  }
?>