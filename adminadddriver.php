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
<title>Driver Registration Form</title>
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
	<h1>Driver Registration</h1>
<div class="w3l-main">
	<div class="w3l-from">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			
			<div class="w3l-user">
				<label class="head">Name<span class="w3l-star"> * </span></label>
				<input type="text" name="name" placeholder="" required="">
			</div>
			<?php 
                if(isset($validation['name'])) { 
                    echo $validation['name'];
                } 
            ?>
			<div class="w3l-user">
				<label class="head">Age<span class="w3l-star"> * </span></label>
				<input type="text" name="age" placeholder="" required="">
			</div>
			<?php 
                if(isset($validation['age'])) { 
                    echo $validation['age'];
                } 
            ?>
			<div class="clear"></div>
			<!--<div class="w31-user">
				<label class="head">Gender<span class="w3l-star"> * </span></label>	
					<select class="form-control" name="gender" required="">
						<option>--Select--</option>
						<option>Male</option>
						<option>Female</option>
						</select>
			</div>-->
			<?php 
                if(isset($validation['gender'])) { 
                    echo $validation['gender'];
                } 
            ?>
			<div class="w3l-right" name="address">
					<label class="w3l-set2">Address</label>
					<textarea name="add"></textarea>
				</div>	
				<?php 
                if(isset($validation['add'])) { 
                    echo $validation['add'];
                } 
            ?>
				<div class="w3l-user">
				<label class="head">Phone No<span class="w3l-star"> * </span></label>
				<input type="text" name="phoneno" placeholder="" required="">
			</div>
			<?php 
                if(isset($validation['phoneno'])) { 
                    echo $validation['phoneno'];
                } 
            ?>
			<div class="w3l-user">
				<label class="head">License No<span class="w3l-star"> * </span></label>
				<input type="text" name="licenseno" placeholder="" required="">
			</div>
			
			<?php 
                if(isset($validation['licenseno'])) { 
                    echo $validation['licenseno'];
                } 
            ?>
			<div class="w3l-details1">
				
				<div class="w3l-date">
					<label class="head">Join Date<span class="w3l-star"> * </span></label>
						<div class="styled-input">
							<input class="date" id="datepicker" name="joindate" type="text" value="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="">
						</div>
					</div>	
			<div class="w3l-user">
					<label class="head">Experience<span class="w3l-star"> * </span></label>
					<input type="text"  name="experience" placeholder="" required="">
				</div>
			<?php 
                if(isset($validation['experience'])) { 
                    echo $validation['experience'];
                } 
            ?>
			<div class="w3l-user">
					<label class="head">Vehicle Type<span class="w3l-star"> * </span></label>
					<input type="text"  name="vehicletype" placeholder="" required="">
				</div>
			
			<?php 
                if(isset($validation['vehicletype'])) { 
                    echo $validation['vehicletype'];
                } 
            ?>
			<div class="clear"></div>
			</div>	
			<div class="w3l-user">
					<label class="head">Vehicle No<span class="w3l-star"> * </span></label>
					<input type="text"  name="vehicleno" placeholder="" required="">
				</div>
			
			<?php 
                if(isset($validation['vehicleno'])) { 
                    echo $validation['vehicleno'];
                } 
            ?>
			<div class="w3l-user">
					<label class="head">Preferable Route<span class="w3l-star"> * </span></label>
					<input type="text"  name="preferableroute" placeholder="" required="">
				</div>
			
			<?php 
                if(isset($validation['preferableroute'])) { 
                    echo $validation['preferableroute'];
                } 
            ?>
			<div class="w3l-rem">
			
			<div class="w3l-mail">
				<label class="head">Email<span class="w3l-star"> * </span></label>
				<input type="email" name="email" placeholder="" required="">
			</div>
			<div class="clear"></div>
			<?php 
                if(isset($validation['email'])) { 
                    echo $validation['email'];
                }
                if (isset($validation['existing-user'])) {
                    echo $validation['existing-user'];
                }
            ?>
			<div class="w3l-user">
				<label class="head">Password<span class="w3l-star"> * </span></label>
				<input type="password" name="password" placeholder="" required="">
			</div>
			<?php 
                if(isset($validation['password'])) { 
                    echo $validation['password'];
                } 
            ?>
			<div class="w3l-user">
				<label class="head">Confirm Password<span class="w3l-star"> * </span></label>
				<input type="password" name="confirmpassword" placeholder="" required="">
			</div>
				<?php 
                if(isset($validation['confirmpassword'])) { 
                    echo $validation['confirmpassword'];
                } 
            ?>
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
$name=$_POST["name"];
$age=$_POST["age"];
$address=$_POST["add"];
$phoneno=$_POST["phoneno"];
$licenseno=$_POST["licenseno"];
$joindate=$_POST["joindate"];
$experience=$_POST["experience"];
$vehicletype=$_POST["vehicletype"];
$vehicleno=$_POST["vehicleno"];
$preferableroute=$_POST["preferableroute"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirmpassword=$_POST["confirmpassword"];

$sql="insert into adminadddriver(name,age,address,phoneno,licenseno,joindate,experience,vehicletype,vehicleno,preferableroute,email,password,confirmpassword,curdate) values ('$name','$age','$address','$phoneno','$licenseno','$joindate','$experience','$vehicletype','$vehicleno','$preferableroute','$email','$password','$confirmpassword',NOW());";
//echo $sql;
mysqli_query($con,$sql);
//$_SESSION['email'] = $_POST['email']; 
//header('location:index.html');
echo "Successfully registered";
$URL="http://localhost/collegetransportation/adminhome.html";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';


header('Location: http://www.google.com/');
exit;
}
?> 