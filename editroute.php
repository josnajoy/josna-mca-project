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
<title>Admin Edit Route</title>
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


<?php
	include("connection.php");
	$id=$_GET['r_id'];
	$sql="select * from route where rid='$id';";
	$r=mysqli_query($con,$sql);
	$result=mysqli_fetch_assoc($r);
	?>
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
					<h1><a class="navbar-brand" href="index.html"> SG<span>CE</span>T</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="index.html" class="menu__link">Home</a></li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Profile<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="viewstuddetails.php">Student</a></li>
									<li><a href="viewstaffdetails.php">Staff</a></li>
									<li><a href="viewdriverdetails.php">Driver</a></li>
								</ul>
							</li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Bus Route<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="adminroute.php">Add Route</a></li>
									<li><a href="viewadminroute.php">View Route</a></li>
							
								</ul>
							</li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Bus Details <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="busdetails.php">Add Bus Details</a></li>
									<li><a href="viewbusdetails.php">View Bus Details</a></li>
									
								</ul>
							</li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Payment<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="paidfee.php">Paid Fee</a></li>
									<li><a href="pendingfee.php">Pending Fee</a></li>
									
								</ul>
							</li>
							<li class="menu__item"><a href="viewmessage.php" class="menu__link">Message</a></li>
							<li class="menu__item"><a href="viewcancelrequest.php" class="menu__link">Bus Cancel</a></li>
							<li class="menu__item"><a href="addadminnotif.php" class="menu__link">Notification</a></li>
							<li class="menu__item"><a href="index.html" class="menu__link">Logout</a></li>
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
					
					
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title">Bus Route</h1>
                        
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
	
			   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			   
			<div class="w3ls-field">
					<label class="head">Route Id<span> * </span></label>
						<input type="text" value="<?php echo $result['rid']?>" name="rid" placeholder="" required="">
					</div>
					<br></br>
			   					<div class="w3ls-field">
					<label class="head">Bus No<span> * </span></label>
						<input type="text" value="<?php echo $result['busno']?>" name="busno" placeholder="" required="">
					</div>
					<br></br>
					<div class="w3ls-field">
				<label class="head">Route<span> * </span></label>
				<input type="text" value="<?php echo $result['route']?>" name="route" placeholder="" required=""><br></br>
			</div>
			<br></br>
					<div class="w3ls-field">
					<label class="head">PickUp Time<span class="w3l-star"> * </span></label>
						<input type="text" value="<?php echo $result['pickuptime']?>" name="pickuptime" placeholder="" required=""><br></br>
					</div>
					<br></br>
					<div class="w3ls-field">
					<label class="head">PickOut Time<span class="w3l-star"> * </span></label>
						<input type="text" value="<?php echo $result['pickouttime']?>" name="pickouttime" placeholder="" required=""><br></br>
					</div>
					<br></br>
					<div class="w3ls-field">
					<label class="head">Fee<span class="w3l-star"> * </span></label>
						<input type="text" value="<?php echo $result['fee']?>" name="fee" placeholder="" required=""><br></br>
					</div>
					<br></br>
					<div class="w3ls-field">
					<label class="head">Driver<span class="w3l-star"> * </span></label>
						<input type="text" value="<?php echo $result['driver']?>" name="fee" placeholder="" required=""><br></br>
					</div>
					<br></br>
					
					
					<div class="w3ls-field">
						  <input type="submit" value="Submit" name="submit">
					</div>
					
			<div class="clearfix"> </div>
				</form>
			</div>

<!--//form-ends-here-->
<div class="clear"></div>
</div>

	</div>	
	<!-- //banner --> 
<!--//Header-->
<!-- /services --> 
<div class="services" id="services">
	<div class="container">
		<div class="w3-heading-all">
		<h3>Services</h3>
	   </div>
		
		<div class="col-md-4 w3-services-right">
		<div class="w3-services-right w3-services-align">
		      <div class="col-md-3 w3-services-right1 services-icons">
					<i class="fa fa-home" aria-hidden="true"></i>
		     </div>
			 <div class="col-md-9 w3-services-right2">
					<h3>Interior looks</h3>
		
		     </div>
			 <div class="clearfix"></div>
			 </div>
			 <div class="w3-services-right w3-services-align">
			 		      <div class="col-md-3 w3-services-right1 services-icons">
					 <i class="fa fa-table" aria-hidden="true"></i>
		     </div>
			 <div class="col-md-9 w3-services-right2">
			 <h3>Design looks</h3>
		     </div>
			 <div class="clearfix"></div>
			 </div>
			 			 <div class="w3-services-right w3-services-align">
			 		       <div class="col-md-3 w3-services-right1 services-icons">
					<i class="fa fa-jpy" aria-hidden="true"></i>
		     </div>
			 <div class="col-md-9 w3-services-right2">
		             <h3>Design Experts</h3>
		     </div>
			 <div class="clearfix"></div>
			  </div>
		</div>
		<div class="col-md-4 w3-services-middle">
				<img src="images/abj.png" alt="img1">
		</div>
		<div class="col-md-4 w3-services-left">
		<div class="w3-services-right w3-services-align">
		     <div class="col-md-3 w3-services-left1 services-icons">
			     <i class="fa fa-user" aria-hidden="true"></i>
		
		     </div>
			 <div class="col-md-9 w3-services-left2">
		          <h3>Home Experts</h3>
		     </div>
			 <div class="clearfix"></div>
			 </div>
			 <div class="w3-services-right w3-services-align">
			   <div class="col-md-3 w3-services-left1 services-icons">
				<i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
		     
		     </div>
			 <div class="col-md-9 w3-services-left2">
				<h3>Happy Clients</h3>
		     </div>
			 <div class="clearfix"></div>
			 </div>
			  <div class="w3-services-right w3-services-align">
			    <div class="col-md-3 w3-services-left3 services-icons">
			     <i class="fa fa-user" aria-hidden="true"></i>
		
		     </div>
			 <div class="col-md-9 w3-services-left3 ">
		          <h3> Satisfy Design</h3>
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
$rid=$_POST["rid"];
//$rid=$_GET["r_id"];
$busno=$_POST["busno"];
$route=$_POST["route"];
$pickuptime=$_POST["pickuptime"];
$pickouttime=$_POST["pickouttime"];
$fee=$_POST["fee"];

$sql="update route set rid='$rid', busno='$busno',route='$route', pickuptime='$pickuptime' , pickouttime='$pickouttime' , fee='$fee' , curdate=NOW() where rid='$rid';";
//echo $sql;
mysqli_query($con,$sql);
//$_SESSION['email'] = $_POST['email']; 
//header('location:index.html');

$URL="http://localhost/collegetransportation/adminhome.html";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';


header('Location: http://www.google.com/');
exit;
}
?> 
	
</body>
</html>







