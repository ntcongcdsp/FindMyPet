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
	
	require_once("../PHP/ConnectDB.php");
	$conn = ConnectDB::connect();
		
	if(isset($_POST['submit']))
	{
		// Insert co so du lieu
		$sql = "UPDATE baiviet SET TieuDe='".$_POST['txtTieuDe']."', NoiDung=".$_POST['txtNoiDung'].", HinhAnh = '".$_POST['txtHinhAnh']."', TenDN = '".$_POST['txtTenDN']."', IDDanhMuc='".$_POST['slDanhMuc']."', KiemDuyet='".$_POST['txtKiemDuyet']."', NgayDang='".$_POST['txtNgayDang']."' WHERE ID = '".$_GET['ID']."'";
		if($conn->query($sql) === TRUE)
		{
			echo "Sửa thành công";
			ConnectDB::disconnect();
			header('Location: QLBaiViet.php');
		}
		else
		{
			echo "Dữ liệu không hợp lệ";
		}
		ConnectDB::disconnect();
	}
	
?>
<html>
<head>
	<title>Find My Pet</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Meta Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap core CSS -->
	<script src="../js/jquery-1.11.3.min.js"> </script>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/ie-emulation-modes-warning.js"></script>
    <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
    <script src="../js/bootstrap.min.js"></script>
</head>

<body style="background-color: lightgrey;min-height:100%;">
	<?php
        include("menu_Admin.php");
    ?>
<div class="container" style="background-color: whitesmoke;width:980px; border-radius: 5px;">
	<div class="row" style="background-color: whitesmoke;padding-top: 5px;">
    	<p class="bg-primary" style="margin-right: 5px;margin-left: 5px;font-size: 30px;color:white;font-family: tahoma;text-align: center;border-radius:5px;padding-bottom: 5px;"> <b>Cập nhật thông tin tài khoản</b> </p>
    </div>
    <div class="row">
    	<!-- Chèn form để xem thông tin tài khoản -->
        <?php
			$sql = "SELECT * FROM baiviet WHERE ID = '".$_GET['ID']."'";
	
			$resut = mysqli_query($conn, $sql);
			if($resut->num_rows>0)
			{
				$row = $resut->fetch_assoc();
			}
		?>
        <form class="form-horizontal" name="frmSuaTaiKhoan" method="post" enctype="multipart/form-data">
                <div class="form-group">
    				<div class="col-sm-5">
      					<input type="hidden" disabled class="form-control" name="txtID" value="<?php echo $_GET['ID']?>">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="txtTieuDe" class="col-sm-2 control-label">Tiêu đề: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="txtTieuDe" placeholder="Tiêu đề" value="<?php echo $row['TieuDe']; ?>">
    				</div>
  				</div>
				<div class="form-group">
    				<label for="txtNoiDung" class="col-sm-2 control-label">Nội dung: </label>
    				<div class="col-sm-5">
                    	
      					<input type="text" class="form-control" name="txtNoiDung" placeholder="Nội dung" value="<?php echo $row['NoiDung']; ?>">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="txtHinhAnh" class="col-sm-2 control-label">Hình ảnh: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="txtHinhAnh" placeholder="Ảnh" value="<?php echo $row['HinhAnh']; ?>">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="txtTenDN" class="col-sm-2 control-label">Tên đăng nhập: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="txtTenDN" placeholder="Tên đăng nhập" value="<?php echo $row['TenDN']; ?>">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="slPhanQuyen" class="col-sm-2 control-label">Phân quyền: </label>
    				<div class="col-sm-5">
                    	<select class="form-control" name="slDanhMuc">
                        	<?php								
								$sqlDM = "SELECT ID, TenDanhMuc FROM DanhMuc";
								$resutDM = mysqli_query($conn, $sqlDM);
								if($resutDM->num_rows >0)
								{
									while ($rowMD = $resutDM->fetch_assoc())
									{
										if($row['ID'] == $rowMD['ID'])
										{
											echo "<option value='".$rowMD['ID']."' selected> ".$rowMD['TenDanhMuc']."</option>";	
										}
										else
										{
											echo "<option value='".$rowMD['ID']."'> ".$rowMD['TenDanhMuc']."</option>";										
										}
									}
								}
							?>
                        </select>
    				</div>
  				</div>
                <div class="form-group">
    				<label for="txtKiemDuyet" class="col-sm-2 control-label">Kiểm duyệt: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="txtKiemDuyet" placeholder="Kiểm duyệt" value="<?php echo $row['KiemDuyet']; ?>">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="txtNgayDang" class="col-sm-2 control-label">Ngày đăng: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="txtNgayDang" placeholder="Ngày đăng" value="<?php echo $row['NgayDang']; ?>">
    				</div>
  				</div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success" name="submit">Sửa</button>
                      <a href="QLBaiViet.php"><button type="button" class="btn btn-default">Trở về</button></a>
                    </div>
              	</div>
    		</form>
</div>
</body>
</html>
