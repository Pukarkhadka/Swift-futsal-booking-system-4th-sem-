<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.css" rel="stylesheet">
  <title>Swift Kick</title>

  <style>
    #intro {
      background-image: url("./assets/playing_football.jpg");
      background-repeat: no-repeat;
      background-size: 100vw 100vh;
      width: 100vw;
      height: 90vh;
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0.9;
    }

    .hero-text {
      color: white;
    }

    h1 {
      color: whitesmoke;
    }

    P {
      color: whitesmoke;
    }

    .logo {
      width: 40px;
      height: 40px;
    }

    .FUTSAL {
      width: 100%;
      height: 300px;
    }

    .card {
      overflow: hidden;
      height: 500px;
      padding: 1rem;
      padding-bottom: 2rem;

    }

    .card-text {
      color: #727272;

    }

    .card-text:hover {
      cursor: pointer;
    }

    h3 {
      text-align: center;
      padding: 16px;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .navbar {
      background-color: #446937;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .footer {
      background-color: white;
      margin-top: 3rem;
      padding: 20px 0;
      border-top: solid black 1px;

    }

    .footer-container {

      padding: 1rem;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
    }

    .rights-reserved-container {
      text-align: center;
      font-size: 0.875rem;
    }

    .footer-container h5,
    a,
    p {
      color: black;
    }

    .button {
      width: 100px;
      margin: 0 auto;
      display: block;
    }

    .navbar {
      background-color: #446937;
    }

    .nav {
      border-bottom: black solid 1px;
      z-index: 300;
    }
  </style>

</head>

<div>

  <nav class="navbar navbar-expand-md navbar-light nav  bg-white">
    <div class="container-fluid">
      <img class="logo" src="./assets/Logo-2.png" />
      <a class="navbar-brand" href="#">Swift Kick</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#all-court">All Courts</a>
          </li>

        </ul>
      </div>
    </div>
    <ul class="navbar-nav w-75 flex justify-content-end">
      <?php
      session_start();
      if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        echo "<li class='nav-item'><a class='nav-link'>$email";
        echo "<li class='nav-item'><a class='nav-link' href='mybookings.php'>My bookings</a></li>";
      } else {
        echo "<li class='nav-item'>
          <a class='nav-link' href='login.php'>Login</a>
        </li>";
      }
      ?>

      <?php if (!isset($_SESSION['email'])) {
        echo "<li class='nav-item'><a class='nav-link' href='register.php'>Register</a></li>";
      }
      ?>
      <li class="nav-item"><a class="nav-link" href="booking.php">Book</a></li>
      <?php
      if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        echo "<li class='nav-item'><a class='nav-link' href='logout.php'><span>Logout</span></a></li>";
      }
      ?>
    </ul>
  </nav>

  </ul>
  </div>
  </div>
  </nav>
  </a>
  </nav>

  <!--main image & intro text-->
  <section id="intro">
    <div class="container-lg" id="home">
      <div class="row justify-content-center">
        <div class="col-md-12 text-center text-md-start">
          <h1>
            <div class=".text-body">Swift Kick</div>
            <div class=".text-body">Book Your Court, Play Your Passion!</div>
          </h1>
          <p class="hero-text .text-body">Welcome to our revolutionary futsal booking system! Say goodbye to the hassle
            of
            coordinating game times and locations. With our user-friendly platform, you can effortlessly reserve your
            spot on the court and dive into the action-packed world of futsal. Whether you're a seasoned pro or a casual
            player looking for some fun, our system ensures that you can focus on what matters most – enjoying the game.
            With just a few clicks, you'll be on your way to scoring goals and making memories. Join us and experience
            the
            convenience of seamless futsal booking today!</p>
          <a href="#All courts" class="btn ntn-secondary btn-lg"></a>
        </div>
      </div>
    </div>
  </section>

  <h3 id="all-court">ALL COURTS</h3>
  <div class="row">
    <?php
    include "db_connect.php";
    $result = mysqli_query($conn, "select * from futsals");


    while ($futsal = mysqli_fetch_array($result)) { ?>
      <div class="col-md-4 col-lg-6">
        <div class="card">
          <img class="FUTSAL" src="<?php echo $futsal['Photo']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $futsal['Name']; ?></h5>

            <p class="card-text">
              <?php echo $futsal['Description'] ?><br>
            <h6><label>Price:<?php echo $futsal['Price'] ?></label></h6>
            </p>
          </div>
          <div class="d-flex justify-content-center w-100 mb-6">
            <a href="booking.php?court_name=<?php echo urlencode($futsal['Name']); ?>" class="btn btn-success">Book
              now</a>
          </div>
        </div>

      </div>
    <?php
    } ?>

  </div>

  </div>

  <!-- Footer -->
  <footer>
    <div class="footer-container">
      <div>
        <h5>Contact Us</h5>
        <p>Email: info@swiftfutsal.com</p>
        <p>Phone: +123456789</p>
      </div>
      <div class="rights-reserved-container">
        <p>&copy; 2024 Swift Futsal. All rights reserved.Developed by Fourth Semester Student (ICMS).</p>
      </div>
      <div>
        <h5>Follow Us</h5>
        <ul class="list-unstyled">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
        </ul>
      </div>
    </div>

  </footer>


  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script>
    function redirectToBooking() {
      window.location.href = "booking.php";
    }

</body >

</html >