
<?php include('views/elements/header.php');?>
 
<?php extract($member);?>
    
<div class="container">
	<div class="page-header">

<h1>Member: <?php echo $uID;?></h1>
</div>
<div>
<h3> <b><u><?php echo $first_name . ' ' . $last_name;?></u></b></h3>
 
<p><?php echo $email; ?> </p>

</div>




<?php include('views/elements/footer.php');?>