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

        <!-- ======= Contact Section ======= -->
        <section id="contact mt-5" style="margin-top:100px">


  

 
    <!-- ======= Services Section ======= -->

<div class="container mt-5" >
  <div class="row d-flex justify-content-center">
    <div class="col-md-8">
    <form class="row g-3" method="post">
       <div class="col-md-10">
       <div class="col-auto">
          <label class="visually-hidden">Password</label>
          <input name="name_patient" type="text" class="form-control" placeholder="Enter Name Patient" required>
        </div>
       </div>
        <div class="col-auto">
          <button type="submit" name="submit" class="btn btn-success mb-3">Search</button>

        </div>

    </form>
    </div>
  </div>
</div>


<?php

?>



    <section class="info">
    <div class="container">
      <div class="row d-flex justify-content-center">
      <h1 class="text-center">information patient</h1>

          <div class="col-md-8">
      <table class="table table-bordered ">

    <tbody>
    <?php
                    include "db.php";
                    if (isset($_POST['submit'])) {
                      $name = $_POST['name_patient'];
                    $sql="SELECT * FROM `patients` WHERE name_patient='$name' ";
                    $res = mysqli_query($conn , $sql);
                    $row = mysqli_fetch_assoc($res);
                    
                    if($row){
                      ?>
        <tr class="text-center">
          <th class="table-success" width="250px">Number Patient</th>
          <td><?php echo $row['number_patient']; ?></td>
        </tr>
        <tr class="text-center">
          <th class="table-success" width="250px">Name Patient</th>
          <td><?php echo $row['name_patient']; ?></td>
        </tr>
        <tr class="text-center">
          <th class="table-success" width="250px">Name Mother</th>
          <td><?php echo $row['name_mother']; ?></td>
        </tr>
        <tr class="text-center">
          <th class="table-success" width="250px">Gender</th>
          <td><?php echo $row['gender']; ?></td>
        </tr>
        <tr class="text-center">
          <th class="table-success" width="250px">Infection Date</th>
          <td><?php echo $row['infection_date']; ?></td>
        </tr>
        <tr class="text-center">
          <th class="table-success" width="250px">Symptoms Covid</th>
          <td><?php echo $row['symptoms_covid']; ?></td>
        </tr>
        <tr class="text-center">
          <th class="table-success" width="250px">Chronic Diseases</th>
          <td><?php echo $row['chronic_diseases']; ?></td>
        </tr>
        <tr class="text-center">
          <th class="table-success" width="250px">Number Cases</th>
          <td><?php echo $row['number_cases']; ?></td>
        </tr>
        <tr class="text-center">
          <th class="table-success" width="250px">Infection Period</th>
          <td><?php echo $row['infection_period']; ?></td>
        </tr>
        <tr class="text-center">
          <th class="table-success" width="250px">Smoking</th>
          <td><?php echo $row['smoking']; ?></td>
        </tr>
        <tr class="text-center">
          <th class="table-success" width="250px">Age</th>
          <td><?php echo $row['age']; ?></td>
        </tr>
        <tr class="text-center">
          <th class="table-success" width="250px">Vaccine</th>
          <td><?php echo $row['vaccine']; ?></td>
        </tr>
        <tr class="text-center">
          <th class="table-success" width="250px">Vaccine Type</th>
          <td><?php echo $row['vaccine_type']; ?></td>
        </tr>
        <tr class="text-center">
          <th class="table-success" width="250px">Phone</th>
          <td><?php echo $row['phone']; ?></td>
        </tr>
        <tr class="text-center">
          <th class="table-success" width="250px">Address</th>
          <td><?php echo $row['address']; ?></td>
        </tr>
     

          <?php
        }
        else{
          ?>
          <tbody>
                <tr>
                    <h1><th>No Data</th></h1>
                    
                </tr>
          
            </tbody>
          <?php
        }
        }
      ?>
      
                 
    </tbody>
</table>
          </div>
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