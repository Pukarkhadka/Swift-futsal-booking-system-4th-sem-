<?php 
    include 'config.php';
    if(isset($_POST['submit'])){
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone_number = $_POST['phone_number'];

        $request = $conn-> prepare("INSERT INTO user VALUES(Default,'$username', '$email', '$password', '$phone_number')");
        $res= $request->execute();
        if($request) {
           
            header('location: Manageuser.php');
        } else {
           
            echo "Error: " . $request->error;
        }
    }
?> 
    