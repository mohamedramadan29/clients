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
                        <a class="nav-link" href="main.php?dir=dashboard&page=privlage_dashboard">
                            الرئيسية
                        </a>
                    </li>
                    <?php
                    $stmt = $connect->prepare("SELECT * FROM new_priv");
                    $stmt->execute();
                    $priv_data = $stmt->fetch();

                    $stmt = $connect->prepare("SELECT * FROM users WHERE user_id=?");
                    $stmt->execute(array($_SESSION['emp_id']));
                    $users = $stmt->fetch();
                    if (($users['user_jop_title'] == 'المالك' && $priv_data['create_report_own'] == 1) ||
                        ($users['user_jop_title'] == 'مشرف إداري' && $priv_data['create_report_ad_sup'] == 1) ||
                        ($users['user_jop_title'] == 'مساعد إداري' && $priv_data['create_report_ma_assis'] == 1) ||
                        ($users['user_jop_title'] == 'مدير مراجعة' && $priv_data['create_report_mang_revie'] == 1) ||
                        ($users['user_jop_title'] == 'مراجع' && $priv_data['create_report_reviwer'] == 1) ||
                        ($users['user_jop_title'] == 'مشرف جودة' && $priv_data['create_report_qua_super'] == 1) ||
                        ($users['user_jop_title'] == 'عميل مباشر' && $priv_data['create_report_live_client'] == 1) ||
                        ($users['user_jop_title'] == 'ضيف' && $priv_data['create_report_client'] == 1) ||
                        
                        ($users['user_jop_title'] == 'المالك' && $priv_data['show_attach_own'] == 1) ||
                        ($users['user_jop_title'] == 'مشرف إداري' && $priv_data['show_attach_ad_sup'] == 1) ||
                        ($users['user_jop_title'] == 'مساعد إداري' && $priv_data['show_attach_ma_assis'] == 1) ||
                        ($users['user_jop_title'] == 'مدير مراجعة' && $priv_data['show_attach_mang_revie'] == 1) ||
                        ($users['user_jop_title'] == 'مراجع' && $priv_data['show_attach_reviwer'] == 1) ||
                        ($users['user_jop_title'] == 'مشرف جودة' && $priv_data['show_attach_qua_super'] == 1) ||
                        ($users['user_jop_title'] == 'عميل مباشر' && $priv_data['show_attach_live_client'] == 1) ||
                        ($users['user_jop_title'] == 'ضيف' && $priv_data['show_attach_client'] == 1) ||

                        ($users['user_jop_title'] == 'المالك' && $priv_data['agree_refuse_own'] == 1) ||
                        ($users['user_jop_title'] == 'مشرف إداري' && $priv_data['agree_refuse_ad_sup'] == 1) ||
                        ($users['user_jop_title'] == 'مساعد إداري' && $priv_data['agree_refuse_ma_assis'] == 1) ||
                        ($users['user_jop_title'] == 'مدير مراجعة' && $priv_data['agree_refuse_mang_revie'] == 1) ||
                        ($users['user_jop_title'] == 'مراجع' && $priv_data['agree_refuse_reviwer'] == 1) ||
                        ($users['user_jop_title'] == 'مشرف جودة' && $priv_data['agree_refuse_qua_super'] == 1) ||
                        ($users['user_jop_title'] == 'عميل مباشر' && $priv_data['agree_refuse_live_client'] == 1) ||
                        ($users['user_jop_title'] == 'ضيف' && $priv_data['agree_refuse_client'] == 1)

                    ) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                عقد ارتباط مراجعه
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="main.php?dir=clients/contract_request&page=add"> اضافة عقد جديد</a></li>
                                <!--
                                <li><a href="main.php?dir=privilage_data/contract_request&page=report" class="dropdown-item">
                                        مشاهدة العقود
                                    </a>
                                </li>
                    -->
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
                                <!--
                                <li><a href="main.php?dir=clients/accounting_report&page=report" class="dropdown-item">
                                        مشاهدة العقود
                                    </a>
                                </li>-->
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
                                <!--
                                <li> <a href="main.php?dir=clients/tax_services&page=report" class="dropdown-item">
                                        مشاهدة العقود
                                    </a>
                                </li>-->
                            </ul>
                        </li>

                    <?php
                    }
                    ?>

                    <li class="nav-item">
                        <a class="nav-link" href="signout.php">
                            تسجيل خروج
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>