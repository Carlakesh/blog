<?php


//The require_once statement is identical to require except PHP 
//will check if the file has already been included, and if so, not include (require) it again
//whats in require once is is file that you want to load 
 require_once(__DIR__ . "/../model/config.php");
 

//checks if theres an error 
 //if error , program has to die off . 
 if($connection->connect_error) {
 	die("<p> Error: " . $connection->connect_error . "</p>");
}
//call the database 

 $exists = $connection->select_db($database);

//checking if data base excists or not 
 
if(!$exists) {
	//sends comands to data base
	$query = $connection->query ("CREATE DATABASE $database");
//checking if query is created successfully . 
if ($query) {
	//checking if data base is created
	echo "<p>successfully created a database: " . $database . "</p>";
}

}
//else statement 
// if database exists
else{
	echo "<p>datebase already exists</p>";
}

//creating a table
//Table functions 
$query = $connection->query("CREATE TABLE posts ("
	//null indicates that when ever we create a new blog post the id cant be known and id cant be empty
	//each blog post needs an id
	. "id int (11) NOT NULL AUTO_INCREMENT,"
	// storing the title 
	. "title varchar (255) NOT NULL,"
	//blog post texts 
	. "post text NOT NULL,"
	//adding primary key
	. "PRIMARY KEY (id))") ;
//1 means there are 11 values
   

//checking if statement true or false
if($query) {
	//statement is true
	echo "<p> successfully created table : posts</p>";
}
//else statement
else {
	//error statement 
	echo "<p> $connection->error </p>";
}
//connection closes . 
 $connection->close();
 
 