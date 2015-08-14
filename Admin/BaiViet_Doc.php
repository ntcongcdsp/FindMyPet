<?php 
session_start();
	if(array_key_exists('TenDN',$_SESSION) && array_key_exists('MaPhanQuyen',$_SESSION))
	{
		if($_SESSION['MaPhanQuyen'] != 1)
		{
			header('Location: ../PHP/Login.php');
		}
	}
	else
	{
		header('Location: ../PHP/Login.php');
	}
$ID = null;
if ( !empty($_GET['ID'])) {
	$ID = $_REQUEST['ID'];
}

if ( null==$ID || !(is_numeric($ID))) {
	header("Location: QLBaiViet.php");
} else {
	require_once("../PHP/ConnectDB.php");
   	$conn = ConnectDB::connect();
   	$sql = "SELECT * FROM baiviet";
	$results = mysqli_query($conn, $sql);
	if ($results->num_rows > 0) {
		$data = $results->fetcharray();
	}
	ConnectDB::disconnect();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link   href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
		<div class="span10 offset1">
			<div class="row">
    			<h3>Xem bài viết</h3>
    		</div>    		
			<div class="form-horizontal" >
			  <div class="control-group">
			    <label class="control-label">Tiêu đề</label>
			    <div class="controls">
				    <label class="checkbox">
				     	<?php echo $data['TieuDe'];?>
				    </label>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">Nội dung</label>
			    <div class="controls">
			      	<label class="checkbox">
				     	<?php echo $data['NoiDung'];?>
				    </label>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">Hình ảnh</label>
			    <div class="controls">
			      	<label class="checkbox">
				     	<?php echo $data['HinhAnh'];?>
				    </label>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">Người đăng</label>
			    <div class="controls">
			      	<label class="checkbox">
				     	<?php echo $data['TenDN'];?>
				    </label>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">Kiểm duyệt</label>
			    <div class="controls">
			      	<label class="checkbox">
				     	<?php echo $data['KiemDuyet'];?>
				    </label>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label">Ngày đăng</label>
			    <div class="controls">
			      	<label class="checkbox">
				     	<?php echo $data['NgayDang'];?>
				    </label>
			    </div>
			  </div>
			    <div class="form-actions">
				  <a class="btn" href="QLBaiViet.php">Back</a>
			   </div>
			</div>
		</div>
    </div> <!-- /container -->
  </body>
</html>