<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>work made easy</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Corp Active Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

	<!-- //web-fonts -->
	
</head>

<body>

<!-- header -->
<?php include('header.php');?>
<!-- //header -->

<!-- inner page banner -->
<section class="inner-page-banner">
	
</section>
<!-- inner page banner -->

<!-- breadcrumb -->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="index.php">Home</a>
	</li>
	<li class="breadcrumb-item active">Contact</li>
</ol>
<!-- //breadcrumb -->
	
<!-- contact -->
<section class="contact py-5">
	<div class="container-fluid pt-lg-5">
		<div class="row contact-grids">
			<div class="col-lg-4 col-12 mb-lg-0 mb-sm-4 mb-3 team_grid1">
				<h1 class="heading text-uppercase">Contact Us</h1>
				<p>Contact us for the best professional outsource data entry services in India. </p>
				<p class="second_para"> Data entry and Captcha solving work is easily available online in India. This is the easiest type of freelance work that anybody can perform. </p>
			</div>
			<div class="col-lg-4 col-md-6 contact-form p-5">
				<h4 class="heading">send us a message</h4>
				<form action="#" method="post">
						<input type="text" placeholder="Full Name" name="name" required>
						<input type="email" placeholder="Your Mail" name="mail" required>
						<input type="text" placeholder="Mobile Number" name="number" required>
						<textarea placeholder="Message" name="message"required></textarea>
						<div class="submit1">
							<input type="submit" name="submit" value="send">
						</div>
				</form>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-0 mt-4 map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d167998.10803373056!2d2.2074740643680624!3d48.85877410312378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1488168816174"></iframe>
			</div>
		</div>
	</div>
</section>
<!-- //contact -->

<!-- contact bottom -->
<section class="gallery-bottom py-5">
	<div class="container">
		<div class="row partner-grids">
			<div class="col-md-9">
				<h2>In need of projects</h2>
				<p>Neque porro Neque porro quisquam est quisquam est. Neque porro quisquam Neque porro.</p>
			</div>
			<div class="col-md-3 text-align">
				<a href="project.php">Projects </a>
			</div>
		</div>
	</div>
</section>
<!-- //contact bottom -->

<!-- Partners -->
<section class="partners py-5">
	<div class="container">
		<div class="row partner-grids text-center">
			<div class="col-sm-2 col-4">
				<a href="#"><i class="fab fa-angrycreative"></i></a>
			</div>
			<div class="col-sm-2 col-4">
				<a href="#"><i class="fab fa-apper"></i></a>
			</div>
			<div class="col-sm-2 col-4">
				<a href="#"><i class="fab fa-apple-pay"></i></a>
			</div>
			<div class="col-sm-2 col-4">
				<a href="#"><i class="fab fa-aviato"></i></a>
			</div>
			<div class="col-sm-2 col-4">
				<a href="#"><i class="fab fa-aws"></i></a>
			</div>
			<div class="col-sm-2 col-4">
				<a href="#"><i class="fab fa-amazon-pay"></i></a>
			</div>
		</div>
	</div>
</section>
<!-- //Partners -->

<!-- footer -->
<?php include('footer.php');?>

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	

	<!-- tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
	</script>
	<!--//tabs-->
	
	<!-- for-Testimonials -->
	<!-- required-js-files-->
	<link href="css/owl.carousel.css" rel="stylesheet">
		<script src="js/owl.carousel.js"></script>
			<script>
		$(document).ready(function() {
		  $("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		  });
		});
		</script>
	<!--//required-js-files-->
	<!-- //for-Testimonials -->

	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->

</body>
</html>