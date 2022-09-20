
<?php
//creating tables in database
$sqla = "CREATE TABLE BEVERAGES(
BEV_ID	INT	NOT NULL	AUTO_INCREMENT, 
DESCRIPTION	VARCHAR(250) NOT NULL,
IMAGE VARCHAR(250) NOT NULL,
PRICE	DOUBLE NOT NULL,
TITLE	VARCHAR(250) NOT NULL,
CATEGORY	INT NOT NULL,
CONSTRAINT PK_BEVERAGES PRIMARY KEY (BEV_ID)
)" ;

$sqlb = "CREATE TABLE CUSTOMER(
CUSTOMER_ID	INT	NOT NULL	AUTO_INCREMENT,
NAME	TEXT	NOT NULL,
EMAIL TEXT NOT NULL,
PASSWORD	TEXT	NOT NULL,
DRINKS	INT	NOT NULL,
CONSTRAINT PK_CUSTOMER PRIMARY KEY (CUSTOMER_ID)
)";


$sqlc = "CREATE TABLE CUST_ID(
CID	INT	NOT NULL,
CONSTRAINT PK_CUSTID PRIMARY KEY (CID))";

$sqld = "CREATE TABLE QR_CODES(
CODE VARCHAR2(500) NOT NULL,
CONSTRAINT PK_QR_CODE PRIMARY KEY (CODE))";


$servername="localhost";
$username="root";
$password="";
$dbname="bamlilo";
$conn = mysqli_connect($servername, $username, $password, $dbname);

//connect to database and add tables
$createTableA = mysqli_query($conn,$sqla);
$createTableB = mysqli_query($conn,$sqlb);




?>



