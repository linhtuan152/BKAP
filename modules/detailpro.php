<?php 
$condition="";
if(isset($_GET["id"])){
	$condition .= "WHERE proid = ".$_GET["id"];
}
$dataProduct = getAll("tbl_products","*",$condition);
	// $count = count(mysqli_fetch_row($dataProduct));
	// if($count){
$i=0;
while($rowpro = mysqli_fetch_assoc($dataProduct)){
	$i++;
	?>	
	<div class="container">
		<div class="col-sm-9 col-sm-push-3">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Tên sản phẩm</th>
						<th>Giá</th>
						<th>Mô tả</th>
						<th>Ảnh</th>
						<th>Ngày viết</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $rowpro['proname'] ?></td>
						<td><?php echo number_format($rowpro["proprice"],0,",","."); ?> VND</td>
						<td><?php echo $rowpro['description'] ?></td>
						<td>
							<img src="<?php echo $rowpro["image"] ?>" alt="" width="100">
						</td>
						<td><?php echo $rowpro['datecreate'] ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-sm-3 col-sm-pull-9">
			<?php  
			include("category.php");
			?>
		</div>
	</div>
	<?php } ?>