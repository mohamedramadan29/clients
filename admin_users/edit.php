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
    $user_stat = filter_var(
        $_POST['user_stat'],
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
    ,user_name=?,user_password=?,user_phone=?,user_email=?,user_city=?,user_stat=? WHERE user_id=?");
    $stmt->execute([
        $user_type, $user_jop_title,
        $user_personal_name,
        $user_name,  $user_password, $user_phone,  $user_email,  $user_city, $user_stat, $user_id
    ]);
    if ($stmt) { ?>
        <script>
            document.getElementById("edit_form").reset();
            setTimeout(() => {
                let url = "main.php?dir=admin_users&page=report";
                window.location.href = url;
            },100);
        </script>
     
<?php }
}
