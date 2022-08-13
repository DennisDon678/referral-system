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
<html>

<head>
    <title>About Us Section</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="./about/css/style.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>

    <?php
    include('./inc/navbar.php');
    include('./inc/getUser.php');
    include('./inc/getActiveTask.php');

    ?>
    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About Us</h1>
                </div>
                <div class="content">
                    <h2>Our Mission</h2>
                    <p>
                        Expanding the little token you have to be equal to your important needs.
                        Increasing your income to suit your expenses.
                        Changing the economy from a poverty filled economy to a poverty free economy.
                        With the little money you have, you can make it to be large only if you help us to help you.
                    </p>
                </div>

            </div>
            <div class="image-section">
                <img src="./about/image/img one.jpg">
            </div>
        </div>



    </div>

    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="content">
                    <h2>Our Mission</h2>
                    <p>
                        You stand to gain knowledge on how to expand your income revenue.
                        We offer tokens such as data bundle, airtime and prices to be won.
                        Best active member also wins a price and more features will come
                        Join us and make a huge income from a little tokenYou stand to gain knowledge on how to expand your income revenue.
                        We offer tokens such as data bundle, airtime and prices to be won.
                        Best active member also wins a price and more features will come
                        Join us and make a huge income from a little token
                    </p>

                </div>

            </div>
            <div class="image-section">
                <img src="./about/image/img one.jpg">
            </div>
        </div>



    </div>

    <div class="container">
        <div class="content-section">

            <div class="content">
                <h2>How to Earn</h2>
                <p>
                    Make a MegaMove when you join use with our amazing pay out, You can earn from our website when you perform this little and stress free task
                    Get 50-Naira when you share out post in any social media page, 20-Naira when you post your withdrawal testimony,
                    You get a welcome bonus of 400-Naira, Refer a friend and get 650-Naira. And more amazing price and price to win..!!!!
                </p>
                <div class="button">
                    <a href="./Dashbord.php">Invite a friend</a>
                </div>
            </div>
            <div class="social">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="image-section">
            <img src="./about/image/img one.jpg">
        </div>
    </div>



    </div>



    <script src="./dashbord/app.js"></script>
    <script src="./assets/javascript/main.js"></script>
</body>

</html>