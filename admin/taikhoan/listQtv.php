<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách tài khoản</h1>
    <form action="?url=listQtv" method="post">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button type="button" class="btn btn-secondary btn-sm">Chọn tất cả</button>
                <button type="button" class="btn btn-secondary btn-sm">Bỏ chọn tất cả</button>
                <button type="submit" name="xoacacmucchon" class="btn btn-secondary btn-sm">Khóa các tài khoản đã chọn</button>
                <a href="?url=addTk"><button type="button" class="btn btn-secondary btn-sm">Nhập thêm</button></a>
                <div class="float-right">
                    <div class="input-group">
                        <input type="text" class="form-control" name="kyw" placeholder="Tìm kiếm...">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="search">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th></th>
                                <th>MQTV</th>
                                <th>Họ và Tên</th>
                                <th>Tên đăng nhập</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Vai trò</th>
                                <?php if(isset($_SESSION['user'])&&($_SESSION['user']['idRole']==1)): ?>
                                <th>Action</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($listTk as $val): ?>
                            <?php 
                                if($val['idRole']==1){
                                    $val['idRole']="Quản trị hệ thống";
                                }else if($val['idRole']==2){
                                    $val['idRole']="Quản trị viên";
                                }
                            ?>
                                <tr>
                                    <td class="align-middle text-center"><input type="checkbox" name="select[]" value="<?= $val['id'];?>"></td>
                                    <td class="align-middle text-center"><?= $val['id'];?></td>
                                    <td class="col-2 align-middle"><?= $val['fullName'];?></td>
                                    <td class="col-1 align-middle"><?= $val['userName'];?></td>
                                    <td class="col-1 align-middle"><?= $val['phoneNumber'];?></td>
                                    <td class="col-2 align-middle"><?= $val['address'];?></td>
                                    <td class="col-2"><?= $val['idRole'];?></td>
                                    <?php if(isset($_SESSION['user'])&&($_SESSION['user']['idRole']==1)): ?>
                                        <td class="col-2 align-middle text-center"><a href="?url=updateTk&id=<?= $val['id'];?>"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a> 
                                        | <a href="?url=khoaTk&id=<?= $val['id'];?>"><button type="button" class="btn btn-secondary btn-sm">Khóa</button></a></td>
                                    <?php endif; ?>
                                </tr>  
                            <?php endforeach;?>                
                        </tbody>
                    </table>
                    <!-- <div class="phantrang">
                        <ul>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </form>
</div>
<!-- /.container-fluid -->