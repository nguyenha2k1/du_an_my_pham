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
						<a href="?page=show&img=logo">
			                <i class="fas fa-chevron-right"></i>
			                Giao diện
			            </a>
					</li>
					
					<li>
						<a href="?page=show&img=slide">
			                <i class="fas fa-chevron-right"></i>
			                Slideshow
			            </a>
					</li>
					<li>
						<a href="?page=show&img=slide&select=add">
			                <i class="fas fa-chevron-right"></i>
			                Thêm mới slideshow
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
				<form class="form-add" action="?page=show&img=slide&select=getadd" method="post" id="upload-file-form" enctype="multipart/form-data">
					<h2>Thêm mới slideshow</h2>
					
					<div class="all-item">
						<div class="item">
							<label>Thông tin slideshow:</label>
							<input type="text" name="thong_tin">
						</div>
						<div class="item">
							<label>Image:</label>
							<input type="file" multiple name="file_upload[]">
						</div>
						<div class="item">
							<label>Hiện:</label>
							<input type="checkbox" checked name="hien_thi">
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