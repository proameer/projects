<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>تسجيل حساب جديد</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="../css/owl.carousel.min.css">
      <link rel="stylesheet" href="../css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
  


<body style="margin-top:100px; background:#6610f2;; ">






  <?php
    include "../db.php";
  if(isset($_POST['submit'])){
      $sql = "INSERT INTO `users`(`id`, `name`, `address`, `email`, `gender`, `password`, `status` ) VALUES('','$_POST[name]','$_POST[address]','$_POST[email]','$_POST[gender]','$_POST[password]' , '1' )";
      
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
          <script>window.location="../login.php"</script>
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

        <button type="submit" name="submit" class="text-dark d-flex" style="padding:5px 30px; border-radius: 20px; background:#fff;"> تسجيل ادمن جديد</button>
        <p class="link"><a class="text-light" href="index.php">  الرجوع للوحه التحكم</a></p>
    </form>
    </div>
</div>

      <!-- footer section start -->
  
      <!-- footer section end -->
      <!-- Javascript files-->
      <script src=../js/jquery.min.js"></script>
      <script src=../js/popper.min.js"></script>
      <script src=../js/bootstrap.bundle.min.js"></script>
      <script src=../js/jquery-3.0.0.min.js"></script>
      <script src=../js/plugin.js"></script>
      <!-- sidebar -->
      <script src=../js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src=../js/custom.js"></script>
      <!-- javascript --> 
      <script src=../js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
      <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>
   </body>
</html>

