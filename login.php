
<?php
$Email = ' ';
$Password = ' ';
$output = ' ';
$greet = 'hello';
$error = NULL;
#error_reporting(0); # does not display system generated errors
if(isset($_POST['Back'])) #(php,2021)
	{       
		# redirects straight to shop page
			header('Location: ../bamlilo_website/welcome.php');
	}
if(isset($_POST['Login']))
{ 
			//hashing password entered and comparing it to password in DB
			$Email = $_POST['email'];
			$Password = $_POST['password'];
			if($Email == 'admin@admin.com' && $Password == 'admin')
					{
						header('Location: ../bamlilo_website/admin.php');
					}
			#echo md5($str);
			$output=NULL;
			$conn = mysqli_connect("localhost", "root", "", "bamlilo");
			
			#check if user exists
			$sql = "Select * from Customer WHERE email = '$Email'";
		    $checkUser = mysqli_query($conn, $sql);
			
			if(mysqli_num_rows($checkUser) > 0)
			{
			//admin login credentials
			
					
			function getUserData()
			{ 
				$Email = $_POST['email'];
				$Password = $_POST['password'];
				$pwordHash = md5($Password);
				$conn = mysqli_connect("localhost", "root", "", "bamlilo");
				$query = "SELECT PASSWORD FROM Customer WHERE email = '$Email'"; #get password from DB
			    $result = mysqli_query($conn,$query);
			    $output = ' ';
				
				if(mysqli_num_rows($result) > 0) //checks num rows
				{
					while($row = mysqli_fetch_array($result))
					{
							if(!$pwordHash == $row['PASSWORD'] )
						{
							$output = "Password incorrect";
						}
						if ($pwordHash == $row['PASSWORD']) #(php,2021)
						{       
							getUserID();
						
						}
					}
				}

			}
			
			function getUserID()
			{
					#sending customer id to scanner page
					$Email = $_POST['email'];
					$conn = mysqli_connect("localhost", "root", "", "bamlilo");
					
						$sql = "SELECT CUSTOMER_ID FROM CUSTOMER WHERE EMAIL = '$Email' ";
						$query1 =  mysqli_query($conn,$sql);
						if(mysqli_num_rows($query1) > 0) //checks num rows
						{ 
							while($row1 = mysqli_fetch_array($query1))//ADDS DATA RECIEVED TO ROW1 VARIABLE
							{
								$cid = $row1["CUSTOMER_ID"];
								
								$sqlIn = "INSERT INTO CUST_ID(CID) VALUES ('$cid')";
								if(mysqli_query($conn,$sqlIn))
								{
									
									header('Location: ../bamlilo_website/loyalty.php');
									
								}
							}
							
						}
						else
						{
							$error = "We have unfortunately run into an issue, please be patient with us."; 
						}
			}
			
			
			
			
			
			if(getUserData() != NULL)
			{
				getUserID();//if user data is correct it will redirect users to home page
			}
			// if user data does not correlate to that within the database the folllowing errors will display
			if(getUserData() == NULL)
			{
				
				if(empty($Password) && empty($Email)) 
				{
					$output = "No fields can be empty";
								
				}
				
					elseif(mysqli_num_rows($checkUser) == 0)
					{
						$output = "Check login details";
					}
						elseif($Email == "")
							{
								$output = "Email cannot be empty";
							}
								elseif($Password == "")
								{
									$output = "Password cannot be empty";
								}
									else 
										header('Location: ../bamlilo_website/loyalty.php'); #no big errors are shown, therefore user can login.
										#$output = "Error 326: One or more fields in the request contain invalid data."; // if errors not listed in if's and ifelse's are found... this will display
			}
			
	}
}
?>


<!DOCTYPE html>
<html>
	<head>
		<!--<meta name"viewport" content="width=device-width, initial-scale=1.0" scale goes according to device's scale-->
		<title>Login Page</title>
		<link rel="stylesheet" href="/css/style.css">
		<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">-->
		
		<style type="text/css">
            
				body
			 {
				 background: #183043;
			 }
			 a
			 {
				 text-decoration: none;
				 color: #FFF;
			 }
			 
			 .nav-links 
			 {
				overflow: hidden;
				//position: fixed;
				width: 100%;
				 padding-left:45%;
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
				width: 80px;
				height: 20px;
				position: center;
			}
			
			.btn: hover
			{
				color: #65350F;
			}
			 
			 input[type="email"], input[type="password"]
			 {
				 text-align: center;
				 background-color: #183043;
				 border: none;
				 color: white;
				 border-bottom: 2px solid white;
			 
			 }
			 .value
			 {
				 color: white;
				 background-color:#183043;
			 }
			
		</style>
	</head>
	<body>
		
			<section>
		<body>
		<form method="POST" action="login.php" value="">
	 <input class="btn" name = "Back" type = "submit" value="<< BACK"/><br>
		<center>
		<br> <br> <br><br> <br> <br>  <br><br>
			<img src="images/picture2.jpg" width="150" height="150"> <!--logo-->
		</center>
		<span class="output" style="color:red"><?php echo $error;?></span><br> 
	
       <center>      <br> <br> 
        <h2 class="heading"> Login</h2>     <br>
		<span class="output" style="color:red"><?php echo $output;?></span><br> 
		<!--get user data for logging in-->
		<div class ="table-data">		
			<label>E-mail address:</label>
				<input type = "email" name = "email" value = "<?php echo $Email;?>"/><br><br>
			<label>Password:</label>
				<input type = "password" name = "password"/><br><br><br>
				<input class="btn" name = "Login" type = "submit" value="Login"/><br><br>
			
				<div class ="nav-links" >  <!--link to reg page-->
			<a href="register.php">Register As A User</a>
		</div>  
						
		</center>		
	</form>
	

	<center>	
	</br>	
	
		
		</section>
		
	
	</body>
</html>
