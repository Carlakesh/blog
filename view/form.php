<?php
//calling out the right path to config file 
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");

if(!authenticateUser()) {
	header("Location: " . $path . "index.php");
	die();
}

?> 
<h1> Create blog post</h1>
<!--The form tag is used to create an HTML form for user input.-->
<!-- we put method in form bracet to tell it either to send or recieve info -->
<!-- in this specific code, were telling it to send info -->
<!-- action to tell the code what to do specificly, were going to connect create-post to this file -->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>"> 
<!-- this div is for title -->
<div>
<!-- The <label> tag defines a label for an <input> element.The <label> element does not render 
as anything special for the user.  --> 
	<label for="title"> Title : </label>
	<input type="text" name="title" />
</div>
<!-- this div is for post -->
<div>
	<label for="post">Post: </label>
	<textarea name="post"></textarea>
</div>
<!--creating a submit button -->
<div>
	<button type="submit"> Submit </button>
</div>
</form>