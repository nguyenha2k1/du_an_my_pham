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
<main role="main" class="pb-3">
	<div class="bracum">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ol class="ol-non">
                        <li><a href="">Trang chủ</a></li>
                        <li><a href="">Tài khoản</a></li>
                        <li><a href="">Đăng nhập</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
	<div class="pad-tab-40">
		<div class="container">
	        <div class="row">
	        	<!-- bắt đ -->
	            <div class="col-lg-7 m-auto">
	                <div id="load-error"></div>
	                <h2 class="h2-fiead">Thông tin đăng nhập</h2>
	                <form>
	                    <div class="form-group row">
	                        <label for="inputUser" class="col-sm-3 col-form-label text-rights opsize"><b>Tên tài khoản</b></label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control opsize" id="txtUser" onchange="">
	                            <div class="feedback" id="val-txtUser">

	                            </div>
	                        </div>
	                    </div>
	                    
	                    <div class="form-group row">
	                        <label for="inputPassword" class="col-sm-3 col-form-label text-rights opsize"><b>Mật khẩu</b></label>
	                        <div class="col-sm-9">
	                            <input type="password" class="form-control opsize" id="txtPass1" onchange="">
	                            <div class="feedback" id="val-txtPass1">

	                            </div>
	                        </div>
	                    </div>
	                   
	                    
	                    
	                    <div class="form-group row hidden-sm hidden-xs">
	                    	<div class="col-sm-6 col-7">
	                            <input class="btn btn-light pull-right opsize" type="reset" value="VIẾT LẠI" name="">
	                        </div>
	                        <div class="col-sm-6 col-5">
	                            <a href="https://www.google.com/">
	                        		<input type="button" name="" class="btn btn-light pull-right" value="ĐĂNG NHẬP" onclick="return kiemtraFormdangnhap()" >
	                        	</a>
	                        </div>
	                    </div>
	                </form>
	                <form class="hidden-md">
	                    <div class="form-group row">
	                        <div class="col-sm-6 col-7">
	                            <input class="btn btn-light pull-right opsize" type="reset" value="VIẾT LẠI" name="">
	                        </div>
	                        	<a href="https://www.google.com/">
	                        		<input type="button" name="" class="btn btn-light pull-right" value="ĐĂNG NHẬP" onclick="return kiemtraFormdangnhap()" >
	                        	</a>
	                    </div>
	                </form>
	            </div>
	            <!-- kết thúc -->
	            
	        </div>
	    </div>
	</div>
</main>

</body>

</html>