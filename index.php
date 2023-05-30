<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>

<body>

	<div>
		<form action="" method="POST">
			<input type="text" name="firstname" placeholder="First Name"><br><br>
			<input type="text" name="lastname" placeholder="Last Name"><br><br>
			<input type="age" name="age" placeholder="Age"><br><br>

			<input type="submit" name="save_btn" value="Save">
			<button><a href="view.php">View</a></button>

		</form>
	</div>
	<?php
	 	if (isset($_POST['save_btn'])){
		$fn=$_POST['firstname'];
		$ln=$_POST['lastname'];
		$age=$_POST['age'];

		$query="INSERT into  student(firstname,lastname,age) values('$fn','$ln','$age')"; 
		
		$data=mysqli_query($con,$query);

		if($data){
			?>
	<script type="text/javascript">
	alert("Data saved Succesfully");
	</script>
	<?php
	}
	else{
		?>
	<script type="text/javascript">
	alert("Data saved Succesfully");
	</script>
	<?php
	}
		
	}




	?>
</body>

</html>