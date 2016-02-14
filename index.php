<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Nidhi Patel Portfolio">
		<meta name="author" content="Nidhi Patel">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		<title>Nidhi G. Patel</title>
		<link rel="shortcut icon"  href="img1.jpg">
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<style>
			.item img{
				width:100%;
			}
		</style>
	</head>
	<body>
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class= "collapse navbar-collapse navHeaderCollapse nav-justified">
					<ul class="nav nav-pills nav-justified">
						<li><a href="#">Home</a></li>
						<li><a href="#profile">Profile</a></li>
						<li><a href="#education">Education</a></li>
						<li><a href="#skills">Skills</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div id="slider" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slider" data-slide-to="0" class="active"></li>
					<li data-target="#slider" data-slide-to="1"></li>
					<li data-target="#slider" data-slide-to="2"></li>
					<li data-target="#slider" data-slide-to="3"></li>
					<li data-target="#slider" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner" role="listbox" >
					<div class="item active">
						<img src="img2.jpg">
					</div>
					<div class="item">
						<img src="img3.jpg">
					</div>
					<div class="item">
						<img src="img4.jpg">
					</div>
					<div class="item">
						<img src="img5.jpg">
					</div>
					<div class="item">
						<img src="img6.jpg">
					</div>
				</div>
				<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				</a>
				<a class="right carousel-control" href="#slider" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				</a>
			</div>
		</div>
	</body>
</html>