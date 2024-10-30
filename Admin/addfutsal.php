<?php 
include "../upload.php";
include 'config.php';
    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $photo = $_FILES['photo'];
        $dest = uniqid('', false).$photo['name'];
        $url = 'http://localhost/Project/Futsal-Booking-System/uploads/'.$dest;
        upload_file($photo['tmp_name'], $dest);
        $request = $conn->prepare("INSERT INTO futsals(Photo, Name, Description, Price) VALUES('$url','$name', '$description', $price)");
        $res= $request->execute();
        if($request) {
           
            header('location: managefutsals.php');
        } else {
           
            echo "Error: " . $request->error;
        }
    }
    
?> 
    