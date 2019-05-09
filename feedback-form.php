<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>UTESH TECHNOLOGIES LLP</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800%7CLato:300,400,700" rel="stylesheet" type="text/css">
		<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="assets/css/plugin/owl.carousel.css" rel="stylesheet" type="text/css">
		<!--Main Slider-->
		<link href="assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
		<link href="assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/bootsnav2.css" rel="stylesheet">
		<link href="assets/css/index.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/index3.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/index5.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/font/flaticon.css" rel="stylesheet" type="text/css" />
	
    <script type="text/javascript">
        $(document).ready(function () {
            var mouseX, mouseY;
            var ww = $(window).width();
            var wh = $(window).height();
            var traX, traY;
            $(document).mousemove(function (e) {
                mouseX = e.pageX;
                mouseY = e.pageY;
                traX = ((4 * mouseX) / 570) + 40;
                traY = ((4 * mouseY) / 570) + 50;
                console.log(traX);
                $(".title").css({ "background-position": traX + "%" + traY + "%" });
            });
        });</script>
    
    <style>
        .k_o {
            display: block;
        }
    </style>


		</head>

	<body>
		<div class="s_m">
			Feedback
		</div>
		<?php 
			include("includes/s_form.php");
		?>
		<!--Header Section Start Here
		==================================-->
		<?php include "includes/header.php"; ?>
		<!--Section End Here-->
    
        <h1 style="color:black; text-align:center; margin:2rem 0;">No Feedback Form Available Right Now</h1>
			
		<!--Footer Section Start-->
				
		<!--Footer Section Start-->
		<?php include "includes/footer.php"; ?>
		<!--Footer Section End-->
		<!-- Site Wraper End -->
		<script src="assets/js/jquery-1.12.4.min.js" type="text/javascript"></script>
		<!-- Easing Effect Js -->
		<script src="assets/js/plugin/jquery.easing.js" type="text/javascript"></script>
		<!-- bootstrap Js -->
		<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
		<!-- fancybox Js -->
		<script src="assets/js/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
		<script src="assets/js/jquery.fancybox.pack.js" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="assets/js/plugin/owl.carousel.js" type="text/javascript"></script>
		<!-- imagesloaded Js -->
		<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<!-- masonry,isotope Effect Js -->
		<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
		<!-- parallax Js -->
		<script src="assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
		<!-- revolution Js -->
		<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.revolution.js"></script>
		<!-- custom Js -->
		<script src="assets/js/custom.js" type="text/javascript"></script>
		<script src="https://unpkg.com/draggabilly@2/dist/draggabilly.pkgd.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.12/ouibounce.js"></script>
		
		<script> 
			
		</script>
	</body>
</html>
