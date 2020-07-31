

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="views/css/main_them_san_pham.css">
	<link rel="stylesheet" type="text/css" href="views/css/style.css">
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
						<a href="#">
			                <i class="fas fa-chevron-right"></i>
			                Sửa sản phẩm
			            </a>
					</li>
					<li>
						<a href="#">
			                <i class="fas fa-chevron-right"></i>
			                Mã sản phẩm: <?php echo $_GET['id']; ?>
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
				<form class="form-add" action="?page=product&select=update&id=<?php echo $id?>" method="post" id="upload-file-form" enctype="multipart/form-data">
					<h2>Sửa sản phẩm</h2>
					<button class="submit" >Cập nhật</button>
					<div class="all-item">
						<div class="form-left">
							<div class="item">
								<div class="form-item">
									<label>Tên sản phẩm:</label>
									<input style="width: 100%" type="text" name="ten_sp" value="<?php echo $result['ten_sp']; ?>">
								</div>
								<div class="form-item">
									<label>Giá bán(đồng):</label>
									<input type="text" name="gia_ban" value="<?php echo number_format($result['gia_ban'], 0, ",", "."); ?>">
								</div>
								<div class="form-item">
									<label>Giá thị trường(đồng):</label>
									<input type="text" name="gia_thi_truong" value="<?php echo number_format($result['gia_thi_truong'], 0, ",", "."); ?>">
								</div>
								<div class="form-item">
									<label>Số lượng:</label>
									<input type="number" name="sl_trong_kho" value="<?php echo $result['sl_trong_kho']; ?>">
								</div>
								<div class="form-ite">
									<label>Hiển thị:</label>
									<input type="checkbox" name="hien_thi" <?php if ($result['hien_thi'] == 1) {echo "checked";} ?>>
								</div>
								<div class="form-item">
									<label>Thương hiệu:</label>
									<select name="ma_th">
										<?php while ($resultTh = mysqli_fetch_assoc($queryTh)) { ?>
										<option value="<?php echo $resultTh['ma_th']?>" <?php if ($resultTh['ma_th']==$result['ma_th']) {
											echo "selected";
										} ?> ><?php echo $resultTh['ten_thuong_hieu']?></option>
										<?php } ?>
									</select>
								</div>
								
								<div class="form-item">
									<label>Phân loại sản phẩm:</label>
									<select name="ma_pl">
										<?php while ($resultPl = mysqli_fetch_assoc($queryPl)) { ?>
										<option value="<?php echo $resultPl['ma_pl']?>" <?php if ($resultPl['ma_pl']==$result['ma_pl']) {
											echo "selected";
										} ?>><?php echo $resultPl['ten_loai_sp']?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-item">
									<label>Image sản phẩm:</label>
									<img src="../<?php echo $result['img'] ?>">
									<input type="file" name="imgsp[]" accept=".jpg, .jpeg, .png">
								</div>
								<div class="form-item">
									<label style="widows: 100%">Image bổ sung:</label>
									<div class="div"><br><br><br></div>
									<?php while ($resultIMG = mysqli_fetch_assoc($queryIMG)) {
									?>
									<img src="../<?php echo $resultIMG['img'] ?>">
									<?php }?>
									<input type="file" multiple name="file_upload[]" accept=".jpg, .jpeg, .png">
								</div>
								
								
								
							</div>
						</div>
						<div class="form-right">
							<div class="form-item2">
								<label>Khái quát:</label>
								<textarea class="ckeditor" id="description" name="khai_quat"><?php echo $result['khai_quat']; ?></textarea>
							</div>
							
							<div class="form-item2">
								<label>Nội dung:</label>
								<textarea class="ckeditor" id="description" name="noidung"><?php echo $result['noidung']; ?></textarea>
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