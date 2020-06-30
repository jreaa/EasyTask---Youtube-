<?php 
include 'include/header.php';
include 'config/db.php';
?>

<!---MAIN-->

<a href="addTask.php" class="float">
	<i class="fas fa-plus my-float"></i>
</a>

<div class="container mt-3">
	<h3 style="color: red;">Pendiente</h3>
</div>
<?php

$query = "SELECT * FROM  tasks WHERE estado = 'pendiente'";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
?>

<section class="container">
	<div class="card card-body mt-3 mb-4 pendiente">
		<div class="card-body-main">
			<a href="edit.php?id=<?php echo $row['id'];?>"><i class="far fa-check-square mr-3"></i></a>
			<h4>
				<?php echo $row['task'];?>
			</h4>
		</div>
		<p><?php echo $row['fecha'];?></p>
	</div>
</section>

<?php } ?>

<br>
<hr>
<br>

<div class="container">
	<h3 style="color: green;">Realizados</h3>
</div>
<?php

$query = "SELECT * FROM  tasks WHERE estado = 'realizado'";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
?>
<section class="container">
	<div class="card card-body mt-3 mb-4 realizados">
		<div class="card-body-main">
			<h4 class="finish">
				<?php echo $row['task'];?>
			</h4>
			<a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
		</div>
		<p class="finish"><?php echo $row['fecha'];?></p>
	</div>
</section>

<?php } ?>

<?php include('include/footer.php');?>