<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
  <?php } ?>
  <form action="?mod=tailieu&act=store" method="POST" role="form" enctype="multipart/form-data">
    <div class="form-group">
      <label for="cars">Danh mục <span style="color:red">(*)</label>
      <select id="MaDM" name="MaDM" class="form-control" onchange="hienThiLoaiSanPham()">
        <?php foreach ($data_dm as $row) { ?>
          <option id="DM<?= $row['MaDM'] ?>" value="<?= $row['MaDM'] ?>"><?= $row['TenDM'] ?></option>
        <?php } ?>
      </select>
    </div>

    <div class="form-group">
      <label for="cars">Loại tài liệu <span style="color:red">(*) </label>
      <select id="MaTaiLieu" name="MaTaiLieu" class="form-control">
        <?php foreach ($data_lsp as $row) { ?>
          <option id="Loai<?= $row['MaDM'] ?>" value="<?= $row['MaTaiLieu'] ?>" style="display: none;"><?= $row['TenLoaiTaiLieu'] ?></option>
        <?php } ?>
      </select>
    </div>

    <div class="form-group">
      <label for="">Tên tài liệu <span style="color:red">(*)</span></label>
      <input type="text" required class="form-control" id="TenTL" placeholder="Nhập tên sản phẩm" name="TenTL" maxlength="255">
      <div id="error-message"></div>
    </div>
    <div class="form-group">
      <label for="">Giá bìa <span style="color:red">(*)</label>
      <input type="number" required class="form-control" id="" placeholder="" name="DonGia">
    </div>
    <div class="form-group">
      <label for="">Số lượng <span style="color:red">(*)</label>
      <input type="number" required class="form-control" id="" placeholder="" name="SoLuong">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 1 <span style="color:red">(*)</label>
      <input type="file" onchange="previewImage(event)" class="form-control" required id="" placeholder="" name="HinhAnh1" accept="image/*">
      <img id="preview" style="max-width: 100%; height: 300px; margin-top: 10px;">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 2 <span style="color:red">(*)</label>
      <input type="file" accept="image/*" class="form-control" onchange="previewImage1(event)" required id="" placeholder="" name="HinhAnh2">
      <img id="preview1" style="max-width: 100%; height: 300px; margin-top: 10px;">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 3 <span style="color:red">(*)</label>
      <input type="file" accept="image/*" class="form-control" required id="" onchange="previewImage2(event)" placeholder="" name="HinhAnh3">
      <img id="preview2" style="max-width: 100%; height: 300px; margin-top: 10px;">
    </div>

    <div class="form-group">
      <label for="">Tác giả <span style="color:red">(*)</label>
      <input type="text" class="form-control" required id="" placeholder="" name="TacGia">
    </div>
    <div class="form-group">
      <label for="">Nhà xuất bản </label>
      <input type="text" class="form-control" id="" placeholder="" name="NhaXuatBan">
    </div>
    <div class="form-group">
      <label for="">Số trang</label>
      <input type="text" class="form-control" id="" placeholder="" name="SoTrang">
    </div>
    <div class="form-group">
      <label for="">Ngôn ngữ</label>
      <input type="text" class="form-control" id="" placeholder="" name="NgonNgu">
    </div>



    <label for="">Mô tả</label>
    <div class="form-group">
      <textarea class="form-control" id="summernote" placeholder="" name="MoTa"></textarea>
    </div>
    <div class="form-group">
      <label for="">Trạng thái</label>
      <input type="checkbox" id="" placeholder="" value="1" name="TrangThai" checked><em>(Check cho phép hiện thị tài liệu)</em>
    </div>
    <button type="submit" class="btn btn-primary">Thêm mới</button>
  </form>


</table>
<script>

</script>
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
  hienThiLoaiSanPham();
</script>