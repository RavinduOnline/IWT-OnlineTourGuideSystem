<?php
	include_once 'config.php';	
?>

<?php
	$Fname  = $_POST["fname"];
	$Lname  = $_POST["lname"];
	$num    = $_POST["mobile"];
	$mail   = $_POST["email"];
	$Npeople = $_POST["people"];
	$book   = $_POST["like"];
	
	$id   =$_POST["id"];
	$days =$_POST["dy"];
	$ln   =$_POST["lnge"];
	$gen =$_POST["gender"];
	
	$sql="insert into packagedetails(Booking_ID, FirstNAme, LastName, Mnumber, Email, No_of_People, Booking)values('','$Fname','$Lname','$num','$mail','$Npeople','$book')";
	
	
	if(mysqli_query($conn,$sql)){
		echo "<script> alert('Booking is succesfully, You will be send a comfirmation mail') </script>";
		header("Location:packageDetails.html");
	}
	else{
		echo "<script> Booking is not completed('Error') </script>";
	}

	
	mysqli_close($conn);	
?>