<?php
    session_start();
	$con=mysqli_connect("localhost","josna","josna123","project");
	$query="INSERT INTO `payment`(`pid`, `rid`, `uid`, `amount`, `curdate`) VALUES ('$pid','$rid`','$uid','$amount',NOW());";
	$s="SELECT MAX(pid) AS maxi FROM payment";
$r=mysqli_query($con,$s);
$re = mysqli_fetch_assoc($r);
$inv=$re['maxi'];
$j=1;
$pid=$inv+$j;
echo $pid;
echo "<br/>";
$rid=$_SESSION["rid"];
echo $rid;
echo "<br/>";
$uid=$_SESSION["uid"];
echo $uid;
echo "<br/>";
$amount=$_SESSION["amount"];
echo $amount;
echo "<br/>";