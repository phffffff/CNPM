<?php
     require_once('ketnoi.php');

     /**
      * 
      */
     class hoanthanh_donhang
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

          function chitiet_donhang($tendangnhap)
          {
            $query = "SELECT * FROM user WHERE tendangnhap = '$tendangnhap'";
            $data = $this->conn->query($query)->fetch_assoc();
            return $data;
          }



          function gui_donhang_choadmin($idUser, $idSP, $tongtien, $soluongmua, $ngaymua)
          {
            $query = "INSERT INTO hoadon (idUser, idSP, tongtien, soluongmua, ngaymua) VALUES ('$idUser', '$idSP', '$tongtien', '$soluongmua', '$ngaymua')";
            $result = $this->conn->query($query);
          }




     }
?>