<!--
    DON'T TOUCH THIS LINE IF YOU CARE MY HARDWORKING
====================================================
Developer: Yves Mugisha
Date: 16/11/2023
Day: Thursday
Mater Dei
E-mail: info@integratedfolks.com
===================================================
-->
<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('location: ../Authorization/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
 <!-- Font Cdn Linkage -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Css Linkage  -->
    <link rel="stylesheet" href="../Css/datastyle.css">
    <link rel="stylesheet" href="../Css/body.css">
</head>
<body>
    <section class="frame-bx">
        <div class="col0">

        </div>
        <div class="col1">
            <form action="#" class="data" method="POST">
                <a class="back" href="./"><i class="fa-solid fa-left-long"></i> Back</a>
                <h2>Register A Student</h2>
                <div class="input0"><input type="text" name="names" placeholder="Names"></div>
                <div class="input0"><input type="password"name="password" placeholder="Password"></div>
                <div class="input0"><input type="password" name="repeat" placeholder="Repeat Password"></div>
                <div class="input0">
                    <input type="text" name="genda" placeholder="Gender">
                </div>
                <div class="input0"><input type="text" name="class" placeholder="Class"></div>
                <input type="submit" value="Submit" class="btn1" id="addBtn">
            </form>
        </div>
    </section>

    <!-- Javascript Code Block -->
    <script src="../Assets/Js/AjaxRequest.js"></script>
</body>
</html>