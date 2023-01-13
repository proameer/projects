<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Covid 19</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Reveal - v4.7.0
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="d-flex flex-column min-vh-100">



  <!-- ======= Header ======= -->
  <?php include "header.php"; ?>
  <!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">

  <br><br><br><br><br>
        <!-- ======= Contact Section ======= -->
        <section id="contact">

        <div class="container mt-5" >
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
    <form class="row g-3" method="post">
       <div class="col-md-10">
       <div class="col-auto">
          <label class="visually-hidden">Username</label>
          <input name="username" type="text" class="form-control" placeholder="Enter your username" required>
        </div>
       </div>
       <div class="col-md-10">
       <div class="col-auto">
          <label class="visually-hidden">Password</label>
          <input name="password" type="text" class="form-control" placeholder="Enter your password" required>
        </div>
       </div>
    
       <div class="col-md-10 text-center">
            <div class="col-auto">
            <button type="submit" name="submit" class="btn btn-success mb-3">Login</button>
       </div>
       </div>
       

    </form>
    <?php
include "db.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $res = mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($res);
    if($row){
        $_SESSION['username']=$_POST['username'];
        echo "success login";
        echo '<script>window.location="index.php"</script>';
    }
    else{
        echo "<h1 class='text-danger'>error in login</h1>";
    }
}


// register
// if (isset($_POST['submit'])) {
//   # code...
//   $name = $_POST['name'];
// $username = $_POST['username'];
// $password = $_POST['password'];

// // $sql = "INSERT INTO users (name,username,password) VALUES($name,$username,$password)";
// $sql="INSERT INTO `users`(`id`, `name`, `username`, `password`) VALUES ('','$name','$username','$password')";
// $res = mysqli_query($conn , $sql);
// if ($res) {
//   # code...
//   echo "sssssssssss";
// }
// else{
//   echo "noooooooooooo";
// }
// }
?>


    </div>
  </div>
</div>
    

          </section><!-- End Contact Section -->




 



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "footer.php"; ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>