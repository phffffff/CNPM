<?php
   //    require_once('views/index.php');    gọi câu mới xuất hiện giao diện được

    require_once('./model/show_cuahang.php');

    /**
     * 
     */
    class showcuahang
    {
    	var $banner_controller;
    	
    	function __construct()
    	{
    		$this->cuahang_controller = new cuahang();
    	}
        
        public function list()
        {
            if(isset($_GET['id'])){
                $idLoaiSP = $_GET['id'];

                  $data_sanphamcuahang = $this->cuahang_controller->sanpham_cuahangtheoid($idLoaiSP);

            }else{
                $idLoaiSP = null;
            
                 }
            $data_loaisanpham = $this->cuahang_controller->loaisanpham();

             $color = $this->cuahang_controller->color();

             $size = $this->cuahang_controller->size();


             if(isset($_GET['idmau'])){
                $idmau = $_GET['idmau'];

                  $data_sanphamcuahang = $this->cuahang_controller->chonsanpham_mau($idmau);

            }else{
                $idmau = null;
            
                 }

            if(isset($_GET['idsize'])){
                $idsize = $_GET['idsize'];

                  $data_sanphamcuahang = $this->cuahang_controller->chonsanpham_size($idsize);

            }else{
                $idsize = null;
            
                 }

             if(isset($_POST['a']) && isset($_POST['b'])){
                $a = $_POST['a'];
                $b = $_POST['b'];

                $data_sanphamcuahang = $this->cuahang_controller->chonsanpham_gia($a, $b);

            }else{
                $a = null;
                $b = null;
            
                 }
            

            // chọn sản phẩm có khuyến mãi
            if(isset($_GET['gtkm'])){
                $gtkm = $_GET['gtkm'];

                  $data_sanphamcuahang = $this->cuahang_controller->chonsanpham_km($gtkm);

            }else{
                $gtkm = null;
            
                 }

        	require_once('views/index.php');
        }
        

         public function list1()
        {
            $data_loaisanpham = $this->cuahang_controller->loaisanpham();
            
            $color = $this->cuahang_controller->color();
            $size = $this->cuahang_controller->size();


           if(isset($_POST['timkiem_sp'])){
                $timkiem_sp = $_POST['timkiem_sp'];
               $data_sanphamcuahang = $this->cuahang_controller->timkiem_sp($timkiem_sp);
            }else{
                $data_sanphamcuahang = $this->cuahang_controller->sanpham_cuahang();
            }

             if(isset($_POST['a'])&& isset($_POST['b'])){
                $a = $_POST['a'];
                $b = $_POST['b'];

                $data_sanphamcuahang = $this->cuahang_controller->chonsanpham_gia($a, $b);

            }else{
                $a = null;
                $b = null;
            
                 }


            require_once('views/index.php');
        }


         


    }
?>