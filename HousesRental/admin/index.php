<?php
include "db.php";
// $req_houses = mysqli_query("SELECT * FROM request_houses");
// $row_req_houses = mysqli_num_rows($req_houses);
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
<style media="screen">
.card {
  background-color: #fff;
  border-radius: 10px;
  border: none;
  position: relative;
  margin-bottom: 30px;
  box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}
.l-bg-cherry {
  background: linear-gradient(to right, #493240, #f09) !important;
  color: #fff;
}

.l-bg-blue-dark {
  background: linear-gradient(to right, #373b44, #4286f4) !important;
  color: #fff;
}

.l-bg-green-dark {
  background: linear-gradient(to right, #0a504a, #38ef7d) !important;
  color: #fff;
}

.l-bg-orange-dark {
  background: linear-gradient(to right, #a86008, #ffba56) !important;
  color: #fff;
}

.card .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fal {
  font-size: 110px;
}

.card .card-statistic-3 .card-icon {
  text-align: center;
  line-height: 50px;
  margin-left: 15px;
  color: #000;
  position: absolute;
  right: -5px;
  top: 20px;
  opacity: 0.1;
}

.l-bg-cyan {
  background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
  color: #fff;
}

.l-bg-green {
  background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
  color: #fff;
}

.l-bg-orange {
  background: linear-gradient(to right, #f9900e, #ffba56) !important;
  color: #fff;
}

.l-bg-cyan {
  background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
  color: #fff;
}
</style>
    </head>
    <body class="sb-nav-fixed" >

<?php include "navbar.php"; ?>

        <div id="layoutSidenav">

<?php include "sidenav.php"; ?>

            <div id="layoutSidenav_content" dir="rtl" >
                <main>
                    <div class="container-fluid px-4" style="margin-right:80px">
                        <h1 class="mt-4">لوحة التحكم</h1>
                        <br>


                        

<div class="col-md-10" style="" >
    <div class="row ">

    <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-green-dark">
                <div class="card-statistic-3 p-3">
                    <div class="mb-4">
                        <h5 class="card-title mb-0">المستخدمين</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                              <?php
                                      $sql="SELECT `id_u` FROM `users` ORDER BY id_u";
                                      $res=mysqli_query($conn,$sql);
                                      $row=mysqli_num_rows($res);
                                        echo $row;
                                ?>
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-3">
                    <div class="mb-4">
                        <h5 class="card-title mb-0">العقارات المعروضة</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex text-center">
                        <div class="col-8 text-center">
                            <h2 class="d-flex align-items-center text-center mb-0">
                              <?php
                                      $sql="SELECT `id_s` FROM `show_houses` ORDER BY id_s";
                                      $res=mysqli_query($conn,$sql);
                                      $row=mysqli_num_rows($res);
                                        echo $row;
                                ?>
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-3">
                    <div class="mb-4">
                        <h5 class="card-title mb-0">العقارات المطلوبة</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                              <?php
                                      $sql="SELECT `id_r` FROM `request_houses` ORDER BY id_r";
                                      $res=mysqli_query($conn,$sql);
                                      $row=mysqli_num_rows($res);
                                        echo $row;
                                ?>

                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-3">
                    <div class="mb-4">
                        <h5 class="card-title mb-0">التصنيفات</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                              <?php
                                      $sql="SELECT `id` FROM `categories` ORDER BY id";
                                      $res=mysqli_query($conn,$sql);
                                      $row=mysqli_num_rows($res);
                                        echo $row;
                                ?>
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-3">
                    <div class="mb-4">
                        <h6 class="card-title mb-0">العقارات المعروضة للبيع</h6>
                    </div>
                    <div class="row align-items-center mb-2 d-flex text-center">
                        <div class="col-8 text-center">
                            <h2 class="d-flex align-items-center text-center mb-0">
                              <?php
                                      $sql="SELECT `id_s` FROM `show_houses` WHERE status = 'بيع' ";
                                      $res=mysqli_query($conn,$sql);
                                      $row=mysqli_num_rows($res);
                                        echo $row;
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-3">
                    <div class="mb-4">
                        <h6 class="card-title mb-0">العقارات المعروضة للايجار</h6>
                    </div>
                    <div class="row align-items-center mb-2 d-flex text-center">
                        <div class="col-8 text-center">
                            <h2 class="d-flex align-items-center text-center mb-0">
                              <?php
                                      $sql="SELECT `id_s` FROM `show_houses` WHERE status = 'ايجار' ";
                                      $res=mysqli_query($conn,$sql);
                                      $row=mysqli_num_rows($res);
                                        echo $row;
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-3">
                    <div class="mb-4">
                        <h6 class="card-title mb-0">العقارات المطلوبة للبيع</h6>
                    </div>
                    <div class="row align-items-center mb-2 d-flex text-center">
                        <div class="col-8 text-center">
                            <h2 class="d-flex align-items-center text-center mb-0">
                              <?php
                                      $sql="SELECT `id_r` FROM `request_houses` WHERE status = 'بيع' ";
                                      $res=mysqli_query($conn,$sql);
                                      $row=mysqli_num_rows($res);
                                        echo $row;
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-3">
                    <div class="mb-4">
                        <h6 class="card-title mb-0">العقارات المطلوبة للايجار</h6>
                    </div>
                    <div class="row align-items-center mb-2 d-flex text-center">
                        <div class="col-8 text-center">
                            <h2 class="d-flex align-items-center text-center mb-0">
                              <?php
                                      $sql="SELECT `id_r` FROM `request_houses` WHERE status = 'ايجار' ";
                                      $res=mysqli_query($conn,$sql);
                                      $row=mysqli_num_rows($res);
                                        echo $row;
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; UoKerbala 2022</div>

                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
