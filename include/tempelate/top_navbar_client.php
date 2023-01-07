<div class="wrapper">
  
    <nav class="navbar navbar-expand-lg navbar-light sticky-lg-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> العملاء </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="main.php?dir=dashboard&page=client_dashboard">
                            الرئيسية
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            عقد ارتباط مراجعه
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="main.php?dir=clients/contract_request&page=add"> اضافة عقد جديد</a></li>
                            <li><a href="main.php?dir=clients/contract_request&page=report" class="dropdown-item">
                                    مشاهدة العقود
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            إعداد تقرير محاسبي
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="main.php?dir=clients/accounting_report&page=add" class="dropdown-item">
                                    اضافة عقد جديد
                                </a></li>
                            <li><a href="main.php?dir=clients/accounting_report&page=report" class="dropdown-item">
                                    مشاهدة العقود
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            خدمة زكاة وضرائب
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="main.php?dir=clients/tax_services&page=add" class="dropdown-item">
                                    اضافة عقد جديد
                                </a></li>
                            <li> <a href="main.php?dir=clients/tax_services&page=report" class="dropdown-item">
                                    مشاهدة العقود
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                            <i class="far fa-user-circle"></i>

                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li> <a href="main.php?dir=clients/account&page=edit" class="dropdown-item">
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