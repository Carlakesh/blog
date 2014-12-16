<?php

require_once(__DIR__ . "/controller/login-verify.php");
//calls the file that you want 
//DIR to get out of the folder and to get into another folder and get into the file u want
require_once(__DIR__ . "/view/header.php");

//connects 
if (authenticateUser()) {
    //accessing the navigation file from the view file
    require_once(__DIR__ . "/view/navigation.php");
}
//accessing the file create-db from the folder controller 
require_once(__DIR__ . "/controller/create-db.php");

require_once(__DIR__ . "/controller/read-posts.php");
//accessing footer.php
require_once(__DIR__ . "/view/footer.php");
?> 

