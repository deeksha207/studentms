<?php
session_start();
include('connect.php');

if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
$result=mysqli_query($db,$sql);
$run=mysqli_num_rows($result);
if($run<1){
?>
<script>alert('Username and password do not match');
window.open('adminl.php','_self');</script>
<?php
}
else{
$data=mysqli_fetch_assoc($result);
$id=$data['id'];

$_SESSION['uid']=$id;
header('location:dashboard.php');

}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

    <div class="cent">
		<h1>Admin Login</h1>
	</div>
	<form method="post" action="adminl.php">
		<div class="reg">
			<label>Username</label>
			<input type="text" name="username" required>
		</div>
	
		<div class="reg">
			<label>Password</label>
			<input type="password" name="password" required>
		</div>
	
		<div class="reg">
			<button type="submit" name="login" class="button">Login</button>
		</div>
		

	</form>
	

</body>
</html>

