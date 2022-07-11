<?php
include'../file/dbconnation.php';

$id=$_GET['id'];
$sql="DELETE FROM category where id=$id";
$del=mysqli_query($conn,$sql);
if ($del==TRUE){
$msg ='category is deleted successfully';
$status = 'success';
header("location: category.php?msg=".$msg."&&status=".$status);
}
else{
    $msg ='category is Not deleted ';
$status = 'error';
    header("location:category.php?msg=".$msg."&&status=".$status);
}
?>