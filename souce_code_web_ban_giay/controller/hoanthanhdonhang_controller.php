<?php
   //    require_once('views/index.php');    gọi câu mới xuất hiện giao diện được

    require_once('./model/hoanthanhdonhang.php');

    /**
     * 
     */
    class hoanthanhdonhang
    {
    	var $hoanthanhdonhang_controller;
    	
    	function __construct()
    	{
    		$this->hoanthanhdonhang_controller = new hoanthanh_donhang();
    	}
        
        public function list()
        {
        	$tendangnhap = $_SESSION['tendangnhap'];

        	$data_user = $this->hoanthanhdonhang_controller->chitiet_donhang($tendangnhap);

            $data_loaisanpham = $this->hoanthanhdonhang_controller->loaisanpham();

           if(!isset($_SESSION['tendangnhap'])){
           	   header('location: ?action=dangnhap');
           }



  //        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '0';
  //        $idSP = isset($_GET['idSP']) ? $_GET['idSP'] : '0';
   //      $tongtien = isset($_GET['tongtien']) ? $_GET['tongtien'] : $_GET['tongtien_KM'];
           foreach ($_SESSION['sanpham'] as $key => $value) {
              
           $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '1';
           $idSP = $value['idSP'];
           $tongtien = $value['Dongia'] * $value['soluong'];
           $soluongmua = $value['soluong'];

           $ngaymua = date("Y-m-d");

           $this->hoanthanhdonhang_controller->gui_donhang_choadmin($idUser, $idSP, $tongtien, $soluongmua, $ngaymua);

         }



        	require_once('views/index.php');
        }

        public function huy_session()
        {
            if(isset($_SESSION['sanpham'])){
                unset($_SESSION['sanpham']);
                unset($_SESSION['giatriKM']);      // thêm  để hủy sesion
                unset($_SESSION['tongtien_KM']);   // thêm  để hủy sesion
                unset($_SESSION['tongtien']);         // thêm  để hủy sesion
                echo "<script language='javascript'>";
                echo "location.href='?action=trangchu';</script>";
        }
    }


     


    }
?>