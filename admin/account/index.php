<?php
session_start();
include('../../core/connection/db.php');

if (!isset($_SESSION['admin'])) {
    header('location: ./index.php');
}

$sql = "SELECT * FROM admin ";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);
$fullname = $result['fullname'];
$username = $result['username'];
$email = $result['email'];


include('../inc/header.php');
?>




    <!-- Account -->
    <section class="container-fluid mt-5 py-5 h" id="acc">
        <div class="container py-4 section bg-light enclose">
            <div class="notice">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    Your username and password are details to login into your dashboard, be sure to remember them always.
                </div>
                <h3 class=" text-center">Update Account</h3>
                <form class="text-dark" action="../../core/admin_operation/admin_update.php" method="post">
                    <div class="form mb-3">
                        <label for="fullname">Modify your full name</label>
                        <input class="form-control" value="<?= $fullname ?>" type="text" name="fullname" id="" required>
                    </div>

                    <div class="form mb-3">
                        <label for="username">Modify your username</label>
                        <input class="form-control" value="<?= $username ?>" type="text" name="username" id="" required>
                    </div>

                    <div class="form mb-3">
                        <label for="email">Modify your email</label>
                        <input class="form-control" value="<?= $email ?>" type="text" name="email" id="" required>
                    </div>
                    <div class="notice">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                            When password is left blank, the original password will be retained but once filled, be sure to remember the details!
                        </div>

                    </div>
                    <div class="form mb-3">
                        <label for="password">Modify your password</label>
                        <input class="form-control" type="text" name="password" placeholder="Enter a password that you would remember." id="" >
                    </div>

                    <div class="form justify-content-center text-dark mb-3">
                        <input class="form-control w-50 btn adlog" type="submit" name="submit" value="Update" id="">
                    </div>
                </form>
            </div>

    </section>


    <script src="../../assets/js/index.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.js"></script>
</body>

</html>