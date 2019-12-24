<?php
	include ("db.php");
	session_start();
	$product = array("Product A", "Product B", "Product C");
	$price = array(1500, 1000, 500);
	// Nếu chưa có giỏ hàng nào
	if (!isset($_SESSION["cart"]))
	{
		$_SESSION["total"] = 0;
		for ($i = 0; $i < count($product) ; $i++) {
			$_SESSION["quantity"][$i] = 0;
			$_SESSION["amount"][$i] = 0;
		}
	}
	$_SESSION["total"] = 0;
	?>