
<?php  
	if(isset($_POST["addNew"])){
		include("PHPMailer/src/PHPMailer.php");
		include("PHPMailer/src/Exception.php");
		include("PHPMailer/src/SMTP.php");
		include("PHPMailer/src/POP3.php");
		$mail = new PHPMailer\PHPMailer\PHPMailer;

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

		//tạo ra thông tin cho body
		$body = "<table><tr>";
		$body .= "<th>#</th>";
		$body .= "<th>Ảnh sản phẩm</th>";
		$body .= "<th>Tên sản phẩm</th>";
		$body .= "<th>Đơn giá</th>";
		$body .= "<th>Số lượng</th>";
		$body .= "<th>Thành tiền</th></tr>";
		$i=0;
		foreach ($_SESSION["cart"] as $key=>$value) {
			$i++;
			$dataDetail["order_id"] = $id;
			$dataDetail["price"] = $value["price"];
			$dataDetail["product_id"] = $key;
			$dataDetail["number"] = $value["quanlity"];
			$dataDetail["date_create"] = $date;
			$dataDetail["status"] = 1;
			save('tbl_orderdetail',$dataDetail);

			$body .="<tr>";	
			$body .="<td>$i</td>";	
			$body .="<td><img src='".$value["image"]."' width='100' alt='' /></td>";	
			$body .="<td>".$value["name"]."</td>";	
			$body .="<td>".$value["price"]."</td>";	
			$body .="<td>".$value["quanlity"]."</td>";	
			$body .="<td>".$value["price"] * $value["quanlity"]."</td>";	
			$body .="</tr>";	
		}
		$body .= "</table>";
		//gửi meo
		try {
			$mail->SMTPDebug = 2; 
			$mail->CharSet = 'UTF-8';
			$mail->isSMTP();   
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true; 
			$mail->Username = 'php1810lm@gmail.com'; 
    		$mail->Password = 'qaz@@123'; 
    		$mail->SMTPSecure = 'tls';
    		$mail->Port = 587;
    		$mail->setFrom('system@abc.com', 'mail thông báo');

    		$mail->addAddress($post["email"], 'Dear Nang');
    		$mail->isHTML(true); 
    		$mail->Subject = 'Thông tin mua hàng';
    		$mail->Body    = $body;
    		$mail->send();
    		echo 'Message has been sent';

		}catch (Exception $e) {
		    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
		unset($_SESSION["cart"]);
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