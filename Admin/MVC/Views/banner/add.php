<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="?mod=banner&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <input type="file"accept="image/*" class="form-control" onchange="previewImage1(event)" required  name="HinhAnh">
            <img id="preview1" style="max-width: 100%; height: 300px; margin-top: 10px;">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>

<script>
    function previewImage1(event) {
    var reader = new FileReader();
   
    reader.onload = function() {
      var output = document.getElementById('preview1');
      
      output.src = reader.result;
      
    };
    reader.readAsDataURL(event.target.files[0]);

    
  }
</script>