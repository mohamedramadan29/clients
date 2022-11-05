<?php
if (isset($_GET['tax_id']) && is_numeric($_GET['tax_id'])) {
    $tax_id = $_GET['tax_id'];

    $stmt = $connect->prepare('SELECT * FROM tax_report WHERE tax_id= ?');
    $stmt->execute([$tax_id]);
    $count = $stmt->rowCount();
    if ($count > 0) {
        $stmt = $connect->prepare('DELETE FROM tax_report WHERE tax_id=?');
        $stmt->execute([$tax_id]);
        if ($stmt) { ?>
            <div class="alert-success">
                <?php echo $lang['delete_message']; ?>
                <?php header('LOCATION:main.php?dir=clients/tax_services&page=report'); ?>
    <?php }
    }
}
