<?php
	session_start();
	include_once(realpath(dirname(__DIR__))."/PHP/define.php");
	if(array_key_exists('TenDN',$_SESSION) && array_key_exists('MaPhanQuyen',$_SESSION))
	{
		if($_SESSION['MaPhanQuyen'] != NHOM_QUAN_TRI)
		{
			header('Location: ../PHP/Login.php');
		}
	}
	else
	{
		header('Location: ../PHP/Login.php');
	}

	if(isset($_GET['submit']))
	{
		require_once("../PHP/ConnectDB.php");
		$conn = ConnectDB::connect();
	
		$sql = "DELETE FROM BinhLuan WHERE ID = '".$_GET['txtID']."'";
		
		if($conn->query($sql) === TRUE)
		{
			echo "Dữ liệu đã xóa";
			ConnectDB::disconnect();
			header('Location: QLBinhLuan.php');
		}
		else
		{
			echo 'Lỗi: '. $conn->connect_error;
		}
		ConnectDB::disconnect();
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Find My Pet</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Meta Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap core CSS -->
	<script src="../asset/js/jquery-1.11.3.min.js"> </script>
	<script src="../asset/js/jquery.min.js"></script>
	<script src="../asset/js/ie-emulation-modes-warning.js"></script>
    <link href="../asset/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
    <script src="../asset/js/bootstrap.min.js"></script>
</head>

<body style="background-color: lightgrey;min-height:100%;">
	<?php
        include("menu_Admin.php");
    ?>
    <div class="container" style="background-color: whitesmoke;width:980px; border-radius: 5px;">
		<div class="row bg-danger">
         <?php
			require_once("../PHP/ConnectDB.php");
			$conn = ConnectDB::connect();
		
			$sql = "SELECT NoiDung FROM BinhLuan WHERE ID = ".$_GET['ID'];
			$result = mysqli_query($conn, $sql);
            if($result->num_rows > 0)
            {
               $row = $result->fetch_assoc();
            }
            ConnectDB::disconnect();
		?>
        	<h1>Xóa bình luận <br> "<?php echo $row['NoiDung'];?>"</h1>
        	<h3>Bạn có chắc chắn muốn xóa?</h3>
        </div>
        <div class="control_group">
             <form class="form-horizontal" name="frmXoaDanhMuc" method="get">
                <input type="hidden" name="txtID" value="<?php echo $_GET['ID']?>"/>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger" name="submit">Xóa</button>
                    <a href="QLBinhLuan.php"><button type="button" class="btn btn-default">Trở về</button></a>
                    </div>
                </div>
            </form>
        </div>
	</div>
</body>
</html>