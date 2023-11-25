<?php

    require_once('./includes.php');

    $password = $_POST['password'];
    $repeat = trim($_POST['repeat']);
    $names = trim($_POST['names']);
    $gender = trim($_POST['genda']);
    $class = trim($_POST['class']);


    if (empty($password) or empty($names)) {
        echo "Uzuza Neza imyirondoro!";
    } else {
        if ($password == $repeat) {
            //Password Encryption
            $encrypt = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO students(class, gender, password, names) 
            VALUES('{$class}', '{$gender}', '{$encrypt}', '{$names}')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo "code0";
            }
            else{
                echo "Database yangiritse";
            }
        } else {
            echo "Nabwo bihura";
        }
    }
