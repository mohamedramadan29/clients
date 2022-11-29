<?php
if ( isset( $_GET[ 'tax_id' ] ) ) {
    $tax_id = $_GET[ 'tax_id' ];
    $stmt = $connect->prepare( 'SELECT * FROM tax_report WHERE tax_id=?' );
    $stmt->execute( [ $tax_id ] );
    $user_data = $stmt->fetch();
}

if ( isset( $_GET[ 'ar_id' ] ) ) {
    $ar_id = $_GET[ 'ar_id' ];
    $stmt = $connect->prepare( 'SELECT * FROM accounting_report WHERE ar_id=?' );
    $stmt->execute( [ $ar_id ] );
    $user_data = $stmt->fetch();
}

if ( isset( $_GET[ 'con_id' ] ) ) {
    $con_id = $_GET[ 'con_id' ];
    $stmt = $connect->prepare( 'SELECT * FROM contract_report WHERE con_id=?' );
    $stmt->execute( [ $con_id ] );
    $user_data = $stmt->fetch();
}
?>

<div class='container-fluid'>
    <div class='data'>
        <div class='bread'>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label='breadcrumb'>
                <ol class='breadcrumb'>
                    <li class='breadcrumb-item'> <i class='fa fa-heart'></i> <a
                            href='main.php?dir=dashboard&page=dashboard'> ادارة مهام العملاء </a> <i
                            class='fa fa-chevron-left'></i> </li>
                    <li class='breadcrumb-item active' aria-current='page'> مذكرة تخطيط المراجعة الخاصة بالعميل</li>
                </ol>
            </nav>
        </div>
        <div class='myform'>
            <!-- ********************** END CODE ********************** -->
            <form id='add_form' class='form-group message_form ajax_form'
                action='main_ajax.php?dir=clients/accounting_report&page=ajax_add' method='POST' autocomplete='on'
                enctype='multipart/form-data'>
                <div class='row'>

                    <div class='col-lg-12'>
                        <div class='form-data'>
                            <div class='box2'>
                                <label id='name'> اســـم العميـــــــــل <span> * </span> </label>
                                <input required class='form-control' type='text' name='ar_client_name' value="<?php
if (isset($_GET['tax_id'])) {
    echo $user_data['tax_client_name'];
}
if (isset($_GET['ar_id'])) {
    echo $user_data['ar_client_name'];
}
if (isset($_GET['con_id'])) {
    echo $user_data['con_client_name'];
}
?>">
                            </div>
                            <div class='box2'>

                                <label id='name_en'> السنة المالية <span> * </span></label>
                                <input required class='form-control' type='text' name='ar_client_name' value="<?php
if (isset($_GET['tax_id'])) {
    echo $user_data['tax_years_required'];
}
if (isset($_GET['ar_id'])) {
    echo '--';
}
if (isset($_GET['con_id'])) {
    echo $user_data['con_years_required'];
}
?>">
                            </div>
                            <div class="box report_plane">
                                <label style="padding:5px" for="" class="bg bg-gray"> 1 ــ المهمة ونطاقها وإدارتها / </label>
                                <label for="" class="bg bg-gray"> 1 ــ1 : نطاق المهمة على ضوء خطاب الاتفاق الموقع عليه مع العميل: </label>
                            </div>
                            <div class='box submit_box'>
                                <input class='btn btn-primary text-center' name='add_car' type='submit'
                                    value='ارسال الطلب'>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        <!--*********************** START CODE ******************** -->
        <!-- Area to display the percent of progress -->
        <!-- area to display a message after completion of upload -->
        <div id='status'></div>
    </div>
</div>