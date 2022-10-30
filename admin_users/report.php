<div class="container customer_report">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=dashboard"> <?php echo  $website_title; ?></a> <i class="fa fa-chevron-left"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page"> مشاهدة المستخدمين </li>
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
                            <h5 class="modal-title" id="exampleModalLabel"> اضافة مستخدم جديد </h5>
                        </div>
                        <div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>

                    </div>
                    <div class="modal-body">
                        <div class="myform">
                            <form class="form-group insert ajax_form" action="main_ajax.php?dir=admin_users&page=add" method="POST" autocomplete="on" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="box2">
                                            <label id="name"> نوع المستخدم
                                                <span> * </span> </label>
                                            <select class="form-control" name="user_type">
                                                <option value=""> -- اختر نوع المستخدم --</option>
                                                <option value="ضيف"> ضيف </option>
                                                <option value="موظف">موظف</option>

                                            </select>
                                        </div>
                                        <div class="box2">
                                            <label id="name">المسمى الوظيفي
                                                <span> * </span> </label>
                                            <select class="form-control" name="user_jop_title">
                                                <option value=""> -- اختر المسمي الوظيفي -- </option>
                                                <option value="المالك"> المالك </option>
                                                <option value="مشرف إداري"> مشرف إداري </option>
                                                <option value="مساعد إداري"> مساعد إداري </option>
                                                <option value="مدير مراجعة"> مدير مراجعة </option>
                                                <option value="مراجع"> مراجع </option>
                                                <option value="مشرف جودة">مشرف جودة</option>
                                                <option value="ضيف">ضيف</option>
                                            </select>
                                        </div>
                                        <div class="box2">
                                            <label id="name_en">الاسم الشخصى<span> * </span></label>
                                            <input class="form-control" type="text" name="user_personal_name">
                                        </div>
                                        <div class="box2">
                                            <label id="name_en">اسم المستخدم<span> * </span></label>
                                            <input min="1" class="form-control" type="text" name="user_name">
                                        </div>
                                        <div class="box2 password_class">
                                            <label for=""> كلمة المرور </label>
                                            <input name="user_password" type="password" class="form-control passwordinput" id="floatingInput">
                                            <i class="fa fa-eye"></i>
                                        </div>
                                    </div>
                                    <div class="box2">
                                        <label id="name_en">رقـم الجوال<span> * </span></label>
                                        <input class="form-control" type="text" name="user_phone">
                                    </div>

                                    <div class="box2">
                                        <label id="name_en">البريد الإلكتروني<span> * </span></label>
                                        <input class="form-control" type="email" name="user_email">
                                    </div>
                                    <div class="box2">
                                        <label id="name_en">المدينة<span> * </span></label>
                                        <input class="form-control" type="text" name="user_city">
                                    </div>

                                    <div class="box submit_box">
                                        <input class="btn btn-outline-primary btn-sm" name="add_car" type="submit" value=" اضافه مستخدم جديد ">
                                    </div>
                                </div>
                        </div>
                        </form>
                        <!-- START RESPONSE SPACE  -->
                        <!-- area to display a message after completion of upload -->
                        <div class='status'></div>
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
                اضف مستخدم جديد <i class="fa fa-plus"></i>
            </button>
        </div>
        <table id="tableone" class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>اسم المستخدم</th>
                    <th>رمز المستخدم </th>
                    <th>تاريخ الانضمام</th>
                    <th>نوع المستخدم</th>
                    <th>المسمي الوظيفي</th>

                    <th> </th>
                </tr>
            </thead>
            <tbody> <?php
                    $stmt = $connect->prepare('SELECT * FROM users');
                    $stmt->execute();
                    $alltype = $stmt->fetchAll();
                    foreach ($alltype as $type) { ?> <tr>
                        <td><?php echo $type['user_name']; ?> </td>
                        <td><?php echo $type['user_code']; ?> </td>
                        <td> <?php echo $type['user_login_date']; ?> </td>
                        <td> <?php echo $type['user_type']; ?> </td>
                        <td> <?php echo $type['user_jop_title']; ?> </td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#viewrecord<?php echo $type['user_id']; ?>">
                                مشاهدة <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editrecord<?php echo $type['user_id']; ?>">
                                تعديل <i class="fa fa-edit"></i>
                            </button>
                            <a class="confirm btn btn-danger btn-sm" href="main.php?dir=admin_users&page=delete&user_id=<?php echo $type['user_id']; ?> ">
                                حذف <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr> <?php
                            ?>
                    <!-- START MODEL TO Edit RECORD  -->
                    <!-- Modal -->
                    <div class="modal fade" id="editrecord<?php echo $type['user_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">تعديل المستخدم</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="data">
                                        <div class="myform">
                                            <form class="form-group insert ajax_form" action="main_ajax.php?dir=admin_users&page=edit" method="POST" autocomplete="on" enctype="multipart/form-data">
                                                <input type="hidden" name="user_id" value="<?php echo $type['user_id'] ?>">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="box2">
                                                            <label id="name"> نوع المستخدم
                                                                <span> * </span> </label>
                                                            <select class="form-control" name="user_type">
                                                                <option value=""> -- اختر نوع المستخدم --</option>
                                                                <option <?php if ($type['user_type'] == 'ضيف') echo 'selected'; ?> value="ضيف"> ضيف </option>
                                                                <option <?php if ($type['user_type'] == 'موظف') echo 'selected'; ?> value="موظف">موظف</option>

                                                            </select>
                                                        </div>
                                                        <div class="box2">
                                                            <label id="name">المسمى الوظيفي
                                                                <span> * </span> </label>
                                                            <select class="form-control" name="user_jop_title">
                                                                <option value=""> -- اختر المسمي الوظيفي -- </option>
                                                                <option <?php if ($type['user_type'] == 'المالك') echo 'selected'; ?> value="المالك"> المالك </option>
                                                                <option <?php if ($type['user_type'] == 'مشرف إداري') echo 'selected'; ?> value="مشرف إداري"> مشرف إداري </option>
                                                                <option <?php if ($type['user_type'] == 'مساعد إداري') echo 'selected'; ?> value="مساعد إداري"> مساعد إداري </option>
                                                                <option <?php if ($type['user_type'] == 'مدير مراجعة') echo 'selected'; ?> value="مدير مراجعة"> مدير مراجعة </option>
                                                                <option <?php if ($type['user_type'] == 'مراجع') echo 'selected'; ?> value="مراجع"> مراجع </option>
                                                                <option <?php if ($type['user_type'] == 'مشرف جودة') echo 'selected'; ?> value="مشرف جودة">مشرف جودة</option>
                                                                <option <?php if ($type['user_type'] == 'ضيف') echo 'selected'; ?> value="ضيف">ضيف</option>
                                                            </select>
                                                        </div>
                                                        <div class="box2">
                                                            <label id="name_en">الاسم الشخصى<span> * </span></label>
                                                            <input class="form-control" type="text" name="user_personal_name" value="<?php echo $type['user_personal_name']; ?>">
                                                        </div>
                                                        <div class="box2">
                                                            <label id="name_en">اسم المستخدم<span> * </span></label>
                                                            <input min="1" class="form-control" type="text" name="user_name" value="<?php echo $type['user_name']; ?>">
                                                        </div>
                                                        <div class="box2 password_class">
                                                            <label for=""> كلمة المرور </label>
                                                            <input name="user_password" type="password" class="form-control passwordinput" id="floatingInput" value="<?php echo $type['user_password']; ?>">
                                                            <i class="fa fa-eye"></i>
                                                        </div>
                                                        <div class="box2">
                                                            <label id="name_en">رقـم الجوال<span> * </span></label>
                                                            <input class="form-control" type="text" name="user_phone" value="<?php echo $type['user_phone']; ?>">
                                                        </div>

                                                        <div class="box2">
                                                            <label id="name_en">البريد الإلكتروني<span> * </span></label>
                                                            <input class="form-control" type="email" name="user_email" value="<?php echo $type['user_email']; ?>">
                                                        </div>
                                                        <div class="box2">
                                                            <label id="name_en">المدينة<span> * </span></label>
                                                            <input class="form-control" type="text" name="user_city" value="<?php echo $type['user_city']; ?>">
                                                        </div>

                                                        <div class="box submit_box">
                                                            <input class="btn btn-outline-primary btn-sm" name="add_car" type="submit" value="تعديل المستخدم">
                                                        </div>
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
                    <div class="modal fade" id="viewrecord<?php echo $type['user_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">مشاهدة المستخدم</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="data">
                                        <div class="myform">
                                            <form class="form-group insert ajax_form" action="main_ajax.php?dir=admin_users&page=edit" method="POST" autocomplete="on" enctype="multipart/form-data">
                                                <input type="hidden" name="user_id" value="<?php echo $type['user_id'] ?>">
                                                <div class="row print_content">
                                                    <div class="col-lg-12">
                                                        <div class="box2">
                                                            <label id="name_en">الكود الخاص بالمستخدم<span> * </span></label>
                                                            <input class="form-control" type="text" name="" value="<?php echo $type['user_code']; ?>">
                                                        </div>

                                                        <div class="box2">
                                                            <label id="name_en">  تاريخ التسجيل <span> * </span></label>
                                                            <input class="form-control" type="text" name="" value="<?php echo $type['user_login_date']; ?>">
                                                        </div>
                                                        <div class="box2">
                                                            <label id="name"> نوع المستخدم
                                                                <span> * </span> </label>
                                                            <select class="form-control" name="user_type">
                                                                <option value=""> -- اختر نوع المستخدم --</option>
                                                                <option <?php if ($type['user_type'] == 'ضيف') echo 'selected'; ?> value="ضيف"> ضيف </option>
                                                                <option <?php if ($type['user_type'] == 'موظف') echo 'selected'; ?> value="موظف">موظف</option>
                                                            </select>
                                                        </div>
                                                        <div class="box2">
                                                            <label id="name">المسمى الوظيفي
                                                                <span> * </span> </label>
                                                            <select class="form-control" name="user_jop_title">
                                                                <option value=""> -- اختر المسمي الوظيفي -- </option>
                                                                <option <?php if ($type['user_jop_title'] == 'المالك') echo 'selected'; ?> value="المالك"> المالك </option>
                                                                <option <?php if ($type['user_jop_title'] == 'مشرف إداري') echo 'selected'; ?> value="مشرف إداري"> مشرف إداري </option>
                                                                <option <?php if ($type['user_jop_title'] == 'مساعد إداري') echo 'selected'; ?> value="مساعد إداري"> مساعد إداري </option>
                                                                <option <?php if ($type['user_jop_title'] == 'مدير مراجعة') echo 'selected'; ?> value="مدير مراجعة"> مدير مراجعة </option>
                                                                <option <?php if ($type['user_jop_title'] == 'مراجع') echo 'selected'; ?> value="مراجع"> مراجع </option>
                                                                <option <?php if ($type['user_jop_title'] == 'مشرف جودة') echo 'selected'; ?> value="مشرف جودة">مشرف جودة</option>
                                                                <option <?php if ($type['user_jop_title'] == 'ضيف') echo 'selected'; ?> value="ضيف">ضيف</option>
                                                            </select>
                                                        </div>
                                                        <div class="box2">
                                                            <label id="name_en">الاسم الشخصى<span> * </span></label>
                                                            <input class="form-control" type="text" name="user_personal_name" value="<?php echo $type['user_personal_name']; ?>">
                                                        </div>
                                                        <div class="box2">
                                                            <label id="name_en">اسم المستخدم<span> * </span></label>
                                                            <input min="1" class="form-control" type="text" name="user_name" value="<?php echo $type['user_name']; ?>">
                                                        </div>
                                                        <div class="box2 password_class">
                                                            <label for=""> كلمة المرور </label>
                                                            <input name="user_password" type="password" class="form-control passwordinput" id="floatingInput" value="<?php echo $type['user_password']; ?>">
                                                            <i class="fa fa-eye"></i>
                                                        </div>
                                                        <div class="box2">
                                                            <label id="name_en">رقـم الجوال<span> * </span></label>
                                                            <input class="form-control" type="text" name="user_phone" value="<?php echo $type['user_phone']; ?>">
                                                        </div>

                                                        <div class="box2">
                                                            <label id="name_en">البريد الإلكتروني<span> * </span></label>
                                                            <input class="form-control" type="email" name="user_email" value="<?php echo $type['user_email']; ?>">
                                                        </div>
                                                        <div class="box2">
                                                            <label id="name_en">المدينة<span> * </span></label>
                                                            <input class="form-control" type="text" name="user_city" value="<?php echo $type['user_city']; ?>">
                                                        </div>
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