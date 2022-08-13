<?php
session_start();
include('./core/connection/db.php');

if (!isset($_SESSION['user'])) {
    header('location: ./index.php');
} else {
    include('./inc/getUser.php');
    if ($account_status != 1) {
        header('location: ./activate.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> MegaMove Task </title>
    <link rel="stylesheet" href="./assets/css/task.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>

    <?php
    include('./inc/navbar.php');
    include('./inc/getUser.php');
    include('./inc/getActiveTask.php');
  
    ?>

    <div class="main-box" style="padding-bottom: 30px;">
        <div class="content">
            <h3>Today is another day to make money don't allow anything to put you down!</h3>
            <h4>Download and share to <span style="color: blue;"> <?=$platform?> </span></h4>
            <div class="img-container">
                <div class="image-box">
                    <img src="assets/images/tasks/<?= $file_name ?>" alt="">
                </div>
                <div class="download">
                    <a href="assets/images/tasks/<?= $file_name ?>" download="Task-<?php $date = new DateTime();
                                                                                    echo $date->format('Y-m-d'); ?>">DOWNLOAD and SHARE</a>
                </div>
            </div>

            <?php
            include('./inc/getPerformedTask.php');

            if ($result) {
            ?>

                <div class="submit">
                    <a href="" class="submit-btn">Come Back Tommorrow</a>
                </div>

            <?php
            } else {
            ?>

                <div class="submit">
                    <a href="proof.php" class="submit-btn" >Submit Proof and Earn</a>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</body>

<script src="./dashbord/app.js"></script>
<script src="./assets/javascript/main.js"></script>

</html>