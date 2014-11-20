<?php
// accessing the right path
$path = "/blog/";

// '$' are variables , strings next to it are stored into the variable 
$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

//creating new database object
$connection = new Database($host,$username,$password,$database);