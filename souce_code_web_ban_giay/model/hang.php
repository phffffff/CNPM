<?php
     require_once('ketnoi.php');

     /**
      * 
      */
     class mathang
     {
      var $conn;
      
      function __construct()
      {
        $connect_obj = new ketnoi();
        $this->conn = $connect_obj->connect;
      }


          function details_hang($id)  //đang
          {
               $query = "SELECT * from sanpham WHERE idSP = '$id'";
               return $this->conn->query($query)->fetch_assoc();

               
          }

           function loaisanpham()  //đang
          {
               $query = "SELECT * from loaisanpham";
               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }


          function layten_loaisanpham($id)
          {
              $query = "SELECT * FROM loaisanpham WHERE idLoaiSP = '$id'";
              return $this->conn->query($query)->fetch_assoc();
          }

          function getcolor($id)
          {
              $query = " SELECT * FROM color INNER JOIN sanpham ON color.idcolor = sanpham.idcolor WHERE idSP = '$id'";

              return $this->conn->query($query)->fetch_assoc();
          }

          function getsize($id)
          {
              $query = "SELECT * FROM size INNER JOIN sanpham ON size.idsize = sanpham.idsize WHERE idSP='$id'"; 
              return $this->conn->query($query)->fetch_assoc();
          }






           function sanpham_cuahangtheoid($idLoaiSP)  //đang
          {
               $query = "SELECT * FROM sanpham WHERE idLoaiSP = $idLoaiSP";
               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;


          }



          //hiển thị sản phẩm liên quan
           function sanphamlienquan($id)
           {
            $query = " SELECT * FROM sanpham WHERE idLoaiSP = '$id' limit 0,4";
            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
              $data[] = $row;
            }

            return $data;
           }



           //GÓp ý

           function them_gopy($idSP, $email, $noidung)
           {
            $query = "INSERT INTO gopy(idSP, email, noidung) VALUES ('$idSP', '$email', '$noidung')" ;
            $result = $this->conn->query($query);

           }

           function xem_gopy()
           {
            $query = "SELECT * FROM gopy";
           $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
           }



     }
?>