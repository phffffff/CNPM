<?php    
                                       // MODEL CHO CÁC THÔNG TIN SẢN PHẨM
    require_once('ketnoi.php');

    /**
     * 
     */
    class banner
    {
    	var $conn;
    	
    	function __construct()
    	{
    		$connect_obj = new ketnoi();
    		$this->conn = $connect_obj->connect;
    	}
    	
    	function all()  
    	{
    		$query = "SELECT * FROM banner ORDER BY idbanner";

    		$result = $this->conn->query($query);

    		$data = array();

    		while ($row = $result->fetch_assoc()) {
       		   $data[] = $row;
    		}

    		return $data;
    	}

        function timkiem_bn($timkiem_bn)
        {
            $query = "SELECT * FROM banner WHERE idbanner LIKE '%$timkiem_bn%' ORDER BY idbanner";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }





    	function find($id) 
        {
            $query = "SELECT * FROM banner WHERE idbanner=$id";
            return $this->conn->query($query)->fetch_assoc();
        }


         function update($idbanner, $anh) 
        {
            
     
             $query="UPDATE banner SET idbanner='$idbanner', anh='$anh' WHERE idbanner='$idbanner' ";        

            $result = $this->conn->query($query);

            if($result == true){

                header('Location: ?action=banner');
            }else{
                header('Location: ?action=banner');
            }
        

         }

         function insert($idbanner, $anhbanner)
         {

             $query= "INSERT INTO banner (idbanner, anh) 
            VALUES ('$idbanner', '$anhbanner') ";

            $result = $this->conn->query($query);

            if($result == true){
                header('location: ?action=banner');
            }
            else{
                header('location: ?action=thembanner_giaodien');
            }
         }

         function delete($id)   //chưa
         {
            $query = "DELETE FROM banner WHERE idbanner='$id' ";
            $result = $this->conn->query($query);

            if($result == true){

                echo "<script> ";
                echo "location.href='?action=banner';</script>";

            }else{
                echo "<script>";
                echo "location.href='?action=banner';</script>";
            }
         }





    }
     
?>