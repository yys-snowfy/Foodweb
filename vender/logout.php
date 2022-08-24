<?php
include '../file/dbconnation.php';
SESSION_start();


session_destroy();

header('location:venderLogin.php');

?>