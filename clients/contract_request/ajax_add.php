<?php
include "connect.php";
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_car'])) {

        $file = '';
        $file_tmp = '';
        $location = '';
        $uploadplace = "uploads/";
        if (isset($_FILES['files']['name'])) {

            foreach ($_FILES['files']['name'] as $key => $val) {
                $file = $_FILES['files']['name'][$key];
                $file_tmp = $_FILES['files']['tmp_name'][$key];
                move_uploaded_file($file_tmp, $uploadplace . $file);
                $location .= $file . " ";
            }
        }
        $con_client_name = $_POST['con_client_name'];
        $con_legal = $_POST['con_legal'];
        $con_account_num =  $_POST['con_account_num'];
        $con_uniq_num = $_POST['con_uniq_num'];
        $con_account_type = $_POST['con_account_type'];
        $con_year_start = $_POST['con_year_start'];
        $con_year_end = $_POST['con_year_end'];
        $con_reason = $_POST['con_reason'];
        $con_client_prev = $_POST['con_client_prev'];
        $con_client_prev_img = $_POST['con_client_prev_img'];
        $con_client_prev_year = $_POST['con_client_prev_year'];
        $con_office_name_prev = $_POST['con_office_name_prev'];
        $con_verify_website = $_POST['con_verify_website'];
        $com_revision_prog = $_POST['com_revision_prog'];
        $con_client_account_exer = $_POST['con_client_account_exer'];
        $con_years_required = $_POST['con_years_required'];
        $con_comparison_year = $_POST['con_comparison_year'];
        $con_income = $_POST['con_income'];
        $con_manager_name = $_POST['con_manager_name'];
        $con_manager_phone = $_POST['con_manager_phone'];
        $con_manager_email = $_POST['con_manager_email'];
        $con_accounter_name = $_POST['con_accounter_name'];
        $con_accounter_phone = $_POST['con_accounter_phone'];
        $con_accounter_email = $_POST['con_accounter_email'];
        $con_card_num = $_POST['con_card_num'];
        $con_upload_birth = $_POST['con_upload_birth'];
        $con_upload_mobile = $_POST['con_upload_mobile'];
        $con_upload_email = $_POST['con_upload_email'];
        $con_fee_money = $_POST['con_fee_money'];
        $con_fee_client = $_POST['con_fee_client'];
        $con_fee_import = $_POST['con_fee_import'];
        $con_fee_salary = $_POST['con_fee_salary'];
        $con_fee_export = $_POST['con_fee_export'];
        $con_fee_sales = $_POST['con_fee_sales'];
        $con_fee_expect = $_POST['con_fee_expect'];
        $con_export_time = $_POST['con_export_time'];
        $con_copy_eng = $_POST['con_copy_eng'];
        $con_copy_extra = $_POST['con_copy_extra'];
        $con_copy_stamp = $_POST['con_copy_stamp'];
        $con_attach_stamp = $_POST['con_attach_stamp'];
        $con_upload_report = $_POST['con_upload_report'];
        $con_prepare = $_POST['con_prepare'];
        $con_prepare_time = $_POST['con_prepare_time'];
        $user_id  = $_SESSION['client_id'];
        /// More Validation To Show Error
        $formerror = [];
        if (strlen($con_account_num) > 10 || strlen($con_account_num) < 10) {
            $formerror[] = 'يجب ان يكون رقم السجل التجاري 10 ارقام';
        }
        if (empty($con_client_name)) {
            $formerror[] = '   من فضلك ادخل اسم العميل';
        }
        if (empty($con_legal)) {
            $formerror[] = '      من فضلك ادخل الكيان القانوني      ';
        }
        if (empty($con_prepare)) {
            $formerror[] = '   من فضلك ادخل من اعد الطلب   ';
        }

        if (empty($_FILES['files']['name'])) {
            $formerror[] = '   من فضلك ادخل  المرفقات   ';
        }
        if (empty($formerror)) {
            $stmt = $connect->prepare("INSERT INTO contract_report
                     (con_client_name,con_legal,con_account_num,con_uniq_num,con_account_type,
                     con_year_start,con_year_end,con_reason,con_client_prev,con_client_prev_img,
                     con_client_prev_year,con_office_name_prev,con_verify_website,
                     com_revision_prog,con_client_account_exer,con_years_required,
                     con_comparison_year,con_income,con_manager_name,con_manager_phone,con_manager_email,
                     con_accounter_name,con_accounter_phone,con_accounter_email,
                     con_card_num,con_upload_birth,con_upload_mobile,con_upload_email,con_fee_money,con_fee_client,
                     con_fee_import,con_fee_salary,con_fee_export,con_fee_sales,con_fee_expect,con_export_time,
                     con_copy_eng,con_copy_extra,con_copy_stamp,con_attach_stamp,con_upload_report,con_prepare,
                     con_prepare_time,con_files,user_id)
                VALUES (:zcon_client_name,:zcon_legal,:zcon_account_num,:zcon_uniq_num,:zcon_account_type,
                     :zcon_year_start,:zcon_year_end,:zcon_reason,:zcon_client_prev,:zcon_client_prev_img,
                     :zcon_client_prev_year,:zcon_office_name_prev,:zcon_verify_website,
                     :zcom_revision_prog,:zcon_client_account_exer,:zcon_years_required,
                     :zcon_comparison_year,:zcon_income,:zcon_manager_name,:zcon_manager_phone,:zcon_manager_email,
                     :zcon_accounter_name,:zcon_accounter_phone,:zcon_accounter_email,
                     :zcon_card_num,:zcon_upload_birth,:zcon_upload_mobile,:zcon_upload_email,:zcon_fee_money,:zcon_fee_client,
                     :zcon_fee_import,:zcon_fee_salary,:zcon_fee_export,:zcon_fee_sales,:zcon_fee_expect,
                     :zcon_export_time,
                     :zcon_copy_eng,:zcon_copy_extra,:zcon_copy_stamp,:zcon_attach_stamp,:zcon_upload_report,:zcon_prepare,
                     :zcon_prepare_time,:zcon_files,:zuser_id)");
            $stmt->execute([
                'zcon_client_name' => $con_client_name, 'zcon_legal' => $con_legal,
                'zcon_account_num' => $con_account_num, 'zcon_uniq_num' => $con_uniq_num,
                'zcon_account_type' => $con_account_type, 'zcon_year_start' => $con_year_start,
                'zcon_year_end' => $con_year_end, 'zcon_reason' => $con_reason,
                'zcon_client_prev' => $con_client_prev, 'zcon_client_prev_img' => $con_client_prev_img,
                'zcon_client_prev_year' => $con_client_prev_year, 'zcon_office_name_prev' => $con_office_name_prev,
                'zcon_verify_website' => $con_verify_website, 'zcom_revision_prog' => $com_revision_prog,
                'zcon_client_account_exer' => $con_client_account_exer, 'zcon_years_required' => $con_years_required,
                'zcon_comparison_year' => $con_comparison_year, 'zcon_income' => $con_income,
                'zcon_manager_name' => $con_manager_name, 'zcon_manager_phone' => $con_manager_phone,
                'zcon_manager_email' => $con_manager_email, 'zcon_accounter_name' => $con_accounter_name,
                'zcon_accounter_phone' => $con_accounter_phone, 'zcon_accounter_email' => $con_accounter_email,
                'zcon_card_num' => $con_card_num,
                'zcon_upload_birth' => $con_upload_birth, 'zcon_upload_mobile' => $con_upload_mobile,
                'zcon_upload_email' => $con_upload_email, 'zcon_fee_money' => $con_fee_money,
                'zcon_fee_client' => $con_fee_client, 'zcon_fee_import' => $con_fee_import,
                'zcon_fee_salary' => $con_fee_salary, 'zcon_fee_export' => $con_fee_export,
                'zcon_fee_sales' => $con_fee_sales,
                'zcon_fee_expect' => $con_fee_expect,
                'zcon_export_time' => $con_export_time,
                'zcon_copy_eng' => $con_copy_eng,
                'zcon_copy_extra' => $con_copy_extra, 'zcon_copy_stamp' => $con_copy_stamp,
                'zcon_attach_stamp' => $con_attach_stamp, 'zcon_upload_report' => $con_upload_report,
                'zcon_prepare' => $con_prepare, 'zcon_prepare_time' => $con_prepare_time,
                'zcon_files' => $location, 'zuser_id' => $user_id,
            ]);
            if ($stmt) { ?>
                <script>
                    document.getElementById("add_form").reset();
                    setTimeout(() => {
                        let url = "main.php?dir=clients/contract_request&page=report";
                        window.location.href = url;
                    }, 2000);
                </script>
                <!--  <div class="alert-success">
                    </div> -->
                <?php
                ?>
                <div class='container alert alert-success' role='alert'> تم ارسال الطلب بنجاح </div>
                <?php //header('refresh:3;url=main.php?dir=fire&page=report'); 
                ?>
            <?php
            }
        } else {
            foreach ($formerror as $errors) { ?>
                <div class="alert alert-danger"> <?php echo $errors; ?> </div>
<?php
            }
        }
    }
} ?>