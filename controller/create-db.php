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
 	die("Error: " . $connection->connect_error);

 }
//call the database 

 $exists = $connection->select_db($database);
//checking if data base excists or not 
if(!$exists) {
	$query = $connection->query ("CREATE DATABASE $database");
if ($query) {
	echo "successfully created a database: " . $database;
}

}

else{
	echo "datebase already exists";
}
//connection closes . 
 $connection->close();
 
