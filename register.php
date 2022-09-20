
<?php

#declaring variables before use
$Name = ' ';
$Surname = ' ';
$Email = ' ';
$Password = ' ';
$Password1 = ' ';
$error = NULL;
#Once submit button is pressed...
if(isset($_POST['submit']))
{ 

#capturing form data-->
	$Name = $_POST['fname'];
	$Surname = $_POST['lname'];
	$Email = $_POST['email'];
	$Password = $_POST['password'];
	$Password1 = $_POST['password1'];
	
	$conn = mysqli_connect("localhost", "root", "", "bamlilo");
	
	if(empty($Name)) #(Technology World, 2018)
	{
		$error = "Username is required";#(Technology World, 2018)
	}
	if(empty($Surname)) 
	{
		$error = "Surname is required";
	}
	
	if(empty($Email)) 
	{
		$error = "Email is required";
	}
	if(empty($Password)) 
	{
		$error = "Password is required";
	}
	if(empty($Password1)) 
	{
		$error = "Password re-entry is required";
	}
	if($Password != $Password1) 
	{
		$error = "The two passwords do not match";
	}
	if(strLen($Password) < 8)
	{
		$error = "Password must be at least 8 characters long";
	} 
	
	#start pattern with /^ and end pattern with $/ ,... min 6 char, max 20 char
	$pattern = '/^?=.*[!@#$%^&*-?](?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{6,20}$/'; //(Coding Academy, 2019)
	if(preg_match($pattern,$Password))
	{
		echo "Password strength is ok.";
	}	
	else 
	{
		echo "Password not strong enough.";
	}
	#if there are no errors users will be saved to DB
	$PwordHash = md5($Password);
	$fullName = $Name.' '.$Surname;
	$drink = 10;
	$sql = "INSERT INTO Customer(NAME, EMAIL, PASSWORD, DRINKS) VALUES ('$fullName','$Email','$PwordHash', $drink)";
	if($error == NULL && mysqli_query($conn,$sql))
	{
		#redirects to login
		echo $fullName;
		header('Location: ../bamlilo_website/Login.php'); 
	}
	else
		$error = "Error, record not inserted";
}

	echo "<br>" ;
	
?> 
<!DOCTYPE html>
<html>
	<head>
		<!--<meta name"viewport" content="width=device-width, initial-scale=1.0" scale goes according to device's scale-->
		<title>Registration Page</title>
		<link rel="stylesheet" href="/css/style.css">
		<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">-->
		
		<style type="text/css">
             .backimg
             {
                background: #183043;
                background-size: 100%;
				background-position: 100% 0;
                background-attachment: fixed;
				width: 100%;
			    position: absolute;
				left: 0px;
			    height: 100%;
             }
			 
			 a
			 {
				 /*text-decoration: none;*/
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
				  color: #17304E;	
				  text-align: center;
			  }
			  h1
			  {
				  font-size: 30px;
			  }
			  input 
			 {
				 border: none;
				 border-bottom: 2px solid #17304E;
			 }
			  html
			{
				font-family: century-gothic, sans-serif;
							
			 }
			 
			 .btn
			 {
				 background: #17304E;
				 color: #FFF;
			 }
				input  <!--(w3Schools, 2021)-->
				{
				  
				  border: 0;
				  outline: 0;
				}
		</style>
	</head>
	<body>
		<form method="POST" action="register.php">
		<center>
		<br> <br> <br><br> <br> 
			<img src="images/picture1.jpg" width="150" height="150"> <!--logo-->
			
			<br><br>
			<h2 class="heading"> Register</h2> 
			<h3>Please fill in the form below:</h3>
					
		<!--<h5> Note: * indicates that you have to complete the information required on you in the box below its heading.</h5><br>-->
			<span class="output" style="color:red"><?php echo $error;?></span><br> 
		   
	   
			<div class ="table-data">
			<label>First name:</label>
				<input type = "text" name = "fname" value="<?php echo $Name;?>"/>
				<br><br>
			<label>Last name:</label>
				<input type = "text" name = "lname"  value = "<?php echo $Surname;?>"/>
				<br><br>
			<label>E-mail address:</label>
				<input type = "email" name = "email" value = "<?php echo $Email;?> "/>
				<br><br>
			<label>Password:</label>
				<input type="text" name = "password" required />
				<br><br>
			<label>Re-enter password:</label> 
				<input type="text" name = "password1" required /><br><br>
			<br><br>
			<input class="btn" name = "submit" type = "submit" value="submit"/><br><br>
		</div>
		<p>Already A Member? <a href="login.php"> Sign in</a></p>
		</center>
		
		
		</form>
	</body>
</html>