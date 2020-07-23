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
				<form class="form-add" method="post">
					<h2>Cập nhật trang thái đơn hàng</h2>
					
					<div class="all-item">
						<div class="item">
							<label>Mã đơn hàng:</label>
							<div style="padding: 5px;display: inline-block;">01</div>
						</div>
						<div class="item">
							<label>Tên khách hàng:</label>
							<div style="padding: 5px;display: inline-block;">Nguyễn Ngọc Hà</div>
						</div>
						<div class="item">
							<label>Đã giao:</label>
							<input type="radio" name="Update">
						</div>
						<div class="item">
							<label>Đang giao:</label>
							<input type="radio" name="Update">
						</div>
						<div class="item">
							<label>Chưa giao:</label>
							<input type="radio" name="Update">
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