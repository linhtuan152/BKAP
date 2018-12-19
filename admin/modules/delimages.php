<?php 
	if (isset($_GET["id"])) {
		$sqlDelete = "DELETE FROM tbl_images WHERE img_id = ".$_GET["id"];

		mysqli_query($conn,$sqlDelete) or die("Lỗi xóa danh mục");
		header("location:index.php?view=listimages");
	}
 ?>