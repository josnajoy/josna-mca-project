
 <?php
						 session_start();
						 $con=mysqli_connect("localhost","josna","josna123","project");
  
                         $username=$_SESSION['username'];
$con=mysqli_connect("localhost","josna","josna123","project");
				$n1=$_POST["fname"];
				$n2=$_POST["lname"];
				
				$n3=$_POST["id"];
				$n4=$_POST["gender"];
				$n5=$_POST["birthdate"];
				$n6=$_POST["add"];
				$n7=$_POST["phoneno"];
				$n8=$_POST["branch"];
				$n9=$_POST["semester"];
				$n10=$_POST["year"];
				$n11=$_POST["route"];
				$n12=$_POST["stoppage"];
				$n13=$_POST["email"];
				$n14=$_POST["password"];
				$n15=$_POST["confirmpassword"];
				

				$sql9="update studreg set fname='$n1',lname='$n2',id='$n3',gender='$n4',birthdate='$n5',add='$n6,phoneno='$n7',branch='$n8',semester='$n9',year='$n10',route='$n11',stoppage='$n12',email='$n13',password='$n14',confirmpassword='$n15'";
				$sql20="update stydreg set password='$n14' where username='$username'";
				$result=mysqli_query($con,$sql9);
				$result1=mysqli_query($con,$sql20);
		
		?>	
			 <script>
        window.alert('successful');
	
		</script>