<?php
session_start();
include('../../core/connection/db.php');

if (!isset($_SESSION['admin'])) {
    header('location: ./index.php');
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    $count = mysqli_num_rows($query);

    if ($count == 1) {

        $fullname = $result['name'];
        $email = $result['email'];
        $task_balance = $result['task_balance'];
        $referral_balance = $result['referral_balance'];
        $balance = $referral_balance + $task_balance;
    } else {
        header('location: ./');
    }
}


include('../inc/header.php');
?>



    <!-- User card info -->
    <section>
        <div class="my-5 container pt-4">
            <div class="container mt-4 enclose p-4 bg-light">
                <h5 class="text-center mb-3 section">User informations</h5>
                <div class="content gap-4 justify-content-center d-md-flex flex-wrap">
                    <div class="col-md-5 p-3 cardcontainer">
                        <h5>Registration Details</h5>
                        <div class="name mb-2 ps-3">
                            <h6> Fullname: <span><?= $fullname ?></span></h6>
                        </div>
                        <div class="email mb-2 ps-3">
                            <h6>User's Email: <span><?= $email ?></span></h6>
                        </div>
                    </div>

                    <div class="col-md-5 p-3 cardcontainer">
                        <h5>Finacial Details</h5>
                        <div class="balance mb-3 ps-3">
                            <h6> Account Balance: <span> NGN <?= $balance ?></span></h6>
                        </div>
                        <h5>Finacial Operations</h5>
                        <p class="alert alert-success">This will alter the users transaction details.</p>
                        <div class="operations d-flex gap-3 mb-2 ps-3">
                            <a class="btn btn-primary" href="./FundUser.php?id=<?= $id ?>">Fund User</a>
                            <a class="btn btn-danger" href="./DebitUser.php?id=<?= $id ?>">Debit User</a>
                        </div>
                    </div>

                    <div class="col-md-5 p-3 cardcontainer">
                        <h5>General Operations</h5>
                        <p class="alert alert-success"> Here you can change users details</p>
                        <div class="operations d-flex gap-3 mb-2 ps-3">
                            <a class="btn btn-danger" href="./DeleteUser.php?id=<?= $id ?>">Delete User</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
    </section>



    <script src="../../assets/js/index.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.js"></script>
</body>

</html>