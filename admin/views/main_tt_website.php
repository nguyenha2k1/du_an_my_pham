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
		            	<a href="?page=admin">
			                <i class="fas fa-home"></i>
			                Trang chủ
			            </a>
					</li>
					<li>
						<a href="?page=infor">
			                <i class="fas fa-chevron-right"></i>
			                Thông tin website
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
				<form class="form-add" action="?page=infor&select=edit" method="post">
					<h2>Thông tin website</h2>
					
					<div class="all-item">
						<div class="item">
							<label>Tên công ty:</label>
							<div class=""><?php echo $result['tenCty']; ?></div>
						</div>
						<div class="item">
							<label>Địa chỉ:</label>
							<div class=""><?php echo $result['dia_chi']; ?></div>
						</div>	
						<div class="item">
							<label>Tel:</label>
							<div class=""> <?php 
                                $format_number = number_format($result['tel'], 0, "",".") ;
                                echo '0'.$format_number;
                            ?></div>
						</div>	
						<div class="item">
							<label>Email:</label>
							<div class=""><?php echo $result['email']; ?></div>
						</div>	
						<div class="item">
							<label>Website:</label>
							<div class=""><?php echo $result['website']; ?></div>
						</div>	
				
						<div class="item">
							<label>Hotline:</label>
							<div class=""> <?php 
                                $format_number = number_format($result['hotline'], 0, "",".") ;
                                echo '0'.$format_number;
                            ?></div>
						</div>	
						<div class="item">
							<label>Tổng đài tư vấn:</label>
							<div class=""><?php echo $result['tongdTuvan']; ?></div>
						</div>	
						<div class="item">
							<label>Facebook:</label>
							<div class=""><?php echo $result['facebook']; ?></div>
						</div>
						<div class="item">
							<label>Instagram:</label>
							<div class=""><?php echo $result['instagram']; ?></div>
						</div>
						<div class="item">
							<label>Pinterest:</label>
							<div class=""><?php echo $result['pinterest']; ?></div>
						</div>
						<div class="item">
							<label>Google+:</label>
							<div class=""><?php echo $result['google']; ?></div>
						</div>
						<div class="item">
							<button>Sửa</button>
						</div>
						<div class="clr"></div>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</body>
</html>
