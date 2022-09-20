<?php

	error_reporting(0);
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
				 background:#183043;
				 color: white;
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
				left: 20%;
		
		}
		 input
			 {
				 color: #183043;
				 text-align: center;
			 }
		</style>
	</head>
	
	<body>
	<form method="POST" action="loyalty.php">
		
		
			
			<input class="btn" name = "Back" type = "submit" value="<< BACK"/><br>
			<center><br><br><br><br><br>
			<!--Online Tutorials, 2020)-->
			<br><br>

				<?php 
				
				
						
				$sql = "SELECT * FROM CUST_ID;"; #getting users id
				$conn = mysqli_connect("localhost", "root", "", "bamlilo");
				$query = mysqli_query($conn, $sql);
				if(mysqli_num_rows($query) > 0)
				{
				while($result = mysqli_fetch_array($query)) 
				{ 
					
					$cid = $result["CID"]; #total drinks
					
					$sql = "SELECT DRINKS FROM CUSTOMER WHERE CUSTOMER_ID = '$cid';";
					$conn = mysqli_connect("localhost", "root", "", "bamlilo");
					$query1 = mysqli_query($conn, $sql);
					
					while($res = mysqli_fetch_array($query1)) 
					{ 
						$drinks = $res["DRINKS"]; #total drinks
						
								
						if(isset($_POST['Back']))
						{
						#DELETING ID CURRENTLY IN TEMP Table 
							$cid = $_GET['del'];
							mysqli_query($conn, "DELETE FROM CUST_ID");
							#header('location: ../bamlilo/admin.php');
			
							header('Location: ../bamlilo_website/welcome.php');
						}
						
						
						
					
							if(isset($_POST['submit'])) #if user clicks submit link...
						{
							$userCode = $_POST['qrCode'];
							
							$sql2 = "SELECT * FROM QR_CODES"; #getting users qr code
							$conn = mysqli_connect("localhost", "root", "", "bamlilo");
							$query2 = mysqli_query($conn, $sql2);
							
							if(mysqli_num_rows($query2) > 0)
							{ 
									if($userCode == '' || $userCode == null )#if user has purchased 10 drinks they are notified that they may recieve an 11th free
									{  
														
										?>
										<img src="images/bamlilo_logo.jpg" style="width:10%"><br><br><br>
										<h1>Please enter a valid code</h1><br><br>								
										<?php
									}	
								while($code = mysqli_fetch_array($query2)) 
								{  										
										
									
									#if QR code entered matches one in DB and drink is not 0, it'll decrement 1 from drink total
								 if($code['CODE'] == $userCode && $drinks!==0)
									{
										
										$drinks = $drinks - 1;
										#echo $code['CODE']."drinks".$drinks."ID".$cid;
										$sql = "UPDATE CUSTOMER SET DRINKS = '$drinks' WHERE CUSTOMER_ID = '$cid';";
										$conn = mysqli_connect("localhost", "root", "", "bamlilo");
										$query = mysqli_query($conn, $sql);
										
										
										$sql5 = "DELETE FROM QR_CODES WHERE CODE = '$code'"; #getting users qr code
										mysqli_query($conn, $sql5);
							
						
						#qrData(); #displays updated data for user once a QR code is entered
							
				?>


				<img src="images/bamlilo_logo.jpg" style="width:10%"><br><br><br>
				<h1>YOU NEED TO BUY - <?php echo $drinks;?> - MORE DRINKS</h1><br>
				<h1>BEFORE YOU CAN CLAIM A FREE DRINK</h1><br><br>
			<?php 
			
			if($drinks < 1)#if user has purchased 10 drinks they are notified that they may recieve an 11th free
			{  
											
				$drinks = 10;
				$sql3 = "UPDATE CUSTOMER SET DRINKS = '$drinks' WHERE CUSTOMER_ID = '$cid';";
				$conn1 = mysqli_connect("localhost", "root", "", "bamlilo");
				$query3 = mysqli_query($conn1, $sql3);
												
				if(mysqli_num_rows($query3) > 0)
				{
				?>
				
					<img src="images/bamlilo_logo.jpg" style="width:10%"><br><br><br>
					<h1>YOU NEED TO BUY - <?php echo $drinks;?> - MORE DRINKS</h1><br>
					<h1>BEFORE YOU CAN CLAIM A FREE DRINK</h1><br><br> 											
				<?php
			}
			
											}
							
									} 
							
								
								}
							}
							
						
						
	
						}
						
						
						
						}
					}
					
				}
					
			
			?>
				
				<?php 
				
				/*function qrData()
				{
					if(isset($_GET['linkVar']))
					{	
						echo "hello";
						$userCode = $_GET['linkVar'];
						$sql2 = "SELECT * FROM QR_CODES"; #getting users qr code
						$conn = mysqli_connect("localhost", "root", "", "bamlilo");
						$query2 = mysqli_query($conn, $sql2);
						if(mysqli_num_rows($query2) > 0)
						{
							while($code = mysqli_fetch_array($query2)) 
							{ 
								/*for($t == 0; $t < mysqli_query($query); $t++)
								{/*/
									#if QR code entered matches one in DB and drink is not 0
									/*if($code['code'] == $userCode && $drinks!==0)
									{
										$drinks = $drinks - 1;
										$sql = "UPDATE QR_CODES SET DRINKS = '$drinks' WHERE CUSTOMER_ID = '$cid';";
										$conn = mysqli_connect("localhost", "root", "", "bamlilo");
										$query = mysqli_query($conn, $sql);
									}
									if($drinks == 0)
									{
										$sql = "UPDATE QR_CODES SET DRINKS = 10 WHERE CUSTOMER_ID = '$cid';";
										$drinks = "You qualify for a free drink";
										$conn = mysqli_connect("localhost", "root", "", "bamlilo");
										$query = mysqli_query($conn, $sql);
									}
										
							}
						}
						else
						{
							echo "System Error";
						}
					}
				}*/
				?>
				 <br><br><br>
	  <label>Enter code manually:</label>
		<input type="text" name="qrCode" value="" id="qrCode"><br>
		<input class="btn" name = "submit" type = "submit" value="submit"/>
		<br><br><br><!--if code entered is correct, user deducts 1 from drinks needed to get free item -->
	 <!-- <h4><a href="loyalty.php?linkVar">Submit</a></h4><br>-->
				</form>
	</body>
</html>