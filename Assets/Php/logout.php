<?php
    require_once('./database.php');
    session_start();
    if (isset($_SESSION['username'])) {
        session_destroy();
        header("location:../../Authorization/login.php");
    }
    

?>
