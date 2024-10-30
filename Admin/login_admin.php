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
echo '<script>alert("Login successful"); window.location.href="dashboard.php"</script>';
    return; 
}
else{
echo '<script>alert("incorrect username or password"); window.location.href="login.php"</script>';
}

?>