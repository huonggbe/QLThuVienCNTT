<div class="main-input padding60" id="dangnhap">
					<div class="log-title">
						<h3><strong>QUÊN MẬT KHẨU</strong></h3>
					</div>
					<div class="login-text">
						<div class="custom-input">
							
							<?php if (isset($_COOKIE['msgmk1'])) { ?>
								<div class="alert alert-success">
									<strong>Thông báo</strong> <?= $_COOKIE['msgmk1'] ?>
								</div>
							<?php } else if (isset($_COOKIE['msgmk2']))
							{ ?>
								<div class="alert alert-danger">
									<strong>Thông báo</strong> <?= $_COOKIE['msgmk2'] ?>
								</div>

							<?php }?>
							<form action="?act=taikhoan&xuli=quenmk" method="post" id="form1">
								<input type="text" name="taikhoan" placeholder="Tài khoản" />
								<input type="email" name="email" placeholder="Email" />
								
								<div class="submit-text">
									<button name="submit" type="submit" form="form1">Xác nhận</button>
									<?php if (isset($_COOKIE['msgmk1'])) { ?>

										<button style=' margin-top: 5px' ><a style=' padding:0; margin: 0;' href='?act=taikhoan' >Đăng nhập</a></button>

									<?php }?>


								</div>
							</form>
						</div>
					</div>
				</div>