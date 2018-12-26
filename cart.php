<?php  
	ob_start();
	session_start();
	include("connection.php");
	include("function.php");
	if(isset($_POST["id"])){
		$id = $_POST["id"];
		$condition = " WHERE proid = $id";
		$data = getById("tbl_products","*",$condition);

		if(!isset($_SESSION["cart"])){
			$cart[$id] = array(
				'name'=>$data[2],
				'image'=>$data[4],
				'price'=>$data[3],
				'quanlity'=>1
			);
		}else{
			$cart = $_SESSION["cart"];
			if(array_key_exists($id, $cart)){
				$cart[$id] = array(
					'name'=>$cart[$id]["name"],
					'image'=>$cart[$id]["image"],
					'price'=>$cart[$id]["price"],
					'quanlity'=>$cart[$id]["quanlity"] +1
				);
			}else{
				$cart[$id] = array(
					'name'=>$data[2],
					'image'=>$data[4],
					'price'=>$data[3],
					'quanlity'=>1
				);
			}
		}

		$_SESSION["cart"] = $cart;

		$total = 0;
		foreach ($_SESSION["cart"] as $value) {
			$total += $value["quanlity"];
		}
		echo $total;
	}
?>