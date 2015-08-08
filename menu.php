
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Find My Pet</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Meta Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap core CSS -->
	<script src="js/jquery-1.11.3.min.js"> </script>
	<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <!--<script src="js/custom.js"></script>-->
    <!--<script src="js/bootstrap.min.js" type="text/javascript"></script>-->
   
    <!-- Slick slide -->
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="slick/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color:#00008B;">
		<div class="container" >
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" >
					<span class="sr-only">Đây là menu mobile</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">FindMyPet</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;  ">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Trang chủ</a></li>
					<li class="active"><a href="indexlost.php">Tin mất thú</a></li>
					<li class="active"><a href="indexfind.php">Tin tìm chủ</a></li>
					<li class="active"><a href="knowledge.php">Kiến thức cơ bản</a></li>
					<li class="active"><a href="news.php">Tin tức</a></li>		
				</ul>
				<ul class="nav navbar-nav navbar-right">
                <?php
					session_start();
					$rootURL = 'http://localhost:8084/FindMyPet/';
					//include('../PHP/define.php');
					if(array_key_exists('TenDN',$_SESSION) && array_key_exists('MatKhau',$_SESSION) && array_key_exists('MaPhanQuyen',$_SESSION))
					{
						
						if($_SESSION['MaPhanQuyen'] == 1)
						{
							echo "<li class='active'><a href='".$rootURL."PHP/DangBai.php'><span class='glyphicon glyphicon-user'></span> Đăng bài viết/bản tin</a></li>";
							echo "<li class='active'><a href='".$rootURL."Admin/DMChucNang.php'><span class='glyphicon glyphicon-user'></span> Danh mục chức năng</a></li>";
							echo "<li class='active'><a href='".$rootURL."PHP/Logout.php'><span class='glyphicon glyphicon-user'></span> Đăng xuất</a></li>";
						}
						else if($_SESSION['MaPhanQuyen'] == 2)
						{
							echo "<li class='active'><a href='".$rootURL."PHP/DangBai.php'><span class='glyphicon glyphicon-user'></span> Đăng bài viết/bản tin</a></li>";
							echo "<li class='active'><a href='".$rootURL."PHP/Logout.php'><span class='glyphicon glyphicon-user'></span> Đăng xuất</a></li>";
						}
						else
						{
							echo "<li class='active'><a href='".$rootURL."PHP/Login.php'><span class='glyphicon glyphicon-user'></span> Đăng nhập</a></li>";
							echo "<li class='active'><a href='".$rootURL."Khach/DangKy.php'><span class='glyphicon glyphicon-log-in'></span> Đăng ký</a></li>";
						}
					}
					else
					{
						echo "<li class='active'><a href='".$rootURL."PHP/Login.php'><span class='glyphicon glyphicon-user'></span> Đăng nhập</a></li>";
						echo "<li class='active'><a href='".$rootURL."Khach/DangKy.php'><span class='glyphicon glyphicon-log-in'></span> Đăng ký</a></li>";
					}
				?>
      			</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
</body>
</html>