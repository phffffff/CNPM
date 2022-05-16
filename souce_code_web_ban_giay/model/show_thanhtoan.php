<?php
     require_once('ketnoi.php');

     /**
      * 
      */
     class thanhtoan
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

          function chitiet_khuyenmai($tendangnhap)
          {
            $query = "SELECT * FROM user WHERE tendangnhap = '$tendangnhap'";
            $data = $this->conn->query($query)->fetch_assoc();
            return $data;
          }


          function chitiet_sanpham($Dongia)
          {
      //      $query = "SELECT * FROM sanpham WHERE Dongia = '$Dongia' ";
            $query = "SELECT * FROM sanpham INNER JOIN khuyenmai ON sanpham.idKM = khuyenmai.idKM WHERE Dongia = '$Dongia'";
            $data = $this->conn->query($query)->fetch_assoc();
            return $data;
          }



     }
?>