<?php
session_start();
include('../../core/connection/db.php');

if (!isset($_SESSION['admin'])) {
    header('location: ./index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // delete from users
    $sql = "DELETE FROM users where id = $id";
    $query = mysqli_query($conn, $sql);

    header('location: ./Details.php?id='.$id.'');
}

?>