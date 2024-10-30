<?php
session_start();

require 'config.php';
$booking_id = $_GET['id'];
if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $date = $_POST['date'];
        $start_time = $_POST['start_time'];
        $end_time = $_POST['end_time'];
        $court= $_POST['court'];

    $request = $conn -> prepare("UPDATE bookings
    SET 
    email = ?,
    booking_date = ?,
    start_time= ?,
    end_time = ?,
    court = ?
    WHERE ID = ?");
    $request->bind_param("ssssii", $email, $date, $start_time, $end_time, $court, $booking_id);
    $res = $request->execute();
 

    if ($res) {
        header("location: managebooking.php");
        exit;
    } else {
        echo "Error updating booking: " . $conn->error;
    }
}


?>
