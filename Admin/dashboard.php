<?php include 'auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — Swift Kick</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <?php
            include "component/sidebar.php";
            include 'config.php';

            $nbr_user = $conn->query("SELECT * FROM user");
            $nbr_user = mysqli_num_rows($nbr_user);

            $nbr_bookings = $conn->query("SELECT * FROM bookings");
            $nbr_bookings = mysqli_num_rows($nbr_bookings);

            $nbr_futsals = $conn->query("SELECT * FROM futsals");
            $nbr_futsals = mysqli_num_rows($nbr_futsals);
        ?>

        <div class="container-fluid px-4">
            <div class="dashboard-page-title">
                <span class="page-kicker">Control room</span>
                <h1>Dashboard</h1>
                <p>An overview of your futsal operations at a glance.</p>
            </div>

            <div class="cards row gap-3 justify-content-center mt-4">
                <div class="card__items card__items--blue col-md-3 position-relative">
                    <i class="fal fa-users stat-icon"></i>
                    <div class="card__meta">
                        <span>Users</span>
                        <small>Registered players</small>
                    </div>
                    <span class="h5 fw-bold nbr"><?php echo $nbr_user; ?></span>
                </div>
                <div class="card__items card__items--rose col-md-3 position-relative">
                    <i class="fal fa-calendar-check stat-icon"></i>
                    <div class="card__meta">
                        <span>Bookings</span>
                        <small>Total reservations</small>
                    </div>
                    <span class="h5 fw-bold nbr"><?php echo $nbr_bookings; ?></span>
                </div>
                <div class="card__items card__items--gradient col-md-3 position-relative">
                    <i class="fal fa-futbol stat-icon"></i>
                    <div class="card__meta">
                        <span>Futsals</span>
                        <small>Active courts</small>
                    </div>
                    <span class="h5 fw-bold nbr"><?php echo $nbr_futsals; ?></span>
                </div>
            </div>
        </div>
    </main>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>