<?php
    include 'session.php';
    if (session_status() == PHP_SESSION_ACTIVE ) {
        session_unset();
        session_destroy();
        header("location:../login.php");
        ob_flush();
        die();
    }
?>