<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thêm mới tài khoản</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="?url=addTk" method="post" class="form">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="hovaten" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="hovaten" name="fullName" placeholder="Nhập họ và tên..."  value="<?= isset($fullName) ? ($fullName) : '' ?>">
                </div>
                <div class="col-md-6">
                    <label for="tendangnhap" class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="tendangnhap" name="userName" placeholder="Nhập tên đăng nhập..." value="<?= isset($userName) ? ($userName) : '' ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="matkhau" class="form-label">Mật Khẩu</label>
                    <input type="password" class="form-control" id="matkhau" name="password" placeholder="VD: Example123...">
                </div>
                <div class="col-md-6">
                    <label for="diachi" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="diachi" name="address" placeholder="Nhập địa chỉ..." value="<?= isset($address) ? ($address) : '' ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="sodienthoai" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="sodienthoai" name="phoneNumber" placeholder="Nhập số điện thoại..." value="<?= isset($phoneNumber) ? ($phoneNumber) : '' ?>">
                </div>
                <div class="col-md-6">
                    <label for="sel1">Vai Trò</label>
                    <select class="form-control" id="sel1" name="idRole">
                        <option value="3">Thành viên</option>     
                        <option value="2">Quản trị viên</option>
                    </select>
                </div>
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-success">Xác nhận</button>
            </div>
        </form>
    </div>
</div>


</div>