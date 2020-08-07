<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="views/css/style.css">
	<link rel="stylesheet" type="text/css" href="views/css/main_don_hang.css">
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
					<div class="clr"></div>
				</ul>
				<!-- <div class="clr"></div> -->
	</div>
	<div class="bot">
		<div class="container">
			<div class="row">
				<ul class="ul-search menu-action">
					<li>
						<form action="?page=order&select=search" method="post">
							<ul class="menu-form">
								<li>
									<input type="text" name="search" placeholder="Tìm kiếm">
								</li>
								<li>
									<select name="sort">
										<option value="ma_dh">Mã đơn hàng</option>
										<option value="ho_va_ten">Tên khách hàng</option>
										<option value="trang_thai">Trạng thái:-> 1:Chưa giao, 2:Đang giao, 3:Đã giao</option>
									</select>
								</li>
								<li>
									<button><i class="fas fa-search"></i> Tìm kiếm</button>
								</li>
							</ul>
						</form>
					</li>
					<!-- <li>
						<a href="?page=delete"><button><i class="fas fa-trash-alt"></i> Xóa</button></a>
					</li> -->
					<li>
						<a href="?page=order"><button><i class="fas fa-step-backward"></i> Trở về đơn hàng</button></a>
					</li>
					<!-- <li>
						<a><button><i class="fas fa-sync"></i> Update</button></a>
					</li> -->
				</ul>
				
			</div>
			<div class="row">
				<table width="100%">
					<tr>
						<!-- <th width="30">
							<input type="checkbox" id="checkAll" name="">
						</th> -->
						<th width="20">Mã đơn hàng</th>
						<th width="100">Tên khách hàng</th>
						<th width="60">Ngày đặt</th>
						<th width="60">Trạng thái</th>
						<th width="30">Xem chi tiết</th>
						<th width="40">Tác vụ</th>
					</tr>
					<?php while ($result = mysqli_fetch_assoc($query)) {
						
					?>
					<tr>
						<!-- <td>
							<input type="checkbox" class="checkItem" name="">
						</td> -->
						<td><?php echo $result['ma_dh']; ?></td>
						<td style="text-align: left;"><?php echo $result['ho_va_ten']; ?></td>
						<td>
							<?php
								$date = date("d-m-Y g:i A", strtotime($result['ngay_tao']));
								echo $date; 
							?>
						</td>
						<?php 
								switch ($result['trang_thai']) {
									case '1':
										$color = 'blue';
										$trangthai = "Chưa giao";
										break;
									case '2':
										$color = 'red';
										$trangthai = "Đang giao";
										break;
									case '3':
										$color = 'green';
										$trangthai = "Đã giao";
										break;
									default:
										break;
								}
						?>
						<td style="color: <?php echo $color ?>">
							<?php
								echo $trangthai;
							?>
						</td>
						<td><a href="?page=order&select=detail&id=<?php echo $result['ma_dh']; ?>">Xem chi tiết</a></td>
						<td>
							<a href="?page=order&select=edit&id=<?php echo $result['ma_dh']; ?>"><i class="fas fa-edit"></i></a>
							<a href="?page=order&select=delete&id=<?php echo $result['ma_dh']; ?>"><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<?php }?>
					
					
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