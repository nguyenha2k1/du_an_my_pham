<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="views/css/style.css">
	<link rel="stylesheet" href="views/css/main_them_moi_slideshow.css">
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
						<a href="?page=order">
			                <i class="fas fa-chevron-right"></i>
			                Cập nhật trạng thái đơn hàng
			            </a>
					
				</ul>
				<ul class="menu-right">
					<li>
						<a href="?page=logout">
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
						<a href="../">
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
				<form class="form-add" action="?page=order&select=update&id=<?php echo $result['ma_dh']; ?>" method="post">
					<h2>Cập nhật trang thái đơn hàng</h2>
					
					<div class="all-item">
						<div class="item">
							<label>Mã đơn hàng:</label>
							<div style="padding: 5px;display: inline-block;"><?php echo $result['ma_dh']; ?></div>
						</div>
						<div class="item">
							<label>Tên khách hàng:</label>
							<div style="padding: 5px;display: inline-block;"><?php echo $result['ho_va_ten']; ?></div>
						</div>
						<div class="item">
							<select class="select" name="trangthai" style="">
								<option <?php if ($result['trang_thai'] == 3) {
									echo "selected";
								} ?> value="3">Đã giao</option>
								<option <?php if ($result['trang_thai'] == 1) {
									echo "selected";
								} ?> value="1">Chưa giao</option>
								<option <?php if ($result['trang_thai'] == 2) {
									echo "selected";
								} ?> value="2">Đang giao</option>
							</select>
						</div>
					
						<button class="submit">Update</button>
						<div class="clr"></div>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</body>
</html>