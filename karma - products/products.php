<?php
include_once("db.php");

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
	
		<!-- Start Align Area -->
			<div class="container mt-5 mb-5">
				<div class="row">
					<div class="col-md-12">
						<h1><caption>List of Products by current user</caption></h1>
						<table class="table table-hover table-striped  table-bordered caption-top">
						
							<thead>
								<tr class="text-center">
									<th>#</th>
									<th>Image</th>
									<th>Title</th>
									<th>Price</th>
									<th>Description</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php
                             
							 if (isset($_SESSION['email'])) {
							   
						 
$i=1;
 $result = mysqli_query($conn,"SELECT * FROM products where user_id='$_SESSION[id]' order by id desc");
 while ($row = mysqli_fetch_array($result)) {
  ?>
								<tr class="text-center">
									<td><?php echo $i++ ?></td>
									<td><img src="upload/<?php echo $row['img'] ?>" alt="" width="60px" height="60px"></td>
									<td><?php echo $row['title']?></td>
									<td><?php echo $row['price']."$" ?></td>
									<td><?php echo $row['description']?></td>
									<td class="color-primary">
                                        <a href="products.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
								</tr>
								<?php
                                 } ?>

<?php
  if(isset($_GET['id'])){
    $id=$_GET['id'];
  $query="DELETE FROM products WHERE id= '$id'";
  mysqli_query($conn,$query);
  echo ' <div id="alert" class="alert alert-danger">
  <strong style="text-align:center;display: block;">product has been deleted successfuly.  </strong>
  </div>';
  }

  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
  
  }
}
  ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		<!-- End Align Area -->




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