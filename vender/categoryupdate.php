<?php 
include '../file/dbconnation.php';
include 'header.php';
 ?>
 <?php
        $id =$_GET['id'];
        $update ="SELECT * FROM category where id=$id";

        //execute the query
        $res = mysqli_query($conn, $update);

        //check whether the query is executed or not
        if($res ==true){
            $count = mysqli_num_rows($res);
            if($count==1){
                $row = mysqli_fetch_assoc($res);
                $id =$row['id'];
                $name =$row['name'];
                $status =$row['status'];
                
            }
           
        }
        ?>
        <h1 style="text-align:center;">Upload Category</h1>
    <form method="POST">
    <div style="margin-left: 30%;margin-right: 30%; margin-bottom:10px;">

  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="<?php echo $name;?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Status</label>
    <select name="status" class="form-control" id="exampleFormControlSelect1">
      <!-- <option   disabled>Select Status</option> -->
      <option value="0" if($status == 0 ? 'selected' : '')>Inactive</option>
      <option value="1" if($status == 1 ? 'selected' : '')>Active</option>     
    </select>
  </div>
  <input class="btn btn-primary" type="submit" name="submit" value="Upload">
</div>
</form>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $status=$_POST['status'];

    $sql = "UPDATE category set
        name = '$name',
        status = '$status'              
        where id = '$id'
        ";

$res = mysqli_query($conn, $sql);

//checking whether the query is executed successfully or not
if($res == true){
    $status = "success";
    $msg = 'Data Update successfully';
    header("location:category.php?msg=".$msg."&&status=".$status);
}else{
    $status = "error";
    $msg = 'oops Error';
    header("location:category.php?msg=".$msg."&&status=".$status);
}

include 'footer.php';

}