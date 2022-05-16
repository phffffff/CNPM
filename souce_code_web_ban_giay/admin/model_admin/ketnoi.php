<?php
    /**
     * 
     */
    class ketnoi
    {
    	var $connect;
    	
    	function __construct()
    	{
    		//các thông số cần thiết kết nối database
    		$host = "localhost";
    		$username ="root";
    		$password = "";
    		$dbname = "shoe_store";

    		//tạo kết nối với cơ sở dữ liệu
    		$this->connect = new mysqli($host,$username,$password,$dbname);
    		$this->connect->set_charset('utf8');   //gửi dữ liệu với utf 8

    		//kiểm tra kết nối
    		if ($this->connect->connect_error) {
    			die(" Lỗi khi kết nối đến server: ".$this->connect->connect_error);
    		}

    	}
    }
?>

