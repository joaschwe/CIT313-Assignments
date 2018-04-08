<?php
require_once('application/config.php');
include('elements/header.php');
//echo isAdmin();?>
<script>console.log( isAdmin() );</script>
<div class="container">
	<div class="page-header">
    <h1>Hello From the View</h1>
        <?php
        if( isset($_SESSION['uID']) ) {
            echo '<p>User ID number ' . $_SESSION['uID'] . ', ' . $_SESSION['last_name'] . ', is logged in.</p>';
        } else {
            echo '<p>No one is logged in.</p>';
        }
        ?>

  </div>
</div>
<?php include('elements/footer.php');?>