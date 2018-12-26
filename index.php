<?php  
	ob_start();
	session_start();
	include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Restaurant</title>
	<script type="text/javascript" src="js/jquery-2.2.4.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="images/png" href="images/logo_banner.png">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">

	<link href="css/baguetteBox.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Tinos:400,400i,700&amp;subset=vietnamese" rel="stylesheet">
	<!--  -->
	<!--  -->
	
</head>
<body>
	<?php  
		include("modules/header.php");
		if(isset($_GET["view"])){
			$view = $_GET["view"];
			$file ="modules/".$view.".php";
			if(file_exists($file)){
				include($file);
			}else{
				echo "không tìm thấy yêu cầu này";
			}
			
			// switch ($view) {
			// 	case "introduce":
			// 		include ("modules/introduce.php");
			// 		break;
			// 	case "product":
			// 		include ("modules/product.php");
			// 		break;
			// }
		}else{
			include("modules/slide.php");
			include("modules/buynow.php");
			include("modules/buffet.php");
			include("modules/banner.php");
			include("modules/cocktail.php");
			include("modules/banner3.php");
			include("modules/banner4.php");
			include("modules/food.php");
			include("modules/news.php");
		}
		include("modules/footer.php");
	?>
	<script src="js/jquery-2.2.4.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/eat.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel({
				navigation : true,
				slideSpeed : 300,
				paginationSpeed : 400,
				singleItem : true

			});

			$("#owl-demo1").owlCarousel({
				navigation : true,
				slideSpeed : 300,
				paginationSpeed : 400,
				singleItem : false,
				itemsMobile : [479, 3],
				items: 4

			});
		});

		function addCart(id){
			//post lên xử lý mua hàng
			$.post('cart.php', {'id':id}, function(data) {
				$("#cart").text(data);
				//lây thông tin 
				img = $("#img_"+id).attr('src');
				name = $("#namePro_"+id).text();
				price = $("#price_"+id).text();
				//gán lại thông tin
				$("#showCart").attr('src',img);
				$("#showName").text(name);
				$("#showPrice").text(price);
				//how modal
				$('#cartModal').modal();
			});
		}

		function updateCart(id){
			number = $("#quantity_"+id).val();
			$.post('cartupdate.php', {'id':id,'number':number}, function(data) {
				$("#cart").text(data);
				$("#listCat").load("index.php?view=cart #tablecart"); 
			});
		}

		function deleteItem(id){
			ok = confirm('bạn có chắc chắn xóa không? ');
			if(ok){
				$.post('delete.php', {'id':id}, function(data) {
					$("#cart").text(data);
					$("#listCat").load("index.php?view=cart #tablecart"); 
				});
			}
		}
	</script> 

	<div class="modal fade bs-example-modal-sm" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	  <div class="modal-dialog modal-sm" role="document">
	    <div class="modal-content">
	       <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Thông tin mua hàng</h4>
		      </div>
		      <div class="modal-body">
		      	<div class="row">
			        <div class="col-md-6">
			        	<img src="" alt="" id="showCart">
			        </div>
			        <div class="col-md-6">
			        	<p id="showName"></p>
			        	<p id="showPrice"></p>
			        </div>
		        </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
	    </div>
	  </div>
	</div>
</body>

</html>