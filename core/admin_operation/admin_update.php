<?php
session_start();
include('../../core/connection/db.php');

if (!isset($_SESSION['admin'])) {
    header('location: ./index.php');
}

if (isset($_POST['submit'])) {
    if (empty($_POST['password'])) {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];

        $sql = "UPDATE 	admin SET fullname = '$fullname',
                                  username = '$username',
                                  email    = '$email'";
        $query = mysqli_query($conn,$sql);

        header('location: ../../admin/account');
    } else {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $newpassword = password_hash( $password, PASSWORD_DEFAULT);


        $sql = "UPDATE 	admin SET fullname = '$fullname',
                                  username = '$username',
                                  email    = '$email',
                                  password = '$newpassword'";
        $query = mysqli_query($conn, $sql);

        header('location: ../../admin/account');
    }
}