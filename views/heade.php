<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/site.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
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
    <style type="text/css">
        .box-Sform .btn-search {
            border-top-left-radius: 0;
            border: 1px solid #eee;
            height: 40px;
            padding: 5px 10px;
            border-bottom-left-radius: 0;
            color: #4eaf4e;
            width: 40px;
        }
        .box-Sform .my-form {
            font-size: 14px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-right: none;
            padding: 6px 25px 6px 7px;
            height: 40px;
            border-color: #eee;
            color: #777;
        }
        .box-Sform .btn-search:hover{
            color: black;
        }
    </style>

</head>
<body>
<header>
    <div class="head-first">
        <div class="container">
            
            <div class="box-social hidden-xs">
                <ul class="ul-non ul-social">
                    <li class=""><a href="<?php echo $resultInfor['facebook']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="hidden-sm"><a href="<?php echo $resultInfor['instagram']; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li class="hidden-sm"><a href="<?php echo $resultInfor['pinterest']; ?>" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                    <li class="hidden-sm"><a href="<?php echo $resultInfor['google']; ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
                <div class="box-pdseen">
                    <a href="">
                        <i aria-hidden="true" class="fa fa-chevron-down"></i>
                        Sản phẩm bạn đã xem
                    </a>
                    <div class="box-after" id="load-seen" style="display: none; visibility: hidden;">
                        <div class="">
                            <!-- ẩn hiện lịch sử mặt hàng đã xem -->
                            <p>Sản phẩm đã xem</p>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="box-hotline">
                <ul class="ul-non ul-hotline">
                    <li><a href="tel:0989999111" class="just-hl"><span>Hotline:</span> <?php echo $resultInfor['hotline']; ?></a></li>
                    <li class="hidden-xs"><a href="tel:19009198" class="just-hl"><span>Tổng đài tư vấn:</span> <?php echo $resultInfor['tongdTuvan']; ?></a></li>
                    <li class="hidden-xs">
                        <a href="#" class="pixen-lg">Tài khoản <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="ul-non ul-lg">
                            <li><a href="./?page=account&select=login">Đăng nhập</a></li>
                            <li><a href="./?page=account&select=registration">Đăng ký</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="clr"></div>
        </div>

    </div>
    <div class="head-second">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="box-logo">
                        <a href="./">
                            <img src="<?php echo $resultLogo['img']; ?>" alt="" class="img-reponsive">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-first col-md-6">
                    <div class="box-Sform">
                        <form class="form-inline">
                            <input type="text" class="form-control my-form" id="inlineFormInputName2" placeholder="Tìm kiếm..." value="" autocomplete="off" onfocus="" onfocusout="" onkeydown="">
                            <select class="custom-select my-form" id="inlineFormCustomSelectPref">
                                <option selected value="0">Sản phẩm</option>
                                <option value="1">Tin tức</option>
                            </select>
                            <button type="button" class="btn btn-search" onclick=""><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                        <div class="xuhuong">
                            <p>Xu hướng tìm kiếm</p>
                            <ul class="ul-non ul-xuhuong">
                                        <li><a href="">son</a></li>
                                        <li><a href="">kem duong</a></li>
                                        <li><a href="">innisfree</a></li>
                                        <li><a href="">kem chong nang</a></li>
                                        <li><a href="">mat na</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-last col-md-6 order-md-last hidden-xs">
                    <div class="box-card">
                        <ul class="ul-non ul-card">
                            <li>
                                <a href="./?page=like" class="like-pd" title="Sản phẩm yêu thích">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    Yêu thích
                                    <span id="numberLike" data-id="0">0</span>
                                </a>
                            </li>
                            <li>
                                <a href="./?page=cart" class="shop_cart" title="Giỏ hàng">
                                    <i class="fa fa-shopping-cart "></i>
                                    Giỏ hàng
                                    <span id="result0"><?php if (isset($_COOKIE["sl"])) {
                                        echo $_COOKIE["sl"];
                                    }else{
                                        echo "0";
                                    }  ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
    <div class="head-three" id="myHeader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-menu">
                        <div class="hidden-md ">
                            <ul class="ul-non menu-mb">
                                <li>
                                    <a href="./?page=cart" class="shop_cart_mb" title="Giỏ hàng">
                                        <i class="fa fa-shopping-cart "></i>
                                        <span id="result1"><?php if (isset($_COOKIE["sl"])) {
                                        echo $_COOKIE["sl"];
                                    }else{
                                        echo "0";
                                    }  ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./?page=like" class="like-pd-mb">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        <span>0</span>
                                    </a>
                                </li>
                            </ul>
                            <a href="tel:0911384114" class="hl-pd-mb" title="Tổng đài">
                                <i class="fa fa-phone"></i>
                                CSKH: 0911.384.114
                            </a>
                            <button type="button" class="btn-pd-mb hidden-xs" onclick="">
                                Categories
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn-mn-mb" onclick="addshow();">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                            <div class="clr"></div>
                        </div>
                        <ul class="ul-non ul-menu show" id="menu">
                            <li class="hidden-md first-li"><button type="button" class="btn-remove" onclick="closeshow()"><i class="fa fa-times" aria-hidden="true"></i></button></li>
                            <!-- âf -->
                            <li class="li-parent-first hidden-xs hidden-sm">
                                <a href="" class="a-parent" id="megaloger"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                <ul class="ul-non ul-menu-lagi" id="ul-megaloger">
                                    <li>
                                        <a href="" class="">
                                            <div class="img-luna img-icon img-tt">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8zm6.5-.25A.75.75 0 017.25 7h1a.75.75 0 01.75.75v2.75h.25a.75.75 0 010 1.5h-2a.75.75 0 010-1.5h.25v-2h-.25a.75.75 0 01-.75-.75zM8 6a1 1 0 100-2 1 1 0 000 2z"></path></svg>
                                            </div>
                                            <span>Thông tin</span>
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                        <ul class="ul-non ul-mega">
                                            <li><a href="">Sự kiện khuyến mãi</a></li>
                                            <li><a href="./?select=beautypage">Bí quyết làm đẹp</a></li>
                                            <li><a href="">Tin báo chí</a></li>
                                            <li><a href="">Review sản phẩm</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="" class="">
                                            <div class="img-luna img-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M15.571.572A.75.75 0 0116 1.25L14.777.668c.001 0 0 0 0 0l-.015.012-.076.056a5.508 5.508 0 01-.345.224 9.982 9.982 0 01-1.463.719c-1.322.528-3.351 1.07-6.124 1.071a1.6 1.6 0 00-.861-.25H4a4 4 0 00-1.499 7.71.758.758 0 00-.001.04c0 2.32.486 3.93.813 4.75.262.66.897 1 1.517 1h1.197c.685 0 1.228-.389 1.546-.857.317-.466.468-1.09.31-1.696-.2-.767-.382-1.835-.383-3.183 2.394.086 4.177.577 5.378 1.057a9.965 9.965 0 011.463.719 5.7 5.7 0 01.421.28l.014.012h.002A.75.75 0 0016 11.75V1.25L14.777.668a.75.75 0 01.794-.096zM4.002 10.5c.033 1.969.45 3.306.704 3.946.004.01.01.02.027.03a.185.185 0 00.097.024h1.197c.083 0 .202-.047.305-.2a.608.608 0 00.1-.475 14.036 14.036 0 01-.43-3.329 1.64 1.64 0 01-.11.004h-1.89zM7.5 8.763c2.601.087 4.573.62 5.935 1.166.41.164.766.33 1.065.483V2.588c-.3.154-.654.319-1.065.483C12.073 3.616 10.1 4.15 7.5 4.237v4.526zM14.777.668zM1.5 6.5A2.5 2.5 0 014 4h1.893c.059 0 .107.048.107.107v4.786A.107.107 0 015.893 9H4a2.5 2.5 0 01-2.5-2.5z"></path></svg>
                                            </div>
                                            <span>Về chúng tôi</span>
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                        <ul class="ul-non ul-mega">
                                            <li><a href="">Giới thiệu Beautygarden</a></li>
                                            <li><a href="">Hệ thống cửa hàng</a></li>
                                            <li><a href="">Chương trình tích điểm</a></li>
                                            <li><a href="">Bảo mật thông tin</a></li>
                                            <li><a href="">Điều khoản sử dụng</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="" class="">
                                            <div class="img-luna img-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M7.693 1.066a.75.75 0 01.614 0l7.25 3.25a.75.75 0 010 1.368L13 6.831v2.794c0 1.024-.81 1.749-1.66 2.173-.893.447-2.075.702-3.34.702-.278 0-.55-.012-.816-.036a.75.75 0 01.133-1.494c.22.02.45.03.683.03 1.082 0 2.025-.221 2.67-.543.69-.345.83-.682.83-.832V7.503L8.307 8.934a.75.75 0 01-.614 0L4 7.28v1.663c.296.105.575.275.812.512.438.438.688 1.059.688 1.796v3a.75.75 0 01-.75.75h-3a.75.75 0 01-.75-.75v-3c0-.737.25-1.358.688-1.796.237-.237.516-.407.812-.512V6.606L.443 5.684a.75.75 0 010-1.368l7.25-3.25zM2.583 5L8 7.428 13.416 5 8 2.572 2.583 5zM2.5 11.25c0-.388.125-.611.25-.735a.704.704 0 01.5-.203c.19 0 .37.071.5.203.125.124.25.347.25.735v2.25H2.5v-2.25z"></path></svg>
                                            </div>
                                            <span>Hỗ trợ</span>
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                        <ul class="ul-non ul-mega">
                                            <li><a href="">Hướng dẫn mua hàng</a></li>
                                            <li><a href="">Thanh toán vận chuyển</a></li>
                                            <li><a href="">Chính sách đổi trả</a></li>
                                            <li><a href="">Giải đáp thắc mắc</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="" class="">
                                            <div class="img-luna img-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M5.5 3.5a2 2 0 100 4 2 2 0 000-4zM2 5.5a3.5 3.5 0 115.898 2.549 5.507 5.507 0 013.034 4.084.75.75 0 11-1.482.235 4.001 4.001 0 00-7.9 0 .75.75 0 01-1.482-.236A5.507 5.507 0 013.102 8.05 3.49 3.49 0 012 5.5zM11 4a.75.75 0 100 1.5 1.5 1.5 0 01.666 2.844.75.75 0 00-.416.672v.352a.75.75 0 00.574.73c1.2.289 2.162 1.2 2.522 2.372a.75.75 0 101.434-.44 5.01 5.01 0 00-2.56-3.012A3 3 0 0011 4z"></path></svg>
                                            </div>
                                            <span>Liên hệ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="">
                                            <div class="img-luna img-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M5 5.782V2.5h-.25a.75.75 0 010-1.5h6.5a.75.75 0 010 1.5H11v3.282l3.666 5.76C15.619 13.04 14.543 15 12.767 15H3.233c-1.776 0-2.852-1.96-1.899-3.458L5 5.782zM9.5 2.5h-3V6a.75.75 0 01-.117.403L4.73 9h6.54L9.617 6.403A.75.75 0 019.5 6V2.5zm-6.9 9.847L3.775 10.5h8.45l1.175 1.847a.75.75 0 01-.633 1.153H3.233a.75.75 0 01-.633-1.153z"></path></svg>
                                            </div>
                                            <span>Thực phẩm chức năng</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <!-- sádgfdas -->
                                    <li class="li-parent">
                                        <a href="?page=category&id=<?php echo $result[0]['ma_dm']; ?>" class="a-parent">
                                            Trang Điểm
                                                <i class="fa fa-angle-down hidden-xs hidden-sm" aria-hidden="true"></i>
                                                <i class="fa fa-angle-right hidden-md" aria-hidden="true"></i>
                                        </a>
                                        <div class="out-menu ">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                        <div>
                                                        <a href="" class="title-two">Trang Điểm Mặt</a>
                                                        <ul class="ul-non ul-out">
                                                            <li><a href="?page=classify&id=1">Kem che khuyết điểm</a></li>
                                                            <li><a href="?page=classify&id=2">Cushion</a></li>
                                                            <li><a href="?page=classify&id=3">Kem nền</a></li>
                                                            <li><a href="?page=classify&id=4">Kem BB - CC - DD</a></li>
                                                            <li><a href="?page=classify&id=5">Primer - Kem Lót</a></li>
                                                            <li><a href="?page=classify&id=6">Phấn phủ - Phấn nền</a></li>
                                                            <li><a href="?page=classify&id=7">Phấn má hồng</a></li>
                                                            <li><a href="?page=classify&id=8">Tạo khối - Highlighter</a></li>
                                                            <li><a href="?page=classify&id=9">Xịt khoáng nền</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                        <div>
                                                        <a href="?page=classify&id=10" class="title-two">Trang Điểm Mắt</a>
                                                        <ul class="ul-non ul-out">
                                                            <li><a href="?page=classify&id=10">Phấn Mắt</a></li>
                                                            <li><a href="?page=classify&id=11">Eye Primer – Kem Lót Mắt</a></li>
                                                            <li><a href="?page=classify&id=12">Kẻ Mày</a></li>
                                                            <li><a href="?page=classify&id=13">Eyeliner – Kẻ Mắt</a></li>
                                                            <li><a href="?page=classify&id=14">Mascara</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                    <div>
                                                        <a href="?page=classify&id=15" class="title-two">Trang Điểm Môi</a>
                                                        <ul class="ul-non ul-out">
                                                            <li><a href="?page=classify&id=15">Che khuyết điểm môi</a></li>
                                                            <li><a href="?page=classify&id=16">Son môi</a></li>
                                                            <li><a href="?page=classify&id=17">Son dưỡng </a></li>
                                                            <li><a href="?page=classify&id=18">Lót môi – Khóa môi</a></li>
                                                            <li><a href="?page=classify&id=19">Son high-end</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                                    <div>
                                                        <img src="img/girl1.jpg" alt="" class="img-reponsive">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="li-parent">
                                        <a href="?page=category&id=<?php echo $result[1]['ma_dm']; ?>" class="a-parent">
                                            Chăm Sóc Da
                                                <i class="fa fa-angle-down hidden-xs hidden-sm" aria-hidden="true"></i>
                                                <i class="fa fa-angle-right hidden-md" aria-hidden="true"></i>
                                        </a>

                                            <div class="out-menu right-mn">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                        <div>
                                                            <a href="?page=classify&id=20" class="title-two">Mask - Mặt nạ</a>
                                                            <ul class="ul-non ul-out">
                                                                <li><a href="?page=classify&id=20">Mặt nạ lột mụn</a></li>
                                                                <li><a href="?page=classify&id=21">Mask Đất Sét</a></li>
                                                                <li><a href="?page=classify&id=22">Mask Giấy</a></li>
                                                                <li><a href="?page=classify&id=23">Mask Đắp - Rửa </a></li>
                                                                <li><a href="?page=classify&id=24">Mask Ngủ</a></li>
                                                                <li><a href="?page=classify&id=25">Mask Thiên Nhiên</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                        <div>
                                                            <a href="?page=classify&id=26" class="title-two">Làm sạch da </a>
                                                            <ul class="ul-non ul-out">
                                                                <li><a href="?page=classify&id=26">Sữa rửa mặt</a></li>
                                                                <li><a href="?page=classify&id=27">Tẩy trang </a></li>
                                                                <li><a href="?page=classify&id=28">Tẩy tế bào chết</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                        <div>
                                                            <a href="?page=classify&id=29" class="title-two">Dưỡng da </a>
                                                            <ul class="ul-non ul-out">
                                                                <li><a href="?page=classify&id=29">Dưỡng da mặt</a></li>
                                                                <li><a href="?page=classify&id=30">Hỗ trợ</a></li>
                                                                <li><a href="?page=classify&id=31">Dưỡng vùng mắt</a></li>
                                                                <li><a href="?page=classify&id=32">Kem dưỡng da</a></li>
                                                                <li><a href="?page=classify&id=33">Essence - Serum - Ampoule</a></li>
                                                                <li><a href="?page=classify&id=34">Lotion - Sữa dưỡng</a></li>
                                                                <li><a href="?page=classify&id=35">Toner - Nước hoa hồng</a></li>
                                                                <li><a href="?page=classify&id=36">Kem chống nắng</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                                        <div>
                                                            <img src="./img/girl2.jpg" alt="" class="img-reponsive">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                    </li>
                                    <li class="li-parent">
                                        <a href="?page=category&id=<?php echo $result[2]['ma_dm']; ?>" class="a-parent">
                                            Chăm Sóc Tóc
                                                <i class="fa fa-angle-down hidden-xs hidden-sm" aria-hidden="true"></i>
                                                <i class="fa fa-angle-right hidden-md" aria-hidden="true"></i>
                                        </a>
                                            <div class="out-menu right-mn">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                        <div>
                                                            <ul class="ul-non ul-out">
                                                                <li><a href="?page=classify&id=37">Set dưỡng tóc</a></li>
                                                                <li><a href="?page=classify&id=38">Dầu gội </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                        <div>
                                                            <ul class="ul-non ul-out">
                                                                <li><a href="?page=classify&id=39">Dầu xả</a></li>
                                                                <li><a href="?page=classify&id=41">Kem ủ tóc</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                        <div>
                                                            <ul class="ul-non ul-out">
                                                                <li><a href="?page=classify&id=40">Dầu gội khô</a></li>
                                                                <li><a href="?page=classify&id=42">Serum dưỡng tóc</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </li>
                                    <li class="li-parent">
                                        <a href="?page=category&id=<?php echo $result[3]['ma_dm']; ?>" class="a-parent">
                                            Phụ Kiện
                                            <i class="fa fa-angle-down hidden-xs hidden-sm" aria-hidden="true"></i>
                                            <i class="fa fa-angle-right hidden-md" aria-hidden="true"></i>
                                        </a>
                                            <div class="out-menu menu-outer">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div>
                                                            <ul class="ul-non ul-out">
                                                                <li><a href="?page=classify&id=43">Dụng cụ trang điểm</a></li>
                                                                <li><a href="?page=classify&id=44">Phụ kiện làm đẹp</a></li>
                                                                <li><a href="?page=classify&id=45">Sơn móng - Rửa móng</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </li>
                                    <li class="li-parent">
                                        <a href="?page=category&id=<?php echo $result[4]['ma_dm']; ?>" class="a-parent">
                                            Nước Hoa
                                                <i class="fa fa-angle-down hidden-xs hidden-sm" aria-hidden="true"></i>
                                                <i class="fa fa-angle-right hidden-md" aria-hidden="true"></i>
                                        </a>
                                        <div class="out-menu menu-outer">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div>
                                                        <ul class="ul-non ul-out">
                                                            <li><a href="?page=classify&id=47">Nước hoa nữ </a></li>
                                                            <li><a href="?page=classify&id=48">Nước hoa nam</a></li>
                                                            <li><a href="?page=classify&id=49">Xịt thơm body</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="li-parent">
                                        <a href="?page=category&id=<?php echo $result[5]['ma_dm']; ?>" class="a-parent">
                                            Chăm Sóc Toàn Thân
                                                <i class="fa fa-angle-down hidden-xs hidden-sm" aria-hidden="true"></i>
                                                <i class="fa fa-angle-right hidden-md" aria-hidden="true"></i>
                                        </a>

                                            <div class="out-menu right-mn">
                                                <div class="row">
                                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                <div>
                                                                    <ul class="ul-non ul-out">
                                                                        <li><a href="?page=classify&id=50">Dưỡng thể - Body Lotion</a></li>
                                                                        <li><a href="?page=classify&id=51">Sữa tắm</a></li>
                                                                        <li><a href="?page=classify&id=52">Kem dưỡng toàn  thân - Body Cream</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                <div>
                                                                    <ul class="ul-non ul-out">
                                                                        <li><a href="?page=classify&id=53">Dưỡng da tay</a></li>
                                                                        <li><a href="?page=classify&id=54">Tẩy tế bào chết</a></li>
                                                                        <li><a href="?page=classify&id=55">Tẩy lông</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                <div>
                                                                    <ul class="ul-non ul-out">
                                                                        <li><a href="?page=classify&id=56">Khử mùi</a></li>
                                                                        <li><a href="?page=classify&id=57">Giảm sẹo – Giảm thâm – Giảm nám</a></li>
                                                                        <li><a href="?page=classify&id=58">Chăm sóc răng miệng</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                </div>
                                            </div>
                                    </li>
                            <li class="li-parent">
                                <a href="" class="a-parent">
                                    Khuyến mãi
                                    <i class="fa fas" aria-hidden="true"></i>
                                    <span class="pos-kam">Hot</span>
                                </a>
                            </li>
                            <li class="li-parent">
                                <a href="?page=trademark&id=1" class="a-parent">
                                    Thương hiệu
                                    <i class="fa fa-angle-down hidden-xs hidden-sm" aria-hidden="true"></i>
                                    <i class="fa fa-angle-right hidden-md" aria-hidden="true"></i>
                                </a>
                                <div class="out-menu right-mn">
                                    <div class="row">
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                    <div>
                                                        <ul class="ul-non ul-out">
                                                            <li><a href="?page=trademark&id=1">3CE</a></li>
                                                            <li><a href="?page=trademark&id=2">3W Clinic</a></li>
                                                            <li><a href="?page=trademark&id=3">A'PIEU</a></li>
                                                            <li><a href="?page=trademark&id=4">Aritaum</a></li>
                                                            <li><a href="?page=trademark&id=5">Avene</a></li>
                                                            <li><a href="?page=trademark&id=6">Bath and body works</a></li>
                                                            <li><a href="?page=trademark&id=7">Benton</a></li>
                                                            <li><a href="?page=trademark&id=8">Bioderma</a></li>
                                                            <li><a href="?page=trademark&id=9">Careline</a></li>
                                                            <li><a href="?page=trademark&id=10">City Color</a></li>
                                                            <li><a href="?page=trademark&id=11">Cocoon</a></li>
                                                            <li><a href="?page=trademark&id=12">Covergirl</a></li>
                                                            <li><a href="?page=trademark&id=13">DHC</a></li>
                                                            <li><a href="?page=trademark&id=14">Dr.Belmeur</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                    <div>
                                                        <ul class="ul-non ul-out">
                                                            <li><a href="?page=trademark&id=15">Etude House</a></li>
                                                            <li><a href="?page=trademark&id=16">Evoluderm</a></li>
                                                            <li><a href="?page=trademark&id=17">Hada Labo</a></li>
                                                            <li><a href="?page=trademark&id=18">Holika Holika </a></li>
                                                            <li><a href="?page=trademark&id=19">Innisfree</a></li>
                                                            <li><a href="?page=trademark&id=20">Kose</a></li>
                                                            <li><a href="?page=trademark&id=21">L.A Girl</a></li>
                                                            <li><a href="?page=trademark&id=22">LANEIGE KOREA</a></li>
                                                            <li><a href="?page=trademark&id=23">Lanopearl</a></li>
                                                            <li><a href="?page=trademark&id=24">L'oreal Paris</a></li>
                                                            <li><a href="?page=trademark&id=25">MAC</a></li>
                                                            <li><a href="?page=trademark&id=26">Mamonde</a></li>
                                                            <li><a href="?page=trademark&id=27">Maybelline</a></li>
                                                            <li><a href="?page=trademark&id=28">Missha</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                    <div>
                                                        <ul class="ul-non ul-out">
                                                            <li><a href="?page=trademark&id=29">Nature Republic</a></li>
                                                            <li><a href="?page=trademark&id=30">Neutrogena</a></li>
                                                            <li><a href="?page=trademark&id=31">NYX</a></li>
                                                            <li><a href="?page=trademark&id=32">Ohui </a></li>
                                                            <li><a href="?page=trademark&id=33">Paula's Choice</a></li>
                                                            <li><a href="?page=trademark&id=34">Physician Formula</a></li>
                                                            <li><a href="?page=trademark&id=35">Play Boy </a></li>
                                                            <li><a href="?page=trademark&id=36">Pony</a></li>
                                                            <li><a href="?page=trademark&id=37">Rebirth </a></li>
                                                            <li><a href="?page=trademark&id=38">Revlon</a></li>
                                                            <li><a href="?page=trademark&id=39">Rimmel</a></li>
                                                            <li><a href="?page=trademark&id=40">Secret Key</a></li>
                                                            <li><a href="?page=trademark&id=41">Shiseido</a></li>
                                                            <li><a href="?page=trademark&id=42">Simple</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                    <div>
                                                        <ul class="ul-non ul-out">
                                                            <li><a href="?page=trademark&id=43">Sivanna Colors</a></li>
                                                            <li><a href="?page=trademark&id=44">SK - II</a></li>
                                                            <li><a href="?page=trademark&id=45">Skinfood</a></li>
                                                            <li><a href="?page=trademark&id=46">StIves</a></li>
                                                            <li><a href="?page=trademark&id=47">The Body Shop</a></li>
                                                            <li><a href="?page=trademark&id=48">The Face Shop</a></li>
                                                            <li><a href="?page=trademark&id=49">Thương Hiệu Khác</a></li>
                                                            <li><a href="?page=trademark&id=50">Tonymoly</a></li>
                                                            <li><a href="?page=trademark&id=51">Vacosi</a></li>
                                                            <li><a href="?page=trademark&id=52">Vichy</a></li>
                                                            <li><a href="?page=trademark&id=53">Victoria's Secret</a></li>
                                                            <li><a href="?page=trademark&id=54">W7 </a></li>
                                                            <li><a href="?page=trademark&id=55">Yadah </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="ul-non ul-right">
                            <li>
                                <a><i class="fa fa-search" aria-hidden="true"></i></a>
                                <div class="searcf-s">
                                    <form class="form-inline">
                                        <input type="text" class="form-control my-form" id="inlineFormInputName3" placeholder="Tìm kiếm..." autocomplete="off" onfocus="" onfocusout="unfos2()">
                                        <button type="button" class="btn btn-search" onclick=""><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                    <div class="xuongform2 pol-lem ">
                                        <p>Xu hướng tìm kiếm</p>
                                        <ul class="ul-non ul-xuhuong ">
                                            <li><a href="">son</a></li>
                                            <li><a href="">kem duong</a></li>
                                            <li><a href="">innisfree</a></li>
                                            <li><a href="">3ce</a></li>
                                            <li><a href="">xit khoang</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="./?page=cart">
                                    <i class="fa fa-shopping-cart " id="result2"><?php if (isset($_COOKIE["sl"])) {
                                        echo $_COOKIE["sl"];
                                    }else{
                                        echo "0";
                                    }  ?></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="ul-non ul-menu-lagi hidden-md" id="ul-megaloger-mb">
                            <li>
                                <a href="" class="">
                                    <div class="img-luna img-icon img-tt"></div>
                                    <span>Thông tin</span>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                                <ul class="ul-non ul-mega">
                                    <li><a href="">Sự kiện khuyến mãi</a></li>
                                    <li><a href="./?select=beautypage">Bí quyết làm đẹp</a></li>
                                    <li><a href="">Tin báo chí</a></li>
                                    <li><a href="">Review sản phẩm</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="">
                                    <div class="img-luna img-icon img-about"></div>
                                    <span>Về chúng tôi</span>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                                <ul class="ul-non ul-mega">
                                    <li><a href="">Giới thiệu Beautygarden</a></li>
                                    <li><a href="">Hệ thống cửa hàng</a></li>
                                    <li><a href="">Chương trình tích điểm</a></li>
                                    <li><a href="">Bảo mật thông tin</a></li>
                                    <li><a href="">Điều khoản sử dụng</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="">
                                    <div class="img-luna img-icon img-support"></div>
                                    <span>Hỗ trợ</span>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                                <ul class="ul-non ul-mega">
                                    <li><a href="">Hướng dẫn mua hàng</a></li>
                                    <li><a href="">Thanh toán vận chuyển</a></li>
                                    <li><a href="l">Chính sách đổi trả</a></li>
                                    <li><a href="">Giải đáp thắc mắc</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="">
                                    <div class="img-luna img-icon img-contact"></div>
                                    <span>Liên hệ</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="">
                                    <div class="img-luna img-icon img-thucpham"></div>
                                    <span>Thực phẩm chức năng</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</body>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("scrollshead");
  } else {
    header.classList.remove("scrollshead");
  }
}
</script>
<!-- <script type="text/javascript">
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
                items:6
            }
        }
    })


   
</script> -->
</html>