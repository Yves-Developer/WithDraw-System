<?php
    require_once('./database.php');
    session_start();
    $user_name = trim($_POST['username']);
    $password = $_POST['password'];

    if(empty($user_name) || empty($password)) {
        echo "Uzuza";
    }
    else{
        $sql = "SELECT * FROM admin WHERE user_name = '$user_name' ";
        $query = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);
    
            if($row['password'] == $password) {
    
                $_SESSION['username'] = $user_name;//seession initialized
    
                echo "code0";
            }
        }
        else{
            echo "Uzuza nez imyirondoro!";
        }
    
    }
 
?>