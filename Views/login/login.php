<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<?php if (isset($_GET['dk'])) {
						echo '<h2>Đăng ký</h2>';
					} else {
						echo '<h2>Đăng nhập</h2>';
					} ?>
					<ul class="text-left">
						<li><a href="?act=home">Trang chủ</a></li>
						<li><span> / </span>
							<?php if (isset($_GET['dk'])) {

								echo 'Đăng ký';
							} else {
								echo 'Đăng nhập';
							}

							?>

						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- login content section start -->
<section class="pages login-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-10" style="    float: none;margin: auto;">
				<?php

				if (isset($_REQUEST['dk'])) {
					include_once('dangky.php');
				} else
				if (isset($_REQUEST['qmk'])) {
					include_once('quenmk.php');
				} else {
					include_once('dangnhap.php');
				}


				?>
			</div>





		</div>
	</div>
</section>
<!-- login content section end -->