<?php  
	if(isset($_POST["addNew"])){
		$post =$_POST;
		unset($post['content']);

		$table = "users";
		$field="*";

		$characters = 'abcdefghijklmnopqrstuvwxyz';
		$charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < 8; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
		
		$password =$randomString;

		$condition= " WHERE email = '".$post["email"]. "' AND mobile='".$post["mobile"]."'";
		$check = getById($table,$field,$condition);
		// echo count($check);
		// die("Stop");
		$post["user_name"] = $randomString;
		$post["password"] = $randomString;

		if(count($check)  == 0 ){
			$id = save($table,$post);	
		}else{
			$id = $check[0];
		}

		$noidung = $_POST["content"];
		$total = 0;
		$date = date("Y-m-d H:i:s");

		foreach ($_SESSION["cart"] as $key=>$value) {
			$totalItem = $value['quanlity']*$value["price"];
			$total +=$totalItem;
		}
		
		$data["user_id"] = $id;
		$data["total"] = $total;
		$data["date_create"] = $date;
		$data["noidung"] = $noidung;
		$id = save('tbl_orders',$data);	
	}
?>
<div class="panel_container">
	<h3>Thông tin đặt hàng</h3>
	<p>Vui lòng điền đầy đủ và chính xác thông tin để chúng tôi hoàn thành đơn hàng!</p>
	<form class="form-horizontal" action="" method="post">
		<div class="form-group">
			<div class="col-sm-6">
				<input type="text" name="full_name"  class="form-control" placeholder="Họ và tên (Bắt buộc)" required="">
			</div>
			<div class="col-sm-6">
				<input type="text" name="mobile" min="0" class="form-control" required="" placeholder="Điện thoại (Bắt buộc)">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-6">
				<input type="email" name="email" class="form-control" required="" placeholder="Email (Bắt buộc)">
			</div>
			<div class="col-sm-6">
				<input type="text" name="address" class="form-control" placeholder="Địa chỉ">
			</div>
		</div>
		<div class="form-group">  
			<div class="col-sm-12">
				<textarea type="text" class="form-control" name="content" placeholder="Nội dung" rows="5"></textarea>   
			</div>
		</div>
		<div class="text-center">
			<button type="submit" name="addNew" class="btn btn-button">Đặt hàng</button>
		</div>
	</form>
</div>