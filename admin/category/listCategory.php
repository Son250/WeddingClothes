<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách danh mục</h1>
    <form action="?url=listDm" method="post">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button type="button" class="btn btn-secondary btn-sm">Chọn tất cả</button>
                <button type="button" class="btn btn-secondary btn-sm">Bỏ chọn tất cả</button>
                <button type="submit" name="xoacacmucchon" class="btn btn-secondary btn-sm">Xóa các mục đã chọn</button>
                <a href="?url=addDm"><button type="button" class="btn btn-secondary btn-sm">Nhập thêm</button></a>
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
                                <th>Mã loại</th>
                                <th>Tên danh mục</th>
                                <th>Mô tả</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-1 text-center"><input type="checkbox" name="select[]" value=""></td>
                                <td class="col-2">1</td>
                                <td>ao cuoi</td>
                                <td>Các mẫu áo cưới mới nhất</td>
                                <td class="col-2"><a href="?act=updateDm"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a> | 
                                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="?act=xoaDm"><button type="button" class="btn btn-secondary btn-sm">Xóa</button></a></td>
                            </tr>
                          
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