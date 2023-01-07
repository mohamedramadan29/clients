<?php
include "connect.php";
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_car'])) {
        $ar_id = $_POST['ar_id'];

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
        $ar_client_name = $_POST['ar_client_name'];
        $ar_legal = $_POST['ar_legal'];
        $ar_account_num =  $_POST['ar_account_num'];
        $ar_manager_name = $_POST['ar_manager_name'];
        $ar_manager_phone = $_POST['ar_manager_phone'];
        $ar_client_email = $_POST['ar_client_email'];
        $ar_serv_reason = $_POST['ar_serv_reason'];
        $ar_doc_scop = $_POST['ar_doc_scop'];
        $ar_old_doc = $_POST['ar_old_doc'];
        $ar_new_doc = $_POST['ar_new_doc'];
        $ar_prepare = $_POST['ar_prepare'];
        $ar_prepare_date = $_POST['ar_prepare_date']; 

        /// More Validation To Show Error
        $formerror = [];
        if (strlen($ar_account_num) > 10 || strlen($ar_account_num) < 10) {
            $formerror[] = 'يجب ان يكون رقم السجل التجاري 10 ارقام';
        }
        if (empty($ar_client_name)) {
            $formerror[] = '   من فضلك ادخل اسم العميل';
        }
        if (empty($ar_legal)) {
            $formerror[] = '      من فضلك ادخل الكيان القانوني      ';
        }
        if (empty($ar_manager_name)) {
            $formerror[] = '    من فضلك ادخل اسم المدير ';
        }
        if (empty($ar_manager_phone)) {
            $formerror[] = '      من فضلك ادخل رقم جوال المدير    ';
        }
        if (empty($ar_client_email)) {
            $formerror[] = '       من فضلك ادخل البريد الالكتروني للعميل    ';
        }
        if (empty($ar_serv_reason)) {
            $formerror[] = '      من فضلك ادخل سبب طلب الخدمة    ';
        }
        if (empty($ar_doc_scop)) {
            $formerror[] = '      من فضلك ادخل   النطاق المستندي    ';
        }
        if (empty($ar_old_doc)) {
            $formerror[] = '      من فضلك ادخل اقدم تاريخ مستند    ';
        }
        if (empty($ar_new_doc)) {
            $formerror[] = ' من فضلك ادخل احدث تاريخ مستند';
        }
        if (empty($ar_prepare)) {
            $formerror[] = '   من فضلك ادخل من اعد الطلب   ';
        }

        if (empty($formerror)) {
            $stmt = $connect->prepare("UPDATE accounting_report SET
                     ar_client_name=?,ar_legal=?,ar_account_num=?,ar_manager_name=?,
                     ar_manager_phone=?,ar_client_email=?,ar_serv_reason=?,ar_doc_scop=?,ar_old_doc=?,
                     ar_new_doc=?,ar_prepare=?,ar_prepare_date=? WHERE ar_id=?");
            $stmt->execute([
                $ar_client_name,$ar_legal,$ar_account_num,$ar_manager_name,
                $ar_manager_phone,$ar_client_email,$ar_serv_reason,$ar_doc_scop,
                $ar_old_doc, $ar_new_doc,$ar_prepare,$ar_prepare_date,$ar_id
            ]);
            if($file_tmp !=""){
                $stmt = $connect->prepare("UPDATE accounting_report SET ar_files=? WHERE ar_id=?");
                $stmt->execute(array(
                    $location,
                    $ar_id
                ));

            }
            if ($stmt) { ?>
                <script>
                    document.getElementById("edit_form").reset();
                    setTimeout(() => {
                        let url = "main.php?dir=clients/accounting_report&page=report";
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
    }
} ?>