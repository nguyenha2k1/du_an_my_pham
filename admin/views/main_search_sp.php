<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="views/css/style.css">
	<link rel="stylesheet" type="text/css" href="views/css/san_pham.css">
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
						<a href="?page=product">
			                <i class="fas fa-chevron-right"></i>
			                Tất cả sản phẩm
			            </a>
					</li>
					<li>
						<a href="?page=product&select=search">
			                <i class="fas fa-chevron-right"></i>
			                Tìm kiếm
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
					<div class="clr"></div>
				</ul>
				<!-- <div class="clr"></div> -->
	</div>
	<div class="bot">
		<div class="container">
			<div class="row">
				<ul class="ul-search menu-action">
					<li>
						<form action="?page=product&select=search" method="post">
							<ul class="menu-form">
								<li>
									<input type="text" name="search" placeholder="Tìm kiếm">
								</li>
								<li>
									<select name="sort">
										<option value="ma_sp">Mã sản phẩm</option>
										<option value="gia_ban">Giá bán</option>
										<option value="gia_thi_truong">Giá thị trường</option>
										<option value="ten_sp">Tên sản phẩm</option>
										<option value="ten_thuong_hieu">Tên thương hiệu</option>
										<option value="ten_loai_sp">Tên phân loại</option>
									</select>
								</li>
								<li>
									<button><i class="fas fa-search"></i> Tìm kiếm</button>
								</li>
							</ul>
						</form>
					</li>
					<li>
						<a href="?page=product"><button><i class="fas fa-step-backward"></i> Quay lại trang sản phẩm</button></a>
					</li>
					<li>
						<a href="?page=product&select=add"><button><i class="fas fa-plus"></i> Thêm mới</button></a>
					</li>
				</ul>
				
			</div>
			<div class="row">
				<table width="100%">
					<tr>
						<th width="30">
							<input type="checkbox" id="checkAll" name="">
						</th>
						<th width="20">Mã sản phẩm</th>
						<th width="200">Tên sản phẩm</th>
						<th width="80">Ngày tạo</th>
						<th width="40">Giá bán</th>
						<th width="40">Giá thị trường</th>
						<th width="30">Tên thương hiệu</th>
						<th width="70">Tên phân loại</th>
						<th width="50">Tình trạng</th>
						<th width="20">Số lượng bán</th>
						<th width="35">Hiển thị <input type="checkbox" id="checkAll1" name=""></th>
						<th width="50">Tác vụ</th>
					</tr>
					<?php while ($result = mysqli_fetch_assoc($query)) {
						
					?>
					<tr>
						<td>
							<input type="checkbox" class="checkItem" name="">
						</td>
						<td><?php echo $result['ma_sp']; ?></td>
						<td style="text-align: left;"><?php echo $result['ten_sp']; ?></td>
						<td>
							<?php
								$date = date("d-m-Y g:i A", strtotime($result['date_tao']));
								echo $date; 
							?>
							
						</td>
						<td><?php echo number_format($result['gia_ban'], 0, ",", "."); ?> đ</td>
						<td><?php echo number_format($result['gia_thi_truong'], 0, ",", "."); ?> đ</td>
						<td style="text-align: left;"><?php echo $result['ten_thuong_hieu']; ?></td>
						<td><?php echo $result['ten_loai_sp']; ?></td>
						<td><?php echo $result['sl_trong_kho']; ?></td>
						<td><?php echo $result['sl_da_ban']; ?></td>
						<td>
							<input type="checkbox" class="checkItem1" name="" <?php if ($result['hien_thi'] == 1) {echo "checked";} ?>>
						</td>
						
						<td>
							<a href="?page=product&select=edit&id=<?php echo $result['ma_sp']; ?>"><i class="fas fa-edit"></i></a>
							<a href="?page=product&select=delete&id=<?php echo $result['ma_sp']; ?>" onclick=" return kiemTra()"><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<?php } ?>
				
<script type="text/javascript">
	function kiemTra(){
		if (confirm('Bạn thực sự muốn xóa sản phẩm!!!')==true) {
			return true;
		} else {
			return false;
		}
		
	}
</script>
					
					
					
				</table>
				<!--  -->
				<!-- phân trang -->
				
				<!--  -->
			</div>
		</div>
	</div>
<script type="text/javascript">
	 $("#checkAll").click(function () {
	     $('.checkItem').not(this).prop('checked', this.checked);
	 });
</script>
<script type="text/javascript">
	 $("#checkAll1").click(function () {
	     $('.checkItem1').not(this).prop('checked', this.checked);
	 });
</script>
</body>
</html>