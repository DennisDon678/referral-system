<?php


$sql = "SELECT * FROM performed_task where task_id = $task_id AND user_id = $id limit 1";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);