<?php
include 'config.php';
extract($_POST);
$username= $_POST['username'];
$password= $_POST['password'];
$query = mysqli_query($conn, "SELECT * FROM admin where Username='$username' AND Password='$password'");
$row = mysqli_num_rows($query);
if($row){
    session_start();
    $_SESSION['Username'] = $username;
    header("Location: dashboard.php");
    exit();
}
else{
echo '<script>alert("incorrect username or password"); window.location.href="index.php"</script>';
}

?>