<?php
                                                //MODEL CHO TÀI KHOẢN NGƯỜI DÙNG
    require_once('ketnoi.php');
    /**
     * 
     */
    class dangnhap_dangky
    {
    	var $conn;

    	function __construct()
    	{
    		$connect_obj = new ketnoi();
            $this->conn = $connect_obj->connect;
    	}

         function dangky_model($ho, $ten, $email, $diachi, $gioitinh, $sodienthoai, $tendangnhap, $matkhau)
         {
            $query= "INSERT INTO user (ho, ten, email, diachi, gioitinh, sodienthoai, tendangnhap, matkhau) 
            VALUES ('$ho', '$ten', '$email', '$diachi', '$gioitinh', '$sodienthoai', '$tendangnhap', '$matkhau')";  

            $result = $this->conn->query($query);

            if($result == true){
                echo "<script>";
                echo "location.href='?action=dangnhap';</script>";
            }
            else{
                echo "<script> alert('ĐĂNG KÝ KHÔNG THÀNH CÔNG');";
                echo "location.href='?action=trangchu';</script>";
            }
         }


         function dangnhap_model($tendangnhap, $matkhau)
         {
            $query =" SELECT * FROM user where tendangnhap='".$tendangnhap."' and matkhau = '".$matkhau."' ";

            $result = $this->conn->query($query);

    	// $kq=mysqli_query($this->conn,$sl);
            $kq = $this->conn->query($query);

            $row=mysqli_fetch_array($kq);


            if(mysqli_num_rows($kq)>0)
            { 
                if($row['idQuyen'] == 1){
                	$_SESSION['admin'] = true;
                }else{
                    $_SESSION['admin'] = false;
                }

                if($row['idQuyen'] == 2)
                {
                    $_SESSION['banhang'] = true;
                }else{
                    $_SESSION['banhang'] = false;
                }
                
            
            $_SESSION['tendangnhap']=$tendangnhap;
            $_SESSION['matkhau']=$matkhau;

            $_SESSION['thoigian_bd']= time();         // dùng để làm giới hạn thời gian session
  //          echo "<script language='javascript'>alert('Dang nhap thanh cong');";
			echo "<script language='javascript'>location.href='?action=trangchu';</script>";
            }
            else
            {
            echo "<script language='javascript'>alert('Dang nhap that bai');";
			echo "location.href='?action=dangnhap';</script>";
            }


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




         function taikhoan($tendangnhap)
         {
            $query = "SELECT * FROM user WHERE tendangnhap = '$tendangnhap'";
            return $this->conn->query($query)->fetch_assoc();
         }



         function suataikhoan($idUser, $ho, $ten, $email, $diachi, $gioitinh, $sodienthoai, $tendangnhap)
        {
            

     
             $query="UPDATE user SET ho='$ho',ten='$ten',email='$email', diachi='$diachi', gioitinh='$gioitinh', sodienthoai='$sodienthoai', tendangnhap='$tendangnhap' WHERE idUser='$idUser';";        

            $result = $this->conn->query($query);

            if($result == true){
                header('Location: ?action=taikhoan');
            }
        

         }


         function suamk($idUser, $matkhau_moi)
         {
            $query="UPDATE user SET matkhau='$matkhau_moi' WHERE idUser='$idUser' ";  //loi thay doi het cac mk 12345      

            $result = $this->conn->query($query);

         }


      

}

?>