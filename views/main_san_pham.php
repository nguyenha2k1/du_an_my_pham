<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/site.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/category.css">
    <link rel="stylesheet" type="text/css" href="public/css/shopcard.css">
    <link rel="stylesheet" type="text/css" href="public/css/easyzoom.css">
    <script type="text/javascript" src="public/js/js.js"></script>
    <script type="text/javascript" src="public/js/easyzoom.js"></script>
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="public/owlcarousel/assets/owl.theme.default.min.css">
    <script type="text/javascript" src="public/js/jquery-3.5.1.min.js"></script>
    <script src="public/owlcarousel/owl.carousel.min.js"></script>
<!-- zoom -->
    <link rel="stylesheet" type="text/css" href="public/css/easyzoom.css">
    <!-- <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script> -->
    <script type="text/javascript" src="public/js/easyzoom.js"></script>
<!-- kt zoom -->
<style type="text/css">
    .thumbnails{
        display: inline-block;
        padding-left: 0px;
        margin-bottom: 0px; 
    }
    .thumbnails li{
        display: inline-block;
        list-style-type: none;
        float: left;
        padding: 5px;
    }
    .thumbnails li a{
        display: block;
        text-decoration: none;
        border: 1px solid #eee;
    }
    .thumbnails li a img{
        width: 85px;
        height: 85px;
    }
