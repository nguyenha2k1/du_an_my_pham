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
    <script type="text/javascript" src="public/js/jquery-3.5.1.min.js"></script>
    <script src="public/owlcarousel/owl.carousel.min.js"></script>

</head>
<body>
<main role="main" class="pb-3">
    <!-- slideshow -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php $active = 'active'; while ($resultSlide = mysqli_fetch_assoc($querySlide)) {?>
                    <div class="carousel-item <?php echo $active?>">
                      <img src="<?php echo $resultSlide['img'] ?>" class="d-block w-100" alt="...">
                    </div>
                <?php $active=''; }?>
                    <!-- <div class="carousel-item">
                      <img src="img/2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/4.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/5.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/6.png" class="d-block w-100" alt="...">
                    </div> -->
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
			</div>
		</div>
	</div>

    <!-- sản phẩm mới về -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="box-products">
                    <div class="head-box">
                        <div class="title-box">
                            <h2>
                                <a href="">
                                    SẢN PHẨM MỚI VỀ
                                </a>
                            </h2>
                        </div>
                        <!-- <div class="arrow-slider">
                            <a href="" class="new-pre btn-pre bnts">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                            </a>
                            <a href="" class="new-nex btn-next bnts">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div> -->
                        <div class="clr"></div>
                    </div>
                    <div class="body-box">
                        <div class="owl-carousel owl-theme">
                            <?php while ($resultProduct = mysqli_fetch_assoc($queryProduct)) {
                            ?>
                            <div class="item">
                                <div class="pd-box ">
                                    <div class="box-images">
                                        <a href="./?select=product&id=1">
                                            <img data-src="" alt="" class="img-reponsive owl-lazy " src="<?php echo $resultProduct['img']?>" style="opacity: 1;">
                                        </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">0%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="./?select=product&id=1"><?php echo $resultProduct['ten_sp']; ?></a>
                                        </h3>
                                        <div>
                                            <span class="price-drop"><?php echo $resultProduct['gia_ban']; ?>₫</span>
                                            <span class="price "><?php echo $resultProduct['gia_thi_truong']; ?>₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <?php } ?>






                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>

