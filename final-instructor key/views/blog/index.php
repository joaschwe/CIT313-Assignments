<?php include('views/elements/header.php');?>

<div class="container">
<div class="page-header">


<h1><?php echo $title;?></h1>

  </div>
    <?php foreach($posts as $p){?>
<div class="well">
	<p><?php echo date("F j, Y",strtotime($p['date']))." | ". $p['first_name'].' '.$p['last_name'].' | Category: ' ?><a href="<?php echo BASE_URL; ?>blog/category/<?php echo $p['categoryid']; ?>"><?php echo $p['name']; ?></a></p>
    <h3><a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
    <a href="<?php echo BASE_URL; ?>ajax/get_post_content/?pID=<?php echo $p['pID']; ?>" class="post">View Entire Post</a>
</div>

	

<?php }?>
</div>

<?php echo $p['categoryID'];?>


<?php include('views/elements/footer.php');?>