<?php
   //    require_once('views/index.php');    gọi câu mới xuất hiện giao diện được

    require_once('./model/quenMK.php');

    /**
     * 
     */
    class quenmk
    {
    	var $quenmk_controller;
    	
    	function __construct()
    	{
    		$this->quenmk_controller = new Matkhau();
    	}
        
        public function list()
        {
            $data_loaisanpham = $this->quenmk_controller->loaisanpham();


            $email = filter_input(INPUT_POST, 'email_laymk');
            
            $email_laymk = $this->quenmk_controller->laymatkhau($email);



        	require_once('views/index.php');
        }

         public function laymk()
        {

        	$data_loaisanpham = $this->quenmk_controller->loaisanpham();

            $email = filter_input(INPUT_POST, 'email_laymk');
            
            $mk = $this->quenmk_controller->laymatkhau($email);

            if($mk){
                $ketqua = true;
            }


        	require_once('views/index.php');
        }


    }
?>