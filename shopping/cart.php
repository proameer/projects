<?php 
      ini_set ("error_reporting", 0);
      session_start();
      include "db.php";

      if(isset($_POST['update_cart'])){
         $update_quantity = $_POST['cart_quantity'];
         $update_id = $_POST['cart_id'];
         mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
         $message[] = 'تم تحديث كمية سلة التسوق بنجاح!';
      }

?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <?php include "head.php"; ?>
   </head>
   <body dir="rtl">
      <center class="mt-5">
         <h1 style="font-size:60px">عربة التسوق</h1>
         <a class="btn btn-success" href="index.php">الرجوع للمنتجات</a>
      </center>

      <center>
         <div class="container mt-5 ">
            <table class="table">
               <thead style="text-align:center; background:#000;color:#fff">
                  <tr>
                     <th>اسم المنتج</th>
                     <th>سعر المنتج</th>
                     <th>  اسم المستخدم</th>
                     <th>صورة المنتج</th>
                     <th> عدد المنتجات</th>
                     <th> المبلغ الاجمالي</th>
                     <th>حذف المنتج</th>
                  </tr>
               </thead>
               <tbody style="text-align:center">
               <?php
                  $cart_query = mysqli_query($conn, "SELECT * FROM `cart` where userID = '$_SESSION[userid]'") or die('query failed');
                  $grand_total = 0;
                  if(mysqli_num_rows($cart_query) > 0){
                     while($fetch_cart = mysqli_fetch_assoc($cart_query)){
               ?>
                  <tr>
                     <td><?php echo $fetch_cart['productName'] ?></td>
                     <td><?php echo $fetch_cart['price'].'$' ?></td>
                     <td><?php echo $_SESSION['name']; ?></td>
                     <td><img src="<?php echo 'admin/upload/'.$fetch_cart['image'] ; ?>" class="" style="width:80px;height:60px"></td>
                  
                     <td>
                        <form action="" method="post">
                           <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                           <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>" style="width:60px">
                           <input type="submit" name="update_cart" value="تعديل" class="btn btn-info">
                        </form>
                     </td>
                     <td><?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>$</td>
            
                  
                     <td><a class="btn btn-danger" href="delete_cart.php?id=<?php echo $fetch_cart['id']; ?>">حذف</a></td>
             
                  
                  </tr>
                  <?php
                     $grand_total += $sub_total;
                        }
                     }else{
                        echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">العربة فارغة</td></tr>';
                     }
                  ?>

                   <tr class="table-bottom">
                     <td colspan="5"><h2>المبلغ الإجمالي :</h2></td>
                     <td><?php echo $grand_total; ?>$</td>
                  </tr>
               </tbody>
            </table>
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

