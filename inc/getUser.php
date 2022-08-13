<?php

$user = $_SESSION['user'];
$sql = "SELECT * FROM users where email = '$user'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);

$id = $result['id'];
$name = $result['name'];
$email = $result['email'];
$referral_balance = $result['referral_balance'];
$task_balance = $result['task_balance'];
$referral_id = $result['referral_id'];
$account_status = $result['account_status'];


?>