<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/site.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/category.css">
    <link rel="stylesheet" type="text/css" href="public/css/shopcard.css">
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
    <script type="text/javascript" src="public/js/js.js"></script>
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
                        <li><a href="">Tạo tài khoản</a></li>
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
	                <h2 class="h2-fiead">Thông tin tài khoản</h2>
	                <form>
	                    <div class="form-group row">
	                        <label for="inputName" class="col-sm-3 col-form-label text-rights opsize"><b>Họ tên</b></label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control opsize" id="txtName" placeholder="VD: N̴͈̩̤͉̊̀͗̃̏͌̀̄̕͝g̸̠͌́̌͒͑̋͐̑̒̊͑̓͗ǘ̵͖̹̰̣̹̦̀̅͒͌̀̚ỳ̷͖͔̘̗̣̞͙́͛͐̑͠ễ̵̡̥͙̦̳̝̝̟̰̟̓̓̐͘ͅn̶͕̫͔̙̠̩͇̩̂́̊̈́͊̃́̃͗͘͜͝͠ͅ H̸̡̨̢͓̼̥̻̙̖̜͉̫͙̒̈̀̃̀̚à̶̳̮̱͐̓̀͐͑͋͆̔̃̑͠ (*)" onchange="" >
	                            <div class="feedback" id="val-txtName">
	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="inputSex" class="col-sm-3 col-form-label text-rights opsize"><b>Giới tính</b></label>
	                        <div class="col-sm-9">
	                            <div class="form-check form-check-inline" >
						          	<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Nam" checked>
  									<label class="form-check-label" for="inlineRadio2">Nam</label>
						        </div>
						        <div class="form-check form-check-inline" >
							        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Nữ">
  									<label class="form-check-label" for="inlineRadio2">Nữ</label>
						        </div>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="inputDate" class="col-sm-3 col-form-label text-rights opsize"><b>Ngày sinh</b></label>
	                        <div class="col-sm-9">
	                            <input type="date" class="form-control opsize" id="txtDate" value="2001-01-01" onchange="">
	                            <div class="feedback" id="val-txtName">

	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="inputPhone" class="col-sm-3 col-form-label text-rights opsize"><b>Số điện thoại</b></label>
	                        <div class="col-sm-9">
	                            <input type="tel" class="form-control opsize" id="txtPhone" placeholder="VD: 0999 666 999 (*)" pattern="[0]{1}[0]-[0-9]{2}-[0-9]{3}" required onchange="">
	                            <div class="feedback" id="val-txtPhone">

	                            </div>
	                        </div>
	                    </div>
	                    <!-- <div class="form-group row">
	                        <label for="" class="col-sm-3 col-form-label text-rights opsize"><b>Tỉnh/Thành phố</b></label>
	                        <div class="col-sm-9">
	                            <select id="RegionId" class="form-control opsize" onchange="">

	                                <option value="0">Chọn tỉnh thành phố</option>
	                                <option value="23">Hồ Chí Minh</option>
	                                <option value="18">Hà Nội</option>
	                                <option value="58">Đà Nẵng</option>
	                                
	                            </select>
	                            <div class="feedback" id="val-RegionId">

	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="" class="col-sm-3 col-form-label text-rights opsize"><b>Quận/Huyện</b></label>
	                        <div class="col-sm-9">
	                            <select id="DistristId" class="form-control opsize" onchange="">
	                                <option selected="" value="0">Chọn quận huyện</option>
	                                <option value="691">Huyện Định Quán</option>
	                                <option value="692">Huyện Long Thành</option>
	                                <option value="693">Huyện Cẩm Mỹ</option>
	                                <option value="694">Thành phố Biên Hòa</option>
	                                <option value="695">Huyện Thống Nhất</option>
	                                <option value="696">Huyện Nhơn Trạch</option>
	                                <option value="697">Huyện Vĩnh Cửu</option>
	                                <option value="698">Huyện Xuân Lộc</option>
	                                <option value="699">Huyện Trảng Bom</option>
	                                <option value="700">Huyện Tân Phú</option>
	                                <option value="701">Thị xã Long Khánh</option>

	                            </select>
	                            <div class="feedback" id="val-DistristId">

	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group row hide">
	                        <label for="" class="col-sm-3 col-form-label text-rights opsize"><b>Phường/Xã</b></label>
	                        <div class="col-sm-9">
	                            <select id="WardId" class="form-control opsize" onchange="">
	                                <option selected="" value="0">Chọn phường xã</option>
	                                <option value="">Xã Bàu Hàm 2</option>
	                                <option value="">Xã Gia Kiệm</option>
	                                
	                            </select>
	                            <div class="feedback" id="val-WardId">

	                            </div>
	                        </div>
	                    </div> -->
	                    <div class="form-group row">
	                        <label for="inputAdd" class="col-sm-3 col-form-label text-rights opsize"><b>Địa chỉ</b></label>
	                        <div class="col-sm-9">
	                            <textarea id="txtAdress" class="form-control opsize" placeholder="Số nhà, đường, phường xã..." onchange=""></textarea>
	                            <div class="feedback" id="val-txtAdress">

	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="staticEmail" class="col-sm-3 col-form-label text-rights opsize"><b>Email</b></label>
	                        <div class="col-sm-9">
	                            <input type="email" class="form-control opsize " id="txtEmail" placeholder="VD: beautygirl@gmail.com" onchange="">
	                            <div class="feedback" id="val-txtEmail">

	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="" class="col-sm-3 col-form-label text-rights opsize"><b>Tên tài khoản</b></label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control opsize " id="txtUser" onchange="">
	                            <div class="feedback" id="val-txtUser">

	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="" class="col-sm-3 col-form-label text-rights opsize"><b>Mật khẩu</b></label>
	                        <div class="col-sm-9">
	                            <input type="password" class="form-control opsize " id="txtPass1" onchange="">
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
	                        		<input type="button" name="" class="btn btn-light pull-right" value="TẠO TÀI KHOẢN" onclick="return kiemtraFormdangky()" >
	                        	</a>
	                        </div>
	                    </div>
	                </form>
	                <form class="hidden-md">
	                    <div class="form-group row">
	                        <div class="col-sm-6 col-7">
	                            <input class="btn btn-light pull-right opsize" type="reset" value="VIẾT LẠI" name="">
	                        </div>
	                        <div class="col-sm-6 col-5">
	                            <a href="https://www.google.com/">
	                        		<input type="button" name="" class="btn btn-light pull-right" value="TẠO TÀI KHOẢN" onclick="return kiemtraFormdangky()" >
	                        	</a>
	                        </div>
	                    </div>
	                </form>
	            </div>
	            <!-- kết thúc -->
	            
	        </div>
	    </div>
	</div>
