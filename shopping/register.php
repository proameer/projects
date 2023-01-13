<!DOCTYPE html>
<html lang="en">
   <head>
   <?php include "head.php"; ?>
    </head>
    
<body style="margin-top:100px; background:#6610f2;">

  <?php
    include "db.php";
  if(isset($_POST['submit'])){
      $sql = "INSERT INTO `users`(`id`, `name`, `address`, `email`, `gender`, `password`) VALUES('','$_POST[name]','$_POST[address]','$_POST[email]','$_POST[gender]','$_POST[password]')";
      
      if (mysqli_query($conn, $sql)) {
        echo "تم انشاء الحساب بنجاح";
        $_SESSION['name']=$_POST['name'];
        $_SESSION['address']=$_POST['address'];
        $_SESSION['email']=$_POST['email'];
        $_SESSION['gender']=$_POST['gender'];
        $_SESSION['password']=$_POST['password'];
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }	
      ?>
          <script>window.location="login.php"</script>
      <?php
  }    
  ?>

<div class="row " dir="rtl">
    <div class="col-md-6 m-auto">
    <form class="form" action="" method="post">
        <h1 class="login-title d-flex text-light" >تسجيل حساب جديد</h1>
        <div class="form-group">
            <input type="text" class="email-bt" placeholder="الاسم" name="name">
        </div>
        <div class="form-group">
            <input type="text" class="email-bt" placeholder="العنوان" name="address">
        </div>
        <div class="form-group">
            <input type="text" class="email-bt" placeholder="البريد الالكتروني" name="email">
        </div>
        <div class="form-group">
            <input type="text" class="email-bt" placeholder="الجنس" name="gender">
        </div>
        <div class="form-group">
            <input type="text" class="email-bt" placeholder="كلمة المرور" name="password">
        </div>

        <button type="submit" name="submit" class="text-dark d-flex" style="padding:5px 30px; border-radius: 20px; background:#fff;">تسجيل</button>
        <p class="link"><a class="text-light" href="login.php">اضغط لتسجيل الدخول</a></p>
    </form>
    </div>
</div>

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

