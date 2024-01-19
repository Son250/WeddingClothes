<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách sản phẩm</h1>
    <form action="?url=listSp" method="post">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button type="button" class="btn btn-secondary btn-sm">Chọn tất cả</button>
                <button type="button" class="btn btn-secondary btn-sm">Bỏ chọn tất cả</button>
                <button type="submit" name="xoacacmucchon" class="btn btn-secondary btn-sm">Xóa các mục đã chọn</button>
                <a href="?url=addSp"><button type="button" class="btn btn-secondary btn-sm">Nhập thêm</button></a>
                <div class="float-right">
                    <div class="input-group">
                        <input type="text" class="form-control" name="kyw" placeholder="Tìm kiếm...">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="search">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                        < </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                    <th></th>
                                    <th>Mã loại</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Mô tả</th>
                                    <th>Danh mục</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listsp as $sp) : ?>
                                    <tr>
                                        <td class="align-middle text-center"><input type="checkbox" name="select[]" id="" sp=""></td>
                                        <td class=" align-middle text-center"><?= $sp['id'] ?></td>
                                        <td class="col-2 align-middle"><?= $sp['productName'] ?></td>
                                        <td class="col-1 align-middle"><img src="../assets/uploads/<?= $sp['image'] ?>" alt="err" width="70px" height="100px"></td>
                                        <td class="col-1 align-middle"><?= number_format($sp['price']) ?>Đ</td>
                                        <td class="align-middle"><?= $sp['quantity'] ?></td>
                                        <td class="col-3 align-middle"><?= $sp['description'] ?></td>
                                        <!-- <td class="col-2 align-middle"> -->
                                        <td class="col-2 align-middle"><?= $sp['idCategory'] ?></td>
                                        </td>
                                        <td class="col-2 align-middle"><a href="?url=updateSp"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a> |
                                            <a href="?url=xoaSp"><button type="button" class="btn btn-secondary btn-sm">Xóa</button></a>
                                        </td>
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