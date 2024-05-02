<?php if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_AdminTong']) && $_SESSION['isLogin_AdminTong'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true)) { ?>

  <a href="?mod=tailieu&act=add" type="button" class="btn btn-primary">Thêm mới</a>
  <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
  <?php } ?>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Giá bìa (VNĐ)</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Thời gian</th>
      <th scope="col">Trạng thái</th>

      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0;
    foreach ($data as $row) {
      $i = $i + 1; ?>
      <tr>
        <th scope="row"><?= $i  ?></th>
        <td><?= $row['MaSP'] ?></td>
        <td><?= $row['TenTL'] ?></td>
        <td>
          <img src="../public/<?= $row['HinhAnh1'] ?>" height="80px">
        </td>
        <?php if ($row['TrangThai'] == 1) {

          $tranthai = "Hiện thị";
        } else {
          $tranthai = "Không hiện thị";
        }

        ?>
        <td><?= number_format($row['DonGia']) ?></td>
        <td><?= $row['SoLuong'] ?></td>
        <td><?= $row['ThoiGian'] ?></td>
        <td><?= $tranthai ?></td>
        <td>
          <a href="../index.php?act=detail&id=<?= $row['MaSP'] ?>" style="margin: 3px" type="button" class="btn btn-success" target="_blank">Xem</a>
          <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true || isset($_SESSION['isLogin_AdminTong']) && $_SESSION['isLogin_AdminTong'] == true) { ?>
            <a href="?mod=tailieu&act=edit&id=<?= $row['MaSP'] ?>" style="margin: 3px" type="button" class="btn btn-warning">Sửa</a>
            <a href="?mod=tailieu&act=delete&id=<?= $row['MaSP'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" style="margin: 3px" type="button" class="btn btn-danger">Xóa</a>
          <?php } ?>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">

<script>
  $(document).ready(function() {
    // Thêm tiêu đề và placeholder cho ô tìm kiếm
    var searchLabel = '<label><span>Tìm kiếm thông tin:</span><input type="search" class="form-control form-control-sm" placeholder="Tìm kiếm..."></label>';
    $('#dataTable_filter').append(searchLabel);

    // Khởi tạo DataTable
    var dataTable = $('#dataTable').DataTable({
      "order": [
        [0, "asc"]
      ], // Sắp xếp theo cột đầu tiên (cột số 0) từ cao đến thấp
      "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Vietnamese.json", // Đường dẫn đến file ngôn ngữ tiếng Việt
        "paginate": {
          "previous": "Trước", // Thay thế chữ "Previous" bằng "Trước"
          "next": "Tiếp" // Thay thế chữ "Next" bằng "Tiếp"
        },
        "search": "Tìm kiếm", // Thay thế chữ "Search" bằng "Tìm kiếm"
        "info": "Hiển thị _START_ đến _END_ của _TOTAL_ mục", // Thay thế chuỗi "Showing _START_ to _END_ of _TOTAL_ entries" bằng "Hiển thị _START_ đến _END_ của _TOTAL_ mục"
        "lengthMenu": "Hiển thị _MENU_ mục" // Thay thế chuỗi "Show _MENU_ entries" bằng "Hiển thị _MENU_ mục"
      }
    });
  });
</script>