<?php
class ConnectDB {
	//Server local dùng để test web, chức năng
	private static $servername = "localhost";
	private static $username = "root";
	private static $password = "";
	private static $databasename = "FindMyPet";

//Server internet dùng để nhập dữ liệu chung của nhóm
	/*private static $servername = "sql6.freemysqlhosting.net";
	private static $username = "sql685411";
	private static $password = "qK6!zD4%";
	private static $dbname = "sql685411";*/
	
	private static $conn = null;
	
	public function __construct() {
		exit('Init function is not allowed');
	}
	
	public static function connect()
	{
	   // One connection through whole application
       if ( null == self::$conn )
       {      
	        self::$conn = new mysqli(self::$servername, self::$username, self::$password, self::$databasename);
	        self::$conn->set_charset("utf8");
	        if (self::$conn->connect_error) {
			    die("Kết nối không thành công: " . self::$conn->connect_error);
			} 
       } 
       return self::$conn;
	}
	
	public static function disconnect()
	{
		self::$conn->close();
		self::$conn = null;
	}
}
?>