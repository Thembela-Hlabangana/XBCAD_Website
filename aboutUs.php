<?php
 if(isset($_POST['contact']))
    {
		 header('Location: ../bamlilo_website/contact.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
		<link rel="stylesheet" href="/bamlilo_website/css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
		<style type="text/css">
             .backimg
             {
                background: url(images/location1.jpg);
				background-position: 100% 0;
                background-attachment: fixed;
			    position: absolute;
				background-size: cover;
				width: 100%;
			    height: 100%;
             }
			 
			 a
			 {
				 text-decoration: none;
				 color: white;
			 }
			 
			 a:hover
			 {
				 color: #4B371C;
			 }
			 
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
				  color:#17304E;
				   
			  }
			  h1
			  {
				  <!--color:#17304E;-->
				  font-size: 30px;
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
				  float: left;
				 text-decoration: none;
				 padding: 5px 20px;
				 
			 }
				 
			 
			 .nav-links a:hover
			 {
					 color: #65350F;
			 }
			 
				 p, h1
				 {
					  color: white;
				 }
		</style>
	</head>
	<body>
	<center>
	<section>
		<div class="backimg">
		
		<form  method="post" action="aboutUs.php">
		<div class="right">
			
			
	
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
				
				<div class="text-box">
				<br> <br> <br><br> <br><br><br><br><br><br><br><br>
					<h1>About Us</h1><br>
					<p>Lorem Ipsum
"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p><p>
"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</p><br> <br> <br>
					 <input class="btn" name = "contact" type = "submit" value="Contact Us"/><br><br>  <!--The IIE, (2013)-->
                      
			
		
		</form>
		</div>
		</div>
</center>
</section>
</body>
</html>