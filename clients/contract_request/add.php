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

                    <div class="col-lg-9">
                        <div class="form-data">
                            <div class="alert alert-info">فضلا أدخل بيانات العميل بدقة لنتمكن من دراسة الطلب وتقديم الخدمة بشكل صحيح</div>
                            <p class="alert alert-secondary text-center" role="alert">البيانات العامة للتحقق من العميل</p>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> اســـم العميـــــــــل :</span>
                                        <input id="con_client_name" required type="text" name="con_client_name" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_client_name']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>

                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> السنـة/السنوات الماليـة المطلوبة :</span>
                                        <input id="con_years_required" required type="text" placeholder="افصل بين  السنة والاخري (,)" name="con_years_required" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_years_required']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>


                            </div>

                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> الـكـيـان الـقـانـونـي :</span>
                                        <select id="con_legal" name="con_legal" class="form-control" id="">
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
                                </div>

                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> سنة المقارنة إن وجد :</span>
                                        <input id="con_comparison_year" type="text" name="con_comparison_year" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_comparison_year']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>

                            </div>

                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم السجل التجاري :</span>
                                        <input id="con_account_num" required type="text" placeholder=" رقم السجل التجاري 10 ارقام " name="con_account_num" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_account_num']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>

                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">المحاسبة على الدخل :</span>
                                        <select id="con_income" name="con_income" class="form-control" id="">
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
                                </div>
                            </div>

                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> الرقم المميز بالزكاة :</span>
                                        <input id="con_uniq_num" type="text" name="con_uniq_num" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_uniq_num']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
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
                                            <input class="form-check-input" type="radio" name="con_account_type" id="con_account_type" value="حسابات نظامية">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                حسابات نظامية
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="con_account_type" id="con_account_type" value="تقديري">
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
                                        <input id="con_year_start" required type="text" placeholder="من فضلك اختر التاريخ" class="datepick" name="con_year_start" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_year_start']; ?>" />
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تـــنـــتــــهــــي فـــي :</span>
                                        <input id="con_year_end" required type="text" placeholder="من فضلك اختر التاريخ" class="datepick" name="con_year_end" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_year_end']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <label id="car_pricerent">أذكرسبب الإصدار <span> * </span></label>
                                <textarea id="con_reason" required name="con_reason" placeholder=" اذكر التفاصيل " class="form-control"><?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_reason']; ?></textarea>
                            </div>
                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> هل أفاد العميل بإصدار قوائم مالية سابقة له؟ :</span>
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
                            <div class="box-flex">
                                <div class="new_box" id="checked_input">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> آخر قوائم مودعة لعام :</span>
                                        <input id="con_client_prev_year" type="text" name="con_client_prev_year" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_client_prev_year']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box" id="checked_input2">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> اختر اسم مكتب المحاسب القانوني الذي أصدر القوائم المالية :</span>
                                        <input id="con_office_name_prev" type="text" name="con_office_name_prev" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_office_name_prev']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm ">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> في حال الإجابة أعلاه (بنعم) يرجى إلزامياً توفير صورة من القوائم المالية :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="con_client_prev_img" id="tax_client_prev_img1" value="تم">
                                            <label class="form-check-label" for="tax_client_prev_img1">
                                                نعم
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
                            </div>
                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm ">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> هل تم التحقق من موقع قوائم عن آخر قوائم مالية صادرة؟ :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input id="con_verify_website" required class="form-check-input" type="radio" name="con_verify_website" value="نعم">
                                            <label class="form-check-label" for="tax_verify_website1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_verify_website" required class="form-check-input" type="radio" name="con_verify_website" value="لا ينطبق">
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
                                            <input id="com_revision_prog" required class="form-check-input" type="radio" name="com_revision_prog" value="نعم">
                                            <label class="form-check-label" for="tax_client_account_rev1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="com_revision_prog" required class="form-check-input" type="radio" name="com_revision_prog" value="لا ينطبق">
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
                                            <input id="con_client_account_exer" required class="form-check-input" type="radio" name="con_client_account_exer" value="نعم">
                                            <label class="form-check-label" for="tax_client_account_exer1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_client_account_exer" required class="form-check-input" type="radio" name="con_client_account_exer" value="لا ينطبق">
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
                                        <input id="con_manager_name" type="text" name="con_manager_name" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_manager_name']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم جوال المـديـر :</span>
                                        <input id="con_manager_phone" type="text" placeholder="10 ارقام" name="con_manager_phone" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_manager_phone']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> البريد الإلكتروني للمدير :</span>
                                        <input id="con_manager_email" type="email" name="con_manager_email" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_manager_email']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> اسم المحاسب :</span>
                                        <input id="con_accounter_name" type="text" name="con_accounter_name" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_accounter_name']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم جوال المحاسب :</span>
                                        <input id="con_accounter_phone" type="text" placeholder="10 ارقام" name="con_accounter_phone" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_accounter_phone']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> البريد الإلكتروني للمحاسب :</span>
                                        <input id="con_accounter_email" type="email" name="con_accounter_email" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_accounter_email']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>
                            <p class="alert alert-secondary">بيانات الرفع على منصة قوائم </p>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم الهوية الوطنية :</span>
                                        <input id="con_card_num" required type="text" name="con_card_num" placeholder="لازم 10 ارقام" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_card_num']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تاريخ الميلاد :</span>
                                        <input id="con_upload_birth" required type="text" name="con_upload_birth" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_upload_birth']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم الجوال :</span>
                                        <input id="con_upload_mobile" required type="text" name="con_upload_mobile" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_upload_mobile']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> البريد الالكتروني :</span>
                                        <input id="con_upload_email" required type="email" name="con_upload_email" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_upload_email']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>
                            <p class="alert alert-secondary"> الإجراءات الفنية لتحديد الأتعاب المهنية </p>
                            <div class="box2">
                                <div class="input-group">
                                    <span class="input-group-text">حجم النقدية :</span>
                                    <input id="con_fee_money" type="text" aria-label="First name" name="con_fee_money" class="form-control" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_fee_money']; ?>">
                                </div>
                            </div>
                            <div class="box2">
                                <div class="input-group">
                                    <span class="input-group-text"> رصيد العملاء :</span>
                                    <input id="con_fee_client" type="text" aria-label="First name" name="con_fee_client" class="form-control" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_fee_client']; ?>">
                                </div>
                            </div>
                            <div class="box2">
                                <div class="input-group">
                                    <span class="input-group-text"> رصيد الموردين :</span>
                                    <input id="con_fee_import" type="text" aria-label="First name" name="con_fee_import" class="form-control" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_fee_import']; ?>">
                                </div>
                            </div>
                            <div class="box2">
                                <div class="input-group">
                                    <span class="input-group-text"> حجم الرواتب :</span>
                                    <input id="con_fee_salary" type="text" aria-label="First name" name="con_fee_salary" class="form-control" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_fee_salary']; ?>">
                                </div>
                            </div>
                            <div class="box2">
                                <div class="input-group">
                                    <span class="input-group-text"> رصيد الإيرادات :</span>
                                    <input id="con_fee_export" type="text" aria-label="First name" name="con_fee_export" class="form-control" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_fee_export']; ?>">
                                </div>
                            </div>
                            <div class="box2">
                                <div class="input-group">
                                    <span class="input-group-text"> رصيد تكلفة المبيعات :</span>
                                    <input id="con_fee_sales" type="text" aria-label="First name" name="con_fee_sales" class="form-control" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_fee_sales']; ?>">
                                </div>
                            </div>
                            <div class="box">
                                <div class="input-group">
                                    <span class="input-group-text"> الأتعاب المتوقعة بدون الضريبة :</span>
                                    <input id="con_fee_expect" type="text" name="con_fee_expect" placeholder="بالريال السعودي" aria-label="First name" class="form-control" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_fee_expect']; ?>">
                                </div>
                            </div>

                            <p class="alert alert-secondary">هل هناك شروط خاصة حول إصدار القوائم المالية؟</p>
                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm ">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> هل توقيت الإصدار مرتبط بمواعيد هامة مع الجهات المختصة مثل هيئة الزكاة، لجنة الإفصاح بهيئة الاستثمار، منصة بلدي للأنشطة الهندسية وغيرها :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input id="con_export_time" required class="form-check-input" type="radio" name="con_export_time" value="نعم">
                                            <label class="form-check-label" for="con_export_time1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_export_time" required class="form-check-input" type="radio" name="con_export_time" value="لا ينطبق">
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
                                            <input id="con_copy_eng" required class="form-check-input" type="radio" name="con_copy_eng" value="نعم">
                                            <label class="form-check-label" for="con_copy_eng1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_copy_eng" required class="form-check-input" type="radio" name="con_copy_eng" value="لا ينطبق">
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
                                            <input id="con_copy_extra" required class="form-check-input" type="radio" name="con_copy_extra" value="نعم">
                                            <label class="form-check-label" for="con_copy_extra1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_copy_extra" required class="form-check-input" type="radio" name="con_copy_extra" value="لا ينطبق">
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
                                            <input id="con_copy_stamp" required class="form-check-input" type="radio" name="con_copy_stamp"  value="نعم">
                                            <label class="form-check-label" for="con_copy_stamp1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_copy_stamp" required class="form-check-input" type="radio" name="con_copy_stamp"  value="لا ينطبق">
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
                                            <input id="con_attach_stamp" required class="form-check-input" type="radio" name="con_attach_stamp" value="نعم">
                                            <label class="form-check-label" for="con_attach_stamp1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_attach_stamp" required class="form-check-input" type="radio" name="con_attach_stamp" value="لا ينطبق">
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
                                            <input id="con_upload_report" required class="form-check-input" type="radio" name="con_upload_report" value="نعم">
                                            <label class="form-check-label" for="con_upload_report1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input id="con_upload_report" required class="form-check-input" type="radio" name="con_upload_report" value="لا ينطبق">
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
                                        <input required type="text" placeholder="فضلا ضع اسمك هنا" name="con_prepare" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_prepare']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>

                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تاريخ الإعداد :</span>
                                        <input type="text" placeholder="من فضلك اختر التاريخ" class="datepick" name="con_prepare_time" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_prepare_time']; ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="box">
                                <label> المستندات المؤيدة للطلب (المرفقات) <span class="star"> * </span> </label>
                                <div class="box">
                                    <div class="dropzone" id="myDropzone1"></div>
                                </div>
                                <!--
                                <div class="check_prototype_resualt">
                                    <div class="box ">
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
                                                <h2 class="mb-0"> المفات المرفوعه </h2>  
                                            </div>
                                        </div>
                                        <output id="image-gallery"></output>
                                    </div>
                                </div>
                            -->
                            </div>
                            <div class="box submit_box">
                                <input class="btn btn-primary text-center" name="add_car" type="submit" value="ارسال الطلب">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
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