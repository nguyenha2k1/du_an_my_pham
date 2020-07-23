<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="views/css/main_dashboard.css">
	<link rel="stylesheet" href="views/css/style.css">
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
						<a href="?page=admin">
			                <i class="fas fa-chevron-right"></i>
			                Dashboard
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
<div class="cards">
	<h1>Dashboard</h1>
	<div class="services">
		<div class="content content-1">
			<div class="fab fa-product-hunt"></div>
			<h2>Tổng sản phẩm</h2>
			<p></p>
			<a href="#">50</a>
		</div>
		<div class="content content-2">
			<div class="fas fa-heart"></div>
			<h2>Tổng giá trị sản phẩm</h2>
			<p></p>
			<a href="#">10,000,000</a>
		</div>
		<div class="content content-3">
			<div class="fab fa-first-order"></div>
			<h2>Đơn hàng hôm nay</h2>
			<p></p>
			<a href="#">5</a>
		</div>
		
	</div>
	<div class="services">
		<div class="content content-4">
			<div class="far fa-money-bill-alt"></div>
			<h2>Doanh thu hôm nay</h2>
			<p></p>
			<a href="#">2,400,000</a>
		</div>
		<div class="content content-5">
			<div class="far fa-money-bill-alt"></div>
			<h2>Doanh thu tuần này</h2>
			<p></p>
			<a href="#">5,000,000</a>
		</div>
		<div class="content content-6">
			<div class="far fa-money-bill-alt"></div>
			<h2>Doanh thu tháng này</h2>
			<p></p>
			<a href="#">8,000,000</a>
		</div>
	</div>
</div>
</body>
</html>