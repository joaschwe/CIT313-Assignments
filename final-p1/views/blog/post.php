<?php include('views/elements/header.php');

if( is_array($post) ) {
    extract($post); ?>

    <div class="container">
        <div class="page-header">
            <h1><?php echo $title;?></h1>
        </div>

        <?php
        if( $u->isAdmin() ) {
            echo '<div>';
            echo '<a href="' .BASE_URL. 'manageposts/edit/' .$pID. '" class="btn btn-primary">Edit Post</a>';
            echo '<a href="' .BASE_URL. 'manageposts/delete/' .$pID. '" class="btn btn-primary">Delete Post</a>';
            echo '</div>';
        }
        ?>
        <p><?php echo $content;?></p>
        <sub>
            <?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>


        <h3 style="margin-top: 50px;">View Comments</h3>
        <div class="well-large"></div>
        <?php
        if( is_array($post) ) {
            extract($post); ?>

            <sub>
                <?php echo $date . ' by <a href="' . BASE_URL . 'members/view/' . $uid . '">' . $first_name . ' ' . $last_name . '</a>'; ?>
            </sub>

        <?php
        }

        if( $u->isRegistered() ) { ?>
            <form action="<?php echo BASE_URL?>manageposts/<?php echo $task?>" method="post" onsubmit="editor.post()">
                <textarea name="content" placeholder="Comments." rows="3" style="width:75%;"></textarea>
                <br/>
                <input type="hidden" name="pID" value="<?php echo $pID?>"/>
                <input type="hidden" name="postID" value="<?php echo $postID?>"/>
                <input type="hidden" name="uID" value="<?php echo $uID?>"/>

                <button id="submit" type="submit" class="btn btn-primary" >Comment</button>
            </form>
        <?php
        } else { ?>
            <br/><br/>
            <a href="<?php echo BASE_URL?>login/" class="btn btn-primary">Log In</></a>
        <?php
            }
        ?>

    </div>
<?php
}?>

<?php include('views/elements/footer.php');?>