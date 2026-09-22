<?php 
    include 'auth.php';
    include 'config.php';
    $id = $_GET['id'];

    if(isset($id)){
        $stmt = $conn ->prepare("DELETE FROM user WHERE id= ?");
        $stmt->bind_param("i", $id);
        $stmt -> execute();

    }
    header('location:Manageuser.php');
?>