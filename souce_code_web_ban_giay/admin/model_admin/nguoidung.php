<?php
                                                //MODEL CHO TÀI KHOẢN NGƯỜI DÙNG
    require_once('ketnoi.php');
    /**
     * 
     */
    class nguoidung
    {
    	var $conn;

    	function __construct()
    	{
    		$connect_obj = new ketnoi();
            $this->conn = $connect_obj->connect;
    	}

    	function all()
    	{
    		$query = "SELECT * FROM user ORDER BY idUser ASC";

    		$result = $this->conn->query($query);

    		$data = array();

    		while ($row = $result->fetch_assoc()) {
       		   $data[] = $row;
    		}

    		return $data;
    	}


        function timkiem($timkiem)
        {
            $query = "SELECT * FROM user WHERE ten LIKE '%$timkiem%' ORDER BY idUser";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }




        function find($id)
        {
            $query = "SELECT * FROM user WHERE idUser=$id";
            return $this->conn->query($query)->fetch_assoc();
        }

        function update($idUser, $ho, $ten, $email, $diachi, $gioitinh, $sodienthoai, $tendangnhap, $matkhau)
        {
            

     
             $query="UPDATE user SET ho='$ho',ten='$ten',email='$email', diachi='$diachi', gioitinh='$gioitinh', sodienthoai='$sodienthoai', tendangnhap='$tendangnhap', matkhau='$matkhau' WHERE idUser='$idUser';";        

            $result = $this->conn->query($query);

            if($result == true){

                header('Location: ?action=taikhoan');
            }
        

         }

         function insert($ho, $ten, $email, $diachi, $gioitinh, $sodienthoai, $tendangnhap, $matkhau)
         {
            $query= "INSERT INTO user (ho, ten, email, diachi, gioitinh, sodienthoai, tendangnhap, matkhau) 
            VALUES ('$ho', '$ten', '$email', '$diachi', '$gioitinh', '$sodienthoai', '$tendangnhap', '$matkhau')";  

            $result = $this->conn->query($query);

            if($result == true){
                header('location: ?action=taikhoan');
            }
            else{
                header('location: ?action=them_giaodien');
            }
         }

         function delete($id)
         {
            $query = "DELETE FROM user WHERE idUser='$id' ";
            $result = $this->conn->query($query);

            if($result == true){

                echo "<script> ";
                echo "location.href='?action=taikhoan';</script>";

            }else{
                echo "<script> alert('LỖI, Chưa xóa được người dùng');";
                echo "location.href='?action=taikhoan';</script>";
            }
         }

// phân quyền
         function phanquyen($idUser, $idQuyen)
         {
            $query = "UPDATE user SET idQuyen='$idQuyen' WHERE idUser='$idUser';";

            $result = $this->conn->query($query);

            if($result == true){

                header('Location: ?action=taikhoan');
            }
         }


}

?>