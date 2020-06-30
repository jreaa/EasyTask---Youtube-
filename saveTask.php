<?php
include "config/db.php";
try{
	if(isset($_POST['guardar'])){
		if (isset($_POST['name']) && isset($_POST['date'])) {
			$task = $_POST['name'];
			$date = $_POST['date'];

			$query = "INSERT INTO tasks(task, fecha, estado) VALUES ('$task','$date','pendiente')";
			$result = mysqli_query($conn, $query);

			$_SESSION['message'] = "Se ha agregado correctamente";
			$_SESSION['message-color'] = "success";

			header("Location: index.php");
		}
	}
}catch(PDOException $e){
	echo $e;
}