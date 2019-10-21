<?php

session_start();

if(isset($_SESSION['uid'])){
echo $_SESSION['uid'];
}
else{
header('location:adminl.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<title>admin</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<div class="regr">
<h1>Welcome To Admin Dashboard</h1>
<a href="logout.php" style="float:right; margin-right:30px; align:center;"><button type="submit" name="logout" class="button">Logout</a></button>
</div>
<div class="dash">
<table  align="center" style="width:50%;">
<tr>
<td>1.</td><td><a href="insert.php">Insert Student Details</a></td>
</tr>
<tr>
<td>2.</td><td><a href="update.php">Update Student Details</a></td>
</tr>
<tr>
<td>3.</td><td><a href="delete.php">Delete Student Details</a></td>
</tr>
</table>
</div>
</body>
</html>
