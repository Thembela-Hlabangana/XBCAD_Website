<?php
//manages items in DB 
SESSION_START();
$bid=0;
$price="";
$title="";
$desc="";
$cat=0;
$imageURL = "../images/cold/default.jpg";
$update = false;
$servername="localhost";
$username="root";
$dbname="bamlilo";
$conn = mysqli_connect($servername, $username, "", $dbname);
	
	
	
	
if(isset($_POST['code']))
{
		header('Location: ../bamlilo_website/products.php');
}	 


if(isset($_POST['save']))
{
	$bid = $_POST['bid'];
	$title = $_POST['title'];	
	$price = $_POST['price'];	
	$desc = $_POST['desc'];	
	$cat = $_POST['cat'];	
	$sql ="INSERT INTO Beverages (description,image, price, title, category)
	VALUES ('$desc', '$imageURL', $price, '$title',$cat)";
	mysqli_query($conn, $sql); 
		
	#header('location: ../bamlilo_website/admin.php');
}
   
		
		
if (isset($_GET['edit'])) 
{
		$bid = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM BEVERAGES WHERE BEV_ID=$bid");
		if (mysqli_num_rows($record) == 1 )
		{
			$n = mysqli_fetch_array($record);
			
			$title = $n['TITLE'];
			$price = $n['PRICE'];
			$desc = $n['DESCRIPTION'];
			$cat = $n['CATEGORY'];
			$bid = $n['BEV_ID'];
		}
		else{
			echo "No data found!";
		}
	}
	
	#if user presses update, updates main attribute is posted and value is set to true
	#CodeWithAwa, 2021)
if (isset($_POST['update'])) 
	{
		$bid = $_POST['bid'];
		$title = $_POST['title'];
		$price = $_POST['price'];
		$desc = $_POST['desc'];
		$cat = $_POST['cat'];
		$sql = "UPDATE Beverages SET TITLE='$title',DESCRIPTION='$desc', PRICE='$price', CATEGORY='$cat' WHERE BEV_ID='$bid';";
		
			if( mysqli_query($conn, $sql))
			{
				$_SESSION['message'] = "Row updated!";
		      # header('location: ../bamlilo_website/admin2.php');
			}
			else{
				echo "data was not updated";
			}
		 
	}
	


//deleting product
	//(CodeWithAwa, 2021)
	if (isset($_GET['del']))
	{
		
		$bid = $_GET['del'];
		mysqli_query($conn, "DELETE FROM beverages WHERE BEV_ID=$bid");
		#header('location: ../bamlilo/admin.php');
	}
	
	//admin logout
	if(isset($_POST['Logout'])) #(php,2021)
	{       
		# redirects straight to shop page
		header('Location: ../bamlilo_website/login.php');
	}
					
	if(isset($_POST['code'])) #(php,2021)
	{       
		 # redirects straight to shop page
		header('Location: ../bamlilo_website/qrGenerator.php');
	}
			




	
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD Admin dashboard</title>
	  
	<link rel="stylesheet" type="text/css" href="css/adminStyle.css">
	<style type="text/css">
            
			 
			 a
			 {
				 text-decoration: none;
				 color:#183043;
			 }
			 *
			 {
				 color:#183043;
			 }
			 a:hover
			 {
				 color: #4B371C;
				 text-decoration: underline
			 }
			 .btn
			 {
				 background: #183043;
				 color: white;
				 display: inline-block;
				
			 }
			 .btn-group
			 {
				 width: 12%;
				 text-align: center;
				 display: flex;
				 
				 padding-top: 10px;
				justify-content: space-between;
			 }
			 
			 th, td<!--(CodeWithAwa, 2021)-->
			 {
				border: none;
				height: 30px;
				padding: 2px;
			 }
			 tr<!--(CodeWithAwa, 2021)-->
			 { 
				border-bottom: 1px solid #cbcbcb;
			}
			tr <!--(CodeWithAwa, 2021)-->
			{
				border-bottom: 1px solid #cbcbcb;
			}
			table<!--(CodeWithAwa, 2021)-->
			{
				width: 50%;
				margin: 30px auto;
				border-collapse: collapse;
				text-align: left;
			}
			
			  input 
			 {
				 border: none;
				 border-bottom: 2px solid #17304E;
			 }
			 .input-group
			 {
				 display: inline-block;
				 text-align: center;
			 }
 </style>

