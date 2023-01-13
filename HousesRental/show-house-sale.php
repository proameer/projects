<?php

include "db.php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>الشروق للعقار</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v4.7.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->

  <?php
  include "nav.php";
   ?>

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12" style="direction:rtl">
            <div class="title-single-box">
              <h1 class="title-single"> العقارات المعروضة للبيع</h1>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Intro Single -->



    <!-- ======= Agent Single ======= -->
    <section class="agent-single" style="direction: rtl;">
      <div class="container">

                  <?php

                  $result = mysqli_query($conn,"SELECT name_house , status , area , room_no , price , email , phone , description , img ,category_name FROM show_houses JOIN categories  ON show_houses.category_id=categories.id where status='بيع' order by id_s desc");
                  while ($row = mysqli_fetch_array($result)) {

                   ?>
  <div class="row" style="border-radius: 15px; border: 2px solid; padding: 10px 0px; margin-bottom:20px">
    <div class="col-sm-12">
      <div class="row">
        <div class="col-md-4">
          <div class="agent-avatar-box">
            <img src="image/<?php echo $row['img']; ?>" alt="" class="agent-avatar img-fluid" style="height:400px; width:400px;border-radius:10px;">
          </div>
        </div>
        <div class="col-md-8 section-md-t3">
          <div class="agent-info-box">
            <div class="agent-title">
              <div>
                <h3 class=""><?php echo $row['name_house']; ?></h3>
              </div>
            </div>
            <hr>
            <div class="agent-content mb-1">

              <div class="info-agents color-a" style="direction:rtl">
                <p>
                  <strong style="display: inline-block;">التصنيف : </strong>
                  <span class="color-text-a"> <?php echo $row['category_name']; ?> </span>
                </p>
                <p>
                  <strong style="display: inline-block;">المساحة : </strong>
                  <span class="color-text-a"> <?php echo $row['area']; ?> </span>
                </p>
                <p>
                  <strong style="display: inline-block;">عدد الغرف : </strong>
                  <span class="color-text-a"> <?php echo $row['room_no']; ?> </span>
                </p>
                <p>
                  <strong style="display: inline-block;">الحالة : </strong>
                  <span class="color-text-a"> <?php echo $row['status']; ?> </span>
                </p>
                <p>
                  <strong style="display: inline-block;">السعر : </strong>
                  <span class="color-text-a"> <?php echo $row['price']; ?> </span>
                </p>
                <p>
                  <strong style="display: inline-block;">السعر مع نسبة الموقع : </strong>
                  <span class="color-text-a"> <?php
                  $rate = 0.2;
                  $price_rate = ($rate / 100 ) * $row['price'];
                   echo $row['price']+$price_rate; ?> </span>
                </p>

                <p>
                  <strong style="display: inline-block;">البريد الالكتروني : </strong>
                  <span class="color-text-a"> <?php echo $row['email']; ?> </span>
                </p>
                <p>
                  <strong style="display: inline-block;">رقم الهاتف : </strong>
                  <span class="color-text-a"> <?php echo $row['phone']; ?> </span>
                </p>
                <hr>
                <p class="content-d color-text-a">
                <?php echo $row['description']; ?>
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    </div>
  <?php
}
       ?>
      </div>
    </section><!-- End Agent Single -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

<?php include "footer.php" ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
