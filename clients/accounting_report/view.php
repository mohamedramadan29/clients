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
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=client_dashboard"> لوحة تحكم الضيوف </a> <i class="fa fa-chevron-left"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page">مشاهدة طلب عقد إعداد تقرير محاسبي</li>
                </ol>
            </nav>
        </div>

        <div class="myform">

            <!-- ********************** END CODE ********************** -->
            <form id="edit_form" class="form-group message_form ajax_form" action="main_ajax.php?dir=clients/accounting_report&page=ajax_edit" method="POST" autocomplete="on" enctype="multipart/form-data">
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