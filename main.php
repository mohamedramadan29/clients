<?php
ob_start();
$pagetitle = 'الرئيسية';
session_start();
include 'init.php';
if (isset($_SESSION['admin_id']) || isset($_SESSION['client_id']) || isset($_SESSION['emp_id'])) {
    if (isset($_SESSION['client_id'])) {
        include $tem . 'top_navbar_client.php';
    } elseif (isset($_SESSION['emp_id'])) {
        include $tem . 'top_navbar_emp.php';
    } else {
        include $tem . 'top_navbar.php';
    }
?>
    <div class="content-wrapper">
        <div class="category">
            <?php
            $page = '';
            if (isset($_GET['page']) && isset($_GET['dir'])) {
                $page = $_GET['page'];
                $dir = $_GET['dir'];
            } else {
                $page = 'manage';
            }
            // START CUSTOMER
            if ($dir == 'company' && $page == 'add') {
                include 'company/add_company.php';
            } elseif ($dir == 'company' && $page == 'edit') {
                include 'company/edit_company.php';
            } elseif ($dir == 'company' && $page == 'delete') {
                include 'company/delete_company.php';
            } elseif ($dir == 'company' && $page == 'report') {
                include 'company/report.php';
            }
            /***************  Admin Dashboard Page  ******/
            // START admin_users
            if ($dir == 'admin_users' && $page == 'add') {
                // include 'whatsapp/add.php';
            } elseif ($dir == 'admin_users' && $page == 'edit') {
                include 'admin_users/edit.php';
            } elseif ($dir == 'admin_users' && $page == 'delete') {
                include 'admin_users/delete.php';
            } elseif ($dir == 'admin_users' && $page == 'report') {
                include 'admin_users/report.php';
            }
            // END admin_users
            // START ADMIN RECORD SCREEN
            if ($dir == 'record_screen' && $page == 'view') {
                include 'record_screen/view.php';
            } elseif ($dir == 'record_screen' && $page == 'view_tax') {
                include 'record_screen/view_tax.php';
            } elseif ($dir == 'record_screen' && $page == 'view_account') {
                include 'record_screen/view_account.php';
            } elseif ($dir == 'record_screen' && $page == 'view_contract') {
                include 'record_screen/view_contract.php';
            }
            // START Review Plane
            if ($dir == 'review_plane' && $page == 'edit') {
                include 'review_plane/edit.php';
            }
            // END ADMIN RECORD SCREEN
            // START Privilage
            if ($dir == 'privilage' && $page == 'add') {
                // include 'whatsapp/add.php';
            } elseif ($dir == 'privilage' && $page == 'edit') {
                include 'privilage/edit.php';
            } elseif ($dir == 'privilage' && $page == 'delete') {
                include 'privilage/delete.php';
            } elseif ($dir == 'privilage' && $page == 'report') {
                include 'privilage/report.php';
            }
            // END Privilage
            //****************** End Admin Dashboard Page ************* */        

            /**
             * start using privilage table
             * 
             */
            $stmt = $connect->prepare("SELECT * FROM new_priv");
            $stmt->execute();
            $priv_data = $stmt->fetch();
            /***************** START CLIENTS FOLDER**************** */

            // START Accounting Report ( عقد إعداد تقرير محاسبي )

            if ($dir == 'clients/accounting_report' && $page == 'add') {
                include 'clients/accounting_report/add.php';
            } elseif ($dir == 'clients/accounting_report' && $page == 'edit') {
                include 'clients/accounting_report/edit.php';
            } elseif ($dir == 'clients/accounting_report' && $page == 'view') {
                include 'clients/accounting_report/view.php';
            } elseif ($dir == 'clients/accounting_report' && $page == 'delete') {
                include 'clients/accounting_report/delete.php';
            } elseif ($dir == 'clients/accounting_report' && $page == 'report') {
                include 'clients/accounting_report/report.php';
            }

            // END Accounting Report

            /***************** START CLIENTS FOLDER**************** */
            // START Tax Services ( نموذج طلب عقد ارتباط لخدمة زكاة وضرائب)

            if ($dir == 'clients/tax_services' && $page == 'add') {
                include 'clients/tax_services/add.php';
            } elseif ($dir == 'clients/tax_services' && $page == 'edit') {
                include 'clients/tax_services/edit.php';
            } elseif ($dir == 'clients/tax_services' && $page == 'view') {
                include 'clients/tax_services/view.php';
            } elseif ($dir == 'clients/tax_services' && $page == 'delete') {
                include 'clients/tax_services/delete.php';
            } elseif ($dir == 'clients/tax_services' && $page == 'report') {
                include 'clients/tax_services/report.php';
            }

            // END Tax Services

            // START Contract Request ( نموذج طلب عقد إرتباط مراجعة )

            if ($dir == 'clients/contract_request' && $page == 'add') {
                include 'clients/contract_request/add.php';
            } elseif ($dir == 'clients/contract_request' && $page == 'edit') {
                include 'clients/contract_request/edit.php';
            } elseif ($dir == 'clients/contract_request' && $page == 'view') {
                include 'clients/contract_request/view.php';
            } elseif ($dir == 'clients/contract_request' && $page == 'delete') {
                include 'clients/contract_request/delete.php';
            } elseif ($dir == 'clients/contract_request' && $page == 'report') {
                include 'clients/contract_request/report.php';
            }

            // END Contract Request
            // START Account ( نموذج طلب عقد إرتباط مراجعة )

            if ($dir == 'clients/account' && $page == 'add') {
                include 'clients/account/add.php';
            } elseif ($dir == 'clients/account' && $page == 'edit') {
                include 'clients/account/edit.php';
            }

            // END Account
            // START Record Screen
            if (
                isset($_SESSION['client_id'])
            ) {
                if ($dir == 'clients/record_screen' && $page == 'view') {
                    include 'clients/record_screen/view.php';
                } elseif ($dir == 'clients/record_screen' && $page == 'view_tax') {
                    include 'clients/record_screen/view_tax.php';
                } elseif ($dir == 'clients/record_screen' && $page == 'view_account') {
                    include 'clients/record_screen/view_account.php';
                } elseif ($dir == 'clients/record_screen' && $page == 'view_contract') {
                    include 'clients/record_screen/view_contract.php';
                }
            }
            // END Record Screen
            /***************** END CLIENTS FOLDER**************** */
            // END CONTACT
            if ($dir == 'dashboard' && $page == 'dashboard') {
                include 'dashboard.php';
            }
            if ($dir == 'dashboard' && $page == 'client_dashboard') {
                include 'clients/client_dashboard.php';
            }
            if ($dir == 'dashboard' && $page == 'privlage_dashboard') {
                include 'privlage_dashboard.php';
            }
            // END EDUCATION WEB SITE ///////////////////////////////////////
            //if ($page != 'report') {
            ?>
        </div>
    </div>
    </div>
    <?php
    if ($dir == 'whatsapp' && $page == 'add') {
        include 'whatsapp/add.php';
    }
    ?>
<?php
    include $tem . 'footer.php';
} else {
    header('Location:index.php');
    exit();
}
ob_end_flush();
?>
<script>
    var vall1 = $("#value1").bind("input", function() {
        // console.log($("#value1").val());
    });
    $("#value2").bind("input", function() {
        //  console.log($("#value2").val());
    });
    console.log(vall1);
