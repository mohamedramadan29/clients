<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light mynavbar">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item mytogglebutton">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto topnav">


            <li class="nav-item">
                <a class="nav-link"href="main.php?dir=dashboard&page=client_dashboard">
                    الرئيسية
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    عقد ارتباط مراجعه
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="main.php?dir=clients/contract_request&page=add" class="dropdown-item">
                        اضافة عقد جديد
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="main.php?dir=clients/contract_request&page=report" class="dropdown-item">
                        مشاهدة العقود
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                إعداد تقرير محاسبي
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="main.php?dir=clients/accounting_report&page=add" class="dropdown-item">
                        اضافة عقد جديد
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="main.php?dir=clients/accounting_report&page=report" class="dropdown-item">
                        مشاهدة العقود
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                خدمة زكاة وضرائب
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="main.php?dir=clients/tax_services&page=add" class="dropdown-item">
                        اضافة عقد جديد
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="main.php?dir=clients/tax_services&page=report" class="dropdown-item">
                        مشاهدة العقود
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