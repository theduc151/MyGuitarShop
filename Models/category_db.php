<?php 
	function get_categories() {
		global $db;
		$query = "select * from categories 
				  order by categoryID";
		$result = $db->query($query);
		return $result;
	}

	function get_category_name($categoryID) {
		global $db;
		$query = "select * from categories 
				  where categoryID = $categoryID";
		$category = $db->query($query);
		$category = $category->fetch();
		$categoryNAME = $category['categoryNAME'];
		return $categoryNAME;
	}
?>