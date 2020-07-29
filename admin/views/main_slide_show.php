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
		            	<a href="?page=admin">
			                <i class="fas fa-home"></i>
			                Trang chủ
			            </a>
					</li>
					<li>
						<a href="?page=show&img=logo">
			                <i class="fas fa-chevron-right"></i>
			                Giao diện
			            </a>
					</li>
					<li>
						<a href="?page=show&img=slide">
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
					<!-- <li>
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
					</li> -->
					<li>
						<a href="?page=delete"><button><i class="fas fa-trash-alt"></i> Xóa</button></a>
					</li>
					<li>
						<a href="?page=show&img=slide&select=add"><button><i class="fas fa-plus"></i> Thêm mới</button></a>
					</li>
				</ul>
				
			</div>
			<div class="row">
				<table width="100%">
					<tr>
						
						<th width="40">Mã slide</th>
						<th width="250">Thông tin slide</th>
						<th width="700">Image</th>
						<th width="50">Hiển thị <input type="checkbox" id="checkAll" name=""></th>
						<th width="70">Tác vụ</th>
					</tr>
					<?php while ($result = mysqli_fetch_assoc($query)) {
						
					?>
					<tr>
						<td><?php echo $result['ma_img']; ?></td>
						<td><?php echo $result['thong_tin']; ?></td>
						<td>
							<img class="myImages" id="myImg" src="../<?php echo $result['img']; ?>">
						</td>
						<td>
							<input type="checkbox" class="checkItem" name="" <?php if ($result['hien_thi'] == 1) {echo "checked";} ?>>
						</td>
						<td>
							<!-- <a href=""><i class="fas fa-edit"></i></a> -->
							<a href="?page=show&img=slide&select=delete&id=<?php echo $result['ma_img']; ?>" onclick="return kiemTra()"><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<?php } ?>
<script type="text/javascript">
	function kiemTra(){
		if (confirm('Bạn thực sự muốn xóa!!!')==true) {
			return true;
		} else {
			return false;
		}
		
	}
</script>
					
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