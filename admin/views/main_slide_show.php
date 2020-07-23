<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="views/css/style.css">
	<link rel="stylesheet" type="text/css" href="views/css/slide_show.css">
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
			                Giao diện
			            </a>
					</li>
					<li>
						<a href="">
			                <i class="fas fa-chevron-right"></i>
			                Slide show
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
						<form>
							<ul class="menu-form">
								<li>
									<input type="text" name="search" placeholder="Tìm kiếm">
								</li>
								<li>
									<select>
										<option required value="0">--Tìm theo--</option>
										<option value="1">Mã slide</option>
										<option value="2">Tên slide</option>
									</select>
								</li>
								<li>
									<button><i class="fas fa-search"></i> Tìm kiếm</button>
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
						
						<th width="40">Mã slide</th>
						<th width="250">Tên slide</th>
						<th width="700">Image</th>
						<th width="50">Hiển thị <input type="checkbox" id="checkAll" name=""></th>
						<th width="70">Tác vụ</th>
					</tr>
					<tr>
						<td>01</td>
						<td>Banner logo</td>
						<td>
							<img class="myImages" id="myImg" src="img/logo.jpg">
						</td>
						<td>
							<input type="checkbox" class="checkItem" name="">
						</td>
						<td>
							<a href=""><i class="fas fa-edit"></i></a>
							<a href=""><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<tr>
						<td>01</td>
						<td>Chương trình tích điểm</td>
						<td>
							<img class="myImages" id="myImg" src="img/2.png">
						</td>
						<td>
							<input type="checkbox" class="checkItem" name="">
						</td>
						<td>
							<a href=""><i class="fas fa-edit"></i></a>
							<a href=""><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<tr>
						<td>01</td>
						<td>Quyền lợi đặc biệt</td>
						<td>
							<img class="myImages" id="myImg" src="img/3.jpg">
						</td>
						<td>
							<input type="checkbox" class="checkItem" name="">
						</td>
						<td>
							<a href=""><i class="fas fa-edit"></i></a>
							<a href=""><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<tr>
						<td>01</td>
						<td>Chính thức có mặt tại shoppe</td>
						<td>
							<img class="myImages" id="myImg" src="img/4.png">
						</td>
						<td>
							<input type="checkbox" class="checkItem" name="">
						</td>
						<td>
							<a href=""><i class="fas fa-edit"></i></a>
							<a href=""><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<tr>
						<td>01</td>
						<td>Chương trình Freeship</td>
						<td>
							<img class="myImages" id="myImg" src="img/5.jpg">
						</td>
						<td>
							<input type="checkbox" class="checkItem" name="">
						</td>
						<td>
							<a href=""><i class="fas fa-edit"></i></a>
							<a href=""><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<tr>
						<td>01</td>
						<td>Hệ thống cửa hàng</td>
						<td>
							<img class="myImages" id="myImg" src="img/6.png">
						</td>
						<td>
							<input type="checkbox" class="checkItem" name="">
						</td>
						<td>
							<a href=""><i class="fas fa-edit"></i></a>
							<a href=""><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					
					
					
				</table>
				<div id="myModal" class="modal">
					<span class="close">&times;</span>
					<img class="modal-content" id="img01">
					<div id="caption"></div>
				</div>
				<!--  -->
			</div>
		</div>
	</div>

<script type="text/javascript">
	 $("#checkAll").click(function () {
	     $('.checkItem').not(this).prop('checked', this.checked);
	 });
</script>

	<script>
	// 	var modal = document.getElementById('myModal');

	// 	var img = document.getElementById('myImg');
	// 	var modalImg = document.getElementById("img01");
	// 	var captionText = document.getElementById("caption");
	// 	img.onclick = function(){
	// 	  modal.style.display = "block";
	// 	  modalImg.src = this.src;
	// 	  captionText.innerHTML = this.alt;
	// 	}

	// 	var span = document.getElementsByClassName("close")[0];

	// 	span.onclick = function() { 
	// 	  modal.style.display = "none";
	// }
	// create references to the modal...
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