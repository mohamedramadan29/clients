<div class="container customer_report">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=client_dashboard"> لوحة تحكم الضيوف </a> <i class="fa fa-chevron-left"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page">مشاهدة العقود </li>
                </ol>
            </nav>
        </div>
        <!-------------------------- START NEW WHATSAPP MEMEBER------------------------->
        <!-- Content Row -->
        <!-- START MODEL TO ADD NEW RECORD  -->
    </div>
    <!-- END RECORD TO EDIT NEW RECORD  -->

    <div class="table-responsive">
        <div class="add_new_record">
            <button type="button" class="btn btn-primary btn-sm">
                <a href="main.php?dir=clients/contract_request&page=add"> نموذج طلب عقد إرتباط مراجعة جديد </a> <i class="fa fa-plus"></i>
            </button>
        </div>
        <table id="tableone" class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>اسم العميـــــــــل</th>
                    <th> الكيان الـقـانـونـي </th>
                    <th> رقم السجل التجاري </th>
                    <th> اسم المالك/المدير </th>
                    <th> </th>
                </tr>
            </thead>
            <tbody> <?php
                    $stmt = $connect->prepare('SELECT * FROM contract_report WHERE user_id=?');
                    $stmt->execute(array($_SESSION['client_id']));
                    $alltype = $stmt->fetchAll();
                    foreach ($alltype as $con_data) { ?> <tr>
                        <td><?php echo $con_data['con_client_name']; ?> </td>
                        <td><?php echo $con_data['con_legal']; ?> </td>
                        <td> <?php echo $con_data['con_account_num']; ?> </td>
                        <td> <?php echo $con_data['con_manager_name']; ?> </td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#viewrecord<?php echo $con_data['con_id']; ?>">
                                مشاهدة <i class="fa fa-eye"></i>
                            </button>
                            <a class="btn btn-primary btn-sm" href="main.php?dir=clients/contract_request&page=edit&con_id=<?php echo $con_data['con_id']; ?> ">
                                تعديل <i class="fa fa-edit"></i>
                            </a>
                            <a class="confirm btn btn-danger btn-sm" href="main.php?dir=clients/contract_request&page=delete&con_id=<?php echo $con_data['con_id']; ?> ">
                                حذف <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr> <?php
                            ?>
                    <!-- START MODEL TO Edit RECORD  -->
                    <!-- START MODEL VIEW  -->
                    <div class="modal fade" id="viewrecord<?php echo $con_data['con_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">مشاهدة التقرير</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="data">

                                        <div class="myform">

                                            <!-- ********************** END CODE ********************** -->
                                            <form id="edit_form" class="form-group message_form ajax_form" action="main_ajax.php?dir=clients/contract_request&page=ajax_edit" method="POST" autocomplete="on" enctype="multipart/form-data">
                                                <input type="hidden" name="con_id" value="<?php echo $con_data["con_id"]; ?>">
                                                <div class="row"> 
                                                        <div class="form-data">

                                                            <div class="box2">
                                                                <label id="name"> اســـم العميـــــــــل <span> * </span> </label>
                                                                <input required class="form-control" type="text" name="con_client_name" value="<?php echo $con_data["con_client_name"]; ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="name_en">الـكـيـان الـقـانـونـي<span> * </span></label>
                                                                <select name="con_legal" class="form-control" id="">
                                                                    <option value=""> -- اختر الكيان الـقـانـونـي -- </option>
                                                                    <option <?php if ($con_data["con_legal"] == "مؤسسة فردية") echo "selected"; ?> value="مؤسسة فردية">مؤسسة فردية </option>
                                                                    <option <?php if ($con_data["con_legal"] == "شركة ذات مسئولية محدودة") echo "selected"; ?> value="شركة ذات مسئولية محدودة"> شركة ذات مسئولية محدودة </option>
                                                                    <option <?php if ($con_data["con_legal"] == "شركة تضامنية") echo "selected"; ?> value="شركة تضامنية"> شركة تضامنية </option>
                                                                    <option <?php if ($con_data["con_legal"] == "شركة مساهمة") echo "selected"; ?> value="شركة مساهمة"> شركة مساهمة </option>
                                                                    <option <?php if ($con_data["con_legal"] == "جهة غير هادفة للربح") echo "selected"; ?> value="جهة غير هادفة للربح"> جهة غير هادفة للربح </option>
                                                                    <option <?php if ($con_data["con_legal"] == "فردي") echo "selected"; ?> value="فردي"> فردي </option>
                                                                </select>
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_model">رقم السجل التجاري<span> * </span></label>
                                                                <input required class="form-control" type="text" name="con_account_num" placeholder=" رقم السجل التجاري 10 ارقام " value="<?php echo $con_data["con_account_num"];  ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_model">الرقم المميز بالزكاة <span> * </span></label>
                                                                <input required class="form-control" type="text" name="con_uniq_num" value="<?php echo $con_data["con_uniq_num"];  ?>">
                                                            </div>


                                                            <div class="box">
                                                                <label id="car_model">نوع نظام الحسابات لدى هيئة الزكاة والضريبة والجمارك <span> * </span></label>
                                                                <div class="check_box_items">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="con_account_type" id="flexRadioDefault1" value="حسابات نظامية" <?php if ($con_data['con_account_type'] == 'حسابات نظامية') echo 'checked'; ?>>
                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                            حسابات نظامية
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="con_account_type" id="flexRadioDefault2" value="تقديري" <?php if ($con_data['con_account_type'] == 'تقديري') echo 'checked'; ?>>
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
                                                                <input required class="form-control" type="date" name="con_year_start" value="<?php echo $con_data["con_year_start"]; ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_pricepay"> تـــنـــتــــهــــي فـــي <span> * </span> </label>
                                                                <input required class="form-control" type="date" name="con_year_end" value="<?php echo $con_data["con_year_end"]; ?>">
                                                            </div>

                                                            <div class="box">
                                                                <label id="car_pricerent">أذكرسبب الإصدار <span> * </span></label>
                                                                <textarea required name="con_reason" placeholder=" اذكر التفاصيل " class="form-control"><?php echo $con_data["con_reason"]; ?></textarea>
                                                            </div>

                                                            <div class="box2">
                                                                <label id="car_model"> السنـة/السنوات الماليـة المطلوبة <span> * </span></label>
                                                                <input required class="form-control" type="text" placeholder="افصل بين  السنة والاخري (,)" name="con_years_required" value="<?php echo $con_data["con_years_required"];   ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_model">سنة المقارنة إن وجد<span> * </span></label>
                                                                <input required class="form-control" type="text" name="con_comparison_year" value="<?php echo $con_data["con_comparison_year"]; ?>">
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
                                                                    <option <?php if ($con_data['con_income'] == 'تتبع النظام الزكوي') echo 'selected' ?> value="تتبع النظام الزكوي">تتبع النظام الزكوي</option>
                                                                    <option <?php if ($con_data['con_income'] == 'تتبع نظام ضريبة الدخل') echo 'selected' ?> value="تتبع نظام ضريبة الدخل"> تتبع نظام ضريبة الدخل </option>
                                                                    <option <?php if ($con_data['con_income'] == 'مختلطة زكوي وضريبي') echo 'selected' ?> value="مختلطة زكوي وضريبي"> مختلطة زكوي وضريبي </option>
                                                                </select>
                                                            </div>
                                                            <div class="box">
                                                                <label id="car_model"> هل أفاد العميل بإصدار قوائم مالية سابقة له؟ <span> * </span></label>
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
                                                            <div class="box" id="checked_input">
                                                                <label id="car_model"> آخر قوائم مودعة لعام </label>
                                                                <input class="form-control" type="text" name="con_client_prev_year" value="<?php echo $con_data['con_client_prev_year'] ?>">
                                                            </div>
                                                            <div class="box" id="checked_input2">
                                                                <label id="car_model">اختر اسم مكتب المحاسب القانوني الذي أصدر القوائم المالية</label>
                                                                <input class="form-control" type="text" name="con_office_name_prev" value="<?php echo $con_data['con_office_name_prev'] ?>">
                                                            </div>
                                                            <div class="box">
                                                                <label id="car_model"> في حال الإجابة أعلاه (بنعم) يرجى إلزامياً توفير صورة من القوائم المالية <span> * </span></label>
                                                                <div class="check_box_items">
                                                                    <div class="form-check">
                                                                        <input required class="form-check-input" type="radio" name="con_client_prev_img" id="tax_client_prev_img1" value="تم" <?php if ($con_data['con_client_prev_img'] == 'تم') echo 'checked'; ?>>
                                                                        <label class="form-check-label" for="tax_client_prev_img1">
                                                                            تم
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input required class="form-check-input" type="radio" name="con_client_prev_img" id="tax_client_prev_img2" value="لا ينطبق" <?php if ($con_data['con_client_prev_img'] == 'لا ينطبق') echo 'checked'; ?>>
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
                                                                        <input required class="form-check-input" type="radio" name="con_verify_website" id="tax_verify_website1" value="نعم" <?php if ($con_data['con_verify_website'] == 'نعم') echo 'checked'; ?>>
                                                                        <label class="form-check-label" for="tax_verify_website1">
                                                                            تم
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input required class="form-check-input" type="radio" name="con_verify_website" id="tax_verify_website2" value="لا ينطبق" <?php if ($con_data['con_verify_website'] == 'لا ينطبق') echo 'checked'; ?>>
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
                                                                        <input required class="form-check-input" type="radio" name="com_revision_prog" id="tax_client_account_rev1" value="نعم" <?php if ($con_data['com_revision_prog'] == 'نعم') echo 'checked'; ?>>
                                                                        <label class="form-check-label" for="tax_client_account_rev1">
                                                                            نعم
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input required class="form-check-input" type="radio" name="com_revision_prog" id="tax_client_account_rev2" value="لا ينطبق" <?php if ($con_data['com_revision_prog'] == 'لا ينطبق') echo 'checked'; ?>>
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
                                                                        <input required class="form-check-input" type="radio" name="con_client_account_exer" id="tax_client_account_exer1" value="نعم" <?php if ($con_data['con_client_account_exer'] == 'نعم') echo 'checked'; ?>>
                                                                        <label class="form-check-label" for="tax_client_account_exer1">
                                                                            نعم
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input required class="form-check-input" type="radio" name="con_client_account_exer" id="tax_client_account_exer2" value="لا ينطبق" <?php if ($con_data['con_client_account_exer'] == 'لا ينطبق') echo 'checked'; ?>>
                                                                        <label class="form-check-label" for="tax_client_account_exer2">
                                                                            لا ينطبق
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="alert alert-secondary"> بيانات التواصل (اختياري) </p>
                                                            <div class="box2">
                                                                <label id="car_model"> اسـم المدير </label>
                                                                <input class="form-control" type="text" name="con_manager_name" value="<?php echo $con_data['con_manager_name'] ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_model">رقم جوال المـديـر </label>
                                                                <input class="form-control" type="text" placeholder=" رقم جوال المدير يجب ان يكون 10 ارقام" name="con_manager_phone" value="<?php echo $con_data['con_manager_phone'] ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_pricepay">البريد الإلكتروني للمدير </label>
                                                                <input class="form-control" type="email" name="con_manager_email" value="<?php echo $con_data['con_manager_email'] ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_model">اسم المحاسب </label>
                                                                <input class="form-control" type="text" name="con_accounter_name" value="<?php echo $con_data['con_accounter_name'] ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_model">رقم جوال المحاسب </label>
                                                                <input class="form-control" type="text" placeholder=" رقم جوال المحاسب يجب ان يكون 10 ارقام" name="con_accounter_phone" value="<?php echo $con_data['con_accounter_phone'] ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_pricepay">البريد الإلكتروني للمحاسب </label>
                                                                <input class="form-control" type="email" name="con_accounter_email" value="<?php echo $con_data['con_accounter_email'] ?>">
                                                            </div>

                                                            <p class="alert alert-secondary">بيانات الرفع على منصة قوائم </p>

                                                            <div class="box2">
                                                                <label id="car_pricepay"> رقم الهوية الوطنية </label>
                                                                <input class="form-control" type="text" name="con_card_num" placeholder="لازم 10 ارقام" value="<?php echo $con_data['con_card_num'] ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_pricepay">تاريخ الميلاد </label>
                                                                <input class="form-control" type="text" name="con_upload_birth" value="<?php echo $con_data['con_upload_birth'] ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_pricepay"> رقم الجوال </label>
                                                                <input class="form-control" type="text" name="con_upload_mobile" value="<?php echo $con_data['con_upload_mobile'] ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_pricepay"> البريد الالكتروني </label>
                                                                <input class="form-control" type="text" name="con_upload_email" value="<?php echo $con_data['con_upload_email'] ?>">
                                                            </div>

                                                            <p class="alert alert-secondary"> الإجراءات الفنية لتحديد الأتعاب المهنية </p>
                                                            <div class="box2">
                                                                <div class="input-group">
                                                                    <span class="input-group-text">حجم النقدية</span>
                                                                    <input type="text" aria-label="First name" name="con_fee_money" class="form-control" value="<?php echo $con_data['con_fee_money'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="box2">
                                                                <div class="input-group">
                                                                    <span class="input-group-text"> رصيد العملاء </span>
                                                                    <input type="text" aria-label="First name" name="con_fee_client" class="form-control" value="<?php echo $con_data['con_fee_client'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="box2">
                                                                <div class="input-group">
                                                                    <span class="input-group-text"> رصيد الموردين </span>
                                                                    <input type="text" aria-label="First name" name="con_fee_import" class="form-control" value="<?php echo $con_data['con_fee_import'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="box2">
                                                                <div class="input-group">
                                                                    <span class="input-group-text"> حجم الرواتب </span>
                                                                    <input type="text" aria-label="First name" name="con_fee_salary" class="form-control" value="<?php echo $con_data['con_fee_salary'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="box2">
                                                                <div class="input-group">
                                                                    <span class="input-group-text"> رصيد الإيرادات </span>
                                                                    <input type="text" aria-label="First name" name="con_fee_export" class="form-control" value="<?php echo $con_data['con_fee_export'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="box2">
                                                                <div class="input-group">
                                                                    <span class="input-group-text"> رصيد تكلفة المبيعات </span>
                                                                    <input type="text" aria-label="First name" name="con_fee_sales" class="form-control" value="<?php echo $con_data['con_fee_sales'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="box">
                                                                <div class="input-group">
                                                                    <span class="input-group-text"> الأتعاب المتوقعة بدون الضريبة </span>
                                                                    <input type="text" name="con_fee_expect" placeholder="بالريال السعودي" aria-label="First name" class="form-control" value="<?php echo $con_data['con_fee_expect'] ?>">
                                                                </div>
                                                            </div>

                                                            <p class="alert alert-secondary">هل هناك شروط خاصة حول إصدار القوائم المالية؟</p>
                                                            <div class="box">
                                                                <label id="car_model"> هل توقيت الإصدار مرتبط بمواعيد هامة مع الجهات المختصة مثل هيئة الزكاة، لجنة الإفصاح بهيئة الاستثمار، منصة بلدي للأنشطة الهندسية وغيرها <span> * </span></label>
                                                                <div class="check_box_items">
                                                                    <div class="form-check">
                                                                        <input required class="form-check-input" type="radio" name="con_export_time" id="con_export_time1" value="نعم" <?php if ($con_data['con_export_time'] == 'نعم') echo 'checked'; ?>>
                                                                        <label class="form-check-label" for="con_export_time1">
                                                                            نعم
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input required class="form-check-input" type="radio" name="con_export_time" id="con_export_time2" value="لا ينطبق" <?php if ($con_data['con_export_time'] == 'لا ينطبق') echo 'checked'; ?>>
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
                                                                        <input required class="form-check-input" type="radio" name="con_copy_eng" id="con_copy_eng1" value="نعم" <?php if ($con_data['con_copy_eng'] == 'نعم') echo 'checked'; ?>>
                                                                        <label class="form-check-label" for="con_copy_eng1">
                                                                            نعم
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input required class="form-check-input" type="radio" name="con_copy_eng" id="con_copy_eng2" value="لا ينطبق" <?php if ($con_data['con_copy_eng'] == 'لا ينطبق') echo 'checked'; ?>>
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
                                                                        <input required class="form-check-input" type="radio" name="con_copy_extra" id="con_copy_extra1" value="نعم" <?php if ($con_data['con_copy_extra'] == 'نعم') echo 'checked'; ?>>
                                                                        <label class="form-check-label" for="con_copy_extra1">
                                                                            نعم
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input required class="form-check-input" type="radio" name="con_copy_extra" id="con_copy_extra2" value="لا ينطبق" <?php if ($con_data['con_copy_extra'] == 'لا ينطبق') echo 'checked'; ?>>
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
                                                                        <input required class="form-check-input" type="radio" name="con_copy_stamp" id="con_copy_stamp1" value="نعم" <?php if ($con_data['con_copy_stamp'] == 'نعم') echo 'checked'; ?>>
                                                                        <label class="form-check-label" for="con_copy_stamp1">
                                                                            نعم
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input required class="form-check-input" type="radio" name="con_copy_stamp" id="con_copy_stamp2" value="لا ينطبق" <?php if ($con_data['con_copy_stamp'] == 'لا ينطبق') echo 'checked'; ?>>
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
                                                                        <input required class="form-check-input" type="radio" name="con_attach_stamp" id="con_attach_stamp1" value="نعم" <?php if ($con_data['con_attach_stamp'] == 'نعم') echo 'checked'; ?>>
                                                                        <label class="form-check-label" for="con_attach_stamp1">
                                                                            نعم
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input required class="form-check-input" type="radio" name="con_attach_stamp" id="con_attach_stamp2" value="لا ينطبق" <?php if ($con_data['con_attach_stamp'] == 'لا ينطبق') echo 'checked'; ?>>
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
                                                                        <input required class="form-check-input" type="radio" name="con_upload_report" id="con_upload_report1" value="نعم" <?php if ($con_data['con_upload_report'] == 'نعم') echo 'checked'; ?>>
                                                                        <label class="form-check-label" for="con_upload_report1">
                                                                            نعم
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input required class="form-check-input" type="radio" name="con_upload_report" id="con_upload_report2" value="لا ينطبق" <?php if ($con_data['con_upload_report'] == 'لا ينطبق') echo 'checked'; ?>>
                                                                        <label class="form-check-label" for="con_upload_report2">
                                                                            لا ينطبق
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="alert alert-danger"> ملاحظة: يخضع تحديد الأتعاب من قبل المكتب بناءاً على عوامل متعددة أخرى بعد دراسة حالة الطلب والموافقة عليه. </p>
                                                            <div class="box2">
                                                                <label id="car_pricepay"> أعدها <span class="star"> * </span></label>
                                                                <input required class="form-control" type="text" placeholder="فضلا ضع اسمك هنا" name="con_prepare" value="<?php echo $con_data['con_prepare'] ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_pricepay"> تاريخ الإعداد <span class="star"> * </span></label>
                                                                <input class="form-control" type="date" name="con_prepare_time" value="<?php echo $con_data['con_prepare_time'] ?>">
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
                                                        </div> 
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between">

                                    <div>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"> <i class="fa fa-close"></i> اغلاق </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END  MODEL VIEW  -->
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>