</head>
<body>
<center><br> 

		<!--search bar--><br>
		<form method="POST" ><!--CodeFlix, (2018)-->
		<label>Search: </label>
			<input type="text" name="search">
			<button class="btn" type="submit" name="Search" >Search</button>
		</form>

		<?php 
			if(isset($_POST['Search']))
			{
				$conn = mysqli_connect($servername, $username, "", $dbname);
				$str = $_POST["search"];
				$sqlString = "SELECT * FROM BEVERAGES WHERE TITLE LIKE '%$str%'";
				$sth = mysqli_query($conn, $sqlString);
				
				if($rows = mysqli_fetch_array($sth))
				{ 
		?>
					<br><br>
					<table>
						<thead>
		<tr>
			<th>Product Name</th>
			<th>Description</th>
			<th>Price</th>
			
			<th colspan="2">Action</th>
		</tr>
	</thead>
	

	<tr>
			<td><hr></hr><?php
				echo $rows['TITLE'];
			 ?>
			 </td>
			 <td><hr></hr><?php
				echo $rows['DESCRIPTION'];
			 ?>
			 </td>
			<td><hr></hr>
			<?php 
				echo $rows['PRICE'];
			?>
			</td>
	
			<td><hr></hr>
			<!--sending values to specific page-->
				<a href="admin.php?edit=<?php
					echo $rows['BEV_ID']; ?>" class="edit_btn"  >Edit</a>
			</td>
			<td><hr></hr>
				<a href="admin.php?del=<?php
				echo $rows['BEV_ID'];?>" class="del_btn">Delete</a>
			</td>
		</tr>
		
					</table>
		<?php
					
				}
				else
				{
					echo "Item does not exist.";
				}
			}
		?>
<br>
		<input type="hidden" name="bid" value="<?php echo $bid; ?>">
		
		<div class="input-group"><br><br>
			<label>Product Name:</label>
			<input type="text" name="title" value="<?php echo $title; ?>">
		</div>
		<div class="input-group"><br>
			<label>Product Price:</label>
			<input type="number" step="0.01" name="price" value="<?php echo $price; ?>">
		</div>
		<div class="input-group"><br>
			<label>Product Description:</label>
			<input type="text" name="desc" value="<?php echo $desc; ?>">
		</div>
		<div class="input-group"><br>
			<label>Category:</label>
			<input type="number" step="1" name="cat" value="<?php echo $cat; ?>">
		</div>
		<div class="input-group"> <br>
			<?php if ($update == true): ?>
				<button class="btn" type="submit" name="update"  >update</button>
			<?php else: ?>
				<button class="btn" type="submit" name="save" >Save</button>
			<?php endif ?>
		</div>
		
		

	
	</form>

<?php $results = mysqli_query($conn, "SELECT * FROM Beverages");
 ?>
<br><br>
	<center> <!--logout and QR code btn's-->
		<div class="btn-group">
			<form method="POST" action="login.php">
				<button class="btn" type="submit" name="Logout" >Logout</button>
			</form>
			<form method="POST" action="admin.php" >
				<button class="btn" type="submit" name="code" >QR CODE</button>
			</form>
		<div>
	</center>
	<br><br>
<table>
	<thead>
		<tr>
			<th>Product Name</th>
			<th>Description</th>
			<th>Price</th>
			
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) 
	{
		  
		?>
	<tr>
			<td><hr></hr><?php
				echo $row['TITLE'];
			 ?>
			 </td>
			 <td><hr></hr><?php
				echo $row['DESCRIPTION'];
			 ?>
			 </td>
			<td><hr></hr>
			<?php 
				echo $row['PRICE'];
			?>
			</td>
	
			<td><hr></hr>
			<!--sending values to specific page-->
				<a href="admin.php?edit=<?php
					echo $row['BEV_ID']; ?>" class="edit_btn"  >Edit</a>
			</td>
			<td><hr></hr>
				<a href="admin.php?del=<?php
				echo $row['BEV_ID'];?>" class="del_btn">Delete</a>
			</td>
		</tr>
		
	<?php } ?>
</table>
	

	
	<!--w3schools, 2021-->
	<br>
	</center>
	</form>
</body>
</html>