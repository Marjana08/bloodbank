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
	<?php
		include("include/config.php");
		if(isset($_REQUEST['camp']))
			{
				$sPost=$_REQUEST['post'];

				
					$sql="insert into aboutus(aboutpost) values ('$sPost')";
					mysqli_query($conn,$sql);
					echo '<font color="green">Inserted Successfully</font>';
			}
	
	?>
	<section class="header">
		<h1>Admin Panel</h1>
		<section class="but">
			<a href="home.php"><span>Home</span></a>
			<a href="?logout=true"><span>Logout</span></a>
			<a href="..\Home.php"><span>Visit Website </span></a>
		</section>
	
	</section>
	<section class="leftsidebar">
		<h1>Post Option</h1>
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
		<section class="postdiv">
				<form action="#">
				  <input type="text" name="post"><br>
				  <input type="submit" value="Delete">
				  <input type="submit" value="Edit">
				  <input type="submit" value="Post" name="camp">
				</form> 
		</section>
		
	</section>
	<section class="footer">
		<h3>&copy; Marjana Akter</h3>
	
	</section>
	</div>
</body>
</html>