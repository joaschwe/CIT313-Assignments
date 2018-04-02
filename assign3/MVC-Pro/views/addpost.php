<?php include('elements/admin_header.php'); ?>

<div class="container">
    <div class="page-header">
        <h1>Add Post</h1>
    </div>

    <?php
    if ($message)
    { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $message ?>
        </div>
    <?php
    } ?>

    <div class="row">
        <div class="span8">
            <form action="<?php echo BASE_URL ?>addpost/<?php echo $task ?>" method="post" onsubmit="editor.post()">

                <label>Title *</label>
                <input type="text" class="span6" name="post_title" value="<?php echo $title ?>" required="required">

                <label>Date *</label>
                <input type="date" class="span6" name="post_date" value="<?php echo $postDate ?>" required="required">

                <label>Category ID *</label>
                <input type="number" class="span6" name="post_catID" value="<?php echo $catID ?>" required="required">

                <label>Content *</label>
                <textarea id="tinyeditor" name="post_content"
                          style="width:556px;height: 200px" required="re">
                    <?php echo $content ?>
                </textarea>

                <br/>
                <input type="hidden" name="pID" value="<?php echo $pID ?>"/>
                <button id="submit" type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

<?php include('elements/admin_footer.php'); ?>

