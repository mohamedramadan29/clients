<?php
include "connect.php";
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $con_id = $_POST['con_id'];

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
    if (empty($formerror)) {
        $stmt = $connect->prepare("UPDATE contract_report SET
                     con_client_name=?,con_legal=?,con_account_num=?,con_uniq_num=?,con_account_type=?,
                     con_year_start=?,con_year_end=?,con_reason=?,con_client_prev=?,con_client_prev_img=?,
                     con_client_prev_year=?,con_office_name_prev=?,con_verify_website=?,
                     com_revision_prog=?,con_client_account_exer=?,con_years_required=?,
                     con_comparison_year=?,con_income=?,con_manager_name=?,con_manager_phone=?,con_manager_email=?,
                     con_accounter_name=?,con_accounter_phone=?,con_accounter_email=?,
                     con_card_num=?,con_upload_birth=?,con_upload_mobile=?,con_upload_email=?,con_fee_money=?,con_fee_client=?,
                     con_fee_import=?,con_fee_salary=?,con_fee_export=?,con_fee_sales=?,con_fee_expect=?,con_export_time=?,
                     con_copy_eng=?,con_copy_extra=?,con_copy_stamp=?,con_attach_stamp=?,con_upload_report=?,con_prepare=?,
                     con_prepare_time=? WHERE con_id=?");
        $stmt->execute([
            $con_client_name, $con_legal,
            $con_account_num, $con_uniq_num,
            $con_account_type, $con_year_start,
            $con_year_end, $con_reason,
            $con_client_prev, $con_client_prev_img,
            $con_client_prev_year, $con_office_name_prev,
            $con_verify_website, $com_revision_prog,
            $con_client_account_exer, $con_years_required,
            $con_comparison_year, $con_income,
            $con_manager_name, $con_manager_phone,
            $con_manager_email, $con_accounter_name,
            $con_accounter_phone, $con_accounter_email,
            $con_card_num,
            $con_upload_birth, $con_upload_mobile,
            $con_upload_email, $con_fee_money,
            $con_fee_client, $con_fee_import,
            $con_fee_salary, $con_fee_export,
            $con_fee_sales,
            $con_fee_expect,
            $con_export_time,
            $con_copy_eng,
            $con_copy_extra, $con_copy_stamp,
            $con_attach_stamp, $con_upload_report,
            $con_prepare, $con_prepare_time, $con_id
        ]);
        if ($stmt) { ?>
            <script>
                document.getElementById("edit_form").reset();
                setTimeout(() => {
                    let url = "main.php?dir=record_screen&page=view_contract&con_id=<?php echo $con_id; ?>";
                    window.location.href = url;
                }, 2000);
            </script>
            <?php
            ?>
            <div class='container alert alert-success' role='alert'> تم تعديل الطلب بنجاح </div>

        <?php
        }
    } else {
        foreach ($formerror as $errors) { ?>
            <div class="alert alert-danger"> <?php echo $errors; ?> </div>
<?php
        }
    }
} ?>