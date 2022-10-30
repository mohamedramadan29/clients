<?php
ob_start();
$pagetitle = 'الرئيسية';
session_start();
include 'init.php';
include $tem . 'top_navbar.php';
if (isset($_SESSION['client_id'])) {
    include $tem . 'left_sidebar_client.php';
} else {
    include $tem . 'left_sidebar.php';
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

        // START admin_users
        if ($dir == 'contract_request' && $page == 'add') {
            // include 'whatsapp/add.php';
        } elseif ($dir == 'contract_request' && $page == 'edit') {
            include 'contract_request/edit.php';
        } elseif ($dir == 'contract_request' && $page == 'delete') {
            include 'contract_request/delete.php';
        } elseif ($dir == 'contract_request' && $page == 'report') {
            include 'contract_request/report.php';
        }
        // END admin_users 
        if ($dir == 'dashboard' && $page == 'client_dashboard') {
            include 'client_dashboard.php';
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