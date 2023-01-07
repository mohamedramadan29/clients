<?php
if (isset($_GET['con_id']) && is_numeric($_GET['con_id'])) {
    $con_id = $_GET['con_id'];

    $stmt = $connect->prepare('SELECT * FROM contract_report WHERE con_id= ?');
    $stmt->execute([$con_id]);
    $count = $stmt->rowCount();
    if ($count > 0) {
        $stmt = $connect->prepare('DELETE FROM contract_report WHERE con_id=?');
        $stmt->execute([$con_id]);
        if ($stmt) { ?>
            <div class="alert-success">
                <?php echo $lang['delete_message']; ?>
                <?php header('LOCATION:main.php?dir=clients/contract_request&page=report'); ?>
    <?php }
    }
}
