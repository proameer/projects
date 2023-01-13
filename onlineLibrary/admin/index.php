<?php

include "../connection.php";
?>
<?php

if(isset($_SESSION['status']))
{   
    if($_SESSION['status']==0)
    {

    }else{
        header("Location: /form/login.php");
        die();
    }
    // print_r($_SESSION);
}else{
    // echo
    header("Location: /form/login.php");
    die();
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/lib5.jpg">
    <title> الرئيسية</title>
    <!-- Custom CSS -->
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div style="direction: rtl;" id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6"
        data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <?php include "navbar.php"; ?>
        <?php include "sidebar.php"; ?>

        <div style="padding-top:0" class="page-wrapper">
            <div class="container-fluid" style="margin: 0 240px;">
                <div class="card-group">
                    <div class="card border-right">
                        <div style="margin: 0 60px;text-align: center;" class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h1 class="text-dark mb-1 font-weight-medium">معلومات حول المكتبة</h1>
                                    </div>

                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row"style="direction: rtl;">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <!-- Column -->
                                    <?php
                                        $sql="SELECT `id_s` FROM `students` ORDER BY id_s";
                                        $res=mysqli_query($conn,$sql);
                                        $row=mysqli_num_rows($res);
                                    ?>
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="p-2 bg-info text-center">
                                                <h1 class="font-light text-white"><?php echo $row; ?></h1>
                                                <h3 class="text-white">عدد المستخدمين</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <?php
                                       $result = mysqli_query($conn, 'SELECT SUM(quantity) AS result FROM book');
                                       $row = mysqli_fetch_assoc($result);
                                       $sum = $row['result'];
                                    ?>
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="p-2 bg-dark text-center">
                                                <h1 class="font-light text-white"><?php echo $sum; ?></h1>
                                                <h3 class="text-white">عدد الكتب</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <?php
                                        $sql="SELECT `id_au` FROM `authors` ORDER BY id_au";
                                        $res=mysqli_query($conn,$sql);
                                        $row=mysqli_num_rows($res);
                                    ?>
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="p-2 bg-warning text-center">
                                                <h1 class="font-light text-white"><?php echo $row; ?></h1>
                                                <h3 class="text-white">عدد المؤلفين</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <?php
                                        $sql="SELECT `id_C` FROM `category` ORDER BY id_c";
                                        $res=mysqli_query($conn,$sql);
                                        $row=mysqli_num_rows($res);
                                    ?>
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="p-2 bg-secondary text-center">
                                                <h1 class="font-light text-white"><?php echo $row; ?></h1>
                                                <h3 class="text-white">عدد التصنيفات</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <?php
                                        $sql="SELECT `id_i` FROM `issuedbook` ORDER BY id_i";
                                        $res=mysqli_query($conn,$sql);
                                        $row=mysqli_num_rows($res);
                                        $sql1="SELECT `id_I` FROM `issuedbook` ORDER BY id_i";
                                        $res1=mysqli_query($conn,$sql1);
                                        $row1=mysqli_num_rows($res1); 
                                       
                                    ?>
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="p-2 bg-danger text-center">
                                                <h1 class="font-light text-white"><?php echo $row; ?></h1>
                                                <h3 class="text-white">عدد الكتب المستعارة</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <?php
                                         $sql1="SELECT id_i FROM issuedbook ORDER BY id_i";
                                         $res1=mysqli_query($conn,$sql1);
                                         $row1=mysqli_num_rows($res1);

                                         $result = mysqli_query($conn, 'SELECT SUM(quantity) AS result FROM book');
                                         $row = mysqli_fetch_assoc($result);
                                         $sumbook = $row['result'];

                                         $sum=$sumbook-$row1;
                                    ?>
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="p-2 bg-success  text-center">
                                                <h1 class="font-light text-white"><?php echo $sum; ?></h1>
                                                <h3 class="text-white">عدد الكتب المسترجعة</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>