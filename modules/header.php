<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="header_top">
						<div class="row">
							<div class="col-sm-5 hidden-xs">
								<ul class="list-inline ht_left">
									<li><i class="fa fa-phone" aria-hidden="true"></i> Hotline: 01676.819.115</li>
								</ul>
							</div>
							<div class="col-sm-7">
								<ul class="list-inline ht_right">
									<?php  
										if(isset($_SESSION["userInfo"])){
										?>
										<li>
											<a href="index.php?view=profile">
												<i class="fa fa-user" aria-hidden="true"></i> Chào:<?php echo $_SESSION["userInfo"]["user"]; ?>
											</a>
										</li>
										<li>
											<a href="index.php?view=logout">
												<i class="fa fa-user" aria-hidden="true"></i>Thoát
											</a>
										</li>
										<?php
										}else{
									?>
										<li>
											<a href="index.php?view=login">
												<i class="fa fa-user" aria-hidden="true"></i> Đăng nhập
											</a>
										</li>
										<li><a href="register.html"><i class="fa fa-plus" aria-hidden="true"></i> Đăng kí</a></li>
									<?php } ?>
									<?php 
										$total = 0; 
										if(isset($_SESSION["cart"])){
											foreach ($_SESSION["cart"] as $value) {
												$total += $value["quanlity"];
											}
										}
									?>
									<li id="qty"><a href="index.php?view=cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng <span id="cart"><?php echo $total; ?></span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="header_center">
						<div class="row">
							<div class="col-sm-4">
								<div class="logo">
									<a href="index.html"><img src="images/logo_1.jpg" class="img-responsive"></a>
								</div> 
							</div>
							<div class="col-sm-4">
								
							</div>
							<div class="col-sm-4 hidden-xs">
								<div class="search">
									<div class="custom-search-input">
										<form action="search.html" method="GET" >
											<div class="input-group col-md-12">
												<input type="text" class="form-control" name="nameproduct" placeholder="Nhập tìm kiếm" required="required" />
												<span class="input-group-btn">
													<button class="btn btn-info" type="submit">
														<i class="glyphicon glyphicon-search"></i>
													</button>
												</span>
											</div>
										</form>
									</div>
								</div>
								<div class="link_lk">
									<ul class="list-inline">
										<li><a class="fb" href="https://www.facebook.com/Food-grami-1963427947009392/?modal=admin_todo_tour"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a class="tw" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a class="go" href=""><i class="fa fa-google" aria-hidden="true"></i></a></li>
										<li><a class="yu" href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<nav>
						<div id='cssmenu'>
							<ul>
								<li class="active"><a href='index.php'>Trang chủ</a></li>
								<li><a href='index.php?view=introduce'>Giới thiệu</a></li>
								<li><a href='index.php?view=product'>Thực đơn</a>

								</li>
								<li><a href='index.php?view=category'>Tin tức</a></li>
								<li class='has-sub'><a href='javascript:void(0);'>Thư viện</a>
									<ul>
										<li class=''><a href='listAlbums.html'>Albums</a></li>
										<li class=''><a href='listVideos.html'>Videos</a></li>
									</ul>
								</li>
								<li><a href='index.php?view=contact'>Liên hệ</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>