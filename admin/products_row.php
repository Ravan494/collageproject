<?php 
	include 'include/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
		$stmt = $conn->prepare("SELECT *, product.ProductID AS prodid, product.Title AS prodname, category.Name AS catname FROM product LEFT JOIN category ON category.CategoryID=products.CategoryID WHERE products.ProductID=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		
	

		echo json_encode($row);
	}
?>