<html>
<head>
	<title>Find My Pet</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Meta Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap core CSS -->
	<script src="js/jquery-1.11.3.min.js"> </script>
	<script src="js/jquery.min.js"></script>
	<script src="./js/ie-emulation-modes-warning.js"></script>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <script src="js/custom.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color: lightgrey;">
	<?php
        include("menu.php");
    ?> 
<div class="container" style="background-color: whitesmoke;width:980px; border-radius: 5px;padding-bottom: 20px;">
	<img class="img-thumbnail" src="img/banner.jpg" alt="banner" style="width:950px; height: 270px;margin-top: 10px;margin-bottom:5px;">  
	<br>
    <div class="row">
		<div class="col-xs-9" style="background-color: whitesmoke;padding-top: 5px;">
			<div class="row">
            	<p class="bg-primary" style="margin-right: 5px;margin-left: 5px;font-size: 30px;color:white;font-family: tahoma;text-align: center;border-radius:5px;padding-bottom: 5px;"> <b>Kiến thức về thú cưng</b> </p>
            </div>
			<div class="row" style="height:75px;">
            	<div class="col-xs-3">
                	<img src="img/logo.gif" style="height:70px;width:130px; margin-left:5px;margin-top:3px;">
				</div>
				<div class="col-xs-9">  
					<div style="margin-top:25px;">
                    	<p> thông tin người viết bài </p>
                    </div>
				</div>
			</div>
            <hr>
			<div class="row">
				<div style="margin-left: 15px;">
                	<h2>Tiêu đề bài viết</h2>
					<p style="font-size:16px;"><b>Tóm tắt về bài viết ( chứa cả ngày tháng năm đăng bài viết )</b></p>
				</div>
			</div>
        	<div class="row">
				<img class="thumbnail" src="img/Animals___Birds_Bird_Hummingbird_041609_.jpg" style="width:400px;height:300px;margin-left: 160px;">
            </div>
            <hr>
            <div class="row">
            	<div style="margin-left: 15px;">
                	<p style="font-size:16px;">Nội dung chính của bài viết</p>
				</div>
			</div>
            <hr>
			<div class="row">
            	<div style="margin-left: 15px;">
                	<p style="font-size:16px;">phần bình luận</p>
				</div>
			</div>
		</div>
        <div class="col-xs-3" style="width:240px;margin-top:5px;">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align: center; font-family: time new roman; font-size:17px;"><b>TIN TÌM CHỦ MỚI</b></div>
				<div class="panel-body" style="height:430px;"">
         		<div class="row" style="width:210px;">
                	<div class="row" style="height:140px;">
                    	<a href="#"><img class="img-thumbnail" src="img/dogs1.jpg" style="height: 135px;width:205px;margin-left: 17px;margin-top: 3px;"></a>
                    </div>
                	<div class="row" style="height:50px;">
                    	<h5 style="margin-left: 20px;"><a href="#">Tiêu đề Xumali</a></h5>
                    </div>
                </div>
            	<div class="row" style="width:210px;">
                	<div class="row" style="height:140px;">
                    	<a href="#"><img class="img-thumbnail" src="img/Guide-Dogs_025-11.jpg" style="height: 135px;width:205px;margin-left: 17px;margin-top: 3px;"></a>
					</div>
                	<div class="row" style="height:50px;">
                    	<h5 style="margin-left: 20px;"><a href="#">Tiêu đề Xumali</a></h5>
                    </div>
                </div>
            	<div style="text-align:right;">
                	<a style="margin-bottom: 4px;"class="btn btn-success btn-sm" href="indexfind.php">Xem thêm</a>
				</div>
			</div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading" style="text-align: center; font-family: time new roman; font-size:17px;"><b>TIN MẤT CHÓ MỚI</b></div>
			<div class="panel-body" style="height:430px;"">
         		<div class="row" style="width:210px;">
                	<div class="row" style="height:140px;">
                    	<a href="#"><img class="img-thumbnail" src="img/dogs1.jpg" style="height: 135px;width:205px;margin-left: 17px;margin-top: 3px;"></a>
                    </div>
                <div class="row" style="height:50px;">
                	<h5 style="margin-left: 20px;"><a href="#">Tiêu đề Xumali</a></h5>
                </div>
			</div>
            <div class="row" style="width:210px;">
                <div class="row" style="height:140px;">
					<a href="#"><img class="img-thumbnail" src="img/Guide-Dogs_025-11.jpg" style="height: 135px;width:205px;margin-left: 17px;margin-top: 3px;"></a>
                </div>
                <div class="row" style="height:50px;">
                	<h5 style="margin-left: 20px;"><a href="#">Tiêu đề Xumali</a></h5>
				</div>
			</div>
            <div style="text-align:right;">
                <a style="margin-bottom: 4px;"class="btn btn-success btn-sm" href="indexlost.php">Xem thêm</a>
            </div>
		</div>
	</div>
</div>   
</div>
<?php
	include("footer.php");
?>

</body>
</html>
