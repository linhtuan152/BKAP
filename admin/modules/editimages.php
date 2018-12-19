 <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Sửa hình ảnh</h1>
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
<?php  
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sqlSelect = "SELECT * FROM tbl_images WHERE img_id = $id";
    $result = mysqli_query($conn,$sqlSelect) or die("Lỗi truy vấn sửa");
    $rowEdit = mysqli_fetch_row($result);

}
if(isset($_POST["addNew"])){
    $proid = $_POST["proid"];
    $url = $_POST["url"];
    $status = $_POST["status"];
    $datecreate = date("Y-m-d H:i:s");

        // $sqlInsert = "INSERT INTO tbl_categorys(catname,image,`status`,datecreate)";
        // $sqlInsert .= " VALUES('$catName','$image','$status','$datecreate')";

    $sqlUpdate = "UPDATE tbl_images SET proid = '$proid',url='$url',`status`='$status' WHERE img_id=".$_GET["id"];

    mysqli_query($conn,$sqlUpdate) or die("Lỗi câu truy vấn");
    header("location:index.php?view=listimages");
}
?>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div id="pay-invoice">
                            <div class="card-body">
                                <form action="" method="post" novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1"></label>
                                        <input id="proid" value="<?php echo $rowEdit[1] ?>" name="proid"  type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1"></label>
                                        <input id="url" value="<?php echo $rowEdit[2] ?>" name="url"  type="text" class="form-control"/>
                                    </div>

                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label for="checkbox1" class="form-check-label ">
                                                <input type="checkbox" id="status" <?php echo ($rowEdit[3])?"checked":""; ?> name="status" value="1" class="form-check-input">Trạng thái
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                     <input type="submit" value="Cập nhật" name="addNew" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>