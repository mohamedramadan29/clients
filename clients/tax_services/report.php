<div class="container-fluid customer_report">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=client_dashboard"> لوحة تحكم الضيوف </a> <i class="fa fa-chevron-left"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page">مشاهدة العقود </li>
                </ol>
            </nav>
        </div>
        <!-------------------------- START NEW WHATSAPP MEMEBER------------------------->
        <!-- Content Row -->
        <!-- START MODEL TO ADD NEW RECORD  -->
    </div>
    <!-- END RECORD TO EDIT NEW RECORD  -->

    <div class="table-responsive">
        <div class="add_new_record">
            <button type="button" class="btn btn-primary btn-sm">
                <a href="main.php?dir=clients/tax_services&page=add">عقد ارتباط لخدمة زكاة وضرائب جديد</a> <i class="fa fa-plus"></i>
            </button>
        </div>
        <table id="tableone" class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>اسم العميـــــــــل</th>
                    <th> الكيان الـقـانـونـي </th>
                    <th> رقم السجل التجاري </th>
                    <th> اسم المالك/المدير </th>
                    <th> </th>
                </tr>
            </thead>
            <tbody> <?php
                    $stmt = $connect->prepare('SELECT * FROM tax_report  WHERE user_id=?');
                    $stmt->execute(array($_SESSION['client_id']));
                    $alltype = $stmt->fetchAll();
                    foreach ($alltype as $tax_data) { ?> <tr>
                        <td><?php echo $tax_data['tax_client_name']; ?> </td>
                        <td><?php echo $tax_data['tax_legal']; ?> </td>
                        <td> <?php echo $tax_data['tax_account_num']; ?> </td>
                        <td> <?php echo $tax_data['tax_manager_name']; ?> </td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="main.php?dir=clients/tax_services&page=view&tax_id=<?php echo $tax_data['tax_id']; ?> ">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a class="btn btn-primary btn-sm" href="main.php?dir=clients/tax_services&page=edit&tax_id=<?php echo $tax_data['tax_id']; ?> ">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a class="confirm btn btn-danger btn-sm" href="main.php?dir=clients/tax_services&page=delete&tax_id=<?php echo $tax_data['tax_id']; ?> ">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr> <?php
                            ?>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>