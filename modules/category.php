<div class="sidebar">
	<div class="sb_item">
		<h4>Danh mục</h4>
		<?php  
			$dataCat = getAll("tbl_categorys");
			$i=0;
            while($row = mysqli_fetch_assoc($dataCat)){
                $i++;
		?>
		<ul class="list-unstyled menu1">
			<li><a href="index.php?view=product&id=<?php echo $row["catid"]?>"><?php echo $row["catname"] ?></a></li>
		</ul>
		<?php } ?>
	</div>
</div>