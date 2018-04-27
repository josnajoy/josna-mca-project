
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
$s=mysqli_query($con,"select * from staffreg");
echo "<table border ='0.2' cellspacing=3 width=90% height=90% align='center' style=margin:90px;>
<tr><colspan=12><font size=10 color=black >Staff Details</font></th></tr>
<tr><th>Id</th><th>First Name</th><th>Last Name</th><th>Id</th><th>Gender</th><th>Branch</th><th>Address</th><th>Phone No</th><th>
Join Date</th><th>Route</th><th>Stoppage</th></tr>";
  while($row=mysqli_fetch_array($s))
  {
	  $uid=$row[0];
	
  echo "<tr><td align='center'>".$row["uid"]."</td><td align='center'>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["id"]
  ."</td><td align='center'>".$row["gender"]."</td><td align='center'>".$row["branch"]."</td><td align='center'>".$row["address"]."</td><td align='center'>".$row["phoneno"]."</td><td>".$row["joindate"].
  "</td><td align='center'>".$row["route"]."</td><td align='center'>".$row["stoppage"]."</td>
  <td align='center'>
  
 <form method='post' action='deletestaff.php'>
 <input type='hidden' name='h1' value='$uid'><input type='submit' name='delete' value='Delete'>
 </form>
 </td>
 </tr>";	 
   }
 echo"</table>"
  ?>
  </body>
  </html>