<!-- Top 100 bán chạy -->
    <div class="back-gray pad-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-products-category">
                        <div class="head-box-category">
                            <a href="" class="left-head">
                                <img src="./img/sh11-128.png" alt="type icon">
                                <h2>
                                    TOP BÁN CHẠY
                                </h2>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                            <!-- <button class="btn-ct hidden-md" onclick="" data-id="topsale">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button> -->
                            <div class="clr"></div>
                        </div>
                        <div class="body-box-category">
                            <!-- Bắt đàu sản phẩm -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="">
                                                <img alt="" class="img-reponsive lazy " src="./img/sanpham.jpg" style="">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike "><i class="fa fa-cart-plus"></i></button>
                                        <div class="sale-off hide">37%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Nước hoa hồng Simple Soothing Facial Toner</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">120,000₫</span>
                                            <span class="price ">190,400₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đàu sản phẩm -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="">
                                                <img alt="" class="img-reponsive lazy " src="./img/sanpham.jpg" style="">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike "><i class="fa fa-cart-plus"></i></button>
                                        <div class="sale-off hide">37%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Nước hoa hồng Simple Soothing Facial Toner</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">120,000₫</span>
                                            <span class="price ">190,400₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đàu sản phẩm -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="">
                                                <img alt="" class="img-reponsive lazy " src="./img/sanpham.jpg" style="">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike "><i class="fa fa-cart-plus"></i></button>
                                        <div class="sale-off hide">37%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Nước hoa hồng Simple Soothing Facial Toner</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">120,000₫</span>
                                            <span class="price ">190,400₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đàu sản phẩm -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="">
                                                <img alt="" class="img-reponsive lazy " src="./img/sanpham.jpg" style="">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike "><i class="fa fa-cart-plus"></i></button>
                                        <div class="sale-off hide">37%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Nước hoa hồng Simple Soothing Facial Toner</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">120,000₫</span>
                                            <span class="price ">190,400₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đàu sản phẩm -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="">
                                                <img alt="" class="img-reponsive lazy " src="./img/sanpham.jpg" style="">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike "><i class="fa fa-cart-plus"></i></button>
                                        <div class="sale-off hide">37%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Nước hoa hồng Simple Soothing Facial Toner</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">120,000₫</span>
                                            <span class="price ">190,400₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đàu sản phẩm -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="">
                                                <img alt="" class="img-reponsive lazy " src="./img/sanpham.jpg" style="">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike "><i class="fa fa-cart-plus"></i></button>
                                        <div class="sale-off hide">37%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Nước hoa hồng Simple Soothing Facial Toner</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">120,000₫</span>
                                            <span class="price ">190,400₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đàu sản phẩm -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="">
                                                <img alt="" class="img-reponsive lazy " src="./img/sanpham.jpg" style="">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike "><i class="fa fa-cart-plus"></i></button>
                                        <div class="sale-off hide">37%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Nước hoa hồng Simple Soothing Facial Toner</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">120,000₫</span>
                                            <span class="price ">190,400₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đàu sản phẩm -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="">
                                                <img alt="" class="img-reponsive lazy " src="./img/sanpham.jpg" style="">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike "><i class="fa fa-cart-plus"></i></button>
                                        <div class="sale-off hide">37%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Nước hoa hồng Simple Soothing Facial Toner</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">120,000₫</span>
                                            <span class="price ">190,400₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đàu sản phẩm -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="">
                                                <img alt="" class="img-reponsive lazy " src="./img/sanpham.jpg" style="">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike "><i class="fa fa-cart-plus"></i></button>
                                        <div class="sale-off hide">37%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Nước hoa hồng Simple Soothing Facial Toner</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">120,000₫</span>
                                            <span class="price ">190,400₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đàu sản phẩm -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="">
                                                <img alt="" class="img-reponsive lazy " src="./img/sanpham.jpg" style="">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike "><i class="fa fa-cart-plus"></i></button>
                                        <div class="sale-off hide">37%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Nước hoa hồng Simple Soothing Facial Toner</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">120,000₫</span>
                                            <span class="price ">190,400₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đàu sản phẩm -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="">
                                                <img alt="" class="img-reponsive lazy " src="./img/sanpham.jpg" style="">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike "><i class="fa fa-cart-plus"></i></button>
                                        <div class="sale-off hide">37%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Nước hoa hồng Simple Soothing Facial Toner</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">120,000₫</span>
                                            <span class="price ">190,400₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đàu sản phẩm -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="">
                                                <img alt="" class="img-reponsive lazy " src="./img/sanpham.jpg" style="">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike "><i class="fa fa-cart-plus"></i></button>
                                        <div class="sale-off hide">37%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Nước hoa hồng Simple Soothing Facial Toner</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">120,000₫</span>
                                            <span class="price ">190,400₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Trang điểm -->
    <div class="back-gray pad-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-products-category">
                        <div class="head-box-category">
                            <a href="" class="left-head">
                                <img alt="Trang Điểm Icon" class="lazy" src="./img/trangdiem.png" style="">
                                <h2>
                                    Trang Điểm
                                </h2>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                            <ul class="ul-non ul-category" >
                                <li class="active">
                                    <a href="" onclick="" >Trang Điểm Mặt</a>
                                </li>
                                <li class="">
                                    <a href="" onclick="" >Trang Điểm Môi</a>
                                </li>
                            </ul>
                          <!--   <button class="btn-ct hidden-md" onclick=" ">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button> -->
                            <div class="clr"></div>
                        </div>
                        <div class="body-box-category">
                            <!-- Bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="" title="Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate">
                                                <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">33%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">290,000₫</span>
                                            <span class="price ">431,200₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="" title="Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate">
                                                <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">33%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">290,000₫</span>
                                            <span class="price ">431,200₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="" title="Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate">
                                                <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">33%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">290,000₫</span>
                                            <span class="price ">431,200₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="" title="Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate">
                                                <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">33%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">290,000₫</span>
                                            <span class="price ">431,200₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="" title="Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate">
                                                <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">33%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">290,000₫</span>
                                            <span class="price ">431,200₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="" title="Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate">
                                                <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">33%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">290,000₫</span>
                                            <span class="price ">431,200₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="" title="Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate">
                                                <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">33%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">290,000₫</span>
                                            <span class="price ">431,200₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="" title="Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate">
                                                <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">33%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">290,000₫</span>
                                            <span class="price ">431,200₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="" title="Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate">
                                                <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">33%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">290,000₫</span>
                                            <span class="price ">431,200₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="" title="Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate">
                                                <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">33%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">290,000₫</span>
                                            <span class="price ">431,200₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="" title="Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate">
                                                <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">33%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">290,000₫</span>
                                            <span class="price ">431,200₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->
                            <!-- Bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                            <a href="" title="Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate">
                                                <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                            </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">33%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Xịt khoáng La Roche-Posay Serozinc Zinc Sulfate</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">290,000₫</span>
                                            <span class="price ">431,200₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc -->









                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Chăm sóc da -->
    <div class="back-gray pad-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-products-category">
                        <div class="head-box-category">
                            <a href="" class="left-head">
                                <img alt="Chăm Sóc Da Icon" class="lazy" src="./img/chamsocda.png" style="">
                                <h2>
                                    Chăm Sóc Da
                                </h2>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                                <ul class="ul-non ul-category">
                                    <li class="active">
                                        <a href="" onclick="">Dưỡng da </a>
                                    </li>
                                    <li class="">
                                        <a href="" onclick="">Làm sạch da </a>
                                    </li>
                                    <li class="">
                                        <a href="" onclick="">Mask - Mặt nạ</a>
                                    </li>
                                </ul>
                           <!--  <button class="btn-ct hidden-md" onclick="">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button> -->
                            <div class="clr"></div>
                        </div>
                        <div class="body-box-category">
                            <!-- bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                        <a href="">
                                            <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                        </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">62%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Dầu Hạt Nho Now Grapeseed Oil 100%</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">160,000₫</span>
                                            <span class="price ">416,500₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- kết thúc -->
                            <!-- bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                        <a href="">
                                            <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                        </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">62%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Dầu Hạt Nho Now Grapeseed Oil 100%</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">160,000₫</span>
                                            <span class="price ">416,500₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- kết thúc -->
                            <!-- bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                        <a href="">
                                            <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                        </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">62%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Dầu Hạt Nho Now Grapeseed Oil 100%</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">160,000₫</span>
                                            <span class="price ">416,500₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- kết thúc -->
                            <!-- bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                        <a href="">
                                            <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                        </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">62%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Dầu Hạt Nho Now Grapeseed Oil 100%</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">160,000₫</span>
                                            <span class="price ">416,500₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- kết thúc -->
                            <!-- bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                        <a href="">
                                            <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                        </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">62%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Dầu Hạt Nho Now Grapeseed Oil 100%</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">160,000₫</span>
                                            <span class="price ">416,500₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- kết thúc -->
                            <!-- bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                        <a href="">
                                            <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                        </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">62%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Dầu Hạt Nho Now Grapeseed Oil 100%</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">160,000₫</span>
                                            <span class="price ">416,500₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- kết thúc -->
                            <!-- bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                        <a href="">
                                            <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                        </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">62%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Dầu Hạt Nho Now Grapeseed Oil 100%</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">160,000₫</span>
                                            <span class="price ">416,500₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- kết thúc -->
                            <!-- bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                        <a href="">
                                            <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                        </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">62%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Dầu Hạt Nho Now Grapeseed Oil 100%</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">160,000₫</span>
                                            <span class="price ">416,500₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- kết thúc -->
                            <!-- bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                        <a href="">
                                            <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                        </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">62%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Dầu Hạt Nho Now Grapeseed Oil 100%</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">160,000₫</span>
                                            <span class="price ">416,500₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- kết thúc -->
                            <!-- bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                        <a href="">
                                            <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                        </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">62%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Dầu Hạt Nho Now Grapeseed Oil 100%</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">160,000₫</span>
                                            <span class="price ">416,500₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- kết thúc -->
                            <!-- bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                        <a href="">
                                            <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                        </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">62%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Dầu Hạt Nho Now Grapeseed Oil 100%</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">160,000₫</span>
                                            <span class="price ">416,500₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- kết thúc -->
                            <!-- bắt đầu sp -->
                            <div class="col-2-ct">
                                <div class="pd-box pd-box-category">
                                    <div class="box-images">
                                        <a href="">
                                            <img src="./img/sanpham.jpg" alt="" class="img-reponsive lazy ">
                                        </a>
                                        <button type="button" onclick="" class="btn-addlike ">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
                                        <div class="sale-off hide">62%<br>OFF</div>
                                    </div>
                                    <div class="box-content">
                                        <h3>
                                            <a href="">Dầu Hạt Nho Now Grapeseed Oil 100%</a>
                                        </h3>
                                        <div>
                                            <span class="price-drop">160,000₫</span>
                                            <span class="price ">416,500₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- kết thúc -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- thương hiệu nổi bật -->
    <div class="pad-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-brand">
                        <h2>THƯƠNG HIỆU NỔI BẬT</h2>
                    </div>
                    <div class="body-box">
                        <div class="owl-carousel owl-theme">
                            <div class="item imgth">
                                <img src="./img/thuong-hieu-khac.png">
                            </div>
                            <div class="item imgth">
                                <img src="./img/thuong-hieu-khac.png">
                            </div>
                            <div class="item imgth">
                                <img src="./img/thuong-hieu-khac.png">
                            </div>
                            <div class="item imgth">
                                <img src="./img/thuong-hieu-khac.png">
                            </div>
                            <div class="item imgth">
                                <img src="./img/thuong-hieu-khac.png">
                            </div>
                            <div class="item imgth">
                                <img src="./img/thuong-hieu-khac.png">
                            </div>
                            <div class="item imgth">
                                <img src="./img/thuong-hieu-khac.png">
                            </div>
                            <div class="item imgth">
                                <img src="./img/thuong-hieu-khac.png">
                            </div>
                            <div class="item imgth">
                                <img src="./img/thuong-hieu-khac.png">
                            </div>
                            <div class="item imgth">
                                <img src="./img/thuong-hieu-khac.png">
                            </div>
                            <div class="item imgth">
                                <img src="./img/thuong-hieu-khac.png">
                            </div>
                            <div class="item imgth">
                                <img src="./img/thuong-hieu-khac.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hệ thống của hàng -->
    <!-- <div class="pad-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-litmit">
                        <h2>HỆ THỐNG CỬA HÀNG</h2>
                    </div>
                    <div class="box-tent">

                            <div class="box-news" style="float: left; margin: 3px;">
                                <div class="bor-s">
                                    <div class="news-img">
                                        <a href="" onclick="">
                                            <img src="./img/chinhanh.jpg" >
                                            <div class="map-eage">
                                                <i class="fa fa-map-marker"></i>
                                                <p> TP. Hà Nội</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="news-content shop-content">
                                        <a href="" onclick="">Chi Nhánh Hà Nội</a>
                                    </div>
                                </div>
                            </div>

                        <div class="clr"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</main>
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
                items:6
            }
        }
    })
</script>
</html>