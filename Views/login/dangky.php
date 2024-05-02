<?php
echo "<div>
<div class='main-input padding60 new-customer' id='dangky'>
	<div class='log-title'>
		<h3><strong>ĐĂNG KÝ TÀI KHOẢN</strong></h3>
	</div>";
if (isset($_COOKIE['msg2'])) {
	echo "<div class='alert alert-success'>
			<strong>Thông báo </strong>" . $_COOKIE['msg2'];
	echo "</div>";
	echo '<div class="submit-text">
									
									<button class = "btn-sign-in" style=" margin-left: 10px"><a class = "btn-sign-in" style="padding:0; margin: 0;" href="?act=taikhoan#dangnhap" >Đăng nhập</a></button>
								</div>';
} else if (isset($_COOKIE['msg3'])) {
	echo "<div class='alert alert-danger'>
			<strong>Thông báo </strong>" . $_COOKIE['msg3'];
	echo "</div>";

	echo "<div class='custom-input'>
		<form action='?act=taikhoan&xuli=dangky&dk' method='post' id='form2'>
			<input type='text' name='Ho' placeholder='Họ..' required />
			<input type='text' name='Ten' placeholder='Tên..' required />
			<input type='text' name='TaiKhoan' placeholder='Tên tài khoản đăng nhập..' required  minlength='5'/>
			<input type='email' name='Email' placeholder='Địa chỉ Email..' required />
			<input type='text' name='SĐT' placeholder='Số điện thoại..' required pattern='0[0-9]{9}' maxLength='10' />
			<input type='password' name='MatKhau' placeholder='Mật khẩu' minlength='5' required />
			<input type='password' name='check_password' placeholder='Xác nhận mật khẩu' minlength='5' required />
			<div class='submit-text coupon'>
				<button style='margin-right: 10px;' type='submit' form='form2' class = 'btn-sign-in'>Đăng ký</button>
				<a  type='submit'  form='form1'  style=' padding:0 30px; margin: 0; ' href='?act=taikhoan'>Đăng nhập</a>
			</div>
			
			
		</form>
	</div>
</div>
</div>";
} else {
	echo "<div class='custom-input'>
		<form action='?act=taikhoan&xuli=dangky&dk' method='post' id='form2'>
			<input type='text' name='Ho' placeholder='Họ..' required />
			<input type='text' name='Ten' placeholder='Tên..' required />
			<input type='text' name='TaiKhoan' placeholder='Tên tài khoản đăng nhập..' required  minlength='5'/>
			<input type='email' name='Email' placeholder='Địa chỉ Email..' required />
			<input type='text' name='SĐT' placeholder='Số điện thoại..' required  pattern='0[0-9]{9}' maxLength='10' />
			<input type='password' name='MatKhau' placeholder='Mật khẩu' minlength='5' required />
			<input type='password' name='check_password' placeholder='Xác nhận mật khẩu' minlength='5' required />
			<div class='submit-text coupon'>
				<button style='margin-right: 10px; ' type='submit' form='form2' class = 'btn-sign-in'>Đăng ký</button>
				<a  type='submit'  form='form1'  style=' padding:0 30px; margin: 0; ' href='?act=taikhoan'>Đăng nhập</a>
				
			</div>
			
		</form>
	</div>
</div>
</div>";
}
