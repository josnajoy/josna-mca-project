<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>View Notification</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Emphasize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- // custom-theme -->
<!--css links-->
<link href="css/bootstrap4.css" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-->
<link href="css/font-awesome4.css" rel="stylesheet"><!--font-awesome-->
<link href="css/style4.css" rel="stylesheet" type="text/css" media="all" /><!--stylesheet-->
<!--//css links-->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=PT+Serif:400,700" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<div class="header-nav">
			<nav class="navbar navbar-default">
			<div class="header-top">
					<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								
								<h1>
									<a class="navbar-brand"><i class="fa fa-graduation-cap" aria-hidden="true"></i>SGCET</a>
								</h1>
					</div>
					<!-- navbar-header -->
					<div class="contact-bnr-w3-agile">
								<ul>
									<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
									<li><i class="fa fa-phone" aria-hidden="true"></i>+1 (100)222-0-33</li>	
								</ul>
							</div>
							
							</div>
					<div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="staffhome.html" >Home</a></li>
							<li><a href="staffprofile.php" >Profile</a></li>
							<li><a href="viewbusroute.php" >Bus Route</a></li>
							<li><a href="fee.php" >Payment</a></li>
							<li><a href="cancellationrequest.php" >Bus Cancel</a></li>
							<li><a href="viewnotification.php" >Notification</a></li>
							<li><a href="about.html">About</a></li>
							
							<li><a href="contact.html">Contact</a></li>
							<li><a href="index.html" >Logout</a></li>
						</ul>

					</div>
					<div class="clearfix"> </div>	
				</nav>
							<div class="clearfix"> </div>
		</div>

<?php

include("connection.php");
$s=mysqli_query($con,"select * from notification");
echo "<table border ='0.2' cellspacing=3 width=70% height=70% align='center' style=margin:80px; bgcolor=#f7aa77>
<tr><colspan=12><font size=10 color=black >Notification</font></th></tr>
<tr><th >Id</th><th>Notification</th><th>curdate</th></tr>";
  while($row=mysqli_fetch_array($s))
  {
	  $uid=$row[0];
	 
  echo "<tr><td>".$row["uid"]."</td><td>".$row["notification"]."</td><td>".$row["curdate"]."</td>
  
 
   </tr>";	 
   }
 echo"</table>"
  ?>


  
  
</body>
</html>