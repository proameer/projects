<?php

include "connection.php";
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>الصفحة الرئيسية</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="admin/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="admin/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="admin/dist/css/style.min.css" rel="stylesheet">

    

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bootslander - v4.1.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


</head>

<body>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">



            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#contact">اتصل بنا</a></li>
                    <li><a class="nav-link scrollto" href="#team">فريق العمل</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">المعرض</a></li>
                    <li><a class="nav-link scrollto" href="#features">الكتب</a></li>
                    <li><a class="nav-link scrollto" href="#about">حول</a></li>
                    <li><a class="nav-link scrollto active" href="#hero">الصفحة الرئيسية</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
         


            </nav><!-- .navbar -->

   
            <div class="logo" style="margin-left: 20%;">


                <h1><a href="indexLogin.php"><span>مكتبة الكترونية </span></a></h1>



                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            


            <ul class="navbar-nav float-right">

<li style="margin: 0 auto;" class="nav-item dropdown">
    <a style="direction:rtl;" class="nav-link dropdown-toggle" href="javascript:void(0)"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        <!-- <span class="ml-2 d-none d-lg-inline-block"><span>مرحبا</span>  -->
        <span class="text-light"><?php echo $_SESSION['fname']; ?></span> <i data-feather="chevron-down"
                class="svg-icon"></i></span>
        <img src="assets/img/user.jpg" alt="user" class="rounded-circle " width="40">
    </a>
    <div style="text-align: right;padding: 0px 0px;margin: 0 2%;min-width: 140px;" class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
        <a class="dropdown-item" href="edit-profile-student.php"><i data-feather="user"
                class="svg-icon mr-2 ml-1"></i>
              تعديل الملف الشخصي </a>
    

        <div class="dropdown-divider"></div>
     
        <div class="pl-4 p-3"><a href="logout.php" class="btn btn-sm btn-info">تسجيل خروج  </a></div>
    </div>
</li>
</ul>


        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">

                <div style="text-align: right;"
                    class="col-lg-7 pt-5 pt-lg-0  order-2 order-lg-1 d-flex align-items-end ">
                    <div data-aos="zoom-out">
                        <h1>اهلا وسهلا بك في <span>المكتبة الالكترونية</span></h1>
                        <h2>لجامعة كربلاء كلية علوم الحاسوب وتكنولوجيا المعلومات </h2>
                        <div class="text-center text-lg-start">
                            <!-- <a href="#about" class="btn-get-started scrollto">تسجيل</a> -->
                            <a href="#about" class="btn-get-started scrollto">ابدأ</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img  " data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/library.svg" class="img-fluid animated" alt="">
                </div>

            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div style="margin-top:5px"
                        class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                        data-aos="fade-right">
                        <a href="https://www.youtube.com/channel/UCuz3NSLvkBAQ2ML4BTmJKxg" class="venobox play-btn mb-4"
                            data-vbtype="video" data-autoplay="true"></a>

                    </div>

                    <div style="text-align: right;"
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                        data-aos="fade-left">
                        <h1>مفهوم المكتبة الإلكترونيّة </h1>
                        <h3>هي عبارة عن مكتبة تعمل على تقنيات إلكترونية حديثة تتسم بالكفاءة والفعالية وتقوم بمجموعة من
                            الإجراءات الآلية مثل عمليات الفهرسة والبحث والإعارة

                            </p>

                            <div style="text-align: right;" class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <!-- <div class="icon"><i class="bx bx-fingerprint"></i></div> -->
                                <h4 style="font-size: 30px; color: #000;" class="title">يمكن الحصول على الكتب والمراجع
                                    في أي وقت</h4>
                            </div>

                            <div style="text-align: right;" class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <!-- <div class="icon"><i class="bx bx-fingerprint"></i></div> -->
                                <h4 style="font-size: 30px; color: #000;" class="title">البحث يعطي نتائج سريعة ودقة عالية</h4>
                            </div>

                            <div style="text-align: right;" class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <!-- <div class="icon"><i class="bx bx-fingerprint"></i></div> -->
                                <h4 style="font-size: 30px; color: #000;" class="title">فعالة ومواكبة للتطور التكنولوجي
                                </h4>
                            </div>



                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>نظرة عامة</h2>
                    <p>الكتب</p>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="row" style="direction: rtl;">
                                    <!-- Column -->
                                    <?php
                    $res=mysqli_query($conn,"SELECT id_b,BookName,CtegoryName,AuthorName,ISBNNumber,quantity FROM book JOIN category ON book.CategoryId=category.id_c JOIN authors ON AuthorId=authors.id_au ORDER BY id_b desc");
                    while($row=mysqli_fetch_assoc($res)){
                ?>
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="p-2  text-center" style="background-color: #25373A; ">
                                                <h3 style="color: #FD7;"> اسم الكتاب :</h3>
                                                <h3 class="font-light text-white"> <?php echo $row['BookName']; ?></h3>
                                                <h6 style="color: #FD7;"> اسم التصنيف :</h6>
                                                <h6 style="color:#fff"> <?php echo $row['CtegoryName'] ?></h6>
                                                <h6 style="color: #FD7;"> اسم المؤلف :</h6>
                                                <h6 style="color:#fff"> <?php echo $row['AuthorName'] ?></h6>
                                                <h6 style="color: #FD7;"> رقم الكتاب :</h6>
                                                <h6 style="color:#fff"> <?php echo $row['ISBNNumber'] ?></h6>
                                                <h6 style="color: #FD7;"> عدد النسخ :</h6>
                                                <h6 style="color:#fff"> <?php echo $row['quantity'] ?></h6>
                                                <form method="post">
                                                <input hidden="true" class="btn btn-primary" type="text" value="<?php echo $row['id_b'];?>" name="iss">
                       <input  class="btn btn-primary" type="submit" value="أستعارة">

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php               
                                     }
                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>



      
