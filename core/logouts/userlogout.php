<?php
session_start();

$msg = $_SESSION['user'];
echo $msg;

if (isset($_SESSION['user']) && isset($_GET['logout'])) {
    session_unset();
    header('location: ../../register.php');
} else {
    header('location: ../../register.php');
}

?>