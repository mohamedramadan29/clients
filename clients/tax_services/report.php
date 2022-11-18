<div class="container-fluid customer_report">
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
                <a href="main.php?dir=clients/tax_services&page=add">عقد ارتباط لخدمة زكاة وضرائب جديد</a> <i class="fa fa-plus"></i>
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
                    $stmt = $connect->prepare('SELECT * FROM tax_report  WHERE user_id=?');
                    $stmt->execute(array($_SESSION['client_id']));
                    $alltype = $stmt->fetchAll();
                    foreach ($alltype as $tax_data) { ?> <tr>
                        <td><?php echo $tax_data['tax_client_name']; ?> </td>
                        <td><?php echo $tax_data['tax_legal']; ?> </td>
                        <td> <?php echo $tax_data['tax_account_num']; ?> </td>
                        <td> <?php echo $tax_data['tax_manager_name']; ?> </td>
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#viewrecord<?php echo $tax_data['tax_id']; ?>">
                                <i class="fa fa-eye"></i>
                            </button>
                            <a class="btn btn-primary" href="main.php?dir=clients/tax_services&page=edit&tax_id=<?php echo $tax_data['tax_id']; ?> ">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a class="confirm btn btn-danger" href="main.php?dir=clients/tax_services&page=delete&tax_id=<?php echo $tax_data['tax_id']; ?> ">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr> <?php
                            ?>
                    <!-- START MODEL TO Edit RECORD  -->
                    <!-- START MODEL VIEW  -->
                    <div class="modal fade" id="viewrecord<?php echo $tax_data['tax_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">مشاهدة التقرير</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="data">

                                        <div class="myform">
                                            <!-- ********************** END CODE ********************** -->
                                            <form id="edit_form" class="form-group message_form ajax_form" action="main_ajax.php?dir=clients/tax_services&page=ajax_edit" method="POST" autocomplete="on" enctype="multipart/form-data">
                                                <div class="row">
                                                    <input required class="form-control" type="hidden" name="tax_id" value="<?php echo $tax_id ?>">
                                                    <div class="form-data">

                                                        <div class="box2">
                                                            <label id="name"> اســـم العميـــــــــل <span> * </span> </label>
                                                            <input required class="form-control" type="text" name="tax_client_name" value="<?php echo $tax_data['tax_client_name']; ?>">
                                                        </div>
                                                        <div class="box2">
                                                            <label id="name_en">الـكـيـان الـقـانـونـي<span> * </span></label>
                                                            <select name="tax_legal" class="form-control" id="">
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
                                                            <label id="car_model">رقم السجل التجاري<span> * </span></label>
                                                            <input required class="form-control" type="text" name="tax_account_num" placeholder=" رقم السجل التجاري 10 ارقام " value="<?php echo $tax_data['tax_account_num']; ?>">
                                                        </div>
                                                        <div class="box">
                                                            <label id="car_model">نوع نظام الحسابات لدى هيئة الزكاة والضريبة والجمارك <span> * </span></label>
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
                                                        <div class="box">
                                                            <label id="car_pricepay">وضح بداية ونهاية السنة المالية لدى هيئة الزكاة <span> * </span> </label>
                                                        </div>
                                                        <div class="box2">
                                                            <label id="car_pricepay"> تـبــــدأ مــــن <span> * </span> </label>
                                                            <input required class="form-control" type="date" name="tax_year_start" value="<?php echo $tax_data['tax_year_start'];  ?>">
                                                        </div>
                                                        <div class="box2">
                                                            <label id="car_pricepay"> تـــنـــتــــهــــي فـــي <span> * </span> </label>
                                                            <input required class="form-control" type="date" name="tax_year_end" value="<?php echo $tax_data['tax_year_end'];  ?>">
                                                        </div>
                                                        <div class="box">
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

                                                        <div class="box">
                                                            <label id="name_en"> اضافة خدمة <span> * </span></label>
                                                            <select name="tax_add_serv" class="form-control" id="">
                                                                <option value=""> -- حدد نوع الخدمة -- </option>
                                                                <option <?php if ($tax_data['tax_serv_type'] == 'تقديم إقرارت زكوية أو ضريبة دخل') echo 'selected' ?> value="تقديم إقرارت زكوية أو ضريبة دخل"> تقديم إقرارت زكوية أو ضريبة دخل </option>
                                                                <option <?php if ($tax_data['tax_serv_type'] == 'تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة') echo 'selected' ?> value="تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة">تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة</option>
                                                                <option <?php if ($tax_data['tax_serv_type'] == 'شطب ملف المنشأة لدى هيئة الزكاة والضريبة') echo 'selected' ?> value="شطب ملف المنشأة لدى هيئة الزكاة والضريبة"> شطب ملف المنشأة لدى هيئة الزكاة والضريبة </option>
                                                                <option <?php if ($tax_data['tax_serv_type'] == 'تعديل إقرارت زكوية أوضريبية') echo 'selected' ?> value="تعديل إقرارت زكوية أوضريبية">تعديل إقرارت زكوية أوضريبية</option>
                                                                <option <?php if ($tax_data['tax_serv_type'] == 'الاعتراض على ربط صادر من هيئة الزكاة والضريبة') echo 'selected' ?> value="الاعتراض على ربط صادر من هيئة الزكاة والضريبة"> الاعتراض على ربط صادر من هيئة الزكاة والضريبة </option>
                                                            </select>

                                                        </div>

                                                        <div class="box">
                                                            <label id="car_pricerent"> أذكرسبب طلب الخدمة <span> * </span></label>
                                                            <textarea required name="tax_serv_reason" placeholder=" اذكر التفاصيل " class="form-control"><?php echo $tax_data['tax_serv_reason']; ?></textarea>
                                                        </div>

                                                        <div class="box2">
                                                            <label id="car_model"> السنـة/السنوات الماليـة المطلوبة <span> * </span></label>
                                                            <input required class="form-control" type="text" placeholder="افصل بين  السنة والاخري (,)" name="tax_years_required" value="<?php echo $tax_data['tax_years_required'];  ?>">
                                                        </div>
                                                        <div class="box2">
                                                            <label id="name_en">المحاسبة على الدخل<span> * </span></label>
                                                            <select name="tax_income" class="form-control" id="">
                                                                <option value=""> -- حدد المحاسبة على الدخل-- </option>
                                                                <option <?php if ($tax_data['tax_income'] == 'تتبع النظام الزكوي') echo 'selected' ?> value="تتبع النظام الزكوي">تتبع النظام الزكوي</option>
                                                                <option <?php if ($tax_data['tax_income'] == 'تتبع نظام ضريبة الدخل') echo 'selected' ?> value="تتبع نظام ضريبة الدخل"> تتبع نظام ضريبة الدخل </option>
                                                                <option <?php if ($tax_data['tax_income'] == 'مختلطة زكوي وضريبي') echo 'selected' ?> value="مختلطة زكوي وضريبي"> مختلطة زكوي وضريبي </option>
                                                            </select>
                                                        </div>
                                                        <div class="box2">
                                                            <label id="car_model">الرقم المميز بالزكاة <span> * </span></label>
                                                            <input required class="form-control" type="text" name="tax_uniq_num" value="<?php echo $tax_data['tax_uniq_num']; ?>">
                                                        </div>
                                                        <div class="box">
                                                            <label id="car_model"> هل أفاد العميل بإصدار قوائم مالية سابقة له؟ <span> * </span></label>
                                                            <div class="check_box_items">
                                                                <div class="form-check">
                                                                    <input required class="form-check-input" type="radio" name="tax_client_prev" id="tax_client_prev1" value="نعم" <?php if ($tax_data['tax_client_prev'] == 'نعم') echo 'checked'; ?>>
                                                                    <label class="form-check-label" for="tax_client_prev1">
                                                                        نعم
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input required class="form-check-input" type="radio" name="tax_client_prev" id="tax_client_prev2" value="لا" <?php if ($tax_data['tax_client_prev'] == 'لا') echo 'checked'; ?>>
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
                                                                }
                                                            });
                                                            checkbox2.addEventListener("change", () => {
                                                                if (checkbox2.checked) {
                                                                    $("#checked_input").css("display", "none");
                                                                }
                                                            });
                                                        </script>
                                                        <div class="box2" id="checked_input">
                                                            <label id="car_model"> آخر قوائم مودعة لعام </label>
                                                            <input class="form-control" type="text" name="tax_client_prev_year" value="<?php echo $tax_data['tax_client_prev_year']; ?>">
                                                        </div>
                                                        <div class="box">
                                                            <label id="car_model"> في حال الإجابة أعلاه (بنعم) يرجى إلزامياً توفير صورة من القوائم المالية <span> * </span></label>
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
                                                        <div class="box">
                                                            <label id="car_model"> هل تم التحقق من موقع قوائم عن آخر قوائم مالية صادرة؟ <span> * </span></label>
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
                                                        <div class="box">
                                                            <label id="car_model"> هل محاسب العميل لديه خبرة ومعرفة في توفير أي مستندات أو معلومات إضافية؟ <span> * </span></label>
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
                                                        <div class="box2">
                                                            <label id="car_model"> اسـم المدير </label>
                                                            <input class="form-control" type="text" name="tax_manager_name" value="<?php echo $tax_data['tax_manager_name']; ?>">
                                                        </div>
                                                        <div class="box2">
                                                            <label id="car_model">رقم جوال المـديـر </label>
                                                            <input class="form-control" type="text" placeholder=" رقم جوال المدير يجب ان يكون 10 ارقام" name="tax_manager_phone" value=" <?php echo $tax_data['tax_manager_phone']; ?>">
                                                        </div>
                                                        <div class="box2">
                                                            <label id="car_pricepay">البريد الإلكتروني للمدير </label>
                                                            <input class="form-control" type="email" name="tax_manager_email" value="<?php echo $tax_data['tax_manager_email']; ?>">
                                                        </div>
                                                        <div class="box2">
                                                            <label id="car_model">اسم المحاسب </label>
                                                            <input class="form-control" type="text" name="tax_accounter_name" value="<?php echo $tax_data['tax_accounter_name']; ?>">
                                                        </div>
                                                        <div class="box2">
                                                            <label id="car_model">رقم جوال المحاسب </label>
                                                            <input class="form-control" type="text" placeholder=" رقم جوال المحاسب يجب ان يكون 10 ارقام" name="tax_accounter_phone" value="<?php echo $tax_data['tax_accounter_phone']; ?>">
                                                        </div>
                                                        <div class="box2">
                                                            <label id="car_pricepay">البريد الإلكتروني للمحاسب </label>
                                                            <input class="form-control" type="email" name="tax_accounter_email" value="<?php echo $tax_data['tax_accounter_email']; ?> ">
                                                        </div>
                                                        <div class="box2">
                                                            <label id="car_pricepay"> أعدها <span> * </span> </label>
                                                            <input required class="form-control" type="text" placeholder="فضلا ضع اسمك هنا" name="tax_prepare" value="<?php echo $tax_data['tax_prepare']; ?>">
                                                        </div>
                                                        <div class="box2">
                                                            <label id="car_pricepay"> تاريخ الإعداد <span> * </span></label>
                                                            <input required class="form-control" type="date" name="tax_prepare_date" value="<?php echo $tax_data['tax_prepare_date']; ?>">
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