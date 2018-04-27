

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
$s=mysqli_query($con,"select * from route");
echo "<table border ='0.3' cellspacing=3 width=90% height=90% align='center' style=margin:90px;>
<tr><colspan=12><font size=10 color=black >Bus Routes</font></th></tr>
<tr><th>Route Id</th><th>Bus No</th><th>Route</th><th>PickUp Time</th><th>PickOut Time</th><th>Fee</th><th>Driver</th></tr>";
  while($row=mysqli_fetch_array($s))
  {
	  $rid=$row[0];
	 /*INSERT INTO `addemp`(`empid`, `name`, `sex`, `designation`, `mob`, `dob`, `doj`, `type`, `department`, `email`,
	 `basicpay`, `hname`, `hn`, `stname`, `dist`, `strname`, `pdist`, `stat`, `statn`, `pinc`, `pinco`) VALUES ([value-1],[value-2],[value-3],
	 [value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],
	 [value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21])*/
  echo "<tr><td align='center'>".$row["rid"]."</td><td align='center'>".$row["busno"]."</td><td align='center'>".$row["route"]."</td><td align='center'>".$row["pickuptime"]
  ."</td><td align='center'>".$row["pickouttime"]."</td><td align='center'>".$row["fee"]."</td><td align='center'>".$row["driver"]."</td>
  
 
   </tr>";	 
   }
 echo"</table>"
  ?>
  </body>
  </html>