</script>
<script>
    function getAmount() {
        var value = $('#value1').val();
        $('#amount').val(value);

        var value2 = $('#value2').val();
        $('#amount2').val(value2);

        //get the sum of each column of each row
        var sum_value = value + value2;

    }
    getAmount();
    var value2 = $('#value2').bind("input");
    console.log(value2).val();
</script>

<script>
    // START IN ACCOUNTING REPORT
    // اعداد تقرير محاسبة

    Dropzone.options.myDropzone1 = {
        url: 'main_ajax.php?dir=clients/accounting_report&page=ajax_add',
        autoProcessQueue: false,
        uploadMultiple: true,
        parallelUploads: 10,
        maxFiles: 10,
        maxFilesize: 400,
        dictDefaultMessage: "اسقاط الملفات الخاصة بك هنا للرفع",
        //acceptedFiles: '*',
        addRemoveLinks: true,
        dictRemoveFile: 'حذف الملف',
        init: function() {
            dzClosure = this; // Makes sure that 'this' is understood inside the functions below.
            // for Dropzone to process the queue (instead of default form behavior):
            document.getElementById("submit-all").addEventListener("click", function(e) {
                // Make sure that the form isn't actually being sent.
                e.preventDefault();
                e.stopPropagation();
                dzClosure.processQueue();
            });
            //send all the form data along with the files:
            this.on("sendingmultiple", function(data, xhr, formData) {
                formData.
                append("ar_client_name", jQuery("#ar_client_name").val());
                formData.append("ar_legal", jQuery("#ar_legal").val());
                formData.append("ar_account_num", jQuery("#ar_account_num").val());
                formData.append("tax_number", jQuery("#tax_number").val());
                formData.append("ar_manager_name", jQuery("#ar_manager_name").val());
                formData.append("ar_manager_phone", jQuery("#ar_manager_phone").val());
                formData.append("ar_client_email", jQuery("#ar_client_email").val());
                formData.append("ar_serv_reason", jQuery("#ar_serv_reason").val());
                formData.append("ar_doc_scop", jQuery("#ar_doc_scop").val());
                formData.append("ar_old_doc", jQuery("#ar_old_doc").val());
                formData.append("ar_new_doc", jQuery("#ar_new_doc").val());
                formData.append("ar_prepare", jQuery("#ar_prepare").val());
                formData.append("ar_prepare_date", jQuery("#ar_prepare_date").val());
                formData.append("ar_prepare_date", jQuery("#ar_prepare_date").val());
                formData.append("user_id", jQuery("#user_id").val());
            });
            this.on("queuecomplete", function(file) {
                alert(" تم الطلب ينجاح ");
                window.location.href = "main.php?dir=clients/accounting_report&page=add";
            });
        }
    }
