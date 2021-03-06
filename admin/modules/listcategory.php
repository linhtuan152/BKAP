  <script language="JavaScript" type="text/javascript"> 
    function checkDelete(){ 
        return confirm('Bạn có chắc chắn muốn xóa danh mục này?'); 
    } 
</script>
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
                    <li class="active">NGUYEN DUY</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                 
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Thời gian</th>
                                <th scope="col">Điều khiển</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                //viết câu truy vấn
                            $sqlSelect = "SELECT * FROM tbl_categorys";
                                    //thực thi truy vấn
                            $result =mysqli_query($conn,$sqlSelect);
                            $i=0;
                            while($row = mysqli_fetch_assoc($result)){
                                $i++;
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $i ?></th>
                                    <td><?php echo $row["catname"]?></td>
                                    <td>
                                        <img src="../<?php echo $row["image"] ?>" alt="" width="120" height="80">
                                    </td>
                                    <td>
                                        <?php echo ($row["status"])?"Hiển thị":"Ẩn" ?>
                                    </td>
                                    <td><?php echo ($row["datecreate"]); ?></td>
                                    <td>
                                        <a href="index.php?view=editcategory&id=<?php echo $row["catid"] ?>"><i class="fa fa-pencil"></i> Sửa</a><br>

                                        <a href="index.php?view=delcategory&id=<?php echo $row["catid"] ?>" onclick="return checkDelete()"><i class="fa fa-trash-o"></i> Xóa</a>
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
