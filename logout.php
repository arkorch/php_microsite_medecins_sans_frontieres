<?php
        include_once('../middleware/db/config.php');

    session_start();
    session_destroy();
    session_unset($_SESSION['id']);
    session_unset($_SESSION['customer_name']);
    header("Location:login.php");
?>