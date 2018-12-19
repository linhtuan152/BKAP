<section id="product">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="banner_product">
						<img src="images/banner_product.jpg" class="img-responsive">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="title_page">
						<ul class="list-inline">
							<li><a href="index.html">Trang chủ</a></li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
							<li>Sản phẩm</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9 col-sm-push-3">
					<div class="row">
						<div class="col-sm-12">
							<div class="title_name">
								<h4>Tất cả sản phẩm</h4>
							</div>
						</div>
					</div>
					<div class="row">
						<?php 
							$condition="";
							if(isset($_GET["id"])){
								$condition .= "WHERE catid = ".$_GET["id"];
							}
							$dataProduct = getAll("tbl_products","*",$condition);
							// $count = count(mysqli_fetch_row($dataProduct));
							// if($count){
							$i=0;
                            while($rowpro = mysqli_fetch_assoc($dataProduct)){
                                $i++;
						?>
						<div class="col-sm-4">
							<div class="pro_item hover8">
								<div class="pro_img hover_img">
									<a href="index.php?view=detailpro&id=<?php echo $rowpro["proid"] ?>">
										<img src="<?php echo $rowpro["image"] ?>" class="img-responsive anhsp" />
									</a>
								</div>
								<div class="pro_name">
									<a href="index.php?view=detailpro&id=<?php echo $rowpro["proid"] ?>"><?php echo $rowpro["proname"] ?></a>
								</div>
								<div class="pro_price">
									<ul class="list-inline">
										<li class="new_price"><?php echo number_format($rowpro["proprice"],0,",","."); ?> VNĐ</li>
										<!-- <li class="old_price">40,000 VNĐ</li> -->
									</ul>
								</div>

								<!-- <div class="sale">
									-25%
								</div> -->
								<ul class="list-unstyled icon_lk">
									<li><a href="index.php?view=detailpro&id=<?php echo $rowpro["proid"] ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
									<li><a href="handle_cart.html?id=89&action=add" class="add-cart"><i class="fa fa-shopping-cart " aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<?php //}
						// }else{
						// 	echo "<h1>Chưa có sản phẩm nào trong danh mục này</h1>";
						}?>
					</div>
					<!-- <div class="row text-center p_navigation">
						<nav aria-label="Page navigation">
							<ul class="pagination">
								<li>
									<a href="product.html?page=1" aria-label="Previous">
										<sppro aria-hidden="true">&laquo;</sppro>
									</a>
								</li>
								<li class="active"><a href="product.html?page=1">1</a></li>
								<li ><a href="product.html?page=2">2</a></li>
								<li ><a href="product.html?page=3">3</a></li>
								<li>
									<a href="product.html?page=2" aria-label="Next">
										<sppro aria-hidden="true">&raquo;</sppro>
									</a>
								</li>
							</ul>
						</nav>
					</div> -->
				</div>
				<div class="col-sm-3 col-sm-pull-9">
					<?php  
						include("category.php");
					?>
				</div>
			</div>

		</section>