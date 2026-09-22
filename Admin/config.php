<?php
$server="localhost";
$username="root";
$password= "";
$database= "Swift_kick";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("connection error").mysqli_connect_error();
}
?>
