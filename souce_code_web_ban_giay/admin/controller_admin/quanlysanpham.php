<?php      
     // CONTROLLER DÙNG ĐỂ GỌI CÁC HÀM TRONG MODEL


    require_once('./model_admin/sanpham.php'); // đã gọi được rồi

    /**
     * 
     */
    class sanphamcontroller
    {
        var $sanpham_model;

        public function __construct()
        {
            $this->sanpham_model = new sanpham();
        }

        public function list()   // hàm hiển thị tất cả sản phẩm trong database 
        {

            $gioihan = 5;
            $trang = isset($_GET['trang'])? $_GET['trang'] : '1';
            $batdau = ($trang-1) * $gioihan;
            $sodong = mysqli_num_rows($this->sanpham_model->phantrang());
            $tongsotrang = $sodong/$gioihan;


            if(isset($_POST['timkiem_sp'])){
                $timkiem_sp = $_POST['timkiem_sp'];
                $data = $this->sanpham_model->timkiem_sp($timkiem_sp, $batdau, $gioihan);
            }else{
                $data = $this->sanpham_model->all($batdau, $gioihan);
            }



            require_once('views_admin/index.php');
        }




         function them_giaodien()
         {
            $data_km = $this->sanpham_model->khuyenmai();

            $data_mau = $this->sanpham_model->mau();

            $data_size = $this->sanpham_model->size();

            $data_lsp = $this->sanpham_model->loaisp();


            require_once('views_admin/index.php');
         }



         public function details()  // hàm hiển thị chi tiết thông tin của một sản phẩm được chọn bởi $id
        {

            $data_km = $this->sanpham_model->khuyenmai();

            $data_mau = $this->sanpham_model->mau();

            $data_size = $this->sanpham_model->size();

            $data_lsp = $this->sanpham_model->loaisp();




            $id = isset($_GET['id']) ? $_GET['id'] : '1';
            $data = $this->sanpham_model->find($id);
            require_once('views_admin/index.php');
        } 

      
        

        public function update()                            
       {

            $idSP = filter_input(INPUT_POST, 'idSP');

            $idKM = filter_input(INPUT_POST, 'idKM');

            $idLoaiSP = filter_input(INPUT_POST, 'idLoaiSP');

            $idcolor = filter_input(INPUT_POST, 'idmau');

            $idsize = filter_input(INPUT_POST, 'idsize');

            $tenSP = filter_input(INPUT_POST, 'tenSP');

            $Dongia =filter_input(INPUT_POST, 'Dongia');
            
             $anh1 = $_FILES['anh1']['name'];
             $anh1_tmp = $_FILES['anh1']['tmp_name'];
             move_uploaded_file($anh1_tmp, './public_admin/image/sanpham/'.$anh1);

             $anh2 = $_FILES['anh2']['name'];
             $anh2_tmp = $_FILES['anh2']['tmp_name'];
             move_uploaded_file($anh2_tmp, './public_admin/image/sanpham/'.$anh2);

             $anh3 = $_FILES['anh3']['name'];
             $anh3_tmp = $_FILES['anh3']['tmp_name'];
             move_uploaded_file($anh3_tmp, './public_admin/image/sanpham/'.$anh3);
             
             $ngaynhap =filter_input(INPUT_POST, 'ngaynhap');
             
             $mota =filter_input(INPUT_POST, 'mota');

             $soluong =filter_input(INPUT_POST, 'soluong');

            

            $this->sanpham_model->update($idSP, $idKM, $idLoaiSP, $idcolor, $idsize, $tenSP, $Dongia, $anh1, $anh2, $anh3, $ngaynhap, $mota, $soluong);

         }


         public function them()  
         {
            $idLoaiSP =filter_input(INPUT_POST, 'idLoaiSP');

             $idKM =filter_input(INPUT_POST, 'idKM');


            $idcolor =filter_input(INPUT_POST, 'idmau');
             $idsize =filter_input(INPUT_POST, 'idsize');

            $tenSP = filter_input(INPUT_POST, 'tenSP');
             $Dongia =filter_input(INPUT_POST, 'Dongia');
// lấy ảnh
             $anh1 = $_FILES['anh1']['name'];
             $anh1_tmp = $_FILES['anh1']['tmp_name'];
             move_uploaded_file($anh1_tmp, './public_admin/image/sanpham/'.$anh1);

             $anh2 = $_FILES['anh2']['name'];
             $anh2_tmp = $_FILES['anh2']['tmp_name'];
             move_uploaded_file($anh2_tmp, './public_admin/image/sanpham/'.$anh2);

             $anh3 = $_FILES['anh3']['name'];
             $anh3_tmp = $_FILES['anh3']['tmp_name'];
             move_uploaded_file($anh3_tmp, './public_admin/image/sanpham/'.$anh3);

             $ngaynhap =filter_input(INPUT_POST, 'ngaynhap');
             $mota =filter_input(INPUT_POST, 'mota');
             $soluong =filter_input(INPUT_POST, 'soluong');

//  // thêm mà nếu trùng tên, màu, size sản phẩm thì cộng thêm vào số lượng
             $datasanpham_all = $this->sanpham_model->all_them();
             $soluong_them = 0;
            foreach ($datasanpham_all as $key => $value) {
                if($value['idsize'] == $idsize && $value['idcolor'] == $idcolor && $value['Dongia'] == $Dongia && $value['tenSP'] == $tenSP){
                    $idSP=$value['idSP'];
                    $soluong_them = $value['soluong'] + $soluong;
                    return $this->sanpham_model->insert_trung($idSP, $soluong_them);
                }
            }
             $this->sanpham_model->insert($idKM, $idLoaiSP, $idcolor, $idsize, $tenSP, $Dongia, $anh1, $anh2, $anh3, $ngaynhap, $mota, $soluong);
//

         }


         public function xoasanpham()    
         {
            $id = isset($_GET['id']) ? $_GET['id'] : '1';

            $this->sanpham_model->delete($id);
         }



          function them_soluong_giaodien()
         {
            $data_km = $this->sanpham_model->khuyenmai();

            $data_mau = $this->sanpham_model->mau();

            $data_size = $this->sanpham_model->size();

            $data_lsp = $this->sanpham_model->loaisp();

        // chỗ này đê thêm số lượng
            $idSP = $_GET['idSP'];
            $soluong_sanpham = $_GET['soluong'];

            require_once('views_admin/index.php');
         }


         public function them_soluong()
         {
            $soluong_them = filter_input(INPUT_POST, 'soluong_them');
            $soluong_sanpham = filter_input(INPUT_POST, 'soluong_sanpham');

            $soluong_tong = $soluong_them + $soluong_sanpham;

            $idSP = filter_input(INPUT_POST, 'idSP');
            $this->sanpham_model->them_soluong($idSP, $soluong_tong);
         }





         }

?>