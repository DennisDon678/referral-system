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
        background-color: green;
        color: white;
        width: 100%;
        padding: 10px;
        text-align: center;
        border-radius: 10px;
        font-size: 18px;
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

            <form action="./core/forms/withdraw.php" method="POST">
                <p class="p">Fill in the form to request for withdrawal</p>
                <p style="text-align: center;">Withdrawal takes less than 24 hours to be approved</p>
                <div class="item">
                    <input type="tel" placeholder="ENTER AMOUNT" name="amount" id="">
                    <p>Enter Amount to Withdraw</p>
                </div>

                <div class="item">
                    <select name="selected_balance" id="">
                        <option value="task">Task Balance</option>
                        <option value="referral">Referral Balance</option>
                    </select>
                    <p>Select Balance</p>
                </div>

                <div class="item">
                    <input type="text" placeholder="ENTER BANK NAME" name="bank_name" id="">
                    <p>Enter Your Bank</p>
                </div>

                <div class="item">
                    <input type="text" placeholder="ENTER ACCOUNT NUMBER" name="account_number" id="">
                    <P>Enter Your Account Number</P>
                </div>

                <div class="item">
                    <input type="text" placeholder="ENTER ACCOUNT NAME" name="account_name" id="">
                    <p>Enter Your Account Name</p>
                </div>


                <input type="submit" name="submit" value="Withdraw">
            </form>
        </div>
    </section>





    <script src="./dashbord/app.js"></script>
    <script src="./assets/javascript/main.js"></script>

</body>

</html>

</html>