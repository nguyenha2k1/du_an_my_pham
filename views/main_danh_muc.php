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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<main role="main" class="pb-3">
    <div class="bracum">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ol class="ol-non">
                        <li><a href="./">Trang chủ</a></li>
                        <li><a href="?page=category&id=<?php echo $resultLMadm['ma_dm']; ?>"><?php echo $resultLMadm['ten_dm']; ?></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

<!-- main chính -->
    <div class="">
        <div class="container">
            <div class="row">
                <!-- bên phải -->
                <div class="col-lg-9 order-lg-last">
                    <div class="box-manugar">
                        <!-- ảnh đại diện danh mục -->
                        <a href="" class="mar-bot-20 dl-block">
                            <img src="<?php echo $resultLMadm['img']; ?>" alt="<?php echo $resultLMadm['ten_dm']; ?>" class="img-reponsive">
                        </a>
                        <!-- kết thúc -->
                        <!-- phần conten -->
                        <div class="my-content">



                            <div class="head-box">
                                <div class="title-box">
                                    <h2>
                                        <a href="" title="Trang Điểm">
                                            <?php echo $resultLMadm['ten_dm']; ?>
                                        </a>
                                    </h2>
                                </div>
                                <div class="select hidden-sm hidden-xs">
                                    <a href="" class="active">Mới về</a>
                                    <a href="" class="">Giá</a>
                                    <a href="" class="">Đánh giá</a>
                                    <a href="" class="">Mua nhiều</a>
                                </div>
                                <div class="clr"></div>
                            </div>

                            <!-- <div class="content-box">
                                <p>Trang điểm tự nhiên với hàng ngàn Mỹ phẩm&nbsp;chính hãng giá tốt từ nhiều thương hiệu nổi tiếng trên thế giới, đặt hàng dễ dàng, bảo hành và giao hàng toàn quốc. Mang lại cho bạn sự hài lòng về chất lượng sản phẩm cũng như trải nghiệm những món mỹ phẩm <a href="" target="_blank" title="trang điểm">trang điểm</a> tự nhiên thịnh hành nhất hiện nay.&nbsp;
                                </p>
                            </div> -->


                            <div class="filter mar-bot-10 text-right hidden-md">
                                <div class="select2 ">
                                    <a href="" class="active">Mới về</a>
                                    <a href="">Giá</a>
                                    <a href="">Đánh giá</a>
                                    <a href="">Mua nhiều</a>
                                </div>
                            </div>



                            <div class="mar-bot-20">
                                <div class="row">
                                    <?php while ($resultProductDm = mysqli_fetch_assoc($queryProductDm)) {
                                        
                                    ?>
                                    <!-- bắt đầu -->
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 pan-right mar-bot-10">
                                        <div class="pd-box ">
                                            <div class="box-images">
                                                    <a href="?page=product&id=<?php echo $resultProductDm['ma_sp'] ?>" title="">
                                                        <img alt="" class="img-reponsive lazy " src="<?php echo $resultProductDm['img']; ?>" style="">
                                                    </a>
                                                <button type="button" onclick="" class="btn-addlike "><i class="fa fa-cart-plus"></i></button>
                                                <div class="sale-off hide">15%<br>OFF</div>
                                            </div>
                                            <div class="box-content">
                                                <h3>
                                                    <a href="?page=product&id=<?php echo $resultProductDm['ma_sp'] ?>" title=""><?php echo $resultProductDm['ten_sp']; ?> </a>
                                                </h3>
                                                <div>
                                                    <span class="price-drop"><?php echo number_format($resultProductDm['gia_ban'], 0, ',', ','); ?>₫</span>
                                                    <span class="price "><?php echo number_format($resultProductDm['gia_thi_truong'], 0, ',', ','); ?>₫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- kết thúc -->
                                   <?php } ?>


                                </div>
                                
                                <!-- phân trang -->
                                <div class="pagination">
                                    <div class="page">
                                        <?php
                                        if ($current_page > 3) {
                                            $first_page = 1;
                                            ?>
                                            <a class="page-item" href="?page=category&id=<?php echo $ma_dm ?>&pagination=<?= $first_page ?>"><i class="fas fa-fast-backward"></i></a>
                                            <?php
                                        }
                                        if ($current_page > 1) {
                                            $prev_page = $current_page - 1;
                                            ?>
                                            <a class="page-item" href="?page=category&id=<?php echo $ma_dm ?>&pagination=<?= $prev_page ?>"><i class="fas fa-backward"></i></a>
                                        <?php }
                                        ?>
                                        <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                                            <?php if ($num != $current_page) { ?>
                                                <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
                                                    <a class="page-item" href="?page=category&id=<?php echo $ma_dm ?>&pagination=<?= $num ?>"><?= $num ?></a>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <a class="current-page page-item"><?= $num ?></a>
                                            <?php } ?>
                                        <?php } ?>
                                        <?php
                                        if ($current_page < $totalPages - 1) {
                                            $next_page = $current_page + 1;
                                            ?>
                                            <a class="page-item" href="?page=category&id=<?php echo $ma_dm ?>&pagination=<?= $next_page ?>"><i class="fas fa-forward"></i></a>
                                        <?php
                                        }
                                        if ($current_page < $totalPages - 3) {
                                            $end_page = $totalPages;
                                            ?>
                                            <a class="page-item" href="?page=category&id=<?php echo $ma_dm ?>&pagination=<?= $end_page ?>"><i class="fas fa-fast-forward"></i></a>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!--  -->
                            </div>



                        </div>
                        <!-- kết thúc -->
                    </div>
                </div>
                <!-- kết thúc -->
                <!-- bên trái -->
                <div class="col-lg-3 order-lg-first">
                    <!-- 22222222 -->
                    <div class="box-left">
                        <div class="title-left">
                            <strong>DANH MỤC SẢN PHẨM</strong>
                        </div>
                        <div class="content-left">
                            <ul class="ul-non ul-left">
                                        <li class=" ">
                                            <a href="?page=category&id=<?php echo $result[0]['ma_dm']; ?>" title="Trang Điểm">
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
                                            <a href="?page=category&id=<?php echo $result[1]['ma_dm']; ?>" title="Chăm Sóc Da">
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
                                            <a href="?page=category&id=<?php echo $result[2]['ma_dm']; ?>" title="Chăm Sóc Tóc">
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
                                            <a href="?page=category&id=<?php echo $result[3]['ma_dm']; ?>" title="Phụ Kiện">
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
                                            <a href="?page=category&id=<?php echo $result[4]['ma_dm']; ?>" title="Nước Hoa">
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
                                            <a href="?page=category&id=<?php echo $result[5]['ma_dm']; ?>" title="Chăm Sóc Toàn Thân">
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



                    <div class="box-left hidden-sm hidden-xs">
                        <div class="title-left">
                            <strong>THƯƠNG HIỆU NỔI BẬT</strong>
                        </div>
                        <div class="content-left">
                            <ul class="ul-non ul-left">
                                        <li>
                                            <a href="?page=trademark&id=19" title="Innisfree">Innisfree </a>
                                        </li>
                                        <li>
                                            <a href="?page=trademark&id=48" title="The Face Shop">The Face Shop </a>
                                        </li>
                                        <li>
                                            <a href="?page=trademark&id=30" title="Neutrogena">Neutrogena </a>
                                        </li>
                                        <li>
                                            <a href="?page=trademark&id=24" title="L&#39;oreal Paris">L'oreal Paris </a>
                                        </li>
                                        <li>
                                            <a href="?page=trademark&id=27" title="Maybelline">Maybelline </a>
                                        </li>
                                        <li>
                                            <a href="?page=trademark&id=51" title="Vacosi">Vacosi </a>
                                        </li>
                                        <li>
                                            <a href="?page=trademark&id=3" title="A&#39;PIEU">A'PIEU </a>
                                        </li>
                                        <li>
                                            <a href="?page=trademark&id=45" title="Skinfood">Skinfood </a>
                                        </li>
                                        <li>
                                            <a href="?page=trademark&id=28" title="Missha">Missha </a>
                                        </li>
                                        <li>
                                            <a href="?page=trademark&id=53" title="Victoria&#39;s Secret">Victoria's Secret </a>
                                        </li>
                                        <li>
                                            <a href="?page=trademark&id=47" title="The Body Shop">The Body Shop </a>
                                        </li>
                            </ul>
                        </div>
                    </div>



                    <div class="box-left">
                        <div class="title-left">
                            <strong>SẢN PHẨM MỚI VỀ</strong>
                        </div>
                        <div class="content-left">
                            <?php while ($resultSpNew = mysqli_fetch_assoc($querySpNew)) {
                            ?>
                            <!-- bắt đầu -->
                            <div class="box-shas">
                                <div class="box-imgs">
                                    <a href="?page=product&id=<?php echo $resultSpNew['ma_sp'] ?>" title="">
                                        <img alt="Viên Serum Dưỡng Tóc Menas Hair Serum" class="img-reponsive lazy" data-id="lazy-t0" src="<?php echo $resultSpNew['img'] ?>" style="">
                                    </a>
                                </div>
                                <div class="content-shas">
                                    <a href="?page=product&id=<?php echo $resultSpNew['ma_sp'] ?>" title="Viên Serum Dưỡng Tóc Menas Hair Serum">
                                         <?php echo $resultSpNew['ten_sp'] ?>
                                    </a>
                                    <span><?php echo number_format($resultSpNew['gia_ban'], 0, ',', ','); ?>₫</span>
                                </div>
                                <div class="clr"></div>
                            </div>       
                            <!--kết thúc  -->
                            <?php } ?>
                        </div>

                    </div>
                </div>
                <!-- kết thúc -->
            </div>
        </div>
    </div>




</main>
</body>
</html>