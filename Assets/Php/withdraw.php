<?php
    require_once('./includes.php');

    $password = $_POST['password'];
    $amount = $_POST['amount'];
    $code = $_POST['code'];

    if(empty($password) || empty($amount) || empty($code)) {
       echo "Uzuza neza ibisabwa";
    }

    $sql = "SELECT * FROM studnts WHERE id={$code}";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) == 1) {
        $row = mysqli_fetch_assoc($query);

        $class = $row['class'];
        $names = $row['names'];
        $agent = $_SESSION['user'];

        if(password_verify($password, $row['password']) && $amount <= $row['balance']) {
            $new_balance = ($row['balance'] - $amount);
            $sql = "UPDATE students SET (balance = $new_balance) WHERE id=$code ";
            $query = mysqli_query($conn, $sql);

            // Insert into transaction
            $sql = "INSERT INTO kubitsa(student, activity, student_code, agent, amount, class) VALUES('$names', 'kubikuza', $code, '$agent', $amount, '$class') ";
            $query = mysqli_query($conn, $sql);

            echo $names . " abikije " . $amount;

        }
    }

?>