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

if ($_REQUEST["password"] == $_REQUEST["confirm_password"]) {
  $sql = "INSERT INTO vendor (resname,resphone,managername,managercontact,contactemail,country,states,city,username,passwords) VALUES ('$resname','$resphone','$managername','$managercontact','$contactemail','$country','$states','$city','$username','$password')";

}
else {   
  echo "<script> alert('Incorrect Password');</script>";
  header ("Location: res_register_upload?err=1");
  
  exit;
}
//  echo $resname,"<br>",$resphone,"<br>",$managername,"<br>",$managercontact,"<br>",$contactemail,"<br>",$country,"<br>",$states,"<br>",$city,"<br>",$username,"<br>",$email;




if ($conn->query($sql)==TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  

?>