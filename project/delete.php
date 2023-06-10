<?php 

include('conn.php');

if (isset($_GET['Dnumber'])){
    $id=$_GET['Dnumber'];

    $sql="delete from contacts where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)

    {
        header('location:display.php');
}
    else
    {
        die(mysqli_error($conn));
    }
}
?>