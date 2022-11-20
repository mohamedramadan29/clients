<?php
include "connect.php";
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $con_id = $_POST['con_id'];
    $date_issuance = $_POST['date_issuance'];
    $date_start_services = $_POST['date_start_services'];
    $con_account_num =  $_POST['con_account_num'];
    $con_uniq_num = $_POST['con_uniq_num'];
    $date_end_services = $_POST['date_end_services'];
    $send_signed_contract = $_POST['send_signed_contract'];
    $con_year_end = $_POST['con_year_end'];
    $send_payment_fee = $_POST['send_payment_fee'];
    $status = $_POST['status'];
    $agree_services = $_POST['agree_services'];
    $send_link_note = $_POST['send_link_note'];
    $send_sign_contract_payment_receipt = $_POST['send_sign_contract_payment_receipt'];
    $verification_contract_req = $_POST['verification_contract_req'];
    $end_revision_work = $_POST['end_revision_work'];
    $send_end_fee = $_POST['send_end_fee'];
    $deposit_plat_form = $_POST['deposit_plat_form'];
    $stmt = $connect->prepare("UPDATE contract_report SET
                date_issuance=?,date_start_services=?,date_end_services=?,send_signed_contract=?,
send_payment_fee=?,status=?,agree_services=?,send_link_note=?,send_sign_contract_payment_receipt=?,
verification_contract_req=?,end_revision_work=?,send_end_fee=?,
deposit_plat_form=? WHERE con_id=?");
    $stmt->execute([
        $date_issuance,
        $date_start_services,
        $date_end_services,
        $send_signed_contract,
        $send_payment_fee,
        $status,
        $agree_services,
        $send_link_note,
        $send_sign_contract_payment_receipt,
        $verification_contract_req,
        $end_revision_work,
        $send_end_fee,
        $deposit_plat_form,
        $con_id,
    ]);

    if ($stmt) { ?>

        <!--  <div class="alert-success">
                    </div> -->
        <?php
        ?>
        <div class='container alert alert-success' role='alert'> تم تعديل الطلب بنجاح </div>
        <?php //header('refresh:3;url=main.php?dir=fire&page=report'); 
        ?>
<?php
    }
} ?>