<?php
include('views/elements/header.php'); ?>

    <div class="container">
        <div class="page-header">
            <h1>Hello From the View</h1>
        </div>

        <p>
            <?php
            if (isset($_SESSION['uID'])) {
                echo '<p>User ID number ' . $_SESSION['uID'] . ', ' . $_SESSION['last_name'] . ', is logged in.</p>';
            } else {
                echo '<p>No one is logged in.</p>';
            }
            ?>
        </p>

    </div>

<?php include('views/elements/footer.php'); ?>