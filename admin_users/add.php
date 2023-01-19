 <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['add_car'])) {
            $stmt = $connect->prepare("SELECT COUNT(user_id) FROM users");
            $stmt->execute();
            $count = $stmt->fetchcolumn();


            $user_code = $count + 1;

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

            $stmt = $connect->prepare("SELECT * FROM users WHERE user_name=?");
            $stmt->execute(array($user_name));
            $count = $stmt->rowCount();
            if ($count > 0) {
                $formerror[] = 'اسم المستخدم موجود من قبل من فضلك ادخل اسم مستخدم اخر ';
            }

            $stmt = $connect->prepare("SELECT * FROM users WHERE user_email=?");
            $stmt->execute(array($user_email));
            $count = $stmt->rowCount();
            if ($count > 0) {
                $formerror[] = ' هناك خطا !! البريد الالكتروني مستخدم بالفعل من قبل  ';
            }

            if (empty($formerror)) {

                $stmt = $connect->prepare("INSERT INTO users 
                (user_code,user_type,user_jop_title,user_personal_name
                ,user_name,user_password,user_phone,user_email,user_city,user_stat)
                VALUES (:zuser_code,:zuser_type,:zuser_jop_title,:zuser_personal_name,
                :zuser_name,:zuser_password,:zuser_phone,:zuser_email,:zuser_city,:zuser_stat)");
                $stmt->execute([
                    'zuser_code' => $user_code,
                    'zuser_type' => $user_type,
                    'zuser_jop_title' => $user_jop_title,
                    'zuser_personal_name' => $user_personal_name,
                    'zuser_name' => $user_name,
                    'zuser_password' => $user_password,
                    'zuser_phone' => $user_phone,
                    'zuser_email' => $user_email,
                    'zuser_city' => $user_city,
                    'zuser_stat' => $user_stat,
                ]);
                if ($stmt) {
                    // header('Location:main.php?dir=admin_users&page=report');
                    header('refresh:2;url=main.php?dir=admin_users&page=report');
    ?>
                 <script>
                     document.getElementById("add_form_user").reset();
                     setTimeout(() => {
                         let url = "main.php?dir=admin_users&page=report";
                         window.location.href = url;
                     }, 2000);
                 </script>
                 <div class="alert-success text-center" style="margin: auto; display:block">
                     تم اضافة مستخدم جديد بنجاح
                 </div>
             <?php }
            } else {
                foreach ($formerror as $error) {
                ?>
                 <div class="alert alert-danger text-center"> <?php echo $error ?> </div>
 <?php
                }
            }
        }
    }
