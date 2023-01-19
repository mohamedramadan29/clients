<?php
ob_start();
$pagetitle = ' الرئيسية  ';
?>
<div class="container-fluid dashboard">
    <div class="bread bread_dasha">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=privlage_dashboard"> <?php echo  $website_title; ?></a> <i class="fa fa-chevron-left"></i> </li>
                <li class="breadcrumb-item active" aria-current="page"> <?php echo $lang['dashboard']; ?> </li>
            </ol>
        </nav>
    </div>
    <div class="admin_dashbaord">
        <div class="container">
            <h2> داشبورد الموظفين </h2>
            <div class="data">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="small_box small-box4">
                            <div class="icon">
                                <span> <i class="fa fa-users"></i> </span>
                            </div>
                            <div class="inner">
                                <span> المستخدمين </span>
                                <?php
                                $stmt = $connect->prepare(
                                    'SELECT COUNT(user_id) FROM users'
                                );
                                $stmt->execute();
                                $count = $stmt->fetchcolumn();
                                ?>
                                <h3> <?php echo $count; ?> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="small_box small-box1">
                            <div class="icon">
                                <span> <i class="fa fa-chart-area"></i> </span>
                            </div>
                            <div class="inner">
                                <span> مراجعه قوائم مالية </span>
                                <?php
                                $stmt = $connect->prepare(
                                    'SELECT COUNT(con_id) FROM contract_report'
                                );
                                $stmt->execute();
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
                                    'SELECT COUNT(ar_id) FROM  accounting_report'
                                );
                                $stmt->execute();
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
                                    'SELECT COUNT(tax_id) FROM tax_report'
                                );
                                $stmt->execute();
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

</div>
<?php ob_end_flush();
?>