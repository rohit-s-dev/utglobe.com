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
		<!--  Main Banner Start Here-->
		<div class="main-banner banner_up" >
            <script src="assets/js/jssor.slider.min.js" type="text/javascript"></script>
              
    <script type="text/javascript">
        jssor_1_slider_init = function () {

            var jssor_1_options = {
                $AutoPlay: 1,
                $SlideDuration: 800,
                $SlideEasing: $Jease$.$OutQuint,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        /*jssor slider bullet skin 032 css*/
        .jssorb032 {position:absolute;}
        .jssorb032 .i {position:absolute;cursor:pointer;}
        .jssorb032 .i .b {fill:#fff;fill-opacity:0.7;stroke:#000;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.25;}
        .jssorb032 .i:hover .b {fill:#000;fill-opacity:.6;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .iav .b {fill:#000;fill-opacity:1;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .i.idn {opacity:.3;}
        
        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:450px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:450px;overflow:hidden;">
           
            <div>
                 <img data-u="image" src="assets/img/Banner2.jpg" />
            </div>
             <div>
            <img data-u="image"  src="assets/img/banner3.jpg" />
             </div>
             <div>
            <img data-u="image"  src="assets/img/banner4.jpg" />
             </div>
              <div>
             <img  data-u="image" src="assets/img/Banner1.jpg" />
            </div>
             <div>
           <img data-u="image" src="assets/img/banner5.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">        jssor_1_slider_init();</script>



		</div>
		<!--  Main Banner End Here-->

        	<!--planing wrapper start-->
		<section class="plaing_wrap__block padding ptb-xs-60">
			<div class="container">
				<div class="row  text-center">
					<div class="col-sm-12  ">
						<h2  class="">Welcome To</h2>
<div class="effect">
 <div class="title">UTESH TECHNOLOGIES</div>
  </div>
						<span class="b-line"></span>
                        <p class="ptb-20">Utesh Technologies is a Design and Animation Studio that specialize in Graphics Designing, Website Designing & Development, Corporate identity . We offer the industry's broadest and most comprehensive range of solutions.. © 2019 Utesh Technologies Passionate People. Creative Thinking</p>
					</div>


				</div>
				
			</div>
		</section>
        
             <section class="top_section__block  pt-30">


		        <div class="container">
                <div class="row pb-30 text-center">
                <h2><span>Our </span>Industries</h2>
		            <div class="row  pt-60">
		                <div class="col-md-4 col-xs-12 col-sm-12">
		                    <div class="single_top__block text-center">
							 <div class="icon-box__block">
		                            <i class="fa fa-laptop color"></i>
		                        </div>
		                       <div class="single_text__block">
							   
		                        <h4><a href="http://utglobe.com/" style="color:#daa10a">IT SERVICES</a></h4>
		                       	<div class="pricing-btn pricing-btn--bg">
									<a href="http://utglobe.com/" class="get-start">utglobe</a>
								</div>
							   </div>
		                    </div>
		                </div>
		                <div class="col-md-4 col-xs-12 col-sm-12">
		                    <div class="single_top__block text-center">
							 <div class="icon-box__block">
		                            <i class="fa fa-shopping-cart color"></i>
		                        </div>
		                       <div class="single_text__block">
							   
		                        <h4><a href="https://bookyourproduct.com/byp2/" style="color:#daa10a">E-COMMERCE</a></h4>
                             
		                      	<div class="pricing-btn pricing-btn--bg">
									<a href="https://bookyourproduct.com/byp2/" target="_blank"class="get-start">bookyourproduct</a>
								</div>
							   </div>
		                    </div>
		                </div>
		                <div class="col-md-4 col-xs-12 col-sm-12">
		                    <div class="single_top__block text-center">
							 <div class="icon-box__block">
		                            <i class="flaticon-graph color"></i>
		                        </div>
		                       <div class="single_text__block">
							   
		                        <h4><a href="http://uteshindustries.com/" style="color:#daa10a">MANUFACTURING/TRADING</a></h4>
                   
		                        	<div class="pricing-btn pricing-btn--bg">
									<a href="http://uteshindustries.com/" target="_blank"class="get-start">uteshindustries</a>
								</div>
							   </div>
		                    </div>
		                </div>
		            </div>
                    <div class="row pt-60">
		                <div class="col-md-4 col-xs-12 col-sm-12">
		                    <div class="single_top__block text-center">
							 <div class="icon-box__block">
		                            <i class="fa fa-legal color"></i>
		                        </div>
		                       <div class="single_text__block">
							   
		                        <h4><a href="http://legalustaad.com/" style="color:#daa10a">LEGAL SERVICES</a></h4>
		                         
		                        	<div class="pricing-btn pricing-btn--bg">
									<a href="http://legalustaad.com/"target="_blank" class="get-start">legalustaad</a>
								</div>
							   </div>
		                    </div>
		                </div>
		                <div class="col-md-4 col-xs-12 col-sm-12">
		                    <div class="single_top__block text-center">
							 <div class="icon-box__block">
		                            <i class="fa fa-newspaper-o color"></i>
		                        </div>
		                       <div class="single_text__block">
							   
		                       <h4><a href="http://khabariyanews.com/"target="_blank"style="color:#daa10a">Khabariya News</a></h4>
		                   
		                        	<div class="pricing-btn pricing-btn--bg">
									<a href="http://khabariyanews.com/" class="get-start">khabariyanews</a>
								</div>
							   </div>
		                    </div>
		                </div>
		                <div class="col-md-4 col-xs-12 col-sm-12">
		                    <div class="single_top__block text-center">
							 <div class="icon-box__block">
		                            <i class=" fa fa-certificate color"></i>
		                        </div>
		                       <div class="single_text__block">
							   
		                        <h4><a href="http://legalustaad.com/"target="_blank"style="color:#daa10a">INTERIOR</a></h4>
		                     
		                        	<div class="pricing-btn pricing-btn--bg">
									<a href="http://uteshservices.com/" target="_blank"class="get-start">uteshservices</a>
								</div>
							   </div>
		                    </div>
		                </div>
		            </div>
                    </div>
		        </div>
		    </section>
              
              <section id="work" class="padding ptb-xs-60"  >
				<div class="container">
					<div class="row text-center pb-30">
						<div class="col-sm-12">
							<div class="heading-box ">
								<h2><span>Our</span> Services</h2>
								<span class="b-line line-h"></span>
							</div>
						</div>
					</div>
					<!-- work Filter -->
					
					<!-- End work Filter -->
					<div class="row container-grid nf-col-4">

						<div class="nf-item branding coffee spacing col-xs-12 col-sm-12">
							<div class="item-box">
								<a> <img src="assets/img/wesite.jpg"  class="item-container"/> </a>
								<div class="link-zoom">
										<a href="WebDevelopement.htm" class="btn-text">Know More</a> 
								</div>
								<div class="gallery-heading">
									<h4><a href="WebDevelopement.htm">Web Developement</a></h4>
									 
								</div>
							</div>
						</div>

						<div class="nf-item photo spacing col-xs-12 col-sm-12">
							<div class="item-box">
								<a> <img src="assets/img/software.jpg" class="item-container"/></a>
								<div class="link-zoom">
										<a href="SoftwareDevelopement.htm" class="btn-text">Know More</a> 
								</div>
								<div class="gallery-heading">
									<h4><a href="SoftwareDevelopement.htm">Software Development</a></h4>
									 
								</div>
							</div>
						</div>

						<div class="nf-item branding coffee spacing col-xs-12 col-sm-12">
							<div class="item-box">
								<a>  <img src="assets/img/digital.jpg" class="item-container" /> </a>
								<div class="link-zoom">
										<a href="DigitalMarketing.htm" class="btn-text">Know More</a> 
								</div>
								<div class="gallery-heading">
									<h4><a href="DigitalMarketing.htm">Digital Marketing</a></h4>
									 
								</div>
							</div>
						</div>

						<div class="nf-item design spacing col-xs-12 col-sm-12">
							<div class="item-box">
								<a>  <img src="assets/img/seo.jpg" class="item-container"/> </a>
								<div class="link-zoom">
										<a href="Seo.htm" class="btn-text">Know More</a> 
								</div>
								<div class="gallery-heading">
									<h4><a href="Seo.htm">SEO Services</a></h4>
								 
								</div>
							</div>
						</div>

						<div class="nf-item branding spacing col-xs-12 col-sm-12">
							<div class="item-box">
								<a> <img src="assets/img/mobile.jpg"  class="item-container" /> </a>
								<div class="link-zoom">
										<a href="MobileApp.htm" class="btn-text">Know More</a> 
								</div>
								<div class="gallery-heading">
									<h4><a href="MobileApp.htm">Mobile App</a></h4>
									 
								</div>
							</div>
						</div>

						<div class="nf-item photo spacing col-xs-12 col-sm-12">
							<div class="item-box">
								<a> <img src="assets/img/graphics.jpg"  class="item-container"/> </a>
								<div class="link-zoom">
										<a href="Graphics.htm" class="btn-text">Know More</a> 
								</div>
								<div class="gallery-heading">
									<h4><a href="Graphics.htm">Logo Design/Graphics</a></h4>
									 
								</div>
							</div>
						</div>

						<div class="nf-item branding spacing col-xs-12 col-sm-12">
							<div class="item-box">
								<a> <img src="assets/img/domain.jpg"  class="item-container"/></a>
								<div class="link-zoom">
										<a href="DomainReg.htm" class="btn-text">Know More</a> 
								</div>
								<div class="gallery-heading">
									<h4><a href="DomainReg.htm">Domain Registration</a></h4>
									 
								</div>
							</div>
						</div>
                        	 
						<div class="nf-item photo spacing col-xs-12 col-sm-12">
							<div class="item-box">
								<a> <img src="assets/img/webhosting.jpg"  class="item-container"/></a>
								<div class="link-zoom">
										<a href="WebHosting.htm" class="btn-text">Know More</a> 
								</div>
								<div class="gallery-heading">
									<h4><a href="WebHosting.htm">Web Hosting</a></h4>
									
								</div>
							</div>
						</div>

					</div>

				</div>
			</section>
          
		
		<section class="quote_wrap__block">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-7 no-padding">
						<div class="left_quote__block pb-80 ">
							<div class="left_box_heading__block block_bg pt-80 pt-sm-0">
								<h2>Why People Choose Us</h2>
								<p>
								
								</p>
							</div>
							<div class="single_quote__block block_bg">
								<i class="fa fa-tachometer"></i>
								<h4>Services</h4>
								<p>
									We specialize in providing expert IT Infrastructure services with the promise of reliability and resourcefulness to provide practical, cost-effective solutions to clients
								</p>
							</div>
							<div class="single_quote__block block_bg">
								<i class="fa fa-group"></i>
								<h4>Dedicated Team</h4>
								<p>
									We have a dedicated team of professionals who are here to ensure your brief is matched as closely to your needs as possible, with fresh ideas and within your budget.
								</p>
							</div>
							<div class="single_quote__block block_bg">
								<i class="fa fa-phone-square"></i>
								<h4>24x7 Supports</h4>
								<p>
									We are specialize in providing support to individual consumers with reliable and cost-effective solutions.
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-5 no-padding">
						<div class="quote__block ptb-80">
							<h2>Request  Free Consultation</h2>
							<p>
							
							</p>
							<form action="" method="post">
								<input type="text" id="s_name" placeholder="Your Name*">
								<input type="text" id="s_email" placeholder="Email Address*">
								<input type="text" id="s_category" placeholder="Discus About*">
								<textarea  id="s_msg" cols="30" rows="10" placeholder="Consultation..."></textarea>
								<input type="submit" id="s_submit">
								<p class="jj">
							
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Quote and support section end-->
      
			<section class="testimonials" Style="background:url(assets/img/Testimonial.jpg)">
				<div class="container">
               <div class="row text-center pb-15 pt-15">
						<div class="col-sm-12">
							<div class="heading-box ">
								<h2><span>Testimonial</span>  </h2>
								<span class="b-line line-h"></span>
							</div>
						</div>
					</div>
					<div class="row mb-20" style="background:#337ab747">
						<div class="col-lg-12 col-12">


                        <center>
							<div class="testimonials-slider">


                            <script>
                                jssor_slider2_init = function () {

                                    var options = {
                                        $AutoPlay: 1,           //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
                                        $DragOrientation: 3     //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0),
                                    };

                                    var jssor_slider2 = new $JssorSlider$('slider2_container', options);
                                    /*#region responsive code begin*/
                                    //you can remove responsive code if you don't want the slider scales while window resizing
                                    function ScaleSlider() {

                                        //reserve blank width for margin+padding: margin+padding-left (10) + margin+padding-right (10)
                                        var paddingWidth = 20;

                                        //minimum width should reserve for text
                                        var minReserveWidth = 225;

                                        var parentElement = jssor_slider2.$Elmt.parentNode;

                                        //evaluate parent container width
                                        var parentWidth = parentElement.clientWidth;

                                        if (parentWidth) {

                                            //exclude blank width
                                            var availableWidth = parentWidth - paddingWidth;

                                            //calculate slider width as 70% of available width
                                            var sliderWidth = availableWidth * 0.7;

                                            //slider width is maximum 600
                                            sliderWidth = Math.min(sliderWidth, 1000);

                                            //slider width is minimum 200
                                            sliderWidth = Math.max(sliderWidth, 200);
                                            var clearFix = "none";

                                            //evaluate free width for text, if the width is less than minReserveWidth then fill parent container
                                            if (availableWidth - sliderWidth < minReserveWidth) {

                                                //set slider width to available width
                                                sliderWidth = availableWidth;

                                                //slider width is minimum 200
                                                sliderWidth = Math.max(sliderWidth, 200);

                                                clearFix = "both";
                                            }

                                            //clear fix for safari 3.1, chrome 3
                                            var toClearElment = $Jssor$.$GetElement("clearFixDiv");
                                            toClearElment && (toClearElment.style["clear"] = clearFix);

                                            jssor_slider2.$ScaleWidth(sliderWidth);
                                        }
                                        else
                                            $Jssor$.$Delay(ScaleSlider, 30);
                                    }

                                    ScaleSlider();
                                    $Jssor$.$AddEvent(window, "load", ScaleSlider);

                                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                                    /*#endregion responsive code end*/
                                };
    </script>
   
    <!-- Jssor Slider Begin -->
    
        <div id="slider2_container" style="position: relative; margin: 0px 5px 5px 0px; top: 0px; left: 0px; width: 1000px;
            height: 400px; overflow: hidden;">
            <!-- Slides Container -->
            <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 1000px; height: 400px;
                overflow: hidden;">
                <div >
                <div data-u="image" class="single-testimonial">
									<div class="image">
										 <img src="assets/img/team2.png" />
										<div class="icon"><i class="fa fa-quote-right"></i></div>
									</div>
									<p style="font-size:16px">Utesh has done a wonderful job for me in design and development for multiple websites for my companies, mobile websites included. Midas has performed well in meeting the needs of my companies. Currently I’m collaborating with Utesh over another project.</p>
									<div class="t-info">
										<h3>WABSUS <span>Patna, Bihar</span></h3>
									</div>				
								</div>
                                </div>
                                 <div >
                <div data-u="image" class="single-testimonial">
									<div class="image">
										<img src="assets/img/team2.png" />
										<div class="icon"><i class="fa fa-quote-right"></i></div>
									</div>
									<p style="font-size:16px">
                           Our business partner Utesh has always gone beyond the usual and typical to ensure that any project I hand over is managed perfectly;                       hence ensuring enduring quality and security. Thank you Utesh and his team for the great help and services.
                      </p>
									<div class="t-info">
										<h3 class='d-block'>KHABARIYA NEWS <span >Patna, Bihar</span></h3>
									</div>				
								</div>
                                </div>
                                 <div >
                <div data-u="image" class="single-testimonial">
									<div class="image">
										<img src="assets/img/team2.png" />
										<div class="icon"><i class="fa fa-quote-right"></i></div>
									</div>
									<p style="font-size:16px">Utesh has done a wonderful job for me in design and development for multiple websites for my companies, mobile websites included. Midas has performed well in meeting the needs of my companies. Currently I’m collaborating with Utesh over another project.</p>
									<div class="t-info">
										<h3>BYP <br><span >Patna, Bihar</span></h3>
									</div>			
								</div>
                                </div>
                                 <div >
                <div data-u="image" class="single-testimonial">
									<div class="image">
										<img src="assets/img/team2.png" />
										<div class="icon"><i class="fa fa-quote-right"></i></div>
									</div>
									<p style="font-size:16px"> After thinking outside the box and creating an original template for a series of interconnected websites, www.weeindustries.com, Utesh took over a very complex website that required intricate tracking mechanisms for sales from another IT team..
                          </p>
									<div class="t-info">
										<h3>WEE</h3><span class='k_o'>Patna, Bihar</span >
									</div>				
								</div>
                                </div>
                                 <div >
                 
                                </div>
              
            </div>
            <!-- Trigger -->
            <script>
                jssor_slider2_init();
            </script>
        </div>
       
       
 			 
								 
							</div>
                            </center>
						</div>
					</div>
				</div>
		 
			</section>

		<!--Availablity Section start-->
		<section class="available_wrap__block">
			<div class="available_content__block text-center">
				<div class="container">
		        <div class="row">
		            <div class="col-md-6">
		                <h2>We are served since <strong>11 years</strong> to our customer with trust and we are happy</h2>
		                <a href="#" class="btn-text mt-15">Be a part of us</a>
		            </div>
                    <div class="col-md-6">
                        <div class="counter_wrap__block text-center">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-counterup"> <i class="fa fa-trophy"></i>
                                        <p class="counterup"><span class="counter" data-count="125">0</span></p>
                                        <p>Total Award</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-counterup"> <i class="fa fa-users"></i>
                                        <p class="counterup"><span class="counter" data-count="200">0</span></p>
                                        <p>team members</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-counterup"> <i class="fa fa-smile-o"></i>
                                        <p class="counterup"><span class="counter" data-count="500">0</span></p>
                                        <p>Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
			</div>
		</section>
		<!--Availablity Section end-->

        <div id="partner-section" class="padding ptb-xs-60">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="heading-box pb-30">
								<h2><span>Our</span> Clients</h2>
								<span class="b-line l-left"></span>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<ul class="logo-group">
								<li class="partner-logo border-b">
									<img src="assets/img/client1.png" />
								</li>
								<li class="partner-logo border-b">
									<img src="assets/img/client2.png" />
								</li>
								<li class="partner-logo border-b">
									<img src="assets/img/client3.png" />
								</li>
								<li class="partner-logo border-b">
									<img src="assets/img/client4.png" />
								</li>
								<li class="partner-logo border-b border-r">
									<img src="assets/img/client5.png" />
								</li>
								<li class="partner-logo">
									<img src="assets/img/client6.png" />
								</li>
								<li class="partner-logo">
									<img src="assets/img/client7.png" />
								</li>
								<li class="partner-logo ">
								<img src="assets/img/client8.png" />
								</li>
                                <li class="partner-logo ">
								<img src="assets/img/client9.png" />
								</li>
                                <li class="partner-logo ">
								<img src="assets/img/client10.png" />
								</li>
							 
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="m"></div>
				
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
