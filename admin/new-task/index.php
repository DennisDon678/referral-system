<?php
session_start();
include('../../core/connection/db.php');

if (!isset($_SESSION['admin'])) {
    header('location: ./index.php');
}



// notification
$notice_sql = "SELECT * FROM active_task";
$notice_query = mysqli_query($conn, $notice_sql);
$notication = mysqli_fetch_array($notice_query);
$platform = $notication['platform'];




include('../inc/header.php');
?>

<section class="container-fluid mt-5 py-5 h">
    <div class="container py-4 section bg-light enclose">

        <!-- Sit setting -->
        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
        ?>
            <div class="alert">
                <p class="alert alert-warning"><?= $msg ?></p>
            </div>

        <?php
        }

        ?>
        <h3 class=" text-center">New Daily Task for your users</h3>

        <form class="text-dark" action="../../core/admin_operation/new_task.php" method="post" enctype="multipart/form-data">
            <div class="form mb-3">
                <label for="fullname">Task Image</label>
                <input class="form-control" type="file" name="task_image" id="">
            </div>

            <div class="form mb-3">
                <label for="fullname">Platform</label>
                <input class="form-control" value="<?= $platform ?>" type="text" name="platform" id="" required>
            </div>


            <div class="form justify-content-center text-dark mb-3">
                <input class="form-control  w-50 btn adlog" type="submit" name="submit" value="Add Task">
            </div>
        </form>

    </div>
</section>



<script src="../../assets/js/index.js"></script>
<script src="../../assets/bootstrap/js/bootstrap.js"></script>
</body>

</html>