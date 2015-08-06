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
    <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />

</head>
<body style="background-color: lightgrey;min-height:100%;">
	<?php
        include("menu_Admin.php");
    ?>
<div class="container" style="background-color: whitesmoke;width:980px; border-radius: 5px;">
	<div class="row" style="background-color: whitesmoke;padding-top: 5px;">
    	<p class="bg-primary" style="margin-right: 5px;margin-left: 5px;font-size: 30px;color:white;font-family: tahoma;text-align: center;border-radius:5px;padding-bottom: 5px;"> <b>Danh mục chức năng</b> </p>
    </div>
    <div class="row">
    	<div class="col-xs-4" align="center">
            <a href="QLBaiViet.php">
            	<img class="thumbnail" src="../img/3.jpg" style="height:180px;width:250px;margin-top:5px;margin-bottom:0px;">
            	<br>
            	<h3 style="margin-top:0px;">Quản lý Bài viết/Bình luận</h3>
			</a>
        </div>
        <div class="col-xs-4" align="center">
            <a href="QLThuCung.php">
            	<img class="thumbnail" src="../img/13.jpg" style="height:180px;width:250px;margin-top:5px;margin-bottom:0px;">
            	<br>
            	<h3 style="margin-top:0px;">Quản lý Thú cưng</h3>
			</a>
        </div>
        <div class="col-xs-4" align="center">
            <a href="QLTaiKhoan.php">
            	<img class="thumbnail" src="../img/9.jpg" style="height:180px;width:250px;margin-top:5px;margin-bottom:0px;">
            	<br>
            	<h3 style="margin-top:0px;">Quản lý Tài khoản</h3>
			</a>
        </div>
    </div>
    
</div>
</body>
</html>
