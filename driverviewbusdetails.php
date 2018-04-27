<html>
<style>
body{
	background-image:url("images/bb.jpg");
	background-size:1500px,1500px;
}
</style>
</html>


<?php

include("connection.php");
$s=mysqli_query($con,"select * from busdetails");
echo "<table border ='0.2' cellspacing=2 width=100% height=100% align='center' style=margin:100px;>
<tr><colspan=10><font size=10 color=black >Vehicle Details</font></th></tr>
<tr><th>Id</th><th align='center'>Bus No</th><th>Vehicle RegNo</th><th>Bus Type</th><th>Seats Available</th><th>Policy No</th><th>FC No</th><th>
FC Date</th><th>FC DueDate</th><th>Insurance Date</th></tr>";
  while($row=mysqli_fetch_array($s))
  {
	  $uid=$row[0];
	 
  echo "<tr><td align='center'>".$row["uid"]."</td><td align='center'>".$row["busno"]."</td><td align='center'>".$row["vehicleregno"]."</td><td align='center'>".$row["bustype"]
  ."</td><td align='center'>".$row["seatsavailable"]."</td><td align='center'>".$row["policyno"]."</td><td align='center'>".$row["fcno"]."</td><td align='center'>".$row["fcdate"]."</td><td align='center'>".$row["fcduedate"].
  "</td><td align='center'>".$row["insurancedate"]."</td>
  
  
 </tr>";	 
   }
 echo"</table>"
  ?>
 