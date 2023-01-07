<?php
ob_start();
$pagetitle = ' الرئيسية  ';
?>
<div class="container-fluid dashboard">
    <div class="bread bread_dasha">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=client_dashboard"> لوحة تحكم الضيوف </a> <i class="fa fa-chevron-left"></i> </li>
                <li class="breadcrumb-item active" aria-current="page"> <?php echo $lang['dashboard']; ?> </li>
            </ol>
        </nav>
    </div>
</div>
<div class="client_serv">
    <div class="container-fluid">
        <div class="data">
            <h2> الخدمات </h2>
            <div class="serv_link">
                <a href="main.php?dir=clients/contract_request&page=add" class="btn btn-primary"> خدمة مراجعه قوائم مالية  <i class="fa fa-plus-circle"></i> </a>
                <a href="main.php?dir=clients/accounting_report&page=add" class="btn btn-warning"> خدمة اعداد تقرير محاسبي  <i class="fa fa-plus-circle"></i> </a>
                <a href="main.php?dir=clients/tax_services&page=add" class="btn btn-secondary"> خدمة زكاة وضرائب <i class="fa fa-plus-circle"></i> </a>
                <a href="main.php?dir=clients/record_screen&page=view" class="btn btn-dark">الدخول لشاشات السجلات <i class="fa fa-chart-area"></i> </a>
            </div>
        </div>
    </div>
</div>

