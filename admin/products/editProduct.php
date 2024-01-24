<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cập nhật thông tin</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="?url=editSp" method="post" enctype="multipart/form-data" class="form">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="hidden" name="oldImage" value="">
            <div class="mb-3">
                <label for="productName" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="productName" name="productName" value="<?=$nameSP?>">
                <p class="Err mt-1"></p>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Giá</label>
                <input type="number" class="form-control" id="price" name="price" value="<?=$priceSP?>">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Tải ảnh lên:</label>
                <input type="file" name="image" id="image" class="form-control-file border">
                <p class="Err mt-1"></p>
                <img src="../assets/uploads/<?=$photo?>" alt="" height="100px">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Số lượng</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="<?=$quantitySP?>">
            </div>
            <div class="mb-3">
                <label for="description">Mô tả</label>
                <textarea class="form-control" rows="5" id="description" name="description" value=""><?=$descriptionSP?></textarea>
            </div>
            <div class="mb-3">
                <label for="sel1">Danh mục</label>
                <select class="form-control" id="sel1" name="idCategory">
                    <?php foreach ($listDm as $Dm): ?> 
                        <option <?= ($danhmuc?($danhmuc==$id?'selected':''):'') ?> value="<?=$Dm['id']?>"><?=$Dm['name']?></option>;
                    <?php endforeach;?>
                </select>
                
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-success">Xác nhận</button>
                <a href="?url=listSp"><button type="button" class="btn btn-success">Quay lại</button></a>
            </div>
        </form>
    </div>
</div>


</div>
<!-- /.container-fluid -->