<?php
session_start();
include('../../core/connection/db.php');

if (!isset($_SESSION['admin'])) {
    header('location: ./index.php');
}


if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $message = $_POST['message'];

    $sql = "UPDATE notification SET title = '$title', message = '$message' where id = 1";
    $query = mysqli_query($conn, $sql);

    header('location: ../../admin/dashboard');
    
}