<?php
	include_once 'configure.php';
?>
	
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styleSheet2.css"/>

<title>Review</title>
</head>
<body>

<header id="main-header">
	<script src="js/myScript.js"></script>
		<div class="container">
				
		<!--Logo-->
				
			<img src="Images/Logo.png" class="logo">
			<center><h3 style="color:white; font-family:sans-serif"><b>The Online Tour Guide</b></h3></center>
					
		<!--Navigation Menu-->
					
		<!--Navigation bar-->	
			<ul class="navi">
				<li class="navi"><a href="Home.html">Home</a></li>
				<li class="navi"><a href="#">Packages and Bookings</a></li>
				<li class="navi"><a href="#">Explore</a></li>
				<li class="navi"><a href="#">Contact Us</a></li>
				<li class="navi"><a href="#">Login</a></li>
			</ul>
				
			
		</div>
</header>



	<br>
	
	
	
<center>	
<table class ="T4" border ="1" width="10%">

<tr>
	<th>Name</th>
	<th>Comment</th>
</tr>


	<?php
	$sql = "select * from review";
	$result = $conn->query($sql); 
	
	if($result->num_rows>0){
		
		while($row = $result->fetch_assoc()){
			echo "<tr><td>".$row["f_name"]."</td><td>".$row["comment"]."</td></tr>";
		}
	} 
	else{
		echo "0 results";
	}
	
	echo "</table>";
	
	$conn->close();

	?>
	</center>



	
	<br>
	
	
	

<!--Footer-->
<footer>
<table class="T1"  width="100%">
	<tr style="border:0px">
		<th style="font-family:Geneva"><h3 style="font-family:sans-serif; font-size:20px;">Follow us on</th></h3>
	</tr>
	<tr> 
		<th>
			<a href="https://www.facebook.com/"><img src="Images/ICONS/FB2.png" width=50" height="50"></a>
			<a href="https://www.twitter.com/"><img src="Images/ICONS/Twitter2.png" width=50" height="50"></a>
			<a href="https://www.instagram.com/"><img src="Images/ICONS/Insta2.png" width=50" height="50"></a>
			<a href="https://www.googleplus.com/"><img src="Images/ICONS/G+2.png" width=50" height="50"></a><br>
			<a href="..\reviews.html"><img src="Images/ICONS/rw2.png" width="180" height="60"></a>
			<br><center><h3 style="font-family:sans-serif"> Terms and conditions</center></h3>
			<p style="font-size:13px; font-family:Arial;">The following are terms of a legal agreement butween you and the Sri Lanka Tourism Promotion Bunau. By accessing, browsing, or using this Website, you acknowledge that you have read, understood, and agee to be bound by these terms and to comply with all applicable laws and regulationsf you do not agree to these terms, please do not use this Website. SLTPB may, without notice to you, at any time rvse these Tens of Use and any other information contained in this Website by updating this posting SLUPB may also make improvemets or changes in the products, survices, or programs described in this sile at any time without notice.</p>
			<center><h4 style="font-family:sans-serif">@ 2020 ALL Rights Rerved by "Travel Net"</a></h4></center> 
		</th>
	</tr>
</table>
</footer>
</body>
</html>