</script>




<script>
    // START IN CONTRACT REQUEST
    //  نموذج طلب عقد إرتباط مراجعة 
    Dropzone.options.myDropzone2 = {
        url: 'main_ajax.php?dir=clients/contract_request&page=ajax_add',
        autoProcessQueue: false,
        uploadMultiple: true,
        parallelUploads: 10,
        maxFiles: 10,
        maxFilesize: 400,
        dictDefaultMessage: "اسقاط الملفات الخاصة بك هنا للرفع",
        //acceptedFiles: '*',
        addRemoveLinks: true,
        dictRemoveFile: 'حذف الملف',
        init: function() {
            dzClosure = this; // Makes sure that 'this' is understood inside the functions below.
            // for Dropzone to process the queue (instead of default form behavior):
            document.getElementById("submit-all").addEventListener("click", function(e) {
                // Make sure that the form isn't actually being sent.
                e.preventDefault();
                e.stopPropagation();
                dzClosure.processQueue();
            });
            //send all the form data along with the files:
            this.on("sendingmultiple", function(data, xhr, formData) {
                formData.
                append("con_client_name", jQuery("#con_client_name").val());
                formData.append("con_legal", jQuery("#con_legal").val());
                formData.append("con_account_num", jQuery("#con_account_num").val());
                formData.append("tax_number", jQuery("#tax_number").val());
                formData.append("con_uniq_num", jQuery("#con_uniq_num").val());
                formData.append("con_account_type", jQuery("#con_account_type").val());
                formData.append("con_year_start", jQuery("#con_year_start").val());
                formData.append("con_year_end", jQuery("#con_year_end").val());
                formData.append("con_reason", jQuery("#con_reason").val());
                formData.append("con_client_prev", jQuery("#con_client_prev").val());
                formData.append("con_client_prev_img", jQuery("#con_client_prev_img").val());
                formData.append("con_client_prev_year", jQuery("#con_client_prev_year").val());
                formData.append("con_office_name_prev", jQuery("#con_office_name_prev").val());
                formData.append("con_verify_website", jQuery("#con_verify_website").val());
                formData.append("com_revision_prog", jQuery("#com_revision_prog").val());
                formData.append("con_client_account_exer", jQuery("#con_client_account_exer").val());
                formData.append("con_years_required", jQuery("#con_years_required").val());
                formData.append("con_comparison_year", jQuery("#con_comparison_year").val());
                formData.append("con_income", jQuery("#con_income").val());
                formData.append("con_manager_name", jQuery("#con_manager_name").val());
                formData.append("con_manager_phone", jQuery("#con_manager_phone").val());
                formData.append("con_manager_email", jQuery("#con_manager_email").val());
                formData.append("con_accounter_name", jQuery("#con_accounter_name").val());
                formData.append("con_accounter_phone", jQuery("#con_accounter_phone").val());
                formData.append("con_accounter_email", jQuery("#con_accounter_email").val());
                formData.append("con_card_num", jQuery("#con_card_num").val());
                formData.append("con_upload_birth", jQuery("#con_upload_birth").val());
                formData.append("con_upload_mobile", jQuery("#con_upload_mobile").val());
                formData.append("con_upload_email", jQuery("#con_upload_email").val());
                formData.append("con_fee_money", jQuery("#con_fee_money").val());
                formData.append("con_fee_client", jQuery("#con_fee_client").val());
                formData.append("con_fee_import", jQuery("#con_fee_import").val());
                formData.append("con_fee_salary", jQuery("#con_fee_salary").val());
                formData.append("con_fee_export", jQuery("#con_fee_export").val());
                formData.append("con_fee_sales", jQuery("#con_fee_sales").val());
                formData.append("con_fee_expect", jQuery("#con_fee_expect").val());
                formData.append("con_export_time", jQuery("#con_export_time").val());
                formData.append("con_copy_eng", jQuery("#con_copy_eng").val());
                formData.append("con_copy_extra", jQuery("#con_copy_extra").val());
                formData.append("con_copy_stamp", jQuery("#con_copy_stamp").val());
                formData.append("con_attach_stamp", jQuery("#con_attach_stamp").val());
                formData.append("con_upload_report", jQuery("#con_upload_report").val());
                formData.append("con_prepare", jQuery("#con_prepare").val());
                formData.append("con_prepare_time", jQuery("#con_prepare_time").val());
                formData.append("user_id", jQuery("#user_id").val());
            });
            this.on("queuecomplete", function(file) {
                alert(" تم الطلب ينجاح ");
                window.location.href = "main.php?dir=clients/contract_request&page=add";
            });
        }
    }
