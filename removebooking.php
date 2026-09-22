
<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {

    $booking_id = filter_var($_GET['id']);
    include 'db_connect.php';

    $stmt = $conn->prepare("DELETE FROM bookings WHERE id = ?");
    $stmt->bind_param("i", $booking_id);
    $stmt->execute();

    
 
        header("Location: mybookings.php");
        exit();
} else {
    
    echo "Booking ID not provided.";
}
?>
