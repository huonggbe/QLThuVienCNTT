<?php
$id = $_GET['thongke'];
$time = $id . "_" . time();
header('Content-Type: application/doc');
header("Content-Disposition: attachment; filename= Thông kê số HD_$time.doc");
?>

<?php if (isset($_GET['tke'])) {
?>

	<head>
		<title>Thống kê</title>

		<head>

			<style>
				.page {
					width: 80%;
					margin: 0 auto;
					font-family: 'Times New Roman', Times, serif, sans-serif;
					font-size: 16px;
					line-height: 1.5;
				}

				.header {
					padding: 20px 0;
					border-bottom: 1px solid #ccc;
					border-top: 1px solid #ccc;
				}

				.company h1 {
					font-size: 32px;
					font-weight: bold;
					margin-bottom: 10px;
				}

				.company p {
					font-size: 18px;
					margin-bottom: 5px;
				}

				.title h2 {
					font-size: 24px;
					font-weight: bold;
					margin-bottom: 0px;
				}

				.customer p {
					font-size: 18px;
					margin-bottom: 5px;
				}

				table {
					width: 100%;
					border-collapse: collapse;
					margin-top: 10px;
					font-size: 16px;
				}

				th,
				td {
					padding: 10px;
					border: 1px solid #ccc;
					text-align: left;
				}

				.footer-right {
					margin-top: 30px;
					font-size: 18px;
					font-style: italic;
					margin-right: 0;
				}

				.text-center {
					text-align: center;
				}
			</style>
		</head>



	</head>

	<body>



		<div id="page" class="page">
			<div class="header">
				<div class="company">
					<h1 class="text-center">THỐNG KÊ TÀI LIỆU - THƯ VIỆN TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG</h1>

					<p class="text-center">Đường Z115, Quyết Thắng, Thành Phố Thái Nguyên</p>
				</div>
			</div>


			<?php
			if ($_GET['thongke'] == 'docgia') {
				$mauthongke = 'ĐỘC GIẢ';
			}
			if ($_GET['thongke'] == 'sachmuon') {
				$mauthongke = 'TÀI LIỆU ĐANG ĐƯỢC MƯỢN TẠI THƯ VIỆN';
			}
			if ($_GET['thongke'] == 'vipham') {
				$mauthongke = 'DANH SÁCH VI PHẠM';
			}

			?>

			<div class="title" style="padding:20px 0 ">
				<h2 style="text-align:center">THỐNG KÊ <?= $mauthongke ?></h2>
			</div>

			<div class="customer">


				<?php if (isset($listnguoimuon) and $listnguoimuon != null) {  ?>

					<div class="container mt-3">

						<table>
							<thead>
								<tr>
									<th scope="col">STT</th>
									<th scope="col">Họ tên</th>
									<th scope="col">Giới tính</th>
									<th scope="col">Số điện thoại</th>
									<th scope="col">Địa chỉ</th>



								</tr>
							</thead>
							<tbody>

								<?php $i = 0;
								foreach ($listnguoimuon as $row) {
									$i++; ?>
									<tr>
										<td><?= $i ?></td>
										<td><?= $row['Ho'] ?> <?= $row['Ten'] ?></td>
										<td><?= $row['GioiTinh'] ?></td>
										<td><?= $row['SDT'] ?></td>
										<td><?= $row['DiaChi'] ?></td>

									</tr>
								<?php } ?>




							</tbody>
						</table>








						<?php $time = time(); ?>
						<div class="footer-right text-right" style="  margin-right:0">
							<p style="text-align:right">Ngày <?= date("d", $time) ?> tháng <?= date("m", $time) ?> năm <?= date("Y", $time) ?></p>
							<p style="text-align:right">Thủ thư</p>
						</div>



					</div>

				<?php } ?>


				<?php if (isset($listsachmuon) and $listsachmuon != null) {  ?>

					<div class="container mt-3">

						<table>
							<thead>
								<tr>
									<th scope="col">STT</th>
									<th scope="col">Mã tài liệu</th>
									<th scope="col">Tên tài liệu</th>
									<th scope="col">Tác giả</th>
									<th scope="col">Số lượng mượn</th>



								</tr>
							</thead>
							<tbody>

								<?php $i = 0;
								foreach ($listsachmuon as $row) {
									$i++; ?>
									<tr>
										<td><?= $i ?></td>
										<td><?= $row['MaSP']  ?></td>
										<td><?= $row['TenTL'] ?></td>
										<td><?= $row['TacGia'] ?></td>
										<td><?= $row['TongSoLuong'] ?></td>

									</tr>
								<?php } ?>




							</tbody>
						</table>








						<?php $time = time(); ?>
						<div class="footer-right text-right" style="  margin-right:0">
							<p style="text-align:right">Ngày <?= date("d", $time) ?> tháng <?= date("m", $time) ?> năm <?= date("Y", $time) ?></p>
							<p style="text-align:right">Thủ thư</p>
						</div>



					</div>

				<?php } ?>



				<?php if (isset($listnguoivipham) and $listnguoivipham != null) {  ?>

					<div class="container mt-3">

						<table>
							<thead>
								<tr>

									<th scope="col">Mã mượn sách</th>
									<th scope="col">Tên tài liệu</th>
									<th scope="col">Vi phạm </th>
									<th scope="col">Hình thức xử lý</th>
									<th scope="col">Họ tên vi phạm</th>



								</tr>
							</thead>
							<tbody>

								<?php
								$temp = array(); // mảng tạm để lưu thông tin sách trước đó
								$MaHD_temp = ''; // biến tạm để lưu mã hóa đơn của sách trước đó
								$SoSach_temp = 0; // biến tạm để lưu số sách của mã hóa đơn trước đó
								$i = 0;

								foreach ($listnguoivipham as $row) {
									$MaHD = $row['MaHD'];
									if ($MaHD == $MaHD_temp) {
										// nếu mã hóa đơn hiện tại giống với mã hóa đơn trước đó, tăng giá trị biến đếm số sách và lưu trữ thông tin của sách hiện tại vào mảng tạm
										$SoSach_temp++;
										$temp['Sach'][] = $row;
									} else {
										// nếu mã hóa đơn hiện tại khác với mã hóa đơn trước đó, in ra thông tin của mã hóa đơn trước đó và in ra thông tin của các sách con hiện tại
										if (!empty($temp)) {
								?>
											<tr>
												<?php if ($SoSach_temp > 1) { ?>
													<td rowspan="<?= $SoSach_temp ?>"><?= $temp['MaHD'] ?></td>
													<td><?= $temp['Sach'][0]['TenTL'] ?></td>
													<td><?= $temp['Sach'][0]['ViPham'] ?></td>
													<td><?= $temp['Sach'][0]['HinhThucXuLy'] ?></td>
													<td rowspan="<?= $SoSach_temp ?>"><?= $temp['Ho'] ?> <?= $temp['Ten'] ?></td>
												<?php } else { ?>
													<td><?= $temp['MaHD'] ?></td>
													<td><?= $temp['Sach'][0]['TenTL'] ?></td>
													<td><?= $temp['Sach'][0]['ViPham'] ?></td>
													<td><?= $temp['Sach'][0]['HinhThucXuLy'] ?></td>
													<td><?= $temp['Ho'] ?> <?= $temp['Ten'] ?></td>
												<?php } ?>
											</tr>
											<?php
											for ($i = 1; $i < $SoSach_temp; $i++) {
											?>
												<tr>
													<td><?= $temp['Sach'][$i]['TenTL'] ?></td>
													<td><?= $temp['Sach'][$i]['ViPham'] ?></td>
													<td><?= $temp['Sach'][$i]['HinhThucXuLy'] ?></td>
												</tr>
								<?php
											}
										}
										$temp['MaHD'] = $MaHD;
										$temp['ViPham'] = $row['ViPham'];
										$temp['HinhThucXuLy'] = $row['HinhThucXuLy'];
										$temp['Ho'] = $row['Ho'];
										$temp['Ten'] = $row['Ten'];
										$temp['Sach'] = array();
										$temp['Sach'][] = $row;
										$SoSach_temp = 1;
									}
									$MaHD_temp = $MaHD;
								}
								// in ra thông tin của mã hóa đơn cuối cùng
								?>
								<tr>
									<?php if ($SoSach_temp > 1) { ?>
										<td rowspan="<?= $SoSach_temp ?>"><?= $temp['MaHD'] ?></td>
										<td><?= $temp['Sach'][0]['TenTL'] ?></td>
										<td rowspan="<?= $SoSach_temp ?>"><?= $temp['Sach'][0]['ViPham'] ?></td>
										<td rowspan="<?= $SoSach_temp ?>"><?= $temp['Sach'][0]['HinhThucXuLy'] ?></td>
										<td rowspan="<?= $SoSach_temp ?>"><?= $temp['Ho'] ?> <?= $temp['Ten'] ?></td>
									<?php } else { ?>
										<td><?= $temp['MaHD'] ?></td>
										<td><?= $temp['Sach'][0]['TenTL'] ?></td>
										<td><?= $temp['Sach'][0]['ViPham'] ?></td>
										<td><?= $temp['Sach'][0]['HinhThucXuLy'] ?></td>
										<td><?= $temp['Ho'] ?> <?= $temp['Ten'] ?></td>
									<?php } ?>
								</tr>
								<?php
								for ($i = 1; $i < $SoSach_temp; $i++) {
								?>
									<tr>
										<td><?= $temp['Sach'][$i]['TenTL'] ?></td>


									</tr>
								<?php
								}
								?>






							</tbody>
						</table>








						<?php $time = time(); ?>
						<div class="footer-right text-right" style="  margin-right:0">
							<p style="text-align:right">Ngày <?= date("d", $time) ?> tháng <?= date("m", $time) ?> năm <?= date("Y", $time) ?></p>
							<p style="text-align:right">Thủ thư</p>
						</div>



					</div>

			<?php }
			} ?>

			</div>
		</div>