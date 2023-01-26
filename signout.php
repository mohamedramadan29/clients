<?php
session_start();
if (isset($_SESSION['username'])) {
    unset($_SESSION['username']);
}
if (isset($_SESSION['com_id'])) {
    unset($_SESSION['com_id']);
}
if (isset($_SESSION['emp_id'])) {
    unset($_SESSION['emp_id']);
}

header('location:index.php');
session_destroy();
