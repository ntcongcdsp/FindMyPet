<?php	
	require_once("../PHP/ConnectDB.php");
	$conn = ConnectDB::connect();
		
	if(isset($_POST['submit']))
	{
		// Insert co so du lieu
		$sql = "UPDATE thucung SET Loai='".$_POST['Loai']."', DacDiem =".$_POST['DacDiem'].", TinhCach = '".$_POST['TinhCach']."', KhaNang = '".$_POST['KhaNang']."', NguonGoc ='".$_POST['NguonGoc']."', TieuChuan='".$_POST['TieuChuan']."' WHERE Giong = '".$_GET['Giong']."'";
		if($conn->query($sql) === TRUE)
		{
			echo "Nhap du lieu thanh cong";
			ConnectDB::disconnect();
			header('Location: QLThuCung.php');
		}
		else
		{
			echo "Nhap du lieu Loi";
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
    	<p class="bg-primary" style="margin-right: 5px; margin-top:50px; margin-left: 5px;font-size: 30px;color:white;font-family: tahoma;text-align: center;border-radius:5px;padding-bottom: 5px;"> <b>Cập nhật thông tin thú cưng</b> </p>
    </div>
    <div class="row">
    	<!-- Chèn form để xem thông tin tài khoản -->
        <?php
			$sql = "SELECT * FROM thucung WHERE Giong = '".$_GET['Giong']."'";
	
			$resut = mysqli_query($conn, $sql);
			if($resut->num_rows>0)
			{
				$row = $resut->fetch_assoc();
			}
		?>
        <form class="form-horizontal" name="frmSuaTaiKhoan" method="post" enctype="multipart/form-data">
				<div class="form-group">
    				<label for="Loai" class="col-sm-2 control-label">Loài: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="Loai" placeholder="Loài" value="<?php echo $row['Loai']; ?>">
    				</div>
  				</div>
                <div class="form-group">
	                <label for="Giong" class="col-sm-2 control-label">Giống: </label>
    				<div class="col-sm-5">
      					<input type="text" disabled class="form-control" name="Giong" value="<?php echo $_GET['Giong']?>">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="DacDiem" class="col-sm-2 control-label">Đặc điểm: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="DacDiem" placeholder="Đặc điểm" value="<?php echo $row['DacDiem']; ?>">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="TinhCach" class="col-sm-2 control-label">Tính cách: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="TinhCach" placeholder="Tính cách" value="<?php echo $row['TinhCach']; ?>">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="KhaNang" class="col-sm-2 control-label">Khả năng: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="KhaNang" placeholder="Khả năng" value="<?php echo $row['KhaNang']; ?>">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="NguonGoc" class="col-sm-2 control-label">Nguồn gốc: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="NguonGoc" placeholder="Nguồn gốc" value="<?php echo $row['NguonGoc']; ?>">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="TieuChuan" class="col-sm-2 control-label">Tiêu chuẩn: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="TieuChuan" placeholder="Số điện thoại" value="<?php echo $row['TieuChuan']; ?>">
    				</div>
  				</div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success" name="submit">Sửa</button>
                      <a href="QLThuCung.php"><button type="button" class="btn btn-default">Trở về</button></a>
                    </div>
              	</div>
    		</form>
</div>
</body>
</html>