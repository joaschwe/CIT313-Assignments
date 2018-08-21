
<?php include('views/elements/header.php');?>

<div class="container">
<div class="page-header">

<?php
if( is_array($posts) ) {
	extract($posts); 
}
?>
<h1><?php echo $cats['name'];?> Posts</h1>

  </div>

	<?php foreach($posts as $p){?>
	<div class="well">	
		<p><?php echo date("F j, Y",strtotime($p['date']))." | ". $p['first_name'].' '.$p['last_name'];?></p>
    <h3><a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
	<div>
		<a href="<?php echo BASE_URL; ?>ajax/get_post_content/?pID=<?php echo $p['pID']; ?>" class="post">View Entire Post</a>

	</div>
</div>

<?php }?>
</div>




<?php include('views/elements/footer.php');?>