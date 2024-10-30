<?php 
    include 'config.php';
    // $ID = $_GET['ID'];

    // if(isset($ID)){
    //     $stmt = $conn ->prepare("DELETE FROM bookings WHERE ID = $ID");
    //     $stmt -> execute();

    // }
    // header('location:managebooking.php');
    if (isset($_GET['id'])) {

        $booking_id = filter_var($_GET['id']);
    
        $stmt = $conn->prepare("DELETE FROM bookings WHERE id = ?");
        $stmt->bind_param("i", $booking_id);
        $stmt->execute();
    
        
     
            header("Location: managebooking.php");
            exit();
    } else {
        
        echo "Booking ID not provided.";
    }
?>