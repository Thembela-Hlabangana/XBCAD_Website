<?php
if(isset($_POST['Back']))
{
		header('Location: ../bamlilo_website/admin.php');
}
?>

<!DOCTYPE html>
<html>

<head> <!--GeeksforGeeks, 2021-->
<!-- Include Bootstrap for styling -->
<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

<style><!--GeeksforGeeks, 2021-->
*
{
	position: fixed;
	text-align: center;
}
	.qr-code {
	max-width: 150px;
	margin: 10px;
	}
	 .btn
			{
				background: #183043;
				color: white;
				border: none;
				width: 140px;
				height: 40px;
				levt: 10%;
			}
			.btn:hover
			{
				background-color: #65350F;
				color: white;
			}
			input
			{
				text-align: center;
				width: 40%;
				 border: none;
				 border-bottom: 2px solid #17304E;
			 
			}
			
</style>

<title>QR Code Generator</title>
</head>

<body><!--GeeksforGeeks, 2021-->

<form method="POST"><br><br>
 <input class="btn" name = "Back" type = "submit" value="<< BACK"/><br>
<center>
<br><br><br><br><br><br><br><br><br><br>
<div class="container-fluid">
	<div class="text-center">

	<!-- Get a Placeholder image initially,
	this will change according to the
	data entered later -->
	<!--GeeksforGeeks, 2021-->
	<img src= 
"https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
		class="qr-code img-thumbnail img-responsive" />
	</div>

	<div class="form-horizontal">
		<div class="form-group">
			<label class="control-label col-sm-2"
			for="content">
			Content:
			</label>
			<div class="col-sm-10">

			<!-- Input box to enter the
				required data -->
				<!--GeeksforGeeks, 2021-->
				<input type="text" size="60"
					maxlength="60" class="form-control"
					id="content" placeholder="<?php 
					$today = date("l jS \of F Y h:i:s A");
					$hashedQRcode =  md5($today);
					$sql = "insert into QR_CODES (code) values ('$hashedQRcode')"; #getting users qr code
				$conn = mysqli_connect("localhost", "root", "", "bamlilo");
				$query = mysqli_query($conn, $sql);
				 
				 /*$sql1 = "DELETE FROM QR_CODES
					WHERE ts_created < DATE_ADD(NOW(),INTERVAL -2 HOUR)";
					$query1 = mysqli_query($conn, $sql1);
				
				 */
					echo $hashedQRcode; /*(w3Schools, 2021)*/
					
					?>" />
			</div>
		</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">

		<!-- Button to generate QR Code for
		the entered data -->
		<!--GeeksforGeeks, 2021-->
		<button type="button" class=
			"btn btn-default" id="generate">
			Generate
		</button>
		</div>
	</div>
	</div>
</div>
<script src=
	"https://code.jquery.com/jquery-3.5.1.js">
</script>

<!--GeeksforGeeks, 2021-->
<script>
	// Function to HTML encode the text
	// This creates a new hidden element,
	// inserts the given text into it
	// and outputs it out as HTML
	function htmlEncode(value)
	{
	return $('<div/>').text(value)
		.html();
	}

	$(function ()
	{<!--GeeksforGeeks, 2021-->

	// Specify an onclick function
	// for the generate button
	$('#generate').click(function ()
	{
		<!--GeeksforGeeks, 2021-->

		// Generate the link that would be
		// used to generate the QR Code
		// with the given data
		let finalURL =
'https://chart.googleapis.com/chart?cht=qr&chl=' +
		htmlEncode($('#content').val()) +
		'&chs=160x160&chld=L|0'

		// Replace the src of the image with
		// the QR code image
		$('.qr-code').attr('src', finalURL);
	});
	});
</script>
</center>
</form>
</body>

</html>


