<section id="cart">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title_page">
						<ul class="list-inline">
							<li><a href="index.html">Trang chủ</a></li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
							<li>Giỏ hàng</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row c_Detail">
				<div class="col-sm-9 col-sm-push-3">
					<div class="table-responsive img_cart" id="listCat">
						<table class="table table-bordered table-hover" id="tablecart">
							<tr >
								<th style="width: 5%;"class="text-center" >STT</th>
								<th style="width: 15%;" class="text-center">Ảnh sản phẩm</th>
								<th style="width: 25%;" class="text-center">Tên sản phẩm</th>
								<th style="width: 15%;" class="text-center">Đơn giá</th>
								<th style="width: 10%;" class="text-center">Số lượng</th>
								<th style="width: 15%;" class="text-center">Thành tiền</th>
								<th style="width: 5%;" class="text-center">Xóa</th>
							</tr>
							<form method="post" action="" id="myForm"></form>
							<?php 
								$total = 0; 
								if(isset($_SESSION["cart"])){
									foreach ($_SESSION["cart"] as $key=>$value) {
							?>
							<tr>	
								<td>1</td>
								<td><img style="height: 50px; width: 50px;margin-left: auto; margin-right: auto;" src="<?php echo $value["image"] ?>"  class="img-responsive text-center"  alt=""></td>
								<td><?php echo $value["name"] ?></td>
								<td class="text-danger"><?php echo number_format($value["price"],0,",","."); ?><sup><u>đ</u></sup></td>
								<td>
									<!-- <input type="number" name="" class="form-control"  min="2" value="2"> -->
									
									<input style="width: 60px;" type="text" id="quantity_<?php echo $key ?>" name="quantity_<?php echo $key ?>" onchange="updateCart(<?php echo $key ?>)"  value="<?php echo $value['quanlity']?>" min="1" >
									
								</td>                                
								<td class="text-danger">
									<?php 
										$totalItem = $value['quanlity']*$value["price"];
										$total +=$totalItem;
										echo number_format($totalItem,0,",","."); 
									?><sup><u>đ</u></sup>
								</td>
								<td><a href="javascript:void(0)" onclick="deleteItem(<?php echo $key ?>)"><i class="fa fa-trash-o"></i></a></td>
							</tr>
							<?php } } ?>
							<tr class="end">
								<!--<td>&nbsp;</td>-->
								<td colspan="4">
									<a href="product.html" class="btn btn-button">+ Mua thêm</a>
									
									<button class="btn btn-button add-quantity" name="all">Cập nhật</button>

									<a href="handle_cart.html?&action=deleteall" class="btn btn-button" onclick="return confirm('bạn có chắc chắn hủy đơn hàng này không? ')">Hủy đơn hàng</a>
								</td>
								<td class="text-right">
									Tổng cộng:                     
								</td>
								<td colspan="2" class="text-danger text-left">
									<strong><?php echo number_format($total,0,",","."); ?> <sup><u>đ</u></sup></strong>
								</td>
							</tr>
						</table>
					</div>
					<?php include("modules/checkout.php") ?>			
				</div>
				
				<div class="col-sm-3 col-sm-pull-9">
					<?php  
						include("category.php");
					?>
					
				</div>
			</div>
		</section>