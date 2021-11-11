<?php
	include_once 'config3.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/stylesheet4.css">
<link rel="stylesheet" href="css/styleSheet5.css">

<style>
body {
  background-image: url('images/reserve your hotel.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>

<style>

	style="float: left; margin-right: 10px; margin-bottom:5px;
</style> 

<style>
.button {
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  width:100px;
  heigh:100px;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #5F9EA0;
}

.button1:hover {
  background-color: #5F9EA0;
  color: white;
}

</style>


</head>
<body>


<center>
	<img src="Images/Logo.png" width="20%"> 
	<h3 id="b"><b>The Online Tour Guide</b></h3>
</center>

<!--Navigation bar-->	
<ul class="navi">
	<li class="navi"><a href="Home.html">Home</a></li>
	<li class="navi"><a href="Travel Packages.html">Packages and Bookings</a></li>
	<li class="navi"><a href="Explore.html">Explore</a></li>
	<li class="navi"><a href="contact us.html">Contact Us</a></li>
	<li class="navi"><a href="Login.html">Login</a></li>
</ul>


<div class="container">
<img src="images/Centara-Hotels-and-Resorts.jpg">
	<div class="text">
		Display booking details
	</div>
</div>


<br><br>
<button><a href = addDetails.html> add bookig details </a></button> <br>




<table class="desing" width="100%" heigh="5%">
<tr>
	<th class="gp"> Booking details </font> </th>
</tr>
</table>

<center>
<div id="tbl">
<table border="1px" width="100%" padding="5px" style="border-bottom-style:groove; border-color:white; background-color:#F0FFFF">
	<tr>
		<th> Hotel ID </th>
		<th> Hotel name </th>
		<th> Number of rooms</th>
		<th> Number of nights </th>
		<th> Number of persons </th>
	</tr>



<?php
	
	$sql = " select * from Booking";
	$result = $conn->query($sql);
	
	if($result->num_rows>0){
		
		while($row=$result->fetch_assoc()){
			
			echo "<tr><td>".$row["Hotel_id"]."</td><td>".$row["Hotel_name"]."</td><td>".$row["No_of_rooms"]."</td><td>".$row["No_of_nights"]."</td><td>".$row["No_of_persons"]."</td></tr>";
		}
			
	}
	else{
		echo "0 results";
		
	}
	
	echo "</table>";
	$conn->close();
?>


	
	
	<!--Footer-->
<footer>
<table class="desing"  width="100%">
	<tr style="border:0px">
		<th style="font-family:Geneva"><h3> Follow us on</th></h3>
	</tr>
	<tr> <th>
    <a href="https://www.facebook.com/"><img src="Images/ICONS/FB.png" width=80" height="70"></a>
	<a href="https://www.twitter.com/"><img src="Images/ICONS/Twitter.png" width=80" height="70"></a>
	<a href="https://www.instagram.com/"><img src="Images/ICONS/Insta.png" width=80" height="70"></a>
	<a href="https://www.googleplus.com/"><img src="Images/ICONS/G+.png" width=80" height="70"></a>
	<br>
	<a href="reviews.html"><img src="Images/ICONS/rw.png" width="200" height="100"></a>
<br><br><center><h3 style="font-family:Geneva"> Terms and conditions</center></h3>
<br><p style="font-size:13px; font-family:Arial;">The following are terms of a legal agreement butween you and the Sri Lanka Tourism Promotion Bunau. By accessing, browsing, or using this Website, you acknowledge that you have read, understood, and agee to be bound by these terms and to comply with all applicable laws and regulationsf you do not agree to these terms, please do not use this Website. SLTPB may, without notice to you, at any time rvse these Tens of Use and any other information contained in this Website by updating this posting SLUPB may also make improvemets or changes in the products, survices, or programs described in this sile at any time without notice.</p><br><center><h4>@ 2020 ALL Rights Rerved by "Travel Net"</a></h4></center> 
	
</th>
</table>
</footer>


</body>
</html>