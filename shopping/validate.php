<?php 
      ini_set ("error_reporting", 0);
      session_start();
      include "db.php";
      $user_id = $_SESSION['user_id'];
      
      $id = $_GET['id'];
      $query = mysqli_query($conn , "select * from products where id=$id");
      $data = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <?php include "head.php"; ?>
       <style>
        input{
            display : none;
        }
        #main{
            display:flex;
            margin:auto;
            text-align:center;
        }
    </style>
   </head>
   <body style="margin:10% 0">

    <center>
    <div id="main" style="display:flex; justify-content:center; width:30%; box-shadow: 1px 1px 10px gray; padding:30px ">
        <form method="post" action="insert_cart.php">
            <h1>تأكيد الاضافة</h1><br>
            <input type="text" name="id" value="<?php echo $data['id'] ?>">
            <input type="text" name="productName" value="<?php echo $data['productName'] ?>">
            <input type="text" name="price" value="<?php echo $data['price'] ?>">
            <input type="text" name="image" value="<?php echo $data['image'] ?>">
            <button type="submit" name="add" class="btn btn-info p-3">تأكيداضافة المنتج </button>
            <br><br>
            <a href="index.php">الرجوع للمنتجات</a>
        </form>
    </div>
    </center>


      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
      <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>
   </body>
</html>

