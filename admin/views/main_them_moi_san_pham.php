 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="views/css/style.css">
	<link rel="stylesheet" href="views/css/main_them_san_pham.css">
	<script type="text/javascript" src="views/ckeditor/ckeditor.js"></script>
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
						<a href="?page=product">
			                <i class="fas fa-chevron-right"></i>
			                Danh mục sản phẩm
			            </a>
					</li>
					
					<li>
						<a href="?page=product&select=add">
			                <i class="fas fa-chevron-right"></i>
			                Thêm mới
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
				<form class="form-add" action="?page=product&select=getadd" method="post">
					<h2>Thêm mới sản phẩm</h2>
					<button class="submit">Thêm</button>
					<div class="all-item">
						<div class="form-left">
							<div class="item">
								<div class="form-item">
									<label>Tên sản phẩm:</label>
									<input style="width: 100%" type="text" name="ten_sp">
								</div>
								<div class="form-item">
									<label>Giá bán(đồng):</label>
									<input type="text" name="gia_ban">
								</div>
								<div class="form-item">
									<label>Giá thị trường(đồng):</label>
									<input type="text" name="gia_thi_truong">
								</div>
								<div class="form-item">
									<label>Số lượng:</label>
									<input type="number" name="sl_trong_kho">
								</div>
								<div class="form-ite">
									<label>Hiển thị:</label>
									<input type="checkbox" name="hien_thi" checked>
								</div>
								<div class="form-item">
									<label>Thương hiệu:</label>
									<select name="ma_th">
										<?php while ($resultTh = mysqli_fetch_assoc($queryTh)) { ?>
										<option value="<?php echo $resultTh['ma_th']?>"><?php echo $resultTh['ten_thuong_hieu']?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-item">
									<label>Phân loại sản phẩm:</label>
									<select name="ma_pl">
										<?php while ($resultPl = mysqli_fetch_assoc($queryPl)) { ?>
										<option value="<?php echo $resultPl['ma_pl']?>"><?php echo $resultPl['ten_loai_sp']?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-item">
									<label>Image sản phẩm:</label>
									<input type="file" name="" accept=".jpg, .jpeg, .png">
								</div>
								<div class="form-item">
									<label>Image công dụng:</label>
									<input type="file" name="" accept=".jpg, .jpeg, .png">
								</div>
								<div class="form-item">
									<label>Image cách sử dụng:</label>
									<input type="file" name="" accept=".jpg, .jpeg, .png">
								</div>
								<div class="form-item">
									<label>Image bổ sung:</label>
									<input type="file" name="" accept=".jpg, .jpeg, .png">
								</div>
								
								
								
							</div>
						</div>
						<div class="form-right">
							<div class="form-item2">
								<label>Khái quát:</label>
								<textarea class="ckeditor" id="description" name="khai_quat"></textarea>
							</div>
							<div class="form-item2">
								<label>Nội dung:</label>
								<textarea class="ckeditor" id="description" name="noidung"></textarea>
							</div>
						</div>
						<div class="clr"></div>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</body>
</html>