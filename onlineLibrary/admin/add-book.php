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
    <title>اضافة كتاب</title>
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
        <?php include"navbar.php"; ?>
        <?php include"sidebar.php"; ?>

        <div style="padding-top:0" class="page-wrapper">
            <div class="container-fluid" style="margin: 0 240px;">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div style="background-color: #7574ea;
    color: #fff;
    display: inline-flex;margin-bottom: 30px;" class="col-md-12">
                                    <h4 style="font-size:25px;margin: 10px;" class="header-line">اضافة كتاب</h4>
                                </div>

                                <div style="margin:0 200px" class="add-book">
                                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST"
                                        enctype="multipart/form-data" style="text-align: right;">
                                        <div class="form-group">
                                            <label for="category"> اسم الكتاب</label>
                                            <input type="text" name="bookname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="cate">التصنيف</label>
                                            <select name="category" id="cate" class="form-control">
                                                <?php
                                    $query = "SELECT * FROM category";
                                    $res = mysqli_query($conn , $query);
                                    while($row = mysqli_fetch_assoc($res)){
                                        ?>
                                                <option value="  <?php echo  $row['id_c']; ?>" name="category">
                                                    <?php echo $row['CtegoryName']; ?>
                                                </option>
                                                <?php
                                    }
                               ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="cate">المؤلف</label>
                                            <select name="author" id="cate" class="form-control">
                                                <?php
                                    $query = "SELECT * FROM authors";
                                    $res = mysqli_query($conn , $query);
                                  
                                    while($row = mysqli_fetch_assoc($res)){
                                        ?>

                                                <option value="  <?php echo  $row['id_au']; ?>" name="author">
                                                    <?php echo  $row['AuthorName']; ?>
                                                </option>
                                                <?php
                                    }
                               ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="text"> رقم ISBN</label>
                                            <input type="text" name="isbn" id="isbn" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="text"> عدد النسخ </label>
                                            <input type="text" name="quantity" id="quantity" class="form-control">
                                        </div>

                                        <button style="padding: 5px 20px;margin:10px 0;" type="submit" name="Add"
                                            class="btn btn-info">اضافة </button>
                                </div>
                                </form>
                                <?php
                    if(isset($_POST['Add'])){
                        $sql ="INSERT INTO `book`(`id_b`, `BookName`, `CategoryId`, `AuthorId`, `ISBNNumber`,`quantity`) VALUES('','$_POST[bookname]','$_POST[category]','$_POST[author]','$_POST[isbn]','$_POST[quantity]')";
                       
                        if (mysqli_query($conn, $sql)) {
                            echo ' <div id="alert" class="alert alert-success">
    <strong style="text-align:center;display: block;">تمت الاضافة بنجاح</strong>
  </div>';

                        } else {
                          echo ' <div class="alert alert-danger">
    <strong style="text-align:center;display: block;"> حدث خطأ</strong>
  </div>';

                        }                    
                    }                  
                    ?>
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