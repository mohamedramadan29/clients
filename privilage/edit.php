<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $priv_id = $_POST['priv_id'];
    // $priv_users = $_POST['priv_users'];
    if (isset($_POST['priv_show'])) {
        $priv_show = "نعم";
    } else {
        $priv_show = " ";
    }
    if (isset($_POST['priv_edit'])) {
        $priv_edit = "نعم";
    } else {
        $priv_edit = " ";
    }
    if (isset($_POST['priv_show_users'])) {
        $priv_show_users = "نعم";
    } else {
        $priv_show_users = " ";
    }
    if (isset($_POST['priv_edit_users'])) {
        $priv_edit_users = "نعم";
    } else {
        $priv_edit_users = " ";
    }
    if (isset($_POST['priv_arrive_branch'])) {
        $priv_arrive_branch = "نعم";
    } else {
        $priv_arrive_branch = " ";
    }
    if (isset($_POST['priv_create_report'])) {
        $priv_create_report = "نعم";
    } else {
        $priv_create_report = " ";
    }
    if (isset($_POST['priv_show_attach'])) {
        $priv_show_attach = "نعم";
    } else {
        $priv_show_attach = " ";
    }
    if (isset($_POST['priv_agree_refuse_serv'])) {
        $priv_agree_refuse_serv = "نعم";
    } else {
        $priv_agree_refuse_serv = " ";
    }
    if (isset($_POST['priv_edit_report'])) {
        $priv_edit_report = "نعم";
    } else {
        $priv_edit_report = " ";
    }
    if (isset($_POST['priv_confirm_report'])) {
        $priv_confirm_report = "نعم";
    } else {
        $priv_confirm_report = " ";
    }
    if (isset($_POST['priv_confirm_receive_money'])) {
        $priv_confirm_receive_money = "نعم";
    } else {
        $priv_confirm_receive_money = " ";
    }
    if (isset($_POST['priv_finish_ref'])) {
        $priv_finish_ref = "نعم";
    } else {
        $priv_finish_ref = " ";
    }
    if (isset($_POST['priv_serv_start'])) {
        $priv_serv_start = "نعم";
    } else {
        $priv_serv_start = " ";
    }
    if (isset($_POST['priv_upload_mon'])) {
        $priv_upload_mon = "نعم";
    } else {
        $priv_upload_mon = " ";
    }
    if (isset($_POST['priv_show_all_report'])) {
        $priv_show_all_report = "نعم";
    } else {
        $priv_show_all_report = " ";
    }
    if (isset($_POST['priv_show_edit_prev'])) {
        $priv_show_edit_prev = "نعم";
    } else {
        $priv_show_edit_prev = " ";
    }
    if (isset($_POST['priv_edit_clients'])) {
        $priv_edit_clients = "نعم";
    } else {
        $priv_edit_clients = " ";
    }
    if (isset($_POST['priv_edit_accounts'])) {
        $priv_edit_accounts = "نعم";
    } else {
        $priv_edit_accounts = " ";
    }
    if (isset($_POST['priv_change_refuson_team'])) {
        $priv_change_refuson_team = "نعم";
    } else {
        $priv_change_refuson_team = " ";
    }
    if (isset($_POST['priv_paper_work'])) {
        $priv_paper_work = "نعم";
    } else {
        $priv_paper_work = " ";
    }
    if (isset($_POST['priv_paper_revision'])) {
        $priv_paper_revision = "نعم";
    } else {
        $priv_paper_revision = " ";
    }
    if (isset($_POST['priv_paper_start_work'])) {
        $priv_paper_start_work = "نعم";
    } else {
        $priv_paper_start_work = " ";
    }
    if (isset($_POST['priv_paper_end_archieve'])) {
        $priv_paper_end_archieve = "نعم";
    } else {
        $priv_paper_end_archieve = " ";
    }
    if (isset($_POST['priv_paper_edit_delete_add'])) {
        $priv_paper_edit_delete_add = "نعم";
    } else {
        $priv_paper_edit_delete_add = " ";
    }

    /// More Validation To Show Error

    $stmt = $connect->prepare("UPDATE privilage SET 
     priv_show=?,priv_edit=?,priv_show_users=?,priv_edit_users=?,
    priv_arrive_branch=?,priv_create_report=?,priv_show_attach=?,
    priv_agree_refuse_serv=?,priv_edit_report=?,priv_confirm_report=?,
    priv_confirm_receive_money=?,priv_finish_ref=?,priv_serv_start=?,
    priv_upload_mon=?,priv_show_all_report=?,priv_show_edit_prev=?,
    priv_edit_clients=?,priv_edit_accounts=?,priv_change_refuson_team=?,
    priv_paper_work=?,priv_paper_revision=?,priv_paper_start_work=?,
    priv_paper_end_archieve=?,priv_paper_edit_delete_add=? WHERE priv_id=?");
    $stmt->execute([
        $priv_show, $priv_edit, $priv_show_users, $priv_edit_users,
        $priv_arrive_branch, $priv_create_report, $priv_show_attach,
        $priv_agree_refuse_serv, $priv_edit_report, $priv_confirm_report,
        $priv_confirm_receive_money, $priv_finish_ref, $priv_serv_start,
        $priv_upload_mon, $priv_show_all_report, $priv_show_edit_prev,
        $priv_edit_clients, $priv_edit_accounts, $priv_change_refuson_team,
        $priv_paper_work, $priv_paper_revision, $priv_paper_start_work,
        $priv_paper_end_archieve, $priv_paper_edit_delete_add, $priv_id
    ]);
    if ($stmt) { ?>
        <div class="container">
            <div class="alert-success">
                تم تعديل الصلاحيات بنجاح

                <?php // header('refresh:3,url=main.php?dir=city&page=report'); 
                ?>
            </div>
        </div>

<?php }
}
