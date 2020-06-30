<?php
include 'config/db.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];

	$query = "UPDATE tasks set estado = 'realizado' WHERE id = $id";
	mysqli_query($conn, $query);

	header("Location: index.php");
}

?>