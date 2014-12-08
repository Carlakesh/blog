<?php


//The require_once statement is identical to require except PHP 
//will check if the file has already been included, and if so, not include (require) it again
//whats in require once is is file that you want to load 
 require_once(__DIR__ . "/../model/config.php");

//creating a table
//Table functions 
$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
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
	//there is two double quotes that is being used, and thats an issue
	//had to cuncatinate 
	echo "<p>".  $_SESSION["connection"]->error . " </p>";
}

 //creating a new query and checking if it is successful .
//want to store the result into the variable , were using session connection 
//cause thats where our connection is stored , and creating a table
$query = $_SESSION["connection"]->query("CREATE TABLE users ("
//id for the user
. "id int(11) NOT NULL AUTO_INCREMENT," 
. "username varchar(30) NOT NULL,"
. "email varchar(50) NOT NULL,"
. "password char(128) NOT NULL,"
. "salt char(128) NOT NULL,"
. "PRIMARY KEY (id))");

//checking if query is working properly or not
 if($query) {
echo "<p> Successfully created table: users </p>";
}
else {
echo "<p>" . $_SESSION["connection"]->error . "</p>";
}