
<?php include_once 'php/config.php'; ?>

<?php 
	/*	$email = $_POST['email'];
		$psw = $_POST['psw'];
		
	if (isset($_POST['submit']{ //chek login & chek
		
		
	
	
	
 Has Error Line 15 but can not find :(
		
		$RunSQL = "select * from tuser where Temail ='".$email."'AND TPassword='".$psw."' limit 1";
    
    $result=mysql_query($RunSQL);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit(); 
    } */

 ?>


<!DOCTYPE>
<html>
<header id="main-header">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/login.css">
<script src="js/login.js"></script>
			
			<title>User Login</title>
			
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
	<li class="navi"><a href="Login.php">login</a></li>
</ul>
			
			
			</div>
</header>



<body>

<br><br>
<div class="form-bg">
    <form class="form-box" method="POST" action="login.php">
	
        <h2 class="form-title">User Login</h2>
        
        <input class="text-fild" type="email" placeholder="Enter Email" name="email" required>

        <input class="text-fild" type="password"  placeholder="Enter Password" name="psw" required>
        <a class="FPassword" href="#ForgotPassword">Forgot Password</a>

        <br><br> 
			
		<br><br> <br>
        <center>
            <button class="login-but" type="submit" name="submit" value="Submit">Login</button><br><br>

            <label>Create Account <a class="Signin" href="SignIn.html">Sign Up</a></label><br><br>
        
			<label class="sub-login1">Are You Agent <a class="Signin" href="Agent Login.html"> Login</a></label>
			<label >Are You Guide <a class="Signin" href="Guide Login.html"> Login</a></label>
			<br><br>
		</center>

    </form>
</div>

<br><br>
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