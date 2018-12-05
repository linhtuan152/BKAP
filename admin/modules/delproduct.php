<?php  

if(isset($_GET["id"])){
	$sqlDelete = "DELETE FROM tbl_products WHERE proid = ".$_GET["id"];
			// die($sqlDelete);
	mysqli_query($conn,$sqlDelete) or die("Lỗi xóa dsản phẩm");
	header("location:index.php?view=listproduct");
}

?>