<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	                    <li><a href="">Thanh toán đơn hàng</a></li>
	                </ol>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="pad-tab-40">
		<div class="container">
	        <div class="row">
	        	<!-- bắt đ -->
	            <div class="col-lg-7">
	                <div id="load-error"></div>
	                <h2 class="h2-fiead">Địa chỉ nhận hàng</h2>
	                <form action="?page=cart&select=pay" method="post">
	                    <div class="form-group row">
	                        <label for="inputPassword" class="col-sm-3 col-form-label text-rights opsize"><b>Họ tên</b></label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control opsize" name="name" id="txtName" placeholder="VD: N̴͈̩̤͉̊̀͗̃̏͌̀̄̕͝g̸̠͌́̌͒͑̋͐̑̒̊͑̓͗ǘ̵͖̹̰̣̹̦̀̅͒͌̀̚ỳ̷͖͔̘̗̣̞͙́͛͐̑͠ễ̵̡̥͙̦̳̝̝̟̰̟̓̓̐͘ͅn̶͕̫͔̙̠̩͇̩̂́̊̈́͊̃́̃͗͘͜͝͠ͅ H̸̡̨̢͓̼̥̻̙̖̜͉̫͙̒̈̀̃̀̚à̶̳̮̱͐̓̀͐͑͋͆̔̃̑͠ (*)" onchange="" value="<?php if(isset($result)){echo $result['ho_va_ten'];} ?>">
	                            <div class="invalid-feedback" id="val-txtName">

	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="inputPassword" class="col-sm-3 col-form-label text-rights opsize"><b>Giới tính</b></label>
	                        <div class="col-sm-9">
	                        	<?php 
	                        		if(isset($result)){
	                        			switch ($result['gioi_tinh']) {
	                        				case '1':
	                        					$checked1 = 'checked';
	                        					$checked2 = '';
	                        					break;
	                        				case '0':
	                        					$checked1 = '';
	                        					$checked2 = 'checked';
	                        					break;
	                        				default:
	                        					# code...
	                        					break;
	                        			}
	                        		}else{
	                        			$checked = 'checked';
	                        		}
	                        	?>
	                            <label>Nam</label> <input <?php if (isset($checked1)) {
	                            	echo $checked1;
	                            }; if (isset($checked)) {
	                            	echo $checked;
	                            }?> type="radio" name="sex" value="1">
	                            <label>Nữ</label> <input <?php if (isset($checked2)) {
	                            	echo $checked2;
	                            }?> type="radio" name="sex" value="0">
	                            <div class="invalid-feedback" id="val-txtName">

	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="inputPassword" class="col-sm-3 col-form-label text-rights opsize"><b>Số điện thoại</b></label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control opsize" id="txtPhone" placeholder="VD: 0999 666 999 (*)" onchange="" name="sdt" value="<?php if(isset($result)){echo '0'.$result['sdt'];} ?>">
	                            <div class="invalid-feedback" id="val-txtPhone">

	                            </div>
	                        </div>
	                    </div>
	                    <!-- <div class="form-group row">
	                        <label for="inputPassword" class="col-sm-3 col-form-label text-rights opsize"><b>Tỉnh/Thành phố</b></label>
	                        <div class="col-sm-9">
	                            <select id="RegionId" class="form-control opsize" onchange="">

	                                <option value="0">Chọn tỉnh thành phố</option>
	                                <option value="23">Hồ Chí Minh</option>
	                                <option value="18">Hà Nội</option>
	                                <option value="58">Đà Nẵng</option>
	                                
	                            </select>
	                            <div class="invalid-feedback" id="val-RegionId">

	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="inputPassword" class="col-sm-3 col-form-label text-rights opsize"><b>Quận/Huyện</b></label>
	                        <div class="col-sm-9">
	                            <select id="DistristId" class="form-control opsize" onchange="">
	                                <option value="0">Chọn quận huyện</option>
	                                <option value="691">Huyện Định Quán</option>
	                                <option value="692">Huyện Long Thành</option>
	                                <option value="693">Huyện Cẩm Mỹ</option>
	                                <option value="694">Thành phố Biên Hòa</option>
	                                <option selected="" value="695">Huyện Thống Nhất</option>
	                                <option value="696">Huyện Nhơn Trạch</option>
	                                <option value="697">Huyện Vĩnh Cửu</option>
	                                <option value="698">Huyện Xuân Lộc</option>
	                                <option value="699">Huyện Trảng Bom</option>
	                                <option value="700">Huyện Tân Phú</option>
	                                <option value="701">Thị xã Long Khánh</option>

	                            </select>
	                            <div class="invalid-feedback" id="val-DistristId">

	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group row hide">
	                        <label for="inputPassword" class="col-sm-3 col-form-label text-rights opsize"><b>Phường/Xã</b></label>
	                        <div class="col-sm-9">
	                            <select id="WardId" class="form-control opsize" onchange="">
	                                <option selected="" value="0">Chọn phường xã</option>
	                                <option value="">Xã Bàu Hàm 2</option>
	                                <option value="">Xã Gia Kiệm</option>
	                                
	                            </select>
	                            <div class="invalid-feedback" id="val-WardId">

	                            </div>
	                        </div>
	                    </div> -->
	                    <div class="form-group row">
	                        <label for="inputPassword" class="col-sm-3 col-form-label text-rights opsize"><b>Địa chỉ</b></label>
	                        <div class="col-sm-9">
	                            <textarea id="txtAdress" class="form-control opsize" placeholder="Số nhà, đường, phường xã..." onchange="" name="address"><?php if(isset($result)){echo $result['dia_chi'];}?></textarea>
	                            <div class="invalid-feedback" id="val-txtAdress">

	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="staticEmail" class="col-sm-3 col-form-label text-rights opsize"><b>Email</b></label>
	                        <div class="col-sm-9">
	                            <input type="email" class="form-control opsize " id="txtEmail" placeholder="VD: beautygirl@gmail.com" onchange="" name="email" value="<?php if(isset($result)){echo $result['email'];} ?>">
	                            <div class="invalid-feedback" id="val-txtEmail">

	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="inputPassword" class="col-sm-3 col-form-label text-rights opsize"><b>Ghi chú</b></label>
	                        <div class="col-sm-9">
	                            <textarea id="txtNote" class="form-control opsize" placeholder="VD: Giao hàng vào buổi sáng" onchange="" name="note"></textarea>
	                        </div>
	                    </div>
	                    <div class="form-group row hidden-sm hidden-xs">
	                        <div class="col-sm-6 col-7">
	                            <a class="btn btn-light pull-left opsize" href="">QUAY LẠI GIỎ HÀNG</a>
	                        </div>
	                        <div class="col-sm-6 col-5">
	                            <button class="btn btn-thanhtoan pull-right opsize" type="submit" onclick="return kiemtraFormdathang()" id="btn-tt">THANH TOÁN</button>
	                        </div>
	                    </div>
	                </form>
	            </div>
	            <!-- kết thúc -->
	            <!-- bắt đầu -->
	            <div class="col-lg-5">
	                <div id="load-casf" class="order">

					    <div id="cart-info" class="cart-info">
					        <h2 class="title-secres">Giỏ Hàng</h2>
					        <ul class="list-unstyled">
					        	<?php 
					        		$tongtien = 0;
					        		for ($i=0; $i < $count; $i++) { 
					        		$thanhtien = $array[$i]['gia_ban']*$array[$i]['soluong'];
					        		$tongtien = $tongtien+$thanhtien;
					        	?>
			                    <li>
			                        <figure>
			                            <a class="cart_list_product_img" href="" title="">
			                                <img src="<?php echo $array[$i]['img']; ?>" alt="" class="img-reponsive imds">
			                            </a>
			                        </figure>
			                        <div class="list_content">
			                            <h5>
			                                <a href="?page=product&id=<?php echo $array[$i]['ma_sp']; ?>" title="">
			                                    <span class="name-ps"><?php echo $array[$i]['ten_sp']; ?> </span>
			                                </a>

			                            </h5>
			                            <div class="quantity">
			                                <?php echo $array[$i]['soluong']; ?> x
			                                <span class="amount">
			                                    <span class="money" style="color: #199427; font-size: 14px !important;">
			                                        <?php echo number_format($array[$i]['gia_ban'], 0, ',', ','); ?>₫
			                                    </span>
			                                    <span class="" style="text-decoration: line-through; font-size: 12px; padding-left: 12px;">
			                                        <?php echo number_format($array[$i]['gia_thi_truong'], 0, ',', ','); ?>₫
			                                    </span>
			                                </span>
			                                <div class="pull-right tt">
			                                    <?php echo number_format($thanhtien, 0, ',', ','); ?>₫
			                                </div>
			                            </div>
			                            <div class="iserror">
			                            </div>
			                        </div>
			                        <div class="clr"></div>
			                    </li>
			                  	<?php } ?>
					        </ul>
					        <div class="load-lead">
					            <div class="box-coupon">
					                <p class="list-info-price" id="price-before" data-id="318000">
					                    <small class="color-black">Tạm tính: </small> <span style="color:green"><?php echo number_format($tongtien, 0, ',', ','); ?>₫</span>
					                </p>
					            </div>
					        </div>
					        <!--Tổng số tiền-->
					       <!--  <div class="load-giamgia " id="fac" data-id="False">
					            <div class="box-coupon">
					                <p class="list-info-price" id="pricetotalmis" data-id="318000">
					                    <small class="color-black">Giảm giá: </small> <span>- ₫</span>
					                </p>
					            </div>
					        </div> -->
					        <div class="load-ship">
					            <div class="box-coupon">
					                <p class="list-info-price" id="priceship" data-id="0">
					                    <small class="color-black">Phí vận chuyển: </small> <span>+30,000₫</span>
					                </p>
					            </div>
					        </div>
					        <div class="subtotal">
					            Thành tiền:
					            <span>
					                <span class="amount">
					                    <strong class="money lucal" style="color: #e54d42;"> <?php echo number_format($tongtien+30000, 0, ',', ','); ?>₫ </strong>
					                </span>
					            </span>
					        </div>
					        <div class="pttt">
					            <span>* Phương thức thanh toán: Nhận hàng &amp; thanh toán tiền mặt tại nhà</span>
					        </div>
					    </div>
					</div>
	                <form class="hidden-md">
	                    <div class="form-group row">
	                        <div class="col-sm-6 col-7">
	                            <a class="btn btn-light pull-left opsize" href="">QUAY LẠI GIỎ HÀNG</a>
	                        </div>
	                        <div class="col-sm-6 col-5">
	                            <button class="btn btn-thanhtoan pull-right opsize" type="button" onclick="return kiemtraFormdathang()" id="btn-tt2">THANH TOÁN</button>
	                        </div>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="bk-opps">
		
	</div>
</main>
</body>
</html>