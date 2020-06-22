<?php
	include("include/loginout.php")
?>

<!DOCTYPE html>
<html>
<head>
<link href="stylelogin.css" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
	<section class="header">
		<h1>Admin Area</h1>
		<section class="but">
			<a href="home.php"><span>Home</span></a>
			<a href="?logout=true"><span>Logout</span></a>
			<a href="..\Home.php"><span>Visit Website</span></a>
			
            			
		</section>
			
	</section>
	<section class="leftsidebar">
		<h1>Post Option</h1>
		<!-- <a href="post.php"><p>Add Post</p></a> -->
		<div class="dropdown">
		  <button class="dropbtn">Update page Post</button>
		  <div class="dropdown-content">
			<a href="home.php">Home page</a>
			<a href="aboutusp.php">About Us</a>
			<a href="stockp.php">Stock Details</a>
			<a href="vdonorreg.php">View Donor Reg.</a>
			<a href="vbloodreq.php">View Blood Req.</a>
			<a href="vcomment.php">View Comment</a>
		  </div>
		</div>
		
		
	
	
	</section>
	<section class="post">
		<img src="images/bk1.jpg">
		
	</section>
	<section class="footer">
		<h3>&copy; Marjana Akter</h3>
	
	</section>
	</div>
</body>
</html>