<?php
//calling the right file
require_once(__DIR__ . "/../model/config.php");

//storing the text into a variable , input is to filter the input making sure no errors with the input.
// Input post is to send the info to us so we can recieve it.
//Sanatize string is to make sure no errors are going on
// the code is to receive the info 
	$title = filter_input(INPUT_POST, "title" , FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST , "post" , FILTER_SANITIZE_STRING);
//see if query runs successfully , establish query to database
	//using single quote on the title to make sure it was being sent, its a string thats being stored
$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'") ;
//checking if a true value is stored within query 
//if its true
if($query) {
echo "<p> Successfully inserted post: $title </p> ";
}

else{
	echo "<p> $connection->error </p>";
}
