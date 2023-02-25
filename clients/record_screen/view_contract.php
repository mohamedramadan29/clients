<?php
$con_id = $_GET["con_id"];
$stmt = $connect->prepare("SELECT * FROM contract_report WHERE con_id=?");
$stmt->execute(array($con_id));
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

            <div class="row">
                <input required class="form-control" type="hidden" name="con_id" value="<?php echo $con_id ?>">

                <div class="col-lg-12">
                    <div class="form-data">

                        <p class="alert alert-secondary" role="alert"> بيانات العميـــــــــل </p>
                        <div class="box2">
                            <label id="car_model"> رمز العميـــــــــل </label>
                            <input disabled required class="form-control" type="text" name="con_id" value="<?php echo $tax_data['con_id']; ?>">
                        </div>
                        <div class="box2">
                            <label id="name"> اســـم العميـــــــــل </label>
                            <input disabled required class="form-control" type="text" name="tax_client_name" value="<?php echo $tax_data['con_client_name']; ?>">
                        </div>
                        <div class="box2">
                            <label id="name_en">الـكـيـان الـقـانـونـي </label>
                            <select name="con_legal" class="form-control" id="" disabled>
                                <option value=""> -- اختر الكيان الـقـانـونـي -- </option>
                                <option <?php if ($tax_data["con_legal"] == "مؤسسة فردية") echo "selected"; ?> value="مؤسسة فردية">مؤسسة فردية </option>
                                <option <?php if ($tax_data["con_legal"] == "شركة ذات مسئولية محدودة") echo "selected"; ?> value="شركة ذات مسئولية محدودة"> شركة ذات مسئولية محدودة </option>
                                <option <?php if ($tax_data["con_legal"] == "شركة تضامنية") echo "selected"; ?> value="شركة تضامنية"> شركة تضامنية </option>
                                <option <?php if ($tax_data["con_legal"] == "شركة مساهمة") echo "selected"; ?> value="شركة مساهمة"> شركة مساهمة </option>
                                <option <?php if ($tax_data["con_legal"] == "جهة غير هادفة للربح") echo "selected"; ?> value="جهة غير هادفة للربح"> جهة غير هادفة للربح </option>
                                <option <?php if ($tax_data["con_legal"] == "فردي") echo "selected"; ?> value="فردي"> فردي </option>
                            </select>

                        </div>
                        <div class="box2">
                            <label id="car_model">رقم السجل التجاري </label>
                            <input disabled required class="form-control" type="text" name="con_account_num" placeholder=" رقم السجل التجاري 10 ارقام " value="<?php echo $tax_data['con_account_num']; ?>">
                        </div>
                        <div class="box2">
                            <label id="car_model"> نوع الخدمة </label>
                            <input disabled required class="form-control" type="text" name="con_account_num" value=" خدمة ذكاء وضرائب">
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
                            <input disabled required class="form-control" type="text" placeholder="افصل بين  السنة والاخري (,)" name="tax_years_required" value="<?php echo $tax_data['con_years_required'];  ?>">
                        </div>
                        <div class="box">
                            <label id="car_model"> ملاحظات </label>
                            <textarea name="" id="" class="form-control">ملاحظات</textarea>
                        </div>
                        <p class="alert alert-secondary" role="alert"> مراحل طلب الخدمة </p>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered services_stage">
                                <thead>
                                    <tr>
                                        <th> المرحلة </th>
                                        <th> التاريخ </th>
                                        <th> الحالة </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ارسال طلب الخدمة للمكتب</td>
                                        <td> <?php echo $tax_data['con_prepare_time'];  ?> </td>
                                        <td> <?php
                                                if ($tax_data['con_prepare_time'] == 0) { ?>
                                                <span class=""> لم تتم <img style="width: 30px; margin-right:30px;" src="uploads/error.gif" alt=""></span>
                                            <?php
                                                } else {
                                            ?>
                                                <span class=""> تمت <img style="width:30px; margin-right:43px;" src="uploads/done.gif" alt=""></span>
                                            <?php
                                                }
                                            ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> الموافقة على نموذج الخدمة </td>
                                        <td> <?php echo $tax_data['agree_services'];  ?> </td>
                                        <td> <?php
                                                if ($tax_data['agree_services'] == 0) { ?>
                                                <span class=""> لم تتم <img style="width: 30px; margin-right:30px;" src="uploads/error.gif" alt=""></span>
                                            <?php
                                                } else {
                                            ?>
                                                <span class=""> تمت <img style="width:30px; margin-right:43px;" src="uploads/done.gif" alt=""></span>
                                            <?php
                                                }
                                            ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> إرسال عقد الارتباط </td>
                                        <td> <?php echo $tax_data['send_link_note'];  ?> </td>
                                        <td> <?php
                                                if ($tax_data['send_link_note'] == 0) { ?>
                                                <span class=""> لم تتم <img style="width: 30px; margin-right:30px;" src="uploads/error.gif" alt=""></span>
                                            <?php
                                                } else {
                                            ?>
                                                <span class=""> تمت <img style="width:30px; margin-right:43px;" src="uploads/done.gif" alt=""></span>
                                            <?php
                                                }
                                            ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> إرسال العقد الموقع وايصالات السداد </td>
                                        <td> <?php echo $tax_data['send_sign_contract_payment_receipt'];  ?> </td>
                                        <td> <?php
                                                if ($tax_data['send_sign_contract_payment_receipt'] == 0) { ?>
                                                <span class=""> لم تتم <img style="width: 30px; margin-right:30px;" src="uploads/error.gif" alt=""></span>
                                            <?php
                                                } else {
                                            ?>
                                                <span class=""> تمت <img style="width:30px; margin-right:43px;" src="uploads/done.gif" alt=""></span>
                                            <?php
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                <div class="upload_more_files">
                                                    <div class="upload_files_span">
                                                        <input class="form-control" required type="file" name="send_sign_contract_payment_receipt_file" id="">
                                                        <!--   <span> اضغط او اسحب الملف الخاص بك هنا <i class="fa fa-upload"></i> </span> -->
                                                    </div>
                                                    <div>
                                                        <button style="border: none;" type="submit" name="send_file1" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" حفظ العقد">
                                                            <img style="width:30px" src="uploads/save.gif" alt="">
                                                        </button>

                                                    </div>
                                                    <div>
                                                        <a href="uploads/<?php echo $tax_data['file'] ?>" target="_blank" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="  استعراض العقد">
                                                            <img style="width:30px" src="uploads/view.gif" alt="">
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <button style="border: none;" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" الغاء الامر ">
                                                            <img style="width:30px" src="uploads/cancel.gif" alt="">
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <?php
                                            if (isset($_POST['send_file1'])) {
                                                if ($_FILES['send_sign_contract_payment_receipt_file']['name']) {
                                                    $send_sign_contract_name = $_FILES['send_sign_contract_payment_receipt_file']['name'];
                                                    $send_sign_contract_temp = $_FILES['send_sign_contract_payment_receipt_file']['tmp_name'];
                                                    $send_sign_contract_type = $_FILES['send_sign_contract_payment_receipt_file']['type'];
                                                    $send_sign_contract_size = $_FILES['send_sign_contract_payment_receipt_file']['size'];
                                                    $send_sign_contract_uploaded = time() . '_' . $send_sign_contract_name;
                                                    move_uploaded_file(
                                                        $send_sign_contract_temp,
                                                        'uploads/' . $send_sign_contract_uploaded
                                                    );
                                                }
                                                $stmt = $connect->prepare("UPDATE contract_report SET file=? , send_sign_contract_payment_receipt	= 1  WHERE con_id=?");
                                                $stmt->execute(array(
                                                    $send_sign_contract_uploaded, $con_id
                                                ));
                                                if ($stmt) {
                                            ?>
                                                    <script>
                                                        alert('تم رفع الملف بنجاح');
                                                    </script>
                                            <?php
                                                    header('refresh:0');
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> التحقق من توقيع العقد وايصالات السداد </td>
                                        <td> <?php echo $tax_data['verification_contract_req'];  ?> </td>
                                        <td> <?php
                                                if ($tax_data['verification_contract_req'] == 0) { ?>
                                                <span class=""> لم تتم <img style="width: 30px; margin-right:30px;" src="uploads/error.gif" alt=""></span>
                                            <?php
                                                } else {
                                            ?>
                                                <span class=""> تمت <img style="width:30px; margin-right:43px;" src="uploads/done.gif" alt=""></span>
                                            <?php
                                                }
                                            ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> تأكيد بدء الخدمة </td>
                                        <td> <?php echo $tax_data['date_start_services'];  ?> </td>
                                        <td> <?php
                                                if ($tax_data['date_start_services'] == 0) { ?>
                                                <span class=""> لم تتم <img style="width: 30px; margin-right:30px;" src="uploads/error.gif" alt=""></span>
                                            <?php
                                                } else {
                                            ?>
                                                <span class=""> تمت <img style="width:30px; margin-right:43px;" src="uploads/done.gif" alt=""></span>
                                            <?php
                                                }
                                            ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> الانتهاء من أعمال المراجعة </td>
                                        <td> <?php echo $tax_data['end_revision_work'];  ?> </td>
                                        <td> <?php
                                                if ($tax_data['end_revision_work'] == 0) { ?>
                                                <span class=""> لم تتم <img style="width: 30px; margin-right:30px;" src="uploads/error.gif" alt=""></span>
                                            <?php
                                                } else {
                                            ?>
                                                <span class=""> تمت <img style="width:30px; margin-right:43px;" src="uploads/done.gif" alt=""></span>
                                            <?php
                                                }
                                            ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> إرسال ايصال سداد الدفعة الأخيرة </td>
                                        <td> <?php echo $tax_data['send_end_fee'];  ?> </td>
                                        <td> <?php
                                                if ($tax_data['send_end_fee'] == 0) { ?>
                                                <span class=""> لم تتم <img style="width: 30px; margin-right:30px;" src="uploads/error.gif" alt=""></span>
                                            <?php
                                                } else {
                                            ?>
                                                <span class=""> تمت <img style="width:30px; margin-right:43px;" src="uploads/done.gif" alt=""></span>
                                            <?php
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="upload_more_files">
                                                    <div class="upload_files_span">
                                                        <input class="form-control" type="file" name="send_end_fee" id="">
                                                        <!--  <span> اضغط او اسحب الملف الخاص بك هنا <i class="fa fa-upload"></i> </span> -->
                                                    </div>
                                                    <div>
                                                        <button style="border: none;" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" حفظ العقد">
                                                            <img style="width:30px" src="uploads/save.gif" alt="">
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <a href="uploads/<?php echo $tax_data['file_end_fee'] ?>" target="_blank" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="  استعراض العقد">
                                                            <img style="width:30px" src="uploads/view.gif" alt="">
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" الغاء الامر ">
                                                            <img style="width:30px" src="uploads/cancel.gif" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                            <?php
                                            if (isset($_POST['send_end_fee_send'])) {
                                                if ($_FILES['send_end_fee']['name']) {
                                                    $send_end_fee_name = $_FILES['send_end_fee']['name'];
                                                    $send_end_fee_temp = $_FILES['send_end_fee']['tmp_name'];
                                                    $send_end_fee_type = $_FILES['send_end_fee']['type'];
                                                    $send_end_fee_size = $_FILES['send_end_fee']['size'];
                                                    $send_end_fee_uploaded = time() . '_' . $send_end_fee_name;
                                                    move_uploaded_file(
                                                        $send_end_fee_temp,
                                                        'uploads/' . $send_end_fee_uploaded
                                                    );
                                                }
                                                $stmt = $connect->prepare("UPDATE contract_report SET file_end_fee=? , send_end_fee = 1  WHERE con_id=?");
                                                $stmt->execute(array(
                                                    $send_end_fee_uploaded, $con_id
                                                ));
                                                if ($stmt) {
                                            ?>
                                                    <script>
                                                        alert('تم رفع الملف بنجاح');
                                                    </script>
                                            <?php
                                                    header('refresh:0');
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> تأكيد انتهاء الخدمة </td>
                                        <td> <?php echo $tax_data['date_end_services'];  ?> </td>
                                        <td> <?php
                                                if ($tax_data['date_end_services'] == 0) { ?>
                                                <span class=""> لم تتم <img style="width: 30px; margin-right:30px;" src="uploads/error.gif" alt=""></span>
                                            <?php
                                                } else {
                                            ?>
                                                <span class=""> تمت <img style="width:30px; margin-right:43px;" src="uploads/done.gif" alt=""></span>
                                            <?php
                                                }
                                            ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> إيداع في منصة قوائم </td>
                                        <td> <?php echo $tax_data['deposit_plat_form'];  ?> </td>
                                        <td> <?php
                                                if ($tax_data['deposit_plat_form'] == 0) { ?>
                                                <span class=""> لم تتم <img style="width: 30px; margin-right:30px;" src="uploads/error.gif" alt=""></span>
                                            <?php
                                                } else {
                                            ?>
                                                <span class=""> تمت <img style="width:30px; margin-right:43px;" src="uploads/done.gif" alt=""></span>
                                            <?php
                                                }
                                            ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>