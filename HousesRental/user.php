<?php
   include "db.php";
 ?>
<style media="screen">
body {
  margin: 0;
  color: #6a6f8c;
  background: #c8c8c8;
  font: 600 16px/18px 'Open Sans', sans-serif
}

.login-box {
  width: 100%;
  margin: auto;
  max-width: 525px;
  min-height: 670px;
  position: relative;
  background: url(https://images.unsplash.com/photo-1507208773393-40d9fc670acf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1268&q=80) no-repeat center;
  box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19)
}

.login-snip {
  width: 100%;
  height: 100%;
  position: absolute;
  padding: 90px 70px 50px 70px;
  background: rgba(0, 77, 77, .9)
}

.login-snip .login,
.login-snip .sign-up-form {
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  position: absolute;
  transform: rotateY(180deg);
  backface-visibility: hidden;
  transition: all .4s linear
}

.login-snip .sign-in,
.login-snip .sign-up,
.login-space .group .check {
  display: none
}

.login-snip .tab,
.login-space .group .label,
.login-space .group .button {
  text-transform: uppercase
}

.login-snip .tab {
  font-size: 22px;
  margin-right: 15px;
  padding-bottom: 5px;
  margin: 0 15px 10px 0;
  display: inline-block;
  border-bottom: 2px solid transparent
}

.login-snip .sign-in:checked+.tab,
.login-snip .sign-up:checked+.tab {
  color: #fff;
  border-color: #1161ee
}

.login-space {
  min-height: 345px;
  position: relative;
  perspective: 1000px;
  transform-style: preserve-3d
}

.login-space .group {
  margin-bottom: 15px
}

.login-space .group .label,
.login-space .group .input,
.login-space .group .button {
  width: 100%;
  color: #fff;
  display: block
}

.login-space .group .input,
.login-space .group .button {
  border: none;
  padding: 15px 20px;
  border-radius: 25px;
  background: rgba(255, 255, 255, .1)
}

.login-space .group input[data-type="password"] {
  text-security: circle;
  -webkit-text-security: circle
}

.login-space .group .label {
  color: #aaa;
  font-size: 12px
}

.login-space .group .button {
  background: #1161ee
}

.login-space .group label .icon {
  width: 15px;
  height: 15px;
  border-radius: 2px;
  position: relative;
  display: inline-block;
  background: rgba(255, 255, 255, .1)
}

.login-space .group label .icon:before,
.login-space .group label .icon:after {
  content: '';
  width: 10px;
  height: 2px;
  background: #fff;
  position: absolute;
  transition: all .2s ease-in-out 0s
}

.login-space .group label .icon:before {
  left: 3px;
  width: 5px;
  bottom: 6px;
  transform: scale(0) rotate(0)
}

.login-space .group label .icon:after {
  top: 6px;
  right: 0;
  transform: scale(0) rotate(0)
}

.login-space .group .check:checked+label {
  color: #fff
}

.login-space .group .check:checked+label .icon {
  background: #1161ee
}

.login-space .group .check:checked+label .icon:before {
  transform: scale(1) rotate(45deg)
}

.login-space .group .check:checked+label .icon:after {
  transform: scale(1) rotate(-45deg)
}

.login-snip .sign-in:checked+.tab+.sign-up+.tab+.login-space .login {
  transform: rotate(0)
}

.login-snip .sign-up:checked+.tab+.login-space .sign-up-form {
  transform: rotate(0)
}

*,
:after,
:before {
  box-sizing: border-box
}

.clearfix:after,
.clearfix:before {
  content: '';
  display: table
}

.clearfix:after {
  clear: both;
  display: block
}

a {
  color: inherit;
  text-decoration: none
}

.hr {
  height: 2px;
  margin: 60px 0 50px 0;
  background: rgba(255, 255, 255, .2)
}

.foot {
  text-align: center
}

.card {
  width: 100%;
  left: 100vh;
}

::placeholder {
  color: #b3b3b3
}
</style>
<div class="container">

<div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip" dir="rtl"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">تسجيل الدخول</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">تسجيل</label>
                    <div class="login-space">
                      <form class="" action="" method="post">
                        <div class="login"><input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"></label>
                            <div class="group"> <label for="email" class="label">البريد الالكتروني</label> <input name="email" id="email" type="email" class="input" placeholder="ادخل هنا البريد الالكتروني"> </div>
                            <div class="group"> <label for="password" class="label">كلمة المرور</label> <input name="password" id="password" type="password" class="input" data-type="password" placeholder="ادخل هنا كلمة المرور"> </div>
                            <div class="group"> <input name="login" type="submit" class="button" value="تسجيل دخول" name="submit"> </div>
                        </div>
                     </form>
                     <!-- start login php -->
                      <?php
                     if (isset($_POST['login'])) {

                         $email=$_POST['email'];
                         $password=$_POST['password'];

                         $admin="select * from users where email='$email'and password='$password'";

                         $a= mysqli_query($conn, $admin);

                       $aa=mysqli_num_rows($a);



                        if ($aa>=1) {
                          $row=mysqli_fetch_assoc($a);
                         $_SESSION['email']=$_POST['email'];
                         $_SESSION['password']=$_POST['password'];
                         echo '<script>window.location="index.php"</script>';
                         }
                       else{

                          echo '<script>alert("البريد الالكتروني او كلمة المرور خطأ")</script>';

                         }
                     }

                     ?>
                      <!-- End login php -->

                     <form class="" action="" method="post">
                        <div class="sign-up-form">
                            <div class="group"> <label for="name" class="label">الاسم </label> <input name="name" id="name" type="text" class="input" placeholder="ادخل هنا الاسم"> </div>
                            <div class="group"> <label for="email" class="label">البريد الالكتروني</label> <input name="email" id="email" type="email" class="input" placeholder="ادخل هنا البريد الالكتروني"> </div>
                            <div class="group"> <label for="password" class="label">كلمة المرور</label> <input name="password" id="password" type="password" class="input" data-type="password" placeholder="ادخل هنا كلمة المرور"> </div>
                            <div class="group"> <input name="signup" type="submit" class="button" value="تسجيل"> </div>
                            <div class="hr"></div>
                        </div>
                      </form>

                    </div>
                </div>
            </div>
            <!-- start register php -->
            <?php

            if (isset($_POST['signup'])) {
                // removes backslashes
                $username = $_POST['name'];
                //escapes special characters in a string
                $email    = $_POST['email'];
                $password = $_POST['password'];
                $create_datetime = date("Y-m-d H:i:s");
                $query    = "INSERT into `users` (name, password, email, create_datetime)
                             VALUES ('$username', '$password', '$email', '$create_datetime')";
                $result   = mysqli_query($conn, $query);
                if ($result) {
                    echo "<div class='form'>
                          <h3>You are registered successfully.</h3><br/>
                          <p class='link'> <a href='login.php'></a></p>
                          </div>";
                } else {
                    echo "<div class='form'>
                          <h3>Required fields are missing.</h3><br/>
                          <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                          </div>";
                }
            }

      ?>
             <!-- End register php -->
        </div>
    </div>
</div>
</div>