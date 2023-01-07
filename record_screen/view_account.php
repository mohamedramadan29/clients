<?php
$ar_id = $_GET["ar_id"];
$stmt = $connect->prepare("SELECT * FROM accounting_report WHERE ar_id=?");
$stmt->execute(array($ar_id));
$ar_data = $stmt->fetch();
?>
<div class="container-fluid">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=dashboard"> ادارة مهام العملاء </a> <i class="fa fa-chevron-left"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page">تفاصيل طلب عقد إعداد تقرير محاسبي</li>
                </ol>
            </nav>
        </div>

        <div class="myform">

            <!-- ********************** END CODE ********************** -->
            <form id="edit_form" class="form-group message_form ajax_form" action="main_ajax.php?dir=record_screen&page=edit_account" method="POST" autocomplete="on" enctype="multipart/form-data">
                <div class="row">
                    <input required class="form-control" type="hidden" name="ar_id" value="<?php echo $ar_id ?>">

                    <div class="col-lg-9">
                        <div class="form-data">


                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> اســـم العميـــــــــل :</span>
                                        <input id="ar_client_name" required type="text" name="ar_client_name" value="<?php echo $ar_data["ar_client_name"]; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> الـكـيـان الـقـانـونـي :</span>
                                        <select id="ar_legal" name="ar_legal" class="form-control">
                                            <option value=""> -- اختر الكيان الـقـانـونـي -- </option>
                                            <option <?php if ($ar_data["ar_legal"] == "مؤسسة فردية") echo "selected"; ?> value="مؤسسة فردية">مؤسسة فردية </option>
                                            <option <?php if ($ar_data["ar_legal"] == "شركة ذات مسئولية محدودة") echo "selected"; ?> value="شركة ذات مسئولية محدودة"> شركة ذات مسئولية محدودة </option>
                                            <option <?php if ($ar_data["ar_legal"] == "شركة تضامنية") echo "selected"; ?> value="شركة تضامنية"> شركة تضامنية </option>
                                            <option <?php if ($ar_data["ar_legal"] == "شركة مساهمة") echo "selected"; ?> value="شركة مساهمة"> شركة مساهمة </option>
                                            <option <?php if ($ar_data["ar_legal"] == "جهة غير هادفة للربح") echo "selected"; ?> value="جهة غير هادفة للربح"> جهة غير هادفة للربح </option>
                                            <option <?php if ($ar_data["ar_legal"] == "فردي") echo "selected"; ?> value="فردي"> فردي </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم السجل التجاري :</span>
                                        <input id="ar_account_num" required type="text" name="ar_account_num" value="<?php echo $ar_data["ar_account_num"]; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> الرقم الضريبي :</span>
                                        <input required type="text" name="con_uniq_num" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_uniq_num']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> اسـم مـديـر المنشأة :</span>
                                        <input id="ar_manager_name" required type="text" name="ar_manager_name" value="<?php echo $ar_data["ar_manager_name"];  ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>

                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم جوال المـديـر :</span>
                                        <input id="ar_manager_phone" required type="text" name="ar_manager_phone" value="<?php echo $ar_data["ar_manager_phone"];  ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">البريد الإلكتروني للعميل :</span>
                                        <input id="ar_client_email" required type="email" name="ar_client_email" value="<?php echo $ar_data["ar_client_email"]; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>

                            <div class="box">
                                <label id="car_pricerent"> أذكرسبب طلب الخدمة <span> * </span></label>
                                <textarea required name="ar_serv_reason" placeholder="حدد الغرض والسبب من طلب التقرير بالتفصيل، وجود شك جنائي ، التأكد من صحة النظام المالي للمنشأة، إلخ" class="form-control"><?php echo $ar_data["ar_serv_reason"];  ?></textarea>
                            </div>
                            <div class="box">
                                <label id="car_pricerent"> النطاق المستندي <span> * </span></label>
                                <textarea required name="ar_doc_scop" placeholder="حدد نوع ووصف للمستندات التي سيتم تقديمها إلينا كمكتب" class="form-control"><?php echo $ar_data["ar_doc_scop"];  ?></textarea>
                            </div>
                            <div class="new_box">
                                <label id="car_pricepay"> النطاق الزمني <span> * </span> </label>
                            </div>
                            <div class="box-flex">

                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> أقــدم مستند كان بتاريخ :</span>
                                        <input id="ar_old_doc" type="text" placeholder="من فضلك اختر التاريخ" class="datepick" name="ar_old_doc" value="<?php echo $ar_data["ar_old_doc"]; ?>" />
                                    </div>
                                </div>
                                <div class="new_box">

                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> أحدث مستند كان بتاريخ :</span>
                                        <input id="ar_new_doc" type="text" placeholder="من فضلك اختر التاريخ" class="datepick" name="ar_new_doc" value="<?php echo $ar_data["ar_new_doc"];  ?>" />
                                    </div>

                                </div>
                            </div>

                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">أعدها :</span>
                                        <input id="ar_prepare" required type="text" placeholder="فضلا ضع اسمك هنا" name="ar_prepare" value="<?php echo $ar_data["ar_prepare"]; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تاريخ الإعداد :</span>
                                        <input id="ar_prepare_date" type="text" placeholder="من فضلك اختر التاريخ" class="datepick" name="ar_prepare_date" value="<?php echo $ar_data["ar_prepare_date"]; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <label> المستندات المؤيدة للطلب <span> * </span> </label>
                                <div class="row">
                                    <?php
                                    $files1 = $ar_data['ar_files'];
                                    $files1 = explode(" ", $files1);
                                    $countfile = count($files1) - 1;
                                    if ($countfile > 0) {
                                        for ($i = 0; $i < $countfile; ++$i) {
                                    ?>
                                            <div class="box">
                                                <div class="files_style">
                                                    <p class="">
                                                        <a target="_blank" href="uploads/<?= $files1[$i] ?>"> <?= $files1[$i] ?></a>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    } else { ?>
                                        <div class="alert alert-danger"> لا يوجد مستندات </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="box text-center">
                                <button type="submit" class="btn btn-danger btn-sm"> تعديل العقد والموافقة علية<i class="fa fa-edit"></i> </button>
                            </div>

                            <!--*********************** START CODE ******************** -->
                            <!-- Area to display the percent of progress -->
                            <!-- area to display a message after completion of upload -->
                            <div class='status'></div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none">
                        <div class="form-data">
                            <p class="alert alert-info"> عمل تعديلات علي العقد <i class="fa fa-edit"></i></p>
                            <div class="box3">
                                <label id="car_model"> تاريخ صدور العقد </label>
                                <input class="form-control" type="date" name="date_issuance" value="<?php echo $ar_data['date_issuance'] ?>">
                            </div>
                            <div class="box3">
                                <label id="car_model"> تاريخ بدء الخدمة </label>
                                <input class="form-control" type="date" name="date_start_services" value="<?php echo $ar_data['date_start_services'] ?>">
                            </div>
                            <div class="box3">
                                <label id="car_model"> تاريخ انتهاء الخدمة </label>
                                <input class="form-control" type="date" name="date_end_services" value="<?php echo $ar_data['date_end_services'] ?>">
                            </div>
                            <div class="box3">
                                <label id="car_model"> ارفاق عقد موقع </label>
                                <select name="send_signed_contract" id="" class="form-control">
                                    <option value=""> -- اختر -- </option>
                                    <option <?php if ($ar_data['send_signed_contract'] == '1') echo 'selected'; ?> value="1"> تم الارفاق </option>
                                    <option <?php if ($ar_data['send_signed_contract'] == '0') echo 'selected'; ?> value="0"> لم يتم الارفاق </option>
                                </select>
                            </div>
                            <div class="box3">
                                <label id="car_model"> ارفاق ايصالات سداد الاتعاب </label>
                                <select name="send_payment_fee" id="" class="form-control">
                                    <option value=""> -- اختر -- </option>
                                    <option <?php if ($ar_data['send_payment_fee'] == '1') echo 'selected'; ?> value="1"> تم الارفاق </option>
                                    <option <?php if ($ar_data['send_payment_fee'] == '0') echo 'selected'; ?> value="0">لم يتم الارفاق</option>
                                </select>
                            </div>
                            <div class="box3">
                                <label id="car_model"> الحالة </label>
                                <select name="status" id="" class="form-control">
                                    <option value=""> -- اختر -- </option>
                                    <option <?php if ($ar_data['status'] == '1') echo 'selected'; ?> value="1"> انتهت </option>
                                    <option <?php if ($ar_data['status'] == '0') echo 'selected'; ?> value="0"> قائمة </option>
                                </select>
                            </div>
                            <p class="alert alert-info"> مراحل طلب الخدمة </p>
                            <div class="box3">
                                <label id="car_model"> تاريخ الموافقة على نموذج الخدمة </label>
                                <input class="form-control" type="date" name="agree_services" value="<?php echo $ar_data['agree_services'] ?>">
                            </div>
                            <div class="box3">
                                <label id="car_model"> تاريخ إرسال عقد الارتباط </label>
                                <input class="form-control" type="date" name="send_link_note" value="<?php echo $ar_data['send_link_note'] ?>">
                            </div>
                            <div class="box3">
                                <label id="car_model"> تاريخ إرسال العقد الموقع وايصالات السداد </label>
                                <input class="form-control" type="date" name="send_sign_contract_payment_receipt" value="<?php echo $ar_data['send_sign_contract_payment_receipt'] ?>">
                            </div>
                            <div class="box3">
                                <label id="car_model"> تاريخ التحقق من توقيع العقد وايصالات السداد </label>
                                <input class="form-control" type="date" name="verification_contract_req" value="<?php echo $ar_data['verification_contract_req'] ?>">
                            </div>
                            <div class="box3">
                                <label id="car_model"> تاريخ الانتهاء من أعمال المراجعة </label>
                                <input class="form-control" type="date" name="end_revision_work" value="<?php echo $ar_data['end_revision_work'] ?>">
                            </div>
                            <div class="box3">
                                <label id="car_model"> تاريخ إرسال ايصال سداد الدفعة الأخيرة </label>
                                <input class="form-control" type="date" name="send_end_fee" value="<?php echo $ar_data['send_end_fee'] ?>">
                            </div>
                            <div class="box3">
                                <label id="car_model"> تاريخ إيداع في منصة قوائم </label>
                                <input class="form-control" type="date" name="deposit_plat_form" value="<?php echo $ar_data['deposit_plat_form'] ?>">
                            </div>
                            <div class="box">
                                <label id="car_model"> ملاحظات </label>
                                <textarea name="notes" class="form-control"><?php echo $ar_data['notes'] ?></textarea>

                            </div>
                            <div class="box text-center">
                                <button type="submit" class="btn btn-primary btn-sm"> تعديل العقد <i class="fa fa-edit"></i> </button>
                            </div>


                        </div>
                    </div>
                </div>
        </div>
        </form>

    </div>
</div>