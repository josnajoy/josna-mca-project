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
<title>Student Registration Form</title>
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

<script language="javascript">
function abc()
{
var a=document.form1.txtpin.value;
            var y = document.form1.txtcno.value;
			if(isNaN(y)||a.indexOf(" ")!=-1)
           {
              alert("Enter numeric value")
              return false; 
           }
if (y.charAt(0)!="9")
           {
                alert("number should start with 9 ");
                return false
           }
		   if(isNaN(y)||y.indexOf(" ")!=-1)
           {
              alert("phone number shouldbe numeric value")
              return false; 
           }
		if(document.form1.txtpwd.value!=document.form1.txtcpwd.value)
{
alert("password and confirm password are not same");
return(false);
}
i
		   }
</script>
<body>
	<h1>Student Registration</h1>
<div class="w3l-main">
	<div class="w3l-from">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="w3l-user">
				<label class="head">First Name<span class="w3l-star"> * </span></label>
				<input type="text" name="fname" placeholder="" required="">
			</div>
			<?php 
                if(isset($validation['fname'])) { 
                    echo $validation['fname'];
                }
                ?>
			<div class="w3l-user">
				<label class="head">Last Name<span class="w3l-star"> * </span></label>
				<input type="text" name="lname" placeholder="" required="">
			</div>
			<?php 
                if(isset($validation['lname'])) { 
                    echo $validation['lname'];
                }
                ?>
			<div class="w3l-user">
				<label class="head">Id<span class="w3l-star"> * </span></label>
				<input type="text" name="id" placeholder="" required="">
			</div>
			<?php 
                if(isset($validation['id'])) { 
                    echo $validation['id'];
                }
                ?>
			
				<div class="clear"></div>
			<div class="w31-user">
				<label class="head">Gender<span class="w3l-star"> * </span></label>	
					<select class="form-control" name="gender" required="">
						<option>--Select--</option>
						<option>Male</option>
						<option>Female</option>
						</select>
			</div>
			<?php 
                if(isset($validation['gender'])) { 
                    echo $validation['gender'];
                } 
            ?>

			<div class="w3l-date">
					<label class="head">Dob<span class="w3l-star"> * </span></label>
						<div class="styled-input">
						<input class="date" id="datepicker" name="birthdate" type="text" value="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="">
						</div>
					</div>	
					<?php 
                if(isset($validation['birthdate'])) { 
                    echo $validation['birthdate'];
                }
                ?>
			
			<div class="w3l-right" name="address"><br></br>
					<label class="w3l-set2">Address</label>
					<textarea name="add"></textarea>
				
					<?php 
					if(isset($_POST['add'])) 
						echo $_POST['add']; 
					?>
					</textarea>
				</div>	
				
				
				
				
				<div class="w3l-user">
				<label class="head">Phone No<span class="w3l-star"> * </span></label>
				<input type="text" name="phoneno" pattern="^\d{10}$" placeholder="" required="">
			</div>
			
			
			
			<div class="clear"></div>
			<div class="w3l-details1">
				
				
			<div class="w3l-user">
				<label class="head">Branch<span class="w3l-star"> * </span></label>
				<input type="text" name="branch" placeholder="" required="">
			</div>
			<?php 
                if(isset($validation['branch'])) { 
                    echo $validation['branch'];
                }
                ?>
			<div class="w3l-user">
				<label class="head">Semester<span class="w3l-star"> * </span></label>
				<input type="text" name="semester" placeholder="" required="">
			</div>
			<?php 
                if(isset($validation['semester'])) { 
                    echo $validation['semester'];
                }
                ?>
			<div class="w3l-user">
				<label class="head">Year<span class="w3l-star"> * </span></label>
				<input type="text" name="year" placeholder="" required="">
			</div>
			<?php 
                if(isset($validation['year'])) { 
                    echo $validation['year'];
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

$sql="insert into studreg(fname,lname,id,gender,dob,address,phoneno,branch,semester,year,route,stoppage,email,password,confirmpassword,curdate) values ('$fname','$lname','$id','$gender','$dob','$address','$phoneno','$branch','$semester','$year','$route','$stoppage','$email','$password','$confirmpassword',NOW());";
//echo $sql;
mysqli_query($con,$sql);
$_SESSION['user'] = $email; 
//header('location:index.html'); 
$URL="http://localhost/collegetransportation/index.html";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';


header('Location: http://www.google.com/');
exit;
}
?> 