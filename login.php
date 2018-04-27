<?php
session_start();
$con=mysqli_connect("localhost","josna","josna123","project");
$user=$_POST["name"];
$password=$_POST["password"];
$utype=$_POST["radio"];
echo $utype;
if($utype=="student")
{
$sq="select * from studreg where email='$user' and password='$password' ";
}
elseif($utype=="staff")
{
$sq="select * from staffreg where email='$user' and password='$password' ";
}
elseif($utype=="driver")
{
	$sq="select * from adminadddriver where email='$user' and password='$password' ";
}
elseif($utype=="admin")
{
	$sq="select * from adminlogin where username='$user' and password='$password' ";
}
echo $sq;
$res=mysqli_query($con,$sq);
if(mysqli_num_rows($res)>0){
	$row=mysqli_fetch_assoc($res);
	$uid=$row["uid"];
	$_SESSION['uid']=$uid;
	$type=$row["usertype"];
echo $type;

if($row["usertype"]==1){
	$id= $_POST["email"];
$_SESSION['email'] = $id;
header('location:studhome.html');
}
elseif($row["usertype"]==2){
$_SESSION['email'] = $_POST['email'];
header('location:staffhome.html');
}
elseif($row["usertype"]==3){
$_SESSION['email'] = $_POST['email'];
header('location:driverhome.html');
}
elseif($row["usertype"]==4){
$_SESSION['username'] = $_POST['username'];
header('location:adminhome.html');
}	

else
{
	
echo "<script>var confirm = confirm(\"Invalid user!\");
          if(confirm){ 
              window.history.back();
  document.getElementsByName('password').value='';
           }
   else{
   window.history.back();
   document.getElementsByName('password').value='';
   }
          </script>";
}
}

?>








