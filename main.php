<?php
ob_start();
$pagetitle = 'الرئيسية';
session_start();
include 'init.php';
if (isset($_SESSION['client_id'])) {
    include $tem . 'top_navbar_client.php';
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
        /***************** START CLIENTS FOLDER**************** */
        // START Accounting Report ( عقد إعداد تقرير محاسبي )
        if (isset($_SESSION['client_id'])) {
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
        }
        // END Accounting Report

        /***************** START CLIENTS FOLDER**************** */
        // START Tax Services ( نموذج طلب عقد ارتباط لخدمة زكاة وضرائب)
        if (isset($_SESSION['client_id'])) {
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
        }
        // END Tax Services

        // START Contract Request ( نموذج طلب عقد إرتباط مراجعة )
        if (isset($_SESSION['client_id'])) {
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
        }
        // END Contract Request
        // START Account ( نموذج طلب عقد إرتباط مراجعة )
        if (isset($_SESSION['client_id'])) {
            if ($dir == 'clients/account' && $page == 'add') {
                include 'clients/account/add.php';
            } elseif ($dir == 'clients/account' && $page == 'edit') {
                include 'clients/account/edit.php';
            }
        }
        // END Account
        /***************** END CLIENTS FOLDER**************** */
        // END CONTACT
        if ($dir == 'dashboard' && $page == 'dashboard') {
            include 'dashboard.php';
        }
        if ($dir == 'dashboard' && $page == 'client_dashboard') {
            include 'clients/client_dashboard.php';
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

ob_end_flush();
?>
<script type="text/javascript">
    // customer script


    var dev = $("#logo").dropify({});
    dev = dev.data("dropify")
    var dev2 = $("#logo2").dropify({});
    dev2 = dev2.data("dropify")
    var dev3 = $("#logo3").dropify({});
    dev2 = dev3.data("dropify")
    var dev4 = $("#logo4").dropify({});
    dev4 = dev4.data("dropify")
</script>

<script>
    $(function() {
        $("#rating").rateYo({
            rating: 2,
            fullStar: true,
            starWidth: "27px"
        });
    });

    // Getter
    var normalFill = $("#rating").rateYo("option", "fullStar"); //returns true

    // Setter
    $("#rating").rateYo("option", "fullStar", true); //returns a jQuery Element

    // END ACTIVE LINK
</script>