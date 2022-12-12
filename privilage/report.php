<div class="container-fluid customer_report">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=dashboard"> <?php echo  $website_title; ?></a> <i class="fa fa-chevron-left"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page"> مشاهدة الصلاحيات </li>
                </ol>
            </nav>
        </div>
        <!-------------------------- START NEW WHATSAPP MEMEBER------------------------->
        <!-- Content Row -->
        <!-- START MODEL TO ADD NEW RECORD  -->
        <!-- Modal -->
        <div class="modal fade" id="addrecord" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between">
                        <div>
                            <h5 class="modal-title" id="exampleModalLabel"> اضافة صلاحيات جديدة </h5>
                        </div>
                        <div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="myform">
                            <form id="add_form" class="form-group insert ajax_form" action="main_ajax.php?dir=privilage&page=add" method="POST" autocomplete="on" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="box">
                                            <label id="name"> اختر المسمي الوظيفي
                                                <span> * </span> </label>
                                            <select class="form-control" name="priv_users">
                                                <option value=""> -- اختر المسمي الوظيفي -- </option>
                                                <option value="المالك"> المالك </option>
                                                <option value="مشرف إداري"> مشرف إداري </option>
                                                <option value="مساعد إداري"> مساعد إداري </option>
                                                <option value="مدير مراجعة"> مدير مراجعة </option>
                                                <option value="مراجع"> مراجع </option>
                                                <option value="مشرف جودة">مشرف جودة</option>
                                                <option value="عميل مباشر"> عميل مباشر </option>
                                                <option value="ضيف">ضيف</option>
                                            </select>
                                        </div>
                                        <p class="alert alert-default-secondary"> الصلاحيات </p>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_show" type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">عرض لوحة الصلاحيات</label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_edit" type="checkbox" id="flexSwitchCheckDefault2">
                                                <label class="form-check-label" for="flexSwitchCheckDefault2"> تحرير لوحة الصلاحيات </label>
                                            </div>
                                        </div>
                                        <p class="alert alert-default-secondary"> المستخدمين </p>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_show_users" type="checkbox" id="flexSwitchCheckDefault3">
                                                <label class="form-check-label" for="flexSwitchCheckDefault3"> استعراض قائمة المستخدمين </label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_edit_users" type="checkbox" id="flexSwitchCheckDefault4">
                                                <label class="form-check-label" for="flexSwitchCheckDefault4"> انشاء وتعديل حسابات المستخدمين </label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_arrive_branch" type="checkbox" id="flexSwitchCheckDefault5">
                                                <label class="form-check-label" for="flexSwitchCheckDefault5"> الوصول إلى كل الفروع </label>
                                            </div>
                                        </div>
                                        <p class="alert alert-default-secondary"> إدارة المهام1 </p>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_create_report" type="checkbox" id="flexSwitchCheckDefault6">
                                                <label class="form-check-label" for="flexSwitchCheckDefault6"> انشاء النماذج (طلب مراجعة،تقارير مالية،زكاة وضرائب) </label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_show_attach" type="checkbox" id="flexSwitchCheckDefault7">
                                                <label class="form-check-label" for="flexSwitchCheckDefault7">استعراض النماذج والمرفقات</label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_agree_refuse_serv" type="checkbox" id="flexSwitchCheckDefault8">
                                                <label class="form-check-label" for="flexSwitchCheckDefault8">لموافقة والرفض لنماذج طلب الخدمة</label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_edit_report" type="checkbox" id="flexSwitchCheckDefault9">
                                                <label class="form-check-label" for="flexSwitchCheckDefault9"> التعديل على نماذج الخدمات </label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_confirm_report" type="checkbox" id="flexSwitchCheckDefault10">
                                                <label class="form-check-label" for="flexSwitchCheckDefault10"> تأكيد إرسال العقد </label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_confirm_receive_money" type="checkbox" id="flexSwitchCheckDefault11">
                                                <label class="form-check-label" for="flexSwitchCheckDefault11"> تأكيد التحقق من استلام الاتعاب وتوقيع العقد </label>
                                            </div>
                                        </div>
                                        <p class="alert alert-default-secondary"> استعراض وتعبئة مذكرة التخطيط </p>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_finish_ref" type="checkbox" id="flexSwitchCheckDefault12">
                                                <label class="form-check-label" for="flexSwitchCheckDefault12"> تأكيد الانتهاء من أعمال المراجعة </label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_serv_start" type="checkbox" id="flexSwitchCheckDefault13">
                                                <label class="form-check-label" for="flexSwitchCheckDefault13"> تأكيد إصدار الخدمة </label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_upload_mon" type="checkbox" id="flexSwitchCheckDefault14">
                                                <label class="form-check-label" for="flexSwitchCheckDefault14"> تأكيد رفع على منصة قوائم </label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_show_all_report" type="checkbox" id="flexSwitchCheckDefault15">
                                                <label class="form-check-label" for="flexSwitchCheckDefault15"> استعراض التقارير الشاملة </label>
                                            </div>
                                        </div>
                                        <p class="alert alert-default-secondary"> ملف المراجعة </p>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_show_edit_prev" type="checkbox" id="flexSwitchCheckDefault16">
                                                <label class="form-check-label" for="flexSwitchCheckDefault16"> عرض وانشاء وتعديل وحذف نماذج ملفات المراجعة </label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_edit_clients" type="checkbox" id="flexSwitchCheckDefault17">
                                                <label class="form-check-label" for="flexSwitchCheckDefault17"> تعديل بيانات العميل </label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_edit_accounts" type="checkbox" id="flexSwitchCheckDefault18">
                                                <label class="form-check-label" for="flexSwitchCheckDefault18"> تعديل دليل الحسابات </label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_change_refuson_team" type="checkbox" id="flexSwitchCheckDefault19">
                                                <label class="form-check-label" for="flexSwitchCheckDefault19">تغيير وتعديل فريق المراجعة</label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_paper_work" type="checkbox" id="flexSwitchCheckDefault20">
                                                <label class="form-check-label" for="flexSwitchCheckDefault20"> تعبئة ورقة العمل </label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_paper_revision" type="checkbox" id="flexSwitchCheckDefault21">
                                                <label class="form-check-label" for="flexSwitchCheckDefault21"> مراجعة ورقة العمل </label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_paper_start_work" type="checkbox" id="flexSwitchCheckDefault22">
                                                <label class="form-check-label" for="flexSwitchCheckDefault22"> اعتماد ورقة العمل </label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_paper_end_archieve" type="checkbox" id="flexSwitchCheckDefault23">
                                                <label class="form-check-label" for="flexSwitchCheckDefault23"> الاكتمال والأرشفة </label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="priv_paper_edit_delete_add" type="checkbox" id="flexSwitchCheckDefault24">
                                                <label class="form-check-label" for="flexSwitchCheckDefault24"> إضافة وتعديل وحذف إجراء مراجعة في ورقة عمل </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box submit_box">
                                        <input class="btn btn-outline-primary btn-sm" name="add_car" type="submit" value=" اضافه صلاحيات جديدة ">
                                    </div>
                                </div>
                        </div>
                        </form>
                        <!-- START RESPONSE SPACE  -->
                        <!-- area to display a message after completion of upload -->
                        <div class="text-center" id='status'></div>
                        <br>
                        <!-- END RESPONSE SPACE  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END RECORD TO EDIT NEW RECORD  -->
    <div class="table-responsive">
        <div class="add_new_record">
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addrecord">
                اضف صلاحيات جديدة <i class="fa fa-plus"></i>
            </button>
        </div>
        <table id="tableone" class="table table-light table-striped table-hover table-bordered">
            <thead>
                <?php
                $stmt = $connect->prepare('SELECT * FROM privilage');
                $stmt->execute();
                $alltype = $stmt->fetchAll(); ?>
                <tr>
                    <th> نوع الاجراء </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <th> <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editrecord<?php echo $type['priv_id']; ?>"> <?php echo $type['priv_users']; ?></button> </th>

                    <?php
                    }
                    ?>
                    <th> </th>
                </tr>
            </thead>
            <tbody class="priv_custome"> 
                <!--------------------------------------------->
                <form action="main_ajax.php?dir=privilage&page=edit" name="tesformaction" method="POST" id="tesformaction" enctype="multipart/form-data">
                <?php
                                            $stmt = $connect->prepare('SELECT * FROM privilage');
                                            $stmt->execute();
                                            $alltype = $stmt->fetchAll(); ?>
                <tr>
                    <th>عرض لوحة الصلاحيات</th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td><?php
                            if ($type['priv_show'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_show">

                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_show">
                            <?php
                            }  ?>
                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th> تحرير لوحة الصلاحيات </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>
                            <?php
                            if ($type['priv_edit'] == "نعم") {
                            ?>
                                <input id='ckPump' type="checkbox" checked name="priv_edit" onclick='submitPump()'>
                                <p> hassan </p>
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_edit">
                            <?php
                            }  ?>
                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>استعراض قائمة المستخدمين </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>
                            <?php
                            if ($type['priv_show_users'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_show_users">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_show_users">
                            <?php
                            }  ?>
                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th> انشاء وتعديل حسابات المستخدمين </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>

                            <?php
                            if ($type['priv_edit_users'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_edit_users">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_edit_users">
                            <?php
                            }  ?>
                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th> الوصول إلى كل الفروع </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>

                            <?php
                            if ($type['priv_arrive_branch'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_arrive_branch">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_arrive_branch">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>انشاء النماذج</th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>

                            <?php
                            if ($type['priv_create_report'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_create_report">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_create_report">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th> استعراض النماذج والمرفقات </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>

                            <?php
                            if ($type['priv_show_attach'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_show_attach">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_show_attach">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th> الموافقة والرفض لنماذج طلب الخدمة </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>
                            <?php
                            if ($type['priv_agree_refuse_serv'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_agree_refuse_serv">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_agree_refuse_serv">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th> التعديل على نماذج الخدمات </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>
                            <?php
                            if ($type['priv_edit_report'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_edit_report">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_edit_report">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>

                <tr>
                    <th> تأكيد إرسال العقد </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>

                            <?php
                            if ($type['priv_confirm_report'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_confirm_report">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_confirm_report">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>

                <tr>
                    <th> تأكيد التحقق من استلام الاتعاب وتوقيع العقد </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>
                            <?php
                            if ($type['priv_confirm_receive_money'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_confirm_receive_money">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_confirm_receive_money">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>

                <tr>
                    <th> تأكيد الانتهاء من أعمال المراجعة </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>

                            <?php
                            if ($type['priv_finish_ref'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_finish_ref">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_finish_ref">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th> تأكيد إصدار الخدمة </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>
                            <?php
                            if ($type['priv_serv_start'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_serv_start">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_serv_start">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>

                <tr>
                    <th> تأكيد رفع على منصة قوائم </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>

                            <?php
                            if ($type['priv_upload_mon'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_upload_mon">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_upload_mon">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>

                <tr>
                    <th> استعراض التقارير الشاملة </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>

                            <?php
                            if ($type['priv_show_all_report'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_show_all_report">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_show_all_report">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>

                <tr>
                    <th> عرض وانشاء وتعديل وحذف نماذج ملفات المراجعة </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>

                            <?php
                            if ($type['priv_show_edit_prev'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_show_edit_prev">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_show_edit_prev">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>

                <tr>
                    <th> تعديل بيانات العميل </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>
                            <?php
                            if ($type['priv_edit_clients'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_edit_clients">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_edit_clients">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>

                <tr>
                    <th>تعديل دليل الحسابات</th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>

                            <?php
                            if ($type['priv_edit_accounts'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_edit_accounts">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_edit_accounts">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th> تغيير وتعديل فريق المراجعة </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>

                            <?php
                            if ($type['priv_change_refuson_team'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_change_refuson_team">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_change_refuson_team">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>

                <tr>
                    <th> تعبئة ورقة العمل </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>

                            <?php
                            if ($type['priv_paper_work'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_paper_work">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_paper_work">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>

                <tr>
                    <th> مراجعة ورقة العمل </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>

                            <?php
                            if ($type['priv_paper_revision'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_paper_revision">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_paper_revision">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>

                <tr>
                    <th> اعتماد ورقة العمل </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>
                            <?php
                            if ($type['priv_paper_start_work'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_paper_start_work">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_paper_start_work">
                            <?php
                            }  ?>


                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>

                <tr>
                    <th> الاكتمال والأرشفة </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>

                            <?php
                            if ($type['priv_paper_end_archieve'] == "نعم") {
                            ?>
                                <input type="checkbox" checked name="priv_paper_end_archieve">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="priv_paper_end_archieve">
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                    </td>
                </tr>

                <tr>
                    <th> إضافة وتعديل وحذف إجراء مراجعة في ورقة عمل </th>
                    <?php
                    foreach ($alltype as $type) { ?>
                        <td>

                            <?php
                            if ($type['priv_paper_edit_delete_add'] == "نعم") {
                            ?>
                                <input id="loginSubmit" type="checkbox" checked name="priv_paper_edit_delete_add">
                                ali
                            <?php
                            } else {
                            ?>
                                <input id="loginSubmit" class="testinddx" type="checkbox" name="priv_paper_edit_delete_add">
                                <p> Ali </p>
                            <?php
                            }  ?>

                        </td>
                    <?php
                    }
                    ?>
                    <td>
                        <!--
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#viewrecord<?php echo $type['priv_id']; ?>">
                            <i class="fa fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editrecord<?php echo $type['priv_id']; ?>">
                            <i class="fa fa-edit"></i>
                        </button>
                        <a class="confirm btn btn-danger btn-sm" href="main.php?dir=privilage&page=delete&priv_id=<?php echo $type['priv_id']; ?> ">
                            <i class="fa fa-trash"></i>
                        </a>
                -->
                    </td>
                </tr>
                </form>
                <?php
                foreach ($alltype as $type) { ?>
                    <!-- START MODEL TO Edit RECORD  -->
                    <!-- Modal -->
                    <div class="modal fade" id="editrecord<?php echo $type['priv_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">تعديل الصلاحيات</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="data">
                                        <div class="myform">
                                            <form class="form-group insert ajax_form" action="main_ajax.php?dir=privilage&page=edit" method="POST" autocomplete="on" enctype="multipart/form-data">
                                                <input type="hidden" name="priv_id" value="<?php echo $type['priv_id'] ?>">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="box">
                                                            <label id="name"> اختر المسمي الوظيفي
                                                                <span> * </span> </label>
                                                            <select class="form-control" name="priv_users">
                                                                <option value=""> -- اختر المسمي الوظيفي -- </option>
                                                                <option <?php if ($type['priv_users'] == "المالك") echo "selected"; ?> value="المالك"> المالك </option>
                                                                <option <?php if ($type['priv_users'] == "مشرف إداري") echo "selected"; ?> value="مشرف إداري"> مشرف إداري </option>
                                                                <option <?php if ($type['priv_users'] == "مساعد إداري") echo "selected"; ?> value="مساعد إداري"> مساعد إداري </option>
                                                                <option <?php if ($type['priv_users'] == "مدير مراجعة") echo "selected"; ?> value="مدير مراجعة"> مدير مراجعة </option>
                                                                <option <?php if ($type['priv_users'] == "مراجع") echo "selected"; ?> value="مراجع"> مراجع </option>
                                                                <option <?php if ($type['priv_users'] == "مشرف جودة") echo "selected"; ?> value="مشرف جودة">مشرف جودة</option>
                                                                <option <?php if ($type['priv_users'] == "عميل مباشر") echo "selected"; ?> value="عميل مباشر"> عميل مباشر </option>
                                                                <option <?php if ($type['priv_users'] == "ضيف") echo "selected"; ?> value="ضيف">ضيف</option>
                                                            </select>
                                                        </div>
                                                        <p class="alert alert-default-secondary"> الصلاحيات </p>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_show" type="checkbox" id="flexSwitchCheckDefault" value="<?php echo $type['priv_show']; ?>" <?php if ($type['priv_show'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault">عرض لوحة الصلاحيات</label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_edit" type="checkbox" id="flexSwitchCheckDefault2" value="<?php echo $type['priv_edit']; ?>" <?php if ($type['priv_edit'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault2"> تحرير لوحة الصلاحيات </label>
                                                            </div>
                                                        </div>
                                                        <p class="alert alert-default-secondary"> المستخدمين </p>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_show_users" type="checkbox" id="flexSwitchCheckDefault3" value="<?php echo $type['priv_show_users']; ?>" <?php if ($type['priv_show_users'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault3"> استعراض قائمة المستخدمين </label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_edit_users" type="checkbox" id="flexSwitchCheckDefault4" value="<?php echo $type['priv_edit_users']; ?>" <?php if ($type['priv_edit_users'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault4"> انشاء وتعديل حسابات المستخدمين </label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_arrive_branch" type="checkbox" id="flexSwitchCheckDefault5" value="<?php echo $type['priv_arrive_branch']; ?>" <?php if ($type['priv_arrive_branch'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault5"> الوصول إلى كل الفروع </label>
                                                            </div>
                                                        </div>
                                                        <p class="alert alert-default-secondary"> إدارة المهام1 </p>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_create_report" type="checkbox" id="flexSwitchCheckDefault6" value="<?php echo $type['priv_create_report']; ?>" <?php if ($type['priv_create_report'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault6"> انشاء النماذج (طلب مراجعة،تقارير مالية،زكاة وضرائب) </label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_show_attach" type="checkbox" id="flexSwitchCheckDefault7" value="<?php echo $type['priv_show_attach']; ?>" <?php if ($type['priv_show_attach'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault7">استعراض النماذج والمرفقات</label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_agree_refuse_serv" type="checkbox" id="flexSwitchCheckDefault8" value="<?php echo $type['priv_agree_refuse_serv']; ?>" <?php if ($type['priv_agree_refuse_serv'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault8">لموافقة والرفض لنماذج طلب الخدمة</label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_edit_report" type="checkbox" id="flexSwitchCheckDefault9" value="<?php echo $type['priv_edit_report']; ?>" <?php if ($type['priv_edit_report'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault9"> التعديل على نماذج الخدمات </label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_confirm_report" type="checkbox" id="flexSwitchCheckDefault10" value="<?php echo $type['priv_confirm_report']; ?>" <?php if ($type['priv_confirm_report'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault10"> تأكيد إرسال العقد </label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_confirm_receive_money" type="checkbox" id="flexSwitchCheckDefault11" value="<?php echo $type['priv_confirm_receive_money']; ?>" <?php if ($type['priv_confirm_receive_money'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault11"> تأكيد التحقق من استلام الاتعاب وتوقيع العقد </label>
                                                            </div>
                                                        </div>
                                                        <p class="alert alert-default-secondary"> استعراض وتعبئة مذكرة التخطيط </p>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_finish_ref" type="checkbox" id="flexSwitchCheckDefault12" value="<?php echo $type['priv_finish_ref']; ?>" <?php if ($type['priv_finish_ref'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault12"> تأكيد الانتهاء من أعمال المراجعة </label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_serv_start" type="checkbox" id="flexSwitchCheckDefault13" value="<?php echo $type['priv_serv_start']; ?>" <?php if ($type['priv_serv_start'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault13"> تأكيد إصدار الخدمة </label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_upload_mon" type="checkbox" id="flexSwitchCheckDefault14" value="<?php echo $type['priv_upload_mon']; ?>" <?php if ($type['priv_upload_mon'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault14"> تأكيد رفع على منصة قوائم </label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_show_all_report" type="checkbox" id="flexSwitchCheckDefault15" value="<?php echo $type['priv_show_all_report']; ?>" <?php if ($type['priv_show_all_report'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault15"> استعراض التقارير الشاملة </label>
                                                            </div>
                                                        </div>
                                                        <p class="alert alert-default-secondary"> ملف المراجعة </p>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_show_edit_prev" type="checkbox" id="flexSwitchCheckDefault16" value="<?php echo $type['priv_show_edit_prev']; ?>" <?php if ($type['priv_show_edit_prev'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault16"> عرض وانشاء وتعديل وحذف نماذج ملفات المراجعة </label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_edit_clients" type="checkbox" id="flexSwitchCheckDefault17" value="<?php echo $type['priv_edit_clients']; ?>" <?php if ($type['priv_edit_clients'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault17"> تعديل بيانات العميل </label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_edit_accounts" type="checkbox" id="flexSwitchCheckDefault18" value="<?php echo $type['priv_edit_accounts']; ?>" <?php if ($type['priv_edit_accounts'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault18"> تعديل دليل الحسابات </label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_change_refuson_team" type="checkbox" id="flexSwitchCheckDefault19" value="<?php echo $type['priv_change_refuson_team']; ?>" <?php if ($type['priv_change_refuson_team'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault19">تغيير وتعديل فريق المراجعة</label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_paper_work" type="checkbox" id="flexSwitchCheckDefault20" value="<?php echo $type['priv_paper_work']; ?>" <?php if ($type['priv_paper_work'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault20"> تعبئة ورقة العمل </label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_paper_revision" type="checkbox" id="flexSwitchCheckDefault21" value="<?php echo $type['priv_paper_revision']; ?>" <?php if ($type['priv_paper_revision'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault21"> مراجعة ورقة العمل </label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_paper_start_work" type="checkbox" id="flexSwitchCheckDefault22" value="<?php echo $type['priv_paper_start_work']; ?>" <?php if ($type['priv_paper_start_work'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault22"> اعتماد ورقة العمل </label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_paper_end_archieve" type="checkbox" id="flexSwitchCheckDefault23" value="<?php echo $type['priv_paper_end_archieve']; ?>" <?php if ($type['priv_paper_end_archieve'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault23"> الاكتمال والأرشفة </label>
                                                            </div>
                                                        </div>
                                                        <div class="box2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" name="priv_paper_edit_delete_add" type="checkbox" id="flexSwitchCheckDefault24" value="<?php echo $type['priv_paper_edit_delete_add']; ?>" <?php if ($type['priv_paper_edit_delete_add'] == "نعم") echo "checked"; ?>>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault24"> إضافة وتعديل وحذف إجراء مراجعة في ورقة عمل </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box submit_box">
                                                        <input class="btn btn-outline-primary btn-sm" name="add_car" type="submit" value=" تعديل الصلاحيات ">
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- START RESPONSE SPACE  -->
                                            <!-- area to display a message after completion of upload -->
                                            <br>
                                            <div class='status'></div>
                                            <!-- END RESPONSE SPACE  -->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"> <i class="fa fa-close"></i> اغلاق</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END RECORD TO EDIT NEW RECORD  -->

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>