</main>
</body>
<!-- <script type="text/javascript">
	// Kiểm tra form đăng ký tài khoản
function kiemtraFormdangky(){
	var hoten = document.getElementById('txtName').value;
	var sdt = document.getElementById('txtPhone').value;
	var adress = document.getElementById('txtAdress').value;
	var email = document.getElementById('txtEmail').value;
	var user = document.getElementById('txtUser').value;
	var pass1 = document.getElementById('txtPass1').value;
	check_hoten = /^[a-zA-Z_ -]{5,30}$/;
	check_sdt = /((09|03|07|08|05)+([0-9]{8})\b)/g;
	check_email = /[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm;
	// cehck email /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
	check_user = /^[a-z0-9_-]{3,16}$/;
	check_pass1 =/^([A-Za-z0-9_-]){1}([\w_\.!@#$%^&*()]+){5,31}$/;

	if( hoten =="" ){
			alert("Họ tên không để trống!");
			return false;

	}else{
		if(check_hoten.test(hoten)){
			alert("Hợp lệ!");
		}else{
			alert("Họ tên viết không dấu!");
			return false;
		}
	}


	if (sdt=="") {
		document.getElementById('val-txtPhone').innerHTML = "<p style='color:red;'>Số điện thoại không để trống!</p>" ;
		return false;
	}else{
		if(check_sdt.test(sdt)){
			document.getElementById('val-txtPhone').innerHTML = "<p style='color:red;'>Hợp lệ!</p>" ;
		}else{
			document.getElementById('val-txtPhone').innerHTML = "<p style='color:red;'>Số điện thoại không hợp lệ!</p>" ;
			return false;
		}
	}
	if (adress=="") {
		document.getElementById('val-txtAdress').innerHTML = "<p style='color:red;'>Địa chỉ không để trống!</p>" ;
		return false;
	}else{
		if(check_sdt.test(adress)){
			document.getElementById('val-txtAdress').innerHTML = "<p style='color:red;'>Hợp lệ!</p>" ;
		}else{
			document.getElementById('val-txtAdress').innerHTML = "<p style='color:red;'></p>" ;
		}
	}


	if( email =="" ){
		document.getElementById('val-txtEmail').innerHTML = "<p style='color:red;'>Email không để trống!</p>" ;
		return false;
	}else{
		if(check_email.test(email)){
			document.getElementById('val-txtEmail').innerHTML = "<p style='color:red;'>Hợp lệ!</p>" ;
		}else{
			document.getElementById('val-txtEmail').innerHTML = "<p style='color:red;'>Email không hợp lệ!</p>" ;
			return false;
		}
	}


	if( user =="" ){
		document.getElementById('val-txtUser').innerHTML = "<p style='color:red;'>Tên tài khoản không để trống!</p>" ;
		return false;
	}else{
		if (check_user.test(user)) {
			document.getElementById('val-txtUser').innerHTML = "<p style='color:red;'>Hợp lệ!</p>" ;
				
		}else{
			document.getElementById('val-txtUser').innerHTML = "<p style='color:red;'>Tên tài khoản không hợp lệ!</p>";
			return false;
		}
	}
	if( pass1 =="" ){
		document.getElementById('val-txtPass1').innerHTML = "<p style='color:red;'>Mật khẩu không để trống!</p>" ;
		return false;
	}else{
		if (check_pass1.test(pass1)) {
			document.getElementById('val-txtPass1').innerHTML = "<p style='color:red;'>Hợp lệ!</p>" ;
			return true;
		}else{
			document.getElementById('val-txtPass1').innerHTML = "<p style='color:red;'>Mật khẩu không hợp lệ!</p>";
			return false;
		}
	}
	

	


	
	return true;


}

</script> -->
</html>