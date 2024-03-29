<div class="container-fluid">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">

                <ol class="breadcrumb">
                    <?php
                    if (isset($_SESSION['client_id'])) { ?>
                        <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=client_dashboard"> لوحة تحكم الضيوف </a> <i class="fa fa-chevron-left"></i> </li>
                    <?php
                    } else { ?>
                        <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=privlage_dashboard"> لوحة تحكم الضيوف </a> <i class="fa fa-chevron-left"></i> </li>
                    <?php
                    }
                    ?>
                    <li class="breadcrumb-item active" aria-current="page"> نموذج طلب عقد ارتباط لخدمة زكاة وضرائب </li>
                </ol>
            </nav>
        </div>

        <div class="myform">

            <!-- ********************** END CODE ********************** -->
            <form id="add_form" class="form-group message_form ajax_form" action="main_ajax.php?dir=clients/tax_services&page=ajax_add" method="POST" autocomplete="on" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-lg-9">
                        <div class="form-data">
                            <div class="alert alert-info">فضلا أدخل بيانات العميل بدقة لنتمكن من دراسة الطلب وتقديم الخدمة بشكل صحيح</div>
                            <p class="alert alert-secondary" role="alert">البيانات العامة للتحقق من العميل</p>
                            <?php
                            if (isset($_SESSION['client_id'])) { ?>
                                <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['client_id']; ?>">
                            <?php
                            } else {
                            ?>
                                <div class="box-flex">
                                    <div class="input-group input-group-sm">
                                        <span style="color: red; font-weight:bold" class="input-group-text" id="inputGroup-sizing-sm"> الضيف هو :</span>
                                        <select required name="user_id" id="user_id">
                                            <option value=""> -- اختر الضيف -- </option>
                                            <?php
                                            $stmt = $connect->prepare("SELECT  * FROM users WHERE user_type='ضيف'");
                                            $stmt->execute();
                                            $allusers = $stmt->fetchAll();
                                            foreach ($allusers as $user) {
                                            ?>
                                                <option value="<?php echo $user['user_id'] ?>"><?php echo $user['user_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>


                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">

                                        <span class="input-group-text" id="inputGroup-sizing-sm"> اســـم العميـــــــــل :</span>
                                        <input id="tax_client_name" required type="text" name="tax_client_name" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_client_name']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> الـكـيـان الـقـانـونـي :</span>
                                        <select name="tax_legal" class="form-control" id="tax_legal">
                                            <option value=""> -- اختر الكيان الـقـانـونـي -- </option>
                                            <?php
                                            if (($_SERVER["REQUEST_METHOD"] == "POST")) { ?>
                                                <option selected value="<?php $_REQUEST['tax_legal'] ?>"> <?php echo $_REQUEST['tax_legal'] ?> </option>
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
                            </div>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم السجل التجاري :</span>
                                        <input id="tax_account_num" required type="text" name="tax_account_num" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_account_num']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> الرقم الضريبي :</span>
                                        <input required type="text" id="tex_number" name="tex_number" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['con_uniq_num']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>

                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> نوع نظام الحسابات لدى هيئة الزكاة والضريبة والجمارك :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input class="form-check-input" id="tax_account_type" type="radio" name="tax_account_type" id="flexRadioDefault1" value="حسابات نظامية">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                حسابات نظامية
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="tax_account_type" type="radio" name="tax_account_type" id="flexRadioDefault2" value="تقديري">
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
                                        <input id="tax_year_start" required type="text" placeholder="من فضلك اختر التاريخ" class="datepick" name="tax_year_start" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_year_start']; ?>" />
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تـــنـــتــــهــــي فـــي :</span>
                                        <input id="tax_year_end" required type="text" placeholder="من فضلك اختر التاريخ" class="datepick" name="tax_year_end" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_year_end']; ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تحديد نوع الخدمة :</span>
                                        <select name="tax_serv_type" class="form-control" id="tax_serv_type">
                                            <option value=""> -- حدد نوع الخدمة -- </option>
                                            <?php
                                            if (($_SERVER["REQUEST_METHOD"] == "POST")) { ?>
                                                <option selected value="<?php $_REQUEST['tax_serv_type'] ?>"> <?php echo $_REQUEST['tax_serv_type'] ?> </option>
                                            <?php
                                            }
                                            ?>
                                            <option value="تقديم إقرارت زكوية أو ضريبة دخل"> تقديم إقرارت زكوية أو ضريبة دخل </option>
                                            <option value="تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة">تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة</option>
                                            <option value="شطب ملف المنشأة لدى هيئة الزكاة والضريبة"> شطب ملف المنشأة لدى هيئة الزكاة والضريبة </option>
                                            <option value="تعديل إقرارت زكوية أوضريبية">تعديل إقرارت زكوية أوضريبية</option>
                                            <option value="الاعتراض على ربط صادر من هيئة الزكاة والضريبة"> الاعتراض على ربط صادر من هيئة الزكاة والضريبة </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> اضافة خدمة </span>
                                        <select name="tax_add_serv" class="form-control" id="tax_add_serv">
                                            <option value=""> -- حدد نوع الخدمة -- </option>
                                            <?php
                                            if (($_SERVER["REQUEST_METHOD"] == "POST")) { ?>
                                                <option selected value="<?php $_REQUEST['tax_add_serv'] ?>"> <?php echo $_REQUEST['tax_add_serv'] ?> </option>
                                            <?php
                                            }
                                            ?>
                                            <option value="تقديم إقرارت زكوية أو ضريبة دخل"> تقديم إقرارت زكوية أو ضريبة دخل </option>
                                            <option value="تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة">تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة</option>
                                            <option value="شطب ملف المنشأة لدى هيئة الزكاة والضريبة"> شطب ملف المنشأة لدى هيئة الزكاة والضريبة </option>
                                            <option value="تعديل إقرارت زكوية أوضريبية">تعديل إقرارت زكوية أوضريبية</option>
                                            <option value="الاعتراض على ربط صادر من هيئة الزكاة والضريبة"> الاعتراض على ربط صادر من هيئة الزكاة والضريبة </option>
                                        </select>
                                    </div>
                                </div>
                            </div>





                            <div class="box">
                                <label id="car_pricerent"> أذكرسبب طلب الخدمة <span> * </span></label>
                                <textarea required id="tax_serv_reason" name="tax_serv_reason" placeholder=" اذكر التفاصيل " class="form-control"><?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_serv_reason']; ?></textarea>
                            </div>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> السنـة/السنوات الماليـة المطلوبة :</span>
                                        <input id="tax_years_required" required type="text" placeholder="افصل بين  السنة والاخري (,)" name="tax_years_required" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_years_required']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">المحاسبة على الدخل</span>
                                        <select name="tax_income" class="form-control" id="">
                                            <option value=""> -- حدد المحاسبة على الدخل-- </option>
                                            <?php
                                            if (($_SERVER["REQUEST_METHOD"] == "POST")) { ?>
                                                <option selected value="<?php $_REQUEST['tax_income'] ?>"> <?php echo $_REQUEST['tax_income'] ?> </option>
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
                            <div class="new_box">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">الرقم المميز بالزكاة :</span>
                                    <input id="tax_uniq_num" required type="text" name="tax_uniq_num" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_uniq_num']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>


                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> هل أفاد العميل بإصدار قوائم مالية سابقة له؟ :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tax_client_prev" id="tax_client_prev1" value="نعم">
                                            <label class="form-check-label" for="tax_client_prev1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tax_client_prev" id="tax_client_prev2" value="لا">
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
                                    <input required id="tax_client_prev_year" type="text" name="tax_client_prev_year" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_client_prev_year']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                            <div class="new_box check_box_div">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"> في حال الإجابة أعلاه (بنعم) يرجى إلزامياً توفير صورة من القوائم المالية :</span>
                                    <div class="check_box_items">
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="tax_client_prev_img" id="tax_client_prev_img" value="تم">
                                            <label class="form-check-label" for="tax_client_prev_img1">
                                                تم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="tax_client_prev_img" id="tax_client_prev_img" value="لا ينطبق">
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
                                            <input required class="form-check-input" type="radio" name="tax_verify_website" id="tax_verify_website" value="نعم">
                                            <label class="form-check-label" for="tax_verify_website1">
                                                تم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="tax_verify_website" id="tax_verify_website" value="لا ينطبق">
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
                                            <input required class="form-check-input" type="radio" name="tax_client_account_exer" id="tax_client_account_exer" value="نعم">
                                            <label class="form-check-label" for="tax_client_account_exer1">
                                                نعم
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="tax_client_account_exer" id="tax_client_account_exer" value="لا ينطبق">
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
                                        <input id="tax_manager_name" type="text" name="tax_manager_name" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_manager_name']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم جوال المـديـر :</span>
                                        <input id="tax_manager_phone" type="text" placeholder="10 ارقام" name="tax_manager_phone" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_manager_phone']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> البريد الإلكتروني للمدير :</span>
                                        <input id="tax_manager_email" type="email" name="tax_manager_email" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_manager_email']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> اسم المحاسب :</span>
                                        <input id="tax_accounter_name" type="text" name="tax_accounter_name" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_accounter_name']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> رقم جوال المحاسب :</span>
                                        <input id="tax_accounter_phone" type="text" placeholder="10 ارقام" name="tax_accounter_phone" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_accounter_phone']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> البريد الإلكتروني للمحاسب :</span>
                                        <input id="tax_accounter_email" type="email" name="tax_accounter_email" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_accounter_email']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="box-flex">
                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">أعدها :</span>
                                        <input id="tax_prepare" required type="text" placeholder="فضلا ضع اسمك هنا" name="tax_prepare" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_prepare']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>

                                <div class="new_box">
                                    <div class="input-group input-group-sm ">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تاريخ الإعداد :</span>
                                        <input id="tax_prepare_date" type="text" placeholder="من فضلك اختر التاريخ" class="datepick" name="tax_prepare_date" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['tax_prepare_date']; ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="box">
                                <label> المستندات المؤيدة للطلب (المرفقات) <span> * </span> </label>
                                <div class="box">
                                    <div class="dropzone" id="myDropzone3"></div>
                                </div>
                                <!--
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
                                                  <h2 class="mb-0"> المفات المرفوعه </h2> 
                                            </div>
                                        </div>
                                        <output id="image-gallery"></output>
                                    </div>
                                </div>
                            -->
                            </div>
                            <div class="box submit_box">
                                <input id="submit-all" class="btn btn-primary text-center" name="add_car" type="submit" value="ارسال الطلب">
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
                                <li> إرفاق شهادة تسجيل المنشأة لدى هيئة الزكاة والضريبة والجمارك (سواء تقديري أو حسابات نظامية).</li>
                                <li>إرفاق جميع المستندات الداعمة التي تخص موضوع طلب الخدمة.</li>
                            </ul>
                            <h4> مواقع تهمك !! </h4>
                            <ul>
                                <li>اضغط على الرابط للتحقق من بيانات السجل</li>
                                <li> <a target="_blank" href="https://mc.gov.sa/ar/eservices/Pages/Commercial-data.aspx"> وزارة التجارة </a> </li>
                                <li> اضغط على الرابط للتحقق من بيانات السنة المالية </li>
                                <li> <a target="_blank" href="https://login.gazt.gov.sa/irj/portal?ume.logon.locale=ar&login=X"> هيئة الزكاة والضريبة </a></li>
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