
<?php include('views/elements/header.php');?>
<?php
    extract($post);
?>

<div class="container">

    <div class="page-header">

        <?php echo '<h3>' . $title . '</h3>';?><br>
        Posted on <?php echo date("F j, Y",strtotime($date)); ?>
        | by <?php echo($first_name . ' ' . $last_name); ?>
        | <a href="<?php echo BASE_URL; ?>blog/category/<?php echo $categoryid; ?>"><?php echo $name; ?></a>
    
    </div>

    <div><?php if($u->isAdmin()) { ?>
<button class="btn btn-primary"><a href="<?php echo BASE_URL.'manageposts/edit/'.$pID;  ?>">Edit Post</a></button>

<button class="btn btn-primary"><a href="<?php echo BASE_URL.'manageposts/delete/'.$pID;?>">Delete Post</a></button>

    <?php } ?>

</div>
<br>
    <div>

        <?php echo $content;?>
        <br>
        <br>
        

    </div>

<br>

<h2>View Comments</h2>

<div>
    <form action="#" method="POST">
        <input type="hidden" name="pid" id='pid' value="<?php echo $pID; ?>">
    </form>
</div>


<div  id='cmain'>
    
    <!--output -->

</div>


<?php if($u->isRegistered()) { ?> 


<form action="<?php echo BASE_URL?>post/addComments" method="POST">
    <textarea  class='form-control' id="textComment" name="textComment" value="Comments." placeholder="Comments." rows="3" style="width:75%;"></textarea>
<br>
    <input type="submit" id='submitComment' class='btn btn-primary' value="Comment">
    
    
    <input type="hidden" name="pid" id='pid' value="<?php echo $pID; ?>">
    <input type="hidden" name="uid" id='uid' value="<?php echo $_SESSION['uID']; ?>">

</form>
<?php
}
else {
?>
<h4>Login to post comments</h4>
<?php } ?>
<?php if(!$u->isRegistered()){ ?>
    <a href="<?php echo BASE_URL ?>login" class="btn btn-primary">Login</a>
<?php } ?>
</div>

<?php include('views/elements/footer.php');?>