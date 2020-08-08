


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
						<a href="?page=account&account=customer">
			                <i class="fas fa-chevron-right"></i>
			                User
			            </a>
					</li>
					<li>
						<a href="?page=account&account=<?php echo $user ?>">
			                <i class="fas fa-chevron-right"></i>
			                <?php 
				                if ($user=='staff') {
				                	echo "Nhân viên";
				                }else{
				                	if ($user=='current_customers') {
				                		echo "Khách hàng vãng lai";
				                	}else{
				                		echo "Khách hàng";
				                	}
				                }
			                	
			                ?>
			            </a>
					</li>
					<li>
						<a href="?page=account&account=<?php echo $cap ?>">
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
						<form action="?page=account&account=<?php echo $user ?>&select=search" method="post">
							<ul class="menu-form">
								<li>
									<input type="text" name="search" placeholder="Tìm kiếm">
								</li>
								<li>
									<select name="sort">
										<option value="id">ID</option>
										<option value="ho_va_ten">Họ và tên</option>
										<option value="sdt">Số ĐT</option>
										<option value="dia_chi">Địa chỉ</option>
										<option value="email">Email</option>
									</select>
								</li>
								<li>
									<button><i class="fas fa-search"></i> Tìm kiếm</button>
								</li>

							</ul>
						</form>
					</li>
					<li>
						<a href="?page=account&account=customer"><button><i class="fas fa-step-backward"></i> Quay lại trang tài khoản</button></a>
					</li>
					<!-- <li>
						<a href="?page=delete"><button><i class="fas fa-trash-alt"></i> Xóa</button></a>
					</li> -->
					<!-- <li>
						<a><button><i class="fas fa-plus"></i> Thêm mới</button></a>
					</li> -->
				</ul>
				
			</div>
			<div class="row">
				<table width="100%">
					<tr>
						<th width="40">ID</th>
						<th width="100">Họ và tên</th>
						<th width="40">Giới tính</th>
						<th width="60">Ngày sinh</th>
						<th width="60">Số ĐT</th>
						<th width="200">Địa chỉ</th>
						<th width="120">Email</th>
						<th width="50">Ngày tạo</th>
						<th width="50">Hoạt động <input type="checkbox" id="checkAll" name=""></th>
						<th width="70">Tác vụ</th>
					</tr>
					<?php while ($result = mysqli_fetch_assoc($query)) {
						
					?>
					<tr>
						<td><?php echo $result['id']; ?></td>
						<td><?php echo $result['ho_va_ten']; ?></td>
						<td><?php 
							if ($result['gioi_tinh']==1) {
								echo "Nam";
							}else{
								echo "Nữ";
							}
							?>
							
						</td>
						<td><?php 
							if ($result['ngay_sinh']==NULL) {
								echo "Không có";
							}else{
								$date = date("d-m-Y", strtotime($result['ngay_sinh']));
								echo $date; 
							}
							?>
							
						</td>
						<td><?php 
								$format_number = number_format($result['sdt'], 0, "",".") ;
								echo '0'.$format_number;
							?></td>
						<td><?php echo $result['dia_chi']; ?></td>
						<td><?php echo $result['email']; ?></td>
						<td><?php 
							$date = date("d-m-Y g:i A", strtotime($result['ngay_tao']));
								echo $date; 
						 	?>
						 	
						 </td>
						
						<td>
							<input type="checkbox" class="checkItem" name="" <?php if ($result['hoat_dong'] == 1) {echo "checked";} ?>>
						</td>
						<td>
							<!-- <a href=""><i class="fas fa-edit"></i></a> -->
							<a href="?page=account&account=customer&select=delete&id=<?php echo $result['id']; ?>"><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<?php } ?>
					

					
					
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