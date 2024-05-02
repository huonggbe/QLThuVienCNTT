<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="?mod=muonsach&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Người nhận</label>
            <input type="text" class="form-control" id="" placeholder="" name="NguoiNhan">
        </div>


        <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $_GET['id'] ?>">


        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>