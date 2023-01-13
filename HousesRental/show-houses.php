<?php
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * FROM property");
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







  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12" style="direction:rtl">
            <div class="title-single-box">
              <h1 class="title-single"> عرض عقار</h1>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Intro Single-->


    <!-- ======= Property Grid ======= -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <div class="row">
              <div class="col-md-12">
                <form action="show-houses.php" enctype="multipart/form-data" method="post" role="form" style="direction: rtl;" autocomplete="off">
                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                          <label for=""> <h4> صورة العقار </h4> </label>
                          <input type="file" name="image" value="" />
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="form-group">
                          <label for=""> <h4> عنوان العقار</h4> </label>
                        <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder=" ادخل هنا عنوان العقار ..." required>
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="form-group">
                          <label for=""> <h4> نوع العقار</h4> </label>
                        <!-- <input type="text" name="type" class="form-control form-control-lg form-control-a" placeholder="ادخل هنا نوع العقار ... " required> -->

                        <select class="form-control" name="categories" style="height:48px">
                          <option value="">اختر عملية</option>


                        <?php
                                                $query = "SELECT * FROM categories";
                                                $res = mysqli_query($conn , $query);
                                                while($row = mysqli_fetch_assoc($res)){
                                                    ?>
                                                            <option value="  <?php echo  $row['id']; ?>" name="categories">
                                                                <?php echo $row['category_name']; ?>
                                                            </option>
                                                            <?php
                                                }
                                           ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4 mb-3">
                      <div class="form-group">
                          <label for=""> <h4> الحالة</h4> </label>
                      <select class="form-control" name="status" style="height:48px">
                        <option value="بيع">بيع</option>
                        <option value="ايجار">ايجار</option>
                      </select>
                      </div>
                    </div>

                    <div class="col-md-4 mb-3">
                      <div class="form-group">
                          <label for=""> <h4> المساحة </h4> </label>
                        <input type="text" name="area" class="form-control form-control-lg form-control-a" placeholder=" المساحة" required>
                      </div>
                    </div>

                    <div class="col-md-4 mb-3">
                      <div class="form-group">
                          <label for=""> <h4> عدد الغرف </h4> </label>
                      <select class="form-control" name="room_no" style="height:48px">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>

                      </select>
                      </div>
                    </div>

                    <div class="col-md-4 mb-3">
                      <div class="form-group">
                          <label for=""> <h4> السعر </h4> </label>
                          <input type="text" name="price" class="form-control form-control-lg form-control-a" placeholder=" نسبة الموقع 0.2" autocomplete="off" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                          <label for=""> <h4> البريد الالكتروني </h4> </label>
                        <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="البريد الالكتروني" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                          <label for=""> <h4> رقم الهاتف </h4> </label>
                        <input type="text" name="phone" class="form-control form-control-lg form-control-a" placeholder="رقم الهاتف" required>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                          <label for=""> <h4> التفاصيل </h4> </label>
                        <textarea name="description" class="form-control" name="message" cols="45" rows="8" placeholder="التفاصيل" required></textarea>
                      </div>
                    </div>


                    <div class="col-md-12 text-center py-5">
                      <button type="submit" class="btn btn-a" name="save">أضافة</button>
                    </div>
                  </div>
                </form>
              </div>
              <?php

              if(isset($_POST['save']))
              {
                $filename = $_FILES['image']['name'];

                // Select file type
                $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

                // valid file extensions
                $extensions_arr = array("jpg","jpeg","png","gif","jfif");



                $name = $_POST['name'];
                $category_id = $_POST['categories'];
                $area = $_POST['area'];
                $room_no = $_POST['room_no'];
                $status = $_POST['status'];
                $price = $_POST['price'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $description = $_POST['description'];

                // Check extension
                if( in_array($imageFileType,$extensions_arr) ){

                // Upload files and store in database
                if(move_uploaded_file($_FILES["image"]["tmp_name"],'image/'.$filename)){
                  // Image db insert sql
                  $sql = "INSERT INTO show_houses (name_house,category_id,area,room_no,status,price,email,phone,description,img)
                  VALUES ('$name','$category_id','$area','$room_no','$status','$price','$email','$phone','$description','$filename')";

                  if(mysqli_query($conn, $sql)){
                        $rate = 0.2;
                        $price_rate = ($rate / 100 ) * $price;
               ?>
                   <div id="alert" class="alert alert-success">
                   <strong class="text-dark" style="text-align:center;display: block;">تمت الاضافة بنجاح</strong>
                   <strong class="text-danger" style="text-align:center;display: block;"> <?php echo $price; ?> : السعر الكلي </strong>
                   <strong class="text-danger" style="text-align:center;display: block;"> <?php echo $price_rate; ?> : نسبة الموقع </strong>
                   <strong class="text-danger" style="text-align:center;display: block;"> <?php echo $price+$price_rate; ?> : السعر الكلي مع النسبة</strong>
                   </div>

<?php }

                  else{
              		  echo 'خطأ: '.$sql.mysqli_error($conn);
                  }
                }else{
                  echo 'Error in uploading file - '.$_FILES['image']['name'].'
              ';
                }
                }
              }


               ?>

          </div>
        </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include "footer.php" ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script type="text/javascript">
setTimeout(function() {

// Closing the alert
$('#alert').alert('close');
}, 5000);
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" ></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-

ui.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
       <script src="js/scripts.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
       <script src="js/datatables-simple-demo.js"></script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
