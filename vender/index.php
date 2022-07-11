<?php
session_start();
    // echo $_SESSION['islogin'];

if(isset($_SESSION['islogin']) && ($_SESSION['islogin'] == true)){ //if login in session is not set
    // header("Location:index.php");

}else{
   
    // die;
    header("Location:venderLogin.php");
}
?>


<?php include 'header.php'; ?>
<?php
    require '../vender/massage.php';
    ?>
<div class= "main">
<div class= "wrapper">
    <h1>Dashboard</h1>
    <div class="col4 text-center">
     <h1>5</h1>
    </br>
     veg
    </div>
    <div class="col4 text-center">
        <h1>5</h1>
       </br>
        Chicken
       </div>
       <div class="col4 text-center">
        <h1>5</h1>
       </br>
        Buff
       </div>
       <div class="col4 text-center">
        <h1>5</h1>
       </br>
        Pork
       </div>
       <div class="clearfix"></div>
</div>
</div>

<?php include 'footer.php'; ?>
