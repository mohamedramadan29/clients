<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id = $_POST['user_id'];
    $user_type = filter_var(
        $_POST['user_type'],
        FILTER_SANITIZE_STRING
    );
    $user_jop_title = filter_var(
        $_POST['user_jop_title'],
        FILTER_SANITIZE_STRING
    );
    $user_personal_name = filter_var(
        $_POST['user_personal_name'],
        FILTER_SANITIZE_STRING
    );
    $user_name = filter_var(
        $_POST['user_name'],
        FILTER_SANITIZE_STRING
    );
    $user_password = filter_var(
        $_POST['user_password'],
        FILTER_SANITIZE_STRING
    );
    $user_phone = filter_var(
        $_POST['user_phone'],
        FILTER_SANITIZE_STRING
    );
    $user_email = filter_var(
        $_POST['user_email'],
        FILTER_SANITIZE_STRING
    );
    $user_city = filter_var(
        $_POST['user_city'],
        FILTER_SANITIZE_STRING
    );
    /// More Validation To Show Error
    $formerror = [];
    if (empty($user_name)) {
        $formerror[] = ' من فضلك ادخل اسم المستخدم ';
    }
    foreach ($formerror as $errors) {
        echo "<div class='alert alert-danger danger_message'>" .
            $errors .
            '</div>';
    }

    $stmt = $connect->prepare("UPDATE users SET 
    user_type=?,user_jop_title=?,user_personal_name=?
    ,user_name=?,user_password=?,user_phone=?,user_email=?,user_city=? WHERE user_id=?");
    $stmt->execute([$user_type, $user_jop_title, 
    $user_personal_name,
    $user_name,  $user_password, $user_phone,  $user_email,  $user_city,$user_id
    ]);
    if ($stmt) { ?>
        <div class="container">
            <div class="alert-success">
                تم تعديل المستخدم بنجاح

                <?php // header('refresh:3,url=main.php?dir=city&page=report'); 
                ?>
            </div>
        </div>

<?php }
}
