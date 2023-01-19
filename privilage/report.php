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

    </div>
    <!-- END RECORD TO EDIT NEW RECORD  -->
    <div class="table-responsive">

    <form class="ajax_form" action="main_ajax.php?dir=privilage&page=edit" name="tesformaction" method="POST" enctype="multipart/form-data">
        <table id="tableone" class="table privilage_table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th> نوع الاجراء </th>
                    <th> المالك </th>
                    <th> مشرف اداري </th>
                    <th> مساعد اداري </th>
                    <th> مدير مراجعه </th>
                    <th> مراجع </th>
                    <th> مشرف جودة </th>
                    <th> عميل مباشر </th>
                    <th> ضيف </th>
                </tr>
            </thead>
            <tbody class="priv_custome">
                <?php

                $stmt = $connect->prepare("SELECT * FROM new_priv");
                $stmt->execute();

                $data = $stmt->fetch();

                ?>
                <!--------------------------------------------->
                <tr>
                    <th class="main_th"> الصلاحيات </th>

                </tr>
                <tr>
                    <th> عرض لوحة الصلاحيات </th>
                    <td> <?php if ($data['priv_show_own'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_show_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_show_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_show_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_show_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_show_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_show_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_show_client'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
                <tr>
                    <th> تحرير لوحة الصلاحيات </th>
                    <td> <?php if ($data['priv_edit_own'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_edit_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_edit_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_edit_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_edit_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_edit_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_edit_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_edit_client'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
                <tr>
                    <th  class="main_th"> المستخدمين </th>
                </tr>
                <tr>
                    <th> استعراض قائمة المستخدمين </th>
                    <td> <?php if ($data['priv_show_users_own'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_users_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_users_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_show_users_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_users_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_users_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_show_users_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_users_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_users_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_show_users_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_users_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_users_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_show_users_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_users_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_users_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_show_users_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_users_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_users_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_show_users_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_users_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_users_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_show_users_client'] == 1) { ?>
                            <input type="checkbox" checked name="priv_show_users_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_show_users_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
                <tr>
                    <th> انشاء وتعديل حسابات المستخدمين </th>
                    <td> <?php if ($data['priv_edit_users_own'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_users_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_users_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_edit_users_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_users_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_users_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_edit_users_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_users_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_users_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_edit_users_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_users_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_users_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_edit_users_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_users_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_users_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_edit_users_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_users_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_users_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_edit_users_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_users_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_users_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['priv_edit_users_client'] == 1) { ?>
                            <input type="checkbox" checked name="priv_edit_users_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="priv_edit_users_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
                <tr>
                    <th> الوصول الي كل الفروع </th>
                    <td> <?php if ($data['user_all_branch_own'] == 1) { ?>
                            <input type="checkbox" checked name="user_all_branch_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="user_all_branch_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['user_all_branch_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="user_all_branch_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="user_all_branch_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['user_all_branch_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="user_all_branch_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="user_all_branch_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['user_all_branch_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="user_all_branch_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="user_all_branch_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['user_all_branch_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="user_all_branch_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="user_all_branch_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['user_all_branch_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="user_all_branch_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="user_all_branch_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['user_all_branch_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="user_all_branch_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="user_all_branch_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['user_all_branch_client'] == 1) { ?>
                            <input type="checkbox" checked name="user_all_branch_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="user_all_branch_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
                <tr>
                    <th  class="main_th"> ادارة المهام 1 </th>
                </tr>

                <tr>
                    <th> انشاء النماذج (طلب مراجعه , تقارير مالية , زكاة وضرائب ) </th>
                    <td> <?php if ($data['create_report_own'] == 1) { ?>
                            <input type="checkbox" checked name="create_report_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="create_report_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['create_report_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="create_report_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="create_report_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['create_report_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="create_report_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="create_report_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['create_report_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="create_report_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="create_report_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['create_report_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="create_report_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="create_report_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['create_report_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="create_report_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="create_report_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['create_report_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="create_report_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="create_report_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['create_report_client'] == 1) { ?>
                            <input type="checkbox" checked name="create_report_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="create_report_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
                <tr>
                    <th> استعراض النماذج والمرفقات </th>
                    <td> <?php if ($data['show_attach_own'] == 1) { ?>
                            <input type="checkbox" checked name="show_attach_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="show_attach_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['show_attach_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="show_attach_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="show_attach_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['show_attach_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="show_attach_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="show_attach_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['show_attach_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="show_attach_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="show_attach_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['show_attach_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="show_attach_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="show_attach_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['show_attach_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="show_attach_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="show_attach_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['show_attach_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="show_attach_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="show_attach_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['show_attach_client'] == 1) { ?>
                            <input type="checkbox" checked name="show_attach_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="show_attach_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
                <tr>
                    <th> الموافقه والرفض لنماذج طلب الخدمة </th>
                    <td> <?php if ($data['agree_refuse_own'] == 1) { ?>
                            <input type="checkbox" checked name="agree_refuse_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="agree_refuse_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['agree_refuse_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="agree_refuse_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="agree_refuse_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['agree_refuse_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="agree_refuse_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="agree_refuse_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['agree_refuse_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="agree_refuse_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="agree_refuse_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['agree_refuse_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="agree_refuse_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="agree_refuse_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['agree_refuse_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="agree_refuse_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="agree_refuse_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['agree_refuse_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="agree_refuse_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="agree_refuse_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['agree_refuse_client'] == 1) { ?>
                            <input type="checkbox" checked name="agree_refuse_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="agree_refuse_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>

                <tr>
                    <th> التغديل علي نماذج الخدمات </th>
                    <td> <?php if ($data['edit_report_own'] == 1) { ?>
                            <input type="checkbox" checked name="edit_report_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_report_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['edit_report_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="edit_report_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_report_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['edit_report_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="edit_report_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_report_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['edit_report_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="edit_report_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_report_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['edit_report_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="edit_report_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_report_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['edit_report_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="edit_report_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_report_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['edit_report_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="edit_report_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_report_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['edit_report_client'] == 1) { ?>
                            <input type="checkbox" checked name="edit_report_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_report_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
                <tr>
                    <th> تاكيد ارسال العقد </th>
                    <td> <?php if ($data['confirm_send_re_own'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_send_re_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_send_re_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_send_re_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_send_re_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_send_re_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_send_re_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_send_re_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_send_re_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_send_re_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_send_re_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_send_re_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_send_re_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_send_re_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_send_re_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_send_re_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_send_re_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_send_re_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_send_re_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_send_re_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_send_re_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_send_re_client'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_send_re_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_send_re_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>

                <tr>
                    <th> تاكيد التحقق من توقيع العقد واستلام الاتعاب </th>
                    <td> <?php if ($data['confirm_recieve_money_own'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_recieve_money_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_recieve_money_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_recieve_money_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_recieve_money_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_recieve_money_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_recieve_money_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_recieve_money_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_recieve_money_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_recieve_money_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_recieve_money_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_recieve_money_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_recieve_money_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_recieve_money_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_recieve_money_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_recieve_money_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_recieve_money_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_recieve_money_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_recieve_money_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_recieve_money_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_recieve_money_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_recieve_money_client'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_recieve_money_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_recieve_money_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
                <tr>
                    <th> استعراض وتعبئة مذكرة التخطيط </th>
                    <td> <?php if ($data['finish_ref_own'] == 1) { ?>
                            <input type="checkbox" checked name="finish_ref_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="finish_ref_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['finish_ref_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="finish_ref_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="finish_ref_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['finish_ref_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="finish_ref_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="finish_ref_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['finish_ref_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="finish_ref_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="finish_ref_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['finish_ref_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="finish_ref_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="finish_ref_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['finish_ref_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="finish_ref_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="finish_ref_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['finish_ref_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="finish_ref_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="finish_ref_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['finish_ref_client'] == 1) { ?>
                            <input type="checkbox" checked name="finish_ref_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="finish_ref_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
                <tr>
                    <th> تاكيد بدء تقديم الخدمة </th>
                    <td> <?php if ($data['confirm_start_serv_own'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_start_serv_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_start_serv_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_start_serv_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_start_serv_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_start_serv_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_start_serv_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_start_serv_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_start_serv_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_start_serv_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_start_serv_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_start_serv_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_start_serv_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_start_serv_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_start_serv_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_start_serv_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_start_serv_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_start_serv_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_start_serv_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_start_serv_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_start_serv_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_start_serv_client'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_start_serv_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_start_serv_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
                <tr>
                    <th> تاكيد اتنهاء تقديم الخدمة </th>
                    <td> <?php if ($data['confirm_end_serv_own'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_end_serv_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_end_serv_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_end_serv_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_end_serv_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_end_serv_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_end_serv_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_end_serv_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_end_serv_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_end_serv_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_end_serv_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_end_serv_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_end_serv_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_end_serv_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_end_serv_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_end_serv_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_end_serv_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_end_serv_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_end_serv_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_end_serv_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_end_serv_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_end_serv_client'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_end_serv_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_end_serv_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
                <tr>
                    <th> تاكيد الرفع علي منصة قوائم </th>
                    <td> <?php if ($data['confirm_upload_own'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_upload_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_upload_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_upload_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_upload_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_upload_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_upload_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_upload_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_upload_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_upload_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_upload_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_upload_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_upload_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_upload_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_upload_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_upload_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_upload_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_upload_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_upload_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_upload_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_upload_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['confirm_upload_client'] == 1) { ?>
                            <input type="checkbox" checked name="confirm_upload_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="confirm_upload_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
                <tr>
                    <th  class="main_th"> ملف المراجعه </th>
                </tr>
                <tr>
                    <th> عرض وانشاء وتعديل وحذف نماذج ملفات المراجعه </th>
                    <td> <?php if ($data['view_create_rev_files_own'] == 1) { ?>
                            <input type="checkbox" checked name="view_create_rev_files_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="view_create_rev_files_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['view_create_rev_files_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="view_create_rev_files_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="view_create_rev_files_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['view_create_rev_files_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="view_create_rev_files_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="view_create_rev_files_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['view_create_rev_files_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="view_create_rev_files_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="view_create_rev_files_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['view_create_rev_files_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="view_create_rev_files_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="view_create_rev_files_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['view_create_rev_files_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="view_create_rev_files_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="view_create_rev_files_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['view_create_rev_files_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="view_create_rev_files_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="view_create_rev_files_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['view_create_rev_files_client'] == 1) { ?>
                            <input type="checkbox" checked name="view_create_rev_files_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="view_create_rev_files_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
                <tr>
                    <th> تعديل بيانات العميل </th>
                    <td> <?php if ($data['edit_client_info_own'] == 1) { ?>
                            <input type="checkbox" checked name="edit_client_info_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_client_info_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['edit_client_info_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="edit_client_info_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_client_info_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['edit_client_info_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="edit_client_info_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_client_info_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                    <td> <?php if ($data['edit_client_info_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="edit_client_info_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_client_info_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                    <td> <?php if ($data['edit_client_info_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="edit_client_info_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_client_info_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                    <td> <?php if ($data['edit_client_info_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="edit_client_info_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_client_info_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                    <td> <?php if ($data['edit_client_info_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="edit_client_info_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_client_info_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                    <td> <?php if ($data['edit_client_info_client'] == 1) { ?>
                            <input type="checkbox" checked name="edit_client_info_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_client_info_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                </tr>
                <tr>
                    <th> تعديل دليل الحسابات</th>
                    <td> <?php if ($data['edit_accounts_own'] == 1) { ?>
                            <input type="checkbox" checked name="edit_accounts_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_accounts_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['edit_accounts_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="edit_accounts_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_accounts_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['edit_accounts_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="edit_accounts_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_accounts_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                    <td> <?php if ($data['edit_accounts_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="edit_accounts_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_accounts_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                    <td> <?php if ($data['edit_accounts_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="edit_accounts_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_accounts_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                    <td> <?php if ($data['edit_accounts_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="edit_accounts_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_accounts_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                    <td> <?php if ($data['edit_accounts_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="edit_accounts_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_accounts_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                    <td> <?php if ($data['edit_accounts_client'] == 1) { ?>
                            <input type="checkbox" checked name="edit_accounts_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="edit_accounts_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                </tr>
                <tr>
                    <th> تغير وتعديل فريق المراجعه </th>
                    <td> <?php if ($data['change_refus_team_own'] == 1) { ?>
                            <input type="checkbox" checked name="change_refus_team_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="change_refus_team_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['change_refus_team_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="change_refus_team_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="change_refus_team_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['change_refus_team_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="change_refus_team_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="change_refus_team_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                    <td> <?php if ($data['change_refus_team_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="change_refus_team_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="change_refus_team_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                    <td> <?php if ($data['change_refus_team_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="change_refus_team_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="change_refus_team_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                    <td> <?php if ($data['change_refus_team_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="change_refus_team_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="change_refus_team_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                    <td> <?php if ($data['change_refus_team_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="change_refus_team_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="change_refus_team_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                    <td> <?php if ($data['change_refus_team_client'] == 1) { ?>
                            <input type="checkbox" checked name="change_refus_team_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="change_refus_team_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>
                    </td>
                </tr>
                <tr>
                    <th> تعبئة ورقة العمل </th>
                    <td> <?php if ($data['paper_work_own'] == 1) { ?>
                            <input type="checkbox" checked name="paper_work_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_work_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_work_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="paper_work_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_work_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_work_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="paper_work_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_work_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_work_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="paper_work_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_work_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_work_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="paper_work_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_work_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_work_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="paper_work_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_work_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_work_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="paper_work_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_work_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_work_client'] == 1) { ?>
                            <input type="checkbox" checked name="paper_work_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_work_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
                <tr>
                    <th> مراجعه ورقة العمل</th>
                    <td> <?php if ($data['paper_revision_own'] == 1) { ?>
                            <input type="checkbox" checked name="paper_revision_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_revision_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_revision_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="paper_revision_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_revision_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_revision_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="paper_revision_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_revision_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_revision_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="paper_revision_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_revision_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_revision_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="paper_revision_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_revision_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_revision_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="paper_revision_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_revision_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_revision_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="paper_revision_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_revision_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_revision_client'] == 1) { ?>
                            <input type="checkbox" checked name="paper_revision_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_revision_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>

                <tr>
                    <th> اعتماد ورقة العمل </th>
                    <td> <?php if ($data['paper_start_own'] == 1) { ?>
                            <input type="checkbox" checked name="paper_start_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_start_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_start_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="paper_start_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_start_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_start_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="paper_start_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_start_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_start_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="paper_start_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_start_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_start_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="paper_start_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_start_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_start_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="paper_start_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_start_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_start_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="paper_start_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_start_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_start_client'] == 1) { ?>
                            <input type="checkbox" checked name="paper_start_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_start_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>

                <tr>
                    <th> الاكتمال والارشفة </th>
                    <td> <?php if ($data['end_archieve_own'] == 1) { ?>
                            <input type="checkbox" checked name="end_archieve_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="end_archieve_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['end_archieve_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="end_archieve_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="end_archieve_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['end_archieve_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="end_archieve_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="end_archieve_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['end_archieve_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="end_archieve_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="end_archieve_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['end_archieve_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="end_archieve_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="end_archieve_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['end_archieve_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="end_archieve_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="end_archieve_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['end_archieve_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="end_archieve_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="end_archieve_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['end_archieve_client'] == 1) { ?>
                            <input type="checkbox" checked name="end_archieve_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="end_archieve_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>

                <tr>
                    <th> اضافة وتعديل وحذف اجراء مراجعة في ورقة العمل </th>
                    <td> <?php if ($data['paper_add_edit_own'] == 1) { ?>
                            <input type="checkbox" checked name="paper_add_edit_own" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_add_edit_own" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_add_edit_ad_sup'] == 1) { ?>
                            <input type="checkbox" checked name="paper_add_edit_ad_sup" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_add_edit_ad_sup" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_add_edit_ma_assis'] == 1) { ?>
                            <input type="checkbox" checked name="paper_add_edit_ma_assis" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_add_edit_ma_assis" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_add_edit_mang_revie'] == 1) { ?>
                            <input type="checkbox" checked name="paper_add_edit_mang_revie" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_add_edit_mang_revie" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_add_edit_reviwer'] == 1) { ?>
                            <input type="checkbox" checked name="paper_add_edit_reviwer" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_add_edit_reviwer" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_add_edit_qua_super'] == 1) { ?>
                            <input type="checkbox" checked name="paper_add_edit_qua_super" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_add_edit_qua_super" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_add_edit_live_client'] == 1) { ?>
                            <input type="checkbox" checked name="paper_add_edit_live_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_add_edit_live_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>
                    <td> <?php if ($data['paper_add_edit_client'] == 1) { ?>
                            <input type="checkbox" checked name="paper_add_edit_client" value="0" onclick="this.form.submit()">
                        <?php
                            } else { ?>
                            <input type="checkbox" name="paper_add_edit_client" value="1" onclick="this.form.submit()">
                        <?php
                            } ?>

                    </td>

                </tr>
            </tbody>
        </table>
    </form>
    </div>
</div>
</div>
</div>