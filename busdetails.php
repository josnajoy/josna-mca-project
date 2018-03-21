<?php
session_start();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Add Bus Details</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Design Lab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap5.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome5.css" rel="stylesheet"> 
<link href="css/style5.css" rel="stylesheet" type="text/css" media="all" />
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- header -->
		
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand"> SG<span>CE</span>T</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="adminhome.html" class="menu__link">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="viewstuddetails.php">View Student Details</a></li>
									<li><a href="viewstaffdetails.php">View Staff Details</a></li>
									<li><a href="viewdriverdetails.php">View Driver Details</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Add Bus Route <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="adminroute.php">View Bus Route</a></li>
									
									
								</ul>
							</li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Bus Details <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="busdetails.php">Add Bus Details</a></li>
									<li><a href="viewbusdetails.php">View Bus Details</a></li>
									
								</ul>
							</li>
							
							
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Payment <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Paid Fee</a></li>
									<li><a href="typography.html">Pending Fee</a></li>
									
								</ul>
							</li>
														
							<li><a href="addadminnotif.php">Notification</a></li>
							
							<li><a href="contact.html">Logout</a></li>
							
							
						</ul>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
	
<!-- //header -->
<!-- banner -->
	<div class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					
					
					<li><h1 class="page-title">BUS DETAILS</h1>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="page-header">
							 
        <div class="container">			
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-section">
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		<div class="main-agileits">
<!--form-stars-here-->
		<div class="book-form">
			
			  <form method="post">	
			<div class="w3l-user">
				<label class="head">Bus No<span class="w3l-star"> * </span></label>
				<input type="text" name="busno" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">Vehicle Registration No<span class="w3l-star"> * </span></label>
				<input type="text" name="vehicleregno" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">Bus Name<span class="w3l-star"> * </span></label>
				<input type="text" name="busname" placeholder="" required="">
			</div>
			<div class="clear"></div>
			
			
				<div class="w3l-user">
				<label class="head">Bus Type<span class="w3l-star"> * </span></label>
				<input type="text" name="bustype" placeholder="" required="">
			</div>
			
			<div class="clear"></div>
			<div class="w3l-details1">
				
				
			<div class="w3l-user">
					<label class="head">Seats Available<span class="w3l-star"> * </span></label>
					<input type="text"  name="seatsavailable" placeholder="" required="">
				</div>
			
			<div class="w3l-user">
					<label class="head">Policy No<span class="w3l-star"> * </span></label>
					<input type="text"  name="policyno" placeholder="" required="">
				</div>
			
			<div class="w3l-user">
					<label class="head">FC No<span class="w3l-star"> * </span></label>
					<input type="text"  name="fcno" placeholder="" required="">
				</div>
			
			<div class="clear"></div>
			<div class="w3l-lef1">
				
			<div class="w3l-user">
					<label class="head">FC Date<span class="w3l-star"> * </span></label>
						<div class="styled-input">
							<input class="date" id="datepicker" name="fcdate" type="text" value="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="">
						</div>
					</div>	
			
			<div class="w3l-user">
					<label class="head">FC Due Date<span class="w3l-star"> * </span></label>
						<div class="styled-input">
							<input class="date" id="datepicker" name="fcduedate" type="text" value="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="">
						</div>
					</div>	
			
			<div class="w3l-user">
					<label class="head">Insurance Date<span class="w3l-star"> * </span></label>
						<div class="styled-input">
							<input class="date" id="datepicker" name="insurancedate" type="text" value="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="">
						</div>
					</div>	
			
			
			<div class="clear"></div>
			</div>	
			<div class="w3l-rem">
			
			
			<div class="clear"></div>
			
			
				
				<div class="btn">
					<input type="submit" name="submit" value="Submit"/>
				</div>
			</div>
			<div class="clear"></div>
		</form>
		</div>

<!--//form-ends-here-->
<div class="clear"></div>
</div>

	</div>	
	<!-- //banner --> 
<!--//Header-->
<!-- /services --> 

		
		<div class="col-md-4 w3-services-left">
		<div class="w3-services-right w3-services-align">
		     <div>			     <i class="fa fa-user" aria-hidden="true"></i>
		
		     </div>
			 
			 <div class="clearfix"></div>
			 </div>
			 <div class="w3-services-right w3-services-align">
			   <div>
				<i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
		     
		     </div>
			 
			 <div class="clearfix"></div>
			 </div>
			  <div class="w3-services-right w3-services-align">
			    <div>
			     <i class="fa fa-user" aria-hidden="true"></i>
		
		     </div>
			 
			 <div class="clearfix"></div>
			 </div>
			 
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- //services --> 


	

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min5.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top5.js"></script>
<script type="text/javascript" src="js/easing5.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
		<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
	<!-- clients js file-->
	<script src="js/jquery.wmuSlider5.js"></script> 
		<script>
			$('.example1').wmuSlider();         
		</script> 
<!-- //clients js file -->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<div class="arr-w3ls">
		<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min5.js"></script>




 <?php
 if(isset($_POST["submit"]))
{
$con=mysqli_connect("localhost","josna","josna123","project");
$busno=$_POST["busno"];
$vehicleregno=$_POST["vehicleregno"];
$busname=$_POST["busname"];
$bustype=$_POST["bustype"];
$seatsavailable=$_POST["seatsavailable"];
$policyno=$_POST["policyno"];
$fcno=$_POST["fcno"];
$fcdate=$_POST["fcdate"];
$fcduedate=$_POST["fcduedate"];
$insurancedate=$_POST["insurancedate"];
				
$sql="insert into busdetails(busno,vehicleregno,busname,bustype,seatsavailable,policyno,fcno,fcdate,fcduedate,insurancedate)values('$busno','$vehicleregno','$busname','$bustype','$seatsavailable','$policyno','$fcno','$fcdate','$fcduedate','$insurancedate')";
//echo $sql;
//mysqli_query($con,$sql);
//$_SESSION['email'] = $_POST['email']; 
$URL="http://localhost/collegetransportation/adminhome.html";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';


header('Location: http://www.google.com/');
exit;
}		
?>		
	
</body>
</html>