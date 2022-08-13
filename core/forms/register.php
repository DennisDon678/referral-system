<?php
session_start();
require('../connection/db.php');

if (isset($_POST['submit'])) {
// RANDOM USER ID
    $referral_id = "USER-" .(random_int(0, 999999)-1);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $referral_balance = 0;
    $task_balance = 400;
    $password = password_hash($password, PASSWORD_DEFAULT);
   

    if (isset($_POST['referral'])) {
        $referree = $_POST['referral'];
        //Register operation

        $sql = "INSERT INTO users (name,password,referral_id,task_balance,referral_balance,email,referree) VALUES('$name','$password','$referral_id','$task_balance','$referral_balance','$email','$referree')";
        $query = mysqli_query($conn,$sql);
        

        // Set session
        $_SESSION['user'] = $email;
        header('location: ../../Dashbord.php');
    } else {
        // register without referre
        $referree = "";
        //Register operation

        $sql = "INSERT INTO users (name,password,referral_id,task_balance,referral_balance,email) VALUES('$name','$password','$referral_id','$task_balance','$referral_balance','$email')";
        $query = mysqli_query($conn, $sql);

        // Set session
        $_SESSION['user'] = $email;
        
        header('location: ../../Dashbord.php');
    }
} else {
    header('location: ../../register.php');
}




?>