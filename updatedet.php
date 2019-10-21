<?php
include("connect.php");
if(isset($_POST['click'])){
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$city=$_POST['city'];
$parents=$_POST['parents'];
$std=$_POST['std'];
$sid=$_POST['sid'];

$filename=$_FILES['img']['name'];
$tempname=$_FILES['img']['temp_name'];
if(isset($filename)){
$local="imgf/";
move_uploaded_file($tempname,$local.$filename);
}

$sql="UPDATE `details` SET `rollno`='$rollno',`name`='$name',`city`='$city',`parents`='$parents',`std`='std',`img`='$img' WHERE `id`='$sid'";
$result=mysqli_query($db,$sql);
if($result==true){
?>
<script>
alert('Data updated successfully');
window.open('updateform.php?sid=<?php echo $sid;?>','_self');
</script>
<?php
}

}
?>c
