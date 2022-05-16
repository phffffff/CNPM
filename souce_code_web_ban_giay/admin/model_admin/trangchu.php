<?php    
                                       // MODEL CHO CÁC THÔNG TIN SẢN PHẨM
    require_once('ketnoi.php');

    /**
     * 
     */
    class trangchu
    {
    	var $conn;
    	
    	function __construct()
    	{
    		$connect_obj = new ketnoi();
    		$this->conn = $connect_obj->connect;
    	}
    	
    	function all_user()  
    	{
    		$query = "SELECT * FROM user ORDER BY idUser";

    		$result = $this->conn->query($query);

    		$data = array();

    		while ($row = $result->fetch_assoc()) {
       		   $data[] = $row;
    		}

    		return $data;
    	}

        function all_sanpham()  
        {
            $query = "SELECT * FROM sanpham ORDER BY idSP";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }

        function all_loaisanpham()  
        {
            $query = "SELECT * FROM loaisanpham ORDER BY idLoaiSP";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }

        function all_hoadon()  
        {
            $query = "SELECT * FROM hoadon ORDER BY idhoadon";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }

        function all_hoadon_day($ngaymua)  
        {
            $query = "SELECT * FROM hoadon WHERE ngaymua LIKE '%$ngaymua%' && trangthai='1' ORDER BY idhoadon";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }

        function all_banner()  
        {
            $query = "SELECT * FROM banner ORDER BY idbanner";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }

        function all_khuyenmai()  
        {
            $query = "SELECT * FROM khuyenmai ORDER BY idKM";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }

        function all_layout()  
        {
            $query = "SELECT * FROM layout";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }

        function update_layout($time, $mail_1, $mail_2, $diachi, $donvi, $phone_1, $phone_2)  
        {
            $query = "UPDATE layout SET time='$time', mail_1='$mail_1', mail_2='$mail_2', diachi='$diachi', donvi='$donvi', phone_1='$phone_1', phone_2='$phone_2' WHERE id = '1'";

            $result = $this->conn->query($query);

            if($result == true){

                header('Location: ?action=trangchu');
            }
        
        }


    }
     
?>