
<?php include_once 'config.php'; ?>

 <?php 
 	
	$Temail = $_POST["email"];
	$F_Name = $_POST["FirstName"];
	$L_Name = $_POST["LasttName"];
	$SCode = $_POST["Scode"];
	
	$Epsw = mysqli_real_escape_string($conn,$_POST["psw"]);
 
	$SQL = "insert into tuser(TID,Temail,F_Name,L_Name,TPassword,SCode)values('','$Temail','$F_Name','$L_Name','$Epsw','$SCode')";
	
	
	if(mysqli_query($conn,$SQL)){
		echo "<script>alert ('Your Data Submited')</script>";
	}
	else{
		echo "<script>alert ('Your Data Not Submited 222')</script>";
	}
	
	mysqli_close($conn);
	
 ?>