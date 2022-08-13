<?php
if (isset($_SESSION['user'])) {

?>


    <div class="navbar">
        <div class="container">
            <a class="logo" href="./">MEGARMOVE</a>

            <img id="mobile-cta" class="mobile-menu" src="./assets/images/menu.svg" alt="Open Navigation">

            <nav>
                <img id="mobile-exit" class="mobile-menu-exit" src="./assets/images/exit.svg" alt="Close Navigation">

                <ul class="primary-nav">
                    <li class="current"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="task.php">Task</a></li>
                </ul>

                <ul class="secondary-nav">
                    <li><a href="Contact.php">Contact</a></li>
                    <li style="margin-right: 10px;" class="go-premium-cta"><a href="Dashbord.php">Dashbord</a></li>
                    <li class="go-premium-cta"><a href="./core/logouts/userlogout.php?logout=true">LogOut</a></li>
                </ul>
            </nav>
        </div>
    </div>


<?php
} else {


?>

    <div class="navbar">
        <div class="container">
            <a class="logo" href="./">MEGARMOVE</a>

            <img id="mobile-cta" class="mobile-menu" src="./assets/images/menu.svg" alt="Open Navigation">

            <nav>
                <img id="mobile-exit" class="mobile-menu-exit" src="./assets/images/exit.svg" alt="Close Navigation">

                <ul class="primary-nav">
                    <li class="current"><a href="index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Task</a></li>
                </ul>

                <ul class="secondary-nav">
                    <li><a href="Contact.php">Contact</a></li>
                    <li style="margin-right: 10px;" class="go-premium-cta"><a href="./register.php">Register</a></li>
                    <li class="go-premium-cta"><a href="./register.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>


<?php

}
?>