<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/sb-addProduct.css">
    <title>Weddingclothes - Thuê Áo Cưới</title>
</head>

<body>
    <div class="container">
        <div class="title-addProduct">
            <h2>Thêm Sản Phẩm Mới</h2>
        </div>
        <div class="content">
            <div class="form-addProduct">
                <form action="?url=addSp" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="productName" required placeholder="Nhập tên sản phẩm">
                    </div>
                    <div>
                        <label for="">Ảnh sản phẩm</label>
                        <input type="file" name="image" required>
                    </div>
                    <div>
                        <label for="">Giá sản phẩm</label>
                        <input type="text" name="price" required placeholder="Nhập giá sản phẩm">
                    </div>
                    <div>
                        <label for="">Số lượng</label>
                        <input type="number" name="quantity" required placeholder="Nhập số lượng sản phẩm">
                    </div>
                    <div>
                        <label for="">Mô tả sản phẩm</label>
                        <input type="text" name="description" required placeholder="Mô tả sản phẩm">
                    </div>
                    <div>
                        <label for="">Danh mục</label>
                        <select name="idCategory">
                            <option value="1">Dành Cho Nữ</option>
                            <option value="2">Dành Cho Nam</option>
                        </select>
                    </div>
                    <button type="submit" name="btn-addProduct">
                        Thêm mới
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>