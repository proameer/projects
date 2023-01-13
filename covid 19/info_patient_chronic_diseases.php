<?php
include "db.php";
?>
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
  <!-- End Header -->


  <main id="main">


  <section class="info" style="margin-top:100px">
    <div class="container">
      <div class="row">
        <h1>information Chronic Diseases patient</h1>
      <table class="table table-hover ">
    <thead class="table-success">
        <tr>
            <th width="30px">#</th>
            <th>Number Patient</th>
            <th>FullName</th>
            <th>Corona Date</th>
            <th>Chronic Diseases</th>
            <th>Number Cases</th>
            <th>Vaccine</th>
            <th>Vaccine Type</th>
        </tr>
    </thead>
    <tbody>
      <?php
      $i=1;
        $query = "SELECT * FROM patients order by id desc";
        $res = mysqli_query($conn , $query);
       

        while($row = mysqli_fetch_assoc($res)){
          if($row['chronic_diseases']!=="nothing"){
          ?>
          <tr>
            <td width="30px"><?php echo $i++; ?></td>
            <td><?php echo $row['number_patient']; ?></td>
            <td><?php echo $row['name_patient']; ?></td>
            <td><?php echo $row['infection_date']; ?></td>
            <td><?php echo $row['chronic_diseases']; ?></td>
            <td><?php echo $row['number_cases']; ?></td>
            <td><?php echo $row['vaccine']; ?></td>
            <td><?php echo $row['vaccine_type']; ?></td>
          
        </tr>
          <?php
        }
      }
      ?>
      
                 
    </tbody>
</table>
      </div>
    </div>
  </section>


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