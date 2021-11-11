<?php
	include_once 'config.php';	
?>

<!DOCTYPE>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/styleSheet.css"/>
<script src="js/myScript2.js"></script>
<title>Package Details</title>
</head>
<body>

<header id="main-header">

			<div class="container">
			
				<!--Logo-->
			
					<img src="Images/Logo.png" class="logo">
					<center><h3 style="color:white"><b>The Online Tour Guide</b></h3></center>
				
	
				<!--Navigation Menu-->
				
		<!--Navigation bar-->	
<ul class="navi">
	<li class="navi"><a href="Home.html">Home</a></li>
	<li class="navi"><a href="Travel Packages.html">Packages and Bookings</a></li>
	<li class="navi"><a href="#">Explore</a></li>
	<li class="navi"><a href="#">Contact Us</a></li>
	<li class="navi"><a href="Login.html">Login</a></li>
</ul>
			
			
			</div>
</header>
<br>
<div>
<table border="1px" width="100%" padding="5px" style="border-bottom-style:groove; border-color:DarkBlue; opacity:0.6">
	<tr>
		<th> Booking ID </th>
		<th> First Name </th>
		<th> Last Code </th>
		<th> Mobile Number </th>
		<th> No of People </th>
		<th> Book with </th>
	</tr>
	<?php
	$sql = "select * from packagedetails";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while($row=$result->fetch_assoc()){
			echo "<tr><td>".$row["Booking_ID"]."</td><td>".$row["FirstNAme"]."</td><td>".$row["LastName"]."</td><td>".$row["Mnumber"]."</td><td>".$row["Email"]."</td><td>".$row["No_of_People"]."</td><td>".$row["Booking"]."</td></tr>";
		}
	}
	else{
		echo "0 results";
	}
	echo "</table>";
	
	$conn->close();
	?>
	
<br>



<!--Footer-->
<footer>
<table class="desing"  width="100%">
	<tr style="border:0px">
		<th style="font-family:Geneva"><b> Follow us on</b></th>
	</tr>
	<tr> <th><br>
    <a href="https://www.facebook.com/"><img src="Images/ICONS/FB2.png" width=50" height="40"></a>
	<a href="https://www.twitter.com/"><img src="Images/ICONS/Twitter2.png" width=50" height="40"></a>
	<a href="https://www.instagram.com/"><img src="Images/ICONS/Insta2.png" width=50" height="40"></a>
	<a href="https://www.googleplus.com/"><img src="Images/ICONS/G+2.png" width=50" height="40"></a>
	<br>
	<a href="reviews.html"><img src="Images/ICONS/rw2.png" width="200" height="50"></a>
<br><center><b style="font-family:Geneva"> Terms and conditions</center></b>
<br><p style="font-size:13px; font-family:Arial;">The following are terms of a legal agreement butween you and the Sri Lanka Tourism Promotion Bunau. By accessing, browsing, or using this Website, you acknowledge that you have read, understood, and agee to be bound by these terms and to comply with all applicable laws and regulationsf you do not agree to these terms, please do not use this Website. SLTPB may, without notice to you, at any time rvse these Tens of Use and any other information contained in this Website by updating this posting SLUPB may also make improvemets or changes in the products, survices, or programs described in this sile at any time without notice.</p><br><center><b>@ 2020 ALL Rights Rerved by "Travel Net"</a></b></center> 
	
</th>
</table>
</footer>
</body>
</html>