</style>
</head>
<body>
<main role="main" class="pb-3">
	<div class="bracum">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
                    <ol class="ol-non">
                        <li><a href="./">Trang chủ</a></li>
                        <li><a href="?page=classify&id=<?php echo $resultProductDetail['ma_pl']; ?>"><?php echo $resultProductDetail['ten_loai_sp']; ?></a></li>
                        <li><a href="?page=product&id=<?php echo $resultProductDetail['ma_sp']; ?>"><?php echo $resultProductDetail['ten_sp']; ?></a></li>
                    </ol>
                </div>
			</div>
			
		</div>
	</div>
	<div class>
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="box-product-detail">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mar-bot-20">
                                    <div class="box-img-detail">
                                        <div class="config-alige">
                                            <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails is-ready">
                                                <a href="<?php echo $resultProductDetail['img']; ?>">
                                                    <img src="<?php echo $resultProductDetail['img']; ?>" width="300" height="300" alt="" class="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-thumnail-detail">
                                        <ul class="thumbnails ">
                                            <li>
                                                <a href="<?php echo $resultProductDetail['img']; ?>" data-standard="<?php echo $resultProductDetail['img']; ?>">
                                                    <img src="<?php echo $resultProductDetail['img']; ?>" alt="">
                                                </a>
                                            </li>
                                            <?php while ($resultImgbs = mysqli_fetch_assoc($queryImgbs)) {
                                            ?>
                                            <li>
                                                <a href="<?php echo $resultImgbs['img'] ?>" data-standard="<?php echo $resultImgbs['img'] ?>">
                                                    <img src="<?php echo $resultImgbs['img'] ?>" alt="">
                                                </a>
                                            </li>
                                            <?php } ?>
                                            <div class="clr"></div>

                                        </ul>

                                        
                                    </div>



                                    <script type="text/javascript">
                                        var $easyzoom = $('.is-ready').easyZoom();
                                        var api = $easyzoom.data('easyZoom');

                                        $('ul').on('click', 'a', function(event) {
                                            event.preventDefault();
                                            api.swap($(this).data('standard'), $(this).attr('href'));
                                        });
                                    </script>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div>
                                    <h1 class="title-Product">
                                        <?php echo $resultProductDetail['ten_sp']; ?>
                                    </h1>
                                    <!-- <div class="rate-star">
                                        <div class="rating-stars" data-star="4">
                                            <ul id="stars">
                                                <li class="star selected" title="Tệ" data-value="1" onclick="">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star selected" title="Tạm được" data-value="2" onclick="">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star selected" title="Tốt" data-value="3" onclick="">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star selected" title="Rất tốt" data-value="4" onclick="">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Tuyệt vời" data-value="5" onclick="">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text-rating">
                                            <p><span>4</span> sao - <span>0</span> lượt đánh giá</p>
                                        </div>
                                    </div> -->
                                    <div class="box-price">
                                        <div class="price-drop">
                                            <span><?php echo number_format($resultProductDetail['gia_ban'], 0, ',', ','); ?>₫</span>
                                            <span class="issale hide"><?php echo number_format($resultProductDetail['gia_thi_truong'], 0, ',', ','); ?>₫</span>
                                            <span class="persale hide">- 15%</span>
                                        </div>
                                        <div class="price-vince">
                                            <?php 
                                                $tk = $resultProductDetail['gia_thi_truong']-$resultProductDetail['gia_ban'];
                                                $pt = $tk/$resultProductDetail['gia_thi_truong']*100;
                                            ?>
                                            <p>Giá thị trường: <span><?php echo number_format($resultProductDetail['gia_thi_truong'], 0, ',', ','); ?>₫</span> - Tiết kiệm: <span><?php echo number_format($tk, 0, ',', ','); ?>₫ </span> (<span>- <?php echo number_format((float)$pt, 2, '.', '') ?>%</span>)</p>
                                        </div>
                                        <div class="hanc">
                                            <p>Thương hiệu: <?php echo $resultProductDetail['ten_thuong_hieu']; ?></p>
                                        </div>
                                    </div>
                                    <div class="box-note ">
                                        <?php echo $resultProductDetail['khai_quat']; ?>
                                    </div>
                                       <div class="card-box">
                                            <div class="inner-load">
                                                <div class="box-add">
                                                   <!--  <div class="number-card">
                                                        <span>Số lượng:</span>
                                                        <input type="number" name="numberproduct" id="numberproduct" class="form-control" value="1" min="1" max="<?php echo $resultProductDetail['sl_trong_kho']; ?>" data-barcode="" data-refid="">
                                                        <div class="clr"></div>
                                                    </div> -->
                                                    <div class="bst">
                                                        <button type="button" class="btn-bts btn-atc" onclick="load_cart(<?php echo $resultProductDetail['ma_sp'] ?>)">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            Thêm giỏ hàng
                                                        </button>
                                                        <button type="button" class="btn-bts btn-fs hide">
                                                            Mua Nhanh
                                                        </button>
                                                        <button type="button" class="btn-bts btn-hea " onclick="">
                                                            <i class="fa fa-heart-o heart_new"></i>
                                                        </button>
                                                        <div class="clr"></div>
                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- box sản phẩm đề xuất -->

                    <div class="box-products">
                    	<div class="head-box">
                    		<div class="title-box">
                    			<strong>SẢN PHẨM ĐỀ XUẤT</strong>
                    		</div>
                    		<div class="clr"></div>
                    	</div>
                    	<div class="body-box">
                    		<div class="owl-carousel owl-theme">
                                <?php while ($resultProductNgauNhien = mysqli_fetch_assoc($queryProductNgauNhien)) {
                                ?>
                                <div class="item">
                                    <div class="pd-box ">
                                        <div class="box-images">
                                            <a href="?page=product&id=<?php echo $resultProductNgauNhien['ma_sp'] ?>">
                                                <img data-src="" alt="" class="img-reponsive owl-lazy " src="<?php echo $resultProductNgauNhien['img'] ?>" style="opacity: 1;">
                                            </a>
                                            <button type="button" onclick="load_cart(<?php echo $resultProductNgauNhien['ma_sp'] ?>)" class="btn-addlike ">
                                                <i class="fa fa-cart-plus"></i>
                                            </button>
                                            <div class="sale-off hide">0%<br>OFF</div>
                                        </div>
                                        <div class="box-content">
                                            <h3>
                                                <a href="?page=product&id=<?php echo $resultProductNgauNhien['ma_sp'] ?>"><?php echo $resultProductNgauNhien['ten_sp'] ?></a>
                                            </h3>
                                            <div>
                                                <span class="price-drop"><?php echo number_format($resultProductNgauNhien['gia_ban'], 0, ',', ','); ?>₫</span>
                                                <span class="price "><?php echo number_format($resultProductNgauNhien['gia_thi_truong'], 0, ',', ','); ?>₫</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                       
                    	</div>
                    </div>
                    <!-- Thông tin sản phẩm -->
                    <div class="box-thongtin">
                        <?php echo $resultProductDetail['noidung']; ?>
                           
                        </div>
                    </div>

                   	<!-- Sản phẩm cùng loại -->
                   	<div class="box-products">
                    	<div class="head-box">
                    		<div class="title-box">
                    			<strong>SẢN PHẨM CÙNG LOẠI</strong>
                    		</div>
                    		<div class="clr"></div>
                    	</div>
                    	<div class="body-box">
                    		<div class="owl-carousel owl-theme">
                                <?php while ($resultSpCl = mysqli_fetch_assoc($querySpCl)) {
                                ?>
                                <div class="item">
                                    <div class="pd-box ">
                                        <div class="box-images">
                                            <a href="?page=product&id=<?php echo $resultSpCl['ma_sp'] ?>">
                                                <img data-src="" alt="" class="img-reponsive owl-lazy " src="<?php echo $resultSpCl['img'] ?>" style="opacity: 1;">
                                            </a>
                                            <button type="button" onclick="load_cart(<?php echo $resultSpCl['ma_sp'] ?>)" class="btn-addlike ">
                                                <i class="fa fa-cart-plus"></i>
                                            </button>
                                            <div class="sale-off hide">0%<br>OFF</div>
                                        </div>
                                        <div class="box-content">
                                            <h3>
                                                <a href="?page=product&id=<?php echo $resultSpCl['ma_sp'] ?>"><?php echo $resultSpCl['ten_sp'] ?></a>
                                            </h3>
                                            <div>
                                                <span class="price-drop"><?php echo number_format($resultSpCl['gia_ban'], 0, ',', ','); ?>₫</span>
                                                <span class="price "><?php echo number_format($resultSpCl['gia_thi_truong'], 0, ',', ','); ?>₫</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                         




                    	   </div>

                        </div>
				    </div>






				
			</div>

			<!-- bên phải -->
				<div class="col-lg-3">
					<!-- 1111 -->
					<div class="box-left">
                        <div class="title-left">
                            <strong>-- CHẤT LƯỢNG CHO HOT GIRL --</strong>
                        </div>
                        <div class="content-left pad-8-15">
                            <div class="box-shas rig-limit">
                                <img alt="abc" class="img-reponsive lazy" src="./img/chinh-sach-04.png" style="">
                                <div class="content-shas">
                                    <strong>mỹ phẩm 1000% chính hãng </strong>
                                    <p>Chất lượng sản phẩm là sự tin cậy của khách hàng</p>
                                </div>
                                <div class="clr"></div>
                            </div>
                            <div class="box-shas rig-limit">
                                <img alt="abc" class="img-reponsive lazy" src="./img/chinh-sach-05.png" style="">
                                <div class="content-shas">
                                    <strong>
                                        LUÔN TÍCH ĐIỂM
                                    </strong>
                                    <p>Đơn hàng từ 100M=1 điểm, 10 điểm nhận voucher 1k</p>
                                </div>
                                <div class="clr"></div>
                            </div>
                            <div class="box-shas rig-limit">
                                <img alt="abc" class="img-reponsive lazy" src="./img/chinh-sach-06.png" style="">
                                <div class="content-shas">
                                    <strong>MIỄN PHÍ GIAO HÀNG </strong>
                                    <p>Đơn hàng trên 200M nội thành Hà Nội</p>
                                </div>
                                <div class="clr"></div>
                            </div>
                            <div class="box-shas rig-limit">
                                <img alt="abc" class="img-reponsive lazy" src="./img/chinh-sach-07.png" style="">
                                <div class="content-shas">
                                    <strong>TRI ÂN KHÁCH HÀNG</strong>
                                    <p>Với các chương trình khuyến mãi, các sự kiện &amp; quà tặng đặc biệt vô cùng hấp dẫn</p>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div> 
                    </div>


                    <!-- 22222222 -->
                    <div class="box-left">
						<div class="title-left">
						    <strong>DANH MỤC SẢN PHẨM</strong>
						</div>
						<div class="content-left">
						    <ul class="ul-non ul-left">
						                <li class=" ">
						                    <a href="" title="Trang Điểm">
						                        <i class="fa fa-angle-right" aria-hidden="true"></i>
						                        Trang Điểm 
						                    </a>
						                        <ul class="ul-non ul-childs">
						                                <li>
						                                    <a href="?page=classify&id=1" title="Trang Điểm Mặt" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Trang Điểm Mặt
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=10" title="Trang Điểm Mắt" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Trang Điểm Mắt
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=15" title="Trang Điểm Môi" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Trang Điểm Môi
						                                    </a>
						                                </li>
						                        </ul>

						                </li>
						                <li class=" ">
						                    <a href="" title="Chăm Sóc Da">
						                        <i class="fa fa-angle-right" aria-hidden="true"></i>
						                        Chăm Sóc Da
						                    </a>
						                        <ul class="ul-non ul-childs">
						                                <li>
						                                    <a href="?page=classify&id=26" title="Làm sạch da " class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Làm sạch da
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=29" title="Dưỡng da " class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Dưỡng da
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=20" title="Mask - Mặt nạ" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Mask - Mặt nạ
						                                    </a>
						                                </li>
						                        </ul>

						                </li>
						                <li class=" ">
						                    <a href="" title="Chăm Sóc Tóc">
						                        <i class="fa fa-angle-right" aria-hidden="true"></i>
						                        Chăm Sóc Tóc 
						                    </a>
						                        <ul class="ul-non ul-childs">
						                                <li>
						                                    <a href="?page=classify&id=38" title="Dầu gội " class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Dầu gội
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=39" title="Dầu xả" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Dầu xả
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=41" title="Kem ủ tóc" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Kem ủ tóc
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=40" title="Dầu gội khô" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Dầu gội khô
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=42" title="Serum dưỡng tóc" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Serum dưỡng tóc
						                                    </a>
						                                </li>
						                                <!-- <li>
						                                    <a href="?page=classify&id=38" title="Set dầu gội" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Set dầu gội (15) 
						                                    </a>
						                                </li> -->
						                               <!--  <li>
						                                    <a href="?page=classify&id=" title="Màu nhuộm tóc" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Màu nhuộm tóc (8) 
						                                    </a>
						                                </li> -->
						                                <li>
						                                    <a href="?page=classify&id=37" title="Set dưỡng tóc" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Set dưỡng tóc
						                                    </a>
						                                </li>
						                        </ul>

						                </li>
						                <li class=" ">
						                    <a href="" title="Phụ Kiện">
						                        <i class="fa fa-angle-right" aria-hidden="true"></i>
						                        Phụ Kiện 
						                    </a>
						                        <ul class="ul-non ul-childs">
						                                <li>
						                                    <a href="?page=classify&id=43" title="Dụng cụ trang điểm" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Dụng cụ trang điểm 
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=44" title="Phụ kiện làm đẹp" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Phụ kiện làm đẹp
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=45" title="Sơn móng - Rửa móng" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Sơn móng - Rửa móng
						                                    </a>
						                                </li>
						                        </ul>

						                </li>
						                <li class=" ">
						                    <a href="" title="Nước Hoa">
						                        <i class="fa fa-angle-right" aria-hidden="true"></i>
						                        Nước Hoa
						                    </a>
						                        <ul class="ul-non ul-childs">
						                                <li>
						                                    <a href="?page=classify&id=47" title="Nước hoa nữ " class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Nước hoa nữ  
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=48" title="Nước hoa nam" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Nước hoa nam
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=49" title="Xịt thơm body" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Xịt thơm body 
						                                    </a>
						                                </li>
						                        </ul>

						                </li>
						                <li class=" ">
						                    <a href="" title="Chăm Sóc Toàn Thân">
						                        <i class="fa fa-angle-right" aria-hidden="true"></i>
						                        Chăm Sóc Toàn Thân 
						                    </a>
						                        <ul class="ul-non ul-childs">
						                                <li>
						                                    <a href="?page=classify&id=51" title="Sữa tắm" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Sữa tắm 
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=52" title="Kem dưỡng toàn  thân - Body Cream" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Kem dưỡng toàn  thân - Body Cream 
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=53" title="Dưỡng da tay" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Dưỡng da tay
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=54" title="Tẩy tế bào chết" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Tẩy tế bào chết
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=55" title="Tẩy lông" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Tẩy lông  
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=56" title="Khử mùi" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Khử mùi  
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=57" title="Giảm sẹo – Giảm thâm – Giảm nám" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Giảm sẹo – Giảm thâm – Giảm nám 
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=58" title="Chăm sóc răng miệng" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Chăm sóc răng miệng  
						                                    </a>
						                                </li>
						                                <!-- <li>
						                                    <a href="?page=classify&id=" title="Dưỡng thể - Body Lotion" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Dưỡng thể - Body Lotion  
						                                    </a>
						                                </li>
						                                <li>
						                                    <a href="?page=classify&id=" title="Sản phẩm trắng răng" class="">
						                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
						                                        Sản phẩm trắng răng  
						                                    </a>
						                                </li> -->
						                        </ul>

						                </li>
						    </ul>
						</div>
                    </div>
                    <!-- kết thúc 2222222222222 -->
                    <!-- 3333333333 -->

                    <div class="box-left">
						<div class="title-left">
						    <strong>SẢN PHẨM MỚI VỀ</strong>
						</div>
						<div class="content-left">
                            <?php while ($resultSpNew = mysqli_fetch_assoc($querySpNew)) {
                            ?>
						    <div class="box-shas">
						        <div class="box-imgs">
						            <a href="?page=product&id=<?php echo $resultSpNew['ma_sp'] ?>" title="">
						                <img alt="" class="img-reponsive lazy" data-id="lazy-t0" src="<?php echo $resultSpNew['img'] ?>" style="">
						            </a>
						        </div>
						        <div class="content-shas">
						         	<a href="?page=product&id=<?php echo $resultSpNew['ma_sp'] ?>" title="">
						                <?php echo $resultSpNew['ten_sp'] ?>
						            </a>
						            <span><?php echo number_format($resultSpNew['gia_ban'], 0, ',', ','); ?>₫</span>
						        </div>
						        <div class="clr"></div>
							</div>
						  <?php } ?>
	                    </div>
	                </div>
	                <!-- kết thúc 33333333333 -->

				</div>









		</div>
	</div>
</main>






</body>
    <script type="text/javascript">
        // Instantiate EasyZoom instances
        var $easyzoom = $('.is-ready').easyZoom();
        var api = $easyzoom.data('easyZoom');

        $('.ul').on('click', 'a', function(event) {
            event.preventDefault();
            api.swap($(this).data('standard'), $(this).attr('href'));
        });
    </script>

<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })


   
</script>
</html>