<?php      
     // CONTROLLER DÙNG ĐỂ GỌI CÁC HÀM TRONG MODEL


    require_once('./model_admin/trangchu.php'); // đã gọi được rồi

    /**
     * 
     */
    class trangchucontroller
    {
    	var $trangchu_model;

    	public function __construct()
    	{
    		$this->trangchu_model = new trangchu();
    	}

    	public function dem()  
    	{
    		$data_user = $this->trangchu_model->all_user();
    
    		$data_sanpham = $this->trangchu_model->all_sanpham();

    		$data_loaisanpham = $this->trangchu_model->all_loaisanpham();

    		$data_hoadon = $this->trangchu_model->all_hoadon();
            
            if (isset($_POST['ngay_gui'])) {
                $ngay=filter_input(INPUT_POST, 'ngay_gui');
                $loai_ngay = filter_input(INPUT_POST, 'ngay_gui');

                $thang_nhan = date_create("$ngay");
                $thang = date_format($thang_nhan, 'Y-m');
                $loai_thang = date_format($thang_nhan, 'Y-m');

                 $nam_nhan = date_create("$ngay");
                $nam = date_format($nam_nhan, 'Y');
                $loai_nam = date_format($nam_nhan, 'Y');
            }else{
            $ngay = date("Y-m-d");
            $loai_ngay="Hôm nay";

            $thang = date("Y-m");
            $loai_thang="này";

            $nam = date("Y");
            $loai_nam="này";
        }
            

            $thongke_hoadon_ngay = $this->trangchu_model->all_hoadon_day($ngay);
            
            $thongke_hoadon_thang = $this->trangchu_model->all_hoadon_day($thang);
            
            $thongke_hoadon_nam = $this->trangchu_model->all_hoadon_day($nam);

    		$data_banner = $this->trangchu_model->all_banner();

    		$data_khuyenmai = $this->trangchu_model->all_khuyenmai();
            
            $data_layout = $this->trangchu_model->all_layout();


    		require_once('views_admin/index.php');
    	}

        public function update_layout()
        {
            $time = filter_input(INPUT_POST, 'time');
            $mail_1 = filter_input(INPUT_POST, 'mail_1');
            $mail_2 = filter_input(INPUT_POST, 'mail_2');
            $diachi = filter_input(INPUT_POST, 'diachi');
            $donvi = filter_input(INPUT_POST, 'donvi');
            $phone_1 = filter_input(INPUT_POST, 'phone_1');
            $phone_2 = filter_input(INPUT_POST, 'phone_2');


            $this->trangchu_model->update_layout($time, $mail_1, $mail_2, $diachi, $donvi, $phone_1, $phone_2);

        }

       



       }

       
    


?>