<?php 
    include 'config.php';
    $id = $_GET['id'];

    if(isset($id)){
        $stmt = $conn ->prepare("DELETE FROM user WHERE id= $id");
        $stmt -> execute();

    }
    header('location:manageuser.php');
?>