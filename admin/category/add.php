<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thêm mới danh mục</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="?url=addCategory" method="post" class="form">
            <div class="mb-3">
                <label for="" class="form-label">Mã loại</label>
                <input type="text" name="id" id="" class="form-control" disabled>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Danh mục</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên danh mục..." value="<?= isset($name) ? ($name) : '' ?>">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Mô Tả</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Nhập tên danh mục..." value="<?= isset($description) ? ($description) : '' ?>">
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-success">Xác nhận</button>
                <a href="?url=listCategory"><button type="button" class="btn btn-success">Quay lại</button></a>
            </div>
        </form>
    </div>
</div>


</div>
<!-- /.container-fluid -->