<!-- استعاره -->

<?php   

    
        
    if(isset($_POST['iss'])){

        $today=date('Y-m-d h:m:s');
        $addDays=date('Y-m-d h:m:s',strtotime($today.'+7 days'));
       
        $id=$_POST['iss'];
        $query="SELECT * FROM book WHERE id_b=$id";
        $qu=mysqli_query($conn,$query);
        if(mysqli_num_rows($qu)>0){
            $row=mysqli_fetch_assoc($qu);
            if(((int)$row['quantity'])==0){
                ?>
                <script>alert("هذا الكتاب غير متوفر")</script>
                <?php
            }else{
     
                $quantity=((int)$row['quantity'] )-1;
                
                $query="UPDATE book set quantity=$quantity WHERE id_b=$id";
                $query=mysqli_query($conn,$query);
                $query="INSERT INTO `issuedbook` (`StudentId`, `BookId`, `ReturnDate`) VALUES ('".$_SESSION['id_s']."', '".$id."','".$addDays."')";
                $query=mysqli_query($conn,$query);
               
                ?>
                <script>alert("تمت الاستعارة بنجاح")</script>
                <?php
            }

        }    
    }
  
?>
<!-- نهايه الاستعاره -->
           

            </div>
        </section><!-- End Features Section -->

       <!-- ======= Counts Section ======= -->
       <section id="counts" class="counts">
            <div class="container">

                <div class="row" data-aos="fade-up">
                    <?php
                                       
                                         $sql1="SELECT id_i FROM issuedbook ORDER BY id_i";
                                         $res1=mysqli_query($conn,$sql1);
                                         $row1=mysqli_num_rows($res1);

                                         $result = mysqli_query($conn, 'SELECT SUM(quantity) AS result FROM book');
                                         $row = mysqli_fetch_assoc($result);
                                         $sumbook = $row['result'];

                                         $sum=$sumbook-$row1;
                                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-book"></i>
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $sum; ?>"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>عدد الكتب المسترجعة</p>
                        </div>
                    </div>
                    <?php
                                        $sql="SELECT id_i FROM issuedbook ORDER BY id_i";
                                        $res=mysqli_query($conn,$sql);
                                        $row=mysqli_num_rows($res);
                                    ?>
                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-book"></i>
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $row; ?>"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p> عدد الكتب المستعارة</p>
                        </div>
                    </div>

                    <?php
                                        // $sql="SELECT id_b FROM book ";
                                        // $res=mysqli_query($conn,$sql);
                                        // $row=mysqli_num_rows($res);

                                        // $sql="SELECT SUM(quantity) FROM book ";
                                        // $res=mysqli_query($conn,$sql);
                                        // $row=mysqli_num_rows($res);

                                        // $result = mysql_query('SELECT SUM(quantity) FROM book');
                                        // $row = mysql_fetch_assoc($result);
                                        // $sum = $row['quantity'];

                                        $result = mysqli_query($conn, 'SELECT SUM(quantity) AS result FROM book');
                                        $row = mysqli_fetch_assoc($result);
                                        $sum = $row['result'];
                                    ?>
                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-book"></i>
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $sum; ?>"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>عدد الكتب</p>
                        </div>
                    </div>

                    <?php
                                        $sql="SELECT id_s FROM students ORDER BY id_s";
                                        $res=mysqli_query($conn,$sql);
                                        $row=mysqli_num_rows($res);
                                    ?>
                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $row; ?>"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>عدد المستخدمين</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->



        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>نضرة عامة</h2>
                    <p>صور المكتبة</p>
                </div>

                <div class="row no-gutters" data-aos="fade-left">
                <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                            <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                            <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                            <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                            <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                            <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                            <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                            <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                            <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Section -->


        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>عمل</h2>
                    <p>فريقنا الرائع</p>
                </div>

                <div class="row" data-aos="fade-left">
                <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="assets/img/1.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>akram mohammed</h4>
                                <span>front end </span>
                                <div class="social">
                                    <!-- <a href=""><i class="bi bi-google"></i></a> -->
                                    <a href="https://www.facebook.com/profile.php?id=100008116308759"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/akram_turkmani?utm_medium=copy_link"><i class="bi bi-instagram"></i></a>
                                    <a href="https://t.me/pro_akrm"><i class="bi bi-telegram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pic"><img src="assets/img/3.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>ameer saleh</h4>
                                <span>full stack</span>
                                <div class="social">
                                    <!-- <a href=""><i class="bi bi-google"></i></a> -->
                                    <a href="https://www.facebook.com/proameer96"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/pro_ameer?utm_medium=copy_link"><i class="bi bi-instagram"></i></a>
                                    <a href="https://t.me/pro_ameer"><i class="bi bi-telegram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="assets/img/2.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>ahmed sattar</h4>
                                <span>back end </span>
                                <div class="social">
                                    <!-- <a href=""><i class="bi bi-google"></i></a> -->
                                    <a href="https://www.facebook.com/ahmed.alkarbala.9"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/prog_a98?utm_medium=copy_link"><i class="bi bi-instagram"></i></a>
                                    <a href="https://t.me/prog_a98"><i class="bi bi-telegram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>اتصل</h2>
                    <p>اتصل بنا</p>
                </div>

                <div class="row">



                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-12 form-group mt-3 mt-md-3">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">ارسل رسالة</button></div>
                        </form>

                    </div>



                    <div class="col-lg-2" data-aos="fade-right" data-aos-delay="100">
                        <div class="info" style="text-align: right;">
                            <div class="address ">

                                <h4>الاسم الكامل</h4>

                            </div>

                            <div class="email">

                                <h4>الايميل</h4>

                            </div>

                            <div class="phone">
                                <h4>الموضوع</h4>
                            </div>

                            <div class="phone">
                                <h4>الرسالة</h4>
                            </div>

                        </div>

                    </div>


                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


    <div class="container">
            <div class="copyright">
                <strong><span>     جميع الحقوق محفوظة </span></strong> &copy; جامعة كربلاء / كلية علوم الحاسوب وتكنولوجيا المعلومات
            </div>
          
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>








    <script src="admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
 
</body>

</html>