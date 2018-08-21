<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1> Manage Posts  </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php 
			echo $message;			
		?>
    </div>
  <?php }?>
    <div class="well">
      <a href="<?php echo BASE_URL; ?>/manageposts/add" class='btn btn-primary'>New Post</a>
      <a href="<?php echo BASE_URL; ?>/categories" class='btn btn-primary'>Manage Categories</a>
    </div>

  <?php

    foreach($posts as $post){
      echo "<div><h3>".$post['title']."</h3>".date('Y-m-d H:i:s')."</div>";
      echo "<a class='btn btn-primary' href='".BASE_URL."blog/post/".$post['pID']."'>View Post</a>";
      echo "<a class='btn btn-primary' href='".BASE_URL."manageposts/edit/".$post['pID']."'>Edit Post</a>";
      echo "<a class='btn btn-primary' href='".BASE_URL."manageposts/delete/".$post['pID']."'>Delete Post</a><hr>";
    }

   ?>
</div>
<?php include('views/elements/footer.php');?>