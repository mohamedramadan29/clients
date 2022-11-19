<?php
if (isset($_SESSION['client_id'])) {
    $client_id = $_SESSION['client_id'];
    $stmt = $connect->prepare("SELECT * FROM users WHERE user_id=?");
    $stmt->execute(array($client_id));
    $client_data = $stmt->fetch();
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_car'])) {
        $user_id = $_POST['user_id'];

        $user_personal_name = $_POST['user_personal_name'];
        $user_password = $_POST['user_password'];
        $user_phone =  $_POST['user_phone'];
        $user_email = $_POST['user_email'];
        $user_city = $_POST['user_city'];

        $stmt = $connect->prepare("UPDATE users SET
                    user_personal_name=?,user_password=?,user_phone=?,user_email=?,
                    user_city=? WHERE user_id=?");
        $stmt->execute([
            $user_personal_name, $user_password, $user_phone, $user_email,
            $user_city, $user_id
        ]); 
        if ($stmt) { ?> 
            <script>
                setTimeout(() => {
                    let url = "main.php?dir=clients/account&page=edit";
                    window.location.href = url;
                }, 3000);
            </script> 
            <?php
            ?>
            <div class='container alert alert-success' role='alert'> راائع !! تم تعديل بياناتك بنجاح </div>
            
<?php
        }
    }
} ?>
<div class="container-fluid">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=client_dashboard"> لوحة تحكم الضيوف </a> <i class="fa fa-chevron-left"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page"> تعديل الحساب </li>
                </ol>
            </nav>
        </div>
        <div class="myform">
            <!-- ********************** END CODE ********************** -->
            <form id="edit_form" class="form-group message_form" action="" method="POST" autocomplete="on" enctype="multipart/form-data">
                <input type="hidden" name="user_id" value="<?php echo $client_data["user_id"]; ?>">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-data">
                            <div class="box2">
                                <label id="car_model"> الاسم الشخصي </label>
                                <input required class="form-control" type="text" name="user_personal_name" value="<?php echo $client_data["user_personal_name"];  ?>">
                            </div>
                            <div class="box2">
                                <label id="car_model"> اسم المستخدم</label>
                                <input disabled class="form-control" type="text" name="user_name" value="<?php echo $client_data["user_name"];  ?>">
                            </div>
                            <div class="box2">
                                <label id="car_model"> البريد الالكتروني </label>
                                <input required class="form-control" type="email" name="user_email" value="<?php echo $client_data["user_email"];  ?>">
                            </div>
                            <div class="box2">
                                <label id="car_model"> رقم الهاتف </label>
                                <input required class="form-control" type="text" name="user_phone" value="<?php echo $client_data["user_phone"];  ?>">
                            </div>
                            <div class="box2">
                                <label id="car_model"> كلمة المرور </label>
                                <input required class="form-control" type="password" name="user_password" value="<?php echo $client_data["user_password"];  ?>">
                            </div>
                            <div class="box2">
                                <label id="car_model"> المدينة </label>
                                <input required class="form-control" type="text" name="user_city" value="<?php echo $client_data["user_city"];  ?>">
                            </div>
                            <div class="box submit_box">
                                <input class="btn btn-primary text-center" name="add_car" type="submit" value=" تعديل البيانات  ">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>