<?php
//DIR to get out of the folder and to get into another folder and get into the file u want
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");

if(!authenticateUser()) {
	header("Location: " . $path . "index.php");
	die();
}
?> 

<nav>
<ul>
<!-- echo-ing out the right path to the post.php --> 
<!-- were echo ing out a string --> 
<li><a href="<?php echo $path . "post.php"?>"> Blog Post Form </a></li>
</ul>
</nav>
