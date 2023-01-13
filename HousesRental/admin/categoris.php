<?php
include "db.php";
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>houses</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed" >

      <?php include "navbar.php"; ?>

              <div id="layoutSidenav">

      <?php include "sidenav.php"; ?>

            <div id="layoutSidenav_content" dir="rtl">
                <main>
                    <div class="container-fluid px-4 row">
                        <h1 class="mt-4" style="margin-right:50px">التصنيفات</h1>


                        <div class=" mb-4 col-6 mx-5">

                              <table class="table table-striped table-dark table-col-6">
  <thead>
    <tr>
      <th scope="col-4">#</th>
      <th scope="col-4">اسم التصنيف</th>
      <th scope="col-4" width="20%">العملية</th>

    </tr>
  </thead>
  <tbody>
    <?php
$i=1;
    $result = mysqli_query($conn,"SELECT * FROM categories order by id desc");
    while ($row = mysqli_fetch_array($result)) {
     ?>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo $row['category_name']; ?></td>
      <td>
        <a class="btn btn-danger" href="categoris.php?id=<?php echo $row['id']; ?>">حذف</a>
      </td>
    </tr>


<?php } ?>

<?php

if(isset($_GET['id'])){
  $id=$_GET['id'];
$query="DELETE FROM `categories`WHERE id= '$id'";
mysqli_query($conn,$query);
echo ' <div id="alert" class="alert alert-danger">
<strong style="text-align:center;display: block;">تم الحدف بنجاح</strong>
</div>';
}
?>
  </tbody>
</table>
                        </div>

                        <div class="card mb-4 col-4 bg-dark" style="height: 200px;">
                          <br>
                        <h3 class="text-light">  اضافة تصنيف جديد</h3>
                            <div class="card-body">

                              <div class="input-group mb-3">
                                <form class="" action="categoris.php" method="post" autocomplete="off" >


    <input type="text" class="form-control" placeholder="اسم التصنيف" name="category" required>
    <br>
    <input class="btn btn-primary" type="submit" value="اضافة" name="add">

        </form>
      </div>
    </div>



                               <?php
                                     if(isset($_POST['add'])){
                                         $sql = "INSERT INTO `categories`(category_name) VALUES('$_POST[category]')";

                                         if (mysqli_query($conn, $sql)) {
                                             echo ' <div id="alert" class="alert alert-success">
                     <strong style="text-align:center;display: block;">تمت الاضافة بنجاح</strong>
                   </div>';

                                         } else {
                                           echo ' <div class="alert alert-danger">
                     <strong style="text-align:center;display: block;"> حدث خطأ</strong>
                   </div>';

                     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                         }

                                     }
                                     ?>
</div>
</div>

                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; UoKerbala</div>

                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script type="text/javascript">
 setTimeout(function() {

     // Closing the alert
     $('#alert').alert('close');
 }, 5000);
 </script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" ></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-

ui.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
