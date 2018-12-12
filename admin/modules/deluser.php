<?php  

if(isset($_GET["id"])){
	$sqlDelete = "DELETE FROM users WHERE user_id = ".$_GET["id"];
			// die($sqlDelete);
	mysqli_query($conn,$sqlDelete) or die("Lỗi xóa user");
	header("location:index.php?view=listuser");
}

?>