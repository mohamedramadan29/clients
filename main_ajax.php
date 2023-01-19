<?php
ob_start();
$pagetitle = 'الرئيسية';
session_start();
include 'init.php';
?>
<?php
$page = '';
if ( isset( $_GET[ 'page' ] ) && isset( $_GET[ 'dir' ] ) ) {
    $page = $_GET[ 'page' ];
    $dir = $_GET[ 'dir' ];
} else {
    $page = 'manage';
}

// START admin_users
if ( $dir == 'admin_users' && $page == 'add' ) {
    include 'admin_users/add.php';
} elseif ( $dir == 'admin_users' && $page == 'edit' ) {
    include 'admin_users/edit.php';
}

// START Privivlage
if ( $dir == 'privilage' && $page == 'add' ) {
    include 'privilage/add.php';
} elseif ( $dir == 'privilage' && $page == 'edit' ) {
    include 'privilage/edit.php';
}
// START ADMIN RECORD SCREEN
if ( $dir == 'record_screen' && $page == 'edit_account' ) {
    include 'record_screen/edit_account.php';
} elseif ( $dir == 'record_screen' && $page == 'edit_contract' ) {
    include 'record_screen/edit_contract.php';
} elseif ( $dir == 'record_screen' && $page == 'edit_tax' ) {
    include 'record_screen/edit_tax.php';
}

// END ADMIN RECORD SCREEN
// START Accounting Report ( عقد إعداد تقرير محاسبي )
if ( $dir == 'clients/accounting_report' && $page == 'ajax_add' ) {
    include 'clients/accounting_report/ajax_add.php';
} elseif ( $dir == 'clients/accounting_report' && $page == 'ajax_edit' ) {
    include 'clients/accounting_report/ajax_edit.php';
}
// END Accounting Report

// START Tax Services ( نموذج طلب عقد ارتباط لخدمة زكاة وضرائب )
if ( $dir == 'clients/tax_services' && $page == 'ajax_add' ) {
    include 'clients/tax_services/ajax_add.php';
} elseif ( $dir == 'clients/tax_services' && $page == 'ajax_edit' ) {
    include 'clients/tax_services/ajax_edit.php';
}
// END Tax Services
// START Contract Request ( نموذج طلب عقد إرتباط مراجعة )
if ( $dir == 'clients/contract_request' && $page == 'ajax_add' ) {
    include 'clients/contract_request/ajax_add.php';
} elseif ( $dir == 'clients/contract_request' && $page == 'ajax_edit' ) {
    include 'clients/contract_request/ajax_edit.php';
}
// END Contract Request
?>

