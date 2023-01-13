<?php 
      ini_set ("error_reporting", 0);
      session_start();
      include "db.php";

   
      if(isset($_GET['delete_all'])){
        mysqli_query($conn, "DELETE FROM `cart` WHERE userID='$_SESSION[userid]'") or die('query failed');
        header('location:index.php');

     }

?>
    