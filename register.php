<html>

<head>
    <title>Begotack registration form</title>
    <link rel="icon" href="images/iconn.png" type="image/png">
    <link rel="stylesheet" href="./login/style.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>

    <body>
        <?php
        include('./inc/navbar.php')
        ?>


        <div class="container">
            <div class="card">
                <div class="inner-box" id="card">
                    <div class="card-front">
                        <a href="i"></a>
                        <h2>Login</h2>
                        <form method="POST" action="./core/forms/userlogin.php">
                            <input type="email" name="email" class="input-box" placeholder="Your Email id" required>
                            <input type="password" name="password" class="input-box" placeholder="password" required>
                            <button type="submit" name="submit" class="submit-btn">Login</button>
                            <div class="check">
                                <input class="checkbox" type="checkbox" />
                                <span>Remember Me</span>
                            </div>
                        </form>
                        <button type="button" class="btn" onclick="oppenRegister()">I'm New Here</button>
                        <a href="">Forget password</a>
                    </div>
                    <div class="card-back">
                        <h2>Register</h2>
                        <form method="POST" action="./core/forms/register.php">
                            <input type="text" name="name" class="input-box" placeholder="Your Name" required>
                            <input type="email" name="email" class="input-box" placeholder="Your Email id" required>
                            <input type="password" name="password" class="input-box" placeholder="password" required>

                            <?php
                            if (isset($_GET['referral-id'])) {
                                $referree = $_GET['referral-id'];

                            ?>

                                <input type="text" name="referral" value="<?= $referree ?>" class="input-box" placeholder="Refcode" >

                            <?php
                            } else {
                            ?>
                                <input type="text" name="referral" class="input-box" placeholder="Refcode" >
                            <?php
                            }
                            ?>

                            <button type="submit" name="submit" class="submit-btn">Register</button>
                            

                        </form>
                        <button type="button" class="btn" onclick="oppenLogin()">I've an account</button>
                    </div>

                </div>
            </div>

        </div>

        <script src="./assets/javascript/main.js"></script>

    </body>

</html>