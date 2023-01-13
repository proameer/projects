<?php
include "../db.php";
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
    <title>ادارة التصنيفات</title>
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
                            <h1 style="text-align:center " class="card-title"> ادارة التصنيفات </h1>
   
                                <!-- search book -->
                                <div style="padding-left: 800px;" class="search">
                                    <form  class="navbar-form" method="post" name="form1">
                                        <div class="d-flex justify-content-end">
                                            <input type="text" class="form-control " name="search"
                                                placeholder="ابحث عن اسم التصنيف...">
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
    $q=mysqli_query($conn,"SELECT * from categories where categoryName like '%$_POST[search]%' ORDER BY id desc");

    if(mysqli_num_rows($q)==0)
      {
        echo "<h1 style='padding-top: 100px;
        text-align: center;'>عفوا لا يوجد تصنيف بهذا الاسم. حاول البحث مره اخرى</h1>";
      }
            else{ ?>
                
                <div style="margin-top:20px">

                <table class="table table-striped table-bordered table-dark" style="text-align: center;">
                    <thead style="font-size:25px" class="bg-info" >
                        <tr>
                            <th>ت</th>
                            <th scope="col">اسم التصنيف</th>
                            <th scope="col">حذف</th>
                            <th scope="col">تحديث</th>
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
                <td><?php echo $row['categoryName'];  ?></td>
                <td><a href="manage-categories.php?id=<?php echo $row['id'];?>"><button
                            style="padding: 5px 20px;" class="btn btn-danger">حذف
                        </button></a> </td>
                <td><a href="edit-categories.php?id=<?php echo $row['id'];?>"><button
                            style="padding: 5px 20px;" class="btn btn-success">تعديل
                        </button></a> </td>
            </tr>
            <tr>
            
       <?php     }} ?>

<?php 
}
else{
    ?>          
                <div style="margin-top:20px">

                <table class="table table-striped table-bordered table-dark" style="text-align: center;">
                    <thead style="font-size:25px" class="bg-info" >
                        <tr>
                            <th>ت</th>
                            <th scope="col"> اسم التصنيف</th>
                            <th scope="col"> صورة التصنيف</th>
                            <th scope="col">حذف</th>
                            <th scope="col">تحديث</th>
                        </tr>
                    </thead>
                    <tbody>

<?php
    $count=0;
    $q=mysqli_query($conn,"SELECT * from categories ORDER BY id desc");
    while($row=mysqli_fetch_assoc($q))

      { $count=$count+1;
?>
<tr>
                <td><?php echo $count  ?></td>
                <td><?php echo $row['categoryName'];  ?></td>
                <td><img src="<?php echo 'upload/'.$row['imageCategory'] ; ?> " alt="" style="height:40px"></td>
                <td><a href="manage-categories.php?id=<?php echo $row['id'];?>"><button
                            style="padding: 5px 20px;" class="btn btn-danger">حذف
                        </button></a> </td>
                <td><a href="edit-categories.php?id=<?php echo $row['id'];?>"><button
                            style="padding: 5px 20px;" class="btn btn-success">تعديل
                        </button></a> </td>
            </tr>
            
           
            <?php 
      }

}

?>
  <?php 

if(isset($_GET['id'])){
    $id=$_GET['id'];
$query="DELETE FROM `categories`WHERE id= '$id'";
  mysqli_query($conn,$query);
  echo ' <div id="alert" class="alert alert-success">
  <strong style="text-align:center;display: block;">تم الحدف بالنجاح</strong>
  </div>';
  header('location:manage-categories.php');
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