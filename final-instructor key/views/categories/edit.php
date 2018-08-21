<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
		<h1>Edit Category</h1>
  	</div>


  	<?php //include 'views/elements/catNameForm.php'; ?>

  	<form action="<?php echo BASE_URL ?>categories/update" method="POST">
		<label for="categoryname">Name</label>
		<input type="text" name="categoryname" class='input' id="categoryname" value="<?php echo $category['name']; ?>">
		<input type="hidden" name='categoryID' id='categoryID' value="<?php echo $category['categoryID']; ?>">
		<input type="submit" class='btn btn-primary' value="Submit">
	</form>


</div>

<?php include('views/elements/footer.php');?>