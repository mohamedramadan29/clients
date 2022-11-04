<?php
ob_start();
$pagetitle = 'الرئيسية';
session_start();
include 'init.php';
?>
        <?php
        $page = '';
        if (isset($_GET['page']) && isset($_GET['dir'])) {
            $page = $_GET['page'];
            $dir = $_GET['dir'];
        } else {
            $page = 'manage';
        }

        // START admin_users
        if ($dir == 'admin_users' && $page == 'add') {
            include 'admin_users/add.php';
        } elseif ($dir == 'admin_users' && $page == 'edit') {
            include 'admin_users/edit.php';
        }
        // START Accounting Report ( عقد إعداد تقرير محاسبي )
        if ($dir == 'clients/accounting_report' && $page == 'ajax_add') {
            include 'clients/accounting_report/ajax_add.php';
        } elseif ($dir == 'clients/accounting_report' && $page == 'ajax_edit') {
            include 'clients/accounting_report/ajax_edit.php';
        }
        // END Accounting Report

        // START Tax Services ( نموذج طلب عقد ارتباط لخدمة زكاة وضرائب)
        if ($dir == 'clients/tax_services' && $page == 'ajax_add') {
            include 'clients/tax_services/ajax_add.php';
        } elseif ($dir == 'clients/tax_services' && $page == 'ajax_edit') {
            include 'clients/tax_services/ajax_edit.php';
        }
        // END Tax Services
        ?>