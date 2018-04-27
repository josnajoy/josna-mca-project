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
<title>Student Profile</title>
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
	<h1>My Profile</h1>
	<?php
	include("connection.php");
	$uid=$_SESSION['uid'];
	$sql="select fname,lname,id,gender,dob,address,phoneno,branch,semester,year,route,stoppage,email,password,confirmpassword from studreg where uid=$uid;";
	$r=mysqli_query($con,$sql);
	$result=mysqli_fetch_assoc($r);
	?>
<div class="w3l-main">
	<div class="w3l-from">
		<form method="post">	
			<div class="w3l-user">
				<label class="head">First Name<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['fname']?>" disabled name="fname" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">Last Name<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['lname']?>" disabled name="lname" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">Id<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['id']?>" disabled name="id" placeholder="" required="">
			</div>
			<div class="clear"></div>
			<div class="w31-user">
				<label class="head">gender<span class="w3l-star"> * </span></label>	
					<select class="form-control" disabled name="gender" required="">
						<option><?php echo $result['gender']?></option>
					</select>
			</div>
			
			<div class="w3l-date">
					<label class="head">Birth Date<span class="w3l-star"> * </span></label>
						<div class="styled-input">
							<input class="date" id="datepicker" value="<?php echo $result['birthdate']?>" disabled name="birthdate" type="text" value="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="">
						</div>
					</div>	
			<div class="w3l-right" name="address">
					<label class="w3l-set2">Address</label>
					<textarea name="add" disabled><?php echo $result['address'] ?></textarea>
				</div>	
				<div class="w3l-user">
				<label class="head">Phone No<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['phoneno']?>" disabled name="phoneno" placeholder="" required="">
			</div>
			
			<div class="clear"></div>
			<div class="w3l-details1">
				
				
			<div class="w3l-user">
					<label class="head">Branch<span class="w3l-star"> * </span></label>
					<input type="text"  value="<?php echo $result['branch']?>" disabled name="branch" placeholder="" required="">
				</div>
			
			<div class="w3l-user">
					<label class="head">Semester<span class="w3l-star"> * </span></label>
					<input type="text"  value="<?php echo $result['semester']?>" disabled name="semester" placeholder="" required="">
				</div>
			
			<div class="w3l-user">
					<label class="head">Year<span class="w3l-star"> * </span></label>
					<input type="text"  value="<?php echo $result['year']?>" disabled name="year" placeholder="" required="">
				</div>
			
			<div class="clear"></div>
			<div class="w3l-lef1">
				
			<div class="w3l-user">
				<label class="head">Route<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['route']?>" disabled name="route" placeholder="" required="">
			</div>
			
			<div class="w3l-user">
				<label class="head">Stoppage<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['stoppage']?>" disabled name="stoppage" placeholder="" required="">
			</div>
			
				
			
			<div class="clear"></div>
			</div>	
			<div class="w3l-rem">
			
			<div class="w3l-mail">
				<label class="head">Email<span class="w3l-star"> * </span></label>
				<input type="email" value="<?php echo $result['email']?>" disabled name="email" placeholder="" required="">
			</div>
			<div class="clear"></div>
			
			<div class="w3l-user">
				<label class="head">Password<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['password']?>" disabled name="password" placeholder="" required="">
			</div>
			<div class="w3l-user">
				<label class="head">Confirm Password<span class="w3l-star"> * </span></label>
				<input type="text" value="<?php echo $result['confirmpassword']?>" disabled name="confirmpassword" placeholder="" required="">
			</div>
				
				<div class="btn">
					<input type="submit" name="submit" value="Edit"/>
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
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$id=$_POST["id"];
$gender=$_POST["gender"];
$dob=$_POST["birthdate"];
$address=$_POST["add"];
$phoneno=$_POST["phoneno"];
$branch=$_POST["branch"];
$semester=$_POST["semester"];
$year=$_POST["year"];
$route=$_POST["route"];
$stoppage=$_POST["stoppage"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirmpassword=$_POST["confirmpassword"];

//$sql="insert into studreg(fname,lname,id,gender,dob,address,phoneno,branch,semester,year,route,stoppage,email,password,confirmpassword,curdate) values ('$fname','$lname','$id','$gender','$dob','$address','$phoneno','$branch','$semester','$year','$route','$stoppage','$email','$password','$confirmpassword',NOW());";
//echo $sql;
//mysqli_query($con,$sql);
//$_SESSION['email'] = $_POST['email']; 
$URL="http://localhost/collegetransportation/editstudprofile1.php";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';


header('Location: http://www.google.com/');
exit;
}
?> 
