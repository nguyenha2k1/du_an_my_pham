<?php 
// session_start();
if (!isset($_SESSION['admin'])) {
    echo "Bạn không có quyền vào trang này!!!";
}else{


?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="views/css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<input type="checkbox" id="check" name="">
<label for="check">
	<i class="fas fa-bars" id="btn"></i>
	<i class="fas fa-times" id="cancel"></i>
</label>
<div class="sidebar">
	<header>BEAUTY SHOP</header>
	<ul class="menu1">
                   <!--  <li style="padding: 30px 0px;"><img src="./img/logo.png" width="100%" height="auto"></li> -->
                    	<li>
                            <a class="" href="?page=admin"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="?page=product"><i class="fab fa-product-hunt"></i> Danh mục sản phẩm</a>
                            <ul class="menu2">
                                <li>
                                    <a href="?page=product">
                                        <i class="fa fa-arrow-right"></i>
                                        Tất cả sản phẩm
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-arrow-right"></i>
                                        Trang điểm
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-arrow-right"></i>
                                        Chăm sóc da
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-arrow-right"></i>
                                        Chăm sóc tóc
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-arrow-right"></i>
                                        Phụ kiện
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-arrow-right"></i>
                                        Nước hoa
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-arrow-right"></i>
                                        Chăm sóc toàn thân
                                    </a>
                                </li>
                                
                               
                            </ul>                            
                        </li>
                        <li>
                            <a class="" href="?page=images"><i class="fas fa-images"></i> Images sản phẩm</a>
                        </li>
                        <li>
                            <a href="?page=account&select=khachhang"><i class="fas fa-users"></i> Thông tin users</a>
                            <ul class="menu2">
                                <li>
                                    <a href="?page=account&select=khachhang">
                                        <i class="fa fa-arrow-right"></i>
                                        Khách hàng
                                    </a>
                                </li>
                                <li>
                                    <a href="?page=account&select=nhanvien">
                                        <i class="fa fa-arrow-right"></i>
                                        Nhân viên
                                    </a>
                                </li>
                               
                            </ul>  
                        </li>
                        <li>
                            <a href="?page=show&select=logo"><i class="fas fa-tv"></i> Giao diện</a>
                            <ul class="menu2">
                                <li>
                                    <a href="?page=show&select=logo">
                                        <i class="fa fa-arrow-right"></i>
                                        Logo
                                    </a>
                                </li>
                                <li>
                                    <a href="?page=show&select=slide">
                                        <i class="fa fa-arrow-right"></i>
                                        Slide show
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fab fa-hotjar"></i> Top bán chạy</a>
                        </li> -->
                        <li>
                            <a href="?page=wHouse&select=new"><i class="fas fa-warehouse"></i> Kho</a>
                            <ul class="menu2">
                                <li>
                                    <a href="?page=wHouse&select=new">
                                        <i class="fa fa-arrow-right"></i>
                                        Sản phẩm mới
                                    </a>
                                </li>
                                <li>
                                    <a href="?page=wHouse&select=sell">
                                        <i class="fa fa-arrow-right"></i>
                                        Sản phẩm bán chạy
                                    </a>
                                </li>
                                <li>
                                    <a href="?page=wHouse&select=exist">
                                        <i class="fa fa-arrow-right"></i>
                                        Sản phẩm tồn kho
                                    </a>
                                </li>
                                
                               
                            </ul>
                        </li>
                        <li>
                            <a href="?page=trademark"><i class="fas fa-industry"></i> Thương hiệu</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-ad"></i> Khuyến mãi</a>
                        </li>
                        <li>
                            <a href="?page=order"><i class="fas fa-shopping-cart"></i> Đơn hàng</a>
                             
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-dolly"></i> Phí giao hàng</a>
                             
                        </li>
                        
                        <li>
                            <a href="#"><i class="far fa-clipboard"></i> Bài viết</a>
                        </li>
                        <li>
                            <a href="?page=store"><i class="fas fa-store"></i> Hệ thống cửa hàng</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-money-check-alt"></i> Doanh thu</a>
                        </li>
                        <li>
                            <a href="?page=email"><i class="far fa-envelope"></i> Email nhận khuyến mãi</a>
                        </li>
                        <li>
                            <a href="?page=infor"><i class="fas fa-question"></i> Thông tin website</a>
                        </li>
                    </ul>
</div>
<main>

    <?php 
    ?>
    <div class="clr"></div>
	<?php 
    include($_SESSION['page'].".php");
    ?>
</main>
</body>
</html>
<?php 
}
?>