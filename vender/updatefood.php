<?php 
include '../file/dbconnation.php';
include 'header.php';
 ?>
 <?php
        $id =$_GET['id'];
        $update ="SELECT * FROM foods where id=$id";

        //execute the query
        $res = mysqli_query($conn, $update);

        //check whether the query is executed or not
        if($res ==true){
            $count = mysqli_num_rows($res);
            if($count==1){
                $row = mysqli_fetch_assoc($res);
                $id =$row['id'];
                $name =$row['foodname'];
                $image =$row['foodimage'];
                $price =$row['foodprice'];
                // $description =$row['description'];
            }
           
        }
        ?>
        
        <div class="form">
        <center>
            
            <h1>Food Upload</h1><br>
            <form method="POST" action="" enctype="multipart/form-data">               
<table>
  <tr>
    <th>Old Image</th>
    <th>Uploaded Image</th>
    <!-- <th>Country</th> -->
  </tr>
     <tr>
    <td><img src="../assets/uploadedimage/foodimage/<?= $image?>"alt="" style="width: 200px;"></td>
    <td><img src="" alt=""  id="img" style="width: 200px;"></td>   
        </tr>
    </table> 
            <input type="file" name="foodimage" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])">
            <!-- <input type="file" name="foodimage"> -->
                <br><br> 
                <label for="Location">Name:</label>
                <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
               
                <label for="Price">Price:</label>
                <input type="text" name="price" value="<?php echo $price; ?>"><br><br>
               
                <input type="hidden" name="old_filename" value="<?= $image ?>">
                <input type="submit" value="submit" name="submit" id="button" > <br> <br>

            </form>

        </center>
    </div>
     
    
        

<?php 
    
    if(isset($_POST['submit'])){  
        print_r($_FILES);      
        // print_r($_POST);die;
        $time=time();
        if(isset( $_FILES["foodimage"] ) && !empty( $_FILES["foodimage"]["name"] )){
            $filename =$time.'_'.$_FILES["foodimage"]["name"];
            $tempname= $_FILES['foodimage']['tmp_name'];
            $folder = "../assets/uploadedimage/foodimage/".$filename;
        }else{
            if(isset( $_POST['old_filename']) ){
                $filename = $_POST['old_filename'];
            }
        }

        

        // echo $filename;die;
        // $image = $filename;
        $name = $_POST['name'];
        $price = $_POST['price'];

        $sql = "UPDATE foods set
        foodname = '$name',
        foodimage = '$filename',
        foodprice = '$price'       
        where id = '$id'
        ";
        // print_r($sql);die;

if(move_uploaded_file($tempname,$folder))
 {
        //code
 }
        //execute the query
     $res = mysqli_query($conn, $sql);

        //checking whether the query is executed successfully or not
        if($res == true){
            $status = "success";
            $msg = 'Data Update successfully';
            header("location:food.php?msg=".$msg."&&status=".$status);
        }else{
            $status = "error";
            $msg = 'oops Error';
            header("location:food.php?msg=".$msg."&&status=".$status);
        }
    }
    include 'footer.php';
?>