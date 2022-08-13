<?php
session_start();
include('./core/connection/db.php');

if (!isset($_SESSION['user'])) {
    header('location: ./index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEGAMOVE</title>
    <link rel="stylesheet" href="./dashbord/style.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<style>
    .withdrawal {
        width: 90%;
        margin: auto;
        border: 1px solid blue;
        padding: 15px;
        border-radius: 21px;
    }

    .withdrawal .p {
        text-align: center;
        font-size: 25px;
        margin-bottom: 8px;
    }

    input {
        outline: none;
        border: 1px solid lightgray;
        border-radius: 10px;
        margin-bottom: 0;
    }

    select {
        padding: 10px;
        outline: none;
        border: 1px solid lightgray;
        border-radius: 10px;
    }

    .item {
        margin-bottom: 10px;
    }

    .alert {
        background-color: red;
        color: white;
        width: 100%;
        padding: 10px;
        text-align: center;
        border-radius: 10px;
        font-size: 25px;
    }

</style>

<body>

    <?php
    include('./core/connection/db.php');
    include('./inc/navbar.php');
  
    ?>

    <section>
        <div class="withdrawal">

            <?php
            if (isset($_GET['msg'])) {
                $msg = $_GET['msg'];
            ?>
                <p class="alert"><?= $msg ?></p>
            <?php

            }
            ?>

            <form action="./core/forms/proof.php" method="POST">
                <p class="p">Upload your task proof</p>
              
                <div class="item">
                    <input type="file"  name="task" id="">
                    <P>Upload Your task Proof</P>
                </div>

                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </section>





    <script src="./dashbord/app.js"></script>
    <script src="./assets/javascript/main.js"></script>

</body>

</html>

</html>