<div class="admin_dashbaord">
    <div class="container">
        <div class="data">
            <div class="row">
                <div class="col-lg-4">
                    <div class="small_box small-box1">
                        <div class="icon">
                            <span> <i class="fa fa-chart-area"></i> </span>
                        </div>
                        <div class="inner">
                            <span> مراجعه قوائم مالية </span>
                            <?php
                            $stmt = $connect->prepare(
                                'SELECT COUNT(con_id) FROM contract_report WHERE user_id=?'
                            );
                            $stmt->execute([$_SESSION['client_id']]);
                            $count = $stmt->fetchcolumn();
                            ?>
                            <h3> <?php echo $count; ?> </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="small_box small-box2">
                        <div class="icon">
                            <span> <i class="fa fa-file-excel"></i> </span>
                        </div>
                        <div class="inner">
                            <span> اعداد تقرير محاسبي </span>
                            <?php
                            $stmt = $connect->prepare(
                                'SELECT COUNT(ar_id) FROM  accounting_report WHERE user_id=?'
                            );
                            $stmt->execute([$_SESSION['client_id']]);
                            $count = $stmt->fetchcolumn();
                            ?>
                            <h3> <?php echo $count; ?> </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="small_box small-box3">
                        <div class="icon">
                            <span> <i class="fa fa-tasks"></i> </span>
                        </div>
                        <div class="inner">
                            <span> زكاة وضرائب </span>
                            <?php
                            $stmt = $connect->prepare(
                                'SELECT COUNT(tax_id) FROM tax_report WHERE user_id=?'
                            );
                            $stmt->execute([$_SESSION['client_id']]);
                            $count = $stmt->fetchcolumn();
                            ?>
                            <h3> <?php echo $count; ?> </h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid customer_report d-none">

    <?php
    if (isset($_SESSION['client_id'])) {
        $client_id = $_SESSION['client_id'];
        $stmt = $connect->prepare("SELECT * FROM users WHERE user_id=?");
        $stmt->execute(array($client_id));
        $client_data = $stmt->fetch();
    }
    ?>

    <div class="table-responsive">
        <div class="add_new_record">
            <button type="button" class="btn btn-primary btn-sm">
                حركة اخر العملاء الخاصين بك التي تم العمل عليهم
            </button>
        </div>
        <table id="tableone" class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th> رمز العميل </th>
                    <th> اسم العميل </th>
                    <th> السنة المالية </th>
                    <th> نوع الخدمة </th>
                    <th> تاريخ طلب الخدمة </th>
                    <th> تاريخ صدور العقد </th>
                    <th> تاريخ بدء الخدمة </th>
                    <th> تاريخ انتهاء الخدمة </th>
                    <th> ارفاق عقد موقع </th>
                    <th> ارفاق ايصالات سداد الاتعاب </th>
                    <th> الحالة </th>
                </tr>
            </thead>
            <tbody>

                <!-- Show Tax Services (زكاء وضرائب)  -->
                <?php
                $stmt = $connect->prepare('SELECT * FROM tax_report WHERE user_id=? ORDER BY tax_id DESC LIMIT 2');
                $stmt->execute(array($_SESSION['client_id']));
                $alltype = $stmt->fetchAll();
                foreach ($alltype as $type) { ?> <tr>
                        <td> <a class="btn btn-default" href="main.php?dir=clients/record_screen&page=view_tax&tax_id=<?php echo $type['tax_id']; ?>"> <?php echo $type['tax_id']; ?> </a> </td>
                        <td> <?php echo $type['tax_client_name']; ?> </td>
                        <td> <?php echo $type['tax_years_required']; ?> </td>
                        <td> زكاة وضرائب </td>
                        <td> <?php echo $type['tax_prepare_date']; ?> </td>
                        <td> <?php
                                if ($type['date_issuance'] == 0) {
                                ?>
                                لم يحدد
                            <?php
                                } else {
                                    echo $type['date_issuance'];
                                }
                            ?> </td>
                        <td> <?php
                                if ($type['date_start_services'] == 0) { ?>
                                لم يحدد
                            <?php
                                } else {
                                    echo $type['date_start_services'];
                                }
                            ?> </td>
                        <td> <?php
                                if ($type['date_end_services'] == 0) { ?>
                                لم يحدد
                            <?php
                                } else {
                                    echo $type['date_end_services'];
                                }
                            ?> </td>
                        <td> <?php
                                if ($type['send_signed_contract'] == 0) { ?>
                                لم يتم الارفاق
                            <?php
                                } else { ?>
                                تم الارفاق
                            <?php
                                }
                            ?> </td>
                        <td> <?php
                                if ($type['send_payment_fee'] == 0) { ?>
                                لم يتم الارفاق
                            <?php
                                } else { ?>
                                تم الارفاق
                            <?php
                                }
                            ?> </td>
                        <td> <?php
                                if ($type['status'] == 0) { ?>
                                قائمة
                            <?php
                                } else { ?>
                                انتهت
                            <?php
                                }
                            ?> </td>
                    </tr> <?php
                            ?>
                <?php
                }
                ?>

                <!-- Show  accounting_report   (  اعداد تقرير محاسبي  )  -->
                <?php
                $stmt = $connect->prepare('SELECT * FROM accounting_report WHERE user_id=? ORDER BY ar_id DESC LIMIT 2');
                $stmt->execute(array($_SESSION['client_id']));
                $alltype = $stmt->fetchAll();
                foreach ($alltype as $type) { ?> <tr>
                        <td> <a class="btn btn-default" href="main.php?dir=clients/record_screen&page=view_account&ar_id=<?php echo $type['ar_id']; ?>"> <?php echo $type['ar_id']; ?> </a> </td>

                        <td> <?php echo $type['ar_client_name']; ?> </td>
                        <td> -- <?php // echo $type['ar_years_required']; 
                                ?> </td>
                        <td> تقرير محاسبي </td>
                        <td> <?php echo $type['ar_prepare_date']; ?> </td>
                        <td> <?php
                                if ($type['date_issuance'] == 0) {
                                ?>
                                لم يحدد
                            <?php
                                } else {
                                    echo $type['date_issuance'];
                                }
                            ?> </td>
                        <td> <?php
                                if ($type['date_start_services'] == 0) { ?>
                                لم يحدد
                            <?php
                                } else {
                                    echo $type['date_start_services'];
                                }
                            ?> </td>
                        <td> <?php
                                if ($type['date_end_services'] == 0) { ?>
                                لم يحدد
                            <?php
                                } else {
                                    echo $type['date_end_services'];
                                }
                            ?> </td>
                        <td> <?php
                                if ($type['send_signed_contract'] == 0) { ?>
                                لم يتم الارفاق
                            <?php
                                } else { ?>
                                تم الارفاق
                            <?php
                                }
                            ?> </td>
                        <td> <?php
                                if ($type['send_payment_fee'] == 0) { ?>
                                لم يتم الارفاق
                            <?php
                                } else { ?>
                                تم الارفاق
                            <?php
                                }
                            ?> </td>
                        <td> <?php
                                if ($type['status'] == 0) { ?>
                                قائمة
                            <?php
                                } else { ?>
                                انتهت
                            <?php
                                }
                            ?> </td>
                    </tr> <?php
                            ?>
                <?php
                }
                ?>

                <!-- Show  Contract   (  طلب عقد ارتباط )  -->
                <?php
                $stmt = $connect->prepare('SELECT * FROM contract_report WHERE user_id=? ORDER BY con_id DESC LIMIT 2');
                $stmt->execute(array($_SESSION['client_id']));
                $alltype = $stmt->fetchAll();
                foreach ($alltype as $type) { ?> <tr>
                        <td> <a class="btn btn-default" href="main.php?dir=clients/record_screen&page=view_contract&con_id=<?php echo $type['con_id']; ?>"> <?php echo $type['con_id']; ?> </a> </td>

                        <td> <?php echo $type['con_client_name']; ?> </td>
                        <td> <?php echo $type['con_years_required']; ?> </td>
                        <td> عقد ارتباط </td>
                        <td> <?php echo $type['con_prepare_time']; ?> </td>
                        <td> <?php
                                if ($type['date_issuance'] == 0) {
                                ?>
                                لم يحدد
                            <?php
                                } else {
                                    echo $type['date_issuance'];
                                }
                            ?> </td>
                        <td> <?php
                                if ($type['date_start_services'] == 0) { ?>
                                لم يحدد
                            <?php
                                } else {
                                    echo $type['date_start_services'];
                                }
                            ?> </td>
                        <td> <?php
                                if ($type['date_end_services'] == 0) { ?>
                                لم يحدد
                            <?php
                                } else {
                                    echo $type['date_end_services'];
                                }
                            ?> </td>
                        <td> <?php
                                if ($type['send_signed_contract'] == 0) { ?>
                                لم يتم الارفاق
                            <?php
                                } else { ?>
                                تم الارفاق
                            <?php
                                }
                            ?> </td>
                        <td> <?php
                                if ($type['send_payment_fee'] == 0) { ?>
                                لم يتم الارفاق
                            <?php
                                } else { ?>
                                تم الارفاق
                            <?php
                                }
                            ?> </td>
                        <td> <?php
                                if ($type['status'] == 0) { ?>
                                قائمة
                            <?php
                                } else { ?>
                                انتهت
                            <?php
                                }
                            ?> </td>
                    </tr> <?php
                            ?>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>


</div>
<!--
</div>
</div>
            -->
<?php ob_end_flush();
?>