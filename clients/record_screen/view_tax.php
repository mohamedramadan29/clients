<?php
$tax_id = $_GET["tax_id"];
$stmt = $connect->prepare("SELECT * FROM tax_report WHERE tax_id=?");
$stmt->execute(array($tax_id));
$tax_data = $stmt->fetch();
?>
<div class="container-fluid customer_report">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=client_dashboard"> لوحة تحكم الضيوف </a> <i class="fa fa-chevron-left"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page"> شاشة تفاصيل الخدمة </li>
                </ol>
            </nav>
        </div>
        <div class="myform">
            <!-- ********************** END CODE ********************** -->
            <form id="edit_form" class="form-group message_form ajax_form" action="main_ajax.php?dir=clients/tax_services&page=ajax_edit" method="POST" autocomplete="on" enctype="multipart/form-data">
                <div class="row">
                    <input required class="form-control" type="hidden" name="tax_id" value="<?php echo $tax_id ?>">

                    <div class="col-lg-12">
                        <div class="form-data">

                            <p class="alert alert-secondary" role="alert"> بيانات العميـــــــــل </p>
                            <div class="box2">
                                <label id="car_model"> رمز العميـــــــــل </label>
                                <input disabled required class="form-control" type="text" name="tax_id" value="<?php echo $tax_data['tax_id']; ?>">
                            </div>
                            <div class="box2">
                                <label id="name"> اســـم العميـــــــــل </label>
                                <input disabled required class="form-control" type="text" name="tax_client_name" value="<?php echo $tax_data['tax_client_name']; ?>">
                            </div>
                            <div class="box2">
                                <label id="name_en">الـكـيـان الـقـانـونـي </label>
                                <select name="tax_legal" class="form-control" id="" disabled>
                                    <option value=""> -- اختر الكيان الـقـانـونـي -- </option>
                                    <option <?php if ($tax_data["tax_legal"] == "مؤسسة فردية") echo "selected"; ?> value="مؤسسة فردية">مؤسسة فردية </option>
                                    <option <?php if ($tax_data["tax_legal"] == "شركة ذات مسئولية محدودة") echo "selected"; ?> value="شركة ذات مسئولية محدودة"> شركة ذات مسئولية محدودة </option>
                                    <option <?php if ($tax_data["tax_legal"] == "شركة تضامنية") echo "selected"; ?> value="شركة تضامنية"> شركة تضامنية </option>
                                    <option <?php if ($tax_data["tax_legal"] == "شركة مساهمة") echo "selected"; ?> value="شركة مساهمة"> شركة مساهمة </option>
                                    <option <?php if ($tax_data["tax_legal"] == "جهة غير هادفة للربح") echo "selected"; ?> value="جهة غير هادفة للربح"> جهة غير هادفة للربح </option>
                                    <option <?php if ($tax_data["tax_legal"] == "فردي") echo "selected"; ?> value="فردي"> فردي </option>
                                </select>

                            </div>
                            <div class="box2">
                                <label id="car_model">رقم السجل التجاري </label>
                                <input disabled required class="form-control" type="text" name="tax_account_num" placeholder=" رقم السجل التجاري 10 ارقام " value="<?php echo $tax_data['tax_account_num']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_model"> نوع الخدمة </label>
                                <input disabled required class="form-control" type="text" name="tax_account_num" value=" خدمة ذكاء وضرائب">
                            </div>
                            <!-- 
                            <div class="box2">
                                <label id="name_en"> تحديد نوع الخدمة <span> * </span></label>
                                <select name="tax_serv_type" class="form-control" id="">
                                    <option value=""> -- حدد نوع الخدمة -- </option>
                                    <option <?php if ($tax_data['tax_serv_type'] == 'تقديم إقرارت زكوية أو ضريبة دخل') echo 'selected' ?> value="تقديم إقرارت زكوية أو ضريبة دخل"> تقديم إقرارت زكوية أو ضريبة دخل </option>
                                    <option <?php if ($tax_data['tax_serv_type'] == 'تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة') echo 'selected' ?> value="تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة">تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة</option>
                                    <option <?php if ($tax_data['tax_serv_type'] == 'شطب ملف المنشأة لدى هيئة الزكاة والضريبة') echo 'selected' ?> value="شطب ملف المنشأة لدى هيئة الزكاة والضريبة"> شطب ملف المنشأة لدى هيئة الزكاة والضريبة </option>
                                    <option <?php if ($tax_data['tax_serv_type'] == 'تعديل إقرارت زكوية أوضريبية') echo 'selected' ?> value="تعديل إقرارت زكوية أوضريبية">تعديل إقرارت زكوية أوضريبية</option>
                                    <option <?php if ($tax_data['tax_serv_type'] == 'الاعتراض على ربط صادر من هيئة الزكاة والضريبة') echo 'selected' ?> value="الاعتراض على ربط صادر من هيئة الزكاة والضريبة"> الاعتراض على ربط صادر من هيئة الزكاة والضريبة </option>
                                </select>

                            </div>
