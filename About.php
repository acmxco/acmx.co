<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>About - acmx.co</title>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link href="assets/14.jpg" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="Content/css/magnific-popup.css">
	<link rel="stylesheet" href="Content/css/jquery-ui.css">
	<link rel="stylesheet" href="Content/css/owl.carousel.min.css">
	<link rel="stylesheet" href="Content/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="Content/css/lightgallery.min.css">   
	<link href="Content/css/mainstyle.css" rel="stylesheet">          
	<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
	<link rel="stylesheet" href="Content/css/simple-lightbox.css">

</head>
<style>

	@media(min-width:800px){
		.top {
			position:fixed;
			top:0;
			float:left;
			width:100%;
			height:10vh; 
			background-color: #fff;
			z-index: 1;
		}
		.row{
			padding:15em;
			padding-left:5em;
			padding-bottom: 3em;
			text-align:justify
		}
		.message{
			margin-left:4em;
			line-height:1.5em;
		}
		.row img{
			padding-top:2em;
		}

	}
	@media(max-width:700px){

		.grid{
			margin-top:0;
		}
		.message{
			padding-left:50px!important;
			padding-right:50px!important;
			padding-bottom: 50px!important;
			text-align:justify
		}
	}
	.grid{
		padding-bottom: 5em;
	}
	.row p{
		font-size:12px!important;
	}
	p a{
		display: inline;
		color: #333;
		text-decoration: none;
		font-size: 12px;
		line-height: 1.6em;
	}

</style>

<?php include "header.php"?>
<body>  
	<script>
		document.getElementById("navAbout").style.color = "grey";
	</script>
	<main class="mainclass" id="main-collapse">
		<div class="top"></div>
		<!-- Add your site or app content here -->
		<div class="row">
			<div class="col-xs-12 col-md-1">
			</div>
			<div class="col-xs-12 col-md-4">
				<img class="img-responsive" alt="" src="assets/Profile.JPG">
			</div>
			<div class="col-xs-12 col-md-6 message">
				<h2>About</h2>
				<br>
				<h5 style="text-transform: uppercase;">The Lazy Prefectionist | 1998</h5>
				<br>
				<p><i>"Happiness is all I seek, do what you want in life. Love yourself and be grateful for everything"</i></p>
				<p>Portrait and lifestyle photographer based in Singapore. Behind the camera since 2011, still learning in progress</p>
				<p>Capturing those ordinary moment of what my eyes see and share with everyone my little world looks like. Aside of photography, I love knitting, art & crafts, tidying & decorating my house, explore & travel around</p>
				<p>By the way, I'm proud to present to you, the product of 5 years of studies in Business Information System, the main reason why I decided to purse in IT. It took bits of procrastination, redesign and rethink, due to this perfectionist soul. Hope you guys like it cause I love a lot!</p>
				<hr>
<!-- 				<p>You can reach out to me at: </p>
 -->				<br>
 				<div class="col-xs-12 col-md-6">
					<p>Email:</p>
					<p><a href="mailto:samnotalive@gmail.com" target="_blank">acmx.co@gmail.com</a></p>
					<br>
				</div>
				<div class="col-xs-12 col-md-6">
					<p>Instagram:</a></p>
					<p><a href="https://www.instagram.com/acmx.co">@acmx.co</a> | <a href="https://www.instagram.com/fleeemie">@fleeemie<a></p>
					</div>
				</div>
			</div>

		</main>
		<script src="Content/js/simple-lightbox.js"></script>
		<script type="text/javascript" src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src="Content/js/jquery-3.3.1.min.js"></script>
		<script src="Content/js/jquery-migrate-3.0.1.min.js"></script>
		<script src="Content/js/jquery-ui.js"></script>
		<script src="Content/js/popper.min.js"></script>
		<script src="Content/js/bootstrap.min.js"></script>
		<script src="Content/js/owl.carousel.min.js"></script>
		<script src="Content/js/jquery.magnific-popup.min.js"></script>
		<script src="Content/js/picturefill.min.js"></script>
		<script src="Content/js/lightgallery-all.min.js"></script>
		<script src="Content/js/jquery.mousewheel.min.js"></script>
		<script src="Content/js/main.js"></script>
		<script>
			document.addEventListener("DOMContentLoaded", function (event) {
				masonryBuild();
			});
			(function() {
				var $gallery = new SimpleLightbox('.grid-item a', {close:true,preloading:true,widthRatio:0.7,heightRatio:0.8,scaleImageToRatio:true,disableScroll:true,showCounter:false});
			})();
		</script>
	</body>
	</html>