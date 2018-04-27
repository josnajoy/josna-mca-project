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
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="w3l-user">
				<label class="head">Id<span class="w3l-star"> * </span></label>
				<input type="text" name="id"  placeholder="" required="">
			</div>
			<?php 
                if(isset($validation['id'])) { 
                    echo $validation['id'];
                }
                ?>
	<div class="w3l-user">
				<label class="head">Uid<span class="w3l-star"> * </span></label>
				<input type="text"  name="uid"  placeholder="" required="">
			</div>
			<?php 
                if(isset($validation['uid'])) { 
                    echo $validation['uid'];
                }
                ?>
			<div class="w3l-user">
				<label class="head">First Name<span class="w3l-star"> * </span></label>
				<input type="text"  name="fname" placeholder="" required="">
			</div>
			<?php 
                if(isset($validation['fname'])) { 
                    echo $validation['fname'];
                }
                ?>
			<div class="w3l-user">
				<label class="head">Last Name<span class="w3l-star"> * </span></label>
				<input type="text"  name="lname" placeholder="" required="">
			</div>
			
			<?php 
                if(isset($validation['lname'])) { 
                    echo $validation['lname'];
                }
                ?>
			<div class="clear"></div>
			<div class="w31-user">
				<label class="head">Gender<span class="w3l-star"> * </span></label>	
					<select class="form-control" name="gender" required="">
						<option>Select</option>
						<option>Female</option>
						<option>Male</option>
					</select>
			</div>
			<?php 
                if(isset($validation['gender'])) { 
                    echo $validation['gender'];
                }
                ?>
			<div class="w31-user">
				<label class="head">Category<span class="w3l-star"> * </span></label>	
					<select class="form-control" name="category" required="">
					
						<option>Select</option>
						<option>Student</option>
						<option>Staff</option>
					</select>
			</div>
			<?php 
                if(isset($validation['category'])) { 
                    echo $validation['category'];
                }
                ?>
			
			<div class="w3l-user">
					<label class="head">Branch<span class="w3l-star"> * </span></label>
					<input type="text" name="branch" placeholder="" required="">
				</div>
			<?php 
                if(isset($validation['branch'])) { 
                    echo $validation['branch'];
                }
                ?>
			<div class="w3l-right" name="address">
					<label class="w3l-set2">Address</label>
					<textarea name="add"></textarea>
				</div>	
				<?php 
                if(isset($validation['address'])) { 
                    echo $validation['address'];
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
			
			<div class="clear"></div>
			<div class="w3l-lef1">
				
			<div class="clear"></div>
			<div class="w31-user">
				<label class="head">Route<span class="w3l-star"> * </span></label>	
					<select class="form-control" name="route" required="">
						<option>--Select--</option>
						<option>M c Road</option>
						<option>t nagar</option>
						<option>gandhinagar</option>
						<option>kottayam</option>
						<option>kidangoor</option>
						<option>koothattkulam</option>
						<option>ll hospital</option>
						<option>T B Junction</option>
					</select>
			</div>
			<?php 
                if(isset($validation['route'])) { 
                    echo $validation['route'];
                }
                ?>
			<div class="clear"></div>
			<div class="w31-user">
				<label class="head">Stoppage<span class="w3l-star"> * </span></label>	
					<select class="form-control" name="stoppage" required="">
						<option>--Select--</option>
						<option>palai</option>
						<option>vidya coloney</option>
						<option>ll hospital jun</option>
						<option>high court</option>
						<option>kidangoor jun</option>
						<option>t nagar coloney</option>
						<option>koothattkulam church road</option>
						<option>T B Junction</option>
					</select>
			</div>
				
			<?php 
                if(isset($validation['stoppage'])) { 
                    echo $validation['stoppage'];
                }
                ?>
			<div class="clear"></div>
			</div>	
			<div class="w3l-rem">
			
			<div class="w3l-mail">
				<label class="head">Email<span class="w3l-star"> * </span></label>
				<input type="email" name="email" placeholder="" required="">
			</div>
			<?php 
                if(isset($validation['email'])) { 
                    echo $validation['email'];
                }
                if (isset($validation['existing-user'])) {
                    echo $validation['existing-user'];
                }
            ?>
			<div class="clear"></div>
			<div class="w3l-right" name="reason">
					<label class="w3l-set2">Reason</label>
					<textarea name="reason"></textarea>
				</div>	
					<?php 
                if(isset($validation['reason'])) { 
                    echo $validation['reason'];
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
$id=$_POST["id"];
$uid=$_POST["uid"];
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
$reason=$_POST["reason"];

//$sql= "insert into cancellationrequest(reason,curdate) values ('$reason',NOW());";
$sql="insert into cancellationrequest(id,uid,fname,lname,gender,category,branch,address,phoneno,route,stoppage,email,curdate) values ('$id','$uid','$fname','$lname','$gender','$category','$branch','$address','$phoneno','$route','$stoppage','$email',NOW());";
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