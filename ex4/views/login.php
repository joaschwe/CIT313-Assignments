<?php
require_once ('application/config.php');
include('elements/header.php')
;?>
<div class="container">
	<div class="page-header">
   <h1>Login</h1>
   
   <?php echo $numbers; ?>
   
   <?php include('elements/login_form.php');?>
   
  </div>
</div>
<?php include('elements/footer.php');?>
