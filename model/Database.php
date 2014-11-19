<?php
class Database {
	//private means u can only use it with in this file (database). 
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;
//local variables will disappear once the function is done running.
	//defines the constructor
	public function __construct($host, $username, $password, $database) {
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}
//openning a connection
	public function openConnection() {
$this->connection = new mysqli($this->$host, $this->username,$this->password);
//checks if theres an error connecting to the base
 //if error , program has to die off . 
if($this->$connection->connect_error) {
 	die("<p> Error: " . $this->connection->connect_error . "</p>");
}
	}

	public function closeConnection() {
		//checking if we have a connection , if there is info in there , the statement is true
		//checks if the variable has been set or not
		//or if there is something within the variable
		if(isset ($this->connection) ) {
			$this->connection->close();
		}
	}
//everytime we call our query function we have to call a string can be located in the variable
	public function query($string) {
		
	}
}
//we make a class to call it later on
//you can customize the behavior of that set of functions