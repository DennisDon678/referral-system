<?php
session_start();
include('../../../core/connection/db.php');

if (!isset($_SESSION['admin'])) {
    header('location: ./index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "UPDATE withdrawal_request SET status = 'Approved' WHERE withdrawal_id = '$id'";
    $query = mysqli_query($conn, $sql);

    header('location: ../');
}
