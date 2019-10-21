<?php
include("connect.php");
session_start();

$sid=$_GET['sid'];
$sql="SELECT * FROM `details` WHERE 'id'='$sid'";
$result=mysqli_query($db,$sql);
$data=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>details</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<div class="cent">
		<h1>STUDENT MANAGEMENT SYSTEM</h1>
	</div>
<form method="post" action="updatedet.php" enctype="multipart/form-data">
<div class="reg">
			<label>Roll no</label>
			<input type="text" name="rollno" value="<?php if(isset($data['rollno']))echo $data['rollno'];?>" required >
</div>
<div class="reg">
			<label>Full Name</label>
			<input type="text" name="name" value=<?php echo $data['name'];?> required >
</div>
<div class="reg">
			<label>City</label>
			<input type="text" name="city" value=<?php echo $data['city'];?> required >
</div>
<div class="reg">
			<label>Parents Contact no</label>
			<input type="text" name="parents" value=<?php echo $data['parents'];?> required >
</div>
<div class="reg">
			<label>Standard</label>
			<input type="number" name="std" value=<?php echo $data['std'];?> required >
</div>
<div class="reg">
			<label>Image</label>
			<input type="file" name="img" value=<?php echo $data['img'];?> required >
</div><br>
<div class="reg">
                        <input type="hidden" name="sid" value=<?php echo $data['id']; ?>" />
			<button type="submit" name="click" class="button">Submit</button>
		</div><br>
                
</form>
</body>
</html>
