<?php
session_start();
include('../../core/connection/db.php');

if (!isset($_SESSION['user'])) {
    header('location: ./index.php');
}

include('../../inc/getUser.php');
include('../../inc/getActiveTask.php');

if (isset($_POST['submit']) and !empty($_POST['task'])) {
    $user = $_SESSION['user'];
    $earned = 50;
    $new_task_balance = $task_balance + $earned;

    $sql = "UPDATE users SET task_balance = $new_task_balance WHERE email = '$user' ";
    $query = mysqli_query($conn,$sql);

    $sql ="INSERT INTO performed_task (task_id, user_id) VALUES ($task_id , $id)";
    $query = mysqli_query($conn,$sql);


    header('location: ../../Dashbord.php');
} else {
    $msg = "Please select an Image";
    $msg = urlencode($msg);
    header('location: ../../proof.php?msg='.$msg.'');
}