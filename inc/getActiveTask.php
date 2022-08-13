<?php

$sql = "SELECT * FROM active_task limit 1";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);
$task_id = $result['id'];
$file_name = $result['file_path'];
$platform = $result['platform'];