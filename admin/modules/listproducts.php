<script language="JavaScript" type="text/javascript"> 
    function checkDelete(){ 
        return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');
    }
</script>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Danh sách sản phẩm</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">NGUYEN DUY</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">cat_id</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">ảnh</th>
                                <th scope="col">giá</th>
                                
                                <th scope="col">mô tả</th>
                                <th scope="col">metakeyword</th>
                                <th scope="col">metacsription</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">thời gian</th>
                                <th scope="col">Điều khiển</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                //viết câu truy vấn
                            $sqlSelect = "SELECT * FROM tbl_products";
                                    //thực thi truy vấn
                            $result =mysqli_query($conn,$sqlSelect);
                            $i=0;
                            while($row = mysqli_fetch_assoc($result)){
                                $i++;
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $i ?></th>
                                    <?php 
                                    $tmp = $row['catid'];
                                         $selectQuery = "SELECT distinct catname from tbl_products,tbl_categorys 
                                           where tbl_categorys.catid = tbl_products.catid AND tbl_products.catid = $tmp";
                                             $result1 = mysqli_query($conn,$selectQuery);
                                            $catname = mysqli_fetch_array($result1);

                                    ?>
                                    <td><?php echo $catname[0] ?></td>


                                    <td><?php echo $row["proname"]?></td>
                                    <td>
                                        <img src="../<?php echo $row["image"] ?>" alt="" width="120" height="80">
                                    </td>
                                    <td><?php echo $row["proprice"]?></td>
                                    
                                    <td><?php echo $row["description"]?></td>
                                    <td><?php echo $row["metakeyword"]?></td>
                                    <td><?php echo $row["metadescription"]?></td>
                                    <td>
                                        <?php echo ($row["status"])?"Hiển thị":"Ẩn" ?>
                                    </td>
                                    <td><?php echo ($row["datecreate"]); ?></td>
                                    <td>
                                        <a href="index.php?view=editproducts&id=<?php echo $row["proid"] ?>"><i class="fa fa-pencil"></i> Sửa</a><br>
                                        <a href="index.php?view=delproducts&id=<?php echo $row["proid"] ?>" onclick="return checkDelete()"><i class="fa fa-trash-o"></i> Xóa</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
