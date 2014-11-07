<?php
require_once(__DIR__ . "/../model/database.php");
//connection variable database
$connection = new mysqli($host , $username, $password, $datebase);
//storing the text into a variable , input is to filter the input making sure no errors with the input.
// Input post is to send the info to us so we can recieve it.
//Sanatize string is to make sure no errors are going on
// the code is to receive the info 
	$title = filter_input(INPUT_POST, "title" , FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST , "post" , FILTER_SANITIZE_STRING);
//echo to see if the steps above are working correctly .
echo "<p>Title : $title </p>";
echo "<p>Post : $post </p>";

$connection->close(); 