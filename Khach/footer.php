<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Find My Pet</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Meta Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap core CSS -->
	<script src="../asset/js/jquery-1.11.3.min.js"> </script>
	<script src="../asset/js/jquery.min.js"></script>
	<!--<script src="../js/ie-emulation-modes-warning.js"></script>-->
    <link href="../asset/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
    <!--<script src="js/custom.js"></script>-->
    <script src="../asset/js/bootstrap.min.js"></script>
        <!-- Slick slide -->
	<link rel="stylesheet" type="text/css" href="../asset/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="../asset/slick/slick-theme.css"/>
	<script type="text/javascript" src="../asset/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="../asset/slick/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="../asset/slick/slick.min.js"></script>
</head>

<body>
<div class="row" style="height: 360px;margin-top:12px;margin-bottom:3px;">
    <div class="col-xs-6" style="height: 360px; border: 1px solid grey;border-radius:5px;padding-bottom: 5px;">
        <div class="row" style="height: 60px;padding-top: 2px;">
        	<?php
				include_once(realpath(dirname(__DIR__))."/PHP/define.php");
				echo "<img class='img-thumbnail' src='".BASE_URL."img/bannervui.jpg' style='width:480px;height:55px;margin-left:23px;'>";
		?>
            <!--<img class="img-thumbnail" src="../img/bannervui.jpg" style="width:480px;height:55px;margin-left:5px;">-->
        </div>
        <div class="row" style="height:295px;width:473px;margin-left:10px;">
            <div id="SlideFooter" align="center" style="margin-top:0px;">
                <?php
					
                    require_once(BASE_PATH . "/PHP/ConnectDB.php");
                    $conn = ConnectDB::connect();
                    
                    $sql = "SELECT * FROM Slider ORDER BY ID ASC";
                    $result = mysqli_query($conn, $sql);
                    
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            echo "<div><img src='".BASE_URL."img/AnhVui/".$row['TenFile']."' style='height:295px; width:470px;'></div>";
                        }
                    }
                    ConnectDB::disconnect();
                ?>
            </div>
        </div>
    </div>   

    <div class="col-xs-6" style="height: 360px;border: 1px solid grey;border-radius:5px;">
        <div class="row" style="height: 60px;padding-top: 2px;">
        	<?php
				echo "<img class='img-thumbnail' src='".BASE_URL."img/bannervui2.jpg' style='width:480px;height:55px;margin-left:23px;'>";
			?>
            <!--<img class="img-thumbnail" src="../img/bannervui2.jpg" style="width:480px;height:55px;margin-left:5px;">-->
        </div>
        <div class="row" style="height:255px;width:480px;margin-left:-10px;">
            chèn clip vui
        </div>
        <div class="btn-group" role="group" aria-label="..." style="margin-top: 5px;margin-left:320px;">
            <button type="button" class="btn btn-success">1</button>
            <button type="button" class="btn btn-success">2</button>
            <button type="button" class="btn btn-success">3</button>
            <button type="button" class="btn btn-success">4</button>
            <button type="button" class="btn btn-success">5</button>
        </div>
    </div>
</div>      
<hr>	
<div class="row" style="height:200px; width:880px;margin-left:70px;margin-top: 30px;border: 2px solid grey;border-radius:5px;">
	<div class="col-xs-2">
    	<?php
			echo "<img class='img-thumbnail' src='".BASE_URL."img/logo.gif' style='width:130px;height:70; margin-top: 50px;'>";
		?>
		<!--<img src="./img/logo.gif" style="width:130px;height:70; margin-top: 50px;">-->
	</div>
	<div class="col-xs-5" style="background-color:gray;height:196px;">
		<h3>nội dung 1</h3>
		chèn nội dung
	</div>    
	<div class="col-xs-5" style="background-color:lightblue;height:196px;">
		<h3>nội dung 2</h3>
		chèn nội dung
	</div>    
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#SlideFooter").slick({
			slidesToShow: 1,
			slideToScroll : 1,
			autoplay: true,
			autoplaySpeed: 1500,
  		});
	});
</script>  
</body>
</html>