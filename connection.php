<?php  
	$server = "localhost";//địa chỉ máy chủ cần kết nối
	$userName = "root";//tên đăng nhập vào máy chủ chứa CSDL
	$password = "";//mật khẩu theo tên đăng nhập tương ứng
	$dataBase = "ph1810lm";//tên CSDL cần làm việc

	$conn = @mysqli_connect($server,$userName,$password,$dataBase) or die("Lỗi kết nối");
	mysqli_set_charset($conn,"utf8");
?>