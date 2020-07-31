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
                        <li><a href="?page=classify&id=<?php echo $resultLMapl['ma_pl'] ?>"><?php echo $resultLMapl['ten_loai_sp']; ?></a></li>
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
                       
                        <!-- phần conten -->
                        <div class="my-content">



                            <div class="head-box">
                                <div class="title-box">
                                    <h2>
                                        <a href="?page=classify&id=<?php echo $resultLMapl['ma_pl'] ?>" title="<?php echo $resultLMapl['ten_loai_sp']; ?>">
                                            <?php echo $resultLMapl['ten_loai_sp']; ?>
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
                                    <?php while ($resultProductPl = mysqli_fetch_assoc($queryProductPl)) {
                                        
                                    ?>
                                    <!-- bắt đầu -->
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 pan-right mar-bot-10">
                                        <div class="pd-box ">
                                            <div class="box-images">
                                                    <a href="?page=product&id=<?php echo $resultProductPl['ma_sp'] ?>" title="">
                                                        <img alt="" class="img-reponsive lazy " src="<?php echo $resultProductPl['img']; ?>" style="">
                                                    </a>
                                                <button type="button" onclick="" class="btn-addlike "><i class="fa fa-cart-plus"></i></button>
                                                <div class="sale-off hide">15%<br>OFF</div>
                                            </div>
                                            <div class="box-content">
                                                <h3>
                                                    <a href="?page=product&id=<?php echo $resultProductPl['ma_sp'] ?>" title=""><?php echo $resultProductPl['ten_sp']; ?> </a>
                                                </h3>
                                                <div>
                                                    <span class="price-drop"><?php echo number_format($resultProductPl['gia_ban'], 0, ',', ','); ?>₫</span>
                                                    <span class="price "><?php echo number_format($resultProductPl['gia_thi_truong'], 0, ',', ','); ?>₫</span>
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
                                            <a class="page-item" href="?page=classify&id=<?php echo $ma_pl ?>&pagination=<?= $first_page ?>"><i class="fas fa-fast-backward"></i></a>
                                            <?php
                                        }
                                        if ($current_page > 1) {
                                            $prev_page = $current_page - 1;
                                            ?>
                                            <a class="page-item" href="?page=classify&id=<?php echo $ma_pl ?>&pagination=<?= $prev_page ?>"><i class="fas fa-backward"></i></a>
                                        <?php }
                                        ?>
                                        <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                                            <?php if ($num != $current_page) { ?>
                                                <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
                                                    <a class="page-item" href="?page=classify&id=<?php echo $ma_pl ?>&pagination=<?= $num ?>"><?= $num ?></a>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <a class="current-page page-item"><?= $num ?></a>
                                            <?php } ?>
                                        <?php } ?>
                                        <?php
                                        if ($current_page < $totalPages - 1) {
                                            $next_page = $current_page + 1;
                                            ?>
                                            <a class="page-item" href="?page=classify&id=<?php echo $ma_pl ?>&pagination=<?= $next_page ?>"><i class="fas fa-forward"></i></a>
                                        <?php
                                        }
                                        if ($current_page < $totalPages - 3) {
                                            $end_page = $totalPages;
                                            ?>
                                            <a class="page-item" href="?page=classify&id=<?php echo $ma_pl ?>&pagination=<?= $end_page ?>"><i class="fas fa-fast-forward"></i></a>
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
                    <div class="box-left hidden-sm hidden-xs">
                        <div class="title-left">
                            <strong>DANH MỤC SẢN PHẨM</strong>
                        </div>
                        <div class="content-left">
                            <ul class="ul-non ul-left">
                                        <li class=" "><!-- active -->
                                            <a href="" title="Trang Điểm">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                Trang Điểm (1330) 
                                            </a>
                                                <ul class="ul-non ul-childs">
                                                        <li>
                                                            <a href="" title="Trang Điểm Mặt" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Trang Điểm Mặt (531) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Trang Điểm Mắt" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Trang Điểm Mắt (298) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Trang Điểm Môi" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Trang Điểm Môi (459) 
                                                            </a>
                                                        </li>
                                                </ul>

                                        </li>
                                        <li class=" ">
                                            <a href="" title="Chăm Sóc Da">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                Chăm Sóc Da (2048) 
                                            </a>
                                                <ul class="ul-non ul-childs">
                                                        <li>
                                                            <a href="" title="Làm sạch da " class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Làm sạch da  (534) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Dưỡng da " class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Dưỡng da  (1135) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Mask - Mặt nạ" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Mask - Mặt nạ (329) 
                                                            </a>
                                                        </li>
                                                </ul>

                                        </li>
                                        <li class=" ">
                                            <a href="" title="Chăm Sóc Tóc">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                Chăm Sóc Tóc (219) 
                                            </a>
                                                <ul class="ul-non ul-childs">
                                                        <li>
                                                            <a href="" title="Dầu gội " class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Dầu gội  (66) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Dầu xả" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Dầu xả (42) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Kem ủ tóc" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Kem ủ tóc (30) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Dầu gội khô" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Dầu gội khô (9) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Serum dưỡng tóc" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Serum dưỡng tóc (33) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Set dầu gội" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Set dầu gội (15) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Màu nhuộm tóc" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Màu nhuộm tóc (8) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Set dưỡng tóc" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Set dưỡng tóc (2) 
                                                            </a>
                                                        </li>
                                                </ul>

                                        </li>
                                        <li class=" ">
                                            <a href="" title="Phụ Kiện">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                Phụ Kiện (236) 
                                            </a>
                                                <ul class="ul-non ul-childs">
                                                        <li>
                                                            <a href="" title="Dụng cụ trang điểm" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Dụng cụ trang điểm (115) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Phụ kiện làm đẹp" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Phụ kiện làm đẹp (96) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Sơn móng - Rửa móng" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Sơn móng - Rửa móng (14) 
                                                            </a>
                                                        </li>
                                                </ul>

                                        </li>
                                        <li class=" ">
                                            <a href="" title="Nước Hoa">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                Nước Hoa (100) 
                                            </a>
                                                <ul class="ul-non ul-childs">
                                                        <li>
                                                            <a href="" title="Nước hoa nữ " class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Nước hoa nữ  (56) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Nước hoa nam" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Nước hoa nam (9) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Xịt thơm body" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Xịt thơm body (32) 
                                                            </a>
                                                        </li>
                                                </ul>

                                        </li>
                                        <li class=" ">
                                            <a href="" title="Chăm Sóc Toàn Thân">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                Chăm Sóc Toàn Thân (424) 
                                            </a>
                                                <ul class="ul-non ul-childs">
                                                        <li>
                                                            <a href="" title="Sữa tắm" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Sữa tắm (109) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Kem dưỡng toàn  thân - Body Cream" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Kem dưỡng toàn  thân - Body Cream (39) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Dưỡng da tay" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Dưỡng da tay (34) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Tẩy tế bào chết" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Tẩy tế bào chết (25) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Tẩy lông" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Tẩy lông (14) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Khử mùi" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Khử mùi (46) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Giảm sẹo – Giảm thâm – Giảm nám" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Giảm sẹo – Giảm thâm – Giảm nám (7) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Chăm sóc răng miệng" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Chăm sóc răng miệng (37) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Dưỡng thể - Body Lotion" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Dưỡng thể - Body Lotion (73) 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" title="Sản phẩm trắng răng" class="">
                                                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                Sản phẩm trắng răng (21) 
                                                            </a>
                                                        </li>
                                                </ul>

                                        </li>
                            </ul>
                        </div>
                    </div>



                    <div class="box-left hidden-sm hidden-xs">
                        <div class="title-left">
                            <strong>THƯƠNG HIỆU NỔI BẬT</strong>
                        </div>
                        <div class="content-left">
                            <ul class="ul-non ul-left">
                                        <li>
                                            <a href="" title="Innisfree">Innisfree (297)</a>
                                        </li>
                                        <li>
                                            <a href="" title="The Face Shop">The Face Shop (167)</a>
                                        </li>
                                        <li>
                                            <a href="" title="Neutrogena">Neutrogena (125)</a>
                                        </li>
                                        <li>
                                            <a href="" title="L&#39;oreal Paris">L'oreal Paris (117)</a>
                                        </li>
                                        <li>
                                            <a href="" title="Maybelline">Maybelline (108)</a>
                                        </li>
                                        <li>
                                            <a href="" title="Vacosi">Vacosi (81)</a>
                                        </li>
                                        <li>
                                            <a href="" title="A&#39;PIEU">A'PIEU (55)</a>
                                        </li>
                                        <li>
                                            <a href="" title="Skinfood">Skinfood (54)</a>
                                        </li>
                                        <li>
                                            <a href="" title="Missha">Missha (51)</a>
                                        </li>
                                        <li>
                                            <a href="" title="Victoria&#39;s Secret">Victoria's Secret (45)</a>
                                        </li>
                                        <li>
                                            <a href="" title="The Body Shop">The Body Shop (45)</a>
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