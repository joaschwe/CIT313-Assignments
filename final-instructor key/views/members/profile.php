<?php include('views/elements/header.php');?>
<?php
  if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
  }


?>

<div class="container">
  <div class="page-header">

   <h1> Update Profile</h1>

  </div>
      <?php if($message){?>
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">close</button>
        <?php echo $message?>
      </div>


  <?php }?>
  <div class="row">
      <div class="span8">
  <form id="updateform" action="<?php echo BASE_URL;?>members/<?php echo $task?>" method="post">

<fieldset>
<label for="first_name">First Name: <?=REQFIELD?></label>
<input type="text" id="first_name" name="first_name" value="<?php echo $user['first_name'];?>"  />
<br />
            
<label for="last_name">Last Name: <?=REQFIELD?></label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $user['last_name'];?>"  />
<br />
 
<label for="email">E-mail Address: <?=REQFIELD?></label>
<input type="text" class="txt" id="email" name="email" value="<?php echo $user['email'];?>"   />
<br />

<label for="password">Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="password" name="password"/>

<label for="password">Confirm Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="passwordconfirm" name="password_verify"/>


<br />

<input type="hidden" name="uID" id="uID" value="<?php echo $user['uID']; ?>"/>
 
<button id="submit" type="submit" class="btn btn-primary" >Update Profile</button>
</fieldset>
</form>
<p>Note: Updating of password disabled so that others can use the demo users. However you will be graded on your Final for Item 13 working correctly AS DEFINED in the Final instructions.</p>
  </div>
  </div>
</div>
<?php include('views/elements/footer.php');?>