<?php include('elements/admin_header.php'); ?>

<div class="container">
    <div class="page-header">
        <h1>Register</h1>
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
            <form action="<?php echo BASE_URL ?>register/<?php echo $task ?>" method="post" onsubmit="editor.post()">
                <label>First Name *</label>
                <input type="text" class="span6" name="register_first_name" value="<?php echo $fname ?>" required="required">

                <label>Last Name *</label>
                <input type="text" class="span6" name="register_last_name" value="<?php echo $lname ?>" required="required">

                <label>Email *</label>
                <input type="email" class="span6" name="register_email" value="<?php echo $email ?>" required="required">

                <label>Password *</label>
                <input type="password" class="span6" name="register_password" value="<?php echo $password ?>" required="required">

                <br/>
                <input type="hidden" name="uID" value="<?php echo $uID ?>"/>
                <button id="submit" type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>


<?php include('elements/admin_footer.php'); ?>
