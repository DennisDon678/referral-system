<?php
session_start();
include('./core/connection/db.php');

if (!isset($_SESSION['user'])) {
  header('location: ./index.php');
}

include('./inc/getUser.php');

// notification
$notice_sql = "SELECT * FROM notification";
$notice_query = mysqli_query($conn, $notice_sql);
$notication = mysqli_fetch_array($notice_query);
$title = $notication['title'];
$message = $notication['message'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MEGAMOVE</title>
  <link rel="stylesheet" href="./dashbord/style.css">
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>



<body>

  <?php
  include('./inc/navbar.php')
  ?>

  <div class="welcom">
    <h2>Welcome Back <?= $name ?></h2>
  </div>

  <div class="profile-pic-div">
    <img src="./dashbord/image.jpg" id="photo">
    <input type="file" id="file">
    <label for="file" id="uploadBtn">Choose Photo</label>
  </div>
  <div class="cash">


  </div>
  <section class="balance-section">
    <div class="container2">
      <div class="amount-box text-center">
        <img src="./assets/images/d2.svg" />
        <div class="bal-flex">
          <div class="bal">
            <p>Referral Balance</p>
            <div class="dx">
              <p class="amount">&#x20A6; <?= $referral_balance ?></p>
            </div>
          </div>

          <div class="bal">
            <p>Task Balance</p>
            <div class="dx">
              <p class="amount">&#x20A6; <?= $task_balance ?></p>
            </div>
          </div>

          <div class="bal">
            <p>Total Balance</p>
            <div class="dx">
              <p class="amount">&#x20A6; <?= $referral_balance + $task_balance ?></p>
            </div>
          </div>
        </div>

        <?php
        if ($account_status == 1) {

        ?>
          <div class="btn-group text-center">
            <button type="button" class="btn btn-outline-light"><a style="color: white; text-decoration:none;" href="./withdraw.php">Withdraw</a> </button>
            <button type="button" class="btn btn-outline-light"><a style="color: white; text-decoration:none;" href="./history.php">History</a> </button>
          </div>


        <?php
        } else {
        ?>

          <div class="btn-group text-center">
            <button type="button" class="btn btn-outline-light"> <a href="./activate.php" style="text-decoration: none; color: white;">ACTIVATE NOW</a> </button>

          </div>


        <?php
        }
        ?>
        <p class="example">
          We offer you big bonus when you invite your friends and family
          members
        </p>

        <?php
        if ($account_status == 1) {

        ?>
          <div class="referral-link">
            <div class="copy">
              <p>Copy Link</p>
            </div>
            <div class="link">
              <a target="blank" href="http://localhost/chuks/register.php?referral-id=USER-279174" class="referral">https://<?= $_SERVER['HTTP_HOST']?>/chuks/register.php?referral-id=<?= $referral_id ?></a>
            </div>
          </div>

        <?php
        } else {
        ?>

          <div class="btn-group text-center">
            <p>Activate You account to Get Your link</p>
            <button type="button" class="btn btn-outline-light"> <a href="./activate.php" style="text-decoration: none; color: white;">ACTIVATE NOW</a> </button>

          </div>


        <?php
        }
        ?>


      </div>
    </div>

  </section>

  <script src="./assets/javascript/sweetalert/sweetalert.js"></script>
  <script src="./dashbord/app.js"></script>
  <script src="./assets/javascript/main.js"></script>



  <script>
    swal({
      title: "<?= $title ?>",
      text: "<?= $message ?>",
      button: "Continue",
    });
  </script>

</body>

</html>