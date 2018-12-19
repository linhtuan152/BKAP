<!--  <div class="breadcrumbs">

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
</div> -->
<?php  
$upload = '';
if(isset($_POST["addNew"])){
    if(isset($_FILES["image"]["name"])){
              // echo "<pre>";
              // print_r($_FILES["image"]);
              // die;
        if($_FILES["image"]["type"] =="image/jpeg" || $_FILES["image"]["type"] =="image/gif" || $_FILES["image"]["type"] =="image/png" || $_FILES["image"]["type"] =="image/jpg"){
            if($_FILES["image"]["error"]==0){
                    //lưu file vào thư mục trên server
                move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_FILES["image"]["name"]);
                $upload .='uploads/'. $_FILES["image"]["name"];
            }else{
                echo "Lỗi file ";
            }
        }else{
            echo "File không đúng yêu cầu";
        }
    }
    $tableName="tbl_products";
    $_POST["datecreate"] = date("Y-m-d H:i:s");
    $_POST['image'] =  $upload;
    save($tableName,$_POST);
    header("location:index.php?view=listproducts");
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
                            <h3>Thêm sản phẩm mới</h3>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
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
                                        <textarea name="description" id="description" cols="95" rows="10"></textarea>
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
             </div>
         </div>
     </div>
 </div>
</div>