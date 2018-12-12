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
if(isset($_POST["addNewUser"])){
    $username = $_POST["username"];
    $fullname = $_POST['fullname'];
    $pass = $_POST['pass'];
    $mail = $_POST['mail'];
    $gender = $_POST['gender'];


    $address = $_POST["address"];
    $desscription = $_POST["desscription"];

    $sqlInsert = "INSERT INTO users(user_name,full_name,`password`,email,gender,address,desscription)";
    $sqlInsert .= " VALUES('$username','$fullname','$pass','$mail','$gender','$address','$desscription')";

    mysqli_query($conn,$sqlInsert) or die("Lỗi câu truy vấn");
    header("location:index.php?view=listuser");
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
                                        <label for="cc-payment" class="control-label mb-1">Tên người dùng</label>
                                        <input id="username" name="username"  type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Tên đầy đủ</label>
                                        <input id="fullname" name="fullname"  type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Mật khẩu</label>
                                        <input id="pass" name="pass"  type="password" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Email</label>
                                        <input id="mail" name="mail" type="text" class="form-control" />
                                    </div> 
                                    <div class="form-check">
                                        <label for="radio" class="form-check-label">
                                            <input type="radio" id="gender" name="gender" value="0" class="form-check-input">Nữ <br>
                                            <input type="radio" id="gender" name="gender" value="1" class="form-check-input">Nam <br>
                                            <input type="radio" id="gender" name="gender" value="2" class="form-check-input">Khác
                                        </label>
                                    </div>    
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Địa chỉ</label>
                                        <input id="address" name="address" type="text" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Mô tả</label>
                                        <input id="desscription" name="desscription" type="text" class="form-control" />
                                    </div>
                                    <div>
                                       <input type="submit" value="Thêm mới" name="addNewUser"/>
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