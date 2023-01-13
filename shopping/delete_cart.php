<?php 
      ini_set ("error_reporting", 0);
      session_start();
      include "db.php";

      $id = $_GET['id'];
      $query = mysqli_query($conn , "delete from cart where id=$id");
      header('location:cart.php');

?>