<?php
session_start();
include('../../core/connection/db.php');

if (!isset($_SESSION['user'])) {
    header('location: ./index.php');
}


if (isset($_POST['submit'])) {
    $withdrawal_id = "TRANS-" . rand(0, 9999) + 1 + 3 - 7;
    $amount = $_POST['amount'];
    $selected_balance = $_POST['selected_balance'];
    $bank_name = $_POST['bank_name'];
    $account_number = $_POST['account_number'];
    $account_name = $_POST['account_name'];
    $user = $_SESSION['user'];
    include('../../inc/getUser.php');



    if ($selected_balance === 'referral' and $amount > $referral_balance) {
        $msg = "Your requested amount is greater than your referral balance";
        $msg = urlencode($msg);
        header('location: ../../withdraw.php?msg=' . $msg . '');
    } elseif ($selected_balance === 'task' and $amount > $task_balance) {
        $msg = "Your requested amount is greater than your task balance";
        $msg = urlencode($msg);
        header('location: ../../withdraw.php?msg=' . $msg . '');
    } elseif ($selected_balance === 'task' and $amount < 5000) {
        $msg = "Your task balance is less than mimimum amount withdrawable";
        $msg = urlencode($msg);
        header('location: ../../withdraw.php?msg=' . $msg . '');
    } else {



        $query = "INSERT INTO withdrawal_request (user_id,withdrawal_id,amount,selected_balance,bank_name,account_number, account_name) VALUES($id, '$withdrawal_id' ,'$amount','$selected_balance','$bank_name', '$account_number', '$account_name')";
        $sql = mysqli_query($conn, $query);

        if ($query) {

            // Get user and Update balance
            if ($selected_balance === 'task') {
                $new_balance = $task_balance - $amount;
                $sql = "UPDATE users SET task_balance = $new_balance where email = '$user'";
                $query = mysqli_query($conn, $sql);
                $msg = "Your request Has been Submited and is under approval";
                $msg = urlencode($msg);
                header('location: ../../withdraw.php?msg=' . $msg . '');
            } else {
                $new_balance = $referral_balance - $amount;
                $sql = "UPDATE users SET referral_balance = $new_balance where email = '$user'";
                $query = mysqli_query($conn, $sql);
                $msg = "Your request Has been Submited and is under approval";
                $msg = urlencode($msg);
                header('location: ../../withdraw.php?msg=' . $msg . '');
            }
        }
    }
}
