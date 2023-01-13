<?php
@session_start();
if(@$_SESSION['username']){
  ?>
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="index.php">Covid<span>19</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="add_patient.php">Add Patient</a></li>
          <li><a class="nav-link scrollto" href="search_patient.php">Search patient</a></li>
          <li class="dropdown"><a href="#"><span>View</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="view_info_patient.php">View</a></li>
              <li><a href="info_patient_chronic_diseases.php">Chronic Diseases</a></li>
              <li><a href="info_patient_smoking.php">Smoking</a></li>
      
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <?php
}
?>