<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking — Swift Kick</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-content">
    <?php
    include 'auth.php';
    include 'config.php';
    $_SESSION['ID'] = $_GET['id'];
    $booking_id = $_SESSION['ID'];
    $result = mysqli_query($conn, "SELECT * FROM bookings WHERE ID = $booking_id");
    $booking = mysqli_fetch_assoc($result);
    ?>

    <main class="d-flex justify-content-center">
        <div class="container w-50 mt-5">
            <div class="dashboard-page-title mb-4">
                <span class="page-kicker">Match schedule</span>
                <h1>Edit Booking</h1>
                <p>Reschedule this reservation and save your changes.</p>
            </div>
            <div class="card__items card__items--blue p-4" style="width:auto;height:auto">
                <form method="POST" action="updatebooking.php?id=<?= $booking['ID']; ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($booking['email']) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date:</label>
                        <input type="date" class="form-control" id="date" name="date" value="<?= $booking['booking_date'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="start_time" class="form-label">Start time:</label>
                        <input type="time" class="form-control" id="start_time" name="start_time" value="<?php echo $booking['start_time'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="end_time" class="form-label">End time:</label>
                        <input type="time" class="form-control" id="end_time" name="end_time" value="<?php echo $booking['end_time'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="court" class="form-label">Court:</label>
                        <select id="court" name="court" class="form-select" required>
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM futsals");
                            while ($futsal = mysqli_fetch_array($result)) {
                                if ($booking['court'] == $futsal['ID']) { ?>
                                    <option value="<?= $futsal['ID']; ?>" selected><?= htmlspecialchars($futsal['Name']) ?></option>
                                <?php } else { ?>
                                    <option value="<?= $futsal['ID']; ?>"><?= htmlspecialchars($futsal['Name']) ?></option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Update booking</button>
                </form>
            </div>
        </div>
    </main>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>