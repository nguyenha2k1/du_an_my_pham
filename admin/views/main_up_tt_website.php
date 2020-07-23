<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="views/css/style.css">
	<link rel="stylesheet" href="views/css/main_tt_website.css">
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
			                Thông tin website
			            </a>
					</li>
					<li>
						<a href="">
			                <i class="fas fa-chevron-right"></i>
			                Sửa
			            </a>
					</li>
					
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
					<h2>Thông tin website</h2>
					
					<div class="all-item">
						<div class="item">
							<label>Tên công ty:</label>
							<input type="text" class="content" name="">
						</div>
						<div class="item">
							<label>Địa chỉ:</label>
							<input type="text" class="content" name="">
						</div>
						<div class="item">
							<label>Tel:</label>
							<input type="text" class="content" name="">
						</div>
						<div class="item">
							<label>Email:</label>
							<input type="text" class="content" name="">
						</div>
						<div class="item">
							<label>Website:</label>
							<input type="text" class="content" name="">
						</div>
						<div class="item">
							<label>Hotline:</label>
							<input type="text" class="content" name="">
						</div>
						<div class="item">
							<label>Tổng đài tư vấn:</label>
							<input type="text" class="content" name="">
						</div>
						<div class="item">
							<label>Facebook:</label>
							<input type="text" class="content" name="">
						</div>
						<div class="item">
							<label>Instagram:</label>
							<input type="text" class="content" name="">
						</div>
						<div class="item">
							<label>Pinterest:</label>
							<input type="text" class="content" name="">
						</div>
						<div class="item">
							<label>Google+:</label>
							<input type="text" class="content" name="">
						</div>
						<div class="item">
							<button>Cập nhật</button>
						</div>
						<div class="clr"></div>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</body>
</html>
