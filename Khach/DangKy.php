<?php
	$CapCha = rand (100, 1000); 
	require_once("../PHP/ConnectDB.php");
	$conn = ConnectDB::connect();
		
	if(isset($_POST['submit']))
	{
		if($_POST['txtTenDN'] != "" && $_POST['txtMatKhau'] != "" && $_POST['txtCapCha'] == $_POST['txtLuuCapCha'])
		{
			// Insert co so du lieu
			$sql= "INSERT INTO User (TenDN, MatKhau, MaPhanQuyen, Ho, Ten, Email, DiaChi, SoDienThoai) VALUES ('".$_POST['txtTenDN']."','".$_POST['txtMatKhau']."',2,'".$_POST['txtHo']."','".$_POST['txtTen']."','".$_POST['txtEmail']."','".$_POST['txtDiaChi']."','".$_POST['txtSoDienThoai']."')";

			if($conn->query($sql) === TRUE)
			{
				echo "Nhap du lieu thanh cong";
				ConnectDB::disconnect();
				header('Location: ../PHP/Login.php');
			}
			/*else
			{
				echo "Nhap du lieu Loi";
			}*/
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
        include("menu_Khach.php");
    ?>
<div class="container" style="background-color: whitesmoke;width:1050px; border-radius: 5px;">
	<div class="row" style="background-color: whitesmoke;padding-top: 5px;">
    	<p class="bg-primary" style="margin-right: 5px;margin-left: 5px;font-size: 30px;color:white;font-family: tahoma;text-align: center;border-radius:5px;padding-bottom: 5px;"> <b>Đăng ký thành viên</b> </p>
    </div>
    <div class="row">
    	<!-- Chèn form để xem thông tin tài khoản -->
        <form class="form-horizontal" name="frmSuaTaiKhoan" method="post" enctype="multipart/form-data">
                <div class="form-group">
	                <label for="txtTenDN" class="col-sm-2 control-label">Tên đăng nhập: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="txtTenDN" placeholder="Tên đăng nhập">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="txtMatKhau" class="col-sm-2 control-label">Mật khẩu: </label>
    				<div class="col-sm-5">
      					<input type="password" class="form-control" name="txtMatKhau" placeholder="Mật khẩu" >
    				</div>
  				</div>
                <div class="form-group">
    				<label for="txtHo" class="col-sm-2 control-label">Họ: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="txtHo" placeholder="Họ lót" >
    				</div>
  				</div>
                <div class="form-group">
    				<label for="txtTen" class="col-sm-2 control-label">Tên: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="txtTen" placeholder="Tên">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="txtEmail" class="col-sm-2 control-label">Email: </label>
    				<div class="col-sm-5">
      					<input type="email" class="form-control" name="txtEmail" placeholder="Email@gmail.com">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="txtDiaChi" class="col-sm-2 control-label">Địa chỉ: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="txtDiaChi" placeholder="Địa chỉ">
    				</div>
  				</div>
                <div class="form-group">
    				<label for="txtSoDienThoai" class="col-sm-2 control-label">Số điện thoại: </label>
    				<div class="col-sm-5">
      					<input type="text" class="form-control" name="txtSoDienThoai" placeholder="Số điện thoại" >
    				</div>
  				</div>
                <div class="form-group">
    				<label for="txtCapCha" class="col-sm-2 control-label">Chứng minh bạn không phải là rô-bốt: </label>
    				<div class="col-sm-3">
      					<input type="text" class="form-control" name="txtCapCha" placeholder="Nhập số ở bên cạnh" >
                    </div>
                    <div class="col-sm-1 bg-info" align="center">
						<strong style="font-size:22px;"><?php echo $CapCha; ?></strong>
                        <input type="hidden" name="txtLuuCapCha" value="<?php echo $CapCha; ?>">
    				</div>
  				</div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success" name="submit">Tạo</button>
                      <a href="../Admin/QLTaiKhoan.php"><button type="button" class="btn btn-default">Trở về</button></a>
                    </div>
              	</div>
    		</form>
</div>
</body>
</html>
