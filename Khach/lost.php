<html>
<head>
	<title>Find My Pet</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Meta Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap core CSS -->
	<script src="../js/jquery-1.11.3.min.js"> </script>
	<!--<script src="js/jquery.min.js"></script>
	<script src="./js/ie-emulation-modes-warning.js"></script>-->
    <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
    <!--<script src="js/custom.js"></script>-->
    <!--<script src="js/bootstrap.min.js" type="text/javascript"></script>-->
   
    <!-- Slick slide -->
	<link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
	<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="../slick/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="../slick/slick.min.js"></script>
</head>
<body style="background-color: lightgrey;">
	<?php
        include("menu_Khach.php");
    ?>
<div class="container" style="background-color: whitesmoke;width:980px; border-radius: 5px;padding-bottom: 20px;">
	<img class="img-thumbnail" src="../img/chobannerlost.jpg" alt="banner" style="width:950px; height: 270px;margin-top: 10px;margin-bottom:5px;">  
	<br>
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-xs-12" style="padding-top: 5px;">
            <div class="row">
            	<p class="bg-primary" style="margin-right: 5px;margin-left: 5px;font-size: 30px;color:white;font-family: tahoma;text-align: center;border-radius:5px;padding-bottom: 5px;"> <b>Tin mất thú cưng</b> </p>
            </div>
            <div class="row">
                <div class="col-xs-7">
                    <img class="thumbnail" src="../img/Dog3.jpeg" style="width:500px;height:350px;margin-top: 15px; margin-left: 30px;">
                </div>
                <div class="col-xs-5">
                    <div style="border: 2px solid blueviolet; border-radius:5px;width:380px;height: 350px; margin-top:15px;">
                        <div style="text-align: center;font-size: 30px;margin-top:5px;">
                            Đặc điểm thú cưng
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                	<div style="border: 2px solid gray; border-radius:5px;height: 200px; margin-top:15px;">
                    <div style="text-align: center;font-size: 30px;margin-top:5px;">
                    	Mô tả thêm về thú cưng
					</div>
				</div> 
			</div>
			<div class="col-xs-12">
            	<div style="border: 2px solid green; border-radius:5px;height: 200px; margin-top:15px;">
					<div style="text-align:left;font-size: 30px;margin-top:5px;margin-left:15px;">
						Bình luận
					</div>
				</div> 
			</div>
		</div>
	</div>
</div>
<div style="border:1px solid blueviolet;border-radius:4px;"> 
	<a href="#"> <h4 style="margin-left:30px;"> >>> Bài viết có liên quan <<< </h4> </a>
</div>
<hr>
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
<div class="col-xs-8"  style=" height: 175px;width:637px; border:1px solid bluelight;border-radius:4px;">

	<div class="col-xs-8"  style="background-color:lightblue; height: 180px;width:637px;">
        <!-- chèn slide ảnh tìm chủ-->
        <!--<div id="SlideFindOwner" align="center" style="margin-top:30px">
            <div><a href="img/15.jpg"><img src="img/15.jpg" class="imgSlide"/></a>
            </div>
            <div><img src="img/9.jpg" class="imgSlide"/></div>
            <div><img src="img/10.jpg" class="imgSlide"/></div>
            <div><img src="img/11.jpg" class="imgSlide"/></div>
            <div><img src="img/12.jpg" class="imgSlide"/></div>
        </div>-->
        <!-- Kết thúc chèn slide -->
        <?php
			include("slidefind.php");
		?>
    </div>
</div>
</div>
<?php
	include("footer.php");    
?>
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