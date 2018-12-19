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
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/eat.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
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
	</script> 
</body>

</html>