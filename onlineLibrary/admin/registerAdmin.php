<?php
include "../connection.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>تسجيل جديد</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../form/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../form/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../form/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../form/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../form/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../form/css/util.css">
    <link rel="stylesheet" type="text/css" href="../form/css/main.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div style="padding-top: 50px;" class="wrap-login100">
                <div style="margin-top: 100px;" class="login100-pic js-tilt" data-tilt>
                    <img src="assets/images/lib.jpg" alt="IMG">
                </div>
                <form class="login100-form validate-form" action="" method="POST">
                    <span class="login100-form-title">
                        تسجيل ادمن
                    </span>
                    <div class="wrap-input100 validate-input">
                        <input style="  text-align: right;" class="input100" type="text" name="fname"
                            placeholder="الاسم الاول">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input style="  text-align: right;" class="input100" type="text" name="lname"
                            placeholder="الاسم الثاني">
                        <span class="focus-input100"></span>
                    </div>
                
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input style="  text-align: right;" class="input100" type="email" name="email"
                            placeholder="البريد الالكتروني">
                        <span class="focus-input100"></span>

                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input style="  text-align: right;" class="input100" type="password" name="pass"
                            placeholder="كلمة المرور">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="submit">
                            انشاء حساب
                        </button>
                        
                    </div>
                    <?php
                    if(isset($_POST['submit'])){
                     
                        $sql = "INSERT INTO `admin`(`id_a`, `FirstName`, `LastName`,`AdminEmail`,  `Password`) VALUES('','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[pass]')";    
                        $lname=$_POST['lname'];
						$_SESSION['lname']=$lname;
						// 
						$fname=$_POST['fname'];
						$_SESSION['fname']=$fname;


						
						$_SESSION['emailAdmin']=$_POST['email'];
						$pass=$_POST['pass'];
						$_SESSION['pass']=$pass;
                        
                        if (mysqli_query($conn, $sql)) {
                          echo "تم رفع ادمن";
                        } else {
                          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }   
                        ?>
                    <script type="text/javascript">
                    window.location = "index.php";
                    </script>
                    <?php
                    }              
                    ?>
                    <div class="text-center p-t-12">
                        <span class="txt1">
                            هل نسيت كلمة السر
                        </span>
                        <a class="txt2" href="#">
                            اسم مستخدم / كلمة مرور؟
                        </a>
                    </div>

                    <div style="padding-top: 50px;" class="text-center p-t-136">
                        <a style="font-size: 20px;" class="txt2" href="index.php">
                            <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                            رجوع
                        </a>
                        <span style="margin: 0 20px;"></span>
                        <a style="font-size: 20px;" class="txt2" href="../form/login.php">
                            تسجيل دخول
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


       <script type="text/javascript">
    setTimeout(function() {

        // Closing the alert
        $('#alert').alert('close');
    }, 5000);
    </script>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>
    <script src="js/main.js"></script>
</body>

</html>