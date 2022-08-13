<?php include '../layout/heading.php';?>
<link rel="shortcut icon" href="../assets/images/3.jpg" type="image/x-icon" >
<link rel="stylesheet" href="../assets/css/form.css">


<center>
     <div class="wrapper">
        <div class="title">Login</div>
        <form action="#">
            <div class="field">
                <input type="text" required>
                <label>Email Address</label>
            </div>
            <div class="field">
                <input type="password" required>
                <label>Password</label>
            </div>
            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <div class="pass-link"><a href="#">Forgot password?</a></div>
            </div>
            <div class="field">
                <input type="submit" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="../file/userregister.php">Signup now</a></div>
        </form>
    </div>
</center>


    <?php 
include '../layout/footer.php';
?>
