<?php
if (isset($_GET['priv_id']) && is_numeric($_GET['priv_id'])) {
    $priv_id = $_GET['priv_id'];

    $stmt = $connect->prepare('SELECT * FROM privilage WHERE priv_id= ?');
    $stmt->execute([$priv_id]);
    $count = $stmt->rowCount();
    if ($count > 0) {
        $stmt = $connect->prepare('DELETE FROM privilage WHERE priv_id=?');
        $stmt->execute([$priv_id]);
        if ($stmt) { ?>
<div class="alert-success">
    <?php echo $lang['delete_message']; ?>
    <?php header('LOCATION:main.php?dir=privilage&page=report'); ?>
    <?php }
    }
}