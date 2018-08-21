	<form action="<?php echo BASE_URL ?>categories/update" method="POST">
		<label for="categoryname">Name</label>
		<input type="text" name="categoryname" class='input-sm' id="categoryname" value="<?php echo $category['name']; ?>">
		<input type="hidden" name='categoryID' id='categoryID' value="<?php echo $category['categoryID']; ?>">
		<input type="submit" class='btn btn-primary' value="Submit">
	</form>