
<!DOCTYPE html>
<html>
	<head>
		<meta name"viewport" content="width=device-width, initial-scale=1.0" <!--scale goes according to device's scale-->
		<title>Products Page</title>
			<link rel="stylesheet" href="../bamlilo_website/css/style.css">
			<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
			<style type="text/css">
          
			
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
				  color:#0F2F55;
			  }
			  h3
			  {
				  font-size: 20px;
				  color:#0F2F55;
			  }
			  h1
			  {
				  font-size: 30px;
				  color:#0F2F55;
			  }
			 .text-box
			 {
				 float: left;
				 padding-left: 15%;
				 padding-top: 10%;
			 }
			 .img-box 
			 {
			  float: left;
			  width: 25%;
			  padding: 40px;
			}
			
			.images
			{
				padding-left: 10.2%;
				width: 85%;
			}
			
			.images::after
			{
			  content: "";
			  clear: both;
			  display: table;
			}
			
			  html
			{
				font-family: century-gothic, sans-serif;	 
			}
					
			a
			 {
				 text-decoration: none;
				
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
				 color: white;
				 float: left;
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
		<br><br><br>
					<div class="nav-bar"><br>
					
					<div class="nav-links">
						<ul>
							<a href="welcome.php">HOME</a>
							<a href="aboutUs.php">ABOUT US</a>
							<a href="products.php">PRODUCTS</a>
							<a href="hours.php">HOURS</a>
							<a href="contact.php">CONTACT US</a>
						</ul>
				    </div>
			<center>	<br><br><br><br><br>
					<h1>Products</h1><br>
					<p class= "writing"> We all love coffee, but with so much variety it can be hard to choose. At Bamlilo, we are here to help guide you through the flavors and 
					<br> aromas, so you find the special taste that soothes your inner-self.</p><br><br><br>
					<!--image goes here!-->
					<div class="images">
						<div class="img-box" >
							<img src="images/hotdrink.jpg" style="width:100%" hieght="200"></a><br><br>
							<h3><a href="hotdrinks.php">Warm Drinks</a></h3><br>
							<p>Hotter Than The Summer</p>
						</div>
						<!--image goes here!-->
						<div class="img-box" >
							<img src="images/colddrink.jpg" style="width:100%" ></a><br><br>
							<h3><a href="colddrinks.php">Cold Drinks</a></h3><br>
							<p>Cooler Than The Winter</p>
						</div>
						<!--image goes here!-->
						<div class="img-box" >
							<img src="images/merch.jpg" style="width:100%"></a><br><br>
							<h3><a href="merch.php">Merchandise</a></h3><br>
							<p>Fesher Than Our Ingredients</p>
				    </div>
				</div>
			</section>
			
		<center>


		</center>
	</body>
</html>