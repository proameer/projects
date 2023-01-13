<?php
  ini_set ("error_reporting", 0);
  session_start();
  include "db.php";

  $user_id = $_SESSION['userid'];

  if(isset($_POST['add'])){
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $insert = "insert into cart (productName , price , image , userID) values ('$productName','$price','$image' , '$user_id')";
    mysqli_query($conn , $insert);
    header('location:cart.php');
}
?>