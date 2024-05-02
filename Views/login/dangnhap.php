<div class="main-input padding60" id="dangnhap">
	<div class="log-title">
		<h3><strong>ĐĂNG NHẬP</strong></h3>
	</div>
	<div class="login-text">
		<div class="custom-input">
			<p>Nếu bạn đã có tài khoản, vui lòng đăng nhập!</p>
			<?php if (isset($_COOKIE['msg1'])) { ?>
				<div class="alert alert-danger">
					<strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
				</div>
			<?php } else if (isset($_COOKIE['msg'])) { ?>
				<div class="alert alert-success">
					<strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
				</div>

			<?php } ?>
			<form action="?act=taikhoan&xuli=dangnhap" method="post" id="form1">
				<input type="text" name="taikhoan" placeholder="Tài khoản" required />
				<input type="password" name="matkhau" placeholder="Mật khẩu" required />
				<a class="forget" href="?act=taikhoan&qmk">Quên mật khẩu?</a>
				<div class="submit-text">

					<button style=" margin: 5px; " name="submit" type="submit" form="form1" class="btn-sign-in">Đăng nhập</button>

					<a type="submit" form="form1" style=" padding:0 30px; margin: 5px; " href="?act=taikhoan&dk">Đăng ký</a>



				</div>
			</form>
		</div>
	</div>
</div>