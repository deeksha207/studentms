<?php
include("connect.php");
session_start();
if(isset($_SESSION['uid'])){
echo $_SESSION['uid'];
}
//else{
//header('location:adminl.php');
//}

?>

<!DOCTYPE html>
<html>
<head>
<title>details</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<div class="regr">
<h1>Welcome To Admin Dashboard</h1>
<a href="logout.php" style="float:right; margin-right:30px; align:center;"><button type="submit" name="logout" class="button">Logout</a></button>
<a href="dashboard.php" style="float:left; margin-right:30px; align:center;"><button type="submit" name="back" class="button">Back to admin</a></button>
</div>
<form method="post" action="insert.php" enctype="multipart/form-data">
<div class="reg">
			<label>Roll no</label>
			<input type="text" name="rollno" required >
</div>
<div class="reg">
			<label>Full Name</label>
			<input type="text" name="name" required >
</div>
<div class="reg">
			<label>City</label>
			<input type="text" name="city" required >
</div>
<div class="reg">
			<label>Parents Contact no</label>
			<input type="text" name="parents" required >
</div>
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
			
</div>
<div class="reg">
			<label>Image</label>
			<input type="file" name="img" required  >
</div><br>
<div class="reg">
			<button type="submit" name="click" class="button">Submit</button>
		</div><br>
                
</form>
</body>
</html>
<?php
if(isset($_POST['click'])){
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$city=$_POST['city'];
$parents=$_POST['parents'];
$std=$_POST['std'];
$img=$_FILES['img']['name'];
$tempname=$_FILES['img']['tmp_name'];
move_uploaded_file($tempname,"../imgf/$img");

$sql="INSERT INTO `details`(`rollno`,`name`,`city`,`parents`,`std`,`img`) VALUES('$rollno','$name','$city','$parents','$std','$img')";
$result=mysqli_query($db,$sql);
if($result==true){
?>
<script>
alert('Data added successfully');
</script>
<?php
}

}
?>
