<?php  
	ob_start();
	session_start();
	include("connection.php");
	include("function.php");
	if(isset($_POST["id"]) && isset($_POST["number"])){
		$id = $_POST["id"];
		$number = $_POST["number"];
		if(isset($_SESSION["cart"])){
			$cart = $_SESSION["cart"];
			if(array_key_exists($id, $cart)){
				if($number){
					$cart[$id]= array(
						'name'=>$cart[$id]["name"],
						'image'=>$cart[$id]["image"],
						'price'=>$cart[$id]["price"],
						'quanlity'=>$number
					);
				}else{
					unset($cart[$id]);
				}
			}
			$_SESSION["cart"] = $cart;
			$total = 0;
			foreach ($_SESSION["cart"] as $key=>$value) {
				$total +=$value['quanlity'];
			}
			echo $total;
		}
	}
?>