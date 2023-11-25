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



<!-- Session Testing -->
<?php
include_once "../Assets/Php/database.php";
session_start();
if(!isset($_SESSION['username'])) {
    header('location: ../Authorization/login.php');
}
$code;
if (!isset($_GET['data'])) {
    $code = 1;
}
else{
 $code = $_GET['data'];   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Cdn Linkage -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;1,300&display=swap" rel="stylesheet">
    <!-- Css Link  -->
    <link rel="stylesheet" href="../Css/datastyle.css">
    <link rel="stylesheet" href="../Css/main.css">
</head>
<body>
    <!-- Navigation Bar Section Start -->
    <div class="navbar" id="navbar">
        <div class="logo" id="logo">Mater Dei.</div>
        <nav id="nav">
            <a href="./index.html">Home</a>
            <a href="#" onclick="Popup1()">Deposit</a>
            <a href="#" onclick="Popup()">Withdraw</a>
        </nav>
        <div class="menu" onclick="loadData()"><i class="fa-solid fa-bars"></i></div>
    </div>
    <!-- Navigation Bar Section end -->
    <!-- 1 ghj------>
    <div class="modalbox" id="modal1">
        <div class="close" onclick="hide()"><i class="fas fa-times"></i></div>
        <div class="dx"></div>
            <form action="#" class="form" method="POST">
                <div class="inputbx">
                    <input type="text" placeholder="Enter Amount" name="amountcp">
                </div>
                <div class="inputbx">
                    <input type="text" placeholder="Enter Student Code" name="codecp">
                </div>
                <div class="inputbx">
                    <input type="text" placeholder="Enter Password" name="passwordcp">
                </div>
                <input type="submit" value="bitsa" id="action1" class="btn0" onclick="PushData1()">

            </form>
        </div>
    <!-- Css Modal Box 2-->
    <div class="modalbox" id="modal">
        <div class="close" onclick="hide()"><i class="fas fa-times"></i></div>
        <div class="dx"></div>
            <form action="#" class="form" method="POST">
                <div class="inputbx">
                    <input type="text" placeholder="Enter Amount" name="amount">
                </div>
                <div class="inputbx">
                    <input type="text" placeholder="Enter Student Code" name="code">
                </div>
                <div class="inputbx">
                    <input type="text" placeholder="Enter Password" name="password">
                </div>
                <input type="submit" value="Bikuza" class="btn0" onclick="PushData()">
            </form>
        </div>
    <!-- Dashboard Coding -->
    <div class="main">
        <div class="panel">
            <div class="history">
                <div class="image"><img src="../Assets/Images/Male_Avatar.svg" alt=""></div>
                <h1>Basic Info</h1>
                <ul>
                    <!-- Students Info PHP -->
                    <?php
                    $sql0 = "SELECT * FROM students WHERE id = {$code}";
                    $query0 = mysqli_query($conn, $sql0);
                    if (mysqli_num_rows($query0) > 0) {
                        $row0 = mysqli_fetch_assoc($query0);
                    }
                    ?>
                    <li>Balance: <span style="padding-left:5px;"> <?php echo $row0['balance'];?></span></li>
                    <li>Class: <span style="padding-left:5px;"> <?php echo $row0['class'];?></span></li>
                    <li>Names: <span style="padding-left:5px;"> <?php echo $row0['names'];?></span></li>
                </ul>
                <a href="./Register.php" class="second"><i class="fa-solid fa-address-card"></i> Add Students</a>
            </div>

            <div class="logout"><a href="../Assets/Php/logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></div>
        </div>
        <div class="frame-yves">
            <div class="tooltip">
                <div class="tool">
                    <select name="data" id="data">
                        <option value="S6Mpc">S6Mpc</option>
                        <option value="S6Mpc">S6Mpc</option>
                        <option value="S6Mpc">S6Mpc</option>
                        <option value="S6Mpc">S6Mpc</option>
                        <option value="S6Mpc">S6Mpc</option>
                        <option value="S6Mpc">S6Mpc</option>
                    </select>
                    <input type="search" name="search" id="" placeholder="Filter Data..">

                </div>
<div class="holder">
    <table class="yvestable">
        <caption>Table Of Content</caption>
        <tr>
            <th>Code</th>
            <th>Names</th>
            <th>Class</th>
            <th>Action</th>
        </tr>
<!-- ###############DATA RETRIEVING FROM DATABASE################# -->
<?php
$page;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 1;
}

$num = 8*($page - 1);
$numpp = 8;
$sql = "SELECT * FROM students ORDER BY id LIMIT ".$num.",".$numpp;
$query = mysqli_query($conn,$sql);
$total = mysqli_num_rows($query);
$numPage = ceil($total/$numpp);
if ($total > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        echo "
        <tr>
        <td>".$row['id']."</td>
        <td>".$row['names']."</td>
        <td>".$row['class']."</td>
        <td><a href='./?data=".$row['id']."' class='btn00'>Info</a></td>
        </tr>";
    }
}

?>

    </table>
</div>
                <div class="footer">
                    <?php $back = $page; ?>
                    <a class="left" href="./?page=<?php $back--;if($back > 0){echo $back;}else{$back=$numPage;echo $back;} ?>"><<</a>
                    <a class="number" href="./?page=1">1</a>
                    <a class="number" href="./?page=2">2</a>
                    <a class="number" href="./?page=3">3</a>
                    <a class="number" href="./?page=4">4</a>
                    <a class="right" href="./?page=<?php echo ++$page; ?>">>></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /// Dashboard Coding -->

    <script src="../Assets/Js/dashboard.js"></script>
</body>
</html>