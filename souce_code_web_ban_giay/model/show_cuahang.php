<?php
     require_once('ketnoi.php');

     /**
      * 
      */
     class cuahang
     {
      var $conn;
      
      function __construct()
      {
        $connect_obj = new ketnoi();
        $this->conn = $connect_obj->connect;
      }


          function loaisanpham()  //đang
          {
               $query = "SELECT * from loaisanpham limit 0,4";
               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }

          function sanpham_cuahang()  //đang
          {
               $query = "SELECT * 
                          from (((sanpham 
                          INNER JOIN size ON sanpham.idsize = size.idsize)
                          INNER JOIN color ON sanpham.idcolor = color.idcolor)
                          INNER JOIN khuyenmai ON sanpham.idKM = khuyenmai.idKM)";

               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }
//tìm kiếm sản phẩm chung
          function timkiem_sp($timkiem_sp)
        {
            $query = "SELECT * 
                          from (((sanpham 
                          INNER JOIN size ON sanpham.idsize = size.idsize)
                          INNER JOIN color ON sanpham.idcolor = color.idcolor)
                          INNER JOIN khuyenmai ON sanpham.idKM = khuyenmai.idKM) 
                          WHERE tenSP LIKE '%$timkiem_sp%' ORDER BY idSP";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }




           function sanpham_cuahangtheoid($idLoaiSP)  //đang
          {
               $query = "SELECT * 
                          from (((sanpham 
                          INNER JOIN size ON sanpham.idsize = size.idsize)
                          INNER JOIN color ON sanpham.idcolor = color.idcolor)
                          INNER JOIN khuyenmai ON sanpham.idKM = khuyenmai.idKM)
                           WHERE idLoaiSP = $idLoaiSP";
               return $this->conn->query($query);

          }



          function color()
          {

               $query = "SELECT * FROM color";

               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;

          }

          function size()
          {

               $query = "SELECT * FROM size";

               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;

          }


          //lựa chọn sản phẩm theo màu, size

          function chonsanpham_mau($id)
          {
            $query = "SELECT * 
                          from (((sanpham 
                          INNER JOIN size ON sanpham.idsize = size.idsize)
                          INNER JOIN color ON sanpham.idcolor = color.idcolor)
                          INNER JOIN khuyenmai ON sanpham.idKM = khuyenmai.idKM)
                           WHERE color.idcolor = $id ";

            $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }
 
          function chonsanpham_size($id)
          {
            $query = "SELECT * 
                          from (((sanpham 
                          INNER JOIN size ON sanpham.idsize = size.idsize)
                          INNER JOIN color ON sanpham.idcolor = color.idcolor)
                          INNER JOIN khuyenmai ON sanpham.idKM = khuyenmai.idKM)
                           WHERE size.idsize = $id";

            $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }





          function chonsanpham_gia($a, $b)    //đang làm
          {
            $query = "SELECT * 
                          from (((sanpham 
                          INNER JOIN size ON sanpham.idsize = size.idsize)
                          INNER JOIN color ON sanpham.idcolor = color.idcolor)
                          INNER JOIN khuyenmai ON sanpham.idKM = khuyenmai.idKM)
                          WHERE Dongia > $a AND Dongia < $b ";

            $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }



          function chonsanpham_KM($gtkm)
          {
            $query = " SELECT * FROM (((sanpham 
                          INNER JOIN khuyenmai ON khuyenmai.idKM = sanpham.idKM)
                          INNER JOIN size ON sanpham.idsize = size.idsize)
                          INNER JOIN color ON sanpham.idcolor = color.idcolor)
                           WHERE giatriKM = '$gtkm' ";


            $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }





/*   Phân trang
        public function get_all_product(){

          $query="SELECT * FROM sanpham";
          $result = $this->db->select($query);

          return $result;
        }

        $product_all=$product->get_all_product();
          $product_count=mysqli_num_rows($product_all);
          $product_button=ceil($product_count/6);
          $i=1;
          echo '<p>Trang:</p>';
          for($i=1;$i<=$product_button;$i++)
          {
            echo '<a href="shop.php?trang='.$i.'">'.$i.'</a>';

          }

*/



     }
?>