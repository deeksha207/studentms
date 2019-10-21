<?php
include("connect.php");
if(isset($_POST['click'])){
$id=$_REQUEST['sid'];

$sql="DELETE FROM `details` WHERE `id`='$id'";
$result=mysqli_query($db,$sql);
if($result==true){
?>
<script>
alert('Data deleted successfully');
window.open('delete.php','_self');
</script>
<?php
}

}
?>
