<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
		<link rel="stylesheet" href="/bamlilo_website/css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--icon library-->
		<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">-->
		<style type="text/css">
             
			
			 .btn
			{
				background-color: #0F2F55;
				color: white;
				border: none;
				width: 140px;
				height: 40px;
			}
			 
			  *
			  {
				  color: #183043;
			  }
			  h1
			  {
				  font-size: 30px;
			  }
			 .gmap_iframe
			 {
				width: 100%;
				height: 10%;				
			 }
			   .footer
			{
				width: 100%;
				background-color: #183043;
				color: white;
				padding-top: 1px;
				padding-bottom:1px;
			}
			h6
			{
				font-size: 16px;
				color:White;
				text-align: center;
			}
			
			<!--(w3schools, 2021)-->
			.fa:hover
			{
				opacity: 0.7;
			}
			.fa-facebook 
			{
			  padding-right: 1px;
			  color: white;
			  font-size:16px;
			}

			.fa-twitter 
			{
			  padding-right: 1px;
			  color: white;
			}
			
			.fa-instagram 
			{
			  color: white;
			}
				   html
			{
				font-family: century-gothic, sans-serif;	 
			 }
			 
			a
			 {
				 text-decoration: none;
				 color: white;
			 }
			 
			 .nav-links 
			 {
				background-color: #17304E;
				overflow: hidden;
				position: fixed;
				width: 100%;
				 padding-left:5%;
			 }
			 
			 .nav-links a
			 {
				 padding-right: 10%;
				 text-align: center;
				 text-decoration: none;
				 padding: 5px 20px;
				 
			 }
			 
			 .nav-links a:hover
			 {
					 color: #65350F;
			 }
		</style>
	</head>
	<body>
		<div class="backimg">
			<div class="nav-bar"><br><br>
					
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
		<form  method="post" action="contact.php">
		<div class="right">
			<center>
			
				<br> <br><br> <br><br><br><br>
				<div class="text-box">
					<h1>Contact Us</h1><br>
					<p>494 Hilda St. Hatfield, Pretoria, South Africa</p><br> 
					<p>bamlilo@gmail.com</p><br> <br><br> <br>
					
					<iframe class="gmap_iframe"  frameborder="0" style="border:0;" allowfullscreen=""  src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=494 Hilda street, Hatfield, Pretoria&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="100%"></iframe>
				
                      
			
			</center>
		</form>
		</div>
		<center><br> <br><br> <br><br> <br>
		
		  <div class="footer">
		<!--  (w3schools, 2021)-->
			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-instagram"></a>
            <h6>&copy; 2021 by Bamlilo Coffee co. </h6>
			</center>
          </div>
		</div>
</center>
</body>
</html>