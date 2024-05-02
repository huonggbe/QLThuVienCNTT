<?php if (isset($data) and $data != null) {


?>
    <a href="?mod=muonsach&act=xetduyet&id=<?= $data['0']['MaHD'] ?>" class="btn btn-success">Duyệt mượn sách</a>
    <a href="?mod=muonsach&act=delete&id=<?= $data['0']['MaHD'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">Tên tài liệu</th>
            <th scope="col">Hình ảnh</th>

            <th scope="col">Số lượng</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row) { ?>
            <tr>
                <td><?= $row['Ten'] ?></td>
                <td><img src="../public/<?= $row['HinhAnh1'] ?>" height="80px"></td>

                <td><?= $row['SoLuong'] ?></td>

            </tr>
        <?php } ?>
</table>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>