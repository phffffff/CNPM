<?php
    session_start();
    $act = isset($_GET['action']) ? $_GET['action'] : "trangchu";

    switch ($act) {
        case 'trangchu':
            require_once('controller_admin/home.php');
            $controller_taikhoanobj = new trangchucontroller();
             $controller_taikhoanobj->dem();
            break;
        case 'sualayout':
            require_once('controller_admin/home.php');
            $controller_taikhoanobj = new trangchucontroller();
             $controller_taikhoanobj->update_layout();
            break;
        case 'xoalayout':
             unset($_SESSION['time']);
             unset($_SESSION['mail_1']);
             unset($_SESSION['mail_2']);
             unset($_SESSION['phone_1']);
             unset($_SESSION['phone_2']);
             unset($_SESSION['diachi']);
             unset($_SESSION['donvi']);
             require_once('controller_admin/home.php');
            $controller_taikhoanobj = new trangchucontroller();
             $controller_taikhoanobj->dem();
             break;

        case 'taikhoan':           // đã hiển thị được thông tin
            require_once('controller_admin/quanlytaikhoan.php');
            $controller_taikhoanobj = new nguoidungcontroller();
            $controller_taikhoanobj->list();
            break;
       
//        case 'danhmuc':
 //           require_once('controller_admin/danhmucsanpham.php');
 //           break;
       
        case 'xemnguoidung':
           require_once('controller_admin/quanlytaikhoan.php');
            $controller_taikhoanobj = new nguoidungcontroller();
            $controller_taikhoanobj->details();
            break; 
        case 'edit':    // UPDATE giao diện
            require_once('controller_admin/quanlytaikhoan.php');
            $controller_taikhoanobj = new nguoidungcontroller();
            $controller_taikhoanobj->edit();
            break;
        case 'sua_xl':   //UPDATE xử lý
            require_once('controller_admin/quanlytaikhoan.php');
            $controller_taikhoanobj = new nguoidungcontroller();
            $controller_taikhoanobj->update();
            break;
        case 'them_giaodien':
            require_once('views_admin/index.php');
            break;
        case 'them': 
            require_once('controller_admin/quanlytaikhoan.php');
            $controller_taikhoanobj = new nguoidungcontroller();
            $controller_taikhoanobj->them();
            break;
        case 'xoanguoidung':
            require_once('controller_admin/quanlytaikhoan.php');
            $controller_taikhoanobj = new nguoidungcontroller();
            $controller_taikhoanobj->xoanguoidung();
            break;
        case 'phanquyen':
            require_once('controller_admin/quanlytaikhoan.php');
            $controller_taikhoanobj = new nguoidungcontroller();
            $controller_taikhoanobj->phanquyen();
            break;



        case 'sanpham':
            require_once('controller_admin/quanlysanpham.php');
            $controller_taikhoanobj = new sanphamcontroller();
            $controller_taikhoanobj->list();
            break;

        case 'xemsanpham':
            require_once('controller_admin/quanlysanpham.php');
            $controller_taikhoanobj = new sanphamcontroller();
            $controller_taikhoanobj->details();
            break;
        case 'suasanpham':
            require_once('controller_admin/quanlysanpham.php');
            $controller_taikhoanobj = new sanphamcontroller();
            $controller_taikhoanobj->details();
            break; 

        case 'suasanpham_xl':
            require_once('controller_admin/quanlysanpham.php');
            $controller_taikhoanobj = new sanphamcontroller();
            $controller_taikhoanobj->update();
            break;

        case 'them_sanpham_giaodien':
            require_once('controller_admin/quanlysanpham.php');
            $controller_taikhoanobj = new sanphamcontroller();
            $controller_taikhoanobj->them_giaodien();
            break;

        case 'them_soluong_giaodien':
            require_once('controller_admin/quanlysanpham.php');
            $controller_taikhoanobj = new sanphamcontroller();
            $controller_taikhoanobj->them_soluong_giaodien();
            break;

        case 'them_sanpham': 
            require_once('controller_admin/quanlysanpham.php');
            $controller_taikhoanobj = new sanphamcontroller();
            $controller_taikhoanobj->them();
            break;

        case 'them_soluong':
            require_once('controller_admin/quanlysanpham.php');
            $controller_taikhoanobj = new sanphamcontroller();
            $controller_taikhoanobj->them_soluong();
            break;

        case 'xoasanpham':
            require_once('controller_admin/quanlysanpham.php');
            $controller_taikhoanobj = new sanphamcontroller();
            $controller_taikhoanobj->xoasanpham();
            break;

        //loại sản phẩm

        case 'loaisanpham':
            require_once('controller_admin/quanlyloaisanpham.php');
            $controller_taikhoanobj = new loaisanphamcontroller();
            $controller_taikhoanobj->list();
            break;
        case 'xemloaisanpham':
            require_once('controller_admin/quanlyloaisanpham.php');
            $controller_taikhoanobj = new loaisanphamcontroller();
            $controller_taikhoanobj->details();
            break;
        case 'sualoaisanpham':
            require_once('controller_admin/quanlyloaisanpham.php');
            $controller_taikhoanobj = new loaisanphamcontroller();
            $controller_taikhoanobj->details();
            break;
        case 'sualoaisanpham_xl':
            require_once('controller_admin/quanlyloaisanpham.php');
            $controller_taikhoanobj = new loaisanphamcontroller();
            $controller_taikhoanobj->update();
            break;
        case 'themloaisanpham':
            require_once('controller_admin/quanlyloaisanpham.php');
            $controller_taikhoanobj = new loaisanphamcontroller();
            $controller_taikhoanobj->them();
            break;
        case 'xoaloaisanpham': 
            require_once('controller_admin/quanlyloaisanpham.php');
            $controller_taikhoanobj = new loaisanphamcontroller();
            $controller_taikhoanobj->xoaloaisanpham();
            break;
        case 'themloaisanpham_giaodien':
            require_once('views_admin/index.php');
            break;

      //hóa đơn

        case 'hoadon': 
            require_once('controller_admin/duyethoadon.php');
            $controller_taikhoanobj = new hoadoncontroller();
            $controller_taikhoanobj->list();
            break;
        case 'xoahoadon':
            require_once('controller_admin/duyethoadon.php');
            $controller_taikhoanobj = new hoadoncontroller();
            $controller_taikhoanobj->xoahoadon();
            break;
        case 'xemhoadon':
            require_once('controller_admin/duyethoadon.php');
            $controller_taikhoanobj = new hoadoncontroller();
            $controller_taikhoanobj->chitiet_hoadon();
            break;
        case 'duyethoadon':
            require_once('controller_admin/duyethoadon.php');
            $controller_taikhoanobj = new hoadoncontroller();
            $controller_taikhoanobj->duyet_hoadon();
            break;

        //banner

        case 'banner':
            require_once('controller_admin/quanlybanner.php');
            $controller_taikhoanobj = new bannercontroller();
            $controller_taikhoanobj->list();
            break;
        case 'suabanner': 
            require_once('controller_admin/quanlybanner.php');
            $controller_taikhoanobj = new bannercontroller();
            $controller_taikhoanobj->details();
            break;
        case 'suabanner_xl': 
            require_once('controller_admin/quanlybanner.php');
            $controller_taikhoanobj = new bannercontroller();
            $controller_taikhoanobj->update();
            break;
        case 'thembanner':
            require_once('controller_admin/quanlybanner.php');
            $controller_taikhoanobj = new bannercontroller();
            $controller_taikhoanobj->them();
            break;
        case 'xoabanner':
            require_once('controller_admin/quanlybanner.php');
            $controller_taikhoanobj = new bannercontroller();
            $controller_taikhoanobj->xoabanner();
            break;
        case 'thembanner_giaodien':
            require_once('views_admin/index.php');
            break;

        //khuyến mãi

        case 'khuyenmai':
            require_once('controller_admin/quanlykhuyenmai.php');
            $controller_taikhoanobj = new khuyenmaicontroller();
            $controller_taikhoanobj->list();
        case 'xemkhuyenmai':
            require_once('controller_admin/quanlykhuyenmai.php');
            $controller_taikhoanobj = new khuyenmaicontroller();
            $controller_taikhoanobj->details();
            break;
        case 'suakhuyenmai_giaodien':
            require_once('controller_admin/quanlykhuyenmai.php');
            $controller_taikhoanobj = new khuyenmaicontroller();
            $controller_taikhoanobj->details();
            break;
        case 'suakhuyenmai_xl':
            require_once('controller_admin/quanlykhuyenmai.php');
            $controller_taikhoanobj = new khuyenmaicontroller();
            $controller_taikhoanobj->update();
            break;

        case 'themkhuyenmai_xl':
            require_once('controller_admin/quanlykhuyenmai.php');
            $controller_taikhoanobj = new khuyenmaicontroller();
            $controller_taikhoanobj->them();
             break;

        case 'xoakhuyenmai':
            require_once('controller_admin/quanlykhuyenmai.php');
            $controller_taikhoanobj = new khuyenmaicontroller();
            $controller_taikhoanobj->xoakhuyenmai();
             break;

         case 'themkhuyenmai_giaodien':
            require_once('views_admin/index.php');
             break;



        default:
            require_once('controller_admin/home.php');
            break;
    }
?>