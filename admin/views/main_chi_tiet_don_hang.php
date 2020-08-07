<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="views/css/style.css">
	<link rel="stylesheet" href="views/css/main_chi_tiet_don_hang.css">
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script src="{!! asset('ckeditor-dev/ckeditor.js') !!}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<div class="top" >
			<ul class="menu-left">
					<li>
		            	<a href="?page=admin">
			                <i class="fas fa-home"></i>
			                Trang chủ
			            </a>
					</li>
					<li>
						<a href="?page=order">
			                <i class="fas fa-chevron-right"></i>
			                Đơn hàng
			            </a>
					</li>
					
					<li>
						<a href="?page=order&select=detail">
			                <i class="fas fa-chevron-right"></i>
			                Chi tiết đơn hàng
			            </a>
					</li>
					
				</ul>
				<ul class="menu-right">
					<li>
						<a href="">
			                <i class="fa fa-window-close"></i>
			                Đăng xuất
			            </a>
					</li>
					<li>
						<a href="">
			                <i class="fa fa-bell"></i>
			                Thông báo
			            </a>
					</li>
					<li>
						<a href="">
			                <i class="fa fa-user"></i>
			                Thông tin tài khoản
			            </a>
					</li>
					<li>
						<a href="">
			                <i class="fa fa-caret-left"></i>
			                Vào trang web
			            </a>
					</li>
					<li style="color: #ff3232; font-size: 14px;">
		            	<span style="color: black;">Xin chào: </span>
		            	<?php 
		            		echo $_SESSION['admin'];
		            	?>
					</li>
				</ul>
				
	</div>
	<div class="bot">
		<div class="container">
			<div class="row">
				<div class="form-add">
					<h2>Chi tiết đơn hàng</h2>
					<div class="all-item">
						<div class="items-top">
							<div class="items border">
								<h3>Thông tin chung</h3>
								<div class="item">
									<label>Ngày tạo:</label>
									<div>
										<?php
											$date = date("d-m-Y g:i A", strtotime($result['ngay_tao']));
											echo $date; 
										?>
									</div>
								</div>
								<div class="item">
									<label>Mã đơn hàng:</label>
									<div><?php echo $result['ma_dh']; ?></div>
								</div>
								<div class="item">
									<label>Ngày ship:</label>
									<div>
										<?php
											if ($result['ngay_ship']==NULL) {
												echo "Chưa ship";
											}else{
												$date = date("d-m-Y g:i A", strtotime($result['ngay_ship']));
												echo $date; 
											}
										?>
									</div>
								</div>
								<?php 
									switch ($result['trang_thai']) {
										case '1':
											$color = 'blue';
											$trangthai = "Chưa giao";
											break;
										case '2':
											$color = 'red';
											$trangthai = "Đang giao";
											break;
										case '3':
											$color = 'green';
											$trangthai = "Đã giao";
											break;
										default:
											break;
									}
								?>
								<div class="item">
									<label>Trạng thái:</label>
									<div style="color: <?php echo $color; ?>">
										<?php echo $trangthai; ?>
										<span style="color: red">
											<?php
												if ($result['ngay_ship_ht']==NULL) {
													echo "";
												}else{
													$date = date("d-m-Y g:i A", strtotime($result['ngay_ship_ht']));
													echo "&nbsp;&nbsp;&nbsp;".$date; 
												}
											?>
										</span>
									</div>
								</div>

							</div>
							<div class="itemss border">
								<h3>Khách hàng</h3>
								<div class="item">
									<label>Họ và tên:</label>
									<div><?php echo $result['ho_va_ten']; ?></div>
								</div>
								<div class="item">
									<label>SĐT:</label>
									<div>
										<?php 
											$format_number = number_format($result['sdt'], 0, "",".") ;
											echo '0'.$format_number;
										?>
									</div>
								</div>
								<div class="item">
									<label>Địa chỉ:</label>
									<div><?php echo $result['dia_chi']; ?></div>
								</div>
								<div class="item">
									<label>Email:</label>
									<div><?php echo $result['email']; ?></div>
								</div>
								
							</div>
							<div class="items">
								<h3>Thanh toán</h3>
								<div class="item">
									<label>Phí giao hàng:</label>
									<div><?php echo number_format($result['phi_ship'], 0, ',', ','); ?>₫</div>
								</div>
								<div class="item">
									<label>Tổng tiền:</label>
									<div><?php echo number_format($result['tong_tien'], 0, ',', ','); ?>₫</div>
								</div>
								<div class="item">
									<label>Hình thức:</label>
									<div>Thanh toán khi nhận hàng</div>
								</div>
								<div class="item">
									<label>Ghi chú:</label>
									<div><?php echo $result['ghi_chu']; ?></div>
								</div>
							</div>
							<div class="clr"></div>
						</div>
						<table class="items-bot">
							<tr>
								<th width="40">STT</th>
								<th width="40">Mã sản phẩm</th>
								<th width="250">Tên sản phẩm</th>
								<th width="60">Giá</th>
								<th width="40">Số lượng</th>
								<th width="60">Thành tiền</th>
							</tr>
							<?php $stt = 1; while ($result1 = mysqli_fetch_assoc($query1)) {
							?>
							<tr>
								<td><?php echo $stt; ?></td>
								<td><?php echo $result1['ma_sp']; ?></td>
								<td><?php echo $result1['ten_sp']; ?></td>
								<td><?php echo number_format($result1['gia_tien'], 0, ',', ','); ?>₫</td>
								<td><?php echo $result1['so_luong']; ?></td>
								<td><?php $thanht = ($result1['gia_tien']*$result1['so_luong']); echo number_format($thanht, 0, ',', ','); ?>₫</td>
							</tr>
							<?php 
							$stt+=1; }?>
						</table>
					</div>

				</div>
			</div>
			
		</div>
	</div>
</body>
</html>