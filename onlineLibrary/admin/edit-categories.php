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
    <title>تعديل تصنيف</title>
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

        <div class="page-wrapper">
            <div class="container-fluid" style="margin: 0 240px;">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <?php
    if (isset($_GET['id_c'])) {
        $id = $_GET['id_c'];

        $query = "SELECT * FROM category WHERE id_c = '$id'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
    }
    ?>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_GET['id_c'];
        $CategoryName = $_POST['categoryname'];
        $query = "UPDATE category SET CtegoryName='$CategoryName' WHERE id_c = '$id'";
        $edit = mysqli_query($conn, $query);
        echo '<div id="alert" class="alert alert-success">
        <strong style="text-align:center;display: block;">تم التعديل بنجاح</strong>
      </div>';
   ?>
      <script>window.location='manage-categories.php'</script>
   <?php
    }
    ?>
                                <!-- MENU SECTION END-->
                                <div class=" content-wrapper">
                                    <div class="container">
                                        <div class="row pad-botm">

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <div class=" panel panel-info">

                                                    <div style="margin-bottom: 10px;" class="panel-body">
                                                        <form action="edit-categories.php?id_c=<?php echo $row['id_c']; ?>"
                                                            style="text-align:right;" role="form" method="post">
                                                            <div style="text-align: right;font-size: 30px;"
                                                                class="form-group">
                                                                <label>تعديل اسم التصنيف</label>
                                                                <input class="form-control" type="text"
                                                                    name="categoryname"
                                                                    value="<?php echo $row['CtegoryName']; ?>"
                                                                    autocomplete="off" id="category" required />
                                                            </div>
                                            

                                                            <button style="padding: 5px 20px;" type="submit" name="edit"
                                                                class="btn btn-info">تعديل </button>

                                                        </form>
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