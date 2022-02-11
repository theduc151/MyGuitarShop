<?php 
	require('../Models/database.php');
	require('../Models/product_db.php');
	require('../Models/category_db.php');

	if (isset($_POST['action'])) {
		$action = $_POST['action'];
	} elseif (isset($_GET['action'])) {
		$action = $_GET['action'];
	} else {
		$action = 'list_products';
	}

	$errors = array();

	switch ($action) {
		case 'list_products':
			$categoryID = $_GET['categoryID'];
			if (!isset($categoryID)) {
				$categoryID = 01;
			}
			$categories = get_categories();
			$categoryNAME = get_category_name($categoryID);
			$products = get_products_by_category($categoryID);
			include('../Views/product_list.php');
			break;
		
		case 'delete_products':
			$productID = $_POST['productID'];
			$categoryID = $_POST['categoryID'];
			delete_product($productID);
			header("Location: .?categoryID=$categoryID");
			break;
		
		case 'show_add_form':
			$categories = get_categories();
			include('../Views/product_add.php');
			break;
		
		case 'add_products':
			$categoryID = $_POST['categoryID'];
			$code = $_POST['code'];
			$name = $_POST['name'];
			$price = $_POST['price'];

			if (empty($code) || empty($name) || empty($price)) {
				$errors[] = 'Invalid product data. Check all fields and try again.';
			} else {
				add_product($categoryID, $code, $name, $price);
				header("Location: .?categoryID=$categoryID");
			}
			break;
	}
?>