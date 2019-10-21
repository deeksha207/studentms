<?php
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>student management system</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<br>
<a href="adminl.php" ><button class="button">Admin Login</a></button>
    <div class="cent">
		<h1>STUDENT MANAGEMENT SYSTEM</h1>
	</div>
<div class="cen"><h3>Student Information</h3></div><br>
	<form method="post" action="home.php">
		<div class="reg">
			<label></label>
			<select name="std" >
				<option selected hidden value=" ">Choose Standard</option>
					<option>1</option>
	 				<option>2</option>
					<option>3</option>
                                        <option>4</option>
                                        <option>5</option>
				</select><br><br>
</div>
<div class="reg">
			<label>Enter Roll no</label>
			<input type="text" name="rollno" required >
</div>
<div class="reg">
			<button type="submit" name="enter" class="button">Show Info</button>
		</div><br>
                
	
	</form>
	</div>
</body>
</html>
<?php

if(isset($_POST['enter'])){
$std=$_POST['std'];
$rollno=$_POST['rollno'];
$sql="SELECT * FROM `details` WHERE `std`='$std' AND `rollno`='$rollno'";
$run=mysqli_query($db,$sql);
if(mysqli_num_rows($run)>0){
$data=mysqli_fetch_assoc($run);
?>
<table  border="1" align="center" style="width:50%; margin-top:20px;">
<tr>
<th colspan="3">Student Details</th>
</tr>
<tr>
<td rowspan="5"><img src="imgf/<?php echo $data['img']; ?>" style="max-height:150px; max-width:120px;"/></td>
</tr>
<tr>
<th>Name</th>
<td><?php echo $data['name'];?> </td>
</tr>
<tr>
<th>City</th>
<td><?php echo $data['city'];?> </td>
</tr>
<tr>
<th>Parents Contact no</th>
<td><?php echo $data['parents'];?> </td>
</tr>
<tr>
<th>Standard</th>
<td><?php echo $data['std'];?> </td>
</tr>
</table>
<?php
}
}
?>

