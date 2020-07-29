<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="views/css/style.css">
	<link rel="stylesheet" type="text/css" href="views/css/main_thuong_hieu.css">
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
						<a href="?page=trademark">
			                <i class="fas fa-chevron-right"></i>
			                Thương hiệu
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
						<form action="?page=trademark&select=search" method="post">
							<ul class="menu-form">
								<li>
									<input type="text" name="search" placeholder="Tìm kiếm">
								</li>
								<li>
									<select name="sort">
										<option value="ma_th">Mã thương hiệu</option>
										<option value="ten_thuong_hieu">Tên thương hiệu</option>
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
						<a href="?page=trademark&select=add"><button><i class="fas fa-plus"></i> Thêm mới</button></a>
					</li>
				</ul>
				
			</div>
			<div class="row">
				<table width="100%">
					<tr>
						<th width="70">Mã thương hiệu</th>
						<th width="550">Tên thương hiệu</th>
						<th width="400">Image</th>
						<th width="150">Tác vụ</th>
					</tr>
					<?php while ($result = mysqli_fetch_assoc($query)) {
						
					?>
					<tr>
						<td><?php echo $result['ma_th']; ?></td>
						<td><?php echo $result['ten_thuong_hieu']; ?></td>
						<td>
							<img class="myImages" id="myImg" src="../<?php echo $result['img']; ?>">
						</td>
						
						<td>
							<!-- <a href="?page=trademark&select=edit&id=<?php echo $result['ma_th']; ?>"><i class="fas fa-edit"></i></a> -->
							<a href="?page=trademark&select=delete&id=<?php echo $result['ma_th']; ?>" onclick=" return kiemTra()" ><i class="fas fa-trash-alt"></i></a>
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
				<!-- phân trang -->
				<div class="pagination">
					<div class="page">
						<?php
						if ($current_page > 3) {
						    $first_page = 1;
						    ?>
						    <a class="page-item" href="?page=trademark&pagination=<?= $first_page ?>"><i class="fas fa-fast-backward"></i></a>
						    <?php
						}
						if ($current_page > 1) {
						    $prev_page = $current_page - 1;
						    ?>
						    <a class="page-item" href="?page=trademark&pagination=<?= $prev_page ?>"><i class="fas fa-backward"></i></a>
						<?php }
						?>
						<?php for ($num = 1; $num <= $totalPages; $num++) { ?>
						    <?php if ($num != $current_page) { ?>
						        <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
						            <a class="page-item" href="?page=trademark&pagination=<?= $num ?>"><?= $num ?></a>
						        <?php } ?>
						    <?php } else { ?>
						        <a class="current-page page-item"><?= $num ?></a>
						    <?php } ?>
						<?php } ?>
						<?php
						if ($current_page < $totalPages - 1) {
						    $next_page = $current_page + 1;
						    ?>
						    <a class="page-item" href="?page=trademark&pagination=<?= $next_page ?>"><i class="fas fa-forward"></i></a>
						<?php
						}
						if ($current_page < $totalPages - 3) {
						    $end_page = $totalPages;
						    ?>
						    <a class="page-item" href="?page=trademark&pagination=<?= $end_page ?>"><i class="fas fa-fast-forward"></i></a>
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