
<!--  START NEW NAVBAR  --->


<div class="wrapper">

    <nav class="navbar navbar-expand-lg navbar-light sticky-lg-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <?php echo $website_title; ?> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="main.php?dir=dashboard&page=dashboard">
                            الرئيسية
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            المستخدمين
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="main.php?dir=admin_users&page=report"> مشاهدة المستخدمين </a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            صلاحيات المستخدمين
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="main.php?dir=privilage&page=report" class="dropdown-item">
                                    مشاهدة الصلاحيات
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                            <i class="far fa-user-circle"></i>

                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li> <a href="#" class="dropdown-item">
                                    <i class="fa fa-user"></i> حسابي
                                </a></li>
                            <li> <a href="signout.php" class="dropdown-item">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i> تسجيل خروج
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- end New Navbar -->