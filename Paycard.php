<?php
		include_once 'config.php';
?>

 <?php
	$name = $_POST["Oname"];
	$cnum = $_POST["CardNumber"];
	$ctype = $_POST["cardT"];
	$date = $_POST["date"];
	$cvv =  $_POST["cvv"];
	$mail =  $_POST["myEmail"];
 
	$sql = "insert into pay_d(ownerID,cardOwnerName,cardNumber,cardType,expDate,cvv,email)values('', '$name', '$cnum', '$ctype','$date', '$cvv', '$mail')"; //query string
	
	if(mysqli_query($conn, $sql))
	{		
			echo "<script>Alert('Record insereted successfully !!!')</script>";
			header("Location:paymentCard.php");
	}
	else{
			echo "<script>Alert ('Error in inserting records.....!')</script>";
	}

	mysqli_close($conn);
?>