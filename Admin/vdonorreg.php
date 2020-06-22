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
	include ("config.php");
	include ("Database.php");
  ?>
  <?php
	$db= new Database();
	$query= "select * from donordetails";
	$read= $db->select($query);
 ?>
	<section class="header">
		<h1>Admin Panel</h1>
		<section class="but">
			<a href="home.php"><span>Home</span></a>
			<a href="?logout=true"><span>Logout</span></a>
			<a href="..\Home.php"><span>Visit Website</span></a>
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
		
		
	
	
	</section>
	<section class="post">
		<section class="postdiv">
				<form action="#">
				  
				  <p><?php if($read){?>
					<?php while($row =$read->fetch_assoc()){?>
								
									<p><?php echo $row['fname'];?></p><br>
									<p><?php echo $row['lname'];?></p><br>
									<p><?php echo $row['eaddress'];?></p><br>
									<p><?php echo $row['pnumber'];?></p><br>
									<p><?php echo $row['bgroup'];?></p><br>
									<p><?php echo $row['weight'];?></p><br>
									<p><?php echo $row['address'];?></p><br>
									
						<?php } ?>
						 <?php } else{ ?>
						 <p>Data is not avilable !!</p>
						 <?php } ?>
						</p>
				  
				</form> 
		</section>
		
	</section>
	<section class="footer">
		<h3>&copy; Marjana Akter</h3>
	
	</section>
	</div>
</body>
</html>