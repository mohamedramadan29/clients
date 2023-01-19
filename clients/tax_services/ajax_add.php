<?php
include "connect.php";
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $file = '';
    $file_tmp = '';
    $location = '';
    $uploadplace = "uploads/";
    if (isset($_FILES['file']['name'])) {

        foreach ($_FILES['file']['name'] as $key => $val) {
            $file = $_FILES['file']['name'][$key];
            $file_tmp = $_FILES['file']['tmp_name'][$key];
            move_uploaded_file($file_tmp, $uploadplace . $file);
            $location .= $file . " ";
        }
    }
    $tax_client_name = $_POST['tax_client_name'];
    $tax_legal = $_POST['tax_legal'];
    $tax_account_num =  $_POST['tax_account_num'];
    $tex_number =  $_POST['tex_number'];
    $tax_account_type = $_POST['tax_account_type'];
    $tax_year_start = $_POST['tax_year_start'];
    $tax_year_end = $_POST['tax_year_end'];
    $tax_serv_type = $_POST['tax_serv_type'];
    $tax_add_serv = $_POST['tax_add_serv'];
    $tax_serv_reason = $_POST['tax_serv_reason'];
    $tax_years_required = $_POST['tax_years_required'];
    $tax_income = $_POST['tax_income'];
    $tax_uniq_num = $_POST['tax_uniq_num'];
    $tax_client_prev = $_POST['tax_client_prev'];
    $tax_client_prev_img = $_POST['tax_client_prev_img'];
    $tax_client_prev_year = $_POST['tax_client_prev_year'];
    $tax_verify_website = $_POST['tax_verify_website'];
    $tax_client_account_exer = $_POST['tax_client_account_exer'];
    $tax_manager_name = $_POST['tax_manager_name'];
    $tax_manager_phone = $_POST['tax_manager_phone'];
    $tax_manager_email = $_POST['tax_manager_email'];
    $tax_accounter_name = $_POST['tax_accounter_name'];
    $tax_accounter_phone = $_POST['tax_accounter_phone'];
    $tax_accounter_email = $_POST['tax_accounter_email'];
    $tax_prepare = $_POST['tax_prepare'];
    $tax_prepare_date = $_POST['tax_prepare_date'];
    $user_id  = $_POST['user_id'];
    /// More Validation To Show Error
    $formerror = [];
    if (strlen($tax_account_num) > 10 || strlen($tax_account_num) < 10) {
        $formerror[] = 'يجب ان يكون رقم السجل التجاري 10 ارقام';
    }
    if (empty($tax_client_name)) {
        $formerror[] = '   من فضلك ادخل اسم العميل';
    }
    if (empty($tax_legal)) {
        $formerror[] = '      من فضلك ادخل الكيان القانوني      ';
    }
    if (empty($tax_prepare)) {
        $formerror[] = '   من فضلك ادخل من اعد الطلب   ';
    }
    /*
    if (empty($_FILES['files']['name'])) {
        $formerror[] = '   من فضلك ادخل  المرفقات   ';
    }*/
    if (empty($formerror)) {
        $stmt = $connect->prepare("INSERT INTO tax_report
                     (tax_client_name,tax_legal,tax_account_num,tex_number,tax_account_type,
                     tax_year_start,tax_year_end,tax_serv_type,tax_add_serv,tax_serv_reason,
                     tax_years_required,tax_income,tax_uniq_num,tax_client_prev,tax_client_prev_img,tax_client_prev_year,
                     tax_verify_website,tax_client_account_exer,tax_manager_name,tax_manager_phone,
                     tax_manager_email,tax_accounter_name,tax_accounter_phone,tax_accounter_email,
                     tax_prepare,tax_prepare_date,tax_files,user_id)
                VALUES (:ztax_client_name,:ztax_legal,:ztax_account_num,:ztex_number,:ztax_account_type,
                     :ztax_year_start,:ztax_year_end,:ztax_serv_type,:ztax_add_serv,
                     :ztax_serv_reason,:ztax_years_required,:ztax_income,:ztax_uniq_num,
                     :ztax_client_prev,:ztax_client_prev_img,:ztax_client_prev_year,
                     :ztax_verify_website,:ztax_client_account_exer,:ztax_manager_name,
                     :ztax_manager_phone,:ztax_manager_email,:ztax_accounter_name,
                     :ztax_accounter_phone,:ztax_accounter_email,
                     :ztax_prepare,:ztax_prepare_date,:ztax_files,:zuser_id)");
        $stmt->execute([
            'ztax_client_name' => $tax_client_name, 'ztax_legal' => $tax_legal,
            'ztax_account_num' => $tax_account_num,
            'ztex_number' => $tex_number,
            'ztax_account_type' => $tax_account_type,
            'ztax_year_start' => $tax_year_start, 'ztax_year_end' => $tax_year_end,
            'ztax_serv_type' => $tax_serv_type, 'ztax_add_serv' => $tax_add_serv,
            'ztax_serv_reason' => $tax_serv_reason, 'ztax_years_required' => $tax_years_required,
            'ztax_income' => $tax_income, 'ztax_uniq_num' => $tax_uniq_num,
            'ztax_client_prev' => $tax_client_prev, 'ztax_client_prev_img' => $tax_client_prev_img,
            'ztax_client_prev_year' => $tax_client_prev_year, 'ztax_verify_website' => $tax_verify_website,
            'ztax_client_account_exer' => $tax_client_account_exer, 'ztax_manager_name' => $tax_manager_name,
            'ztax_manager_phone' => $tax_manager_phone, 'ztax_manager_email' => $tax_manager_email,
            'ztax_accounter_name' => $tax_accounter_name, 'ztax_accounter_phone' => $tax_accounter_phone,
            'ztax_accounter_email' => $tax_accounter_email, 'ztax_prepare' => $tax_prepare, 'ztax_prepare_date' => $tax_prepare_date,
            'ztax_files' => $location, 'zuser_id' => $user_id
        ]);
        if ($stmt) { ?>
            <script>
                document.getElementById("add_form").reset();
                setTimeout(() => {
                    let url = "main.php?dir=clients/tax_services&page=report";
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
} ?>