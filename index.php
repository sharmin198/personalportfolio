<?php
  include 'database.php';
?>
<html>
	<head>
		<title>Personal Portfolio</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="img/F.png"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		
	<nav class="navbar navbar-dark navbar-expand-md fixed-top"><!--using navbar 2 div are separated into both side that means it works as float -->
	 <!--using navbar-dark the text color will white on the background color-->
	  <div class="container">
	    <a href="#" class="navbar-brand">Sharmin Yeasmin</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navbaritem" type="button">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbaritem">
		<ul class="navbar-nav ml-auto"><!--using navbar-nav the line decoreation of li tag is removed-->
		  <li class="nav-item"><a href="#home-section" class="nav-link">Home</a></li>
		  <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
		  <li class="nav-item"><a href="#skill" class="nav-link">Skills</a></li>
		  <li class="nav-item"><a href="#service" class="nav-link">Services</a></li>
		  <li class="nav-item"><a href="#portfolio" class="nav-link">Portfolio</a></li>
		  <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
		</ul>
		</div>
	  </div>
	  
	 </nav>
	 <section id="home-section">
	  	<div class="dark-overlay">
	  		<div class="home-inner"> 
	  			<h1 class="animated slideInLeft">It's Sharmin Yeasmin</h1>
	  		
	  		<div class="animated slideInRight">
	  			<h2 class="type"></h2>
	  			<script type="text/javascript" src="js/typed.js"></script>
	  			<script type="text/javascript">
		var typed = new Typed(".type", {
        strings: ["I am a Student", "Working as a full-stack developer"],
        //smartBackspace: true // Default value
		typeSpeed: 50,
		backSpeed: 50,
		loop:true
});
		</script>
	  		</div>
	  		</div>
	  	</div>
	 </section>

	<section id="about" class="bg-light py-5 text-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6 animated slideInLeft">
					<img src="images/me.JPG" alt="photo" class="rounded" height="350px" width="350px">
				</div>
				<div class="col-md-12 col-lg-6 animated slideInRight">
					<h3 class="display-6">About Me</h3>
					<p class="lead">I am very glad that you visit my website. Welcome to my site. I am Sharmin Yeasmin. I have been studying at <a href="http://nstu.edu.bd/" target="blank">Noakhali Science & Technology University</a> on Computer Science & Telecommunication Engineering. I like to write code. Recently I am working with PHP. Webdeveloping is my passion. I have also built many animation project. I have made gif file and video using photoshop.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="skill">
		<div class="container">
			<h1 class="text-center pt-5">Skills</h1>
			<div class="row pt-3">
				
				<div class="skillbox col-md-6">
					<p>HTML5</p>
					<p>90%</p>
				<div class="skill">
					<div class="skill-level" style="width:90%"></div>
				</div>
			</div>
			<div class="skillbox col-md-6">
					<p>C</p>
					<p>90%</p>
				<div class="skill">
					<div class="skill-level" style="width:90%"></div>
				</div>
			</div>
			</div>
			<div class="row">
				
				<div class="skillbox col-md-6">
					<p>CSS3</p>
					<p>70%</p>
				<div class="skill">
					<div class="skill-level" style="width:70%"></div>
				</div>
			</div>
			<div class="skillbox col-md-6">
					<p>C++</p>
					<p>60%</p>
				<div class="skill">
					<div class="skill-level" style="width:60%"></div>
				</div>
			</div>
			</div>
			<div class="row">
				
				<div class="skillbox col-md-6">
					<p>Bootstrap</p>
					<p>50%</p>
				<div class="skill">
					<div class="skill-level" style="width:50%"></div>
				</div>
			</div>
			<div class="skillbox col-md-6">
					<p>Java</p>
					<p>60%</p>
				<div class="skill">
					<div class="skill-level" style="width:60%"></div>
				</div>
			</div>
			</div>
			<div class="row">
				
				<div class="skillbox col-md-6">
					<p>Photoshop</p>
					<p>65%</p>
				<div class="skill">
					<div class="skill-level" style="width:65%"></div>
				</div>
			</div>
			<div class="skillbox col-md-6">
					<p>PHP</p>
					<p>70%</p>
				<div class="skill">
					<div class="skill-level" style="width:70%"></div>
				</div>
			</div>
			</div>
		</div>
	</section>

	<section id="service" class="bg-light py-3 text-dark">
		<div class="container">
			<h1 class="text-center">My Services</h1>
			<div class="row">
				<div class="col-md-4">
					<div class="section-body bg rounded">
						<i class="fas fa-desktop"></i>
						<h2 >Web Design</h2>
						<p class="lead">I like to design and build a responsive web page. I have been building and designing webpage for 2 years</p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="section-body bg rounded">
						<i class="fas fa-file-code"></i>
						<h2 class="text-center">Web Development</h2>
						<p class="lead">Web developing is my passion. I like to code. Recently I have built two project with php. I also like to write a efficient code</p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="section-body bg rounded">
						<i class="fab fa-github-alt"></i>
						<h2 class="text-center">Animating</h2>
						<p class="lead">I like to make gif file, video . It's a fun. I enjoy too much by doing this.</p>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<section id="portfolio" background="#26272C">
		<div class="container">
			<div class="row py-3">
				<div class="col-md-12">
					<h1 class="text-primary">My recent works</h1>
				</div>
			</div>
		</div>
		<div class="bg-dark">
			<div class="container">
				<div class="row py-3">
				<div class="col-md-12 text-center">
					<h1>Animation</h1>
				</div>
			</div>
			<div class="row py-3">
				<div class="col-md-4">
					<img src="images/Untitled-16.gif" class="rounded" height="200px" width="250px" height="200px" width="250px">
				</div>
				<div class="col-md-4">
					<img src="images/Untitled-11.gif" class="rounded" height="200px" width="250px">
				</div>
				<div class="col-md-4">
					<img src="images/Untitled-1.gif" class="rounded" height="200px" width="250px">
				</div>
			</div>
			</div>
		</div>
		
		<div class="bg-light text-dark">
			<div class="container">
				<div class="row py-3">
				<div class="col-md-12 text-center">
					<h1>Webdesign & Webdevelopment</h1>
				</div>
			</div>
			<div class="row py-3">
				<div class="col-md-3">
					<img src="images/web1.PNG" class="rounded" height="200px" width="250px">
				</div>
				<div class="col-md-3">
					<img src="images/web2.PNG" class="rounded" height="200px" width="250px">
				</div>
				<div class="col-md-3">
					<img src="images/web3.PNG" class="rounded" height="200px" width="250px">
				</div>
				<div class="col-md-3">
					<img src="images/web4.PNG" class="rounded" height="200px" width="250px">
				</div>
			</div>
			</div>
		</div>
		
	</section>

	<section id="contact">
		<div class="container py-5">
			<h2 class="text-center">Contact Me</h2>
			<form action="" method="post">
			<div class="row mt-3 animated slideInDown">
				<div class="col-md-2"></div>
				<div class="col-md-8"><input class="form-control" type="text" name="name" placeholder="Enter your name" required=""></div>
				<div class="col-md-2"></div>
			</div>
			<div class="row mt-3 animated slideInDown">
				<div class="col-md-2"></div>
				<div class="col-md-8"><input class="form-control" type="text" name="email" placeholder="Enter your email" required=""></div>
				<div class="col-md-2"></div>
			</div>
			<div class="row mt-3 animated slideInDown">
				<div class="col-md-2"></div>
				<div class="col-md-8"><textarea class="form-control" rows="8" type="comment" name="message" placeholder="Put what is in your mind" required=""></textarea></div>
				<div class="col-md-2"></div>
			</div>
			<div class="row mt-3 animated slideInDown">
				<div class="col-md-2"></div>
				<div class="col-md-8"><input class="bg-primary btn btn-grp" type="submit" value="Submit" name="submit"></div>
				<div class="col-md-2"></div>
			</div>
			</form>
		</div>
	</section>

	<section class="footer text-dark py-5">
		<div class="row">
		<div class="col-md-12 socile my-3">
			<ul>
	    <li><a href="https://www.facebook.com/tahirn.sharmin" target="blank"><i class="fab fa-facebook-f"></i></a></li>
	    <li><a href=""><i class="fab fa-twitter"></i></a></li>
	    <li><a href="https://plus.google.com/u/0/112480586614825229621" target="blank"><i class="fab fa-google-plus-g"></i></a></li>
	    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
	    <li><a href="https://github.com/sharmin198" target="blank"><i class="fab fa-github"></i></a></li>
	  </ul>
		</div>
	</div>
	<div class="row">
		<div class="text-center col-md-12 mt-5">
            	<p>Copyright &copy; All Rights Reserved. Developed by <a href="index.html"> <span>Sharmin Yeasmin</span></a></p>
            </div>
           </div>
	</section>

	<?php
		if(isset($_POST['submit'])){
			mysqli_query($link,"insert into webtable values('','$_POST[name]','$_POST[email]','$_POST[message]')");
		?>
		<div class="alert alert-success col-lg-12 col-lg-push-0">
       Message sent successfully
    </div>
	<?php
		  }
	?>
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script>
		$(document).ready(function(){ $('a[href*=#]').click(function() { if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) { var $target = $(this.hash); $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']'); if ($target.length) { var targetOffset = $target.offset().top; $('html,body') .animate({scrollTop: targetOffset}, 1000); return false; } } }); });
	
	</script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	</body>
</html>