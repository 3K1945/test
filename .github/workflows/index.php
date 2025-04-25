<?php
require("auth.php");
//Used to hide any error or warning messages on the responce page (If any text other than json appear in responce it crash the app)
error_reporting(E_ERROR | E_PARSE);

//***************SELECT FROM DATABASE AND CREATE API*****************
// id = change it as per need
$t = $_GET['id'];

//Check connection was successful
  if ($conn->connect_errno) {
     printf("Failed to connect to database");
     exit();
  }
  
$s = 'SELECT * FROM apps WHERE id="*na*" ';
$sql=str_replace("*na*",$t,$s);


//Fetch 3 rows from actor table
  $result = $conn->query($sql);

//Initialize array variable
  $dbdata = array();

//Fetch into associative array
  while ( $row = $result->fetch_assoc())  {
	$dbdata[]=$row;
  }

//Print array in JSON format
 echo json_encode($dbdata);
 
?>