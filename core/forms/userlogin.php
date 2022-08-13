<?php

session_start();
require('../connection/db.php');
$email = $_POST['email'];

if (isset($_POST['submit'])) {
    $password = $_POST['password'];

    // login
    $sql = "SELECT * FROM users WHERE email = '$email' OR name = '$email' ";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);
    $count = mysqli_num_rows($query);


    if ($count == 1) {
        $rightpass = $result['password'];

        if (password_verify($password, $rightpass)) {
            $_SESSION["user"] = $email;
            header('location: ../../Dashbord.php');
        } else {
            header('location : ../../register.php');
        }
    } else {
        header('location : ../../register.php');
    }
} else {
    header('location : ../../register.php');
}
