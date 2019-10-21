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
<title>update details</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<div class="regr">
<h1>Welcome To Admin Dashboard</h1>
<a href="logout.php" style="float:right; margin-right:30px; align:center;"><button type="submit" name="logout" class="button">Logout</a></button>
<a href="dashboard.php" style="float:left; margin-right:30px; align:center;"><button type="submit" name="back" class="button">Back to admin</a></button>
</div>
<form method="post" action="update.php">
<div class="reg">
			<label>Enter Standard</label>
			<input type="number" name="std" required >
</div>
<div class="reg">
			<label>Enter Student Name</label>
			<input type="text" name="name" required >
</div>

<div class="reg">
			<button type="submit" name="click" class="button">Search</button>
		</div><br>
                
</form>
<table align="center" width="80%" border="1" style="margin-top:10px; " >
<tr style="background-color:#000; color:#fff;">
<th>No</th>
<th>Image</th>
<th>Name</th>
<th>Rollno</th>
<th>Edit</th>
</tr>

<?php

if(isset($_POST['click'])){
$std=$_POST['std'];
$name=$_POST['name'];

$sql="SELECT * FROM `details` WHERE `std`='$std' AND `name` LIKE '%$name%'";
$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result)<1){
echo "<tr><td colspan='5'>No record found</td></tr>";
}
else{
$count=0;
while($data=mysqli_fetch_assoc($result)){
$count++;
?>
<tr>
<td><?php echo $count; ?></td>
<td><img src="imgf/<?php echo $data['img'];?>" style="max-width:100px;" /></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['rollno']; ?></td>
<td><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
</tr>

<?php
}
}
}
?>


</table>
</body>
</html>

