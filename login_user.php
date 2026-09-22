<?php
include 'db_connect.php';
session_start(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $data['id'];

        echo '<script>
            alert("Login successful");
            window.location.href = "index.php";
        </script>';
    } else {
        echo '<script>
            alert("Incorrect email or password");
            window.location.href = "login.php";
        </script>';
    }

    $stmt->close();
}

