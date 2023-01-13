<?php 
      ini_set ("error_reporting", 0);
      session_start();
      include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
   <head>
     <?php include "head.php"; ?>
     <style>
         .addToCart{
            background:#6610f2;
            padding:10px 20px;
            border-radius:50px;
         }
      </style>
   </head>
   <body >
      <!--header section start -->
      <?php include "header.php"; ?>
      <!--header section end -->
      <!--category section start -->
      <div class="container">
         <div class="category_section">
            <div class="row" dir="rtl">
               <div class="col-lg-2 col-sm-12">
                  <h1 class="category_text">التصنيفات</h1>
               </div>
               <div class="col-lg-10 col-sm-12 main">
                  
                  <?php
                        $q=mysqli_query($conn,"SELECT * from categories where categoryName like '%$_POST[search]%' ORDER BY id desc");
                        while($row=mysqli_fetch_assoc($q)){
                           ?>

                  <div class="col">
                     <div class="box_main">
                        <div style="width:80px"><img src="<?php echo 'admin/upload/'.$row['imageCategory'] ; ?>" alt=""><br>
                        <h4 class="fashion_text"><?php echo $row['categoryName'] ?></h4>
                     </div>
                        
                     </div>
                  </div>

                  <?php   } ?>
               </div>
            </div>
         </div>
         <div class="category_section_2" dir="rtl">
         <h1 style="text-align:center">اخر المنتجات</h1>
            <div class="row">
           
               <?php
               $q=mysqli_query($conn,"SELECT products.id, name , productName ,categoryName,price  ,description ,image FROM products JOIN categories ON products.categoryID=categories.id JOIN users ON products.userID=users.id  where productName like '%$_POST[search]%' ORDER BY id desc LIMIT 6;");
               while($row=mysqli_fetch_assoc($q)){
                ?>
               <div class="col-lg-4 col-sm-12 mt-5" >
                  <div class="beds_section">

                     <div style="height:300px; margin-bottom:20px;"class="d-flex justify-content-center"><img src="<?php echo 'admin/upload/'.$row['image'] ; ?>" class="image_2" style="height:100%""></div>
                     <h1 class="bed_text mt-3"><?php echo $row['productName'] ?></h1>
                     <p class="mt-3 d-flex justify-content-center"><?php echo $row['description'] ?></p>
                     <div class="seemore_bt"><h3 style="color:#6610f2;font-size:20px;font-weight:900"><?php echo $row['price'].'$'; ?> </h3></div>
                     <br>
                     <div class="">
                     <input type="hidden" name="productName" value="<?php echo $row['name']; ?>">
                     <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                     <input type="hidden" name="description" value="<?php echo $row['description']; ?>">
                     <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                              <!-- <button  type="submit" name="addToCart" class="addToCart">اضافة الى السلة</button> -->
                     <div class="d-flex justify-content-center">
                      <a class="addToCart text-light" href="validate.php?id=<?php echo $row['id'] ?>">اضافة الى السلة</a>
                     </div>
              </div>

                  </div>
               </div>
              <?php } ?>
            </div>
         </div>
      </div>
      <!-- category section end -->
  
   
 
      <!-- footer section start -->
      <div class="footer_section ">            
            <div class="copyright_section">
              <p class="text-light" > جميع الحقوق محفوظة </p>
            </div>
      </div>
      <!-- footer section end -->
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

