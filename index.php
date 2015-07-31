<html>
<head>
	<title>Find My Pet</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Meta Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap core CSS -->
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"> </script>
	<!--<script src="js/jquery.min.js"></script>
	<script src="./js/ie-emulation-modes-warning.js"></script>-->
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
<body style="background-color: lightgrey;">
	<?php
        include("menu.php");
    ?>
        
<div class="container" style="background-color: whitesmoke;width:980px; border-radius: 5px;padding-bottom: 20px;">
    <img class="img-thumbnail" src="img/banner.jpg" alt="banner" style="width:950px; height: 270px;margin-top: 10px;margin-bottom:5px;">  
    <br>
    <div class="row">
        <div class="col-xs-4">
            <div class="panel panel-primary">
                <div class="panel-heading" style="text-align: center; font-family: time new roman; font-size:17px;"><b>TIN MẤT THÚ CƯNG</b></div>
                <div class="panel-body" style="height:130px;">
                    <div style="position:relative;right:20px;">
                        <ul>
                            <!-- chèn tin mất chó -->
                            <li><a href="">Tin mất chó 1</a></li>
                            <li><a href="">Tin mất chó 2</a></li>
                            <li><a href="">Tin mất chó 3</a></li>
                        </ul>
                    </div>
                    <div style="text-align:right;">
                        <a class="btn btn-success btn-sm" href="indexlost.php">Xem thêm</a>
                    </div>
                </div>
        	</div>
    	</div>
        <div class="col-xs-8"  style="background-color:lightblue; height: 180px;width:637px;">
            <!-- chèn slide ảnh chó bị mất-->
            <div id="SlideLostPet" align="center" style="margin-top:30px">
            	<div><a href="img/1.jpg"><img src="img/1.jpg" class="imgSlide"/></a>
                </div>
                <div><img src="img/2.jpg" class="imgSlide"/></div>
                <div><img src="img/3.jpg" class="imgSlide"/></div>
                <div><img src="img/4.jpg" class="imgSlide"/></div>
                <div><img src="img/6.jpg" class="imgSlide"/></div>
                <div><img src="img/2.jpg" class="imgSlide"/></div>
            </div>
            <!-- Kết thúc chèn slide -->
        </div>
	</div>    
    <div class="row">
		<div class="col-xs-4">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align: center; font-family: time new roman; font-size:17px;"><b>TIN TÌM CHỦ</b></div>
				<div class="panel-body" style="height:130px;">
                	<div style="position:relative;right:20px;">
                		<ul>
                        	<!-- chèn tin mất chó -->
                        	<li><a href="">Tin tìm chó 1</a></li>
                			<li><a href="">Tin tìm chó 2</a></li>
                			<li><a href="">Tin tìm chó 3</a></li>
                		</ul>
					</div>
					<div style="text-align:right;">
                    	<a class="btn btn-success btn-sm" href="indexfind.php">Xem thêm</a>
               		</div>
				</div>
			</div>
		</div>
		<div class="col-xs-8"  style="background-color:lightblue; height: 180px;width:637px;">
			<!-- chèn slide ảnh tìm chủ-->
            <div id="SlideFindOwner" align="center" style="margin-top:30px">
            	<div><a href="img/15.jpg"><img src="img/15.jpg" class="imgSlide"/></a>
                </div>
                <div><img src="img/9.jpg" class="imgSlide"/></div>
                <div><img src="img/10.jpg" class="imgSlide"/></div>
                <div><img src="img/11.jpg" class="imgSlide"/></div>
                <div><img src="img/12.jpg" class="imgSlide"/></div>
            </div>
            <!-- Kết thúc chèn slide -->
		</div>
    </div>
    
	<div class="row">
		<div class="col-xs-9" style="background-color: whitesmoke;padding-top: 5px; height:535px;">
			<div class="row">
				<p class="bg-primary" style="margin-right: 5px;margin-left: 5px;font-size: 30px;color:white;font-family: tahoma;text-align: center;border-radius:5px;padding-bottom: 5px;"> <b>Những kiến thức cơ bản về thú cưng</b> </p>
			</div>
            <div class="row" style="height:145px;">
				<div class="col-xs-4" style="height:145px;">
					<a href="#"><img class="img-thumbnail" src="img/3.jpg" style="height: 140px;width:200px;"></a>
                </div>
					<div class="col-xs-8" style="height:145px;">
					<a href="#"><h3>Tiêu đề 1</h3></a>
					<p>Tóm tắt nội dung bên trong</p>
                </div>
			</div>
            
			<div class="row" style="height:145px;">
				<div class="col-xs-4" style="height:145px;">
					<a href="#"><img class="img-thumbnail" src="img/Animals___Birds_Bird_Hummingbird_041609_.jpg" style="height: 140px;width:200px;"></a>
                </div>
				<div class="col-xs-8" style="height:145px;">
                    <a href="#"><h3>Tiêu đề 2</h3></a>
                    <p>Tóm tắt nội dung bên trong</p>
                </div>
            </div>
            
            <div class="row" style="height:145px;">
                <div class="col-xs-4" style="height:145px;">
                    <a href="#"><img class="img-thumbnail" src="img/Dog3.jpeg" style="height: 140px;width:200px;"></a>
                </div>
                <div class="col-xs-8" style="height:145px;">
                    <a href="#"><h3>Tiêu đề 3</h3></a>
                    <p>Tóm tắt nội dung bên trong</p>
                </div>
            </div>
            <div style="text-align:right;">
                <a style="margin-bottom: 4px;"class="btn btn-success btn-sm" href="knowledge.php">Xem thêm</a>
            </div>
        </div>
        <div class="col-xs-3" style="border: 2px solid lightblue;border-radius:5px;width:240px;">
            <div class="row" style="height:75px"><img style="width:230px; height:70px;margin-top: 3px;margin-left: 3px;" src="img/news.gif"></div>
            <div class="row" style="margin-left: 2px;width:210px;">
				<div class="row" style="height:140px;">
                	<a href="#"><img class="img-thumbnail" src="img/dogs1.jpg" style="height: 135px;width:200px;margin-left: 17px;margin-top: 3px;"></a>
				</div>
                <div class="row" style="height:71px;">
                	<h4 style="margin-left: 10px;"><a href="#">Tiêu đề Xumali</a></h4>
				</div>
			</div>
            <div class="row" style="margin-left: 2px;width:210px;">
                <div class="row" style="height:140px;">
            		<a href="#"><img class="img-thumbnail" src="img/Guide-Dogs_025-11.jpg" style="height: 135px;width:200px;margin-left: 17px;margin-top: 3px;"></a>
				</div>
                <div class="row" style="height:71px;">
                	<h4 style="margin-left: 10px;"><a href="#">Tiêu đề Xumali</a></h4>
				</div>
            </div>
            <div style="text-align:right;">
                <a style="margin-bottom: 4px;"class="btn btn-success btn-sm" href="news.php">Xem thêm</a>
            </div>
        </div>   
    </div>
    
    <?php
		include("footer.php");
	?>
</div>
<script type="text/javascript">
	$(document).ready(function(){
  		$("#SlideLostPet").slick({
			slidesToShow: 4,
			slideToScroll : 4,
			autoplay: true,
			autoplaySpeed: 2000,
  		});
		$("#SlideFindOwner").slick({
			slidesToShow: 4,
			slideToScroll : 4,
			autoplay: true,
			autoplaySpeed: 2000,
  		});
	});
</script>
</body>

</html>
