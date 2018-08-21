<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1> Manage Users  </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <?php foreach($users as $user){ ?>

    <div class="well">
      <h4><?php echo $user['first_name']. ' '.$user['last_name']; ?></h4>
      <?php if($user['user_type']!=='1' && $user['uID']!=45){ ?>
        <a class='btn btn-danger' href="<?php echo BASE_URL ?>manageusers/delete/<?php echo $user['uID'] ?>">Delete</a>
      <?php } if($user['active']!=='1'){ ?>

        <a class='btn btn-primary' href="<?php echo BASE_URL ?>manageusers/approve/<?php echo $user['uID'] ?>">Approve</a>

      <?php } ?>


    </div>




  <?php } ?>


<p>Note: Delete is purposely not available for 'Demo User'. All regular users in your final project should be deleteable</p>


</div>
<?php include('views/elements/footer.php');?>