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
    if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sqlSelect = "SELECT * FROM tbl_categorys WHERE catid = $id";
    $result = mysqli_query($conn,$sqlSelect) or die("Lỗi truy vấn sửa");
    $rowEdit = mysqli_fetch_row($result);
    }
    if(isset($_POST["addNewPro"])){
        $proname = $_POST["proname"];
        $price = $_POST['proprice'];
        $description = $_POST['description'];
        $metakeyword = $_POST['metakeyword'];
        $metadescription = $_POST['metadescription'];


        $image = $_POST["image"];
        $status = $_POST["status"];
        $datecreate = date("Y-m-d H:i:s");

        $sqlInsert = "INSERT INTO tbl_products(proname,image,`status`,datecreate,description,metadescription)";
        $sqlInsert .= " VALUES('$proname','$image','$status','$datecreate','$metakeyword','$description')";

        mysqli_query($conn,$sqlInsert) or die("Lỗi câu truy vấn");
        header("location:index.php?view=listproduct");
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
                                <form action="" method="post" novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Tên sản phẩm</label>
                                        <input id="proname" name="proname"  type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Giá tiền</label>
                                        <input id="proprice" name="proprice"  type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Mô tả</label>
                                        <input id="description" name="description"  type="text" class="form-control"/>
                                    </div>
                                   <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Ảnh</label>
                                        <input id="image" name="image" type="file" />
                                    </div> 
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Key word</label>
                                        <input id="metakeyword" name="metakeyword" type="text" class="form-control" />
                                    </div>    
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Meta des</label>
                                        <input id="metadescription" name="metadescription" type="text" class="form-control" />
                                    </div>
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label for="checkbox1" class="form-check-label ">
                                                <input type="checkbox" id="status" name="status" value="1" class="form-check-input">Trạng thái
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                       <input type="submit" value="Thêm mới" name="addNewPro" />
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