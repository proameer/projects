<div class="header_section" style="direction: ltr;">
         <div class="container" >
            <nav class="navbar navbar-dark bg-dark" >
            
            <div class="search_section" >
                  <ul>
                     <?php 
                      ini_set ("error_reporting", 0);
                      session_start();
                        include "db.php";

                        
                        if($_SESSION['email']){
                           echo '<li><a href="logout.php">تسجيل خروج</a></li>';
                        }
                        else {
                           echo '<li><a href="login.php">تسجيل دخول</a></li>';
                        }
                     ?>

                     <li><a href="cart.php"><img src="images/shopping.png" style="margin-right:10px; width:50px">عربتي </a></li>
                  </ul>
               </div>

               <div>
               <a class="logo text-light" href="index.php"><img src="admin/assets/logo.png" width="80px" style="background-color:#fff;" ></a>

               </div>
              
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>

               

               <div class="collapse navbar-collapse" id="navbarsExample01" style="text-align:right">
                  <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="#"><?php echo $_SESSION['name'] ?></a>
                  </li>

                     <li class="nav-item active">
                        <a class="nav-link" href="index.php">الرئيسية</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="category.php">التصنيفات</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="products.php">المنتجات</a>
                     </li>
                 
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">تواصل معنا </a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>