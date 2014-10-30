<?php


//The require_once statement is identical to require except PHP 
//will check if the file has already been included, and if so, not include (require) it again
//whats in require once is is file that you want to load 
 require_once(__DIR__ . "/../model/database.php");
 
//data base that saves objects 
 $connection = new mysqli($host , $username, $password);

//checks if theres an error 
 //if error , program has to die off . 
 if($connection->connect_error) {
 	die("<p> Error: " . $connection->connect_error . "</p>");

 }
//call the database 

 $exists = $connection->select_db($database);

//checking if data base excists or not 
 
if(!$exists) {
	$query = $connection->query ("CREATE DATABASE $database");
//checking if query is created successfully . 
if ($query) {
	echo "<p>successfully created a database: " . $database . "</p>";
}

}
//else statement 
else{
	echo "<p>datebase already exists</p>";
}

//creating a table
//Table functions 
$query = $connection->query("CREATE TABLE posts ("
	//each blog post needs an id
	. "id int (11) NOT NULL AUTO_INCREMENT,"
	// storing the title 
	. "title varchar (255) NOT NULL,"
	//blog post texts 
	. "post text NOT NULL,"
	. "PRIMARY KEY (id))") ;
   

//checking if statement true or false
if($query) {
	echo "<p> successfully created table : posts</p>";
}
//else statement
else {
	echo "<p> $connection->error </p>";
}
//connection closes . 
 $connection->close();
 
