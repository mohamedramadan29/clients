<?php
include "connect.php";
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        $tax_id = $_POST['tax_id'];
        $tax_client_name = $_POST['tax_client_name'];
        $tax_legal = $_POST['tax_legal'];
        $tax_account_num =  $_POST['tax_account_num'];
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
        //$user_id  = $_SESSION['client_id'];
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
        if (empty($formerror)) {
            $stmt = $connect->prepare("UPDATE tax_report SET 
                     tax_client_name=?,tax_legal=?,tax_account_num=?,tax_account_type=?,
                     tax_year_start=?,tax_year_end=?,tax_serv_type=?,tax_add_serv=?,tax_serv_reason=?,
                     tax_years_required=?,tax_income=?,tax_uniq_num=?,tax_client_prev=?,tax_client_prev_img=?,tax_client_prev_year=?,
                     tax_verify_website=?,tax_client_account_exer=?,tax_manager_name=?,tax_manager_phone=?,
                     tax_manager_email=?,tax_accounter_name=?,tax_accounter_phone=?,tax_accounter_email=?,
                     tax_prepare=?,tax_prepare_date=? WHERE tax_id=?");
            $stmt->execute([
                $tax_client_name, $tax_legal, $tax_account_num, $tax_account_type,
                $tax_year_start, $tax_year_end, $tax_serv_type, $tax_add_serv,
                $tax_serv_reason, $tax_years_required, $tax_income,
                $tax_uniq_num, $tax_client_prev, $tax_client_prev_img,
                $tax_client_prev_year, $tax_verify_website, $tax_client_account_exer,
                $tax_manager_name, $tax_manager_phone, $tax_manager_email,
                $tax_accounter_name, $tax_accounter_phone, $tax_accounter_email,
                $tax_prepare, $tax_prepare_date, $tax_id
            ]);
            if ($stmt) { ?>
                <script>
                    
                    document.getElementById("edit_form").reset();
                    setTimeout(() => {
                        let url = "main.php?dir=record_screen&page=view_tax&tax_id=<?php echo $tax_id; ?>";
                        window.location.href = url;
                    }, 2000);
                    
                </script>
                <!--  <div class="alert-success">
                    </div> -->
                <?php
                ?>
                <div class='container alert alert-success' role='alert'> تم تعديل الطلب بنجاح </div>
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