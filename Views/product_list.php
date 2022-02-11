<?php include '../Views/header.php'; ?>
	<div id="main">
		<h1>Product List</h1>

		<div id="sidebar">
			<h2>Categories</h2>
			<ul class="nav">
				<?php foreach ($categories as $category) : ?>
					<li>
						<a href=".?categoryID=<?php echo $category['categoryID']; ?>">
							<?php echo $category['categoryNAME']; ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>

		<div id="content">
			<h2><?php echo $categoryNAME; ?></h2>
			<table>
				<tr>
					<th>Code</th>
					<th>Name</th>
					<th class="right">Price</th>
					<th>&nbsp;</th>				
				</tr>
				<?php foreach ($products as $product) : ?>
					<tr>
						<td><?php echo $product['productCode']; ?></td>
						<td><?php echo $product['productName']; ?></td>
						<td class="right"><?php echo $product['listPrice']; ?></td>
						<td>
							<form action="." method="post">
								<input type="hidden" name="action" 
									   value="delete_products">
								<input type="hidden" name="productID"
									   value="<?php echo $product['productID']; ?>">
								<input type="hidden" name="categoryID" 
									   value="<?php echo $product['categoryID']; ?>">
								<input type="submit" value="Delete">
							</form>
						</td>
					</tr>						
				<?php endforeach; ?>
			</table>
			<p><a href="?action=show_add_form">Add Product</a></p>
		</div>
	</div>
<?php include '../Views/footer.php'; ?>