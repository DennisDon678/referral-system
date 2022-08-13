<?php
session_start();
include('./core/connection/db.php');

if (!isset($_SESSION['user'])) {
    header('location: ./index.php');
}

$limit = 10;
if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
};
$start_from = ($page - 1) * $limit;

if (isset($_GET["Wpage"])) {
    $Wpage  = $_GET["Wpage"];
} else {
    $Wpage = 1;
};
$Wstart_from = ($Wpage - 1) * $limit;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link rel="stylesheet" href="./assets/css/Dashbord.css">
    <link rel="stylesheet" href="./assets/css/main.css">

    <link rel="stylesheet" href="./dashbord/style.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php
    include('./inc/navbar.php');
    include('./inc/getUser.php');
    include('./inc/getReferrals.php');
    include('./inc/getWithdrawal.php');
    ?>

    <h1 style="width: 100vw;">Referral History</h1>
    <hr>

    <div class="tab">
        <table id="tab" style="width: 80vw; text-align:center;">
            <tr id="header">
                <th>Name</th>
                <th>Email</th>
                <th>Account Status</th>
            </tr>


            <?php
            while ($result = mysqli_fetch_array($query)) {
                $name = $result['name'];
                $email = $result['email'];
                $account_status = $result['account_status'];

            ?>
                <tr>
                    <td><?= $name ?></td>
                    <td><?= $email ?></td>
                    <?php
                    if ($account_status == 1) {
                    ?>
                        <td>Active</td>
                    <?php
                    } else {
                    ?>
                        <td>Inactive</td>
                    <?php
                    }
                    ?>
                </tr>
            <?php
            }
            ?>


        </table>

        <div class="page">
            <?php
            $result_db = mysqli_query($conn, "SELECT COUNT(referree) FROM users where referree = '$referral_id'");
            $row_db = mysqli_fetch_row($result_db);
            $total_records = $row_db[0];
            $total_pages = ceil($total_records / $limit);
            /* echo $total_pages; */
            $pagLink = "<ul class='pagination'>";
            for ($i = 1; $i <= $total_pages; $i++) {
                $pagLink .= "<li class='page-item'><a class='page-link' href='./history.php?page=" . $i . "'>" . $i . "</a></li>";
            }
            echo $pagLink . "</ul>"; ?>
        </div>


    </div>

    <!-- Withdrawal -->

    <h1 style="width: 100vw;">Withdrawal History</h1>
    <hr>

    <div class="tab">
        <table id="tab" style="width: 80vw;">
            <tr id="header">
                <th>Withdrawal_ID</th>
                <th>Amount</th>
                <th> Status</th>
            </tr>


            <?php
            while ($result = mysqli_fetch_array($query1)) {
                $name = $result['withdrawal_id'];
                $email = $result['amount'];
                $account_status = $result['status'];

            ?>
                <tr>
                    <td><?= $name ?></td>
                    <td><?= $email ?></td>
                    
                        <td><?= $account_status?></td>
                </tr>
            <?php
            }
            ?>


        </table>

        <div class="page">
            <?php
            $result_db = mysqli_query($conn, "SELECT COUNT(status) FROM withdrawal_request where user_id = '$id'");
            $row_db = mysqli_fetch_row($result_db);
            $total_records = $row_db[0];
            $total_pages = ceil($total_records / $limit);
            /* echo $total_pages; */
            $pagLink = "<ul class='pagination'>";
            for ($i = 1; $i <= $total_pages; $i++) {
                $pagLink .= "<li class='page-item'><a class='page-link' href='./history.php?Wpage=" . $i . "'>" . $i . "</a></li>";
            }
            echo $pagLink . "</ul>"; ?>
        </div>



        <script src="./dashbord/app.js"></script>
        <script src="./assets/javascript/main.js"></script>
</body>

</html>