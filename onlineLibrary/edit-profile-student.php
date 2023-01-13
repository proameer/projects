<?php
include "connection.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>تعديل الملف الشخصي </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../form/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="form/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="form/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="form/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="form/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="form/css/util.css">
    <link rel="stylesheet" type="text/css" href="form/css/main.css">
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div style="padding-top: 50px;" class="wrap-login100">
                <div style="margin-top: 100px;" class="login100-pic js-tilt" data-tilt>
                    <img src="assets/img/lib3.jpg" alt="IMG">
                </div>
                <?php    
$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$id=$row['id_s'];
    ?>
                <form class="login100-form validate-form" action="" method="POST">
                    <span class="login100-form-title">
                       تعديل الملف الشخصي
                    </span>
                    <div class="wrap-input100 validate-input">
                        <input style="  text-align: right;" class="input100" type="text" name="fname"
                            placeholder="الاسم الاول"value="<?php echo $row['FirstName'] ?>">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input style="  text-align: right;" class="input100" type="text" name="lname"
                            placeholder="الاسم الثاني"value="<?php echo $row['LastName']; ?>">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input style="  text-align: right;" class="input100" type="email" name="email"
                            placeholder="البريد الالكتروني"value="<?php echo $row['Email']; ?>">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input style="  text-align: right;" class="input100" type="text" name="phone"
                            placeholder="رقم الهاتف "value="<?php echo $row['PhoneNumber'] ?>">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input style="  text-align: right;" class="input100" type="text" name="pass"
                            placeholder="كلمة المرور"value="<?php echo $row['Password']; ?>">
                        <span class="focus-input100"></span>
                    </div>                   
                    <div class="container-login100-form-btn">
                        <button style="font-size:25px" class="login100-form-btn" type="submit" name="submit">
                           تعديل
                        </button>                       
                    </div>					
                    <?php
                  if (isset($_POST['submit'])) {
                    $id=$_GET['id_s'];
                    $firstname = $_POST['fname'];
                    $lastname = $_POST['lname'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $password = $_POST['pass'];
                    $query1 = "UPDATE students SET FirstName='$firstname',lastName='$lastname',Email='$email',
                    PhoneNumber='$phone',Password='$password' WHERE id_s = '$id'";
                    // echo "ffffff".$id;
                    $edit = mysqli_query($conn, $query1);
                    echo ' <div id="alert" class="alert alert-success">
                    <strong style="text-align:center;display: block;">تم التعديل بنجاح</strong>
                  </div>';
      ?>
<script type="text/javascript">
				alert("تم تحديث المعلومات بنجاح");
				window.location="indexLogin.php";
			</script>
            <?php
      }  
   ?>
                    <div style="padding-top: 50px;" class="text-center p-t-136">
                        <a style="font-size: 20px;" class="txt2" href="indexLogin.php"> 
                            رجوع <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>                     
                    </div>
                </form>           
            </div>
        </div>
    </div>
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


