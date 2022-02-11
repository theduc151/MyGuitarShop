<?php include '../Views/header.php'; ?>
	<div id="main">
		<h1>Add Product</h1>
		<form action="index.php" method="post" id="add_product_form">
			<input type="hidden" name="action" value="add_products">
			<?php foreach ($errors as $error) : ?>
				<?php echo $error; ?>
			<?php endforeach; ?>
			<label>Category:</label>
			<select name="categoryID">
				<?php foreach ($categories as $category) : ?>
					<option value="<?php echo $category['categoryID']; ?>">
						<?php echo $category['categoryNAME']; ?>
					</option>
				<?php endforeach; ?>
			</select> <br>

			<label>Code:</label>
			<input type="input" name="code"> <br>

			<label>Name:</label>
			<input type="input" name="name"> <br>

			<label>List Price:</label>
			<input type="input" name="price"> <br>	

			<label>&nbsp;</label>
			<input type="submit" value="Add Product"> <br>	
		</form>
		<p><a href="index.php?action=list_products">View Product List</a></p>
	</div>
<?php include '../Views/footer.php'; ?>