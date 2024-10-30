<?php
session_start();
$id = $_SESSION['id'];

include 'config.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone_number'];
    $request = $conn->prepare("UPDATE user
    SET username = ?,
    email = ?,
    password = ?,
    phone_number = ?
    WHERE id = ?");
    $request->bind_param("sssii", $username, $email, $password, $phone_number, $id);
   $request->execute();
    header("location:Manageuser.php");
}

