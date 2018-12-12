 <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Danh sách người dùng</h1>
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
            <div class="col-lg-12">
                <div class="card">
                    <!-- <div class="card-body"> -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên người dùng</th>
                                    <th scope="col">Tên đầy đủ</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Giới tính</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">Mô tả</th>    
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                                //viết câu truy vấn
                                    $sqlSelect = "SELECT * FROM users";
                                    //thực thi truy vấn
                                    $result =mysqli_query($conn,$sqlSelect);
                                    $i=0;
                                    while($row = mysqli_fetch_assoc($result)){
                                        $i++;
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $i ?></th>
                                        <td><?php echo $row["user_name"]?></td>
                                        <td><?php echo $row["full_name"]?></td>
                                        <td><?php echo $row["password"]?></td>
                                        <td><?php echo $row["email"]?></td>
                                        <td>
                                            <?php echo ($row["gender"] == 2)?"Khác":(($row['gender']== 1)?"Nam":"Nữ") ?>
                                        </td>
                                        <td><?php echo $row["address"]?></td>
                                        <td><?php echo $row["desscription"]?></td>
                                        <td>
                                            <a href="index.php?view=edituser&id=<?php echo $row["user_id"] ?>"><i class="fa fa-pencil"></i> Sửa</a>
                                            <a href="index.php?view=deluser&id=<?php echo $row["user_id"] ?>"><i class="fa fa-trash-o"></i> Xóa</a>
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
