<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="views/css/style.css">
	<link rel="stylesheet" type="text/css" href="views/css/image_sp.css">
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
			                Image
			            </a>
					</li>
					<li>
						<a href="?page=images&img=imgsp">
			                <i class="fas fa-chevron-right"></i>
			                Image sản phẩm
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
						<form action="?page=images&img=imgsp&select=search" method="post">
							<ul class="menu-form">
								<li>
									<input type="text" name="search" placeholder="Tìm kiếm">
								</li>
								<li>
									<select name="sort">
										<option value="ma_sp">Mã sản phẩm</option>
										<option value="ten_sp">Tên sản phẩm</option>
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
					<!-- <li>
						<a><button><i class="fas fa-plus"></i> Thêm mới</button></a>
					</li> -->
				</ul>
				
			</div>
			<div class="row">
				<table width="100%">
					<tr>
						<th width="40">Mã sản phẩm</th>
						<th width="300">Tên sản phẩm</th>
						<th width="220">Image sản phẩm</th>
						<th width="70">Tác vụ</th>
					</tr>
					<?php while ($result = mysqli_fetch_assoc($query)) {
						
					?>
					<tr>
						<td><?php echo $result['ma_sp']; ?></td>
						<td style="text-align: left;"><?php echo $result['ten_sp']; ?></td>
						<td>
							<img class="myImages" id="myImg" src="../<?php echo $result['img']; ?>">
						</td>
						<td>
							<a href="?page=images&img=imgsp&select=edit&id=<?php echo $result['ma_sp']; ?>"><i class="fas fa-edit"></i></a>
<!-- 							<a href="?page=images&select=delete&id=<?php echo $result['ma_sp']; ?>" onclick=" return kiemTra()" ><i class="fas fa-trash-alt"></i></a> -->
						</td>
					</tr>
					<?php } ?>
<!-- <script type="text/javascript">
	function kiemTra(){
		if (confirm('Bạn thực sự muốn xóa image sản phẩm!!!')==true) {
			return true;
		} else {
			return false;
		}
		
	}
</script> -->
					
				</table>
								<!-- phân trang -->
				<div class="pagination">
					<div class="page">
						<?php
						if ($current_page > 3) {
						    $first_page = 1;
						    ?>
						    <a class="page-item" href="?page=images&img=imgsp&pagination=<?= $first_page ?>"><i class="fas fa-fast-backward"></i></a>
						    <?php
						}
						if ($current_page > 1) {
						    $prev_page = $current_page - 1;
						    ?>
						    <a class="page-item" href="?page=images&img=imgsp&pagination=<?= $prev_page ?>"><i class="fas fa-backward"></i></a>
						<?php }
						?>
						<?php for ($num = 1; $num <= $totalPages; $num++) { ?>
						    <?php if ($num != $current_page) { ?>
						        <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
						            <a class="page-item" href="?page=images&img=imgsp&pagination=<?= $num ?>"><?= $num ?></a>
						        <?php } ?>
						    <?php } else { ?>
						        <a class="current-page page-item"><?= $num ?></a>
						    <?php } ?>
						<?php } ?>
						<?php
						if ($current_page < $totalPages - 1) {
						    $next_page = $current_page + 1;
						    ?>
						    <a class="page-item" href="?page=images&img=imgsp&pagination=<?= $next_page ?>"><i class="fas fa-forward"></i></a>
						<?php
						}
						if ($current_page < $totalPages - 3) {
						    $end_page = $totalPages;
						    ?>
						    <a class="page-item" href="?page=images&img=imgsp&pagination=<?= $end_page ?>"><i class="fas fa-fast-forward"></i></a>
						    <?php
						}
						?>
					</div>
				</div>
				<!--  -->
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