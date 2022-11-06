<div class="container customer_report">
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
                <tr>
                    <th> المستخدم </th>
                    <th> عرض لوحة الصلاحيات </th>
                    <th> تحرير لوحة الصلاحيات </th>
                    <th> استعراض قائمة المستخدمين </th>

                    <th> </th>
                </tr>
            </thead>
            <tbody> <?php
                    $stmt = $connect->prepare('SELECT * FROM privilage');
                    $stmt->execute();
                    $alltype = $stmt->fetchAll();
                    foreach ($alltype as $type) { ?> <tr>
                        <td><?php echo $type['priv_users']; ?> </td>
                        <td><?php echo $type['priv_show']; ?> </td>
                        <td> <?php echo $type['priv_edit']; ?> </td>
                        <td> <?php echo $type['priv_show_users']; ?> </td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#viewrecord<?php echo $type['priv_id']; ?>">
                                مشاهدة <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editrecord<?php echo $type['priv_id']; ?>">
                                تعديل <i class="fa fa-edit"></i>
                            </button>
                            <a class="confirm btn btn-danger btn-sm" href="main.php?dir=privilage&page=delete&priv_id=<?php echo $type['priv_id']; ?> ">
                                حذف <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr> <?php
                            ?>
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
                    <!-- START MODEL VIEW  -->
                    <div class="modal fade" id="viewrecord<?php echo $type['priv_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">مشاهدة الصلاحيات</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="data">
                                        <div class="myform">
                                            <form class="form-group insert ajax_form" action="main_ajax.php?dir=admin_users&page=edit" method="POST" autocomplete="on" enctype="multipart/form-data">
                                                <input type="hidden" name="priv_id" value="<?php echo $type['priv_id'] ?>">
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
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between">
                                    <div>
                                        <button type="button" name="button" class="btn btn-primary printbtn btn-sm"> طباعه <i class="fa fa-print"></i></button>
                                    </div>
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