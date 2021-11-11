<!DOCTYPE>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSS/styleSheet2.css"/>
<link rel="stylesheet" type="text/css" href="CSS/styleSheet1.css"/>
<script src="js/myScript.js"></script>

<title>Payment Cards</title>
	<style>
	#main-header{
	background-image:url("Images/hd.jpg");
	width:100%;
	top:0;
	left:0;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	}
	</style>

</head>
<body>
  <div style="background-image:url('Images/q.jpg');">
	<header id="main-header">
			<div class="container">
<!--logo-->
	<center>
		<img src="Images/Logo.png" class="logo"> 
		<h4 class="h"><b>The Online Tour Guide</b></h4>
	</center>
	
<!--Navigation bar-->	
	<ul class="navi">
		<li><a href="Home.html">Home</a></li>
		<li><a href="#">Packages and Bookings</a></li>
		<li><a href="#">Explore</a></li>
		<li><a href="#">Contact Us</a></li>
		<li><a href="register.html">Login</a></li>
	</ul>
	
			</div>
	</header>


		<div class="payop">
		<center>
		<form action="Paycard.php" method="POST" onsubmit="return myFunction()">
		
		<table  bgcolor="#11526A" width="100%">
		<tr style="color:white;">
		<th style="font-family:'Lucida Casual', 'Comic Sans MS'Geneva"><h1>Enter Card Details</h1></th></tr>
		</table>
		<center>
		<img src="Images/ICONS/5.png" width="8%" height=""><img src="Images/ICONS/4.png" width="6%" height=""></Center><br>
		Card holders name<br>
		<input type="text" name="Oname" maxlength="50" size="45%" placeholder="Card holder name" style="margin-left: 10px;" required><br><br>
		
		Enter card number<br>
		<input type="text" name="CardNumber" maxlength="24" size="45%" style="margin-left: 10px;" placeholder="1111-2222-3333-4444 (no spaces)" pattern="[0-9]{16}"> 
		<br><br>
		
		CardType<br>
		<input type="radio"  name="cardT" value="Debitcard">Debit Card<br>
		<input type="radio"  name="cardT" value="creditcard">Credit Card<br>
		<br>
		
		Expiry<br>
		<input type="month" name="date"  name="trip-start" value="2020-01" min="1950-01-01" max="2030-12-31" required>
		<br><br>
		
		CVV<br>
		<input type="text2" name="cvv"  maxlength="3" placeholder="352" pattern="[0-9]{3}" required>
		<br><br>
		
		Email Address<br>
		<input type="email" name="myEmail" name="email" size="45%" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br>	
		<br><br>
		

				
		Confirm check
		<input type="checkbox" id="box" name="box" required onclick="enableButton()"><br><br>
		
		<input class="B2"type="submit"  id="btn2" name="btn2" value="Submit" disabled>
		</center>
		</form>
		</div>


<footer>
<table class="desing"  width="100%">
	<tr style="border:0px">
		<th style="font-family:Geneva"><h3 style="font-family:sans-serif; font-size:20px;">Follow us on</th></h3>
	</tr>
	<tr> <th>
    <a href="https://www.facebook.com/"><img src="Images/ICONS/FB2.png" width=50" height="50"></a>
	<a href="https://www.twitter.com/"><img src="Images/ICONS/Twitter2.png" width=50" height="50"></a>
	<a href="https://www.instagram.com/"><img src="Images/ICONS/Insta2.png" width=50" height="50"></a>
	<a href="https://www.googleplus.com/"><img src="Images/ICONS/G+2.png" width=50" height="50"></a>
	<br>
	<a href="reviews.html"><img src="Images/ICONS/rw2.png" width="170" height="60"></a>
<br><center><h3 style="font-family:sans-serif"> Terms and conditions</center></h3>
<p style="font-size:13px; font-family:Arial;">The following are terms of a legal agreement butween you and the Sri Lanka Tourism Promotion Bunau. By accessing, browsing, or using this Website, you acknowledge that you have read, understood, and agee to be bound by these terms and to comply with all applicable laws and regulationsf you do not agree to these terms, please do not use this Website. SLTPB may, without notice to you, at any time rvse these Tens of Use and any other information contained in this Website by updating this posting SLUPB may also make improvemets or changes in the products, survices, or programs described in this sile at any time without notice.</p>
<center><h4 style="font-family:sans-serif">@ 2020 ALL Rights Rerved by "Travel Net"</a></h4></center> 
	
</th>
</table>
</footer>
</body>
</html>