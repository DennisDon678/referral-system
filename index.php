<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>megermove</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <?php
  include('./inc/navbar.php')
  ?>
  <!--slider-->

  <div class="img-slider">
    <div class="slide active">
      <img src="./assets/images/1.jpg" alt="">
      <div class="info">
        <h2>Make Your Day Happy</h2>
        <p>When you start doing things that you benefit alote form you wont stop doing that</p>
      </div>
    </div>
    <div class="slide">
      <img src="./assets/images/2.jpg" alt="">
      <div class="info">
        <h2>See what You Can Gain From Us</h2>
        <p>Enjooy more offerrs such as data conversion cash withdraw

        </p>
      </div>
    </div>
    <div class="slide">
      <img src="./assets/images/3.jpg" alt="">
      <div class="info">
        <h2>Earn More If You Register A Friends</h2>
        <p>Make more money when you invite your Friends you get you referral bonuse aftera successful registration</p>
      </div>
    </div>
    <div class="slide">
      <img src="./assets/images/4.jpg" alt="">
      <div class="info">
        <h2>Make A megerMove Today</h2>
        <p>You can only make it only when you give it a try </p>
      </div>
    </div>
    <div class="slide">
      <img src="./assets/images/5.jpg" alt="">
      <div class="info">
        <h2>Learn More About Us</h2>
        <p>we make sure you get what you expect from use </p>
      </div>
    </div>
    <div class="navigation">
      <div class="btn active"></div>
      <div class="btn"></div>
      <div class="btn"></div>
      <div class="btn"></div>
      <div class="btn"></div>
    </div>
  </div>

  <section class="hero">
    <div class="container">
      <div class="left-col">
        <p class="subhead">Join Us &amp; Enjoy</p>
        <h1>Mega Move </h1>
        <h2>Better You</h2>
        <div class="hero-cta">
          <a href="Dashbord.html" class="primary-cta">Start Earning Now</a>

        </div>
      </div>

      <div class="card">
        <img src="./assets/images/r2.jpg" class="hero-img" alt="r2">
      </div>


    </div>
  </section>

  <section class="features-section">
    <div class="container">
      <ul class="features-list">
        <li>Unlimited Tasks</li>
        <li>Earn Doubble With Us</li>
        <li>Social Media Shear</li>
        <li>Withdraw Real Cash</li>
        <li>Other awesome features</li>
      </ul>
    </div>
  </section>

  <section class="testimonials-section">
    <div class="container">
      <ul>
        <li>
          <img src="./assets/images/person.jpg" alt="Person">

          <cite>- Is Only You</cite>
          <blockquote>"Make sure you are not among those that think that everything is a scam just make sure you in the right place"</blockquote>
        </li>
        <li>
          <img src="./assets/images/zz.jpg" alt="Person">

          <cite>- Go And Get It</cite>
          <blockquote>"Never give up on what ever you thing that will help you in your curent problem"</blockquote>
        </li>
        <li>
          <img src="./assets/images/zza.jpg" alt="Person">

          <cite>- Time Wait For No One</cite>
          <blockquote>"You are the one that can help yourself out in your problems because if you wiat for someone you will delay your self"</blockquote>
        </li>
      </ul>
    </div>
  </section>



  </div>
  </section>


  <script src="./assets/javascript/main.js"></script>

</body>

</html>