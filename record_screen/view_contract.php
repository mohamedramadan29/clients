<?php
$con_id = $_GET["con_id"];
$stmt = $connect->prepare("SELECT * FROM contract_report WHERE con_id=?");
$stmt->execute(array($con_id));
$con_data = $stmt->fetch();
?>
<div class="container-fluid">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=dashboard"> ادارة مهام العملاء </a> <i class="fa fa-chevron-left"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page"> تفاصيل نموذج طلب عقد إرتباط مراجعة </li>
                </ol>
            </nav>
        </div>

        <div class="myform">

            <!-- ********************** END CODE ********************** -->
            <form id="edit_form" class="form-group message_form ajax_form" action="main_ajax.php?dir=record_screen&page=edit_contract" method="POST" autocomplete="on" enctype="multipart/form-data">
                <input type="hidden" name="con_id" value="<?php echo $con_data["con_id"]; ?>">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="form-data">
                            <div class="alert alert-info">فضلا أدخل بيانات العميل بدقة لنتمكن من دراسة الطلب وتقديم الخدمة بشكل صحيح</div>
                            <p class="alert alert-secondary" role="alert">البيانات العامة للتحقق من العميل</p>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> اســـم العميـــــــــل :</span>
                                        <input id="con_client_name" required type="text" name="con_client_name" value="<?php echo $con_data["con_client_name"]; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> السنـة/السنوات الماليـة المطلوبة :</span>
                                        <input id="con_years_required" required type="text" placeholder="افصل بين  السنة والاخري (,)" name="con_years_required" value="<?php echo $con_data["con_years_required"]; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>

                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> الـكـيـان الـقـانـونـي :</span>
                                        <select id="con_legal" name="con_legal" class="form-control" id="">
                                            <option value=""> -- اختر الكيان الـقـانـونـي -- </option>
                                            <option <?php if ($con_data["con_legal"] == "مؤسسة فردية") echo "selected"; ?> value="مؤسسة فردية">مؤسسة فردية </option>
                                            <option <?php if ($con_data["con_legal"] == "شركة ذات مسئولية محدودة") echo "selected"; ?> value="شركة ذات مسئولية محدودة"> شركة ذات مسئولية محدودة </option>
                                            <option <?php if ($con_data["con_legal"] == "شركة تضامنية") echo "selected"; ?> value="شركة تضامنية"> شركة تضامنية </option>
                                            <option <?php if ($con_data["con_legal"] == "شركة مساهمة") echo "selected"; ?> value="شركة مساهمة"> شركة مساهمة </option>
                                            <option <?php if ($con_data["con_legal"] == "جهة غير هادفة للربح") echo "selected"; ?> value="جهة غير هادفة للربح"> جهة غير هادفة للربح </option>
                                            <option <?php if ($con_data["con_legal"] == "فردي") echo "selected"; ?> value="فردي"> فردي </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> سنة المقارنة إن وجد :</span>
                                        <input id="con_comparison_year" required type="text" name="con_comparison_year" value="<?php echo $con_data["con_comparison_year"]; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>

                            </div>


                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم السجل التجاري :</span>
                                        <input id="con_account_num" required type="text" placeholder=" رقم السجل التجاري 10 ارقام " name="con_account_num" value="<?php echo $con_data["con_account_num"]; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>

                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">المحاسبة على الدخل :</span>
                                        <select id="con_income" name="con_income" class="form-control" id="">
                                            <option value=""> -- حدد المحاسبة على الدخل-- </option>

                                            <option <?php if ($con_data['con_income'] == 'تتبع النظام الزكوي') echo 'selected' ?> value="تتبع النظام الزكوي">تتبع النظام الزكوي</option>
                                            <option <?php if ($con_data['con_income'] == 'تتبع نظام ضريبة الدخل') echo 'selected' ?> value="تتبع نظام ضريبة الدخل"> تتبع نظام ضريبة الدخل </option>
                                            <option <?php if ($con_data['con_income'] == 'مختلطة زكوي وضريبي') echo 'selected' ?> value="مختلطة زكوي وضريبي"> مختلطة زكوي وضريبي </option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> الرقم المميز بالزكاة :</span>
                                        <input id="con_uniq_num" type="text" name="con_uniq_num" value="<?php echo $con_data["con_uniq_num"]; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> الرقم الضريبي :</span>
                                        <input required type="text" name="con_uniq_num" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_uniq_num']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>

                            </div>
                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> نوع نظام الحسابات لدى هيئة الزكاة والضريبة والجمارك :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="con_account_type" id="con_account_type" value="حسابات نظامية" <?php if ($con_data['con_account_type'] == 'حسابات نظامية') echo 'checked'; ?>>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                حسابات نظامية
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="con_account_type" id="con_account_type" value="تقديري" <?php if ($con_data['con_account_type'] == 'تقديري') echo 'checked'; ?>>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                تقديري
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="new_box">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> وضح بداية ونهاية السنة المالية لدى هيئة الزكاة :</span>

                                </div>
                            </div>
                            <div class="box-flex">

                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تـبــــدأ مــــن :</span>
                                        <input id="con_year_start" required type="text" placeholder="من فضلك اختر التاريخ" class="datepick" name="con_year_start" value="<?php echo $con_data["con_year_start"]; ?>" />
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تـــنـــتــــهــــي فـــي :</span>
                                        <input id="con_year_end" required type="text" placeholder="من فضلك اختر التاريخ" class="datepick" name="con_year_end" value="<?php echo $con_data["con_year_end"]; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <label id="car_pricerent">أذكرسبب الإصدار <span> * </span></label>
                                <textarea id="con_reason" required name="con_reason" placeholder=" اذكر التفاصيل " class="form-control"><?php echo $con_data["con_reason"]; ?></textarea>
                            </div>
                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> هل أفاد العميل بإصدار قوائم مالية سابقة له؟ :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="con_client_prev" id="tax_client_prev1" value="نعم" <?php if ($con_data['con_client_prev'] == 'نعم') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_client_prev1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="con_client_prev" id="tax_client_prev2" value="لا" <?php if ($con_data['con_client_prev'] == 'لا') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_client_prev2">
                                                لا
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                let checkbox = document.getElementById("tax_client_prev1");
                                let checkbox2 = document.getElementById("tax_client_prev2");
                                checkbox.addEventListener("click", () => {
                                    if (checkbox.checked) {
                                        $("#checked_input").css("display", "block");
                                        $("#checked_input2").css("display", "block");
                                    }
                                });
                                checkbox2.addEventListener("click", () => {
                                    if (checkbox2.checked) {
                                        $("#checked_input").css("display", "none");
                                        $("#checked_input2").css("display", "none");
                                    }
                                });
                            </script>

                            <div class="box-flex">
                                <div class="new_box" id="checked_input">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> آخر قوائم مودعة لعام :</span>
                                        <input id="con_client_prev_year" type="text" name="con_client_prev_year" value="<?php echo $con_data['con_client_prev_year'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box" id="checked_input2">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> اختر اسم مكتب المحاسب القانوني الذي أصدر القوائم المالية :</span>
                                        <input id="con_office_name_prev" type="text" name="con_office_name_prev" value="<?php echo $con_data['con_office_name_prev'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>

                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm ">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> في حال الإجابة أعلاه (بنعم) يرجى إلزامياً توفير صورة من القوائم المالية :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input id="con_client_prev_img" required class="form-check-input" type="radio" name="con_client_prev_img" value="تم" <?php if ($con_data['con_client_prev_img'] == 'تم') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_client_prev_img1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_client_prev_img" required class="form-check-input" type="radio" name="con_client_prev_img" value="لا ينطبق" <?php if ($con_data['con_client_prev_img'] == 'لا ينطبق') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_client_prev_img2">
                                                لا ينطبق
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm ">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> هل تم التحقق من موقع قوائم عن آخر قوائم مالية صادرة؟ :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input id="con_verify_website" required class="form-check-input" type="radio" name="con_verify_website" value="نعم" <?php if ($con_data['con_verify_website'] == 'نعم') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_verify_website1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_verify_website" required class="form-check-input" type="radio" name="con_verify_website" value="لا ينطبق" <?php if ($con_data['con_verify_website'] == 'لا ينطبق') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_verify_website2">
                                                لا ينطبق
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm ">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> هل تم الحصول على ميزان مراجعة وفق متطلبات برنامج المراجعة الإلكتروني :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input id="com_revision_prog" required class="form-check-input" type="radio" name="com_revision_prog" value="نعم" <?php if ($con_data['com_revision_prog'] == 'نعم') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_client_account_rev1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="com_revision_prog" required class="form-check-input" type="radio" name="com_revision_prog" value="لا ينطبق" <?php if ($con_data['com_revision_prog'] == 'لا ينطبق') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_client_account_rev2">
                                                لا ينطبق
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm ">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> هل محاسب العميل لديه خبرة ومعرفة في توفير أي مستندات أو معلومات إضافية؟ :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input id="con_client_account_exer" required class="form-check-input" type="radio" name="con_client_account_exer" value="نعم" <?php if ($con_data['con_client_account_exer'] == 'نعم') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_client_account_exer1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_client_account_exer" required class="form-check-input" type="radio" name="con_client_account_exer" value="لا ينطبق" <?php if ($con_data['con_client_account_exer'] == 'لا ينطبق') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_client_account_exer2">
                                                لا ينطبق
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="alert alert-secondary"> بيانات التواصل (اختياري) </p>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> اسـم المدير :</span>
                                        <input id="con_manager_name" type="text" name="con_manager_name" value="<?php echo $con_data['con_manager_name'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم جوال المـديـر :</span>
                                        <input id="con_manager_phone" type="text" placeholder="10 ارقام" name="con_manager_phone" value="<?php echo $con_data['con_manager_phone'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> البريد الإلكتروني للمدير :</span>
                                        <input id="con_manager_email" type="email" name="con_manager_email" value="<?php echo $con_data['con_manager_email'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>

                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> اسم المحاسب :</span>
                                        <input id="con_accounter_name" type="text" name="con_accounter_name" value="<?php echo $con_data['con_accounter_name'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم جوال المحاسب :</span>
                                        <input id="con_accounter_phone" type="text" placeholder="10 ارقام" name="con_accounter_phone" value="<?php echo $con_data['con_accounter_phone'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> البريد الإلكتروني للمحاسب :</span>
                                        <input id="con_accounter_email" type="email" name="con_accounter_email" value="<?php echo $con_data['con_accounter_email'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>

                            <p class="alert alert-secondary">بيانات الرفع على منصة قوائم </p>


                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم الهوية الوطنية :</span>
                                        <input id="con_card_num" required type="text" name="con_card_num" placeholder="لازم 10 ارقام" value="<?php echo $con_data['con_card_num'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تاريخ الميلاد :</span>
                                        <input id="con_upload_birth" required type="text" name="con_upload_birth" value="<?php echo $con_data['con_upload_birth'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>

                            </div>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم الجوال :</span>
                                        <input id="con_upload_mobile" required type="text" name="con_upload_mobile" value="<?php echo $con_data['con_upload_mobile'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> البريد الالكتروني :</span>
                                        <input id="con_upload_email" required type="email" name="con_upload_email" value="<?php echo $con_data['con_upload_email'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>


                            <p class="alert alert-secondary"> الإجراءات الفنية لتحديد الأتعاب المهنية </p>

                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">حجم النقدية :</span>
                                        <input id="con_fee_money" type="text" aria-label="First name" name="con_fee_money" class="form-control" value="<?php echo $con_data['con_fee_money'] ?>">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رصيد العملاء :</span>
                                        <input id="con_fee_client" type="text" aria-label="First name" name="con_fee_client" class="form-control" value="<?php echo $con_data['con_fee_client'] ?>">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رصيد الموردين :</span>
                                        <input id="con_fee_import" type="text" aria-label="First name" name="con_fee_import" class="form-control" value="<?php echo $con_data['con_fee_import'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="box-flex">

                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> حجم الرواتب :</span>
                                        <input id="con_fee_salary" type="text" aria-label="First name" name="con_fee_salary" class="form-control" value="<?php echo $con_data['con_fee_salary'] ?>">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رصيد الإيرادات :</span>
                                        <input id="con_fee_export" type="text" aria-label="First name" name="con_fee_export" class="form-control" value="<?php echo $con_data['con_fee_export'] ?>">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رصيد تكلفة المبيعات :</span>
                                        <input id="con_fee_sales" type="text" aria-label="First name" name="con_fee_sales" class="form-control" value="<?php echo $con_data['con_fee_sales'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="new_box">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> الأتعاب المتوقعة بدون الضريبة :</span>
                                    <input id="con_fee_expect" type="text" name="con_fee_expect" placeholder="بالريال السعودي" aria-label="First name" class="form-control" value="<?php echo $con_data['con_fee_expect'] ?>">
                                </div>
                            </div>

                            <p class="alert alert-secondary">هل هناك شروط خاصة حول إصدار القوائم المالية؟</p>

                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm ">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> هل توقيت الإصدار مرتبط بمواعيد هامة مع الجهات المختصة مثل هيئة الزكاة، لجنة الإفصاح بهيئة الاستثمار، منصة بلدي للأنشطة الهندسية وغيرها :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input id="con_export_time" required class="form-check-input" type="radio" name="con_export_time" value="نعم" <?php if ($con_data['con_export_time'] == 'نعم') echo 'checked'; ?>>
                                            <label class="form-check-label" for="con_export_time1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_export_time" required class="form-check-input" type="radio" name="con_export_time" value="لا ينطبق" <?php if ($con_data['con_export_time'] == 'لا ينطبق') echo 'checked'; ?>>
                                            <label class="form-check-label" for="con_export_time2">
                                                لا ينطبق
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm ">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> توفير نسخة باللغة الإنجليزية :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input id="con_copy_eng" required class="form-check-input" type="radio" name="con_copy_eng" value="نعم" <?php if ($con_data['con_copy_eng'] == 'نعم') echo 'checked'; ?>>
                                            <label class="form-check-label" for="con_copy_eng1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_copy_eng" required class="form-check-input" type="radio" name="con_copy_eng" value="لا ينطبق" <?php if ($con_data['con_copy_eng'] == 'لا ينطبق') echo 'checked'; ?>>
                                            <label class="form-check-label" for="con_copy_eng2">
                                                لا ينطبق
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm ">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> توفير نسخ إضافية عن المسموح به :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input id="con_copy_extra" required class="form-check-input" type="radio" name="con_copy_extra" value="نعم" <?php if ($con_data['con_copy_extra'] == 'نعم') echo 'checked'; ?>>
                                            <label class="form-check-label" for="con_copy_extra1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_copy_extra" required class="form-check-input" type="radio" name="con_copy_extra" value="لا ينطبق" <?php if ($con_data['con_copy_extra'] == 'لا ينطبق') echo 'checked'; ?>>
                                            <label class="form-check-label" for="con_copy_extra2">
                                                لا ينطبق
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm ">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> توفير نسخة مختومة بالكامل :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input id="con_copy_stamp" required class="form-check-input" type="radio" name="con_copy_stamp" value="نعم" <?php if ($con_data['con_copy_stamp'] == 'نعم') echo 'checked'; ?>>
                                            <label class="form-check-label" for="con_copy_stamp1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_copy_stamp" required class="form-check-input" type="radio" name="con_copy_stamp" value="لا ينطبق" <?php if ($con_data['con_copy_stamp'] == 'لا ينطبق') echo 'checked'; ?>>
                                            <label class="form-check-label" for="con_copy_stamp2">
                                                لا ينطبق
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm ">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> توفير مصادقات على كشوف مرفقة لجهات أخرى :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input id="con_attach_stamp" required class="form-check-input" type="radio" name="con_attach_stamp" id="con_attach_stamp1" value="نعم" <?php if ($con_data['con_attach_stamp'] == 'نعم') echo 'checked'; ?>>
                                            <label class="form-check-label" for="con_attach_stamp1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_attach_stamp" required class="form-check-input" type="radio" name="con_attach_stamp" id="con_attach_stamp2" value="لا ينطبق" <?php if ($con_data['con_attach_stamp'] == 'لا ينطبق') echo 'checked'; ?>>
                                            <label class="form-check-label" for="con_attach_stamp2">
                                                لا ينطبق
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm ">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> رفع القوائم المالية على موقع هيئة الزكاة والضريبة من قبل المكتب. :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input id="con_upload_report" required class="form-check-input" type="radio" name="con_upload_report" value="نعم" <?php if ($con_data['con_upload_report'] == 'نعم') echo 'checked'; ?>>
                                            <label class="form-check-label" for="con_upload_report1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_upload_report" required class="form-check-input" type="radio" name="con_upload_report" value="لا ينطبق" <?php if ($con_data['con_upload_report'] == 'لا ينطبق') echo 'checked'; ?>>
                                            <label class="form-check-label" for="con_upload_report2">
                                                لا ينطبق
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <p class="alert alert-danger"> ملاحظة: يخضع تحديد الأتعاب من قبل المكتب بناءاً على عوامل متعددة أخرى بعد دراسة حالة الطلب والموافقة عليه. </p>

                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">أعدها :</span>
                                        <input required type="text" placeholder="فضلا ضع اسمك هنا" name="con_prepare" value="<?php echo $con_data['con_prepare'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>

                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تاريخ الإعداد :</span>
                                        <input type="text" placeholder="من فضلك اختر التاريخ" class="datepick" name="con_prepare_time" value="<?php echo $con_data['con_prepare_time'] ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="box">
                                <label> المستندات المؤيدة للطلب <span> * </span> </label>
                                <div class="row">
                                    <?php
                                    $files1 = $con_data['con_files'];
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
                </div>
                <div class="col-lg-4 d-none">
                    <div class="form-data">
                        <p class="alert alert-info"> عمل تعديلات علي العقد <i class="fa fa-edit"></i></p>
                        <div class="box3">
                            <label id="car_model"> تاريخ صدور العقد </label>
                            <input class="form-control" type="date" name="date_issuance" value="<?php echo $con_data['date_issuance'] ?>">
                        </div>
                        <div class="box3">
                            <label id="car_model"> تاريخ بدء الخدمة </label>
                            <input class="form-control" type="date" name="date_start_services" value="<?php echo $con_data['date_start_services'] ?>">
                        </div>
                        <div class="box3">
                            <label id="car_model"> تاريخ انتهاء الخدمة </label>
                            <input class="form-control" type="date" name="date_end_services" value="<?php echo $con_data['date_end_services'] ?>">
                        </div>
                        <div class="box3">
                            <label id="car_model"> ارفاق عقد موقع </label>
                            <select name="send_signed_contract" id="" class="form-control">
                                <option value=""> -- اختر -- </option>
                                <option <?php if ($con_data['send_signed_contract'] == '1') echo 'selected'; ?> value="1"> تم الارفاق </option>
                                <option <?php if ($con_data['send_signed_contract'] == '0') echo 'selected'; ?> value="0"> لم يتم الارفاق </option>
                            </select>
                        </div>
                        <div class="box3">
                            <label id="car_model"> ارفاق ايصالات سداد الاتعاب </label>
                            <select name="send_payment_fee" id="" class="form-control">
                                <option value=""> -- اختر -- </option>
                                <option <?php if ($con_data['send_payment_fee'] == '1') echo 'selected'; ?> value="1"> تم الارفاق </option>
                                <option <?php if ($con_data['send_payment_fee'] == '0') echo 'selected'; ?> value="0">لم يتم الارفاق</option>
                            </select>
                        </div>
                        <div class="box3">
                            <label id="car_model"> الحالة </label>
                            <select name="status" id="" class="form-control">
                                <option value=""> -- اختر -- </option>
                                <option <?php if ($con_data['status'] == '1') echo 'selected'; ?> value="1"> انتهت </option>
                                <option <?php if ($con_data['status'] == '0') echo 'selected'; ?> value="0"> قائمة </option>
                            </select>
                        </div>
                        <p class="alert alert-info"> مراحل طلب الخدمة </p>
                        <div class="box3">
                            <label id="car_model"> تاريخ الموافقة على نموذج الخدمة </label>
                            <input class="form-control" type="date" name="agree_services" value="<?php echo $con_data['agree_services'] ?>">
                        </div>
                        <div class="box3">
                            <label id="car_model"> تاريخ إرسال عقد الارتباط </label>
                            <input class="form-control" type="date" name="send_link_note" value="<?php echo $con_data['send_link_note'] ?>">
                        </div>
                        <div class="box3">
                            <label id="car_model"> تاريخ إرسال العقد الموقع وايصالات السداد </label>
                            <input class="form-control" type="date" name="send_sign_contract_payment_receipt" value="<?php echo $con_data['send_sign_contract_payment_receipt'] ?>">
                        </div>
                        <div class="box3">
                            <label id="car_model"> تاريخ التحقق من توقيع العقد وايصالات السداد </label>
                            <input class="form-control" type="date" name="verification_contract_req" value="<?php echo $con_data['verification_contract_req'] ?>">
                        </div>
                        <div class="box3">
                            <label id="car_model"> تاريخ الانتهاء من أعمال المراجعة </label>
                            <input class="form-control" type="date" name="end_revision_work" value="<?php echo $con_data['end_revision_work'] ?>">
                        </div>
                        <div class="box3">
                            <label id="car_model"> تاريخ إرسال ايصال سداد الدفعة الأخيرة </label>
                            <input class="form-control" type="date" name="send_end_fee" value="<?php echo $con_data['send_end_fee'] ?>">
                        </div>
                        <div class="box3">
                            <label id="car_model"> تاريخ إيداع في منصة قوائم </label>
                            <input class="form-control" type="date" name="deposit_plat_form" value="<?php echo $con_data['deposit_plat_form'] ?>">
                        </div>
                        <div class="box">
                            <label id="car_model"> ملاحظات </label>
                            <textarea name="notes" class="form-control"><?php echo $con_data['notes'] ?></textarea>

                        </div>
                        <div class="box text-center">
                            <button type="submit" class="btn btn-primary btn-sm"> تعديل العقد <i class="fa fa-edit"></i> </button>
                        </div>

                        <!--*********************** START CODE ******************** -->
                        <!-- Area to display the percent of progress -->
                        <!-- area to display a message after completion of upload -->
                        <div class='status'></div>
                    </div>
                </div>
        </div>
    </div>
    </form>

</div>
</div>