<?php  
	ob_start();
	session_start();
	if(isset($_SESSION["cart"])){
		$id = $_POST["id"];
		$cart = $_SESSION["cart"];
		
		if(array_key_exists($id, $cart)){
			unset($cart[$id]);
		}
		$_SESSION["cart"] = $cart;
		$total = 0;
		foreach ($_SESSION["cart"] as $key=>$value) {
			$total +=$value['quanlity'];
		}
		echo $total;
	}
?>