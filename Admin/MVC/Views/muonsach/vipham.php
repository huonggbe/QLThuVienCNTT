<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="?mod=muonsach&act=capnhat1" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Vi phạm</label>
            <input type="text" class="form-control" id="" placeholder="" name="ViPham">
        </div>
        <div class="form-group">
            <label for="">Hình thức xử lý</label>
            <input type="text" class="form-control" id="" placeholder="" name="HinhThucXuLy">
        </div>

        <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $_GET['id'] ?>">


        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>