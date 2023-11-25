<!--
    DON'T TOUCH xhr LINE IF YOU CARE MY HARDWORKING
====================================================
Developer: Yves Mugisha
Date: 16/11/2023
Day: Thursday
Mater Dei
E-mail: info@integratedfolks.com
===================================================
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;1,300&display=swap" rel="stylesheet">
    <!-- Css File Linkage -->
    <link rel="stylesheet" href="../Css/main.css">
    <link rel="stylesheet" href="../Css/layout.css">

</head>
<body>
    <!-- Navigation Bar Section Start -->
    <div class="navbar" id="navbar">
        <div class="logo" id="logo">Mater Dei.</div>
        <nav id="nav">
            <a href="../index.html">Home</a>
            <a href="../index.html">Deposit</a>
            <a href="../index.html">Withdraw</a>
        </nav>
        <div class="menu" onclick="loadData()"><i class="fa-solid fa-bars"></i></div>
    </div>
    <!-- Navigation Bar Section end -->
    <section class="container">
        <div class="frame-fx">
            <div class="col0"></div>
            <form class="col1" action="#" method="POST">
                <h2>Login Here.</h2>
                <div class="inbox">
                <input type="text" placeholder="Username" name="username">
                </div>
                <div class="inbox">
                <input type="password" placeholder="Password" name="password">
                </div>
                <div class="yves-col">
                <input class="btn" type="submit" value="Login">
                </div>
            </form>
        </div>
    </section>

    <!-- Javascript Linkage -->
<script src="../Assets/Js/login.js"></script>
</body>
</html>