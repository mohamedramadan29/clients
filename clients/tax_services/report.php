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
                    $stmt = $connect->prepare('SELECT * FROM tax_report');
                    $stmt->execute();
                    $alltype = $stmt->fetchAll();
                    foreach ($alltype as $ar_data) { ?> <tr>
                        <td><?php echo $ar_data['tax_client_name']; ?> </td>
                        <td><?php echo $ar_data['tax_legal']; ?> </td>
                        <td> <?php echo $ar_data['tax_account_num']; ?> </td>
                        <td> <?php echo $ar_data['tax_manager_name']; ?> </td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#viewrecord<?php echo $ar_data['tax_id']; ?>">
                                مشاهدة <i class="fa fa-eye"></i>
                            </button>
                            <a class="btn btn-primary btn-sm" href="main.php?dir=clients/tax_services&page=edit&tax_id=<?php echo $ar_data['tax_id']; ?> ">
                                تعديل <i class="fa fa-edit"></i>
                            </a>
                            <a class="confirm btn btn-danger btn-sm" href="main.php?dir=clients/tax_services&page=delete&tax_id=<?php echo $ar_data['tax_id']; ?> ">
                                حذف <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr> <?php
                            ?>
                    <!-- START MODEL TO Edit RECORD  -->
                    <!-- START MODEL VIEW  -->
                    <div class="modal fade" id="viewrecord<?php echo $ar_data['tax_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">مشاهدة التقرير</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="data">

                                        <div class="myform">

                                            <!-- ********************** END CODE ********************** -->
                                            <form id="edit_form" class="form-group message_form ajax_form" action="main_ajax.php?dir=clients/accounting_report&page=ajax_edit" method="POST" autocomplete="on" enctype="multipart/form-data">
                                                <div class="row">
                                                    <input required class="form-control" type="hidden" name="ar_id" value="<?php echo $ar_id ?>">

                                                    <div class="col-lg-12">
                                                        <div class="form-data">

                                                            <div class="box2">
                                                                <label id="name"> اســـم العميـــــــــل <span> * </span> </label>
                                                                <input required class="form-control" type="text" name="ar_client_name" value="<?php echo $ar_data["ar_client_name"]; ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="name_en">الـكـيـان الـقـانـونـي<span> * </span></label>
                                                                <select name="ar_legal" class="form-control" id="">
                                                                    <option value=""> -- اختر الكيان الـقـانـونـي -- </option>
                                                                    <option <?php if ($ar_data["ar_legal"] == "مؤسسة فردية") echo "selected"; ?> value="مؤسسة فردية">مؤسسة فردية </option>
                                                                    <option <?php if ($ar_data["ar_legal"] == "شركة ذات مسئولية محدودة") echo "selected"; ?> value="شركة ذات مسئولية محدودة"> شركة ذات مسئولية محدودة </option>
                                                                    <option <?php if ($ar_data["ar_legal"] == "شركة تضامنية") echo "selected"; ?> value="شركة تضامنية"> شركة تضامنية </option>
                                                                    <option <?php if ($ar_data["ar_legal"] == "شركة مساهمة") echo "selected"; ?> value="شركة مساهمة"> شركة مساهمة </option>
                                                                    <option <?php if ($ar_data["ar_legal"] == "جهة غير هادفة للربح") echo "selected"; ?> value="جهة غير هادفة للربح"> جهة غير هادفة للربح </option>
                                                                    <option <?php if ($ar_data["ar_legal"] == "فردي") echo "selected"; ?> value="فردي"> فردي </option>
                                                                </select>

                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_model">رقم السجل التجاري<span> * </span></label>
                                                                <input required class="form-control" type="text" name="ar_account_num" placeholder=" رقم السجل التجاري 10 ارقام " value="<?php echo $ar_data["ar_account_num"]; ?>">

                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_model"> اسـم مـديـر المنشأة <span> * </span></label>
                                                                <input required class="form-control" type="text" name="ar_manager_name" value="<?php echo $ar_data["ar_manager_name"];  ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_model">رقم جوال المـديـر <span> * </span></label>
                                                                <input required class="form-control" type="text" placeholder=" رقم جوال المدير يجب ان يكون 10 ارقام" name="ar_manager_phone" value="<?php echo $ar_data["ar_manager_phone"];  ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_pricepay">البريد الإلكتروني للعميل<span> * </span> </label>
                                                                <input required class="form-control" type="email" name="ar_client_email" value="<?php echo $ar_data["ar_client_email"]; ?>">
                                                            </div>
                                                            <div class="box">
                                                                <label id="car_pricerent"> أذكرسبب طلب الخدمة <span> * </span></label>
                                                                <textarea required name="ar_serv_reason" placeholder="حدد الغرض والسبب من طلب التقرير بالتفصيل، وجود شك جنائي ، التأكد من صحة النظام المالي للمنشأة، إلخ" class="form-control"><?php echo $ar_data["ar_serv_reason"];  ?></textarea>
                                                            </div>
                                                            <div class="box">
                                                                <label id="car_pricerent"> النطاق المستندي <span> * </span></label>
                                                                <textarea required name="ar_doc_scop" placeholder="حدد نوع ووصف للمستندات التي سيتم تقديمها إلينا كمكتب" class="form-control"><?php echo $ar_data["ar_doc_scop"];  ?></textarea>
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_pricepay"> النطاق الزمني <span> * </span> </label>
                                                                <br>
                                                                <label id="car_pricepay">أقــدم مستند كان بتاريخ<span> * </span> </label>
                                                                <input required class="form-control" type="date" name="ar_old_doc" value="<?php echo $ar_data["ar_old_doc"];  ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_pricepay">أحدث مستند كان بتاريخ<span> * </span> </label>
                                                                <input required class="form-control" type="date" name="ar_new_doc" value="<?php echo $ar_data["ar_new_doc"];  ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_pricepay"> أعدها <span> * </span> </label>
                                                                <input required class="form-control" type="text" placeholder="فضلا ضع اسمك هنا" name="ar_prepare" value="<?php echo $ar_data["ar_prepare"];  ?>">
                                                            </div>
                                                            <div class="box2">
                                                                <label id="car_pricepay"> تاريخ الإعداد <span> * </span> </label>
                                                                <input required class="form-control" type="date" name="ar_prepare_date" value="<?php echo $ar_data["ar_prepare_date"];  ?>">
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