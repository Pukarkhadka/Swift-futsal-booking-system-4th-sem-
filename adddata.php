<?php
include 'db_connect.php';
extract($_POST);
$username = $_POST['username'];
$email= $_POST['email'];
$password= $_POST['password'];
$phone_number= $_POST['phone_number'];
$query = mysqli_query($conn, "SELECT * FROM user where email='$email'");
$emailExists = $query->fetch_assoc();
if ($emailExists) {
    echo '<script>alert("email already exists"); window.location.href="register.php"</script>';
    return;
}

$query = mysqli_query($conn, "INSERT INTO user values(DEFAULT, '$username', '$email', '$password', '$phone_number')");
echo '<script>alert("User registered"); window.location.href="login.php"</script>'
?>