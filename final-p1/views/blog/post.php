<?php include('views/elements/header.php');

if( is_array($post) ) {
    extract($post); ?>

    <div class="container">
        <div class="page-header">
            <h1><?php echo $title;?></h1>
        </div>

        <?php
        if( $u->isAdmin() ) {
            echo '<button id="submit" type="submit" class="btn btn-primary">EDIT POST</button>';
            echo '<button id="submit" type="submit" class="btn btn-primary">DELETE POST</button>';
        }
        ?>
        <p><?php echo $content;?></p>
        <sub>
            <?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>


        <h3 style="margin-top: 50px;">View Comments</h3>
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

                <label for="date">Date</label>
                <?php // set timezone
                date_default_timezone_set('America/Indiana/Indianapolis');?>
                <input name="date" id="date" size="16" type="date" value="<?php echo $date = date('Y-m-d H:i:s'); ?>">


                <textarea id="tinyeditor" name="content" placeholder="Comments." rows="3" style="width:75%;"><?php echo $content?></textarea>
                <br/>
                <input type="hidden" name="pID" value="<?php echo $pID?>"/>
                <input type="hidden" name="uID" value="<?php echo $uID?>"/>

                <button id="submit" type="submit" class="btn btn-primary" >Comment</button>
            </form>
        <?php
        } ?>

    </div>
<?php
}?>

<?php include('views/elements/footer.php');?>