<?php
	$conn = mysqli_connect("localhost", "root", "") or die ("Kết nối không thành công");
	//tạo database với chuẩn utf8mb4
	$sql="CREATE database if not exists my_pham character set UTF8MB4 collate utf8mb4_vietnamese_ci";
	mysqli_query($conn,$sql) or die ("Lỗi tạo cơ sở dữ liệu");
	mysqli_select_db($conn,"my_pham");


	//tạo bảng thuonghieu
	$sqlTHUONGH = "CREATE table if not exists thuonghieu("; 
	$sqlTHUONGH.= "ma_th int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlTHUONGH.= "ten_thuong_hieu varchar(30) NOT NULL,";
	$sqlTHUONGH.= "img varchar(1000) NOT NULL );";

	mysqli_query($conn,$sqlTHUONGH) or die ("Lỗi tạo bảng thuonghieu");


	//tạo bảng danhmuc
	$sqlDANHMUC = "CREATE table if not exists danhmuc("; 
	$sqlDANHMUC.= "ma_dm int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlDANHMUC.= "ten_dm varchar(30) NOT NULL );";

	mysqli_query($conn,$sqlDANHMUC) or die ("Lỗi tạo bảng danhmuc");

	//tạo bảng phanloaisp
	$sqlPHANLSP = "CREATE table if not exists phanloaisp("; 
	$sqlPHANLSP.= "ma_pl int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlPHANLSP.= "ten_loai_sp varchar(30) NOT NULL,";
	$sqlPHANLSP.= "ma_dm int(10) NOT NULL,";
	$sqlPHANLSP.= "FOREIGN KEY (ma_dm) REFERENCES danhmuc(ma_dm) ON DELETE CASCADE  );";

	mysqli_query($conn,$sqlPHANLSP) or die ("Lỗi tạo bảng phanloaisp");

	//tạo bảng sanpham
	$sqlSANPHAM = "CREATE table if not exists sanpham("; 
	$sqlSANPHAM.= "ma_sp int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlSANPHAM.= "ten_sp varchar(50) NOT NULL,";
	$sqlSANPHAM.= "date_tao datetime NOT NULL,";
	$sqlSANPHAM.= "gia_ban int(10) NOT NULL,";
	$sqlSANPHAM.= "gia_thi_truong int(10) NOT NULL,";
	$sqlSANPHAM.= "ma_th int(10) NOT NULL,";
	$sqlSANPHAM.= "sl_trong_kho int(5) NOT NULL,";
	$sqlSANPHAM.= "ma_pl int(10) NOT NULL,";
	$sqlSANPHAM.= "hien_thi tinyint(5) NOT NULL default 1,";
	$sqlSANPHAM.= "sl_da_ban int(10) NOT NULL default 0,";
	$sqlSANPHAM.= "FOREIGN KEY (ma_pl) REFERENCES phanloaisp(ma_pl) ,";
	$sqlSANPHAM.= "FOREIGN KEY (ma_th) REFERENCES thuonghieu(ma_th) );";

	mysqli_query($conn,$sqlSANPHAM) or die ("Lỗi tạo bảng sanpham");



	//tạo bảng gioithieusanpham
	$sqlGIOITHIEUSP = "CREATE table if not exists gioithieusp("; 
	$sqlGIOITHIEUSP.= "stt int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlGIOITHIEUSP.= "ma_sp int(10) NOT NULL,";
	$sqlGIOITHIEUSP.= "khai_quat text(1000) NOT NULL,";
	$sqlGIOITHIEUSP.= "noidung text(2000) NOT NULL,";
	$sqlGIOITHIEUSP.= "danh_gia float(10) NOT NULL default 0,";
	$sqlGIOITHIEUSP.= "FOREIGN KEY (ma_sp) REFERENCES sanpham(ma_sp) ON DELETE CASCADE  );";

	mysqli_query($conn,$sqlGIOITHIEUSP) or die ("Lỗi tạo bảng gioithieusp");

	//tạo bảng spkhuyenmai
	// $sqlSPKHUYENMAI = "CREATE table if not exists spkhuyenmai("; 
	// $sqlSPKHUYENMAI.= "stt int(10) AUTO_INCREMENT PRIMARY KEY,";
	// $sqlSPKHUYENMAI.= "ma_sp int(10) NOT NULL,";
	// $sqlSPKHUYENMAI.= "gia_tri_km int(3) NOT NULL,";
	// $sqlSPKHUYENMAI.= "FOREIGN KEY (ma_sp) REFERENCES sanpham(ma_sp) );";

	// mysqli_query($conn,$sqlSPKHUYENMAI) or die ("Lỗi tạo bảng spkhuyenmai");



	//tạo bảng taikhoan
	$sqlTAIKHOAN = "CREATE table if not exists taikhoan("; 
	$sqlTAIKHOAN.= "id int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlTAIKHOAN.= "ten_tk varchar(20) NULL,";
	$sqlTAIKHOAN.= "mk varchar(20) NULL,";
	$sqlTAIKHOAN.= "ngay_tao datetime NOT NULL,";
	$sqlTAIKHOAN.= "hoat_dong tinyint(5) NOT NULL default 1,";
	$sqlTAIKHOAN.= "cap int(1) NOT NULL );";

	mysqli_query($conn,$sqlTAIKHOAN) or die ("Lỗi tạo bảng taikhoan");

	//tạo bảng thongtintk
	$sqlTTTK = "CREATE table if not exists thongtintk("; 
	$sqlTTTK.= "stt int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlTTTK.= "id int(10) NOT NULL,";
	$sqlTTTK.= "ho_va_ten varchar(30) NOT NULL,";
	$sqlTTTK.= "gioi_tinh int(1) NOT NULL,";
	$sqlTTTK.= "ngay_sinh date NULL,";
	$sqlTTTK.= "sdt varchar(10) NOT NULL,";
	$sqlTTTK.= "dia_chi varchar(70) NOT NULL,";
	$sqlTTTK.= "email varchar(50) NOT NULL,";
	$sqlTTTK.= "FOREIGN KEY (id) REFERENCES taikhoan(id) ON DELETE CASCADE );";

	mysqli_query($conn,$sqlTTTK) or die ("Lỗi tạo bảng thongtintk");

	//tạo bảng donhang
	$sqlDONHANG = "CREATE table if not exists donhang("; 
	$sqlDONHANG.= "ma_dh int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlDONHANG.= "id_khach_hang int(10) NOT NULL,";
	$sqlDONHANG.= "ghi_chu varchar(255) NULL,";
	$sqlDONHANG.= "phi_ship int(10) NOT NULL,";
	$sqlDONHANG.= "tong_tien int(10) NOT NULL,";
	$sqlDONHANG.= "ngay_tao datetime NOT NULL,";
	$sqlDONHANG.= "ngay_ship datetime NULL,";
	$sqlDONHANG.= "ngay_ship_ht datetime NULL,";
	$sqlDONHANG.= "trang_thai tinyint(5) NOT NULL default 0,";
	$sqlDONHANG.= "FOREIGN KEY (id_khach_hang) REFERENCES taikhoan(id) ON DELETE CASCADE  );";

	mysqli_query($conn,$sqlDONHANG) or die ("Lỗi tạo bảng donhang");


	//tạo bảng chitietdonhang
	$sqlchitietdh = "CREATE table if not exists chitietdonhang("; 
	$sqlchitietdh.= "stt int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlchitietdh.= "ma_sp int(10) NOT NULL,";
	$sqlchitietdh.= "so_luong int(3) NOT NULL,";
	$sqlchitietdh.= "ma_dh int(10) NULL,";
	$sqlchitietdh.= "gia_tien int(10) NOT NULL,";
	$sqlchitietdh.= "FOREIGN KEY (ma_sp) REFERENCES sanpham(ma_sp)   ,";
	$sqlchitietdh.= "FOREIGN KEY (ma_dh) REFERENCES donhang(ma_dh) ON DELETE CASCADE  );";

	mysqli_query($conn,$sqlchitietdh) or die ("Lỗi tạo bảng chitietdonhang");




	//tạo bảng giohang
	$sqlGIOHANG = "CREATE table if not exists giohang("; 
	$sqlGIOHANG.= "stt int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlGIOHANG.= "id_tai_khoan int(10) NOT NULL,";
	$sqlGIOHANG.= "ma_sp int(10) NOT NULL,";
	$sqlGIOHANG.= "so_luong int(10) NOT NULL,";
	$sqlGIOHANG.= "FOREIGN KEY (ma_sp) REFERENCES sanpham(ma_sp) ON DELETE CASCADE  ,";
	$sqlGIOHANG.= "FOREIGN KEY (id_tai_khoan) REFERENCES taikhoan(id) ON DELETE CASCADE  );";

	mysqli_query($conn,$sqlGIOHANG) or die ("Lỗi tạo bảng giohang");

	//tạo bảng emailkhuyenmai
	$sqlEMAIL = "CREATE table if not exists emailkhuyenmai("; 
	$sqlEMAIL.= "stt int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlEMAIL.= "email varchar(30) NOT NULL ,";
	$sqlEMAIL.= "ngay_tao datetime NOT NULL);";

	mysqli_query($conn,$sqlEMAIL) or die ("Lỗi tạo bảng emailkhuyenmai");


	//tạo bảng hethongch
	$sqlHT = "CREATE table if not exists hethongch("; 
	$sqlHT.= "stt int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlHT.= "dia_chi varchar(255) NOT NULL ,";
	$sqlHT.= "sdt varchar(10) NOT NULL ,";
	$sqlHT.= "hien_thi tinyint(5) NOT NULL default 1 ,";
	$sqlHT.= "ngay_tao datetime NOT NULL );";

	mysqli_query($conn,$sqlHT) or die ("Lỗi tạo bảng hethongch");


	//tạo bảng spyeuthich
	$sqlSPYEUTHICH = "CREATE table if not exists spyeuthich("; 
	$sqlSPYEUTHICH.= "stt int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlSPYEUTHICH.= "id_khach_hang int(10) NOT NULL ,";
	$sqlSPYEUTHICH.= "ma_sp int(10) NOT NULL ,";
	$sqlSPYEUTHICH.= "FOREIGN KEY (id_khach_hang) REFERENCES taikhoan(id) ON DELETE CASCADE  ,";
	$sqlSPYEUTHICH.= "FOREIGN KEY (ma_sp) REFERENCES sanpham(ma_sp) ON DELETE CASCADE  );";

	mysqli_query($conn,$sqlSPYEUTHICH) or die ("Lỗi tạo bảng spyeuthich");

	//tạo bảng img_sp
	$sqlIMG = "CREATE table if not exists img_sp("; 
	$sqlIMG.= "stt int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlIMG.= "ma_sp int(10) NOT NULL ,";
	$sqlIMG.= "img varchar(1000) NOT NULL ,";
	$sqlIMG.= "FOREIGN KEY (ma_sp) REFERENCES sanpham(ma_sp) ON DELETE CASCADE  );";
	mysqli_query($conn,$sqlIMG) or die ("Lỗi tạo bảng img_sp");
	//tạo bảng img_sp_bs
	$sqlIMGbs = "CREATE table if not exists img_sp_bs("; 
	$sqlIMGbs.= "stt int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlIMGbs.= "ma_sp int(10) NOT NULL ,";
	$sqlIMGbs.= "img varchar(1000) NOT NULL ,";
	$sqlIMGbs.= "FOREIGN KEY (ma_sp) REFERENCES sanpham(ma_sp) ON DELETE CASCADE  );";
	mysqli_query($conn,$sqlIMGbs) or die ("Lỗi tạo bảng img_sp_bs");

	//tạo bảng img_show
	$sqlIMGc = "CREATE table if not exists img_show("; 
	$sqlIMGc.= "ma_img int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlIMGc.= "thong_tin varchar(300) NULL,";
	$sqlIMGc.= "loai_anh int(2) NOT NULL,";
	$sqlIMGc.= "hien_thi tinyint(5) NOT NULL default 1,";
	$sqlIMGc.= "img varchar(1000) NOT NULL) ;";
	mysqli_query($conn,$sqlIMGc) or die ("Lỗi tạo bảng img_show");


	//tạo bảng img_dm
	$sqlIMGdm = "CREATE table if not exists img_dm("; 
	$sqlIMGdm.= "stt int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlIMGdm.= "ma_dm int(10) NOT NULL ,";
	$sqlIMGdm.= "img varchar(1000) NOT NULL ,";
	$sqlIMGdm.= "FOREIGN KEY (ma_dm) REFERENCES danhmuc(ma_dm) ON DELETE CASCADE  );";
	mysqli_query($conn,$sqlIMGdm) or die ("Lỗi tạo bảng img_dm");



	//tạo bảng thongtinweb
	$sqlTTWeb = "CREATE table if not exists thongtinweb("; 
	$sqlTTWeb.= "tenCty varchar(250) NOT NULL ,";
	$sqlTTWeb.= "dia_chi varchar(250) NOT NULL ,";
	$sqlTTWeb.= "tel varchar(11) NOT NULL ,";
	$sqlTTWeb.= "email varchar(250) NOT NULL ,";
	$sqlTTWeb.= "website varchar(250) NOT NULL ,";
	$sqlTTWeb.= "hotline varchar(11) NOT NULL ,";
	$sqlTTWeb.= "tongdTuvan varchar(9) NOT NULL ,";
	$sqlTTWeb.= "facebook varchar(250) NOT NULL ,";
	$sqlTTWeb.= "instagram varchar(250) NOT NULL ,";
	$sqlTTWeb.= "pinterest varchar(250) NOT NULL ,";
	$sqlTTWeb.= "google varchar(250) NOT NULL );";

	mysqli_query($conn,$sqlTTWeb) or die ("Lỗi tạo bảng thongtinweb");


	//tạo bảng sp_like
	$sqlsp_like = "CREATE table if not exists sp_like("; 
	$sqlsp_like.= "stt int(10) AUTO_INCREMENT PRIMARY KEY,";
	$sqlsp_like.= "id_tk int(10) NOT NULL ,";
	$sqlsp_like.= "chuoi_ma_sp_like varchar(1000) NOT NULL ,";
	$sqlsp_like.= "FOREIGN KEY (id_tk) REFERENCES taikhoan(id) ON DELETE CASCADE  );";
	mysqli_query($conn,$sqlsp_like) or die ("Lỗi tạo bảng sp_like");
?>