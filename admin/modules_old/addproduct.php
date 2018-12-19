 <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Thêm mới sản phẩm</h1>
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
    if(isset($_POST["addNew"])){
        $tableName="tbl_products";
        $_POST["datecreate"] = date("Y-m-d H:i:s");
        save($tableName,$_POST);
        header("location:index.php?view=listproduct");
    }
?>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Credit Card -->
                        <div id="pay-invoice">
                            <div class="card-body">
                                <form action="" method="post" novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Tên SP</label>
                                        <input id="proname" name="proname"  type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <?php  
                                            $sqlSelectCat = "SELECT * FROM tbl_categorys";
                                            //thực thi truy vấn
                                            $resultCat =mysqli_query($conn,$sqlSelectCat);
                                            
                                        ?>
                                        <label for="cc-payment" class="control-label mb-1">Danh mục</label>
                                        <select name="catid" id="catid">
                                            <option value="">--Chọn Danh mục--</option>
                                            <?php while($rowCat = mysqli_fetch_assoc($resultCat)){ ?>
                                                <option value="<?php echo $rowCat["catid"] ?>"><?php echo $rowCat["catname"] ?></option>
                                            <?php } ?>
                                        </select>
                                        <!-- <input id="proname" name="proname"  type="text" class="form-control"/> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Ảnh</label>
                                        <input id="image" name="image" type="file" />
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Giá</label>
                                        <input id="proprice" name="proprice"  type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Mô tả</label>
                                        <textarea name="description" id="description" cols="85" rows="10"></textarea>
                                        <!-- <input id="proprice" name="proprice"  type="text" class="form-control"/> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">meta Keyword</label>
                                        <input id="metakeyword" name="metakeyword"  type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">meta Description</label>
                                        <input id="metadescription" name="metadescription"  type="text" class="form-control"/>
                                    </div>
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label for="checkbox1" class="form-check-label ">
                                                <input type="checkbox" id="status" name="status" value="1" class="form-check-input">Trạng thái
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
                </div> <!-- .card -->
            </div>
        </div> <!-- .content -->
    </div>
</div>