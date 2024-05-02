<a href="?mod=muonsach&id=0" type="button" class="btn btn-success">Chưa duyệt</a>
<a href="?mod=muonsach&id=1" type="button" class="btn btn-warning">Đã duyệt</a>
<a href="?mod=muonsach&id=2" type="button" class="btn btn-primary">Đã trả</a>
<a href="?mod=muonsach&id=3" type="button" class="btn btn-danger">Vi phạm</a>

<!-- <a href="?mod=muonsach&xuat" type="button" class="btn btn-light">Xuất hóa đơn</a> -->
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Mã mượn</th>
      <th scope="col">Ngày đăng ký</th>
      <th scope="col">Người nhận</th>
      <th scope="col">Ngày mượn</th>
      <th scope="col">Ngày trả</th>
      <th scope="col">Vi phạm</th>

      <th scope="col">Hình thức xử lý</th>
      <th scope="col">Trạng thái</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>

    <?php
    foreach ($data as $row) { ?>
      <tr>
        <td><?= $row['MaHD'] ?></td>
        <td><?= $row['NgayLap'] ?></td>
        <td><?= $row['NguoiChoMuon'] ?></td>
        <td><?= $row['NgayMuon'] ?></td>
        <td><?= $row['NgayTra'] ?></td>
        <td><?= $row['ViPham'] ?></td>
        <td><?= $row['HinhThucXuLy'] ?></td>
        <td><?php if ($row['TrangThai'] == 0) {
              echo 'Chưa xét duyệt';
            } else if ($row['TrangThai'] == 1) {
              echo 'Đang mượn';
            } else if ($row['TrangThai'] == 2) {
              echo 'Đã trả';
            } else if ($row['TrangThai'] == 3) {
              echo 'Vi phạm';
            } else {
              echo "Mượn sách bị huỷ do: " . $row['lyDoHuy'];
            }
            ?></td>







        <td>
          <?php if ($row['TrangThai'] == 0) { ?>

            <a style="    margin: 3px;" href="?mod=muonsach&act=chitiet&id=<?= $row['MaHD'] ?>" class="btn btn-success">Xét duyệt</a>
          <?php } else if ($row['TrangThai'] == 1) {


          ?>
            <a style="    margin: 3px;" href="?mod=muonsach&act=chitietcapnhat&id=<?= $row['MaHD'] ?>" class="btn btn-warning">Cập nhật</a>

          <?php } ?>
          <?php if ($row['TrangThai'] == 0 || $row['TrangThai'] == 1) { ?>
            <button style="    margin: 3px;" class="btn btn-secondary" onclick="cancelDon(<?= $row['MaHD'] ?>)"> Huỷ mượn</button>
          <?php
          }
          ?>
          <?php
          if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin']) ||  (isset($_SESSION['isLogin_AdminTong']) && $_SESSION['isLogin_AdminTong'])) {
          ?>
            <a style="    margin: 3px;" href="?mod=muonsach&act=delete&id=<?= $row['MaHD'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
          <?php
          }
          ?>
          <a style="    margin: 3px;" target="_blank" href="?mod=muonsach&act=xuat&id=<?= $row['MaHD'] ?>" class="btn btn-light">Xuất phiếu mượn</a>
        </td>
      </tr>
    <?php
    } ?>
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

  const cancelDon = (maHD = "") => {
    let reason = "";
    while (reason === "") {
      reason = prompt("Lý do huỷ đơn");
    }
    if (maHD) {
      window.location.href = `/admin?mod=muonsach&act=cancel&id=${maHD}&lydohuy=${reason}`
    }
  }
</script>