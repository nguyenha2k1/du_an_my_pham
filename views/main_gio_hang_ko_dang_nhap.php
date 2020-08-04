
<!DOCTYPE html>
<html>
<head>
	<title>Giỏ hàng</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/site.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/category.css">
    <link rel="stylesheet" type="text/css" href="public/css/shopcard.css">
    <script type="text/javascript" src="public/js/js.js"></script>
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="public/owlcarousel/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="public/owlcarousel/owl.carousel.min.js"></script>

</head>
<body>
<main role="main" class="pb-3">
	<div class="bracum">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ol class="ol-non">
	                    <li><a href="">Trang chủ</a></li>
	                    <li><a href="">Giỏ hàng</a></li>
	                </ol>
				</div>
			</div>
			
		</div>
	</div>
	<div class="">
		<div class="container" id="load-card">
			<div class="row titles">

				<!-- Sản phẩm bên phải -->
				<div class="col-lg-8 col-md-12 cart-col-1">
					<div id="load-error">
						<!-- lỗi khi chưa có sản phẩm nào -->
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12" style="padding-left:0; height:31px">
							<span class="cart_index">
								Giỏ hàng 
								<span>(<?php if (isset($_COOKIE["sl"])) {
                                        echo $_COOKIE["sl"];
                                    }else{
                                        echo "0";
                                    }  ?> sản phẩm)</span>
							</span>
						</div>
						<div class="col-lg-2 col-md-2 hidden-xs">
							<h6>  Giá mua</h6>
						</div>
						<div class="col-lg-2 col-md-2 hidden-xs">
							<h6> Số lượng</h6>
						</div>
						<div class="col-lg-2 col-md-2 hidden-xs">
							<h6> Thành tiền</h6>
						</div>
					</div>
					<?php 
						$tongtien = 0;
						for ($i=0; $i < $countA; $i++) { 
						
					?>
					<div class="shopping-cart-item">
						<div class="row">
							<div class="col-lg-2 col-md-2 col-3 img-thumnail-custom">
								<div class="image">
                                    <a class="top_zindex" href="" title="">
                                        <img class="img-reponsive" src="<?php echo $array[$i]['img']; ?>" alt="">
                                    </a>
                                </div>
							</div>
							<div class="col-lg-4 col-md-4 c2 col-6">
								<div class="name">
                                    <a class="top_zindex" href="" title=""> <?php echo $array[$i]['ten_sp']; ?></a>

                                </div>

                                <p class="action">
                                    <a href="" class="btn btn-link btn-item-delete hidden-sm hidden-xs" title="Xóa" onclick=" return deleteCart(<?php echo $array[$i]['ma_sp']; ?>)"> Xóa </a>
                                </p>
                                <div class="clr"></div>
							</div>
							<div class="col-lg-2 col-md-2 col-3">
								<div class="mar-bot-mb">
                                    <span class="price price-mb" style="color: #199427;"><?php echo number_format($array[$i]['gia_ban'], 0, ',', ','); ?>₫</span>
                                    <span class="price price-mb oik "><?php echo number_format($array[$i]['gia_thi_truong'], 0, ',', ','); ?>₫</span>
                                    <!-- <span class="sale  hidden-sm hidden-xs">Giảm 15%</span> -->
                                </div>
							</div>
							<div class="col-lg-2 col-md-2 col-6 ">
								<!--Số lượng-->
                                <div class="form-group">
                                    <div class="input-group wb-60">
                                        <input type="number" id="soluong<?php echo $array[$i]['ma_sp']; ?>" class="form-control input-qty" value="<?php echo $array[$i]['soluong']; ?>"  name="qty1" min="1" max="99">
                                        <div class="input-group-addon" style="border:0">
                                        	<a href="" id="save<?php echo $array[$i]['ma_sp']; ?>" title="Lưu thay đổi" onclick=" ">
                                        		<i class="fa fa-save"></i>
                                        	</a>
                                        </div>
                                    </div>
                                    <a href="./?page=cart&act=delete&ma_sp=<?php echo $array[$i]['ma_sp']; ?>" class="btn btn-link btn-item-delete hidden-md btn-mbx" title="Xóa" onclick="return deleteCart(<?php echo $array[$i]['ma_sp']; ?>)"> Xóa </a>
                                </div>
							</div>
							<div class="col-lg-2 col-md-2 col-3">
								<!--thành tiền-->
								<?php 
									$thanhtien = $array[$i]['gia_ban']*$array[$i]['soluong'];
									$tongtien = $tongtien+$thanhtien;
								?>
                                <p class="price tt-mb" style="color: #199427;"> <?php echo number_format($thanhtien, 0, ',', ','); ?>₫ </p>
							</div>
							<div class="box-info-discount-mobile hidden-md hidden-lg"></div>
						</div>
					</div>
					<script type="text/javascript">
						$(document).ready(function(){
						  $("#save<?php echo $array[$i]['ma_sp']; ?>").click(function(){
							  $("#save<?php echo $array[$i]['ma_sp']; ?>").attr("href", "?page=cart&act=soluong&ma=<?php echo $array[$i]['ma_sp']; ?>&sl="+$("#soluong<?php echo $array[$i]['ma_sp']; ?>").val());
							});
						});
					</script>
					<?php } ?>
				</div>

<!-- <script type="text/javascript">
$(document).ready(function(){
  // $("#save").click(function(){
  //   alert("Value: " + $("#soluong").val());
  // });
  $("#save").click(function(){
	  $("#save").attr("href", "?page=cart&sl="+$("#soluong").val());
	});
});

</script> -->


				<!-- sản phẩm bên trái -->
				<div class="col-lg-4 col-md-12">
					<div class="panel panel-default fee">
                        <div class="panel-body">
                            <p class="list-info-price" id="pricetotal">
                                <b>Tạm tính: </b> <span><?php echo number_format($tongtien, 0, ',', ','); ?>₫</span>
                            </p>
                            <div class="load-giamgia hide">
                            	<p>Giảm giá: <span style="float: right;">10%</span></p>
                            </div>
                            <p class="total2">Thành tiền: <span style="float: right" class="load-price"><?php echo number_format($tongtien, 0, ',', ','); ?>₫ </span> </p>
                            <p class="text-right">
                                <i>(Chưa bao gồm phí vận chuyển)</i>
                            </p>
                        </div>
                    </div>
                    <button id="btn_submit_cart" type="button" class="btn btn-large btn-block btn-default btn-checkout" onclick="" style="color: white;"> <a style="color: white; text-decoration: none;" href="?page=cart&select=order">TIẾN HÀNH ĐẶT HÀNG </a></button>
				</div>
			</div>
		</div>
	</div>
</main>
</body>
</html>