</script>

<script>
    // START TAX SERVICES   

    /*
نموذج طلب عقد ارتباط لخدمة زكاة وضرائب   
*/
    Dropzone.options.myDropzone3 = {
        url: 'main_ajax.php?dir=clients/tax_services&page=ajax_add',
        autoProcessQueue: false,
        uploadMultiple: true,
        parallelUploads: 10,
        maxFiles: 10,
        maxFilesize: 400,
        dictDefaultMessage: "اسقاط الملفات الخاصة بك هنا للرفع",
        //acceptedFiles: '*',
        addRemoveLinks: true,
        dictRemoveFile: 'حذف الملف',
        init: function() {
            dzClosure = this; // Makes sure that 'this' is understood inside the functions below.
            // for Dropzone to process the queue (instead of default form behavior):
            document.getElementById("submit-all").addEventListener("click", function(e) {
                // Make sure that the form isn't actually being sent.
                e.preventDefault();
                e.stopPropagation();
                dzClosure.processQueue();
            });
            //send all the form data along with the files:
            this.on("sendingmultiple", function(data, xhr, formData) {
                formData.
                append("tax_client_name", jQuery("#tax_client_name").val());
                formData.append("tax_legal", jQuery("#tax_legal").val());
                formData.append("tax_account_num", jQuery("#tax_account_num").val());
                formData.append("tex_number", jQuery("#tex_number").val());
                formData.append("tax_account_type", jQuery("#tax_account_type").val());
                formData.append("tax_year_start", jQuery("#tax_year_start").val());
                formData.append("tax_year_end", jQuery("#tax_year_end").val());
                formData.append("tax_serv_type", jQuery("#tax_serv_type").val());
                formData.append("tax_add_serv", jQuery("#tax_add_serv").val());
                formData.append("tax_serv_reason", jQuery("#tax_serv_reason").val());
                formData.append("tax_years_required", jQuery("#tax_years_required").val());
                formData.append("tax_income", jQuery("#tax_income").val());
                formData.append("tax_uniq_num", jQuery("#tax_uniq_num").val());
                formData.append("tax_client_prev", jQuery("#tax_client_prev").val());
                formData.append("tax_client_prev_img", jQuery("#tax_client_prev_img").val());
                formData.append("tax_client_prev_year", jQuery("#tax_client_prev_year").val());
                formData.append("tax_verify_website", jQuery("#tax_verify_website").val());
                formData.append("tax_client_account_exer", jQuery("#tax_client_account_exer").val());
                formData.append("tax_manager_name", jQuery("#tax_manager_name").val());
                formData.append("tax_manager_phone", jQuery("#tax_manager_phone").val());
                formData.append("tax_manager_email", jQuery("#tax_manager_email").val());
                formData.append("tax_accounter_name", jQuery("#tax_accounter_name").val());
                formData.append("tax_accounter_phone", jQuery("#tax_accounter_phone").val());
                formData.append("tax_accounter_email", jQuery("#tax_accounter_email").val());
                formData.append("tax_prepare", jQuery("#tax_prepare").val());
                formData.append("tax_prepare_date", jQuery("#tax_prepare_date").val());
                formData.append("user_id", jQuery("#user_id").val());
            });
            this.on("queuecomplete", function(file) {
                alert(" تم الطلب ينجاح ");
                window.location.href = "main.php?dir=clients/tax_services&page=add";
            });
        }
    }
</script>