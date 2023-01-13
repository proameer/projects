    <?php
  
    
   
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
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img style="width:200px" src="logo.jpg" alt="homepage" class="dark-logo" />
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                            id="bell" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i data-feather="bell" class="svg-icon"></i></span>
                            <span class="badge badge-primary notify-no rounded-circle">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                            <ul class="list-style-none">
                                <li>
                                    <div class="message-center notifications position-relative">
                                        <!-- Message -->
                                        <a href="javascript:void(0)"
                                            class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <div class="btn btn-danger rounded-circle btn-circle"><i
                                                    data-feather="airplay" class="text-white"></i></div>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h6 class="message-title mb-0 mt-1">امير صالح </h6>
                                                <span class="font-12 text-nowrap d-block text-muted">
                                                    قام بطلب استعارة كتاب برمجة </span>
                                                <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)"
                                            class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <div class="btn btn-danger rounded-circle btn-circle"><i
                                                    data-feather="airplay" class="text-white"></i></div>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h6 class="message-title mb-0 mt-1">اكرم محمد</h6>
                                                <span class="font-12 text-nowrap d-block text-muted text-truncate">
                                                    قام بطلب استعارة كتاب تصميم </span>
                                                <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)"
                                            class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <div class="btn btn-danger rounded-circle btn-circle"><i
                                                    data-feather="airplay" class="text-white"></i></div>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h6 class="message-title mb-0 mt-1">احمد ستار</h6>
                                                <span class="font-12 text-nowrap d-block text-muted text-truncate">
                                                    قام بطلب استعارة كتاب داتابيس </span>
                                                <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                            </div>
                                        </a>

                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                        <strong>عرض كل الاشعارات</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
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
                                    class="text-dark"><?php echo $_SESSION['email']; ?></span> <i data-feather="chevron-down"
                                    class="svg-icon"></i></span>
                            <img src="../assets/img/user.jpg" alt="user" class="rounded-circle" width="40">
                        </a>
                        <div style="text-align: right;
    padding: 0px 0px;
    margin: 0 0px;
    min-width: 160px;" class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <a class="dropdown-item" href="edit-profile-admin.php"><i data-feather="user"
                                    class="svg-icon mr-2 ml-1"></i>
                                تعديل الملف الشخصي</a>
                        

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../logout.php"><i data-feather="power"
                                    class="svg-icon mr-2 ml-1"></i>
                                تسجيل الخروج</a>
                            <div class="dropdown-divider"></div>
                            <div class="pl-4 p-3"><a href="registerAdmin.php" class="btn btn-sm btn-info">اضافة ادمن
                                    جديد
                                </a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <?php
        $email=$_POST['fname'];
        $_SESSION['fname']=$email;
        
        ?>
        