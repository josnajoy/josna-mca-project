<?php

include("connection.php");
$s=mysqli_query($con,"select * from staffreg");
echo "<table border ='0.2' cellspacing=2 width=100% height=100% align='center' style=margin:100px; bgcolor=#f7aa77>
<tr><colspan=10><font size=10 color=black >Student Details</font></th></tr>
<tr><th>Id</th><th align='center'>First Name</th><th>Last Name</th><th>Gender</th><th>Branch</th><th>Address</th><th>Phone No</th>
<th>Route</th><th>Stoppage</th></tr>";
  while($row=mysqli_fetch_array($s))
  {
	  $uid=$row[0];
	 
  echo "<tr><td align='center'>".$row["uid"]."</td><td align='center'>".$row["fname"]."</td><td align='center'>".$row["lname"]."</td><td align='center'>".$row["gender"]
  ."</td><td align='center'>".$row["branch"]."</td><td align='center'>".$row["address"]."</td><td align='center'>".$row["phoneno"]."</td><td align='center'>".$row["route"]."</td><td align='center'>".$row["stoppage"]."</td>
  
   </tr>";	 
   }
 echo"</table>"
  ?>
 