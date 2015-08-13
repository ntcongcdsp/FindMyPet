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

 
	require_once("../PHP/ConnectDB.php");
	
	if ( !empty($_POST)) {
		// keep track post values
		$Loai = $_POST['Loai'];
		$Giong = $_POST['Giong'];
		$NguonGoc = $_POST['NguonGoc'];
		$DacDiem =$_POST['DacDiem'];
		$TinhCach =$_POST['TinhCach'];
		$KhaNang=$_POST['KhaNang'];
		$TieuChuan=$_POST['TieuChuan'];
		// insert data
		$conn = ConnectDB::connect();
		$sql = "INSERT INTO thucung (Loai,Giong,DacDiem,TinhCach,KhaNang,NguonGoc,TieuChuan) values('$Loai', '$Giong', '$DacDiem', '$TinhCach','$KhaNang','$NguonGoc','$TieuChuan')";
		$conn->query($sql);
		ConnectDB::disconnect();
		header("Location: QLThuCung.php");
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
    	<p class="bg-primary" style="margin-right: 5px;margin-left: 5px;font-size: 30px;color:white;font-family: tahoma;text-align: center;border-radius:5px;padding-bottom: 5px;"> <b>Tạo tài khoản</b> </p>
    </div>
    <div class="row">
    	<!-- Chèn form để xem thông tin tài khoản -->
        <form class="form-horizontal" name="taothucung" method="post" enctype="multipart/form-data">
                <div class="form-group">
	                <label for="Loai" class="col-sm-2 control-label">Loài: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="Loai" placeholder="Loài">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="Giong" class="col-sm-2 control-label">Giống: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="Giong" placeholder="Giống" >
    				</div>
  				</div>
                <div class="form-group">
    				<label for="DacDiem" class="col-sm-2 control-label">Đặc điểm: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="DacDiem" placeholder="Đặc điểm" >
    				</div>
  				</div>
                <div class="form-group">
    				<label for="TinhCach" class="col-sm-2 control-label">Tính cách: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="TinhCach" placeholder="tính cách" >
    				</div>
  				</div>
                <div class="form-group">
    				<label for="KhaNang" class="col-sm-2 control-label">Khả năng: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="KhaNang" placeholder="Khả năng">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="NguonGoc" class="col-sm-2 control-label">Nguồn gốc: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="NguonGoc" placeholder="Nguồn gốc">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="TieuChuan" class="col-sm-2 control-label">Tiêu chuẩn: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="TieuChuan" placeholder="Tiêu chuẩn">
    				</div>
  				</div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success" name="submit">Tạo</button>
                      <a href="QLThuCung.php"><button type="button" class="btn btn-default">Trở về</button></a>
                    </div>
              	</div>
    		</form>
</div>
</body>
</html>
