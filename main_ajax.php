<?php
ob_start();
$pagetitle = 'الرئيسية';
session_start();
include 'init.php';
?>
        <?php
        $page = '';
        if (isset($_GET['page']) && isset($_GET['dir'])) {
            $page = $_GET['page'];
            $dir = $_GET['dir'];
        } else {
            $page = 'manage';
        }
        // START EDUCATION WEB  /////////////////////////////////////////
        // START admin_users
        if ($dir == 'admin_users' && $page == 'add') {
            include 'admin_users/add.php';
        } elseif ($dir == 'admin_users' && $page == 'edit') {
            include 'admin_users/edit.php';
        }
        // END EDUCATION WEB SITE ///////////////////////////////////////
        // START COUNTRY
        if ($dir == 'country' && $page == 'add') {
            include 'country/add.php';
        } elseif ($dir == 'country' && $page == 'edit') {
            include 'country/edit.php';
        }
        // END COUNTRY WEB SITE ///////////////////////////////////////
        // START SPC
        if ($dir == 'specialist' && $page == 'add') {
            include 'specialist/add.php';
        } elseif ($dir == 'specialist' && $page == 'edit') {
            include 'specialist/edit.php';
        }
        // END SEP WEB SITE ///////////////////////////////////////
        // START COURSES
        if ($dir == 'courses' && $page == 'add') {
            include 'courses/add.php';
        } elseif ($dir == 'courses' && $page == 'edit') {
            include 'courses/edit.php';
        }
        // END COURSES
        // START DEGREE
        if ($dir == 'degree' && $page == 'add') {
            include 'degree/add.php';
        } elseif ($dir == 'degree' && $page == 'edit') {
            include 'degree/edit.php';
        }
        // END DEGREE
        // START NEWS
        if ($dir == 'news' && $page == 'add') {
            include 'news/add.php';
        } elseif ($dir == 'news' && $page == 'edit') {
            include 'news/edit.php';
        }
        // END NEWS

        // START university
        if ($dir == 'university' && $page == 'add') {
            include 'university/add.php';
        } elseif ($dir == 'university' && $page == 'edit') {
            include 'university/edit.php';
        }
        // END university

        // START users
        if ($dir == 'users' && $page == 'add') {
            include 'users/add.php';
        } elseif ($dir == 'users' && $page == 'edit') {
            include 'users/edit.php';
        }
        // END users

        ?>