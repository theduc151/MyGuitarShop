<?php
	function get_products_by_category ($categoryID) {
		global $db;
		$query = "select * from products
				  where products.categoryID = '$categoryID'
				  order by productID";
		$products = $db->query($query);
		return $products;
	}

	function get_product($productID) {
		global $db;
		$query = "select * from products
				  where productID = '$productID'";
		$product = $db->query($query);
		$product = $product->fetch();
		return $product;
	}

	function add_product($categoryID, $code, $name, $price){
		global $db;
		$query = "insert into products
						(categoryID, productCode, productName, listPrice)
				  values  
				  		('$categoryID', '$code', '$name', '$price')";
		$db->exec($query);
	}

	function delete_product($productID){
		global $db;
		$query = "delete from products
				  where productID = '$productID'";
		$db->exec($query);		
	}
?>