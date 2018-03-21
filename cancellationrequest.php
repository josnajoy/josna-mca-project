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
<title>Bus Cancellation Form</title>
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
	<h1>Bus Cancellation Form</h1>
<div class="w3l-main">
	<div class="w3l-from">
		<form method="post">
<div class="w3l-user">
				<label class="head">Id<span class="w3l-star"> * </span></label>
				<input type="text" name="id" placeholder="" required="">
			</div>
	
			<div class="w3l-user">
				<label class="head">First Name<span class="w3l-star"> * </span></label>
				<input type="text" name="fname" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">Last Name<span class="w3l-star"> * </span></label>
				<input type="text" name="lname" placeholder="" required="">
			</div>
			
			
			<div class="clear"></div>
			<div class="w31-user">
				<label class="head">gender<span class="w3l-star"> * </span></label>	
					<select class="form-control" name="gender" required="">
						<option>Gender</option>
						<option>Male</option>
						<option>Female</option>
					</select>
			</div>
			<div class="w31-user">
				<label class="head">Category<span class="w3l-star"> * </span></label>	
					<select class="form-control" name="category" required="">
					<option>Category</option>
						<option>Student</option>
						<option>Staff</option>
						
					</select>
			</div>
			
			
			<div class="w3l-user">
					<label class="head">Branch<span class="w3l-star"> * </span></label>
					<input type="text"  name="branch" placeholder="" required="">
				</div>
			
			<div class="w3l-right" name="address">
					<label class="w3l-set2">Address</label>
					<textarea name="add"></textarea>
				</div>	
				
				<div class="w3l-user">
				<label class="head">Phone No<span class="w3l-star"> * </span></label>
				<input type="text" name="phoneno" placeholder="" required="">
			</div>
			
			
			
			<div class="clear"></div>
			<div class="w3l-lef1">
				
			<div class="w3l-user">
				<label class="head">Route<span class="w3l-star"> * </span></label>
				<input type="text" name="route" placeholder="" required="">
			</div>
			
			<div class="w3l-user">
				<label class="head">Stoppage<span class="w3l-star"> * </span></label>
				<input type="text" name="stoppage" placeholder="" required="">
			</div>
			
				
			
			<div class="clear"></div>
			</div>	
			<div class="w3l-rem">
			
			<div class="w3l-mail">
				<label class="head">Email<span class="w3l-star"> * </span></label>
				<input type="email" name="email" placeholder="" required="">
			</div>
			<div class="clear"></div>
			
					
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






</body>
</html>

<?php
if(isset($_POST["submit"]))
{
$con=mysqli_connect("localhost","josna","josna123","project");
$id=$_POST["id"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$category=$_POST["category"];
$branch=$_POST["branch"];
$address=$_POST["add"];
$phoneno=$_POST["phoneno"];
$route=$_POST["route"];
$stoppage=$_POST["stoppage"];
$email=$_POST["email"];


$sql="insert into cancellationrequest(id,fname,lname,gender,category,branch,address,phoneno,route,stoppage,email,curdate) values ('$id','$fname','$lname','$gender','$category','$branch','$address','$phoneno','$route','$stoppage','$email',NOW());";
//echo $sql;
mysqli_query($con,$sql);
//$_SESSION['email'] = $_POST['email']; 
//header('location:studhome.html'); 
$URL="http://localhost/collegetransportation/studhome.html";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';


header('Location: http://www.google.com/');
exit;
}
?> 