<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
		<h1>Manage Categories</h1>
  	</div>
  		<?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }

		foreach($categories as $key=>$value){
			echo "<h3>".$value."</h3>";
			echo "<a class='btn btn-primary' href='".BASE_URL."categories/edit/".$key."'       >Edit Category</a><hr>";
		}

	 ?>

	 <form action="<?php echo BASE_URL ?>categories/add" method="POST">
	 	<label for="newCategory">Add A New Category</label>



		<input type="text" name="newCategory" class="input" id="newCategory">

		<br>
		<input type="submit" class='btn btn-primary' value="Submit">
	 </form>

</div>

<?php include('views/elements/footer.php');?>