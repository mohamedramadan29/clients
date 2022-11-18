<?php
ob_start();
$pagetitle = ' الرئيسية  ';
?>
<div class="container-fluid dashboard">
    <div class="bread bread_dasha">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=dashboard"> <?php echo  $website_title; ?></a> <i class="fa fa-chevron-left"></i> </li>
                <li class="breadcrumb-item active" aria-current="page"> <?php echo $lang['dashboard']; ?> </li>
            </ol>
        </nav>
    </div>
 
</div>
<?php ob_end_flush();
?>