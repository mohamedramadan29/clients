<div class="container-fluid">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=client_dashboard"> لوحة تحكم الضيوف </a> <i class="fa fa-chevron-left"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page">نموذج طلب عقد إعداد تقرير محاسبي</li>
                </ol>
            </nav>
        </div>

        <div class="myform">

            <!-- ********************** END CODE ********************** -->
            <form id="add_form" class="form-group ajax_form message_form" action="main_ajax.php?dir=clients/accounting_report&page=ajax_add" method="POST" autocomplete="on" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-lg-9">
                        <div class="form-data">
                            <div class="alert alert-info">فضلا أدخل بيانات العميل بدقة لنتمكن من دراسة الطلب وتقديم الخدمة بشكل صحيح</div>
                            <div class="box2">
                                <label id="name"> اســـم العميـــــــــل <span> * </span> </label>
                                <input required class="form-control" type="text" id="ar_client_name" name="ar_client_name" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['ar_client_name']; ?>">
                            </div>
                            <div class="box2">
                                <label id="name_en">الـكـيـان الـقـانـونـي<span> * </span></label>
                                <select  name="ar_legal" class="form-control" id="ar_legal">
                                    <option value=""> -- اختر الكيان الـقـانـونـي -- </option>
                                    <?php
                                    if (($_SERVER["REQUEST_METHOD"] == "POST")) { ?>
                                        <option selected value="<?php $_REQUEST['ar_legal'] ?>"> <?php echo $_REQUEST['ar_legal'] ?> </option>
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
                                <input id="ar_account_num" required class="form-control" type="text" name="ar_account_num" placeholder=" رقم السجل التجاري 10 ارقام " value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['ar_account_num']; ?>">

                            </div>
                            <div class="box2">
                                <label id="car_model"> اسـم مـديـر المنشأة <span> * </span></label>
                                <input id="ar_manager_name" required class="form-control" type="text" name="ar_manager_name" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['ar_manager_name']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_model">رقم جوال المـديـر <span> * </span></label>
                                <input id="ar_manager_phone" required class="form-control" type="text" placeholder=" رقم جوال المدير يجب ان يكون 10 ارقام" name="ar_manager_phone" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['ar_manager_phone']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_pricepay">البريد الإلكتروني للعميل<span> * </span> </label>
                                <input id="ar_client_email" required class="form-control" type="email" name="ar_client_email" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['ar_client_email']; ?>">
                            </div>
                            <div class="box">
                                <label id="car_pricerent"> أذكرسبب طلب الخدمة <span> * </span></label>
                                <textarea id="ar_serv_reason" required name="ar_serv_reason" placeholder="حدد الغرض والسبب من طلب التقرير بالتفصيل، وجود شك جنائي ، التأكد من صحة النظام المالي للمنشأة، إلخ" class="form-control"><?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['ar_serv_reason']; ?></textarea>
                            </div>
                            <div class="box">
                                <label id="car_pricerent"> النطاق المستندي <span> * </span></label>
                                <textarea id="ar_doc_scop" required name="ar_doc_scop" placeholder="حدد نوع ووصف للمستندات التي سيتم تقديمها إلينا كمكتب" class="form-control"><?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['ar_doc_scop']; ?></textarea>
                            </div>
                            <div class="box2">
                                <label id="car_pricepay"> النطاق الزمني <span> * </span> </label>
                                <br>
                                <label id="car_pricepay">أقــدم مستند كان بتاريخ<span> * </span> </label>
                                <input id="ar_old_doc" required class="form-control" type="date" name="ar_old_doc" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['ar_old_doc']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_pricepay">أحدث مستند كان بتاريخ<span> * </span> </label>
                                <input id="ar_new_doc" required class="form-control" type="date" name="ar_new_doc" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['ar_new_doc']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_pricepay"> أعدها <span> * </span> </label>
                                <input id="ar_prepare" required class="form-control" type="text" placeholder="فضلا ضع اسمك هنا" name="ar_prepare" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['ar_prepare']; ?>">
                            </div>
                            <div class="box2">
                                <label id="car_pricepay"> تاريخ الإعداد <span> * </span> </label>
                                <input id="ar_prepare_date" required class="form-control" type="date" name="ar_prepare_date" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_REQUEST['ar_prepare_date']; ?>">
                            </div>
                            <!--
                            <div class="box">
                                <label> المستندات المؤيدة للطلب (المرفقات) <span> * </span> </label>
                                <div class="check_prototype_resualt">
                                    <div class="box mb-3">
                                        <div class="upload-file">
                                            <div class="upload-wrapper">
                                                <label>
                                                    <input type="file" name="files[]" id="files" multiple>
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
                            </div>
                                -->
                            <div class="box">
                                <div class="dropzone" id="myDropzone1"></div>
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
                                <li>اضغط على الرابط للتحقق من آخر سنة مودعة على منصة قوائم</li>
                                <li> <a target="_blank" href="https://qawaem.mc.gov.sa/eng/crenquiry.aspx"> المركز السعودي للاعمال </a></li>
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
