<html>
	<head>
		<title>
			first app
		</title>
		<style type="text/css">
			body{
				background-color: #34495e;				

			}

			header{
				position: fixed;
				width: 100%;
				height:10%;
				margin-top: 5%;
				background-color: #3498db;
				border: solid 5px black;


			}
			.headerBar{
				float: right;
				background-image: url('img/3bar-icon.png');
				width: 60px;
				height: 60px;
				display: block;	
				margin: 10px;
				border: 0px;

			}
			footer{
				position: fixed;
				width: 100%;
				height:10%;
				bottom: 0px;
				background-color: #3498db;
			}
			
			#printHint{
				font-family: 
			}
			#phWrapper{
				text-align: center;
				width: 75%;
				margin: 0 auto;
				position: absolute;
				top: 25%;
				left: 12.5%;
				margin-left: 10%;

			}
			section{
				width: 90%;
				height: 10%;
				margin:0 auto;
				border-radius: 20px;
				border: solid 1px white;



			}
			.sectionWrap{
				position: relative;
				top: 35%;

			}
			.panel {
			    position: fixed;
			    left: -15.625em; /*left or right and the width of your navigation panel*/
			    width: 15.625em; /*should match the above value*/
			    background-color: #2c3e50;


			}
			.wrap { 
			    position: relative; 
			}
			nav li{
				list-style: none;
			}
			.menu-link{
				color: black;
				position: fixed;
				font-size: 3em;
				text-decoration: none;
				z-index: 99;

			}
			.menu-link:visited{
				color:none
			;
			}
			.menuStyle li a{
				font-size: 3em;
				color: white;
				font-family: myFirstFont;
				text-decoration: none;	
				border-bottom: solid 1px white;	
			}
			@font-face{
			font-family: myFirstFont;
			src: url(fonts/amble/Amble-Light.ttf);
			}

		</style>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
	</head>
	<body>
		<!-- Heade bar that's fixed to the top of the page .. width of 100%.. height..10%-->
		<header class="push">
			<a href="#menu" class="menu-link">&#9776;</a>
		</header>
		<div>
			<img id="phWrapper" class="push" src="img/printhint.png">
		</div>
		<nav id="menu" class="panel" role="navigation">
		    <ul class="menuStyle">
		        <li><a href="#">Home</a></li>
		        <li><a href="#">News</a></li>
		        <li><a href="#">Forums</a></li>
		        <li><a href="#">Social</a></li>
		        <li><a href="#">Contact</a></li>
		    </ul>
		</nav>
			<div class="sectionWrap push" id="wrap">	
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
				<section>
					
				</section>
			</div>

	<footer class="push">
		
			<?php echo date("Y"); ?>

		

	</footer>

		<!-- absolute position inside header bar...right and left-->
		
		<!-- Fixed position main area (container) position, 10% from top, fixed... max-height 80%-->
		
		<!-- Bottom.. fixed element... positioned 90% from top... 10% height... 100% width-->
		
		<!-- Add iScroll (bounce effect)-->

		<!-- items... delimited by a line...border-bottom-width is 2px, border-style, border-color -->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<!-- iScroll Function -->
	 	<script type="text/javascript" src="js/iscroll.js"></script>
	  	<script type="text/javascript"> 
			var thisScroll;
			function scroll() {
			    thisScroll = new iScroll('#wrap');
			}
			document.addEventListener('DOMContentLoaded', scroll, true);
		</script>
		<script src="js/jquery.big-slide.js"></script>
		<script>
		    $(document).ready(function() {
		        $('.menu-link').bigSlide();
		    });

		</script>
	</body>

	
</html>