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

<body>



  <!-- ======= Header ======= -->
    <?php include "header.php"; ?>
  <!-- End Header -->


  <main id="main">



 
    <!-- ======= Contact Section ======= -->
    <section id="contact">

    <div class="container mt-5">
      <div class="row  d-flex justify-content-center">
        <div class="col-md-10 mt-3">
          <h1>here enter information patient</h1>
          <form action="" method="POST">
            <div class="row">
            <div class="col-md-4">
              <div class="form-group mb-3">
                <label for="">Number Patient</label>
                <input class="form-control" type="text" name="number_patient" placeholder="number patient" value="<?php echo random_int(1,1000);?>" >
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mb-3">
                <label for="">Full Name Patient</label>
                <input class="form-control" type="text" name="name_patient" placeholder="name patient">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mb-3">
              <label for="">Name Mother</label>
                <input class="form-control" type="text" name="name_mother" placeholder="name mother">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mb-3">
              <label for="">Patient gender</label>
              <select name="gender" class="form-select" >
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-3">
                <label for="">Corona infection date</label>
                  <input class="form-control" type="date" name="infection_date" placeholder="infection date">
                </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group mb-3">
                  <label for="">The Symptoms of covid</label>
                  <input class="form-control" type="text" name="symptoms_covid" placeholder="symptoms covid">
                </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group mb-3">
                  <label for="">Chronic Diseases</label>
                    <select name="chronic_diseases" class="form-select" >
                      <option value="Good">Good</option>
                      <option value="Diabetes">Diabetes</option>
                      <option value="Eating Disorders">Eating Disorders</option>
                      <option value="Heart Disease">Heart Disease</option>
                      <option value="Obesity">Obesity</option>
                      <option value="Oral Health">Oral Health</option>
                      <option value="Osteoporosis">Osteoporosis</option>
                      <option value="Cystic Fibrosis">Cystic Fibrosis</option>
                      <option value="Cancer">Cancer</option>
                      <option value="Asthma">Asthma</option>
                      <option value="nothing">nothing</option>
                    </select>
                </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group mb-3">
                  <label for="">The number of coronavirus cases</label>
                   <input class="form-control" type="text" name="number_cases" placeholder="number cases">
                 </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group mb-3">
                  <label for="">Corona infection period</label>
                    <input class="form-control" type="text" name="infection_period" placeholder="infection period">
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group mb-3">
                  <label for="">Smoking</label>
                    <select name="smoking" class="form-select" >
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group mb-3">
                  <label for="">Age</label>
                    <input class="form-control" type="text" name="age" placeholder="Age">
                  </div>
              </div>
              <div class="col-md-4">
                    <div class="form-group mb-3">
                    <label for="">Have you taken the vaccine?</label>
                      <select name="vaccine" class="form-select" >
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-4">
              <div class="form-group mb-3">
              <label for="">Vaccine Type</label>
                  <select name="vaccine_type" class="form-select" >
                    <option value="Pfizer">Pfizer</option>
                    <option value="Sinopharm">Sinopharm</option>
                    <option value="No">No</option>
                  </select>
              </div>
              </div>
              <div class="col-md-4">           
                <div class="form-group mb-3">
                <label for="">Phone Number</label>
                  <input class="form-control" type="text" name="phone" placeholder="phone">
                </div>
              </div>
                <div class="col-md-4">
                   <div class="form-group mb-3">
                   <label for="">Address</label>
                    <input class="form-control" type="text" name="address" placeholder="address">
                  </div>
              </div>

            <div class="form-group mb-3">
              <input class="form-control btn btn-success" type="submit" name="add" value="Add">
            </div>
            </div>
        </form>
      

    <?php
      if(isset($_POST['add'])){
       
        $number_patient = $_POST['number_patient'];
        $name_patient = $_POST['name_patient'];
        $name_mother = $_POST['name_mother'];
        $gender = $_POST['gender'];
        $infection_date = $_POST['infection_date'];
        $symptoms_covid = $_POST['symptoms_covid'];
        $chronic_diseases = $_POST['chronic_diseases'];
        $number_cases = $_POST['number_cases'];
        $infection_period = $_POST['infection_period'];
        $smoking = $_POST['smoking'];
        $age = $_POST['age'];
        $vaccine = $_POST['vaccine'];
        $vaccine_type = $_POST['vaccine_type'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $sql = "INSERT INTO `patients`(`id`, `number_patient`, `name_patient`, `name_mother`, `gender`, `infection_date`, 
        `symptoms_covid`, `chronic_diseases`, `number_cases`, `infection_period`, `smoking`, `age`, `vaccine`, 
        `vaccine_type`, `phone`, `address`) VALUES ('','$number_patient','$name_patient','$name_mother','$gender',
        '$infection_date','$symptoms_covid','$chronic_diseases','$number_cases','$infection_period','$smoking','$age','$vaccine','$vaccine_type','$phone','$address')";
    
        $res = mysqli_query($conn , $sql);
        if($res) {
          echo "inserted successfully";
        }
        else{
          echo "error";
        }
      }
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