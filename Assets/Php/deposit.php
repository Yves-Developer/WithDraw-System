<?php
    require_once('./includes.php');
    session_start();
    $password = $_POST['passwordcp'];
    $amount = $_POST['amountcp'];
    $code = $_POST['codecp'];
    if(empty($password) || empty($amount) || empty($code)) {
       echo "Uzuza neza ibisabwa";
       exit();
    }

    $sql = "SELECT * FROM students WHERE id={$code}";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        $class = $row['class'];
        $names = $row['names'];
        $agent = $_SESSION['username'];

        if(password_verify($password, $row['password'])) {
            $new_balance = ($row['balance']) + $amount;
            $sql = "UPDATE students SET balance = {$new_balance} WHERE id=$code ";
            $query = mysqli_query($conn, $sql);

            // Insert into transaction
            $sql = "INSERT INTO transactions(student, activity, student_code, agent, amount, class) VALUES('$names', 'kubitsa', $code, '$agent', $amount, '$class') ";
            $query = mysqli_query($conn, $sql);

            echo $names . " Abikije " . $amount;

        }
        else{
            echo "umubare wibanga nabwo wahuye!";
        }
    }

?>