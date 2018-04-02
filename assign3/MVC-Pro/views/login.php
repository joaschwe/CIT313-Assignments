<?php include('elements/header.php');?>

<div class="container">
	<div class="page-header">
        <h1>Login</h1>
        <?php echo $numbers ?>
    </div>

    <div class="row">
        <div class="span8">
            <form action="<?php echo BASE_URL ?>login/<?php echo $do_login ?>" method="post" onsubmit="editor.post()">
                <label>Username/E-mail Address *</label>
                <input type="email" class="span6" name="login_username" value="<?php echo $username ?>"required = required>

                <label>Password *</label>
                <input type="text" class="span6" name="login_password" value="<?php echo $loginPassword ?>" required = required>

                <br/>
                <input type="hidden" name="uID" value="<?php echo $uID ?>"/>
                <button id="submit" type="submit" class="btn btn-primary">Log In</button>
            </form>

        </div>
    </div>
</div>

<?php include('elements/footer.php');?>

