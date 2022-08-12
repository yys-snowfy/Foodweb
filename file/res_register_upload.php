<?php
include'../file/dbconnation.php';
$resname= $_REQUEST['resname'];
$resphone=$_REQUEST['resphone'];
$managername=$_REQUEST['managername'];
$managercontact=$_REQUEST['managerContact'];
$contactemail =$_REQUEST['contactemail'];
$country =$_REQUEST['country'];
$states =$_REQUEST['state'];
$city =$_REQUEST['city'];
$username =$_REQUEST['username'];
$password=$_REQUEST['password'];
$time=time();
$filename =$time.'_'.$_FILES["image"]["name"];
$tempname= $_FILES['image']['tmp_name'];
$folder = "../assets/uploadedimage/reslogo/".$filename;

if ($_REQUEST["password"] == $_REQUEST["confirm_password"]) {
  $sql = "INSERT INTO vendor (resname,resphone,managername,managercontact,contactemail,country,states,city,username,passwords,reslogo) VALUES ('$resname','$resphone','$managername','$managercontact','$contactemail','$country','$states','$city','$username','$password','$filename')";

}
else {   
  echo "<script> alert('Incorrect Password');</script>";
  header ("Location: res_register_upload?err=1");
  
  exit;
}
if(move_uploaded_file($tempname,$folder))
 {
        //code
 }

if ($conn->query($sql)==TRUE) {
    echo "New record created successfully";
    header ("Location: restaurent_register.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  

?>