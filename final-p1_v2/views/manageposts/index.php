<?php include('views/elements/header.php'); ?>

<div class="container">
    <div class="page-header">
        <h1>Manage Posts</h1>
    </div>

    <?php
    if ($message) {  ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $message ?>
        </div>
    <?php
    } ?>

    <div class="row">
        <div class="span8">
            <a href="<?php echo BASE_URL; ?>manageposts/add" class="btn btn-primary">New Post</a>

            <!--FIX categories index to be able to edit categories-->
            <a href="<?php echo BASE_URL; ?>categories/" class="btn btn-primary">Manage Categories</a>
            <!--FIX categories index to be able to edit categories-->

        </div>
    </div>
    <hr>


<!--    list posts from default blog page-->
    <?php
    //    var_dump($posts);
    //    echo '$posts is: ' . $posts; <-- $posts is: Array

    foreach($posts as $p) {  ?>
        <h3>
            <a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a>
        </h3>

        <sub>
            <?php echo 'Posted on ' . $p[date]; ?>
        </sub>
        <div style="margin-top:15px;">
            <a target="_parent" href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID']; ?>" class="btn btn-primary">View Entire Post</a>
            <a href="<?php echo BASE_URL?>manageposts/edit/<?php echo $p['pID']; ?>" class="btn btn-primary">Edit Post</a>

<!--    href for remove method??-->
            <a href="<?php echo BASE_URL?>blog/remove/<?php echo $p['pID']; ?>" class="btn btn-primary">Delete Post</a>
<!--    href for remove method??-->

        </div>
        <?php
    } ?>
</div>

<?php include('views/elements/footer.php'); ?>