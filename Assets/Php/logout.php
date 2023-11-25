<?php
    require_once('./includes.php');
    session_start();
    if (isset($_SESSION['username'])) {
        session_destroy();
        header("location:../../Authorization/login.php");
    }
    

?>
