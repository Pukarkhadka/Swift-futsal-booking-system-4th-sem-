<?php
session_start();
include "db_connect.php";

if (!isset($_SESSION['email']) || !isset($_SESSION['id'])) {
    echo '<script>alert("You need to log in first!"); window.location.href="login.php"</script>';
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST['date'];
    $current_date = date('Y-m-d');

    if ($date < $current_date) {
        echo '<script>alert("You cannot choose a date before the current date."); window.location.href="booking.php"</script>';
        exit();
    }

    $start_time = $_POST['starttime'];
    $end_time = $_POST['endtime'];
    $court = $_POST['court'];

    if (empty($court)) {
        echo '<script>alert("You must select a court."); window.location.href="booking.php"</script>';
        exit();
    }

    $start_datetime = $date . ' ' . $start_time;
    $end_datetime = $date . ' ' . $end_time;
    $start_timestamp = strtotime($start_datetime);
    $end_timestamp = strtotime($end_datetime);

    if ($end_timestamp <= $start_timestamp) {
        echo '<script>alert("End time must be after start time."); window.location.href="booking.php"</script>';
        exit();
    }

    $time_difference = ($end_timestamp - $start_timestamp) / 3600;

    if ($time_difference > 2) {
        echo '<script>alert("You can only allocate for 2 hours."); window.location.href="booking.php"</script>';
        exit();
    }

    $sql = "SELECT * FROM bookings 
            WHERE court = '$court' 
            AND booking_date = '$date' 
            AND (
                (start_time <= '$start_time' AND end_time > '$start_time') OR 
                (start_time < '$end_time' AND end_time >= '$end_time') OR 
                ('$start_time' <= start_time AND '$end_time' > start_time)
            )";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<script>alert("Futsal has been booked already."); window.location.href="booking.php"</script>';
        exit();
    }

    $email = $_SESSION['email'];
    $user_id = $_SESSION['id'];
    $query = "INSERT INTO bookings (email, booking_date, start_time, end_time, court, user_id) 
              VALUES ('$email', '$date', '$start_time', '$end_time', '$court', $user_id)";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script>alert("Booking successful."); window.location.href="mybookings.php"</script>';
    } else {
        echo '<script>alert("Booking failed. Please try again."); window.location.href="booking.php"</script>';
    }

    mysqli_close($conn);
}
?>