-->
                            <div class="box2">
                                <label id="car_model"> السنـة/السنوات الماليـة المطلوبة </label>
                                <input disabled required class="form-control" type="text" placeholder="افصل بين  السنة والاخري (,)" name="tax_years_required" value="<?php echo $tax_data['tax_years_required'];  ?>">
                            </div>
                            <div class="box">
                                <label id="car_model">  ملاحظات </label>
                                <textarea name="" id="" class="form-control">ملاحظات</textarea>
                            </div>
                            <p class="alert alert-secondary" role="alert"> مراحل طلب الخدمة </p>
                            <div class="table-responsive">
                                <table id="tableone" class="table table-light table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th> المراحل </th>
                                            <th> التاريخ </th>
                                            <th> الحالة </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ارسال طلب الخدمة للمكتب</td>
                                            <td> <?php echo $tax_data['tax_prepare_date'];  ?> </td>
                                            <td> <?php
                                                    if ($tax_data['tax_prepare_date'] == 0) { ?>
                                                    <button class="btn btn-danger btn-sm"> لم تتم </button>
                                                <?php
                                                    } else {
                                                ?>
                                                    <button class="btn btn-success btn-sm"> تمت </button>
                                                <?php
                                                    }

                                                ?>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td> الموافقة على نموذج الخدمة </td>
                                            <td> <?php echo $tax_data['agree_services'];  ?> </td>
                                            <td> <?php
                                                    if ($tax_data['agree_services'] == 0) { ?>
                                                    <button class="btn btn-danger btn-sm"> لم تتم </button>
                                                <?php
                                                    } else {
                                                ?>
                                                    <button class="btn btn-success btn-sm"> تمت </button>
                                                <?php
                                                    }

                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> إرسال عقد الارتباط </td>
                                            <td> <?php echo $tax_data['send_link_note'];  ?> </td>
                                            <td> <?php
                                                    if ($tax_data['send_link_note'] == 0) { ?>
                                                    <button class="btn btn-danger btn-sm"> لم تتم </button>
                                                <?php
                                                    } else {
                                                ?>
                                                    <button class="btn btn-success btn-sm"> تمت </button>
                                                <?php
                                                    }

                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> إرسال العقد الموقع وايصالات السداد </td>
                                            <td> <?php echo $tax_data['send_sign_contract_payment_receipt'];  ?> </td>
                                            <td> <?php
                                                    if ($tax_data['send_sign_contract_payment_receipt'] == 0) { ?>
                                                    <button class="btn btn-danger btn-sm"> لم تتم </button>
                                                <?php
                                                    } else {
                                                ?>
                                                    <button class="btn btn-success btn-sm"> تمت </button>
                                                <?php
                                                    }

                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> التحقق من توقيع العقد وايصالات السداد </td>
                                            <td> <?php echo $tax_data['verification_contract_req'];  ?> </td>
                                            <td> <?php
                                                    if ($tax_data['verification_contract_req'] == 0) { ?>
                                                    <button class="btn btn-danger btn-sm"> لم تتم </button>
                                                <?php
                                                    } else {
                                                ?>
                                                    <button class="btn btn-success btn-sm"> تمت </button>
                                                <?php
                                                    }

                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> تأكيد بدء الخدمة </td>
                                            <td> <?php echo $tax_data['date_start_services'];  ?> </td>
                                            <td> <?php
                                                    if ($tax_data['date_start_services'] == 0) { ?>
                                                    <button class="btn btn-danger btn-sm"> لم تتم </button>
                                                <?php
                                                    } else {
                                                ?>
                                                    <button class="btn btn-success btn-sm"> تمت </button>
                                                <?php
                                                    }

                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> الانتهاء من أعمال المراجعة </td>
                                            <td> <?php echo $tax_data['end_revision_work'];  ?> </td>
                                            <td> <?php
                                                    if ($tax_data['end_revision_work'] == 0) { ?>
                                                    <button class="btn btn-danger btn-sm"> لم تتم </button>
                                                <?php
                                                    } else {
                                                ?>
                                                    <button class="btn btn-success btn-sm"> تمت </button>
                                                <?php
                                                    }

                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> إرسال ايصال سداد الدفعة الأخيرة </td>
                                            <td> <?php echo $tax_data['send_end_fee'];  ?> </td>
                                            <td> <?php
                                                    if ($tax_data['send_end_fee'] == 0) { ?>
                                                    <button class="btn btn-danger btn-sm"> لم تتم </button>
                                                <?php
                                                    } else {
                                                ?>
                                                    <button class="btn btn-success btn-sm"> تمت </button>
                                                <?php
                                                    }

                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> تأكيد انتهاء الخدمة </td>
                                            <td> <?php echo $tax_data['date_end_services'];  ?> </td>
                                            <td> <?php
                                                    if ($tax_data['date_end_services'] == 0) { ?>
                                                    <button class="btn btn-danger btn-sm"> لم تتم </button>
                                                <?php
                                                    } else {
                                                ?>
                                                    <button class="btn btn-success btn-sm"> تمت </button>
                                                <?php
                                                    }

                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> إيداع في منصة قوائم </td>
                                            <td> <?php echo $tax_data['deposit_plat_form'];  ?> </td>
                                            <td> <?php
                                                    if ($tax_data['deposit_plat_form'] == 0) { ?>
                                                    <button class="btn btn-danger btn-sm"> لم تتم </button>
                                                <?php
                                                    } else {
                                                ?>
                                                    <button class="btn btn-success btn-sm"> تمت </button>
                                                <?php
                                                    }

                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        <!--*********************** START CODE ******************** -->
        <!-- Area to display the percent of progress -->
        <!-- area to display a message after completion of upload -->
        <div id='status'></div>
    </div>
</div>