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
        
        $ar_client_name = $_POST['ar_client_name'];
        echo $ar_client_name;
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
        $user_id  = $_SESSION['client_id'];
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
        if (empty($_FILES['file']['name'])) {
            $formerror[] = '   من فضلك ادخل  المرفقات   ';
        }
        if (empty($formerror)) {
            $stmt = $connect->prepare("INSERT INTO accounting_report
                    (ar_client_name,ar_legal,ar_account_num,ar_manager_name,
                    ar_manager_phone,ar_client_email,ar_serv_reason,ar_doc_scop,ar_old_doc,
                    ar_new_doc,ar_prepare,ar_prepare_date,ar_files,user_id)
                VALUES (:zar_client_name,:zar_legal,:zar_account_num,:zar_manager_name
                ,:zar_manager_phone,:zar_client_email,:zar_serv_reason,:zar_doc_scop
                ,:zar_old_doc,:zar_new_doc,:zar_prepare,:zar_prepare_date,:zar_files,:zuser_id)");
            $stmt->execute([
                'zar_client_name' => $ar_client_name,
                'zar_legal' => $ar_legal,
                'zar_account_num' => $ar_account_num,
                'zar_manager_name' => $ar_manager_name,
                'zar_manager_phone' => $ar_manager_phone,
                'zar_client_email' => $ar_client_email,
                'zar_serv_reason' => $ar_serv_reason,
                'zar_doc_scop' => $ar_doc_scop,
                'zar_old_doc' => $ar_old_doc,
                'zar_new_doc' => $ar_new_doc,
                'zar_prepare' => $ar_prepare,
                'zar_prepare_date' => $ar_prepare_date,
                'zar_files' => $location,
                'zuser_id' => $user_id,
            ]);
            if ($stmt) { ?>
                <script>
                    document.getElementById("add_form").reset();
                    setTimeout(() => {
                        let url = "main.php?dir=clients/accounting_report&page=report";
                        window.location.href = url;
                    }, 2000);
                </script>
                <!--  <div class="alert-success">
                    </div> -->
                <?php
                ?>
                <div class='container alert alert-success' role='alert'>
                     <script>
                        alert(" تم ارسال الطلب بنجاح ");
                     </script>
               </div>
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