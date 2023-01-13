<?php
include "db.php";
if (isset($_SESSION['email'])) {
  ?>

  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" style="direction:rtl">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php"> <span class="color-b"> الشروق</span> للعقارات <br><p style="font-size:20px;margin-bottom: 0;">نظام ادارة الاستثمار العقاري</p></a>

      <div class="navbar-collapse collapse justify-content-center" style="direction:rtl" id="navbarDefault" >
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="index.php">الرئيسية </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> العقارات المعروضة</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="show-house-sale.php"> البيع</a>
              <a class="dropdown-item " href="show-house-rent.php">الايجار </a>

            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">العقارات المطلوبة</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="request-house-sale.php"> البيع</a>
            <a class="dropdown-item " href="request-house-rent.php"> الايجار</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.php">اتصل بنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="about.php">حول</a>
          </li>
        </ul>
      </div>


    <ul class="navbar-nav">
      <li class="nav-item">
        <?php echo $_SESSION['email']; ?>
        <a class="nav-link " href="logout.php">تسجيل خروج</a>
      </li>
    </ul>



    </div>

  </nav><!-- End Header/Navbar -->


  <?php
}
else {


 ?>
 <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" style="direction:rtl">
   <div class="container">
     <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
       <span></span>
       <span></span>
       <span></span>
     </button>
     <a class="navbar-brand text-brand" href="index.php"> <span class="color-b"> الشروق</span> للعقارات <br><p style="font-size:20px;margin-bottom: 0;">نظام ادارة الاستثمار العقاري</p></a>

     <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
       <ul class="navbar-nav">

         <li class="nav-item">
           <a class="nav-link active" href="index.php">الرئيسية </a>
         </li>

         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> العقارات المعروضة</a>
           <div class="dropdown-menu">
             <a class="dropdown-item " href="show-house-sale.php"> البيع</a>
             <a class="dropdown-item " href="show-house-rent.php">الايجار </a>

           </div>
         </li>

         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">العقارات المطلوبة</a>
           <div class="dropdown-menu">
             <a class="dropdown-item " href="request-house-sale.php"> البيع</a>
           <a class="dropdown-item " href="request-house-rent.php"> الايجار</a>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link " href="contact.php">اتصل بنا</a>
         </li>
         <li class="nav-item">
           <a class="nav-link " href="about.php">حول</a>
         </li>
       </ul>
     </div>


  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link " href="user.php">مستخدم</a>
    </li>
    <li class="nav-item">
      
  
      <a class="nav-link " href="admin.php" >مسؤول</a>
    </li>
  </ul>



  </div>
</nav><!-- End Header/Navbar -->

<?php } ?>
