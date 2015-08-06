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
	<script src="../js/jquery.min.js"></script>
	<script src="../js/ie-emulation-modes-warning.js"></script>
    <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
    <script src="../js/custom.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body style="background-color: lightgrey;min-height:100%;">
	<?php
        include("menu_Admin.php");
    ?>
<div class="container" style="background-color: whitesmoke;width:980px; border-radius: 5px;">
	<div class="row" style="background-color: whitesmoke;padding-top: 5px;">
    	<p class="bg-primary" style="margin-right: 5px;margin-left: 5px;font-size: 30px;color:white;font-family: tahoma;text-align: center;border-radius:5px;padding-bottom: 5px;"> <b>Quản lý Tài khoản</b> </p>
    </div>
    <div class="row">
    	<!-- Chèn giao diện để quản lý User -->	
        <br/>
        <a href="TaiKhoan_Ad_Tao.php"><input type="button" value="Tạo tài khoản mới"/></a> 

        <table class="table table-condensed">
        <tr>
            <th class="info">Tên đăng nhập</th>
            <th class="info">Phân quyền</th>
            <th class="info">Tác vụ</th>
        </tr>
        <?php
            require_once("../PHP/ConnectDB.php");
            $conn = ConnectDB::connect();
        
            $sql = "SELECT TenDN, MoTa FROM User AS A INNER JOIN PhanQuyen AS B ON A.MaPhanQuyen = B.MaPhanQuyen  ORDER BY TenDN ASC";
            
            $result = mysqli_query($conn, $sql);
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                        echo "<td>" . $row['TenDN'] . "</td>";
                        echo "<td>" . $row['MoTa'] . "</td>";
                        echo "<td> 
                            <a href='TaiKhoan_Xem.php?TenDN=".$row['TenDN']."'><input type='button' value='Chi tiết' class='btn btn-info'/></a>
                            <a href='TaiKhoan_Sua.php?TenDN=".$row['TenDN']."'><input type='button' value='Sửa' class='btn btn-success'/></a>
                            <a href='TaiKhoan_Xoa.php?TenDN=".$row['TenDN']."'> <input type='button' value='Xóa' class='btn btn-danger'/> </a>
                            </td>";
                    echo "</tr>";
                }
            }
            ConnectDB::disconnect();
        ?>
		</table>
    </div>
    
</div>
</body>
</html>
