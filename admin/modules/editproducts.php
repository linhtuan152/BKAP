 <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Sửa sản phẩm</h1>
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
    $sqlSelect = "SELECT * FROM tbl_products WHERE proid = $id";
    $result = mysqli_query($conn,$sqlSelect) or die("Lỗi truy vấn sửa");
    $rowEdit = mysqli_fetch_row($result);

}

// if(isset($_POST["addNew"])){
//     $proName = $_POST["proname"];
//     $image = $_POST["image"];
//     $catid = $_POST["catid"];
//     $proprice = $_POST["proprice"];
//     $description = $_POST["description"];
//     $metakeyword = $_POST["metakeyword"];
//     $metadescription = $_POST["metadescription"];
//     $datecreate = date("Y-m-d H:i:s");
//     $status = $_POST["status"];


    //$sqlInsert = "INSERT INTO tbl_products(catid,proName,proprice,image,description,metakeyword,metadescription,`status`,datecreate)";
    //$sqlInsert .= "VALUES('$catid','$proName','$proprice','$image','$description','$metakeyword','$metadescription','$status','$datecreate')";
    // $sqlUpdate = "UPDATE tbl_products SET catid = '$catid', proname = '$proName', proprice = '$proprice', image = '$image', description = '$description', metakeyword = '$metakeyword', metadescription = '$metadescription', `status` = '$status', datecreate = '$datecreate' WHERE proid = ".$_GET["id"];

    // mysqli_query($conn,$sqlUpdate) or die("Lỗi câu truy vấn");
    // header("location:index.php?view=listproducts");
$upload = '';
if(isset($_POST["addNew"])){
    if(isset($_FILES["image"]["name"])){
            // echo "<pre>";
            // print_r($_FILES["image"]);
            // die;
        if($_FILES["image"]["type"] =="image/jpeg" ||$_FILES["image"]["type"] =="image/gif" || $_FILES["image"]["type"] =="image/png" || $_FILES["image"]["type"] =="image/jpg"){
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
    $condition = " proid=".$_GET["id"];
    $_POST["datecreate"] = date("Y-m-d H:i:s");
    $_POST['image'] =  $upload;
    update($tableName,$_POST,$condition);
    header("location:index.php?view=listproducts");
}

?>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Credit Card -->
                        <div id="pay-invoice">
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Tên sản phẩm</label>
                                        <input id="proname" value="<?php echo $rowEdit[2] ?>" name="proname"  type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Ảnh</label>
                                        <input id="image" value="<?php echo $rowEdit[4] ?>" name="image" type="file" />
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
                                        <label for="cc-payment" class="control-label mb-1">Gía</label>
                                        <input id="proprice" value="<?php echo $rowEdit[3] ?>" name="proprice"  type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Mô tả</label>
                                        <input id="description" value="<?php echo $rowEdit[5] ?>" name="description"  type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">metakeyword</label>
                                        <input id="metakeyword" value="<?php echo $rowEdit[6] ?>" name="metakeyword"  type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">metadescription</label>
                                        <input id="metadescription" value="<?php echo $rowEdit[7] ?>" name="metadescription"  type="text" class="form-control"/>
                                    </div>
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label for="checkbox1" class="form-check-label ">
                                                <input type="checkbox" id="status" <?php echo ($rowEdit[8])?"checked":""; ?> name="status" value="1" class="form-check-input" />Trạng thái
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