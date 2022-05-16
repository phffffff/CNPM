<?php
    $action = isset($_GET['action']) ? $_GET['action'] : "trangchu";    //   $_GET['']     lấy thông tin trên thanh địa chỉ

    switch ($action) {
    	case 'trangchu':
    		require_once('trangchu/trangchu.php');
    		break;
        case 'taikhoan':
            require_once('taikhoan/Quanlytaikhoan.php');
            break;
        case 'loaisanpham':
            require_once('loaisanpham/quanlyloaisanpham.php');
            break;

//        case 'danhmuc':
 //           require_once('danhmuc/quanlydanhmuc.php');
 //           break;
       

    // database user ,liên quan tới tài khoản người dùng
        case 'xemnguoidung':
            require_once('taikhoan/xem.php');
            break;
        case 'edit':
            require_once('taikhoan/sua.php');
            break;
        case 'them_giaodien':
            require_once('taikhoan/them.php');
            break;


    // database sanpham, liên quan tới sản phẩm và loại sản phẩm

        case 'sanpham':
            require_once('sanpham/quanlysanpham.php');
            break;
        case 'xemsanpham':
            require_once('sanpham/xem.php');
            break;
        case 'suasanpham':
            require_once('sanpham/sua.php');
            break;
        case 'them_sanpham_giaodien':
            require_once('sanpham/them.php');
            break;
        case 'them_soluong_giaodien':
            require_once('sanpham/them_soluong.php');
            break;


    // loại sản phẩm
       case 'loaisanpham':
            require_once('loaisanpham/quanlyloaisanpham.php');
            break;
        case 'xemloaisanpham':
            require_once('loaisanpham/xem.php');
            break;
        case 'sualoaisanpham':
            require_once('loaisanpham/sua.php');
            break;
        case 'themloaisanpham_giaodien':
            require_once('loaisanpham/them.php');
            break;


   //  hóa đơn
            
        case 'hoadon':
            require_once('hoadon/quanlyhoadon.php');
            break;
        case 'xemhoadon':
            require_once('hoadon/xem.php');
            break;

    //banner
            
        case 'banner':
            require_once('banner/quanlybanner.php');
            break;
        case 'suabanner':
            require_once('banner/sua.php');
            break;
        case 'thembanner_giaodien':
            require_once('banner/them.php');
            break;

    //khuyến mãi
        case 'khuyenmai':
            require_once('khuyenmai/quanlykhuyenmai.php');
            break;
        case 'suakhuyenmai_giaodien':
            require_once('khuyenmai/sua.php');
            break;
        case 'themkhuyenmai_giaodien':
            require_once('khuyenmai/them.php');
            break;
        case 'xemkhuyenmai':
            require_once('khuyenmai/xem.php');
            break;




    	default:
    		require_once('trangchu/trangchu.php');
    		break;
    }
?>