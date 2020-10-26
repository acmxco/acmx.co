<?php
 // extract the filename
 $title = basename($_SERVER['SCRIPT_FILENAME'], '.php');// $file is set to "index"
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8" />
 	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 	<title><?php echo $title?> - acmx.co</title>
 	<!-- Mobile Specific Meta -->
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<!-- Favicon-->
 	<link href="assets/14.jpg" rel="shortcut icon" type="image/x-icon">
 	<link rel="stylesheet" href="Content/css/magnific-popup.css">
 	<link rel="stylesheet" href="Content/css/jquery-ui.css">
 	<link rel="stylesheet" href="Content/css/owl.carousel.min.css">
 	<link rel="stylesheet" href="Content/css/owl.theme.default.min.css">
 	<link rel="stylesheet" href="Content/css/lightgallery.min.css">   
 	<link rel="stylesheet" href="Content/css/cards.css">   
 	<link href="Content/css/mainstyle.css" rel="stylesheet">          
 	<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
 	<link rel="stylesheet" href="Content/css/simple-lightbox.css">
 </head>

 <style>
 	.tw {
 		background: url(assets/images/Travel/Taiwan/123A3856-2.jpg) no-repeat;
 		background-position: center; 
 		background-repeat: no-repeat;
 		background-size: cover;
 	}
 	.tm {
 		background: url(assets/images/Travel/Tioman/123A6845-Edit.jpg) no-repeat;
 		background-position: center; 
 		background-repeat: no-repeat; 
 		background-size: cover;
 	}
 	.jp{
 		background: url(assets/images/Travel/Japan/000023890028.jpg) no-repeat;
 		background-position: center; 
 		background-repeat: no-repeat; 
 		background-size: cover;
 	}

 </style>

 <?php include "header.php"?>
 <body>  

 	<script>
 		document.getElementById("nav<?php echo $title?>").style.color = "grey";
 	</script>
 	<main class="mainclass" id="main-collapse">
 		<div class="top"></div>
 		<!-- Add your site or app content here -->
 		<div class="row">
 			<div class="flex-container">
 				<a href="./Taiwan">
 					<div class="card tw">
 						<div class="thumbnail">
 						</div>
 						<div class="caption">
 							<h4>Taiwan</h4>
 							<p>2018</p>	
 						</div>
 					</div>
 				</a>
 			</div>
 			<div class="flex-container">
 				<a href="./Tioman">
 					<div class="card tm">
 						<div class="thumbnail">
 						</div>
 						<div class="caption">
 							<h4>Tioman Island</h4>
 							<p>2018</p>	
 						</div>
 					</div>
 				</a>
 			</div>
 			<div class="flex-container">
 				<a href="./Japan">
 					<div class="card jp">
 						<div class="thumbnail">
 						</div>
 						<div class="caption">
 							<h4>Japan</h4>
 							<p>2016</p>	
 						</div>
 					</div>
 				</a>
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