<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Maker's Lab</title>
		<link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="grid">
					<figure class="effect-sadie" id="left-img">
						<img src="img/student.jpg" alt="img02"/>
						<figcaption>
							<h2>I am a <span>Learner</span></h2>
							<p>Explore the world with <br>All practical skills.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-sadie" id="right-img">
						<img src="img/teacher.jpg" alt="img14"/>
						<figcaption>
							<h2>I am a <span>Teacher</span></h2>
							<p>Offer us the skills you have <br>Help people learn better.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
			</div>
		</div><!-- /container -->
		<script>
			[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );
		</script>
	</body>
</html>