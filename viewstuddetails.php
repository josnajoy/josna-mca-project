<html>
<style>
body{
	background-image:url("images/b1.png");
	background-size:1500px,1500px;
}
</style>
</html>

<?php

include("connection.php");
$s=mysqli_query($con,"select * from studreg");
echo "<table border ='0.2' cellspacing=1 width=90% height=90% align='center' style=margin:90px;>
<tr><colspan=12><font size=10 color=black >Student Details</font></th></tr>
<tr><th>Id</th><th>First Name</th><th>Last Name</th><th>Id</th><th>Gender</th><th>Dob</th><th>Address</th><th>Phone No</th><th>
Branch</th><th>Semester</th><th>Year</th><th>Route</th><th>Stoppage</th></tr>";
  while($row=mysqli_fetch_array($s))
  {
	  $uid=$row[0];
	 /*INSERT INTO `studreg`(`fname`, `lname`, `id`, `gender`, `dob`, `address`, `phoneno`, `branch`, `semester`,
	 `year`, `route`, `stoppage`) VALUES ([value-1],[value-2],[value-3],
	 [value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])*/
  echo "<tr><td>".$row["uid"]."</td><td align='center'>".$row["fname"]."</td><td align='center'>".$row["lname"]."</td><td align='center'>".$row["id"]
  ."</td><td align='center'>".$row["gender"]."</td><td align='center'>".$row["dob"]."</td><td align='center'>".$row["address"]."</td><td align='center'>".$row["phoneno"]."</td><td align='center'>".$row["branch"].
  "</td><td align='center'>".$row["semester"]."</td><td align='center'>".$row["year"]."</td><td align='center'>".$row["route"]."</td><td align='center'>".$row["stoppage"]."</td>
  <td align='center'>
  <form method='post' action='deletestud.php'>
 <input type='hidden' name='h1' value='$uid'><input type='submit' name='delete' value='Delete'>
 </form>
 </td>
 </tr>";	 
   }
 echo"</table>"
  ?>
  </body>
  </html>