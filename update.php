<?php include  'connection.php';
$id=$_GET['id'];
$select="SELECT * FROM student WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
<div>
	<form action="" method="POST">
		<input value=<?php echo $row['firstname'] ?> type="text" name="firstname" placeholder="First Name"><br><br>
		<input type="text" name="lastname" placeholder="Last Name" value=<?php echo $row['lastname'] ?>> <br><br>
		<input type="age" name="age" placeholder="Age" value=<?php echo $row['age'] ?>><br><br>

		<input type="submit" name="update_btn" value="Update">
		<button><a href="view.php">Back</a></button>

	</form>
</div>


<?php
	 	if (isset($_POST['update_btn'])){
		$fn=$_POST['firstname'];
		$ln=$_POST['lastname'];
		$age=$_POST['age'];

		$update="UPDATE student SET firstname='$fn', lastname='$ln', age='$age' WHERE id='$id'";
		
		$data=mysqli_query($con,$update);

		if($data){
			?>
<script type="text/javascript">
alert("Data updated Succesfully");
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