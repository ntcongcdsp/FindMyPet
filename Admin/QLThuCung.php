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
    	<p class="bg-primary" style="margin-right: 5px;margin-left: 5px;font-size: 30px;color:white;font-family: tahoma;text-align: center;border-radius:5px;padding-bottom: 5px;"> <b>Quản lý Thú cưng</b> </p>
    </div>
    <div class="row" align="center">
    	<!-- Chèn giao diện để quản lý User -->	
			<div class="col-md-6"<p align="left">
				<a href="ThuCung_taomoi.php" class="btn btn-success">Thêm thú cưng</a>
			</p>
			</div>
			<div class="col-md-4" align="right">
        	<form name="frmLoc" method="post">
                <select class="form-control" name="slPhanQuyen">
                	<option value='0'> Tất cả</option>;
                    <?php	
                        require_once("../PHP/ConnectDB.php");
                        $conn = ConnectDB::connect();							
                        $sqlDM = "SELECT Loai FROM thucung";
                        $resutDM = mysqli_query($conn, $sqlDM);

                         ConnectDB::disconnect();
                    ?>
                </select>
		</div>
                <div class="col-md-2" align="right">
                	<button type="submit" class="btn btn-info" name="submit">Lọc thú cưng</button>
                </div>
            </form>

        <table class="table table-condensed">
    		<tr>
                <th class="info">ID</th>
                <th class="info">Loài</th>
                <th class="info">Giống</th>
                <th class="info">Nguồn gốc</th>
                <th class="info">Tác vụ</th>
        	</tr>
			<?php
				require_once("../PHP/ConnectDB.php");
				$conn = ConnectDB::connect();
			
				$sql = "SELECT ID,Loai, Giong, NguonGoc FROM thucung ORDER BY ID ASC";
				$result = mysqli_query($conn, $sql);
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                        echo "<th>". $row['ID'] ."</th>";
                        echo "<td>". $row['Loai'] ."</td>";
						echo "<td>". $row['Giong'] ."</td>";
						echo "<td>". $row['NguonGoc'] ."</td>";
                        echo "<td> 
							<a href='ThuCung_chitiet.php?ID=".$row['ID']."'><input type='button' value='Chi tiết' class='btn'/></a>
                            <a href='ThuCung_Sua.php?ID=".$row['ID']."'><input type='button' value='Sửa' class='btn btn-success'/></a>
                            <a href='ThuCung_Xoa.php?Giong=".$row['Giong']."'> <input type='button' value='Xóa' class='btn btn-danger'/> </a>
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
