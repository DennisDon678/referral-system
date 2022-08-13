<?php
session_start();
include('../../../core/connection/db.php');

if (!isset($_SESSION['admin'])) {
    header('location: ./index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "UPDATE withdrawal_request SET status = 'Rejected' WHERE withdrawal_id = '$id'";
    $query = mysqli_query($conn, $sql);

    $sql = "SELECT * FROM withdrawal_request WHERE withdrawal_id = '$id'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);
    $amount = $result['amount'];
    $user = $result['user_id'];
    $selected_balance = $result['selected_balance'];

    $sql = "SELECT * FROM users where id = $user";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query);

    if ($selected_balance == 'referral') {
        $referral_balance = $result['referral_balance'];
        $new_referral = $amount + $referral_balance;

        $sql = "UPDATE users SET referral_balance = $new_referral WHERE id = $user";
        $query = mysqli_query($conn, $sql);
    } else {
        $task_balance = $result['task_balance'];
        $new_task = $amount + $task_balance;

        $sql = "UPDATE users SET task_balance = $new_task WHERE id = $user";
        $query = mysqli_query($conn, $sql);
    }

    header('location: ../');
}
