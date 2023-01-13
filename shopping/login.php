<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <?php include "head.php"; ?>
   </head>
   <body style="margin-top:100px; background:#6610f2;">
      <!--header section start -->
      <?php 
        include "db.php";
        ?>
      <!--header section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding" dir="rtl">
         <div class="container">
         <form class="form" action="" method="post">
            <h1 class="touch_taital text-light">تسجيل دخول</h1>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-6 m-auto">
                     <div class="email_text">
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="البريد الالكتروني" name="email">
                        </div>
                        <div class="form-group">
                           <input type="password" class="email-bt" placeholder="كلمة المرور" name="password">
                        </div>
                        <button type="submit" name="submit" class="text-dark d-flex" style="padding:5px 30px; border-radius: 20px; background:#fff;">تسجيل دخول</button>
        <p class="link"><a class="text-light" href="register.php">اضغط لتسجيل جديد</a></p>

                     </div>

                  </div>
               </div>
            </div>
            
          </form>
         </div>
      </div>

      <?php
      include "db.php";
   if (isset($_POST['submit'])) {
      
       $email=$_POST['email'];
       $password=$_POST['password'];
    


        $sql ="select * from users where email='$email'and password='$password'";
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_assoc($result);  
        $count = mysqli_num_rows($result);  
        $_SESSION['email']=$email;
        $_SESSION['userid']=$row['id'];
        $_SESSION['name']=$row['name'];
        if($count == 1){  

            if($row['status']==0)
            echo '<script>window.location="index.php"</script>';
            if($row['status']==1)
            echo '<script>window.location="admin/index.php"</script>';    
        }  
        else{  
            echo "<h1> البريد الالكتروني او كلمة المرور خطأ...</h1>";  
        }     
 
   }  


?>
      <!-- contact section end -->

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

