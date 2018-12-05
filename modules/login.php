<?php  
	if(isset($_SESSION["userInfo"])){
		header("location:index.php");
	}
	$userName="";
	$password="";
	$checked = false;
	//kiểm tra người dùng đăng nhập
	if(isset($_POST["login"])){
		//nếu người dùng chọn lưu
		$userName = $_POST["userName"];
		$password = $_POST["pass"];
		if(isset($_POST["remember"])){
			//thiết lập cookie
			setcookie("userName",$userName);
			setcookie("password",$password);			
		}
		//khai báo mảng
		$account = array("user"=>"admin",'pass'=>"123456");
		//kiểm tra giá trị người dung nhập form login trùng với giá trị trong mảng
		if($userName==$account["user"] && $password == $account["pass"]){
			//khởi tạo session
			$_SESSION["userInfo"] = $account;
			//chuyển về trang chủ
			header("location:index.php");
		}
	}
	//kiểm tra xem có cookie hay không
	if(isset($_COOKIE["userName"]) && isset($_COOKIE["password"])){
		//gán cookie cho biến
		$userName = $_COOKIE["userName"];
		$password = $_COOKIE["password"];
		$checked = true;
	}
?>
<section id="login">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
				<div class="register">
					<h4>Đăng nhập</h4>
					<form method="post" action="">
						<div class="form-group">
							<input type="text" class="form-control" value="<?php echo $userName; ?>" id="userName" name="userName" placeholder="Tài khoản" required="required">
						</div>
						<div class="form-group" data-validate="Enter password">
							<input type="password" class="form-control" id="pass" value="<?php echo $password; ?>" name="pass" placeholder="Mật khẩu" required="required">
						</div>
						<div class="checkbox">
						    <label>
						      <input type="checkbox" name="remember" <?php echo ($checked)?"checked":""; ?> id="remember" value="1" /> Check me out
						    </label>
						</div>
						<div class="form-group text-center">
							<input type="submit" class="btn btn-button" name="login" value="Đăng nhập" />
						</div>
						<p class="text-center">Bạn chưa có tài khoản? <a href="register.html">Đăng kí</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>