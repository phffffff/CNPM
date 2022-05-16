<?php
   //    require_once('views/index.php');    gọi câu mới xuất hiện giao diện được

    require_once('./model/show_thanhtoan.php');

    /**
     * 
     */
    class showthanhtoan
    {
    	var $thanhtoan_controller;
    	
    	function __construct()
    	{
    		$this->thanhtoan_controller = new thanhtoan();
    	}
        
        public function list()
        {
        	$tendangnhap = $_SESSION['tendangnhap'];

        	$data_user = $this->thanhtoan_controller->chitiet_donhang($tendangnhap);

            $data_loaisanpham = $this->thanhtoan_controller->loaisanpham();

            $Dongia = isset($_GET['a']) ? $_GET['a'] : '1';

            $data_sanpham = $this->thanhtoan_controller->chitiet_sanpham($Dongia);

           if(!isset($_SESSION['tendangnhap'])){
           	   header('location: ?action=dangnhap');
           }

        	require_once('views/index.php');
        }


    }
?>