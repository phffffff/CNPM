<?php      
     // CONTROLLER DÙNG ĐỂ GỌI CÁC HÀM TRONG MODEL


    require_once('./model_admin/hoadon.php'); // đã gọi được rồi

    /**
     * 
     */
    class hoadoncontroller
    {
    	var $hoadon_model;

    	public function __construct()
    	{
    		$this->hoadon_model = new hoadon();
    	}

    	public function list()
    	{
    		 if(isset($_POST['timkiem_hd'])){
                $timkiem_hd = $_POST['timkiem_hd'];
                $data = $this->hoadon_model->timkiem_hd($timkiem_hd);
            }else{
                $data = $this->hoadon_model->all();
            }
            require_once('views_admin/index.php');
    	}

    	 public function details() //đang
        {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data = $this->hoadon_model->find($id);
            require_once('views_admin/index.php');
        } 

      

         public function xoahoadon()    //chưa
         {
            $id = isset($_GET['id']) ? $_GET['id'] : '1';

            $this->hoadon_model->delete($id);
         }

         public function chitiet_hoadon()
         {
            $id = isset($_GET['id']) ? $_GET['id'] : '1';

            $data = $this->hoadon_model->find($id);

            $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '1';

            $name_user = $this->hoadon_model->user($idUser);

            $idSP = isset($_GET['idSP']) ? $_GET['idSP'] : '1';

            $name_sanpham = $this->hoadon_model->sanpham($idSP);

            require_once('views_admin/index.php');
            
         }

         public function duyet_hoadon()
         {
            $id = $_GET['id'];

            $this->hoadon_model->duyet_hoadon($id);

            $idSP = $_GET['idSP'];
            $sotru = $_GET['soluongmua'];

            $this->hoadon_model->sanpham_tru($idSP, $sotru);

            require_once('views_admin/index.php');
            
         }




       }

?>