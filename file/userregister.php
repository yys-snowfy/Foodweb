
<?php
include '../file/dbconnation.php';
$name= $_REQUEST['name'];
$email =$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$country =$_REQUEST['country'];
$states =$_REQUEST['state'];
$city =$_REQUEST['city'];
$password=$_REQUEST['password'];
$time=time();
$filename =$time.'_'.$_FILES["image"]["name"];
$tempname= $_FILES['image']['tmp_name'];
$folder = "../assets/uploadedimage/userprofile/".$filename;

if ($_REQUEST["password"] == $_REQUEST["conform_password"]) {
    $sql = "INSERT INTO `users`( `Name`, `Email`, `Password`, `image`, `phone`, `country`, `state`, `city`) VALUES ('$name','$email','$password','$filename','$phone','$country','$states','$city')";

}
else {   
  echo "<script> alert('Incorrect Password');</script>";
  header ("Location: index.php?err=1");
  
  exit;
}
if(move_uploaded_file($tempname,$folder))
 {
        //code
 }

if ($conn->query($sql)==TRUE) {
    echo "New record created successfully";
    header ("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  

?>