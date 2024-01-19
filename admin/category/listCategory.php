<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách danh mục</h1>
    <form action="index.php?url=listCategory" method="post">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button type="button" class="btn btn-secondary btn-sm">Chọn tất cả</button>
                <button type="button" class="btn btn-secondary btn-sm">Bỏ chọn tất cả</button>
                <button type="submit" name="xoacacmucchon" class="btn btn-secondary btn-sm">Xóa các mục đã chọn</button>
                <a href="index.php?url=addCategory"><button type="button" class="btn btn-secondary btn-sm">Nhập thêm</button></a>
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
                                <th>Mã loại</th>
                                <th>Tên danh mục</th>
                                <th>Mô tả</th>
                                <th>Option</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($listcategory as $val): ?>
                        <tr>
                        <td><?= $val['id']?></td>
                        <td><?= $val['name']?></td>
                        <td><?= $val['description']?></td>
                        <td><?= $val['option']?></td>
                        <td class="col-2"><a href="?url=updateCategory&id=<?= $val['id']?>"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a> | 
                        <a onclick="return confirm('Bạn có muốn xóa không?')" href="?url=deleteCategory&id=<?= $val['id']?>"><button type="button" class="btn btn-secondary btn-sm">Xóa</button></a></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- /.container-fluid -->