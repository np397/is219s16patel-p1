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
			.container h2{
				text-align:center;
				color:#9B9B8C;
			}
			.container p{
				color:#575748;
				font-size:15px;
			}
			#profile img{
				width:230px;
				height:275px;
			}
			#education{
				background-color:#F7F7F7;
			}
			#contact{
				background-color:#F7F7F7;
			}
			#skills img{
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
		<br>
		<br>
		<br>
		<br>
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
						<div class="carousel-caption">
							<h1>Nidhi Patel</h1>
							<h5>UI/FrontEnd Developer</h5>
						</div>
					</div>
					<div class="item">
						<img src="img3.jpg">
						<div class="carousel-caption">
							<h1>Nidhi Patel</h1>
							<h5>UI/FrontEnd Developer</h5>
						</div>
					</div>
					<div class="item">
						<img src="img4.jpg">
						<div class="carousel-caption">
							<h1>Nidhi Patel</h1>
							<h5>UI/FrontEnd Developer</h5>
						</div>
					</div>
					<div class="item">
						<img src="img5.jpg">
						<div class="carousel-caption">
							<h1>Nidhi Patel</h1>
							<h5>UI/FrontEnd Developer</h5>
						</div>
					</div>
					<div class="item">
						<img src="img6.jpg">
						<div class="carousel-caption">
							<h1>Nidhi Patel</h1>
							<h5>UI/FrontEnd Developer</h5>
						</div>
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
		
		<div class="container" id="profile">
			<h2>Personal Profile</h2>
			<hr>
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1">
					<img src="img7.jpg" class="img-rounded">
				</div>
				<div class="col-sm-7">
					<br><br>
					<p>Hello, and welcome! My name is Nidhi Patel and I am a junior at <a href="http://www.njit.edu/">NJIT</a>.
					   I am currently pursuing a Bachelor's of Science Degree in Information Technology with a concentration 
					   in web development. As a self motivated person, I enjoy living a goal oriented life. Challenges and opportunities 
					   always catch my attention because I love exploring new fields. I consider myself as a self
					   starter with ability to work independently and enthusiasm to work with a team in a 
					   fast-paced environment. 
					</p>
					<br>
					<p>I enjoy going on adventurous trips with my friends and family. Going on hikes is 
					   my favourite stress relieving activity.Other than travelling and hiking, I like bowling, playing 
					   Badminton, cooking and coding.</p>
				</div>
			</div>
			<br>
		</div>
			<div class="container" id="education">
			<h2>Education</h2>
			<hr>
				<div class="col-sm-5">
					<h4><a href="http://www.njit.edu/">New Jersey Institute of Technology, Newark NJ</a></h4>
					<p><b>Bachelor of Science - Information Technology</b>
					<br>(Specialization: Web Applications)
					<br>Expected Graduation Date: May 17, 2017
					</p>
				
				</div>
				<div class="col-sm-4">
					<h4><a href="http://www.middlesexcc.edu/">Middlesex County College, Middlesex NJ</a></h4>
					<p><b>Associate in Applied Science - Computer and Information Systems(Highest Honors)</b>
					   <br>Graduated in May 2015
					   <br>GPA: 3.7/4.0
					</p>
					<ul>
						<li>Windows/PC Support Certificate (Highest Honors)</li>
						<li>Java & Web Programming Certificate (Highest Honors)</li>
						<li>Network Administration Certificate (Highest Honors)</li>
						<li>Java Programming Certificate (Highest Honors)</li>
						<li>Highest Academic Achievement Award for Network Administration</li>
						<li>Highest Academic Achievement  Award for Java Programming</li>
					</ul>
				</div>
				<div class="col-sm-3">
					<h4><a href="http://phs.piscatawayschools.org/">Piscataway High School</a></h4>
					<p>Graduated in 2013</p>
				</div>
			<br>
		</div>
		
		<div class="container" id="skills">
			<h2>Skills</h2>
			<hr>
			<div class="container">
				<div class="col-sm-3 col-xs-12">
					<img src="css.jpg" class="img-rounded">
				</div>
				<div class="col-sm-3">
					<img src="html.jpg" class="img-rounded">
				</div>
				<div class="col-sm-3">
					<img src="bootstrap.jpg" class="img-rounded">
				</div>
				<div class="col-sm-3">
					<img src="java.jpg" class="img-rounded">
				</div>
			</div>
			<br>
			<div class="container">
				<div class="col-sm-3">
					<img src="javascript.jpg" class="img-rounded">
				</div>
				<div class="col-sm-3">
					<img src="ajax.jpg" class="img-rounded">
				</div>
				<div class="col-sm-3">
					<img src="php.jpg" class="img-rounded">
				</div>
				<div class="col-sm-3">
					<img src="sql.jpg" class="img-rounded">
				</div>
			</div>
			<br>
			<div class="container">
				<div class="col-sm-3">
					<img src="visualbasic.jpg" class="img-rounded">
				</div>
				<div class="col-sm-3">
					<img src="linux.jpg" class="img-rounded">
				</div>
				<div class="col-sm-3">
					<img src="unix.jpg" class="img-rounded">
				</div>
				<div class="col-sm-3">
					<img src="windows.jpg" class="img-rounded">
				</div>
			</div>
			<br>
		</div>
		
		<div class="container" id="contact">
			<h2>Contact</h2>
			<hr>
			<div class="col-sm-4 col-sm-offset-5">
			<p class="glyphicon glyphicon glyphicon-envelope" aria-hidden="true">
			Email: np397@njit.edu
			</p>
			<p class="glyphicon glyphicon glyphicon-phone" aria-hidden="true">
			Phone: 111-222-3333
			</p>		
		</div>
	</body>
</html>