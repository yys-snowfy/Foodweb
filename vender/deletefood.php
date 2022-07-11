<?php
include'../file/dbconnation.php';

$id=$_GET['id'];
$sql="DELETE FROM foods where id=$id";
$del=mysqli_query($conn,$sql);
if ($del==TRUE){
$msg ='Food is deleted successfully';
$status = 'success';
header("location: food.php?msg=".$msg."&&status=".$status);
}
else{
    header("location:food.php");
}
?>