
<style>
	.pages.login-page {
		padding: 60px 0;
	}

	.pages.login-page .main-input {
		padding: 60px;
	}

	.pages.login-page .log-title h3 {
		font-size: 24px;
		font-weight: bold;
	}

	.pages.login-page .login-text {
		margin-top: 30px;
	}

	.pages.login-page .custom-input {
		position: relative;
	}

	.pages.login-page .custom-input .alert {
		margin-bottom: 15px;
	}

	.pages.login-page table {
		width: 100%;
	}

	.pages.login-page table th,
	.pages.login-page table td {
		padding: 8px;
		text-align: center;
		vertical-align: middle;
		border: 1px solid #ddd;
	}

	.pages.login-page table th {
		/* background-color: #f5f5f5; */
		font-weight: bold;
	}

	/* .pages.login-page table tbody tr:nth-child(even) {
		background-color: #f9f9f9;
	} */

	.pages.login-page .table-responsive {
		overflow-x: auto;
	}
</style>


<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Lịch sử giao dịch trên cửa hàng</h2>
					<ul class="text-left">

						<?php


						if (($_GET['act']) == 'history' and !isset($_GET['xuli'])) {
							$style1 = 'btn-secondary';
							$style = 'btn-danger';
						} else {
							$style = 'btn-secondary';
							$style1 = 'btn-danger';
						}



						?>
						<a class="btn <?= $style ?>" href="?act=history">Lịch sử đơn mua hàng</a>
						</li>

						<a class="btn <?= $style1 ?>" href="?act=history&xuli=add">Lịch sử đơn bán hàng</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->






<section class="pages login-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">



			




				<div class="main-input padding60" id="dangnhap">
				<div class="log-title">
						<h3><strong>Thông tin lịch sử đơn bán hàng</strong></h3>
					</div>
					<div class="login-text">
						<div class="custom-input">

						<?php if (isset($_COOKIE['msg1'])) { ?>
                                <div class="alert alert-danger">
                                    <strong>Thông báo: </strong> <?= $_COOKIE['msg1'] ?>
                                </div>
                            <?php } else if (isset($_COOKIE['msg'])) { ?>
                                <div class="alert alert-success">
                                    <strong>Thông báo: </strong> <?= $_COOKIE['msg'] ?>
                                </div>
                            <?php } ?>


							<?php if($data==null){
									echo '<h3 class="text-center"><strong>Bạn chưa có đơn bán hàng nào cả!</strong></h3>';
									
								}
								else
								{
								?>
								<div class="table-responsive">
									<table class="table">
									<thead>
									<tr>
										<th scope="col">Mã hóa đơn bán</th>
										<th scope="col">Tên sản phẩm</th>
										<th scope="col">Ảnh</th>
										<th scope="col">Giá thành</th>
										<th scope="col">Số lượng</th>
										<th scope="col">Tổng tiền</th>
										<th scope="col">Trạng thái</th>
										<th scope="col">Ngày bán</th>
										<th scope="col">Ngày nhận thu mua</th>

									</tr>
								</thead>
								<tbody>

									<?php 
									foreach ($data as $row){
									?>
									<tr>
										<th scope="col">ThuMua_<?=$row['MaThuMua']?></th>
										<th scope="col"><?=$row['TenSP']?></th>
										<th scope="col"><img src="public/<?=$row['HinhAnh1']?>" width="100px" height="100px" onerror="this.src='public/img/maga1.png'"></th>
										<th scope="col"><?=number_format($row['DonGia'])?></th>
										<th scope="col"><?=$row['SoLuong']?></th>
										<th scope="col"><?= number_format($row['DonGia'] * $row['SoLuong'])?></th>
											<?php if($row['TrangThai']==0){ ?>


										<th  style="color:brown" scope="col">Đợi duyệt<br>
									
										<a style="font-size: 10px;padding: 6px 8px;margin-top: 6px;" style="font-size: 10px;padding: 6px 8px;margin-top: 6px;" class="btn btn-danger" href="?act=history&xuli=huythumua&id=<?= $row['MaThuMua'] ?>"> Hủy đơn</a>
										<br><a style="font-size: 10px;padding: 6px 8px;margin-top: 6px;" style="font-size: 10px;padding: 6px 8px;margin-top: 6px;" class="btn btn-primary" href="?act=history&xuli=suathumua&id=<?= $row['MaThuMua'] ?>"> Sửa đơn</a>
									</th>
												<?php } else if($row['TrangThai']==1){ ?>
												
											<th style="color:red"scope="col">Chờ chuyển hàng</th>

											<?php } else if($row['TrangThai']==2){

											 ?>
											 	<th style="color:deepskyblue" scope="col">Thành công</th>

											  <?php }  

											  else if($row['TrangThai']==3){

											 ?>
											 	<th style="color:orange" scope="col">Không duyệt mua</th>

											  <?php }   ?>

										<th scope="col"><?=$row['ThoiGian']?></th>


									<?php if($row['TrangThai']==0){ ?>


										<th style="color:brown" scope="col">Đợi duyệt</th>
												<?php } else if($row['TrangThai']==1){ ?>
												
											<th style="color:red" scope="col">Chờ chuyển hàng</th>

											<?php } else if($row['TrangThai']==3){ ?>
												
												<th style="color: orange" scope="col">Thất bại</th>
	
												<?php }
											
											
											else{

											 ?>
											 	<th style="color:deepskyblue" scope="col"><?=$row['ThoiGian']?></th>


											  <?php }   ?>



										



									</tr>
   

 <?php }   ?>




</tbody>
									</table>
								</div>
							<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
















<!-- login content section end -->
<style type="text/css">
	
#dataTable {
    table-layout: fixed;
}

#dataTable th,
#dataTable td {
    text-align: center;
   vertical-align: middle;

}
</style>

										