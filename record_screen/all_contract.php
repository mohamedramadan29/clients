<div class="container-fluid customer_report">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=dashboard"> ادارة مهام العملاء </a> <i class="fa fa-chevron-left"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page"> مشاهدة القوائم المالية </li>
                </ol>
            </nav>
        </div>
        <!-------------------------- START NEW WHATSAPP MEMEBER------------------------->
        <!-- Content Row -->
        <!-- START MODEL TO ADD NEW RECORD  -->
    </div>
    <div class="table-responsive">
        <div class="">
            <table id="tableone" class="table table-light table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th> رمز العميل </th>
                        <th style="width: 250px;"> اسم العميل </th>
                        <th> السنة المالية </th>
                        <th> نوع الخدمة </th>
                        <th> تاريخ طلب الخدمة </th>
                        <th> تاريخ صدور العقد </th>
                        <th> تاريخ بدء الخدمة </th>
                        <th> تاريخ انتهاء الخدمة </th>
                        <th> ارفاق عقد موقع </th>
                        <th> ارفاق ايصالات سداد الاتعاب </th>
                        <th> الحالة </th>
                        <th> تفاصيل </th>
                        <th> مذكرة التخطيط </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Show  Contract   (  طلب عقد ارتباط )  -->
                    <?php
                    $stmt = $connect->prepare('SELECT * FROM contract_report ORDER BY con_id DESC');
                    $stmt->execute();
                    $alltype = $stmt->fetchAll();
                    foreach ($alltype as $type) { ?> <tr>
                            <td> <?php echo $type['con_id']; ?> </td>
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
                            <td> <a class="btn btn-primary btn-sm" href="main.php?dir=record_screen&page=view_contract&con_id=<?php echo $type['con_id']; ?>"> <i class="fa fa-eye fa-sm"></i> </a> </td>
                            <td> <a href="main.php?dir=review_plane&page=edit&con_id=<?php echo $type['con_id']; ?>" class="btn btn-outline-success btn-sm"> مذكرة التخطيط </a> </td>
                        </tr> <?php
                                ?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


</div>
</div>
</div>