<?php
	include_once 'configure.php';
?>
	
<?php
	$fname = $_POST["first-name"];
	$lname = $_POST["last-name"];
	$comnt = $_POST["comment"];
	

	$sql = "insert into review(rate_id,f_name,l_name,comment)values('','$fname','$lname','$comnt')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert ('Record inserted successfully')</script>";
		header("Location:reviewshow.php");
	}
	else{
		echo "<script>alert ('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);


?>