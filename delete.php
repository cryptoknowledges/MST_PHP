<?php include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM form WHERE id=$id");
header("Location: home.php");
?>
