<?php
session_start();
include('../../core/connection/db.php');

if (!isset($_SESSION['admin'])) {
    header('location: ./index.php');
}



// pending deposit

$sql = "SELECT * FROM pending_activations ";
$query = mysqli_query($conn, $sql);
$results1 = mysqli_num_rows($query);



// number of users
$users = "SELECT * from users";
$exc = mysqli_query($conn, $users);
$return = mysqli_num_rows($exc);


include('../inc/header.php');
?>




<!-- Dashboard -->
<section class="container-fluid py-5 h " id="dash">
    <div class="container px-3 text-dark enclose bg-light">
        <div class="d-md-flex align-items-center justify-content-center gap-4 py-5 text-center">
            <!-- account balance -->
            <div class="col-sm-3 section p-1 cardcontainer">
                <h2 class="ml-auto">Add New Task</h2>
                <a href="../new-task/" class="btn btn-primary">New Task</a>
            </div>
            <!-- Deposite -->
            <div class="col-sm-4 section p-1 cardcontainer">
                <h2 class="ml-auto">Number of users</h2>
                <h3 class=""><?= $return ?> </h3>
            </div>
            <!-- purchase -->

        </div>
    </div>

    <!-- Deposit -->

    <div class="trans container py-4 my-4 bg-light section cardcontainer">
        <div class="  ">
            <!-- Transactions -->
            <h3 class="text-center">Pending Activations</h3>

            <?php
            if ($results1) {
                echo ('
                    
                <div class=" px-3 mx-auto py-3   ">
                     ');

                while ($result = mysqli_fetch_assoc($query)) {
                    $id = $result['user'];
                    $time = $result['date'];
                    $bank = $result['bank_name'];
                    $depositors_name = $result['account_name'];
                    $amount = 1000;
                    echo ('
                    <div class="d-flex mb-3 p-3 gap-2 cardcontainer text-dark">
                        <div class="col-6">
                            <h6>A pending Activation</h6>
                            <p>From: <span>' . $bank . '</span> </p>
                            <p>Bank Name: <span>' . $depositors_name . '</span> </p>
                            
                        </div>
                        <div class="col-6 text-end">
                            <h6 class="">NGN ' . $amount . '</h6>
                            <a class="btn mb-2 btn-primary" href="./approve/approve.php?id=' . $id . '">Accept</a>
                            <br>
                            <a class="btn mb-2 btn-danger" href="./reject/reject.php?id=' . $id . '">Reject</a>

                        </div>
                    </div>
                    ');
                }
            } else {
                echo ('
                <p class="text-center text-dark mt-3"> No pending transaction </p>
                ');
            }
            ?>
        </div>
    </div>


    <div class="trans container py-4 my-4 bg-light section cardcontainer">
        <div class="  ">
            <!-- Transactions -->
            <h3 class="text-center">Pending withdraw</h3>

            <?php
            $sql = "SELECT * FROM withdrawal_request WHERE status = 'Pending'";
            $query = mysqli_query($conn, $sql);
            $results1 = mysqli_num_rows($query);


            if ($results1) {
                echo ('
                    
                <div class=" px-3 mx-auto py-3   ">
                     ');

                while ($result = mysqli_fetch_assoc($query)) {
                    $id = $result['withdrawal_id'];
                    $time = $result['date'];
                    $bank = $result['bank_name'];
                    $depositors_name = $result['account_name'];
                    $amount = $result['amount'];
                    $account_number = $result['account_number'];

                   
                    echo ('
                    <div class="d-flex mb-3 p-3 gap-2 cardcontainer text-dark">
                        <div class="col-6">
                            <h6>A pending Withdrawal</h6>
                            <p>Bank Name: <span>' . $bank . '</span> </p>
                            <p>Account Name: <span>' . $depositors_name .'</span> </p>
                             <p>Account Number: <span>' . $account_number . '</span> </p>
                            
                        </div>
                        <div class="col-6 text-end">
                            <h6 class="">NGN ' . $amount . '</h6>
                            <a class="btn mb-2 btn-primary" href="./w_approve/approve.php?id=' . $id . '">Accept</a>
                            <br>
                            <a class="btn mb-2 btn-danger" href="./w_reject/reject.php?id=' . $id . '">Reject</a>

                        </div>
                    </div>
                    ');
                }
            } else {
                echo ('
                <p class="text-center text-dark mt-3"> No pending transaction </p>
                ');
            }
            ?>
        </div>
    </div>
    </div>
</section>







<script src="../../assets/js/sweetalert/sweetalert.js"></script>
<script src="../../assets/js/index.js"></script>
<script src="../../assets/bootstrap/js/bootstrap.js"></script>

</body>

</html>