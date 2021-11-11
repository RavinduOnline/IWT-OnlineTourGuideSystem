<?php
	include_once 'config3.php';
?>

<?php
	
	$name = $_POST["field1"];
	$code = $_POST["field2"];
	$price = $_POST["field3"];
	$qty = $_POST["field4"];
	
	
	$sql = "insert into Booking(Hotel_id,Hotel_name,No_of_rooms,No_of_nights,No_of_persons)values('','$name','$code','$price','$qty')";
	
	if (mysqli_query($conn,$sql)){
		echo "<script> alert ('sucsessfull!!') </script>";
		header("Location:home.html");
	}
	else{
		echo "<script> alert ('error!! in inserting') </script>";
	}
	

	mysqli_close($conn);
	
		
?>