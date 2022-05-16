<?php    
                                       // MODEL CHO CÁC THÔNG TIN SẢN PHẨM
    require_once('ketnoi.php');

    /**
     * 
     */
    class khuyenmai
    {
    	var $conn;
    	
    	function __construct()
    	{
    		$connect_obj = new ketnoi();
    		$this->conn = $connect_obj->connect;
    	}
    	
    	function all() 
    	{
    		$query = "SELECT * FROM khuyenmai ORDER BY idKM";

    		$result = $this->conn->query($query);

    		$data = array();

    		while ($row = $result->fetch_assoc()) {
       		   $data[] = $row;
    		}

    		return $data;
    	}

        function timkiem_km($timkiem_km)
        {
            $query = "SELECT * FROM khuyenmai WHERE loaiKM LIKE '%$timkiem_km%' ORDER BY idKM";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }




    	function find($id)
        {
            $query = "SELECT * FROM khuyenmai WHERE idKM=$id";
            return $this->conn->query($query)->fetch_assoc();
        }


         function update($idKM, $loaiKM, $giatriKM, $ngaybatdau, $ngayketthuc) 
        {
            
             $query="UPDATE khuyenmai SET loaiKM='$loaiKM', giatriKM='$giatriKM', ngaybatdau='$ngaybatdau', ngayketthuc='$ngayketthuc' WHERE idKM='$idKM' ";        

            $result = $this->conn->query($query);

            if($result == true){

                header('Location: ?action=khuyenmai');
            }
        

         }

         function insert($loaiKM, $giatriKM, $ngaybatdau, $ngayketthuc) 
         {

             $query= "INSERT INTO khuyenmai (loaiKM, giatriKM, ngaybatdau, ngayketthuc) 
            VALUES ('$loaiKM', '$giatriKM', '$ngaybatdau', '$ngayketthuc') ";

            $result = $this->conn->query($query);

            if($result == true){
                header('location: ?action=khuyenmai');
            }
            else{
                header('location: ?action=themkhuyenmai_giaodien');
            }
         }

         function delete($id)     //đang
         {
            $query = "DELETE FROM khuyenmai WHERE idKM='$id' ";
            $result = $this->conn->query($query);

            if($result == true){

                echo "<script> ";
                echo "location.href='?action=khuyenmai';</script>";

            }else{
                echo "<script>";
                echo "location.href='?action=khuyenmai';</script>";
            }
         }





    }
     
?>