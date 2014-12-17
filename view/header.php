
 <!DOCTYPE html>
<html>
<head>
	<title> Blog </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/Main.css">
	<link rel="stylesheet" type="text/css" href="css/custom-style.css">
	<link href='http://fonts.googleapis.com/css?family=Salsa' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
</head>
<body>

<header>

	<nav id="navigation"> 
	<div class="navbar"> 
	<div class="containerr"> 
	<ul id="menu-menu-1" class="nav navbar-nav navbar-right navbar-fixed-top"><li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"> <a href="http://localhost/phpblog/login.php"> Log in</a></li>
<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="http://localhost/phpblog/login.php"> Log out</a></li>
<li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a> Contact</a></li>
</ul>
</div>
	</div>
	</nav>
</header>
<div class="container">
	<div class="row">
		<div id="title" class="Title col-xs-12">
			 <h1> &hearts;  Blog  &hearts; </h1> 
			</div>
		</div>
		    <div class= "col-xs-6">

			<?php 
               require_once(__DIR__ . "/../controller/read-posts.php");
			?>
		</div>
		<div id="hi" class="col-xs-4">
                        <img width="155" height="155" src="http://3.bp.blogspot.com/-qdLWyOZEh3Y/VBlalGVPA8I/AAAAAAAAAxg/WjWmvA9qMvE/s1600/FaceQ1410943240213%2B%25281%2529.png" class="attachment-post-thumbnail wp-post-image" alt="user">               
                             <h1> About me </h1>
                              <p>
                               Hello everybody! My name's Carla K. , I love to play Tennis , and Basketball and i love hearing music , and Lana Del Rey and Jhene Aiko are my fav artists , who are yours ?
                              </p>

                          </div>
               </div><!-- /row
      </div> <!-- /container -->
  </div>
</div><!-- END home-wrap -->

</div>
	</div>
</div>
	


</body>

</html>




		
 