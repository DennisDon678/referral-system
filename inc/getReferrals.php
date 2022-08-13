<?php


$sql = "SELECT * FROM users WHERE referree = '$referral_id' ORDER BY id DESC limit $start_from, $limit";
$query = mysqli_query($conn, $sql);

?>