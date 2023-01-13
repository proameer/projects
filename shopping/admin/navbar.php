    <?php
    ini_set ("error_reporting", 0);
  session_start();
    
   
    ?>
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md">
            <div class="navbar-header" data-logobg="skin6">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-brand">
                    <!-- Logo icon -->
                    <a href="index.php">
                        <b class="logo-icon mr-5">
                            <!-- Dark Logo icon -->
                            <img style="width:120px" src="assets/logo.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                        </b>                   
                    </a>
                </div>
         
                   <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                    data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
               <div style="margin-left: 50px;" class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    <!-- Notification -->
                    
                    <!-- End Notification -->
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">

                    <li style="margin: 0 auto;" class="nav-item dropdown">
                        <a style="direction:rtl;" class="nav-link dropdown-toggle" href="javascript:void(0)"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <span
                                    class="text-dark"><?php
                                     echo $_SESSION['email']; 
                                     ?></span> <i data-feather="chevron-down"
                                    class="svg-icon"></i></span>
                            <img src="assets/user.jpg" alt="user" class="rounded-circle" width="40">
                        </a>
                        <div style="text-align: right;padding: 0px 0px;margin: 0 0px;min-width: 160px;" class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <a class="dropdown-item" href="registerAdmin.php"><i data-feather="user"
                                    class="svg-icon mr-2 ml-1"></i>
                                  اضافة ادمن جديد</a>
                        

                            <a class="dropdown-item" href="logout.php"><i data-feather="power"
                                    class="svg-icon mr-2 ml-1"></i>
                                تسجيل الخروج</a>
                            
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <br><br>
    <?php
        // $email=$_POST['fname'];
        // $_SESSION['fname']=$email;
        
        ?>
        