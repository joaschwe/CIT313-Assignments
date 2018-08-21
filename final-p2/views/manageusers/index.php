<?php include('views/elements/header.php'); ?>

<div class="container">
    <div class="page-header">
        <h1><?php echo $title; ?></h1>
    </div>

    <?php if($message) {  ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $message?>
        </div>
    <?php
    }?>

    <?php
    foreach ($users as $u) { ?>

        <h3><a href="<?php echo BASE_URL ?>members/users/<?php echo $u['uID']; ?>"
               title="<?php echo $u['first_name']; ?> <?php echo $u['last_name']; ?>"><?php echo $u['email']; ?></a>
        </h3>

        <p><?php echo $u['first_name']; ?><?php echo $u['last_name']; ?></p>
        <p><a href="mailto:<?php echo $u['email']; ?>"><?php echo $u['email']; ?></a></p>
        <?php
        if ($u['active'] == '0') {
            ?>
            <form action="<?php echo BASE_URL ?>manageusers/approve" method="post">
                <input type="hidden" name="uID" value="<?php echo $u['uID']; ?>"/>
                <button id="approve" class="btn btn-primary" type="submit">APPROVE</button>
            </form>
            <?php
        }
        if ($u['user_type'] == '2') {
            ?>
            <form action="<?php echo BASE_URL ?>manageusers/delete" method="post">
                <input type="hidden" name="uID" value="<?php echo $u['uID']; ?>"/>
                <button id="delete" class="btn btn-danger" type="submit">DELETE</button>
            </form>
            <?php
        }
    } ?>
</div>

<?php include('views/elements/footer.php');?>