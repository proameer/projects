<?php
include "../connection.php";
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
    <title>ادارة الطلاب</title>
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

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h1 style="text-align:center " class="card-title"> ادارة الطلاب </h1>

                                <!-- search book -->
                                <div style="padding-left: 800px;" class="search">
                                    <form class="navbar-form" method="post" name="form1">
                                        <div class="d-flex justify-content-end">
                                            <input type="text" class="form-control " name="search"
                                                placeholder="ابحث عن اسم طالب...">
                                            <button style="background-color: #7f72ea;
    color: #fff;" class="btn btn-defualt ms-1" type="submit" name="submit">
                                                <span class="glyphicon glyphicon-search">بحث</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- php search -->
                                <?php

if(isset($_POST['submit']))
{
    $q=mysqli_query($conn,"SELECT * from students where FirstName like '%$_POST[search]%' or LastName like '%$_POST[search]%' ORDER BY id_s desc");

    if(mysqli_num_rows($q)==0)
      {
        echo "<h1 style='padding-top: 100px;
        text-align: center;'>عفوا لا يوجد طالب بهذا الاسم. حاول البحث مره اخرى</h1>";
      }
            else{ ?>

                                <div style="margin-top:20px">

                                    <table class="table table-striped table-bordered table-dark"
                                        style="text-align: center;">
                                        <thead style="font-size:25px" class="bg-info">
                                            <tr>
                                                <th>ت</th>
                                                <th scope="col">اسم الطالب</th>
                                                <th scope="col">اسم الاب</th>
                                                <th scope="col">البريد الالكتروني </th>
                                                <th scope="col">رقم الهاتف</th>
                                                <th scope="col">تاريخ التسجيل</th>
                                                <th scope="col">تاريخ التحديث</th>
                                                <th scope="col">حذف</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
    $count=0;
    while($row=mysqli_fetch_assoc($q))

      { $count=$count+1;
?>
                                            <tr>
                                                <td><?php echo $count  ?></td>
                                                <td><?php echo $row['FirstName'];  ?></td>
                                                <td><?php echo $row['LastName'];  ?></td>
                                                <td><?php echo $row['Email'];  ?></td>
                                                <td><?php echo $row['PhoneNumber'];  ?></td>
                                                <td><?php echo $row['RgisterationDate'] ; ?> </td>
                                                <td><?php echo $row['UpdationDate'] ; ?> </td>
                                                <td><a href="manage-student.php?id_s=<?php echo $row['id_s'];?>"><button
                                                            style="padding: 5px 20px;" class="btn btn-danger">حذف
                                                        </button></a> </td>

                                            </tr>
                                            <tr>

                                                <?php     }} ?>

                                                <?php 
}
else{
    ?>
                                                <div style="margin-top:20px">

                                                    <table class="table table-striped table-bordered table-dark"
                                                        style="text-align: center;">
                                                        <thead style="font-size:25px" class="bg-info">
                                                            <tr>
                                                                <th>ت</th>
                                                                <th scope="col">اسم الطالب</th>
                                                                <th scope="col">اسم الاب</th>
                                                                <th scope="col">البريد الالكتروني </th>
                                                                <th scope="col">رقم الهاتف</th>
                                                                <th scope="col">تاريخ التسجيل</th>
                                                                <th scope="col">تاريخ التحديث</th>
                                                                <th scope="col">حذف</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php
    $count=0;
    $q=mysqli_query($conn,"SELECT * from students ORDER BY id_s desc");
    while($row=mysqli_fetch_assoc($q))

      { $count=$count+1;
?>
                                                            <tr>
                                                            <td><?php echo $count  ?></td>
                                                <td><?php echo $row['FirstName'];  ?></td>
                                                <td><?php echo $row['LastName'];  ?></td>
                                                <td><?php echo $row['Email'];  ?></td>
                                                <td><?php echo $row['PhoneNumber'];  ?></td>
                                                <td><?php echo $row['RgisterationDate'] ; ?> </td>
                                                <td><?php echo $row['UpdationDate'] ; ?> </td>
                                                <td><a href="manage-student.php?id_s=<?php echo $row['id_s'];?>"><button
                                                            style="padding: 5px 20px;" class="btn btn-danger">حذف
                                                        </button></a> </td>
                                                            </tr>


                                                            <?php 
      }

}

?>
                                                            <?php 

if(isset($_GET['id_s'])){
    $id=$_GET['id_s'];
$query="DELETE FROM `students`WHERE id_s= '$id'";
  mysqli_query($conn,$query);
  echo ' <div id="alert" class="alert alert-success">
  <strong style="text-align:center;display: block;">تم الحدف بنجاح</strong>
  </div>';
}
?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
    setTimeout(function() {

        // Closing the alert
        $('#alert').alert('close');
    }, 5000);
    </script>

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