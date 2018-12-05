 <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Danh sách danh mục</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <!-- <div class="card-body"> -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Key word</th>
                                    <th scope="col">Meta description</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Trạng thái</th>
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
                                        <td><?php echo $row["proname"]?></td>
                                        <td><?php echo $row["proprice"]?></td>
                                        <td><?php echo $row["description"]?></td>
                                        <td><?php echo $row["metakeyword"]?></td>
                                        <td><?php echo $row["metadescription"]?></td>
                                        <td>
                                            <img src="<?php echo $row["image"] ?>" alt="">
                                        </td>
                                        <td>
                                            <?php echo ($row["status"])?"Hiển thị":"Ẩn" ?>
                                        </td>
                                        <td>
                                            <a href="index.php?view=editproduct&id=<?php echo $row["proid"] ?>"><i class="fa fa-pencil"></i> Sửa</a>
                                            <a href="index.php?view=delproduct&id=<?php echo $row["proid"] ?>"><i class="fa fa-trash-o"></i> Xóa</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div> <!-- .content -->
