<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="views/css/style.css">
	<link rel="stylesheet" href="views/css/them_moi_tk_nhan_vien.css">
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
			                Thông tin users
			            </a>
					</li>
					
					<li>
						<a href="">
			                <i class="fas fa-chevron-right"></i>
			                Nhân viên
			            </a>
					</li>
					<li>
						<a href="">
			                <i class="fas fa-chevron-right"></i>
			                Thêm TK nhân viên
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
				<form class="form-add" method="post">
					<h2>Thêm mới TK nhân viên</h2>
					
					<div class="all-item">
						<div class="item">
							<label>Họ và tên:</label>
							<input type="text" name="">
						</div>
						<div class="item">
							<label>Giới tính:</label>
							<select>
								<option>Nam</option>
								<option>Nữ</option>
							</select>
						</div>	
						<div class="item">
							<label>Ngày sinh:</label>
							<input type="date" name="">
						</div>	
						<div class="item">
							<label>SĐT:</label>
							<input type="text" name="">
						</div>	
						<div class="item">
							<label>Email:</label>
							<input type="email" name="">
						</div>	
						<div class="item">
							<label>Địa chỉ:</label>
							<textarea></textarea>
						</div>	
						<div class="item">
							<label>Tên tài khoản:</label>
							<input type="text" name="">
						</div>	
						<div class="item">
							<label>Mật khẩu:</label>
							<input type="password" name="">
						</div>	
						<div class="item" style="padding-bottom: 20px">
							<label>Quyền:</label>
							<select>
								<option value="1">ADMIN</option>
								<option value="2">Nhân viên</option>
							</select>
						</div>
						<button class="submit">Thêm</button>
						<div class="clr"></div>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</body>
</html>