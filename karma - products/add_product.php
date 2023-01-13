<?php
    include "db.php";
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Karma Shop</title>

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>


	<!-- Start Header Area -->
	<?php include "header.php"; ?>
	<!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
           
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
           <div class="row d-flex justify-content-center">
               <div class="col-md-6">
               <div class="returning_customer ">
                <div class="check_title">
                    <h2>Add New Product</h2>
                </div>
                
                <form action="" method="post" enctype="multipart/form-data" class="mt-5">
                    <div class="col-md-12 form-group p_star ">
                        <input type="text" class="form-control" name="title" required>
                        <span class="placeholder" data-placeholder="Title"></span>
                    </div>
                    <div class="col-md-12 form-group p_star">
                        <input type="text" class="form-control" name="description" required>
                        <span class="placeholder" data-placeholder="description"></span>
                    </div>
                    <div class="col-md-12 form-group p_star">
                        <input type="text" class="form-control" name="price" required>
                        <span class="placeholder" data-placeholder="price"></span>
                    </div>
                    <div class="col-md-12 form-group p_star">
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" name="add" class="primary-btn">Add Product</button>
                       
                    </div>
                </form>
            </div>
            <?php
    

    if(isset($_POST['add']))
    {
      $filename = $_FILES['image']['name'];
    
      // Select file type
      $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
    
      // valid file extensions
      $extensions_arr = array("jpg","jpeg","png","gif","jfif");
    
    
    
      $title = $_POST['title'];
      $description = $_POST['description'];
      $price = $_POST['price'];
      $user_id = $_SESSION['id'];
    
    
      // Check extension
      if( in_array($imageFileType,$extensions_arr) ){
    
      // Upload files and store in database
      if(move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$filename)){
        // Image db insert sql
        $sql = "INSERT INTO products (title,description,price,img,user_id)
        VALUES ('$title','$description','$price','$filename','$user_id')";
    
        if(mysqli_query($conn, $sql)){
             echo "<h4 id='alert' class='alert alert-success'>product has been uploaded successfuly..</h4>";
            // header("Location: index.php");
          }
    
            else{
              echo 'error: '.$sql.mysqli_error($conn);
            }
          }
        }
    
        }
    
    
     ?>
               </div>
           </div>
 
          
        </div>
    </section>
    <!--================End Checkout Area =================-->


	<!-- start footer Area -->
	<footer class="bg-dark">
		<div class="container">
		
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="text-light m-3"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; All rights reserved
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->


    <script type="text/javascript">
 setTimeout(function() {

     // Closing the alert
     $('#alert').alert('close');
 }, 5000);
 </script>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>