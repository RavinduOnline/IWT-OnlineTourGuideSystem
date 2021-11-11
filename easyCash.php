<?php
		include_once 'config.php';
?>

 <?php
	$name = $_POST["Uname"];
	$pass = $_POST["Pass"];
	$phone = $_POST["pnum"];
 
	$sql = "insert into easycash_d(userID,userName,password,phoneNum)values('', '$name', '$pass', '$phone')"; //query string
	
	if(mysqli_query($conn, $sql))
	{		
			echo "<script>Alert('Record insereted successfully !!!')</script>";
			header("Location:paymentEasy.html");
	}
	else{
			echo "<script>Alert ('Error in inserting records.....!')</script>";
	}

	mysqli_close($conn);
?>