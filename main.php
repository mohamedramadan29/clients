<?php
ob_start();
$pagetitle = 'الرئيسية';
session_start();
include 'init.php';
include $tem . 'top_navbar.php';
if(isset($_SESSION['client_id'])){
    include $tem . 'left_sidebar_client.php';
}else{
    include $tem . 'left_sidebar.php';
}

?>
<div class="content-wrapper">
    <div class="category">
        <?php
        $page = '';
        if (isset($_GET['page']) && isset($_GET['dir'])) {
            $page = $_GET['page'];
            $dir = $_GET['dir'];
        } else {
            $page = 'manage';
        }
        // START CUSTOMER
        if ($dir == 'company' && $page == 'add') {
            include 'company/add_company.php';
        } elseif ($dir == 'company' && $page == 'edit') {
            include 'company/edit_company.php';
        } elseif ($dir == 'company' && $page == 'delete') {
            include 'company/delete_company.php';
        } elseif ($dir == 'company' && $page == 'report') {
            include 'company/report.php';
        }
 
        // START admin_users
        if ($dir == 'admin_users' && $page == 'add') {
            // include 'whatsapp/add.php';
        } elseif ($dir == 'admin_users' && $page == 'edit') {
            include 'admin_users/edit.php';
        } elseif ($dir == 'admin_users' && $page == 'delete') {
            include 'admin_users/delete.php';
        } elseif ($dir == 'admin_users' && $page == 'report') {
            include 'admin_users/report.php';
        }
        // END admin_users


        // START COUNTRY
        if ($dir == 'country' && $page == 'add') {
            include 'country/add.php';
        } elseif ($dir == 'country' && $page == 'edit') {
            include 'country/edit.php';
        } elseif ($dir == 'country' && $page == 'delete') {
            include 'country/delete.php';
        } elseif ($dir == 'country' && $page == 'report') {
            include 'country/report.php';
        }
        // END COUNTRY


        // START COURSES
        if ($dir == 'courses' && $page == 'add') {
            include 'courses/add.php';
        } elseif ($dir == 'courses' && $page == 'edit') {
            include 'courses/edit.php';
        } elseif ($dir == 'courses' && $page == 'delete') {
            include 'courses/delete.php';
        } elseif ($dir == 'courses' && $page == 'report') {
            include 'courses/report.php';
        }
        // END COURSES


        // START CUSTOMER
        if ($dir == 'customer' && $page == 'add') {
            include 'customer/add.php';
        } elseif ($dir == 'customer' && $page == 'edit') {
            include 'customer/edit.php';
        } elseif ($dir == 'customer' && $page == 'delete') {
            include 'customer/delete.php';
        } elseif ($dir == 'customer' && $page == 'report') {
            include 'customer/report.php';
        }
        // END CUSTOMER


        // START DEGREE
        if ($dir == 'degree' && $page == 'add') {
            include 'degree/add.php';
        } elseif ($dir == 'degree' && $page == 'edit') {
            include 'degree/edit.php';
        } elseif ($dir == 'degree' && $page == 'delete') {
            include 'degree/delete.php';
        } elseif ($dir == 'degree' && $page == 'report') {
            include 'degree/report.php';
        }
        // END DEGREE


        // START NEWS
        if ($dir == 'news' && $page == 'add') {
            include 'news/add.php';
        } elseif ($dir == 'news' && $page == 'edit') {
            include 'news/edit.php';
        } elseif ($dir == 'news' && $page == 'delete') {
            include 'news/delete.php';
        } elseif ($dir == 'news' && $page == 'report') {
            include 'news/report.php';
        }
        // END NEWS


        // START specialist
        if ($dir == 'specialist' && $page == 'add') {
            include 'specialist/add.php';
        } elseif ($dir == 'specialist' && $page == 'edit') {
            include 'specialist/edit.php';
        } elseif ($dir == 'specialist' && $page == 'delete') {
            include 'specialist/delete.php';
        } elseif ($dir == 'specialist' && $page == 'report') {
            include 'specialist/report.php';
        }
        // END specialist



        // START university
        if ($dir == 'university' && $page == 'add') {
            include 'university/add.php';
        } elseif ($dir == 'university' && $page == 'edit') {
            include 'university/edit.php';
        } elseif ($dir == 'university' && $page == 'delete') {
            include 'university/delete.php';
        } elseif ($dir == 'university' && $page == 'report') {
            include 'university/report.php';
        }
        // END university


        // START users
        if ($dir == 'users' && $page == 'add') {
            include 'users/add.php';
        } elseif ($dir == 'users' && $page == 'edit') {
            include 'users/edit.php';
        } elseif ($dir == 'users' && $page == 'delete') {
            include 'users/delete.php';
        } elseif ($dir == 'users' && $page == 'report') {
            include 'users/report.php';
        }
        // END users
         // START CONTACT
         if ($dir == 'contact' && $page == 'add') {
            include 'contact/add.php';
        } elseif ($dir == 'contact' && $page == 'edit') {
            include 'contact/edit.php';
        } elseif ($dir == 'contact' && $page == 'delete') {
            include 'contact/delete.php';
        } elseif ($dir == 'contact' && $page == 'report') {
            include 'contact/report.php';
        }
        // END CONTACT
        if ($dir == 'dashboard' && $page == 'dashboard') {
            include 'dashboard.php';
        }
        if ($dir == 'dashboard' && $page == 'client_dashboard') {
            include 'clients/client_dashboard.php';
        }

        // END EDUCATION WEB SITE ///////////////////////////////////////

        //if ($page != 'report') {
        ?>
    </div>
</div>
</div>
<?php
if ($dir == 'whatsapp' && $page == 'add') {
    include 'whatsapp/add.php';
}
?>
<?php
include $tem . 'footer.php';

ob_end_flush();
?>
<script type="text/javascript">
    // customer script


    var dev = $("#logo").dropify({});
    dev = dev.data("dropify")
    var dev2 = $("#logo2").dropify({});
    dev2 = dev2.data("dropify")
    var dev3 = $("#logo3").dropify({});
    dev2 = dev3.data("dropify")
    var dev4 = $("#logo4").dropify({});
    dev4 = dev4.data("dropify")
</script>

<script>
    $(function() {
        $("#rating").rateYo({
            rating: 2,
            fullStar: true,
            starWidth: "27px"
        });
    });

    // Getter
    var normalFill = $("#rating").rateYo("option", "fullStar"); //returns true

    // Setter
    $("#rating").rateYo("option", "fullStar", true); //returns a jQuery Element

    // END ACTIVE LINK
</script>