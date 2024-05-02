<?php if (isset($_SESSION['isLogin_AdminTong']) && $_SESSION['isLogin_AdminTong'] == true) { ?>
  <a href="?mod=nguoidung&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php }

?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Mã</th>
      <th scope="col">Tài khoản</th>
      <th scope="col">SĐT</th>
      <th scope="col">Email</th>
      <th scope="col">Giới tính</th>
      <th scope="col">Quyền hạn</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <th scope="row"><?= $row['MaND'] ?></th>
        <td><?= $row['TaiKhoan'] ?></td>
        <td><?= $row['SDT'] ?></td>
        <td><?= $row['Email'] ?></td>
        <td><?= $row['GioiTinh'] ?></td>
        <td>
          <?php
          if ($row['MaQuyen'] == 2) {
            echo 'Quản trị viên';
          } else {
            if ($row['MaQuyen'] == 1) {
              echo 'Sinh viên';
            } else 
            if ($row['MaQuyen'] == 4) {
              echo 'Admin quản trị';
            } else {
              echo 'Thủ thư';
            }
          }
          ?>
        </td>
        <td>
          <a href="?mod=nguoidung&act=detail&id=<?= $row['MaND'] ?>" type="button" class="btn btn-success">Xem</a>
          <?php if (isset($_SESSION['isLogin_AdminTong']) && $_SESSION['isLogin_AdminTong'] == true) { ?>
            <a href="?mod=nguoidung&act=edit&id=<?= $row['MaND'] ?>" type="button" class="btn btn-warning">Sửa</a>
            <a href="?mod=nguoidung&act=delete&id=<?= $row['MaND'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>

        </td>
      </tr>
  <?php }
        } ?>
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