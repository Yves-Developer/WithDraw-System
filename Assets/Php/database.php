<?php
    // Variables
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "mater_dei";

    // Connection
    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn) {
        echo "Database connection failed: " . mysqli_connect_error();
    }
?>