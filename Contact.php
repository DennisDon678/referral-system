<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>megermove</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php
    include('./inc/navbar.php')
    ?>


    <section class="contact-section">
        <div class="container">
            <div class="contact-left">
                <h2>Contact</h2>

                <form action="">
                    <label for="name">User Name</label>
                    <input type="text" id="name" name="name">

                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>

                    <input type="submit" class="send-message-cta" value="Send message">
                </form>


            </div>
    </section>


    <script src="main.js"></script>

</body>

</html>