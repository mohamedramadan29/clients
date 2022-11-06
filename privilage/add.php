 <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['add_car'])) {
            $priv_users = $_POST['priv_users'];

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


            $stmt = $connect->prepare("INSERT INTO privilage 
                (priv_users,priv_show,priv_edit,priv_show_users,priv_edit_users,
                priv_arrive_branch,priv_create_report,priv_show_attach,
                priv_agree_refuse_serv,priv_edit_report,priv_confirm_report,
                priv_confirm_receive_money,priv_finish_ref,priv_serv_start,
                priv_upload_mon,priv_show_all_report,priv_show_edit_prev,
                priv_edit_clients,priv_edit_accounts,priv_change_refuson_team,
                priv_paper_work,priv_paper_revision,priv_paper_start_work,
                priv_paper_end_archieve,priv_paper_edit_delete_add)
                VALUES (:zpriv_users,:zpriv_show,:zpriv_edit,:zpriv_show_users,:zpriv_edit_users,
                :zpriv_arrive_branch,:zpriv_create_report,:zpriv_show_attach,
                :zpriv_agree_refuse_serv,:zpriv_edit_report,:zpriv_confirm_report,
                :zpriv_confirm_receive_money,:zpriv_finish_ref,:zpriv_serv_start,
                :zpriv_upload_mon,:zpriv_show_all_report,:zpriv_show_edit_prev,
                :zpriv_edit_clients,:zpriv_edit_accounts,:zpriv_change_refuson_team,
                :zpriv_paper_work,:zpriv_paper_revision,:zpriv_paper_start_work,
                :zpriv_paper_end_archieve,:zpriv_paper_edit_delete_add)");
            $stmt->execute([
                'zpriv_users' => $priv_users, 'zpriv_show' => $priv_show,
                'zpriv_edit' => $priv_edit, 'zpriv_show_users' => $priv_show_users,
                'zpriv_edit_users' => $priv_edit_users, 'zpriv_arrive_branch' => $priv_arrive_branch,
                'zpriv_create_report' => $priv_create_report, 'zpriv_show_attach' => $priv_show_attach,
                'zpriv_agree_refuse_serv' => $priv_agree_refuse_serv,
                'zpriv_edit_report' => $priv_edit_report,
                'zpriv_confirm_report' => $priv_confirm_report,
                'zpriv_confirm_receive_money' => $priv_confirm_receive_money,
                'zpriv_finish_ref' => $priv_finish_ref,
                'zpriv_serv_start' => $priv_serv_start,
                'zpriv_upload_mon' => $priv_upload_mon,
                'zpriv_show_all_report' => $priv_show_all_report,
                'zpriv_show_edit_prev' => $priv_show_edit_prev,
                'zpriv_edit_clients' => $priv_edit_clients,
                'zpriv_edit_accounts' => $priv_edit_accounts,
                'zpriv_change_refuson_team' => $priv_change_refuson_team,
                'zpriv_paper_work' => $priv_paper_work,
                'zpriv_paper_revision' => $priv_paper_revision,
                'zpriv_paper_start_work' => $priv_paper_start_work,
                'zpriv_paper_end_archieve' => $priv_paper_end_archieve,
                'zpriv_paper_edit_delete_add' => $priv_paper_edit_delete_add,
            ]);
            if ($stmt) { ?>
             <script>
                 document.getElementById("add_form").reset();
                 setTimeout(() => {
                     let url = "main.php?dir=privilage&page=report";
                     window.location.href = url;
                 }, 2000);
             </script>
             <div class="alert-success ">
                 تم اضافة صلاحيات جديد بنجاح

             </div>

 <?php }
        }
    }
