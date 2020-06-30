<?php include "config/db.php";?>


<!DOCTYPE html>
<html>
<head>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/04de717d2d.js" crossorigin="anonymous"></script>
	<title>EasyTask</title>
</head>

<nav class="nav navbar-light bg-light">
	<div class="container">
		<a href="index.php"><i class="fas fa-long-arrow-alt-left" style="color:#fff;"></i></a>
		<h3 class="navbar-brand ml-3" >Nueva Tarea</h3>
	</div>
</nav>

<div class="container">
	<div class="card card-body">
		<form action="saveTask.php" method="POST">
			<div class="form-group">
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<input type="date" name="date" class="form-control">
			</div>
			<input type="submit" name="guardar" class="btn btn-success btn-block" value="Guardar">
		</form>
	</div>
</div>



<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>