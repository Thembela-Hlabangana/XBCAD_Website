<?php

$servername="localhost";
$username="root";
$password="";
$dbname="bamlilo";

#create connection
$con = mysqli_connect($servername, $username, $password);

#check connection
if(!$con)
{
	die("Connection failed: " . mysqli_connect_error()); #die means stop trying to connect
}
else
{
	//embedded createTables form
	include('../bamlilo_website/createTable.php'); //(Mortensen, 2012)
}

#Establish DB connection
$selectDB = mysqli_select_db($con,$dbname);

if ($selectDB)
{
	#echo "<br>DB exsists";
}
else
{
	$sql = "CREATE DATABASE ".$dbname."";
	$createDB = mysqli_query($con,$sql);
	if($createDB)
	{
		include('../bamlilo_website/createTable.php'); //(Mortensen, 2012)
	}
}

#new connection with DB

$conn = mysqli_connect($servername, $username, $password, $dbname);

?>