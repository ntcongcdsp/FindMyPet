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
    <script src="../js/bootstrap.min.js"></script>
</head>
<body style="background-color: lightgrey;min-height:100%;">
	<?php
        include("menu_Admin.php");
    ?>
<div class="container" style="background-color: whitesmoke;width:980px; border-radius: 5px;">
	<div class="row" style="background-color: whitesmoke;padding-top: 5px;">
    	<p class="bg-primary" style="margin-right: 5px;margin-left: 5px;font-size: 30px;color:white;font-family: tahoma;text-align: center;border-radius:5px;padding-bottom: 5px;"> <b>Quản lý Bài viết</b> </p>
    </div>
    <div class="row">
    	<!-- Chèn giao diện để quản lý User -->	
        <div class="col-md-3">
        	<form name="frmLoc" method="post">
                <select class="form-control" name="slDanhMuc">
                	<option value='0'> Tất cả</option>
                    <?php	
                        require_once("../PHP/ConnectDB.php");
                        $conn = ConnectDB::connect();							
                        $sqlDM = "SELECT DISTINCT ID, TenDanhMuc FROM danhmuc";
                        $resutDM = mysqli_query($conn, $sqlDM);
                        if($resutDM->num_rows >0)
                        {
                            while ($rowMD = $resutDM->fetch_assoc())
                            {
								if(array_key_exists('slDanhMuc',$_POST))
								{
									if($_POST['slDanhMuc'] == $rowMD['ID'])
									{
										echo "<option value='".$rowMD['ID']."' selected> ".$rowMD['TenDanhMuc']."</option>";
									}
									else
									{
										echo "<option value='".$rowMD['ID']."'> ".$rowMD['TenDanhMuc']."</option>";
									}
								}
								else
								{
									 echo "<option value='".$rowMD['ID']."'> ".$rowMD['TenDanhMuc']."</option>";
								}
                            }
                        }
                         ConnectDB::disconnect();
                    ?>
                </select>
		</div>
		<div class="col-md-2">
				<select class="form-control" name="slKiemDuyet">
                	<option value='2'> Tất cả</option>
					<?php
						if(array_key_exists('slKiemDuyet',$_POST))
						{
							if($_POST['slKiemDuyet'] == 1)
							{
								echo "<option value='1' selected> Đã kiểm duyệt </option>";
								echo "<option value='0'>Chưa kiểm duyệt </option>";
							}
							else if($_POST['slKiemDuyet'] == 0)
							{
								echo "<option value='1'> Đã kiểm duyệt </option>";
								echo "<option value='0' selected>Chưa kiểm duyệt </option>";
							}
							else
							{
								echo "<option value='1'> Đã kiểm duyệt </option>";
								echo "<option value='0'>Chưa kiểm duyệt </option>";
							}
						}
						else
							{
								echo "<option value='1'> Đã kiểm duyệt </option>";
								echo "<option value='0'>Chưa kiểm duyệt </option>";
							}
					?>
				</select>
		</div>
                <div class="col-md-3" align="left">
                	<button type="submit" class="btn btn-info" name="submit">Lọc</button>
                </div>
            </form>
        
        <div class="col-md-4" align="right">
        <p><a href="DangBaiViet.php"><input type="button" value="Đăng bài viết/Bản tin mới"/></a> </p>
        </div>
	</div>
	<div class="row" align="center">
        <table class="table table-condensed">
        <tr>
            <th class="info" >ID</th>
            <th class="info" >Tiêu đề</th>
			<th class="info" >Nội dung</th>
            <th class="info" >Hình ảnh</th>
            <th class="info" >Người đăng</th>
			<th class="info">Loại</th>
            <th class="info" >Kiểm duyệt</th>
            <th class="info" >Ngày dăng</th>
            <th class="info" >Tác vụ</th>
        </tr>
        <?php
            require_once("../PHP/ConnectDB.php");
            $conn = ConnectDB::connect();
        
            $sql = "SELECT A.ID, TieuDe, NoiDung, HinhAnh, TenDN, TenDanhMuc, KiemDuyet, NgayDang FROM baiviet AS A INNER JOIN DanhMuc AS B ON A.IDDanhMuc = B.ID ORDER BY A.ID ASC";
			if(array_key_exists('slDanhMuc', $_POST) && array_key_exists('slKiemDuyet',$_POST))
			{
				//Truong hop chi co Danh muc
				if($_POST['slDanhMuc']!=0 && $_POST['slKiemDuyet'] == 2)
				{
					$sql = "SELECT A.ID, TieuDe, NoiDung, HinhAnh, TenDN, TenDanhMuc, KiemDuyet, NgayDang FROM baiviet AS A INNER JOIN DanhMuc AS B ON A.IDDanhMuc = B.ID WHERE A.IDDanhMuc = ". $_POST['slDanhMuc'] ." ORDER BY A.ID ASC";
				}
				//Truong hop chi co Kiem duyet
				else if ($_POST['slDanhMuc'] == 0 && $_POST['slKiemDuyet'] != 2)
				{
					$sql = "SELECT A.ID, TieuDe, NoiDung, HinhAnh, TenDN, TenDanhMuc, KiemDuyet, NgayDang FROM baiviet AS A INNER JOIN DanhMuc AS B ON A.IDDanhMuc = B.ID WHERE KiemDuyet = ". $_POST['slKiemDuyet'] ." ORDER BY A.ID ASC";
				}
				//Truong hop co Danh muc va Kiem duyet
				else
				{
					$sql = "SELECT A.ID, TieuDe, NoiDung, HinhAnh, TenDN, TenDanhMuc, KiemDuyet, NgayDang FROM baiviet AS A INNER JOIN DanhMuc AS B ON A.IDDanhMuc = B.ID WHERE A.IDDanhMuc = ". $_POST['slDanhMuc'] ." AND KiemDuyet = ". $_POST['slKiemDuyet'] ." ORDER BY A.ID ASC";
				}
				/*if($_POST['slDanhMuc'] != 0)
				{
					$sql = "SELECT A.ID, TieuDe, NoiDung, HinhAnh, TenDN, TenDanhMuc, KiemDuyet, NgayDang FROM baiviet AS A INNER JOIN DanhMuc AS B ON A.IDDanhMuc = B.ID WHERE A.IDDanhMuc = ". $_POST['slDanhMuc'] ." ORDER BY A.ID ASC";
				}*/
			}
			
            $result = mysqli_query($conn, $sql);
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                        echo "<td>". $row['ID'] ."</td>";
                        echo "<th>". $row['TieuDe'] ."</th>";
						echo "<td>". $row['NoiDung'] ."</td>";
						echo "<td><img src='../img/". $row['HinhAnh'] ."'></td>";
						echo "<td>". $row['TenDN'] ."</td>";
						echo "<td>". $row['TenDanhMuc'] ."</td>";
						echo "<td>". $row['KiemDuyet'] ."</td>";
						echo "<td>". $row['NgayDang'] ."</td>";
                        echo "<td width=183>";
					   	echo "<a href='BaiViet_Doc.php?ID=".$row['ID']."'><input type='button' value='Xem' class='btn btn-default'/></a>";
					   	echo "&nbsp;";
					   	echo "<a href='BaiViet_Sua.php?ID=".$row['ID']."'><input type='button' value='Sửa' class='btn btn-success'/></a>";
					   	echo "&nbsp;";
					   	echo "<a href='BaiViet_Xoa.php?ID=".$row['ID']."'> <input type='button' value='Xóa' class='btn btn-danger'/> </a>";
					   	echo "</td>";
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
