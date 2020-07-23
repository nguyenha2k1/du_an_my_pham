<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="views/css/style.css">
	<link rel="stylesheet" type="text/css" href="views/css/main_email_khuyen_mai.css">
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
			                Email nhận khuyến mãi
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
					<div class="clr"></div>
				</ul>
				<!-- <div class="clr"></div> -->
	</div>
	<div class="bot">
		<div class="container">
			<div class="row">
				<ul class="ul-search menu-action">
					<li>
						<form>
							<ul class="menu-form">
								<li>
									<input type="text" name="search" placeholder="Tìm kiếm">
								</li>
								<li>
									<select>
										<option required value="0">--Tìm theo--</option>
										<option value="1">Email</option>
										<option value="2">Ngày tạo</option>
									</select>
								</li>
								<li>
									<a><button><i class="fas fa-search"></i> Tìm kiếm</button></a>
								</li>
							</ul>
						</form>
					</li>
					<li>
						<a href="?page=delete"><button><i class="fas fa-trash-alt"></i> Xóa</button></a>
					</li>
					<li>
						<a><button><i class="fas fa-plus"></i> Thêm mới</button></a>
					</li>
				</ul>
				
			</div>
			<div class="row">
				<table width="100%">
					<tr>
						<th width="30">
							<input type="checkbox" id="checkAll" name="">
						</th>
						<th width="40">STT</th>
						<th width="300">Email</th>
						<th width="60">Ngày tạo</th>
						<th width="70">Tác vụ</th>
					</tr>
					<tr>
						<td>
							<input type="checkbox" class="checkItem" name="">
						</td>
						<td>01</td>
						<td>nguyenha0354643484@gmail.com</td>
						<td>03/07/2020</td>
						<td>
							<a href=""><i class="fas fa-edit"></i></a>
							<a href=""><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" class="checkItem" name="">
						</td>
						<td>01</td>
						<td>nguyenha0354643484@gmail.com</td>
						<td>03/07/2020</td>
						<td>
							<a href=""><i class="fas fa-edit"></i></a>
							<a href=""><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" class="checkItem" name="">
						</td>
						<td>01</td>
						<td>nguyenha0354643484@gmail.com</td>
						<td>03/07/2020</td>
						<td>
							<a href=""><i class="fas fa-edit"></i></a>
							<a href=""><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" class="checkItem" name="">
						</td>
						<td>01</td>
						<td>nguyenha0354643484@gmail.com</td>
						<td>03/07/2020</td>
						<td>
							<a href=""><i class="fas fa-edit"></i></a>
							<a href=""><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" class="checkItem" name="">
						</td>
						<td>01</td>
						<td>nguyenha0354643484@gmail.com</td>
						<td>03/07/2020</td>
						<td>
							<a href=""><i class="fas fa-edit"></i></a>
							<a href=""><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" class="checkItem" name="">
						</td>
						<td>01</td>
						<td>nguyenha0354643484@gmail.com</td>
						<td>03/07/2020</td>
						<td>
							<a href=""><i class="fas fa-edit"></i></a>
							<a href=""><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					
					
				</table>
				<!--  -->
			</div>
		</div>
	</div>
<script type="text/javascript">
	 $("#checkAll").click(function () {
	     $('.checkItem').not(this).prop('checked', this.checked);
	 });
</script>
</body>
</html>