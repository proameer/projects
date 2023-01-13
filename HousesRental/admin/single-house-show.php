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

      <?php
    $i=1;
    $id=$_GET['id_s'];
      $result = mysqli_query($conn,"SELECT id_s , name_house , status , area , room_no , price , email , phone , description , img ,category_name FROM show_houses JOIN categories  ON show_houses.category_id=categories.id WHERE id_s='$id'");
      $row = mysqli_fetch_array($result);
       ?>

        <div id="layoutSidenav_content" dir="rtl">
            <main>
              <br>
                <div class="container-fluid px-4 row ">
                  <div class="col-12">


            <h3 class="text-dark"> معلومات العقار</h3>
<br>
                    <table class="table table-striped table-dark table-col-6">
                      <tbody>
                        <tr >
                          <td>عنوان العقار</td>
                          <td><?php echo $row['name_house']; ?></td>
                        </tr>
                        <tr >
                          <td>صنف العقار</td>
                          <td><?php echo $row['category_name']; ?></td>
                        </tr>
                        <tr >
                          <td>حالة العقار</td>
                          <td><?php echo $row['status']; ?></td>
                        </tr>
                        <tr >
                          <td>مساحة العقار</td>
                          <td><?php echo $row['area']; ?></td>
                        </tr>
                        <tr >
                          <td>عدد الغرف</td>
                          <td><?php echo $row['room_no']; ?></td>
                        </tr>
                        <tr >
                          <td>السعر</td>
                          <td><?php echo $row['price']; ?></td>
                        </tr>
                        <tr >
                          <td>البريد الالكتروني</td>
                          <td><?php echo $row['email']; ?></td>
                        </tr>
                        <tr >
                          <td>رقم الهاتف</td>
                          <td><?php echo $row['phone']; ?></td>
                        </tr>
                        <tr >
                          <td>التفاصيل</td>
                          <td><?php echo $row['description']; ?></td>
                        </tr>
                        <tr >
                          <td>صورة العقار</td>
                          <td><img src="../image/<?php echo $row['img']; ?>" style="width:400px;height:400px"></td>
                        </tr>



                      </tbody>
                    </table>


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
