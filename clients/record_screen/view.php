<div class="container-fluid customer_report">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=client_dashboard"> لوحة تحكم الضيوف </a> <i class="fa fa-chevron-left"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page">مشاهدة السجلات الخاصة بك </li>
                </ol>
            </nav>
        </div>
        <!-------------------------- START NEW WHATSAPP MEMEBER------------------------->
        <!-- Content Row -->
        <!-- START MODEL TO ADD NEW RECORD  -->
    </div>
    <!-- END RECORD TO EDIT NEW RECORD  -->
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
                <a href="main.php?dir=clients/account&page=edit"> تعديل بيانات المستخدم </a> <i class="fa fa-edit"></i>
            </button>
        </div>

        <br>
        <br>
        <br>
        <table id="tableone2" class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>رمز المستخدم </th>
                    <th>نوع المستخدم</th>
                    <th> الاسم الشخصى </th>
                    <th>اسم المستخدم</th>
                    <th> البريد الالكتروني </th>
                    <th> رقم الجوال </th>
                    <th> المدينة </th>
                    <th> الحالة </th>
                    <th> تاريخ الانضمام </th>
                </tr>
            </thead>
            <tbody> <?php
                    $stmt = $connect->prepare('SELECT * FROM users WHERE user_id=?');
                    $stmt->execute(array($_SESSION['client_id']));
                    $alltype = $stmt->fetchAll();
                    foreach ($alltype as $type) { ?> <tr>
                        <td><?php echo $type['user_code']; ?> </td>
                        <td> <?php echo $type['user_type']; ?> </td>
                        <td> <?php echo $type['user_personal_name']; ?> </td>
                        <td><?php echo $type['user_name']; ?> </td>
                        <td> <?php echo $type['user_email']; ?> </td>
                        <td> <?php echo $type['user_phone']; ?> </td>
                        <td> <?php echo $type['user_city']; ?> </td>
                        <td>
                            <?php
                            if ($type['user_stat'] == 1) { ?>
                                <button class="btn btn-success btn-sm"> نشط </button>
                            <?php
                            } else { ?>
                                <button class="btn btn-danger btn-sm"> معلق </button>
                            <?php
                            }

                            ?>
                        <td> <?php echo $type['user_login_date']; ?> </td>
                    </tr> <?php
                            ?>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <hr style="color: red;">

    <div class="table-responsive">
        <div class="add_new_record">
            <button type="" class="last_clint_running">
                حركة اخر العملاء الخاصين بك التي تم العمل عليهم
            </button>
        </div>
        <br>
        <br>
        <!--
        <div class="row">
            <div class="input-daterange">
                <div class="col-md-2">
                </div>
                <div class="col-md-3">
                    <input placeholder='start_date' type="text" name="start_date" id="start_date" class="form-control" />
                </div>
                <div class="col-md-3">
                    <input placeholder='end_date' type="text" name="end_date" id="end_date" class="form-control" />
                </div>
            </div>
            <div class="col-md-2">
                <input type="button" name="search" id="search" value="بحث" class="btn btn-info" />
            </div>
            <div class="col-md-2">
            </div>
        </div>
                -->
        <table id="tableone" class="table search_table table-light table-striped table-hover table-bordered">
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
                </tr>
            </thead>
            <tbody>

                <!-- Show Tax Services (زكاء وضرائب)  -->
                <?php
                $stmt = $connect->prepare('SELECT * FROM tax_report WHERE user_id=? ORDER BY tax_id DESC LIMIT 2');
                $stmt->execute(array($_SESSION['client_id']));
                $alltype = $stmt->fetchAll();
                foreach ($alltype as $type) { ?> <tr>
                        <td class="client_number"> <a class="btn btn-default btn-sm" href="main.php?dir=clients/record_screen&page=view_tax&tax_id=<?php echo $type['tax_id']; ?>"> <?php echo $type['tax_id']; ?> </a> </td>
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
                                <span class="bg bg-warning">قائمة</span>
                            <?php
                                } else { ?>
                                <span class="bg bg-success"> انتهت </span>
                            <?php
                                }
                            ?>
                        </td>
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
                        <td class="client_number"> <a class="btn btn-default btn-sm" href="main.php?dir=clients/record_screen&page=view_account&ar_id=<?php echo $type['ar_id']; ?>"> <?php echo $type['ar_id']; ?> </a> </td>

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
                                <span class="bg bg-warning"> قائمة </span>
                            <?php
                                } else { ?>
                                <span class="bg bg-success"> انتهت </span>
                            <?php
                                }
                            ?>
                        </td>
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
                        <td class="client_number"> <a class="btn btn-default btn-sm" href="main.php?dir=clients/record_screen&page=view_contract&con_id=<?php echo $type['con_id']; ?>"> <?php echo $type['con_id']; ?> </a> </td>

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
                            ?>
                        </td>
                        <td> <?php
                                if ($type['date_start_services'] == 0) { ?>
                                لم يحدد
                            <?php
                                } else {
                                    echo $type['date_start_services'];
                                }
                            ?>
                        </td>
                        <td> <?php
                                if ($type['date_end_services'] == 0) { ?>
                                لم يحدد
                            <?php
                                } else {
                                    echo $type['date_end_services'];
                                }
                            ?>
                        </td>
                        <td> <?php
                                if ($type['send_signed_contract'] == 0) { ?>
                                لم يتم الارفاق
                            <?php
                                } else { ?>
                                تم الارفاق
                            <?php
                                }
                            ?>
                        </td>

                        <td> <?php
                                if ($type['send_payment_fee'] == 0) { ?>
                                لم يتم الارفاق
                            <?php
                                } else { ?>
                                تم الارفاق
                            <?php
                                }
                            ?>
                        </td>

                        <td> <?php
                                if ($type['status'] == 0) { ?>
                                <span class="bg bg-warning"> قائمة </span>
                            <?php
                                } else { ?>
                                <span class="bg bg-success"> انتهت </span>
                            <?php
                                }
                            ?>
                        </td>
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