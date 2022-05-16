<?php
    require_once('./model/giohang.php');

    /**
     * 
     */
    class giohang_controller
    {
        var $giohang_controller;

        function __construct()
        {
            $this->giohang_controller = new giohang();
        }

        public function list_giohang()    // okie
        {

            $data_loaisanpham = $this->giohang_controller->loaisanpham();




// từ dòng này xuống dưới không sử dụng
            $data_chitietSP = array();

            for($i=0 ; $i<count($data_loaisanpham); $i++){
                $data_chitietSP[$i] = $this->giohang_controller->chitiet_sp($i);
            }

//chwua cần tới, để đếm tổng tất cả sản phẩm trong giỏ hàng
            $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['soluong'];
            }
        }
        require_once('views/index.php');
    }





    function add_giohang()         // okie
    {
        $id = $_GET['id'];
        $data = $this->giohang_controller->chitiet_sp($id);
        $count = 0;
        if (isset($_SESSION['sanpham'][$id])) {
            $arr = $_SESSION['sanpham'][$id];
            $arr['soluong'] = $arr['soluong'] + 1;
            $arr['soluong_kho'] = $data['soluong'] - 1;//
            $arr['thanhtien'] = $arr['soluong'] * $arr["Dongia"];
            $_SESSION['sanpham'][$id] = $arr;
        } else {
            $arr['idSP'] = $data['idSP'];
            $arr['tenSP'] = $data['tenSP'];
            $arr['Dongia'] = $data['Dongia'];
            $arr['soluong'] = 1;
            $arr['soluong_kho'] = $data['soluong']-1;//
            $arr['thanhtien'] = $data['Dongia'];
            $arr['anh1'] = $data['anh1'];
            $_SESSION['sanpham'][$id] = $arr;
        }

        foreach ($_SESSION['sanpham'] as $value) {
            $count += $value['thanhtien'];
        }

        header('Location:?action=giohang&act=list_giohang');
    }











    function update_giohang()
    {
        $arr = $_SESSION['sanpham'][$_GET['id']];

        if($arr['soluong_kho'] <= 0 ){
            $arr['soluong'] = $arr['soluong'];
            $arr['soluong_kho'] = $arr['soluong_kho'];
        }else{
        $arr['soluong'] = $arr['soluong'] + 1;
         $arr['soluong_kho'] = $arr['soluong_kho'] - 1;//
     }

        $arr['thanhtien'] = $arr['soluong'] * $arr["Dongia"];
        $_SESSION['sanpham'][$_GET['id']] = $arr;
        header('Location:?action=giohang&act=list_giohang');
    }

     function update_giohang_tru()
    {
        $arr = $_SESSION['sanpham'][$_GET['id']];
        $arr['soluong'] = $arr['soluong'] - 1;
         $arr['soluong_kho'] = $arr['soluong_kho'] + 1;//
        $arr['thanhtien'] = $arr['soluong'] * $arr["Dongia"];
        $_SESSION['sanpham'][$_GET['id']] = $arr;
        header('Location:?action=giohang&act=list_giohang');

        if($arr['soluong'] == 0 || $arr['soluong'] < 0 ){
            unset($_SESSION['sanpham'][$_GET['id']]);
        }
    }
        









/// Xóa giỏ hàng

        function delete_cart()      //okie
         {
            $id = $_GET['id'];
            $arr = $_SESSION['sanpham'][$id];
            if ($arr['soluong'] == 1) {
            unset($_SESSION['sanpham'][$_GET['id']]);
            } else {
            $arr = $_SESSION['sanpham'][$_GET['id']];
            $arr['soluong'] = $arr['soluong'] - 1;
            $arr['thanhtien'] = $arr['soluong'] * $arr["Dongia"];
            $_SESSION['sanpham'][$_GET['id']] = $arr;
        }
        header('Location: ?action=giohang&act=list_giohang');
        }



        function deleteall_cart()       // okie
        {
            unset($_SESSION['sanpham']);
            unset($_SESSION['thanhtien']);  // thêm  để hủy sesion
            unset($_SESSION['tongtien']);      // thêm  để hủy sesion
            header('Location: ?action=giohang&act=list_giohang');
        }






    }
?>