<?php
session_start();
include('../../core/connection/db.php');

if (!isset($_SESSION['admin'])) {
    header('location: ./index.php');
}


if (isset($_POST['submit'])) {
    if (empty($_FILES['task_image'])) {
        $msg = "Task image can not be empty!";
        $msg = urlencode($msg);
        header('location: ../../admin/new-task/?msg='.$msg.'');
    }

    $task_image = $_FILES['task_image'];
    $task_id = rand(0, 9999) + 5 -12;
    $platform = $_POST['platform'];
    
    $name = $task_image['name'];
    $path_info = pathinfo($name, PATHINFO_EXTENSION);
    $dot = ".";
    $path = $task_image['tmp_name'];
    $new_name = uniqid("Task-", true);
    $fullname = $new_name.$dot.$path_info;
    $file_path = '../../assets/images/tasks/'.$fullname;
    move_uploaded_file($path, $file_path);
//  get current active task
    $sql = "SELECT * FROM active_task limit 1";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);
    $id = $result['id'];
    $file_name = $result['file_path'];

// move to expiired
    $sql = "INSERT INTO expired_task (id, file_path) VALUES ($id, '$file_name')";
    $query = mysqli_query($conn, $sql);
// delete from active
    $sql = "DELETE FROM active_task WHERE id = $id";
    $query = mysqli_query($conn, $sql);

// insert new active 
    $sql = "INSERT INTO active_task (id, file_path, platform) VALUES ($task_id, '$fullname', '$platform')";
    $query = mysqli_query($conn, $sql);
// return a message
    $msg = "Task image Has Been Updated!";
    $msg = urlencode($msg);
    header('location: ../../admin/new-task/?msg=' . $msg . '');
}
