<?php 
include 'config.php';
// $id = $_GET['ID'];

// if(isset($id)){
//     $stmt = $conn ->prepare("DELETE FROM futsals WHERE id= $id");
//     $stmt -> execute();

// }
// header('location:managefutsals.php');


if (isset($_GET['id'])) {

$futsal_id = filter_var($_GET['id']);

$stmt = $conn->prepare("DELETE FROM futsals WHERE ID = ?");
$stmt->bind_param("i", $futsal_id);
$stmt->execute();
header("Location: managefutsals.php");
    exit();
} else {

echo "Futsal ID not provided.";
}