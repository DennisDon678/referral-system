<?php
session_start();
include('../../core/connection/db.php');

if (!isset($_SESSION['user'])) {
    header('location: ./index.php');
}


if (isset($_POST['submit'])) {
    $bank_name = $_POST['bank-name'];
    $account_name = $_POST['account-name'];
    $user = $_SESSION['user'];

    $query = "INSERT INTO pending_activations (email,bank_name,account_name) VALUES('$user','$bank_name','$account_name')";
    $sql = mysqli_query($conn, $query);

    if ($query) {
        $msg = "Your Proof Has been Submited and is under Verification";
        $msg = urlencode($msg);
        header('location: ../../activate.php?msg='.$msg.'');
    } else {
     
    }
} else {
   
}