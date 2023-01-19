<?php
$pagetitle = 'Login To Company';
ob_start();
session_start();
$Nonavbar = '';
include 'init.php';
if (isset($_POST['user_login'])) {
    // تسجيل دخول الضيف 
    $client_name = $_POST['client_name'];
    $client_password = $_POST['client_password'];
    $stmt = $connect->prepare(
        "SELECT  * FROM users WHERE user_name=? AND user_password=? AND user_type='ضيف' AND user_stat=1 LIMIT 1"
    );
    $stmt->execute([$client_name, $client_password]);
    $data = $stmt->fetch();
    $admindata = $stmt->rowcount();
    if ($admindata > 0) {
        $_SESSION['client_id'] = $data['user_id'];
        header('Location:main.php?dir=dashboard&page=client_dashboard');
        exit();
    }
}
?>

<?php
// تسجيل دخول الموظف
if (isset($_POST['emp_login'])) {
    $emp_name = $_POST['emp_name'];
    $emp_password = $_POST['emp_password'];
    $stmt = $connect->prepare(
        "SELECT  * FROM users WHERE user_name=? AND user_password=? AND user_type !='ضيف' AND user_stat=1 LIMIT 1 "
    );
    $stmt->execute([$emp_name, $emp_password]);
    $data = $stmt->fetch();
    $admindata = $stmt->rowcount();
    if ($admindata > 0) {
        $_SESSION['emp_id'] = $data['user_id'];
        header('Location:main.php?dir=dashboard&page=privlage_dashboard');
        exit();
    }
}
?>
<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="login_form/fonts/icomoon/style.css">

    <link rel="stylesheet" href="login_form/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login_form/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="login_form/css/style.css">
</head>

<body>
    <div class="d-md-flex half text-right">
        <div class="bg" style="background-image: url('login_form/images/bg_1.jpg');"></div>
        <div class="contents">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div class="form-block mx-auto">
                            <div class="login_buttons">
                                <button id="emp_login" class="btn active"> دخول موظف <i class="fa fa-user"></i></button>
                                <button id="user_login" class="btn"> دخول ضيف <i class="fa fa-user"></i></button>
                            </div>
                            <div class="emp_login">
                                <div class="text-center mb-5">
                                    <h3 class="text-uppercase"> شاشة دخول موظف <strong></strong></h3>
                                </div>
                                <form class="" action="#" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <div class="form-group first">
                                        <label for="username">اسم المستخدم</label>
                                        <input name="emp_name" type="text" class="form-control" placeholder="  " id="username">
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="password">كلمة المرور</label>
                                        <input name="emp_password" type="password" class="form-control" placeholder=" " id="password">
                                    </div>
                                    <div class="forget_pass">
                                        <div class="mb-5 align-items-center">
                                            <label class="control control--checkbox mb-3 mb-sm-0">
                                                <span class="caption">
                                                    <a href="forget_password.php"> نسيت كلمة المرور ؟</a>
                                                </span>
                                            </label>
                                        </div>

                                    </div>

                                    <input type="submit" name="emp_login" value=" تسجيل دخول كموظف" class="btn btn-block py-2">
                                </form>
                            </div>
                            <div class="user_login">
                                <div class="text-center mb-5">
                                    <h3 class="text-uppercase"> شاشة دخول ضيف <strong></strong></h3>
                                </div>
                                <form class="" action="#" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <div class="form-group first">
                                        <label for="username">اسم المستخدم</label>
                                        <input name="client_name" type="text" class="form-control" placeholder="  " id="username">
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="password">كلمة المرور</label>
                                        <input name="client_password" type="password" class="form-control" placeholder=" " id="password">
                                    </div>
                                    <div class="forget_pass">
                                        <div class="mb-5 align-items-center">
                                            <label class="control control--checkbox mb-3 mb-sm-0">
                                                <span class="caption">
                                                    <a href="forget_password.php"> نسيت كلمة المرور ؟</a>
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <input name="user_login" type="submit" value=" تسجيل دخول كضيف" class="btn btn-block py-2">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="login_form/js/jquery-3.3.1.min.js"></script>
    <script src="login_form/js/popper.min.js"></script>
    <script src="login_form/js/bootstrap.min.js"></script>
    <script src="login_form/js/main.js"></script>
</body>

</html>