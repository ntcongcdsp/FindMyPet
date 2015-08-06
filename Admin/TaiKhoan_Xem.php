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
    <link href="../Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
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
    	<p class="bg-primary" style="margin-right: 5px;margin-left: 5px;font-size: 30px;color:white;font-family: tahoma;text-align: center;border-radius:5px;padding-bottom: 5px;"> <b>Xem thông tin tài khoản</b> </p>
    </div>
    <div class="row">
    	<!-- Chèn form để xem thông tin tài khoản -->
        <div class="row col-md-3">
        </div>
        <div class="row col-md-9">
        	<table class="table-condensed">
            <?php
				require_once("../PHP/ConnectDB.php");
            	$conn = ConnectDB::connect();
        
            	$sql = "SELECT TenDN, MatKhau, MoTa, Email,NgaySinh, GioiTinh, DiaChi, SoDienThoai FROM User AS A INNER JOIN PhanQuyen AS B ON A.MaPhanQuyen = B.MaPhanQuyen  ORDER BY TenDN ASC";
            
            	$result = mysqli_query($conn, $sql);
				if($result->num_rows > 0)
				{
					while($row = $result->fetch_assoc())
					{
						echo "<tr>";
							echo "<td class='info'></td>";
							echo "<td> </td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td class='info'></td>";
							echo "<td> </td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td class='info'></td>";
							echo "<td> </td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td class='info'></td>";
							echo "<td> </td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td class='info'></td>";
							echo "<td> </td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td class='info'></td>";
							echo "<td> </td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td class='info'></td>";
							echo "<td> </td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td class='info'></td>";
							echo "<td> </td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td class='info'></td>";
							echo "<td> </td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td class='info'></td>";
							echo "<td> </td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td colspan='2' class='warning'></td>";
						echo "</tr>";
					}
				}
            	ConnectDB::disconnect();
			?>	
            </table>
        </div>
    </div>
</div>
</body>
</html>
