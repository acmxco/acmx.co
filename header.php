<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="keywords" content="acmx.co, ACMX.CO">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="assets/14.jpg">
	<!-- CSS -->
	<link href="Content/css/mainstyle.css" rel="stylesheet">
	<link href="Content/css/untitled.css" rel="stylesheet">
	
	<!-- Bootstrap core -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- Javascripts -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<style>

	html{
		letter-spacing: 1.5px;
	}

	.navbar-toggle {
		float: right;
		margin-right: 0!important;

	}
	.navbar-default{
		padding:3em;
	}
	.social-wrap{
		padding-top:5em;
	}

	/* Web */
	@media(min-width:770px){
		.sidebar{
			top:7em;
			padding-top: 7em;
		}
		.social-wrap{
			bottom:20em;
		}
		.site-brand{
			padding-top:5em;
			font-weight: 700;
		}
		.sidebar{
			padding:4em;
			width:260px;
		}


	}

	@media(max-width:1024px){
		.sidebar{
			top:7em;
			width:220px;
			padding-top: 7em;
		}
		.social-wrap{
			bottom:25em;
		}
		.site-brand{
			padding-top:11em;
			font-weight: 700;
		}
		

	}

	/* Ipad */
	@media(max-width:768px){
		.site-brand{
			padding-top:3em;
			font-weight: 700;
		}
		.sidebar{
			top:8%;
			padding-top: 5em;
		}
		.social-wrap{
			bottom:15em;
		}
		.sidebar{
			padding:4em;
			width:240px;
		}
		
	}
	/* Mobile */
	@media(max-width:700px){
		.site-brand{
			padding-top:11em;
			font-weight: 700;
		}
		.sidebar{
			top:13%;
			width:220px;
			padding-top: 7em;
		}
		.social-wrap{
			bottom:10em;
		}
		.navbar{
			margin-bottom:0;
			height: 11em;
			min-height: 0;
		}
		.sidebar{
			padding:4em;
			width:240px;
		}

	}

	@media(max-width:600px){
		.mlogo{
			width:20%;
			margin-top:-10%;
		}
	}
	@media(max-width:380px){
		.mlogo{
			width:20%;
			margin-top:-3.5em;
		}
	}
	@media(min-width:305px){
		.img-responsive{
			padding: 0px 2em 2em 2em;
		}

	}
	.fa-icon{
		size:2em;
		color:##424242!important;
	}
	.nav{
		margin-bottom: 5em;
	}
	.nav >li >a{
		font-size:12px;
		line-height: 1.4em;
	}

	p{
		font-size:10px;
	}
	.logo{
		width:60%;
	}
	.mlogo{
		width:20%;
	}
	a:hover{
		color:#a3a3a3!important;
	}
	.footer {
		position:fixed;
		bottom:0;
		width:100%;
		height:10vh; 
		background-color: #fff;
		z-index: 1;  /* Height of the footer */
	}
	
	.sidebar {
		margin-top: 15px;
		overflow:visible!important;
	}

	.sidebar ul {
		list-style: none;
	}

	.sidebar ul a {
		display: block;
		color: #333;
		text-decoration: none;
		font-size: 12px;
		line-height: 1.6em;
	}


	.sidebar ul li.current-menu-item {
		background: #ddd;
	}

/*	.sidebar ul li:hover{
		background:#f6f6f6
		}*/
		.sidebar ul ul {
			display: none;
			position: absolute;
			top: 100%;
			left: 0;
			background: #fff;
			padding: 0;
		}

		.sidebar ul ul li {
			float: none;
			padding-left:2em;
			margin-left:-2.5em;	
			width:max-content;
		}

		.sidebar ul ul a {
			line-height: 120%;
			padding: 10px 15px;
		}

		.sidebar ul ul ul {
			top: 0;
			left: 100%;
		}

		.sidebar ul li:hover > ul {
			display: block;
		}

		.copyright{
			font-size:9px!important;
		}
	</style>
</head>
<body> 
	<div id="wrapper">
		<div class="navbar navbar-default visible-xs">
			<button type="button" class="navbar-toggle collapsed">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="./Home" class="navbar-brand animate__fadeIn">
				<img class="mlogo" src="assets/43.png">
			</a>
		</div>

		<nav class="sidebar">
			<div class="navbar-collapse" id="navbar-collapse">
				<div class="site-header hidden-xs">
					<a class="site-brand" href="./Home" title="">
						<img class="logo" src="assets/43.png">
					</a>
					<p></p>
				</div>
				<ul class="nav">
					<li><a href="./Portrait" id="navPortrait" title="">Portrait</a></li>
					<li><a href="./Landscape" id="navLandscape" title="">Landscape</a><li>
						<li><a href="./Travel" id="navTravel" title="">Travel</a>
							<ul class="ddltravel" x-placement="right-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(100px, 0px, 0px); z-index:1;">

								<!-- <li><a href="./Taiwan" id="navTaiwan" title="">Taiwan, 2018</a></li>
								<li><a href="./Tioman" id="navTioman" title="">Tioman, 2018</a></li>
								<li><a href="./Japan" id="navJapan" title="">Japan, 2016</a></li>
 -->

							</ul>
						</li>
						<li><a href="./35mm" id="nav35mm" title="">35mm</a></li>
<!-- 						<li><a href="./Wedding.php" id="navWedding" title="">Wedding</a></li>
-->						<li><a href="./Work" id="navWork" title="">Work</a></li>
<!-- 						<li><a href="./Video.php" id="navFilm" title="">Film</a></li>
-->						<li><a href="./About" id="navAbout" title="">About</a></li>

</ul>

<nav class="social-wrap">
	<p class="">
		<a href="mailto:samnotalive@gmail.com" target="_blank" class="sqs-svg-icon--wrapper email fa-icon social-link">
			<i class="far fa-envelope"></i>
		</a>
		<a class="fa-icon social-link" href="https://www.instagram.com/" title="">
			<i class="fab fa-instagram"></i>
		</a>
		<a class="fa-icon social-link" href="https://twitter.com/" title="">
			<i class="fa fa-twitter"></i>
		</a>
	</p>
	<p class="copyright">© ACMX.CO, 2020 <br> All rights reserved. </p> 
	<p class="copyright">Made with <!-- &#x2661;  -->my fat fingers </p>
</nav>  
</div> 
</nav>
</header> 
</div> 
</body>
<div class="footer">
</div>
<script src="Content/js/jquery-3.3.1.min.js"></script>
<script src="Content/js/jquery-migrate-3.0.1.min.js"></script>
<script src="Content/js/jquery-ui.js"></script>
<script src="Content/js/popper.min.js"></script>
<script src="Content/js/bootstrap.min.js"></script>
<script src="Content/js/main.js"></script>
<script>
	var dropdown = document.getElementsByClassName("ddltravel");
	var i;

	for (i = 0; i < dropdown.length; i++) {
		dropdown[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var dropdownContent = this.nextElementSibling;
			if (dropdownContent.style.display === "block") {
				dropdownContent.style.display = "none";
			} else {
				dropdownContent.style.display = "block";
			}
		});
	}
	document.addEventListener("DOMContentLoaded", function (event) {
		navbarToggleSidebar();
		navActivePage();
	});
</script>
<script type="text/javascript" src="Content/js/main.85741bff.js"></script></body>
</html>
