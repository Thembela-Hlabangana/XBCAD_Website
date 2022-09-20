<?php
 if(isset($_POST['Back']))
{
		header('Location: ../bamlilo_website/products.php');
}	 
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Merchandise Page</title>
		<link rel="stylesheet" href="/css/style.css">
		<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">-->
		
		<style type="text/css">
			
			  *
			{
				font-family: century-gothic, sans-serif;	 
				margin: 0;
				padding: 0;
				color: white;
			 }
			 
			 body
			 {
				 margin: 0;
				 padding: 0;
				 background: #183043;
			 }
			 a
			 {
				 text-decoration: none;
			 }
			 a:hover
			 {
				 color:#65350F;
			 }
		.btn
			{
				background: #183043;
				color: white;
				border: none;
				width: 80px;
				height: 20px;	
				margin-top: 2%;
			margin-left: 3%;
			padding-right: 0.5%;
			padding-left: 0.2%;
			
		
		}
		</style>
	</head>
	
	<body>
	<form method="POST">
	<input class="btn" name = "Back" type = "submit" value="<< BACK"/><br>
		<div class="backimg">
			<section>
			<center>
			<!--Online Tutorials, 2020)-->
<br><br><br><br><br><br><br><br><br><br><br>

				<img src="images/picture2.jpg" style="width:10%"><br><br><br>
				<h1>COMING SOON!</h1><br><br>
				<h3> </h3><br><br>
				
		 </center>
		</section>
		
		</div>
		</form>
	</body>
</html>