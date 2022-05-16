<?php
//  session_set_cookie_params(5);
    session_start();
    $act = isset($_GET['action']) ? $_GET['action'] : "trangchu";
  

    switch ($act) {
        //trang chủ có sẵn trang san pham moi nhất nhưng không thêm vô
        case 'trangchu':    //xong      
            require_once('controller/home_controller.php');
            $index = new showhome();
            $index->list();
            break;
        
        case 'cuahang':  //đang
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list();
            break;

        case 'cuahang1':  //đang
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list1();
            break;

     
         
//đăng nhập đăng ký, chưa xong

        case 'dangky_xl':
            require_once('controller/dangnhap_controller.php');
            $index = new dangnhap_dangky_controller();
            $index->dangky();
            break;

        case 'dangnhap_xl':
            require_once('controller/dangnhap_controller.php');
            $index = new dangnhap_dangky_controller();
            $index->dangnhap();
            break;
        case 'dangxuat':
            require_once('controller/dangnhap_controller.php');
            $index = new dangnhap_dangky_controller();
            $index->dangxuat();
            break;

        case 'taikhoan':
            require_once('controller/dangnhap_controller.php');
            $index = new dangnhap_dangky_controller();
            $index->taikhoan();
            break;
        case 'suataikhoan':    //đang làm
            require_once('controller/dangnhap_controller.php');
            $index = new dangnhap_dangky_controller();
            $index->suataikhoan();
            break;
    




//đang làm
        case 'chitietmathang':   
            require_once('controller/chitietmathang_controller.php');
            $index = new chitietmathang();
            $index->chitiet_hang();
            break;

        case 'gopy':
            require_once('controller/chitietmathang_controller.php');
            $index = new chitietmathang();
            $index->gopy();
            break;


//giỏ hàngg
            
         
        case 'giohang':
        $act = isset($_GET['act'])? $_GET['act'] : 'list';
            require_once('controller/giohang_controller.php');
            $index = new giohang_controller();

            switch ($act) {
                case 'list':
                    $index->list_giohang();
                    break;
                case 'add_giohang':
                    $index->add_giohang();
                    break;
                case 'update_giohang':
                    $index->update_giohang();
                    break;
                case 'update_giohang_tru':
                    $index->update_giohang_tru();
                    break;
                case 'xoagiohang_all':
                    $index->deleteall_cart();
                    break;
                case 'xoagiohang':
                    $index->delete_cart();
                    break;
                
                default:
                    $index->list_giohang();
                    break;
            }
            break;







        case 'gioithieu':
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list();
            break;
        

        // lấy chức năng của cuahang controller cũng đưuọc
        case 'dangnhap':
            require_once('controller/cuahang_controller.php');
            $index = new showcuahang();
            $index->list();
            break;
        case 'quenmatkhau': 
            require_once('controller/quenmatkhau_controller.php');
            $index = new quenmk();
            $index->list();
            break;
        case 'laymatkhau_submit':
            require_once('controller/quenmatkhau_controller.php');
            $index = new quenmk();
            $index->laymk();
            break;
        case 'thanhtoan':  
            require_once('controller/thanhtoan_controller.php');
            $index = new showthanhtoan();
            $index->list();
            break;
        case 'hoanthanhdonhang':
            require_once('controller/hoanthanhdonhang_controller.php');
            $index = new hoanthanhdonhang();
            $index->list();
            break;

        case 'huy_session':
            require_once('controller/hoanthanhdonhang_controller.php');
            $index = new hoanthanhdonhang();
            $index->huy_session();
            break;




        default:
            require_once('controller/home_controller.php');
            $index = new showhome();
            $index->list();
            break;




    }


  //  echo $_SESSION['thoigian_bd'];
 //   echo "<br>";
 //   echo $_SESSION['thoigian_bd'] - time();

// Thiết lập thời gian là một ngày để hủy các SESSION, dòng 66 model->dangnhap.php
    if(isset($_SESSION['tendangnhap'])){
        if(time() - $_SESSION['thoigian_bd'] > 3600){     //1 tiếng có 60x60 =3600 giây, 24 tiếng có 3600x24=86400
        unset($_SESSION['banhang']);
        unset($_SESSION['tendangnhap']);
        unset($_SESSION['matkhau']);
        unset($_SESSION['thoigian_bd']);
        // hủy session giỏ hàng
        unset($_SESSION['sanpham']);
        unset($_SESSION['thanhtien']);
        unset($_SESSION['tongtien']);
    }
    }
?>