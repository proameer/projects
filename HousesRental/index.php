<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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


  <?php
  include "nav.php";
   ?>

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">

                    <h1 class="intro-title mb-4 ">
                      <span class="color-b"> عقارات </span> حديثة
                      <br> بأسعار مناسبة
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">$ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b"> عقارات </span> حديثة
                      <br> بأسعار مناسبة
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">$ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b"> عقارات </span> حديثة
                      <br> بأسعار مناسبة
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">$ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8" style="margin-bottom:100px">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php
            if (isset($_SESSION['email'])) {
             ?>
            <div class="title-wrap d-flex justify-content-between" style="direction: rtl;">
              <div class="title-box">
                <h2 class="title-a">خدماتنا</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" style="display: inline-flex; margin: auto;">

            <p class="intro-subtitle intro-price" style="    margin-left: 30px;">
              <a href="request-houses.php"><span class="price-a" style="color: white;
    font-size: 45px;
    font-weight: 900;
    /* color: black; */
    padding: 40px;
    background-color: rebeccapurple; border: 0px;">طـلـب</span></a>
            </p>

            <p class="intro-subtitle intro-price" style="    margin-left: 30px;">
              <a href="show-houses.php"><span class="price-a" style="color: white;
    font-size: 45px;
    font-weight: 900;
    /* color: black; */
    padding: 40px;
    background-color: mediumspringgreen; border: 0px;">عرض</span></a>
            </p>
          <?php }
          else {

          } ?>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section><!-- End Services Section -->



  </main><!-- End #main -->

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
