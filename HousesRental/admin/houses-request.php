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
    <body class="sb-nav-fixed">

      <?php include "navbar.php"; ?>

              <div id="layoutSidenav">

      <?php include "sidenav.php"; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4" style="direction:rtl">
                        <h1 class="mt-4"> العقارات المطلوبة</h1>


                              <table class="table table-striped table-dark" style="direction:rtl">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">عنوان العقار</th>
      <th scope="col">التصنيف</th>
      <th scope="col">المساحة</th>
      <th scope="col">عدد الغرف</th>
      <th scope="col">الحالة</th>
      <th scope="col" width="15%">العملية</th>

    </tr>
  </thead>
  <tbody>
    <?php
$i=1;
    $result = mysqli_query($conn,"SELECT id_r , name_house , status , area , room_no , price , email , phone , description  ,category_name FROM request_houses JOIN categories  ON request_houses.category_id=categories.id order by id_r desc ");
    while ($row = mysqli_fetch_array($result)) {
     ?>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo $row['name_house']; ?></td>
      <td><?php echo $row['category_name']; ?></td>
      <td><?php echo $row['area']; ?></td>
      <td><?php echo $row['room_no']; ?></td>
      <td><?php echo $row['status']; ?></td>
      <td>
        <a class="btn btn-info" href="single-house-request.php?id_r=<?php echo $row['id_r']; ?>">عرض</a>
        <a class="btn btn-danger" href="houses-request.php?id_r=<?php echo $row['id_r']; ?>">حذف</a>
      </td>

    </tr>
  <?php } ?>

  <?php
  if(isset($_GET['id_r'])){
    $id=$_GET['id_r'];
  $query="DELETE FROM request_houses WHERE id_r= '$id'";
  mysqli_query($conn,$query);
  echo ' <div id="alert" class="alert alert-danger">
  <strong style="text-align:center;display: block;">تم الحدف بنجاح</strong>
  </div>';
  }
  ?>
  </tbody>
</table>

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
 </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
