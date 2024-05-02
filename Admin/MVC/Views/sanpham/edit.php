<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=tailieu&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaSP" value="<?= $data['MaSP'] ?>">

        <div class="form-group">
            <label for="cars">Danh mục <span style="color:red">(*) </label>
            <select id="MaDM" name="MaDM" class="form-control" onchange="hienThiLoaiSanPham()">
                <?php foreach ($data_dm as $row) { ?>
                    <option id="DM<?= $row['MaDM'] ?>" <?php echo ($row['MaDM'] == $data['MaDM']) ? 'selected="selected"' : ''; ?> value="<?= $row['MaDM'] ?>"><?= $row['TenDM'] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="cars">Loại tài liệu <span style="color:red">(*) </label>
            <select id="MaTaiLieu" name="MaTaiLieu" class="form-control">
                <?php foreach ($data_lsp as $row) { ?>
                    <option id="Loai<?= $row['MaDM'] ?>" <?php echo ($row['MaTaiLieu'] == $data['MaLSP']) ? 'selected="selected"' : ''; ?> value="<?= $row['MaTaiLieu'] ?>"><?= $row['TenLoaiTaiLieu'] ?></option>
                <?php } ?>
            </select>
        </div>



        <div class="form-group">
            <label for="">Tên tài liệu <span style="color:red">(*)</label>
            <input type="text" class="form-control" id="" required placeholder="" name="TenTL" value="<?= $data['TenTL'] ?>">
        </div>
        <div class="form-group">
            <label for="">Giá bìa<span style="color:red">(*)</label>
            <input type="number" class="form-control" required id="" placeholder="" name="DonGia" value="<?= $data['DonGia'] ?>">
        </div>
        <div class="form-group">
            <label for="">Số lượng <span style="color:red">(*)</label>
            <input type="number" class="form-control" required id="" placeholder="" name="SoLuong" value="<?= $data['SoLuong'] ?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 1 <span style="color:red">(*)</label>
            <img src="../public/<?= $data['HinhAnh1'] ?>" id="preview" height="200px" width="200px">
            <input type="file" accept="image/*" class="form-control" id="" placeholder="" onchange="previewImage(event)" name="HinhAnh1" value="<?= $data['HinhAnh1'] ?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 2 <span style="color:red">(*)</label>
            <img src="../public/<?= $data['HinhAnh2'] ?>" id="preview1" height="200px" width="200px">
            <input type="file" class="form-control" id="" onchange="previewImage1(event)" placeholder="" name="HinhAnh2" value="<?= $data['HinhAnh2'] ?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 3 <span style="color:red">(*)</label>
            <img src="../public/<?= $data['HinhAnh3'] ?>" id="preview2" height="200px" width="200px">
            <input type="file" class="form-control" id="" onchange="previewImage2(event)" placeholder="" name="HinhAnh3" value="<?= $data['HinhAnh3'] ?>">
        </div>


        <div class="form-group">
            <label for="">Tác giả <span style="color:red">(*)</label>
            <input type="text" class="form-control" id="" required placeholder="" name="TacGia" value="<?= $data['TacGia'] ?>">
        </div>
        <div class="form-group">
            <label for="">Nhà xuất bản</label>
            <input type="text" class="form-control" id="" placeholder="" name="NhaXuatBan" value="<?= $data['NhaXuatBan'] ?>">
        </div>

        <div class="form-group">
            <label for="">Số trang</label>
            <input type="text" class="form-control" id="" placeholder="" name="SoTrang" value="<?= $data['SoTrang'] ?>">
        </div>
        <div class="form-group">
            <label for="">Ngôn ngữ</label>
            <input type="text" class="form-control" id="" placeholder="" name="NgonNgu" value="<?= $data['NgonNgu'] ?>">
        </div>

        <label for="">Mô tả</label>
        <div class="form-group">
            <textarea class="form-control" id="summernote" placeholder="" name="MoTa"><?= $data['MoTa'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>
            <input <?= ($data['TrangThai'] == 1) ? 'checked' : '' ?> type="checkbox" id="" placeholder="" value="1" name="TrangThai"><em>(Check cho phép hiện thị sản phẩm)</em>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    <script>
        function previewImage(event) {
            var reader = new FileReader();

            reader.onload = function() {
                var output = document.getElementById('preview');

                output.src = reader.result;

            };
            reader.readAsDataURL(event.target.files[0]);


        }

        function previewImage1(event) {
            var reader = new FileReader();

            reader.onload = function() {
                var output = document.getElementById('preview1');

                output.src = reader.result;

            };
            reader.readAsDataURL(event.target.files[0]);


        }

        function previewImage2(event) {
            var reader = new FileReader();

            reader.onload = function() {
                var output = document.getElementById('preview2');

                output.src = reader.result;

            };
            reader.readAsDataURL(event.target.files[0]);


        }
    </script>

    <script>
        function hienThiLoaiSanPham() {
            var selectedMaDM = document.getElementById("MaDM").value;
            var selectedLoaiSanPham = document.getElementById("MaTaiLieu");

            // Ẩn tất cả các tùy chọn "Loại sản phẩm"
            var loaiSanPhamOptions = document.querySelectorAll('[id^="Loai"]');
            loaiSanPhamOptions.forEach(function(option) {
                option.style.display = "none";
            });

            // Hiển thị các tùy chọn "Loại sản phẩm" tương ứng với lựa chọn trong danh mục
            var loaiSanPhamOptionsToShow = document.querySelectorAll('[id^="Loai' + selectedMaDM + '"]');
            loaiSanPhamOptionsToShow.forEach(function(option) {
                option.style.display = "block";
            });

            // Kiểm tra xem tùy chọn "Loại sản phẩm" hiện tại có thuộc danh sách tùy chọn mới không
            // Nếu không có, chọn tùy chọn đầu tiên trong danh sách mới
            var firstVisibleOption = Array.from(loaiSanPhamOptionsToShow).find(function(option) {
                return option.style.display !== "none";
            });

            if (firstVisibleOption) {
                selectedLoaiSanPham.value = firstVisibleOption.value;
            } else {
                selectedLoaiSanPham.selectedIndex = -1;
            }
        }

        // Gọi hàm để hiển thị tùy chọn ban đầu khi tải trang
        window.addEventListener('DOMContentLoaded', function() {
            hienThiLoaiSanPham();

            // Chọn phần tử "Loại sản phẩm" ban đầu
            var selectedMaTaiLieu = "<?php echo $data['MaTaiLieu']; ?>";
            if (selectedMaTaiLieu) {
                var selectedLoaiSanPham = document.getElementById("MaTaiLieu");
                selectedLoaiSanPham.value = selectedMaTaiLieu;
            }
        });
    </script>