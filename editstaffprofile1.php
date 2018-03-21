<?php
session_start();
?>

<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Staff Edit Profile</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sports Camp Registration Form a Flat Responsive Widget,Login form widgets, Sign up Web 	forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/jquery-ui2.css"/>
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-css-->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

<!-- //css files -->
</head>
<body>
	<h1>Edit Profile</h1>
	<?php
	include("connection.php");
	$uid=$_SESSION['uid'];
	$sql="select fname,lname,staffid,gender,department,address,phoneno,joindate,route,stoppage,email,password,confirmpassword from staffreg where uid=$uid;";
	$r=mysqli_query($con,$sql);
	$result=mysqli_fetch_assoc($r);
	?>

<div class="w3l-main">
	<div class="w3l-from">
		<form method="post">	
			<div class="w3l-user">
				<label class="head">First Name<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['fname']?>" name="fname"  placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">Last Name<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['lname']?>" name="lname"  placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">Id<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['id']?>" name="id"  placeholder="" required="">
			</div>
			
			<div class="clear"></div>
			<div class="w31-user">
				<label class="head">gender<span class="w3l-star"> * </span></label>	
					<select class="form-control" value="<?php echo $result['gender']?>"  name="gender" required="">
						<option>Gender</option>
						<option>Male</option>
						<option>Female</option>
					</select>
			</div>
			
			<div class="w3l-user">
					<label class="head">Branch<span class="w3l-star"> * </span></label>
					<input type="text"  value="<?php echo $result['branch']?>" name="branch" placeholder="" required="">
				</div>
			
			<div class="w3l-right" name="address">
					<label class="w3l-set2">Address</label>
					<textarea  name="add"><?php echo $result['address']?></textarea>
				</div>	
				
				<div class="w3l-user">
				<label class="head">Phone No<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['phoneno']?>" name="phoneno" placeholder="" required="">
			</div>
			<div class="w3l-date">
					<label class="head">Join Date<span class="w3l-star"> * </span></label>
						<div class="styled-input">
							<input class="date" id="datepicker" value="<?php echo $result['joindate']?>"  name="joindate" type="text" value="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="">
						</div>
					</div>	
			<div class="clear"></div>
			<div class="w3l-details1">
				
				
			
			
			<div class="clear"></div>
			<div class="w3l-lef1">
				
			<div class="w3l-user">
				<label class="head">Route<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['route']?>" name="route" placeholder="" required="">
			</div>
			
			<div class="w3l-user">
				<label class="head">Stoppage<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['stoppage']?>"name="stoppage" placeholder="" required="">
			</div>
			
				
			
			<div class="clear"></div>
			</div>	
			<div class="w3l-rem">
			
			<div class="w3l-mail">
				<label class="head">Email<span class="w3l-star"> * </span></label>
				<input type="email" value="<?php echo $result['email']?>" name="email" placeholder="" required="">
			</div>
			<div class="clear"></div>
			
			<div class="w3l-user">
				<label class="head">Password<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['password']?>" name="password" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">Confirm Password<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['confirmpassword']?>" name="confirmpassword" placeholder="" required="">
			</div>
				
				
				<div class="btn">
					<input type="submit" name="submit" value="Submit"/>
				</div>
			</div>
			<div class="clear"></div>
		</form>
	</div>
</div>
	
	<!-- Default-JavaScript --> <script type="text/javascript" src="js/jquery-2.1.4.min2.js"></script>

<!-- Calendar -->
<script src="js/jquery-ui2.js"></script>
	<script>
		$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
<!-- //Calendar -->


<?php
//session_start();
if(isset($_POST["submit"]))
{
$con=mysqli_connect("localhost","josna","josna123","project");
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$id=$_POST["id"];
$gender=$_POST["gender"];
$branch=$_POST["branch"];
$address=$_POST["add"];
$phoneno=$_POST["phoneno"];
$joindate=$_POST["joindate"];
$route=$_POST["route"];
$stoppage=$_POST["stoppage"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirmpassword=$_POST["confirmpassword"];
	
	$sql="update staffreg set `fname`='$fname', `lname`='$lname', `id`='$id', `gender`='$gender', `branch`='$branch', `address`='$address', `phoneno`='$phoneno', `joindate`='$joindate', `route`='$route', `stoppage`='$stoppage',`email`='$email',`password`='$password', `confirmpassword`='$confirmpassword',  `curdate`=NOW() where uid=$uid;";
	//echo $sql;
mysqli_query($con,$sql);
//$_SESSION['email'] = $_POST['email']; 
//header('location:index.html'); 
$URL="http://localhost/collegetransportation/staffhome.html";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';


header('Location: http://www.google.com/');
exit;
}
?> 



</body>
</html>

