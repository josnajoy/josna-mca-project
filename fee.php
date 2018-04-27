<?php
session_start();
?>

<?php
 	$db=mysqli_connect("localhost","josna","josna123","project");
	$query = "SELECT rid,route FROM routepay";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $categories[] = array("id" => $row['rid'], "val" => $row['route']);
  }

  $query = "SELECT bid, rid, fee FROM route";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $subcats[$row['rid']][] = array("id" => $row['fee'], "val" => $row['fee']);
  }

  $jsonCats = json_encode($categories);
  $jsonSubCats = json_encode($subcats);
?>
 
 <?php
/*$id=$_SESSION["email"];
echo $id;
$db=mysqli_connect("localhost","josna","josna123","project");
$sq="select * from studreg where email='$id';";
$res=mysqli_query($db,$sq);
$ro=mysqli_fetch_assoc($res);
echo $sq;
$uid=$ro['uid'];
echo $uid;*/
?>


<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>fee</title>
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

   <script type='text/javascript'>
      <?php
        echo "var categories = $jsonCats; \n";
        echo "var subcats = $jsonSubCats; \n";
      ?>
      function loadCategories(){
        var select = document.getElementById("categoriesSelect");
        select.onchange = updateSubCats;
        for(var i = 0; i < categories.length; i++){
          select.options[i] = new Option(categories[i].val,categories[i].id);          
        }
      }
      function updateSubCats(){
        var catSelect = this;
        var catid = this.value;
        var subcatSelect = document.getElementById("subcatsSelect");
        subcatSelect.options.length = 0; //delete all options if any present
        for(var i = 0; i < subcats[catid].length; i++){
          subcatSelect.options[i] = new Option(subcats[catid][i].val,subcats[catid][i].id);
        }
      }
    </script>
	  </head>

  <body onload='loadCategories()'>
    
    


	<h1>Payment</h1>
<div class="w3l-main">
	<div class="w3l-from">
		<form action="payment.php"  method="POST" class="form-horizontal">
		
				  <div class="w3l-user">
				  
				  
				      <!--<div class="clear"></div>
					  <div class="w3l-user">
				<label class="head">User Id</label>
				<input type="text" value="<?php //echo $uid; ?>" name="uid" placeholder="" required="">
			</div>
			-->
			
			<div class="w31-user">
				<label class="head">Route</label>	
					<select id='categoriesSelect' class="form-control" name="categoriesSelect"></select>
				
						
			</div>
			<?php
			 if(isset($validation['birthdate'])) { 
                    echo $validation['birthdate'];
                }
                ?>
						<div class="w31-user">
		                   <label class="head">Amount</label>
					         <select id='subcatsSelect' class="form-control" name="subcatSelect"></select>
							 
					    </div>
						<?php
						 if(isset($validation['birthdate'])) { 
                    echo $validation['birthdate'];
                }
                ?>
					 
					  <div class="w31-user">
				<label class="head">Category</label>	
					<select class="form-control" name="category" required="">
						<option>Student</option>
						<option>Staff</option>
					</select>
			</div>
			<?php
			 if(isset($validation['birthdate'])) { 
                    echo $validation['birthdate'];
                }
                ?>
						
						<div class="form-group">
						<div class="btn">
						
					<input type="submit" name="submit" value="Proceed to pay"/>
				</div>
						</div>
								 
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
