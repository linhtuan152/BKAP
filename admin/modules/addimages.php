<!--  <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Thêm mới images</h1>
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
</div> -->
<?php  
if(isset($_POST["addNew"])){
        // echo "<pre>";
        // print_r($_POST);
        // die;
    $tableName="tbl_images";
    $_POST["datecreate"] = date("Y-m-d H:i:s");
    save($tableName,$_POST);
    header("location:index.php?view=listimages");
}
?>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">

                        <div id="pay-invoice">
                            <h3>Thêm hình ảnh cho sản phẩm</h3>
                            <div class="card-body">
                                <form action="" method="post" novalidate="novalidate">
                                    <div class="form-group">
                                        <?php  
                                        $sqlSelectPro = "SELECT * FROM tbl_products";
                                            //thực thi truy vấn
                                        $resultPro =mysqli_query($conn,$sqlSelectPro);

                                        ?>
                                        <label for="cc-payment" class="control-label mb-1">Sản phẩm</label>
                                        <select name="proid" id="proid">
                                            <option value="">--Chọn sản phẩm--</option>
                                            <?php while($rowPro = mysqli_fetch_assoc($resultPro)){ ?>
                                                <option value="<?php echo $rowPro["proid"] ?>"><?php echo $rowPro["proname"] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">URL</label>
                                        <input id="url" name="url"  type="text" class="form-control"/>
                                    </div>

                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label for="checkbox1" class="form-check-label ">
                                                <input type="checkbox" id="status" name="status" value="1" class="form-check-input" />Trạng thái
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                       <input type="submit" value="Thêm mới" name="addNew" />
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