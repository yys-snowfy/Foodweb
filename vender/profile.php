<?php
include '../vender/header.php';
    include '../file/dbconnation.php';

    $sql = "SELECT * FROM vendor";
            $res = mysqli_query($conn, $sql);
            if ($res == TRUE) {
                $count = mysqli_num_rows($res);
                // $ad_id = 1;
                if ($count > 0) {
                    while ($fetch = mysqli_fetch_assoc($res)) {
                        $resname = $fetch['resname'];
                        $rescontact = $fetch['resphone'];
                        $managername = $fetch['managername'];
                        $managercontact = $fetch['managercontact'];
                        $contactemail = $fetch['contactemail'];
                        $country = $fetch['country'];
                        $state = $fetch['states'];
                        $city = $fetch['city'];
                        $username = $fetch['username'];
                    ?>

<div class="container">      
<form class="needs-validation" novalidate class="ml-5" >
    <h1> Profile Information</h1>
    <hr>
<div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Restaurant Name</label>
      <input type="text" class="form-control" id="validationTooltip01" value=" <?php echo $resname; ?>" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Restaurant Number </label>
      <input type="text" class="form-control" id="validationTooltip02" value=" <?php echo $rescontact; ?> " required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Manager Name</label>
      <input type="text" class="form-control" id="validationTooltip01" value="<?php echo $managername; ?>" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Manager Contact People</label>
      <input type="text" class="form-control" id="validationTooltip02" value="<?php echo $managercontact; ?>" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contact Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $contactemail; ?>" required >
    <div class="valid-tooltip">
        Looks good!
      </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">Country</label>
      <input type="text" class="form-control" id="validationTooltip03" value="<?php echo $country; ?>" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">State</label>
      <input type="text" class="form-control" id="validationTooltip03" value="<?php echo $state; ?>" required>      
      <div class="invalid-tooltip">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">City</label>
      <input type="text" class="form-control" id="validationTooltip05" value="<?php echo $city; ?>" required>
      <div class="invalid-tooltip">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Update</button>
</form>
<hr>
<h1> Update Password</h1>
<form>
<div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Current Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">New Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Conform Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Update</button>
  <button class=" btn btn-dark " ><a href="logout.php">Logout</a></button>

</form>
 </div>

 <br>
 

<?php
      }
         
  }
}


 include '../vender/footer.php';
?>