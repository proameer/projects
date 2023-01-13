<?php
include '../connection.php';

?>
<?php

if(isset($_SESSION['status'])){
    if ($_SESSION['status']==0) {
        header("Location: /admin/index.php");
        
    }else{
        header("Location: /indexLogin.php");
        
    }
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>تسجيل دخول</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="../assets/img/library2.svg" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="post">
                    <span class="login100-form-title">
                        تسجيل دخول
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <!-- start form -->
                        <input style="  text-align: right;" class="input100" type="text" name="email"
                            placeholder="البريدالالكتروني">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input style="  text-align: right;" class="input100" type="password" name="password"
                            placeholder="كلمة المرور">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="submit">
                            تسجيل دخول
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            هل نسيت كلمة السر
                        </span>
                        <a class="txt2" href="#">
                            اسم مستخدم / كلمة مرور؟
                        </a>
                    </div>

                    <div style="padding-top: 50px;" class="text-center p-t-136">
                        <a style="font-size: 20px;" class="txt2" href="../index.php">
                            <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                          رجوع
                        </a>
                        <span style="margin: 0 20px;"></span>
                        <a style="font-size: 20px;" class="txt2" href="../form/register.php">
                           انشاء حساب جديد
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                    <!--End form  -->
                </form>
              
            </div>
        </div>
    </div>
    <!-- start php -->
    <?php
   if (isset($_POST['submit'])) {
      
       $email=$_POST['email'];
       $password=$_POST['password'];
       
       $admin="select * from admin where AdminEmail='$email'and Password='$password'";
     $student="select * from students where Email='$email'and Password='$password'";

       $a= mysqli_query($conn, $admin);
     $s= mysqli_query($conn, $student);

     $aa=mysqli_num_rows($a);
        $ss=mysqli_num_rows($s);
       
    
     if ($ss==1) {
        
        $row=mysqli_fetch_assoc($s);
        $_SESSION['status']=1;
        $_SESSION['email']=$row['Email'];
        $_SESSION['id_s']=$row['id_s'];
        $_SESSION['fname']=$row['FirstName'];
        
       
     echo '<script>window.location="../indexLogin.php"</script>';     
       }
      if ($aa>=1) {
        $row=mysqli_fetch_assoc($a);
        $_SESSION['status']=0;
       $_SESSION['email']=$_POST['email'];
       $_SESSION['fname']=$row['FirstName'];
       echo '<script>window.location="../admin/index.php"</script>';
       }
     else{
     
        echo '<script>alert("البريد الالكتروني او كلمة المرور خطأ")</script>';
 
       }
   }  

?>
    <!-- End php -->



    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>