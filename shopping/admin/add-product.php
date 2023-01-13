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
    <title>اضافة منتج</title>
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
                                    <h4 style="font-size:25px;margin: 10px;" class="header-line">اضافة منتج</h4>
                                </div>

                                <div style="margin:0 200px" class="add-book">


                                <?php
                    if(isset($_POST['Add'])){
                        $filename = $_FILES['image']['name'];
                        
                        // Select file type
                        $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
                        
                        // valid file extensions
                        $extensions_arr = array("jpg","jpeg","png","gif","jfif");

                        // Check extension
                        if( in_array($imageFileType,$extensions_arr) ){
                        
                            // Upload files and store in database
                            if(move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$filename)){
                            // Image db insert sql
                            $sql ="INSERT INTO `products`(`id`, `productName`, `price`, `description`,`image`,`categoryID`,`userID`) 
                            VALUES('','$_POST[productName]','$_POST[price]','$_POST[description]','$filename' ,'$_POST[category]' ,'$_SESSION[userid]')";
                                        
                            if(mysqli_query($conn, $sql)){
                                echo "<h4 id='alert' class='alert alert-success'>تمت الاضافة بنجاح</h4>";
                                // header("Location: index.php");
                                }
                        
                                else{
                                    echo 'error: '.$sql.mysqli_error($conn);
                                }
                                }
                            }
                       }                  
                    ?>


                                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST"
                                        enctype="multipart/form-data" style="text-align: right;">
                                        <div class="form-group">
                                            <label for="productName"> اسم المننج</label>
                                            <input type="text" name="productName" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="cate">التصنيف</label>
                                            <select name="category" id="cate" class="form-control">
                                                <?php
                                    $query = "SELECT * FROM categories";
                                    $res = mysqli_query($conn , $query);
                                    while($row = mysqli_fetch_assoc($res)){
                                        ?>
                                                <option value="  <?php echo  $row['id']; ?>" name="category">
                                                    <?php echo $row['categoryName']; ?>
                                                </option>
                                                <?php
                                    }
                               ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="price"> السعر </label>
                                            <input type="text" name="price" class="form-control">
                                        </div>
                                       
                                       
                                        <div class="form-group">
                                            <label for="text"> الوصف </label>
                                            <input type="text" name="description" id="description" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="text"> صوره المنتج </label>
                                            <input type="file" name="image" id="image" class="form-control">
                                        </div>
                                    

                                        <button style="padding: 5px 20px;margin:10px 0;" type="submit" name="Add"
                                            class="btn btn-info">اضافة </button>
                                </div>
                                </form>
              
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