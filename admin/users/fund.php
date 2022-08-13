<?php
session_start();
include('../../core/connection/db.php');

if (!isset($_SESSION['admin'])) {
    header('location: ./index.php');
}

if (isset($_POST['submit'])) {
    $amount = $_POST['amount'];
    $username = $_POST['username'];

    $user = "SELECT * from users where email = '$username'";
    $exc = mysqli_query($conn,$user);
    $result = mysqli_fetch_assoc($exc);

    if ($result) {

        $id = $result['id'];
        $oldbalance = $result['task_balance'];
        $newbalance = $oldbalance + $amount;

        $sql = "UPDATE users  SET task_balance = $newbalance WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        header('location: ./Details.php?id=' . $id . '');
    } else {
        
    }
} else {
    header('location: ./');
}