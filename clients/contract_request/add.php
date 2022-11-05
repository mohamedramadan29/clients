<div class="container-fluid">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=client_dashboard"> لوحة تحكم الضيوف </a> <i class="fa fa-chevron-left"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page"> نموذج طلب عقد إرتباط مراجعة </li>
                </ol>
            </nav>
        </div>

        <div class="myform">

            <!-- ********************** END CODE ********************** -->
            <form id="add_form" class="form-group message_form ajax_form" action="main_ajax.php?dir=clients/contract_request&page=ajax_add" method="POST" autocomplete="on" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="form-data">
                            <div class="alert alert-info">فضلا أدخل بيانات العميل بدقة لنتمكن من دراسة الطلب وتقديم الخدمة بشكل صحيح</div>
                            <p class="alert alert-secondary" role="alert">البيانات العامة للتحقق من العميل</p>

                            <div class="box2">
                                <label id="name"> اســـم العميـــــــــل <span> * </span> </label>
                                <input required class="form-control" type="text" name="con_client_name" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_client_name']; ?>">
                            </div>
                            <div class="box2">
                                <label id="name_en">الـكـيـان الـقـانـونـي<span> * </span></label>
                                <select name="con_legal" class="form-control" id="">
                                    <option value=""> -- اختر الكيان الـقـانـونـي -- </option>
                                    <?php
                                    if (($_SERVER["REQUEST_METHOD"] == "POST")) { ?>
                                        <option selected value="<?php $_REQUEST['con_legal'] ?>"> <?php echo $_REQUEST['con_legal'] ?> </option>
                                    <?php
                                    }
                                    ?>
                                    <option value="مؤسسة فردية">مؤسسة فردية </option>
                                    <option value="شركة ذات مسئولية محدودة"> شركة ذات مسئولية محدودة </option>
                                    <option value="شركة تضامنية"> شركة تضامنية </option>
                                    <option value="شركة مساهمة"> شركة مساهمة </option>
                                    <option value="جهة غير هادفة للربح"> جهة غير هادفة للربح </option>
                                    <option value="فردي"> فردي </option>
                                </select>
                            </div>
                            <div class="box2">
                                <label id="car_model">رقم السجل التجاري<span> * </span></label>
                                <input required class="form-control" type="text" name="con_account_num" placeholder=" رقم السجل التجاري 10 ارقام " value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_account_num']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_model">الرقم المميز بالزكاة <span> * </span></label>
                                <input required class="form-control" type="text" name="con_uniq_num" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_uniq_num']; ?>">
                            </div>


                            <div class="box">
                                <label id="car_model">نوع نظام الحسابات لدى هيئة الزكاة والضريبة والجمارك <span> * </span></label>
                                <div class="check_box_items">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="con_account_type" id="flexRadioDefault1" value="حسابات نظامية">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            حسابات نظامية
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="con_account_type" id="flexRadioDefault2" value="تقديري">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            تقديري
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <label id="car_pricepay">وضح بداية ونهاية السنة المالية لدى هيئة الزكاة <span> * </span> </label>
                            </div>
                            <div class="box2">
                                <label id="car_pricepay"> تـبــــدأ مــــن <span> * </span> </label>
                                <input required class="form-control" type="date" name="con_year_start" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_year_start']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_pricepay"> تـــنـــتــــهــــي فـــي <span> * </span> </label>
                                <input required class="form-control" type="date" name="con_year_end" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_year_end']; ?>">
                            </div>

                            <div class="box">
                                <label id="car_pricerent">أذكرسبب الإصدار <span> * </span></label>
                                <textarea required name="con_reason" placeholder=" اذكر التفاصيل " class="form-control"><?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_reason']; ?></textarea>
                            </div>

                            <div class="box2">
                                <label id="car_model"> السنـة/السنوات الماليـة المطلوبة <span> * </span></label>
                                <input required class="form-control" type="text" placeholder="افصل بين  السنة والاخري (,)" name="con_years_required" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_years_required']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_model">سنة المقارنة إن وجد<span> * </span></label>
                                <input required class="form-control" type="text" name="con_comparison_year" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_comparison_year']; ?>">
                            </div>
                            <div class="box2">
                                <label id="name_en">المحاسبة على الدخل<span> * </span></label>
                                <select name="con_income" class="form-control" id="">
                                    <option value=""> -- حدد المحاسبة على الدخل-- </option>
                                    <?php
                                    if (($_SERVER["REQUEST_METHOD"] == "POST")) { ?>
                                        <option selected value="<?php $_REQUEST['con_income'] ?>"> <?php echo $_REQUEST['con_income'] ?> </option>
                                    <?php
                                    }
                                    ?>
                                    <option value="تتبع النظام الزكوي">تتبع النظام الزكوي</option>
                                    <option value="تتبع نظام ضريبة الدخل"> تتبع نظام ضريبة الدخل </option>
                                    <option value="مختلطة زكوي وضريبي"> مختلطة زكوي وضريبي </option>
                                </select>
                            </div>
                            <div class="box">
                                <label id="car_model"> هل أفاد العميل بإصدار قوائم مالية سابقة له؟ <span> * </span></label>
                                <div class="check_box_items">
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_client_prev" id="tax_client_prev1" value="نعم">
                                        <label class="form-check-label" for="tax_client_prev1">
                                            نعم
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_client_prev" id="tax_client_prev2" value="لا">
                                        <label class="form-check-label" for="tax_client_prev2">
                                            لا
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <script>
                                let checkbox = document.getElementById("tax_client_prev1");
                                let checkbox2 = document.getElementById("tax_client_prev2");
                                checkbox.addEventListener("change", () => {
                                    if (checkbox.checked) {
                                        $("#checked_input").css("display", "block");
                                        $("#checked_input2").css("display", "block");
                                    }
                                });
                                checkbox2.addEventListener("change", () => {
                                    if (checkbox2.checked) {
                                        $("#checked_input").css("display", "none");
                                        $("#checked_input2").css("display", "none");
                                    }
                                });
                            </script>
                            <div class="box" id="checked_input">
                                <label id="car_model"> آخر قوائم مودعة لعام </label>
                                <input class="form-control" type="text" name="con_client_prev_year" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_client_prev_year']; ?>">
                            </div>
                            <div class="box" id="checked_input2">
                                <label id="car_model">اختر اسم مكتب المحاسب القانوني الذي أصدر القوائم المالية</label>
                                <input class="form-control" type="text" name="con_office_name_prev" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_office_name_prev']; ?>">
                            </div>
                            <div class="box">
                                <label id="car_model"> في حال الإجابة أعلاه (بنعم) يرجى إلزامياً توفير صورة من القوائم المالية <span> * </span></label>
                                <div class="check_box_items">
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_client_prev_img" id="tax_client_prev_img1" value="تم">
                                        <label class="form-check-label" for="tax_client_prev_img1">
                                            تم
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_client_prev_img" id="tax_client_prev_img2" value="لا ينطبق">
                                        <label class="form-check-label" for="tax_client_prev_img2">
                                            لا ينطبق
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <label id="car_model"> هل تم التحقق من موقع قوائم عن آخر قوائم مالية صادرة؟ <span> * </span></label>
                                <div class="check_box_items">
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_verify_website" id="tax_verify_website1" value="نعم">
                                        <label class="form-check-label" for="tax_verify_website1">
                                            تم
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_verify_website" id="tax_verify_website2" value="لا ينطبق">
                                        <label class="form-check-label" for="tax_verify_website2">
                                            لا ينطبق
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <label id="car_model"> هل تم الحصول على ميزان مراجعة وفق متطلبات برنامج المراجعة الإلكتروني <span> * </span></label>
                                <div class="check_box_items">
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="com_revision_prog" id="tax_client_account_rev1" value="نعم">
                                        <label class="form-check-label" for="tax_client_account_rev1">
                                            نعم
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="com_revision_prog" id="tax_client_account_rev2" value="لا ينطبق">
                                        <label class="form-check-label" for="tax_client_account_rev2">
                                            لا ينطبق
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <label id="car_model"> هل محاسب العميل لديه خبرة ومعرفة في توفير أي مستندات أو معلومات إضافية؟ <span> * </span></label>
                                <div class="check_box_items">
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_client_account_exer" id="tax_client_account_exer1" value="نعم">
                                        <label class="form-check-label" for="tax_client_account_exer1">
                                            نعم
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_client_account_exer" id="tax_client_account_exer2" value="لا ينطبق">
                                        <label class="form-check-label" for="tax_client_account_exer2">
                                            لا ينطبق
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <p class="alert alert-secondary"> بيانات التواصل (اختياري) </p>
                            <div class="box2">
                                <label id="car_model"> اسـم المدير </label>
                                <input class="form-control" type="text" name="con_manager_name" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_manager_name']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_model">رقم جوال المـديـر </label>
                                <input class="form-control" type="text" placeholder=" رقم جوال المدير يجب ان يكون 10 ارقام" name="con_manager_phone" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_manager_phone']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_pricepay">البريد الإلكتروني للمدير </label>
                                <input class="form-control" type="email" name="con_manager_email" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_manager_email']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_model">اسم المحاسب </label>
                                <input class="form-control" type="text" name="con_accounter_name" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_accounter_name']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_model">رقم جوال المحاسب </label>
                                <input class="form-control" type="text" placeholder=" رقم جوال المحاسب يجب ان يكون 10 ارقام" name="con_accounter_phone" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_accounter_phone']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_pricepay">البريد الإلكتروني للمحاسب </label>
                                <input class="form-control" type="email" name="con_accounter_email" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_accounter_email']; ?>">
                            </div>

                            <p class="alert alert-secondary">بيانات الرفع على منصة قوائم </p>

                            <div class="box2">
                                <label id="car_pricepay"> رقم الهوية الوطنية </label>
                                <input class="form-control" type="text" name="con_card_num" placeholder="لازم 10 ارقام" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_card_num']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_pricepay">تاريخ الميلاد </label>
                                <input class="form-control" type="text" name="con_upload_birth" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_upload_birth']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_pricepay"> رقم الجوال </label>
                                <input class="form-control" type="text" name="con_upload_mobile" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_upload_mobile']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_pricepay"> البريد الالكتروني </label>
                                <input class="form-control" type="text" name="con_upload_email" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_upload_email']; ?>">
                            </div>

                            <p class="alert alert-secondary"> الإجراءات الفنية لتحديد الأتعاب المهنية </p>
                            <div class="box2">
                                <div class="input-group">
                                    <span class="input-group-text">حجم النقدية</span>
                                    <input type="text" aria-label="First name" name="con_fee_money" class="form-control" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_fee_money']; ?>">
                                </div>
                            </div>
                            <div class="box2">
                                <div class="input-group">
                                    <span class="input-group-text"> رصيد العملاء </span>
                                    <input type="text" aria-label="First name" name="con_fee_client" class="form-control" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_fee_client']; ?>">
                                </div>
                            </div>
                            <div class="box2">
                                <div class="input-group">
                                    <span class="input-group-text"> رصيد الموردين </span>
                                    <input type="text" aria-label="First name" name="con_fee_import" class="form-control" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_fee_import']; ?>">
                                </div>
                            </div>
                            <div class="box2">
                                <div class="input-group">
                                    <span class="input-group-text"> حجم الرواتب </span>
                                    <input type="text" aria-label="First name" name="con_fee_salary" class="form-control" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_fee_salary']; ?>">
                                </div>
                            </div>
                            <div class="box2">
                                <div class="input-group">
                                    <span class="input-group-text"> رصيد الإيرادات </span>
                                    <input type="text" aria-label="First name" name="con_fee_export" class="form-control" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_fee_export']; ?>">
                                </div>
                            </div>
                            <div class="box2">
                                <div class="input-group">
                                    <span class="input-group-text"> رصيد تكلفة المبيعات </span>
                                    <input type="text" aria-label="First name" name="con_fee_sales" class="form-control" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_fee_sales']; ?>">
                                </div>
                            </div>
                            <div class="box">
                                <div class="input-group">
                                    <span class="input-group-text"> الأتعاب المتوقعة بدون الضريبة </span>
                                    <input type="text" name="con_fee_expect" placeholder="بالريال السعودي" aria-label="First name" class="form-control" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_fee_expect']; ?>">
                                </div>
                            </div>

                            <p class="alert alert-secondary">هل هناك شروط خاصة حول إصدار القوائم المالية؟</p>
                            <div class="box">
                                <label id="car_model"> هل توقيت الإصدار مرتبط بمواعيد هامة مع الجهات المختصة مثل هيئة الزكاة، لجنة الإفصاح بهيئة الاستثمار، منصة بلدي للأنشطة الهندسية وغيرها <span> * </span></label>
                                <div class="check_box_items">
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_export_time" id="con_export_time1" value="نعم">
                                        <label class="form-check-label" for="con_export_time1">
                                            نعم
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_export_time" id="con_export_time2" value="لا ينطبق">
                                        <label class="form-check-label" for="con_export_time2">
                                            لا ينطبق
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="box">
                                <label id="car_model"> توفير نسخة باللغة الإنجليزية <span class="star"> * </span></label>
                                <div class="check_box_items">
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_copy_eng" id="con_copy_eng1" value="نعم">
                                        <label class="form-check-label" for="con_copy_eng1">
                                            نعم
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_copy_eng" id="con_copy_eng2" value="لا ينطبق">
                                        <label class="form-check-label" for="con_copy_eng2">
                                            لا ينطبق
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="box">
                                <label id="car_model"> توفير نسخ إضافية عن المسموح به <span class="star"> * </span></label>
                                <div class="check_box_items">
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_copy_extra" id="con_copy_extra1" value="نعم">
                                        <label class="form-check-label" for="con_copy_extra1">
                                            نعم
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_copy_extra" id="con_copy_extra2" value="لا ينطبق">
                                        <label class="form-check-label" for="con_copy_extra2">
                                            لا ينطبق
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="box">
                                <label id="car_model"> توفير نسخة مختومة بالكامل <span class="star"> * </span></label>
                                <div class="check_box_items">
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_copy_stamp" id="con_copy_stamp1" value="نعم">
                                        <label class="form-check-label" for="con_copy_stamp1">
                                            نعم
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_copy_stamp" id="con_copy_stamp2" value="لا ينطبق">
                                        <label class="form-check-label" for="con_copy_stamp2">
                                            لا ينطبق
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <label id="car_model"> توفير مصادقات على كشوف مرفقة لجهات أخرى <span class="star"> * </span></label>
                                <div class="check_box_items">
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_attach_stamp" id="con_attach_stamp1" value="نعم">
                                        <label class="form-check-label" for="con_attach_stamp1">
                                            نعم
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_attach_stamp" id="con_attach_stamp2" value="لا ينطبق">
                                        <label class="form-check-label" for="con_attach_stamp2">
                                            لا ينطبق
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <label id="car_model"> رفع القوائم المالية على موقع هيئة الزكاة والضريبة من قبل المكتب. <span class="star"> * </span></label>
                                <div class="check_box_items">
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_upload_report" id="con_upload_report1" value="نعم">
                                        <label class="form-check-label" for="con_upload_report1">
                                            نعم
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="con_upload_report" id="con_upload_report2" value="لا ينطبق">
                                        <label class="form-check-label" for="con_upload_report2">
                                            لا ينطبق
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <p class="alert alert-danger"> ملاحظة: يخضع تحديد الأتعاب من قبل المكتب بناءاً على عوامل متعددة أخرى بعد دراسة حالة الطلب والموافقة عليه. </p>
                            <div class="box2">
                                <label id="car_pricepay"> أعدها <span class="star"> * </span></label>
                                <input required class="form-control" type="text" placeholder="فضلا ضع اسمك هنا" name="con_prepare" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_prepare']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_pricepay"> تاريخ الإعداد <span class="star"> * </span></label>
                                <input class="form-control" type="date" name="con_prepare_time" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_prepare_time']; ?>">
                            </div>
                            <div class="box">
                                <label> المستندات المؤيدة للطلب (المرفقات) <span class="star"> * </span> </label>
                                <div class="check_prototype_resualt">
                                    <div class="box mb-3">
                                        <div class="upload-file">
                                            <div class="upload-wrapper">
                                                <label>
                                                    <input required type="file" name="files[]" id="files" multiple>
                                                    <p> <a> اختر الملفات للرفع
                                                        </a>
                                                    </p>
                                                </label>
                                                <p class="hint"> يمكنك اختيار اكثر من ملف </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- <h2 class="mb-0"> المفات المرفوعه </h2> -->
                                            </div>
                                        </div>
                                        <output id="image-gallery"></output>
                                    </div>
                                </div>
                            </div>
                            <div class="box submit_box">
                                <input class="btn btn-primary text-center" name="add_car" type="submit" value="ارسال الطلب">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info">
                            <h4> معلومات تهمك !! </h4>
                            <ul class="">
                                <li> تعبئة بيانات الطلب بدقة والتأكد منها.</li>
                                <li> إرفاق السجل التجاري الرئيسي والسجلات الفرعية فيما يخص سنة المراجعة. </li>
                                <li> إرفاق عقد التأسيس والتعديلات التي تمت عليه للشركات . </li>
                                <li> إرفاق آخر شهادة زكاة صادرة للعميل (سواء تقديري أو حسابات نظامية). </li>
                                <li> إرفاق نسخة من ميزان المراجعة وآخر قوائم مالية للعميل. </li>
                                <li> يجب التأكد دوماً من الأحداث اللاحقة للعميل ومطابقة رأس مال الميزانية بالسجل الرئيسي والفروع </li>
                            </ul>
                            <h4> مواقع تهمك !! </h4>
                            <ul>
                                <li>اضغط على الرابط للتحقق من بيانات السجل</li>
                                <li> <a target="_blank" href="https://mc.gov.sa/ar/eservices/Pages/Commercial-data.aspx"> وزارة التجارة </a> </li>
                                <li> اضغط على الرابط للتحقق من بيانات السنة المالية </li>
                                <li> <a target="_blank" href="https://login.gazt.gov.sa/irj/portal?ume.logon.locale=ar&login=X"> هيئة الزكاة والضريبة </a></li>
                                <li> اضغط على الرابط للتحقق من آخر سنة مودعة على منصة قوائم </li>
                                <li> <a target="_blank" href="https://qawaem.mc.gov.sa/eng/crenquiry.aspx"> التحقق من آخر سنة مودعة </a></li>
                            </ul>
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