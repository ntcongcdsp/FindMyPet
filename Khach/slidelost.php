<html>
<head>
	<title>Find My Pet</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Meta Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap core CSS -->
	<script src="../js/jquery-1.11.3.min.js" type="text/javascript"> </script>
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
<body>
<!-- chèn slide ảnh chó bị mất-->
<div id="SlideLostPet" align="center" style="margin-top:30px">
    <?php
		$rootURL = 'http://localhost:8084/FindMyPet/';
		echo "<div><img src='".$rootURL."img/9.jpg' class='imgSlide'></div>";
		echo "<div><img src='".$rootURL."img/10.jpg' class='imgSlide'></div>";
		echo "<div><img src='".$rootURL."img/11.jpg' class='imgSlide'></div>";
		echo "<div><img src='".$rootURL."img/12.jpg' class='imgSlide'></div>";
		echo "<div><img src='".$rootURL."img/1.jpg' class='imgSlide'></div>";
		echo "<div><img src='".$rootURL."img/2.jpg' class='imgSlide'></div>";
		echo "<div><img src='".$rootURL."img/3.jpg' class='imgSlide'></div>";
	?>
    <!--<div><a href="./img/1.jpg"><img src="./img/1.jpg" class="imgSlide"/></a>
    </div>
    <div><img src="./img/2.jpg" class="imgSlide"/></div>
    <div><img src="./img/3.jpg" class="imgSlide"/></div>
    <div><img src="./img/4.jpg" class="imgSlide"/></div>
    <div><img src="./img/6.jpg" class="imgSlide"/></div>
    <div><img src="./img/2.jpg" class="imgSlide"/></div>-->
</div>
<!-- Kết thúc chèn slide -->
<script type="text/javascript">
	$(document).ready(function(){
  		$("#SlideLostPet").slick({
			slidesToShow: 4,
			slideToScroll : 4,
			autoplay: true,
			autoplaySpeed: 2000,
  		});
	});
</script>
</body>
</html>