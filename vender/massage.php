
<?php
if(isset($_GET['status']) && $_GET['status'] == 'error'){
?>
<div class="alert alert-danger dismissible fade show" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>  
<?= $_GET['msg'] ?>
</div>


<?php } 
if(isset($_GET['status']) && $_GET['status'] == 'success'){
?>
<div class="alert alert-success dismissible fade show" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="close">
  <span aria-hidden="true">&times;</span>
</button>

 <?= $_GET['msg'] ?>
</div>
<?php }

