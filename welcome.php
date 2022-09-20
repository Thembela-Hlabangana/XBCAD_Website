<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<!--<meta name"viewport" content="width=device-width, initial-scale=1.0" scale goes according to device's scale-->
		<title>Welcome Page</title>
		<link rel="stylesheet" href="/css/style.css">
		<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">-->
		
		<style type="text/css">
             .backimg
             {
                background: url(images/coffee1.jpg);
                background-size: 50%;

				background-position: 100% 0;
                background-attachment: fixed;
				width: 50%;
			    position: absolute;
				left: 0px;
			    height: 100%;
             }
			 .right
			 {
				background: #183043;
				width: 50%;
				position: absolute;
			    right: 0px;
		        height: 100%;
			 }
			 a
			 {
				 text-decoration: none;
				 color: #17304E;
			 }
			 
			 .nav-links 
			 {
				background-color: white;
				overflow: hidden;
				//position: fixed;
				width: 100%;
				 padding-left:5%;
			 }
			 
			 .nav-links a
			 {
				 float: left;
				 text-align: center;
				 text-decoration: none;
				 padding: 5px 20px;
				 
			 }
				 
			 
			 .nav-links a:hover
			 {
				 color: #65350F;
			 }
			 
			  *
			  {
				  color:white;
			  }
			  h1
			  {
				  font-size: 30px;
			  }
			 
			  html
			{
				font-family: century-gothic, sans-serif;	 
			 }
			  .btn
			{
				background: white;
				color: #183043;
				border: none;
				width: 120px;
				height: 30px;
			}
		</style>
	</head>
	<body>
		<div class="backimg">
		
			<section class="welcome">
		<nav> <br><br>
					<a href="welcome.php"></a>
					<div class="nav-links">
					<!--<i class="fa fa-times"></i>-->
						<ul>
							<a href="welcome.php">HOME</a>
							<a href="aboutUs.php">ABOUT US</a>
							<a href="products.php">PRODUCTS</a>
							<a href="hours.php">HOURS</a>
							<a href="contact.php">CONTACT US</a>
						</ul>
				    </div>
				</nav>
		</div>
		<form  method="post" action="welcome.php">
		<div class="right">
			<center>
			<section class="header"> <br><br><br><br><br><br><br><br><br> <!--making sure text and logo do not touch top of page-->
				<img src="images/picture2.jpg" width="150" height="150"> <!--logo-->
				
				<div class="text-box"><br><br>
				
					<h1>Welcome to Bamlilo</h1>
					<p>We know that coffee makes the world go round, that is why Bamlilo Coffee co. is prioritizing your beverage needs.</p>
					<p>With our wide range of hot and cold drinks, there is soemthing for everyone on our menu. </p>
					<p>Caffeine has been known to improve energy levels and reaction times,</p>
					<p>	improve physical performance, contain essensial nutrients, and much more.</p>
					
					<br>
					<h3> So why not join the queue, and grab a cup or two, of your favourite hot or cold brew?</h3><br>
					
					 <input class="btn" name = "sign-in" type = "submit" value="Sign-In"/>
			</section>
			</center>
		</form>
		</div>
		
		
	
		<?php
			 if(isset($_POST['sign-in']))
    {
		 header('Location: ../bamlilo_website/login.php');
	}
		?>
		
	</body>
</html>