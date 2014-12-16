<?php
//calling out the right path to config file 
require_once(__DIR__ . "/../model/config.php");
?> 

<h1> Login </h1>

<form  method="post" action="<?php echo $path . "controller/login-user.php"; ?>">
    <div> 
        <!-- creates a space for the user's username -->
        <label for="username"> Username: </label>
        <input type="text" name="username" />
    </div>

    <div> 
        <!--creates a space for the user's password -->
        <label for="password"> Password: </label> 
        <input type="password" name="password" />
    </div>

    <div>
        <!-- creates a submit button --> 
        <button type="submit"> Submit: </button>
    </div>
</form>
