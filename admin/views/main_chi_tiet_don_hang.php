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
		            	<a href="">
			                <i class="fas fa-home"></i>
			                Trang chủ
			            </a>
					</li>
					<li>
						<a href="">
			                <i class="fas fa-chevron-right"></i>
			                Đơn hàng
			            </a>
					</li>
					
					<li>
						<a href="">
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
									<div>2020/05/20 15:45:21</div>
								</div>
								<div class="item">
									<label>Mã đơn hàng:</label>
									<div>01</div>
								</div>
								<div class="item">
									<label>Ngày ship:</label>
									<div>2020/05/20 15:45:21</div>
								</div>
								<div class="item">
									<label>Trạng thái:</label>
									<div>Chưa giao</div>
								</div>
							</div>
							<div class="itemss border">
								<h3>Khách hàng</h3>
								<div class="item">
									<label>Họ và tên:</label>
									<div>Nguyễn Ngọc Hà</div>
								</div>
								<div class="item">
									<label>SĐT:</label>
									<div>0354643484</div>
								</div>
								<div class="item">
									<label>Địa chỉ:</label>
									<div>Làng sinh viên Hacinco, Thanh Xuân, Hà Nội</div>
								</div>
								<div class="item">
									<label>Email:</label>
									<div>nguyenha0354643484@gmail.com</div>
								</div>
							</div>
							<div class="items">
								<h3>Thanh toán</h3>
								<div class="item">
									<label>Phí giao hàng:</label>
									<div>30,000đ</div>
								</div>
								<div class="item">
									<label>Tổng tiền:</label>
									<div>885,000đ</div>
								</div>
								<div class="item">
									<label>Hình thức:</label>
									<div>Thanh toán khi nhận hàng</div>
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
							<tr>
								<td>01</td>
								<td>02</td>
								<td>Son habaki</td>
								<td>180,000</td>
								<td>1</td>
								<td>171,000</td>
							</tr>
							<tr>
								<td>01</td>
								<td>02</td>
								<td>Son habaki</td>
								<td>180,000</td>
								<td>1</td>
								<td>171,000</td>
							</tr>
							<tr>
								<td>01</td>
								<td>02</td>
								<td>Son habaki</td>
								<td>180,000</td>
								<td>1</td>
								<td>171,000</td>
							</tr>
							<tr>
								<td>01</td>
								<td>02</td>
								<td>Son habaki</td>
								<td>180,000</td>
								<td>1</td>
								<td>171,000</td>
							</tr>
							<tr>
								<td>01</td>
								<td>02</td>
								<td>Son habaki</td>
								<td>180,000</td>
								<td>1</td>
								<td>171,000</td>
							</tr>
						</table>
					</div>

				</div>
			</div>
			
		</div>
	</div>
</body>
</html>