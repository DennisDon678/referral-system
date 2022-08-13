<?php
session_start();
include('../../../core/connection/db.php');

if (!isset($_SESSION['admin'])) {
    header('location: ./index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Get user
    $sql = "SELECT * FROM users WHERE id = $id ";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);
    $referree = $result['referree'];
  
    // update status
    $sql = "UPDATE users  SET account_status = 1 WHERE id = $id";
    $query = mysqli_query($conn, $sql);

    // Get referree

    $sql = "SELECT * FROM users WHERE referral_id = '$referree'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $result = mysqli_fetch_array($query);
        $referral_balance = $result['referral_balance'];
        $bonus = 600;
        $new_balance = $referral_balance + $bonus;

        // update balance
        $sql = "UPDATE users SET referral_balance = $new_balance where referral_id = '$referree'";
        $query = mysqli_query($conn, $sql);
    }

    // delete from pending
    $sql = "DELETE FROM pending_activations where user = $id";
    $query = mysqli_query($conn, $sql);

    header('location: ../');
    
}