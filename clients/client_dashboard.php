<?php
ob_start();
$pagetitle = ' الرئيسية  '; 
?>
<div class="container dashboard">
    <div class="bread bread_dasha">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=client_dashboard"> لوحة تحكم الضيوف </a> <i class="fa fa-chevron-left"></i> </li>
                <li class="breadcrumb-item active" aria-current="page"> <?php echo $lang['dashboard']; ?> </li>
            </ol>
        </nav>
    </div>
</div>

<div class="client_serv">
    <div class="container">
        <div class="data">
            <h2> الخدمات </h2>
            <a href="" class="btn btn-primary"> خدمة مراجعه قوائم مالية </a>
            <a href="" class="btn btn-warning"> خدمة اعداد تقرير محاسبي </a>
            <a href="" class="btn btn-secondary"> خدمة زكاة وضرائب</a>
            <a href="" class="btn btn-dark">الدخول لشاشات السجلات</a>
        </div>
    </div>
</div>


<?php ob_end_flush();
?>