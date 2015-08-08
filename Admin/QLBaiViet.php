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
?><style type="text/css">
<!--
	.timkiem form select{
	   height: 26px;
       width: 100px; 
	}
-->
</style>
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

</head>
<body style="background-color: lightgrey;min-height:100%;">
	<?php
        include("menu_Admin.php");
    ?>
<div class="container" style="background-color: whitesmoke;width:980px; border-radius: 5px;">
	<div class="row" style="background-color: whitesmoke;padding-top: 5px;">
    	<p class="bg-primary" style="margin-right: 5px;margin-left: 5px;font-size: 30px;color:white;font-family: tahoma;text-align: center;border-radius:5px;padding-bottom: 5px;"> <b>Quản lý Bài viết/Bình luận</b> </p>
    </div>
    <div class="row">
    	<!-- Chèn giao diện để quản lý bài viết -->	
        <br/>
			<div class="timkiem">
                <a href="DangBaiViet.php"><input type="button" value="Đăng bài viết/bản tin mới"/></a>
				<form action="index.php" method="get">
					<input type="text" size="50" name="search" id="search" class="timkiem" autocomplete="off" value=""/>
						<select name="title"><option value="title">Tìm kiếm</option>
							<?php
								?>
						</select>
					<input type="submit" value="Tìm" class="bt-search"/>
				</form>
			</div>
    		<table class="table table-condensed">
    		<tr>
                <th class="info">ID</th>
                <th class="info">Tiêu đề</th>
                <th class="info">Nội dung</th>
                <th class="info">Hình ảnh</th>
                <th class="info">Người đăng</th>
				<th class="info">Kiểm duyệt</th>
                <th class="info">Ngày đăng</th>
        	</tr>
			<?php
				require_once("../PHP/ConnectDB.php");
				$conn = ConnectDB::connect();
			
				$sql = "SELECT * FROM DanhMuc ORDER BY ID ASC";
				$result = mysqli_query($conn, $sql);
				if($result->num_rows > 0)
				{
					while($row = $result->fetch_assoc())
					{
						echo "<tr>";
							echo "<td>" . $row['ID'] . "</td>";
							echo "<td>" . $row['TenDanhMuc'] . "</td>";
							echo "<td>" . $row['MoTa'] . "</td>";
							echo "<td> <a href='DanhMuc_Sua.php?id=" . $row['ID'] . "'><input type='button' value='Sửa' class='btn btn-success'/></a>
								<a href='DanhMuc_Xoa.php?id=" . $row['ID'] . "'> <input type='button' value='Xóa' class='btn btn-danger'/> </a> </td>";
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
