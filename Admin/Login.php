<?php
	//Khoi tao bien Session
	session_start();

	$_SESSION['TenDN'] = "";
	$_SESSION['MatKhau'] = "";
	$_SESSION['MaPhanQuyen'] = "";

	if(isset($_POST['submit']))
	{
		if($_POST['TenDN'] != "" && $_POST['MatKhau'] != "")
		{
			require_once("../PHP/ConnectDB.php");
			$conn = ConnectDB::connect();
		
			$sql = "SELECT * FROM User WHERE TenDN = '".$_POST['TenDN']."' AND MatKhau = '".$_POST['MatKhau']."'";
			$Result = mysqli_query($conn, $sql);
			if($Result->num_rows >0)
			{
				$row = $Result->fetch_assoc();
				$_SESSION['TenDN'] = $row['TenDN'];
				$_SESSION['MatKhau'] = $row['MatKhau'];
				$_SESSION['MaPhanQuyen'] = $row['MaPhanQuyen'];
				if($row['MaPhanQuyen'] == 1)
				{
					ConnectDB::disconnect();
					header('Location: DMChucNang.php');
				}
				else
				{
					ConnectDB::disconnect();
					header('Location: ../Index.php');
				}
			}
			else
			{
				header('Location: Login.php');
				ConnectDB::disconnect();
			}
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Find My Pet</title>
<link rel="stylesheet" href="../css/styleLogin.css">
</head>

<body>
  <section class="container">
    <div class="login">
      <h1>Form đăng nhập</h1>
      <form method="post" name="main-form">
        <p><input type="text" name="TenDN" value="" placeholder="Tên đăng nhập"></p>
        <p><input type="password" name="MatKhau" value="" placeholder="Mật khẩu"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Duy trì đăng nhập
          </label>
        </p>
        <p class="submit"><input type="submit" name="submit" value="Đăng nhập"></p>
      </form>
    </div>

    <div class="login-help">
      <p>Bạn có muốn lưu mật khẩu hay không? <a href="index.html">Click để thiết lập</a>.</p>
    </div>
    <div class="login-help">
        <a href="#">Tạo tài khoản mới</a>
    </div>
    <div class="login-help">
        <a href="../index.php">Trở về Trang chủ</a>
    </div>
  </section>
</body>
</html>