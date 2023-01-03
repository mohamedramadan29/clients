<?php
$tax_id = $_GET["tax_id"];
$stmt = $connect->prepare("SELECT * FROM tax_report WHERE tax_id=?");
$stmt->execute(array($tax_id));
$tax_data = $stmt->fetch();
?>
<div class="container-fluid">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=client_dashboard"> لوحة تحكم الضيوف </a> <i class="fa fa-chevron-left"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page">مشاهدة نموذج طلب عقد ارتباط لخدمة زكاة وضرائب </li>
                </ol>
            </nav>
        </div>

        <div class="myform">
            <!-- ********************** END CODE ********************** -->
            <form id="edit_form" class="form-group message_form ajax_form" action="main_ajax.php?dir=clients/tax_services&page=ajax_edit" method="POST" autocomplete="on" enctype="multipart/form-data">
                <div class="row">
                    <input required class="form-control" type="hidden" name="tax_id" value="<?php echo $tax_id ?>">

                    <div class="col-lg-9">
                        <div class="form-data">
                            <div class="alert alert-info">فضلا أدخل بيانات العميل بدقة لنتمكن من دراسة الطلب وتقديم الخدمة بشكل صحيح</div>
                            <p class="alert alert-secondary" role="alert">البيانات العامة للتحقق من العميل</p>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> اســـم العميـــــــــل :</span>
                                        <input id="tax_client_name" required type="text" name="tax_client_name" value="<?php echo $tax_data['tax_client_name']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> الـكـيـان الـقـانـونـي :</span>
                                        <select name="tax_legal" class="form-control" id="tax_legal">
                                            <option value=""> -- اختر الكيان الـقـانـونـي -- </option>
                                            <option <?php if ($tax_data["tax_legal"] == "مؤسسة فردية") echo "selected"; ?> value="مؤسسة فردية">مؤسسة فردية </option>
                                            <option <?php if ($tax_data["tax_legal"] == "شركة ذات مسئولية محدودة") echo "selected"; ?> value="شركة ذات مسئولية محدودة"> شركة ذات مسئولية محدودة </option>
                                            <option <?php if ($tax_data["tax_legal"] == "شركة تضامنية") echo "selected"; ?> value="شركة تضامنية"> شركة تضامنية </option>
                                            <option <?php if ($tax_data["tax_legal"] == "شركة مساهمة") echo "selected"; ?> value="شركة مساهمة"> شركة مساهمة </option>
                                            <option <?php if ($tax_data["tax_legal"] == "جهة غير هادفة للربح") echo "selected"; ?> value="جهة غير هادفة للربح"> جهة غير هادفة للربح </option>
                                            <option <?php if ($tax_data["tax_legal"] == "فردي") echo "selected"; ?> value="فردي"> فردي </option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم السجل التجاري :</span>
                                        <input id="tax_account_num" required type="text" name="tax_account_num" value="<?php echo $tax_data['tax_account_num']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
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
                                            <input class="form-check-input" type="radio" name="tax_account_type" id="flexRadioDefault1" value="حسابات نظامية" <?php if ($tax_data['tax_account_type'] == 'حسابات نظامية') echo 'checked'; ?>>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                حسابات نظامية
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tax_account_type" id="flexRadioDefault2" value="تقديري" <?php if ($tax_data['tax_account_type'] == 'تقديري') echo 'checked'; ?>>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                تقديري
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new_box">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">وضح بداية ونهاية السنة المالية لدى هيئة الزكاة :</span>

                                </div>
                            </div>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تـبــــدأ مــــن :</span>
                                        <input id="tax_year_start" required type="text" placeholder="من فضلك اختر التاريخ" class="datepick" name="tax_year_start" value="<?php echo $tax_data['tax_year_start'];  ?>" />
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تـــنـــتــــهــــي فـــي :</span>
                                        <input id="tax_year_end" required type="text" placeholder="من فضلك اختر التاريخ" class="datepick" name="tax_year_end" value="<?php echo $tax_data['tax_year_end'];  ?>" />
                                    </div>
                                </div>
                            </div>


                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تحديد نوع الخدمة :</span>
                                        <select name="tax_serv_type" class="form-control" id="tax_serv_type">
                                            <option value=""> -- حدد نوع الخدمة -- </option>
                                            <option <?php if ($tax_data['tax_serv_type'] == 'تقديم إقرارت زكوية أو ضريبة دخل') echo 'selected' ?> value="تقديم إقرارت زكوية أو ضريبة دخل"> تقديم إقرارت زكوية أو ضريبة دخل </option>
                                            <option <?php if ($tax_data['tax_serv_type'] == 'تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة') echo 'selected' ?> value="تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة">تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة</option>
                                            <option <?php if ($tax_data['tax_serv_type'] == 'شطب ملف المنشأة لدى هيئة الزكاة والضريبة') echo 'selected' ?> value="شطب ملف المنشأة لدى هيئة الزكاة والضريبة"> شطب ملف المنشأة لدى هيئة الزكاة والضريبة </option>
                                            <option <?php if ($tax_data['tax_serv_type'] == 'تعديل إقرارت زكوية أوضريبية') echo 'selected' ?> value="تعديل إقرارت زكوية أوضريبية">تعديل إقرارت زكوية أوضريبية</option>
                                            <option <?php if ($tax_data['tax_serv_type'] == 'الاعتراض على ربط صادر من هيئة الزكاة والضريبة') echo 'selected' ?> value="الاعتراض على ربط صادر من هيئة الزكاة والضريبة"> الاعتراض على ربط صادر من هيئة الزكاة والضريبة </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> اضافة خدمة </span>
                                        <select name="tax_add_serv" class="form-control" id="tax_add_serv">
                                            <option value=""> -- حدد نوع الخدمة -- </option>
                                            <option <?php if ($tax_data['tax_add_serv'] == 'تقديم إقرارت زكوية أو ضريبة دخل') echo 'selected' ?> value="تقديم إقرارت زكوية أو ضريبة دخل"> تقديم إقرارت زكوية أو ضريبة دخل </option>
                                            <option <?php if ($tax_data['tax_add_serv'] == 'تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة') echo 'selected' ?> value="تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة">تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة</option>
                                            <option <?php if ($tax_data['tax_add_serv'] == 'شطب ملف المنشأة لدى هيئة الزكاة والضريبة') echo 'selected' ?> value="شطب ملف المنشأة لدى هيئة الزكاة والضريبة"> شطب ملف المنشأة لدى هيئة الزكاة والضريبة </option>
                                            <option <?php if ($tax_data['tax_add_serv'] == 'تعديل إقرارت زكوية أوضريبية') echo 'selected' ?> value="تعديل إقرارت زكوية أوضريبية">تعديل إقرارت زكوية أوضريبية</option>
                                            <option <?php if ($tax_data['tax_add_serv'] == 'الاعتراض على ربط صادر من هيئة الزكاة والضريبة') echo 'selected' ?> value="الاعتراض على ربط صادر من هيئة الزكاة والضريبة"> الاعتراض على ربط صادر من هيئة الزكاة والضريبة </option>
                                        </select>
                                    </div>
                                </div>
                            </div>






                            <div class="box">
                                <label id="car_pricerent"> أذكرسبب طلب الخدمة <span> * </span></label>
                                <textarea required name="tax_serv_reason" placeholder=" اذكر التفاصيل " class="form-control"><?php echo $tax_data['tax_serv_reason']; ?></textarea>
                            </div>


                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> السنـة/السنوات الماليـة المطلوبة :</span>
                                        <input id="tax_years_required" required type="text" placeholder="افصل بين  السنة والاخري (,)" name="tax_years_required" value="<?php echo $tax_data['tax_years_required'];  ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">المحاسبة على الدخل</span>
                                        <select name="tax_income" class="form-control" id="tax_income">
                                            <option value=""> -- حدد المحاسبة على الدخل-- </option>
                                            <option <?php if ($tax_data['tax_income'] == 'تتبع النظام الزكوي') echo 'selected' ?> value="تتبع النظام الزكوي">تتبع النظام الزكوي</option>
                                            <option <?php if ($tax_data['tax_income'] == 'تتبع نظام ضريبة الدخل') echo 'selected' ?> value="تتبع نظام ضريبة الدخل"> تتبع نظام ضريبة الدخل </option>
                                            <option <?php if ($tax_data['tax_income'] == 'مختلطة زكوي وضريبي') echo 'selected' ?> value="مختلطة زكوي وضريبي"> مختلطة زكوي وضريبي </option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="new_box">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">الرقم المميز بالزكاة :</span>
                                    <input id="tax_uniq_num" required type="text" name="tax_uniq_num" value="<?php echo $tax_data['tax_uniq_num']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> هل أفاد العميل بإصدار قوائم مالية سابقة له؟ :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tax_client_prev" id="tax_client_prev1" value="نعم" <?php if ($tax_data['tax_client_prev'] == 'نعم') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_client_prev1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tax_client_prev" id="tax_client_prev2" value="لا" <?php if ($tax_data['tax_client_prev'] == 'لا') echo 'checked'; ?>>
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
                                checkbox.addEventListener("change", () => {
                                    if (checkbox.checked) {
                                        $("#checked_input").css("display", "block");
                                    }
                                });
                                checkbox2.addEventListener("change", () => {
                                    if (checkbox2.checked) {
                                        $("#checked_input").css("display", "none");
                                    }
                                });
                            </script>
                            <div class="new_box" id="checked_input">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> آخر قوائم مودعة لعام :</span>
                                    <input required id="tax_client_prev_year" type="text" name="tax_client_prev_year" value="<?php echo $tax_data['tax_client_prev_year']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>


                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> في حال الإجابة أعلاه (بنعم) يرجى إلزامياً توفير صورة من القوائم المالية :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="tax_client_prev_img" id="tax_client_prev_img1" value="تم" <?php if ($tax_data['tax_client_prev_img'] == 'تم') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_client_prev_img1">
                                                تم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="tax_client_prev_img" id="tax_client_prev_img2" value="لا ينطبق" <?php if ($tax_data['tax_client_prev_img'] == 'لا ينطبق') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_client_prev_img2">
                                                لا ينطبق
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> هل تم التحقق من موقع قوائم عن آخر قوائم مالية صادرة؟ :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="tax_verify_website" id="tax_verify_website1" value="نعم" <?php if ($tax_data['tax_verify_website'] == 'نعم') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_verify_website1">
                                                تم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="tax_verify_website" id="tax_verify_website2" value="لا ينطبق" <?php if ($tax_data['tax_verify_website'] == 'لا ينطبق') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_verify_website2">
                                                لا ينطبق
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> هل محاسب العميل لديه خبرة ومعرفة في توفير أي مستندات أو معلومات إضافية؟</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="tax_client_account_exer" id="tax_client_account_exer1" value="نعم" <?php if ($tax_data['tax_client_account_exer'] == 'نعم') echo 'checked'; ?>>
                                            <label class="form-check-label" for="tax_client_account_exer1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="tax_client_account_exer" id="tax_client_account_exer2" value="لا ينطبق" <?php if ($tax_data['tax_client_account_exer'] == 'لا ينطبق') echo 'checked'; ?>>
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
                                        <input id="tax_manager_name" type="text" name="tax_manager_name" value="<?php echo $tax_data['tax_manager_name']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم جوال المـديـر :</span>
                                        <input id="tax_manager_phone" type="text" placeholder="10 ارقام" name="tax_manager_phone" value="<?php echo $tax_data['tax_manager_phone']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> البريد الإلكتروني للمدير :</span>
                                        <input id="tax_manager_email" type="email" name="tax_manager_email" value="<?php echo $tax_data['tax_manager_email']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> اسم المحاسب :</span>
                                        <input id="tax_accounter_name" type="text" name="tax_accounter_name" value="<?php echo $tax_data['tax_accounter_name']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم جوال المحاسب :</span>
                                        <input id="tax_accounter_phone" type="text" placeholder="10 ارقام" name="tax_accounter_phone" value="<?php echo $tax_data['tax_accounter_phone']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> البريد الإلكتروني للمحاسب :</span>
                                        <input id="tax_accounter_email" type="email" name="tax_accounter_email" value="<?php echo $tax_data['tax_accounter_email']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">أعدها :</span>
                                        <input id="tax_prepare" required type="text" placeholder="فضلا ضع اسمك هنا" name="tax_prepare" value="<?php echo $tax_data['tax_prepare']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>

                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تاريخ الإعداد :</span>
                                        <input id="tax_prepare_date" type="text" placeholder="من فضلك اختر التاريخ" class="datepick" name="tax_prepare_date" value="<?php echo $tax_data['tax_prepare_date']; ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="box">
                                <label> المستندات المؤيدة للطلب <span> * </span> </label>
                                <div class="row">
                                    <?php
                                    $files1 = $tax_data['tax_files'];
                                    $files1 = explode(" ", $files1);
                                    $countfile = count($files1) - 1;
                                    if ($countfile > 0) {
                                        for ($i = 0; $i < $countfile; ++$i) {
                                    ?>
                                            <div class="box2">
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