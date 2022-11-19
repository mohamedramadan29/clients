
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light mynavbar">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
                <a class="nav-link" href="main.php?dir=dashboard&page=dashboard">
                <?php echo $website_title; ?>
                </a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto topnav">
            <li class="nav-item">
                <a class="nav-link" href="main.php?dir=dashboard&page=dashboard">
                    الرئيسية
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    المستخدمين
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="dropdown-divider"></div>
                    <a href="main.php?dir=admin_users&page=report" class="dropdown-item">
                        مشاهدة المستخدمين
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    صلاحيات المستخدمين
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                    <div class="dropdown-divider"></div>
                    <a href="main.php?dir=privilage&page=report" class="dropdown-item">
                        مشاهدة الصلاحيات
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-user-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                    <a href="#" class="dropdown-item">
                        <i class="fa fa-user"></i> حسابي
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="signout.php" class="dropdown-item">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> تسجيل خروج
                    </a>
                </div>
            </li>

        </ul>


    </nav>
    <!-- /.navbar -->