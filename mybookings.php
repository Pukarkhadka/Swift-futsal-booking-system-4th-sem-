<?php
session_start();
?>
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

<body>

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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>

                    </li>
                    
                </ul>
            </div>
        </div>
        <ul class="navbar-nav w-75 flex justify-content-end">
            <li class="nav-item"><a class="nav-link" href="mybookings.php">My bookings</a></li>
            <li class="nav-item"><a class="nav-link" href="booking.php">Book</a></li>
            <?php
            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                echo "<li class='nav-item'><a class='nav-link'>$email";
            } else {
                echo "<li class='nav-item'>
          <a class='nav-link' href='login.php'>Login</a>
        </li>";
            }
            ?>

            <li class="nav-item"><a class="nav-link" href="logout.php"><span>Logout</span></a></li>
        </ul>
    </nav>

    </ul>
    </div>
    </div>
    </nav>
    </a>
    </nav>
    <?php 
            // include "sidebar.php";
        ?>
    <div class="container-fluid px-4">


        <!-- <div class="users-header d-flex justify-content-between align-items-center py-2">
            <div class="title h6 fw-bold">Bookings</div>
        </div> -->
        <div class="table-responsive">
            <table class="table users table-borderless">
                <thead>
                    <tr class="align-middle">
                        <th>ID</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Court</th>
                        <th>Price</th>
                        <th>Cancel</th>
                        
                </thead>
                <tbody>
                    <?php
                    include 'db_connect.php';
                    $query = "SELECT bookings.*, futsals.Name AS court, futsals.price 
                    FROM bookings 
                    JOIN futsals ON bookings.court = futsals.ID 
                    WHERE email='$email'";

// Execute query
                   $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        
                        ?>
                
                        <td><?= $row['ID'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['booking_date'] ?></td>
                        
                        <td><?= date("g:i A", strtotime($row['start_time'])); ?></td>
                        <td><?= date("g:i A", strtotime($row['end_time']));?></td>
                        <td><?= $row['court'] ?></td>
                        <td><?= $row['price'] ?></td>
                        <td class="d-md-flex gap-4 mt-3">
                        <a href="removebooking.php?id=<?php echo $row['ID']?>" onclick="return confirm('Do you want to cancel ?')">Cancel Booking</a>
                        </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</html>