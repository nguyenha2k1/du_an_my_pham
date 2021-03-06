<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="views/css/style.css">
	<link rel="stylesheet" href="views/css/main_sua_image_sp.css">
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
						<a href="?page=images&img=imgsp">
			                <i class="fas fa-chevron-right"></i>
			                Images
			            </a>
					</li>
					<li>
						<a href="?page=images&img=imgsp">
			                <i class="fas fa-chevron-right"></i>
			                Images sản phẩm
			            </a>
					</li>
					<li>
						<a href="">
			                <i class="fas fa-chevron-right"></i>
			                Sửa images sản phẩm
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
				<form class="form-add" action="?page=images&img=imgsp&select=update&id=<?php echo $id?>" method="post" id="upload-file-form" enctype="multipart/form-data">
					<h2>Sửa images sản phẩm</h2>
					
					<div class="all-item">
						<div class="item">
							<label>Tên sản phẩm:</label>
							<div><?php echo $result['ten_sp']; ?></div>
						</div>
						<div class="item">
							<label>Image sản phẩm:</label>
							<img class="myImages" id="myImg" src="../<?php echo $result['img']; ?>">
							<input type="file" name="file_upload[]">
						</div>	
						<!-- <div class="item">
							<label>Image công dụng:</label>
							<img class="myImages" id="myImg" src="img/Hinh-7-son-duong-moi-Astrid-Lip-Balm.jpg">
							<input type="file" name="">
						</div>	
						<div class="item">
							<label>Image cách sử dụng:</label>
							<img class="myImages" id="myImg" src="img/Hinh-8-son-duong-moi-Astrid-Lip-Balm.jpg">
							<input type="file" name="">
						</div>	
						<div class="item">
							<label>Image bổ sung:</label>
							<img class="myImages" id="myImg" src="img/xit-khoang-la-roche-posay-lam-diu-va-bao-ve-da-05025004.jpg">
							<input type="file" name="">
						</div>	 -->
						<button class="submit">Cập nhật</button>
						<div class="clr"></div>
					</div>
				</form>
				<div id="myModal" class="modal">
					<span class="close">&times;</span>
					<img class="modal-content" id="img01">
					<div id="caption"></div>
				</div>
			</div>
			
		</div>
	</div>

	<script>

		var modal = document.getElementById('myModal');
		var images = document.getElementsByClassName('myImages');
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");

		for (var i = 0; i < images.length; i++) {
		  var img = images[i];
		  img.onclick = function(evt) {
		    modal.style.display = "block";
		    modalImg.src = this.src;
		    captionText.innerHTML = this.alt;
		  }
		}

		var span = document.getElementsByClassName("close")[0];

		span.onclick = function() {
		  modal.style.display = "none";
		}
	</script>
</body>
</html>