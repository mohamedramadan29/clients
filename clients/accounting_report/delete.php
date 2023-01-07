<?php
if (isset($_GET['ar_id']) && is_numeric($_GET['ar_id'])) {
    $ar_id = $_GET['ar_id'];

    $stmt = $connect->prepare('SELECT * FROM accounting_report WHERE ar_id= ?');
    $stmt->execute([$ar_id]);
    $count = $stmt->rowCount();
    if ($count > 0) {
        $stmt = $connect->prepare('DELETE FROM accounting_report WHERE ar_id=?');
        $stmt->execute([$ar_id]);
        if ($stmt) { ?>
            <div class="alert-success">
                <?php echo $lang['delete_message']; ?>
                <?php header('LOCATION:main.php?dir=clients/accounting_report&page=report'); ?>
    <?php }
    }
}
