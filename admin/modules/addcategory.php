 <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Thêm mới danh mục</h1>
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
        // $catName = $_POST["catname"];
        // $image = $_POST["image"];
        // $status = $_POST["status"];
        // $datecreate = date("Y-m-d H:i:s");

        // $sqlInsert = "INSERT INTO tbl_categorys(catname,image,`status`,datecreate)";
        // $sqlInsert .= " VALUES('$catName','$image','$status','$datecreate')";

        //mysqli_query($conn,$sqlInsert) or die("Lỗi câu truy vấn");
        $tableName="tbl_categorys";
        $_POST["datecreate"] = date("Y-m-d H:i:s");
        save($tableName,$_POST);
        header("location:index.php?view=listcategory");
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
                                        <label for="cc-payment" class="control-label mb-1">Tên danh mục</label>
                                        <input id="catname" name="catname"  type="text" class="form-control"/>
                                    </div>
                                   <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Ảnh</label>
                                        <input id="image" name="image" type="file" />
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