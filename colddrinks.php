<?php
$dbname = "bamlilo";
$conn = mysqli_connect("localhost", "root", "", $dbname);

#check connection
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error()); #die means stop trying to connect
}
else
{
}

$selectDB = mysqli_select_db($conn,$dbname);

if ($selectDB)
{
}
else
{
	$sql = "CREATE DB ".$dbname."";
	$createDB = mysqli_query($conn,$sql);
	if($createDB)
	{
	}
}
if(isset($_POST['Back'])) #(php,2021)
	{       
		# redirects straight to shop page
			header('Location: ../bamlilo_website/products.php');
	}
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Hot Drinks Page</title>
		<!--(Webslesson, 2016)-->
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> <!--gets data into columns--> 
      
      
		<style type="text/css">
			  
			 
			  *
			{
				font-family: century-gothic, sans-serif;	 
				
			 }
			 
			 body
			 {
				 margin: 0;
				 padding: 0;
				 background: #183043;
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
			 
		.container
		{
			<!--width: 1280px;-->
			margin: 70px auto 0;
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
		}
				 
			 .container .box
			 {
				position: relative;
				width: 300px;
				height: 300px;	
				background: #17304E;
				margin: 10px;	
				box-sizing: border-box;			
				display: inline-block;				
			 }
			 
		 .cont .box .imgBox
		{ 
			position: relative;
			overflow: hidden;
		}
		 .cont .box .imgBox img
		{
			max-width: 100%;
			transition: transform 2s;
		}
		
		.cont .box:hover .imgBox img
		{
			transform: scale(1.2);
		 }
		 .cont .box .details
		 {
			 position: absolute;
			 top: 10px;
			 left: 10px;
			 bottom: 10px;
			 right: 10px;
			 background: rgba(0,0,0,1); <!--controls darkness of box-->
			 transform scaleY(0);
			 transition:  transform 0.5s;
		 }
		 .cont .box:hover .details
		 {
			 transform: scaleY(0); <!--makes picture visible-->
		 }
		 .cont.box .details .content
		 {
			 position: absolute;
			 top: 50%;
			 transform: translateY(-50%);
			 text-align: center;
			 padding: 15px;
			 color: white;
		 }
				 
		.cont.box .details .content h2
		 {
			 margin: 0;
			 padding: 0;
			 font-size: 20px;
			 color: white; <!--  #17304E;-->
		 }
		 .cont .box .details .content p
		 {
			 margin: 10px 0 0;
			 padding: 10;
		 }
	
		</style>
	</head> 
	<br>
	 <?php
	 
	 	 if(isset($_POST['Back']))
{
		header('Location: ../bamlilo_website/products.php');
}
	 
 $sql = "SELECT * FROM beverages WHERE CATEGORY = 2;";//gets data from product table
 $conn = mysqli_connect("localhost", "root", "", "bamlilo");
  $query = mysqli_query($conn, $sql);
 ?>
 
 <body>
 <form method="POST">
 <input class="btn" name = "Back" type = "submit" value="<< BACK"/><br> <br>
 <div class="container" style="width:100%;"> <!--(Webslesson, 2016)-->
 <?php
 #$count=0;
    //Assoc. read
  if(mysqli_num_rows($query) > 0) //checks num rows
  {
	
	 while($row = mysqli_fetch_array($query))#getting data per row in the DB
	  {
		 
		
			$imgURL  = $row["IMAGE"];
			$title = $row["TITLE"];
			$desc = $row["DESCRIPTION"];
			$price = $row["PRICE"];
			
	 ?>
	
			<center>
			<div class="cont">
			<!--(Online Tutorials, 2020)-->
			<div class="col-md-4"> <!--(Webslesson, 2016)-->
				<div class="box">
					
					<div class="imgBox">
					
						<img src="<?php echo $imgURL; ?>" alt="" width="300" height="300"/>
					</div>
					<div class="details">
						<div class="content">
						
							<h2><?php echo $title; ?></h2><br>
							<h6><?php echo "From R".$price; ?></h6> <br>
							<p><?php echo $desc; ?></p>
						</div>
					</div>
				</div>
			</div>
						
		</div>
		
	</center>

  <?php 
	
	}
  }
  
  
  
		
  ?>
			
			
		
		<!--</div>-->
		</div>
		</form>
	</body>
</html>