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
	$query= "select * from stock1";
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
		</div>
		
		
	</section>
	
<table>
 <tr>
	<th width="20%">Blood Group</th>
	<th width="65%">Available Blood</th>
	
 </tr>
 <?php if($read){?>
 <?php while($row =$read->fetch_assoc()){?>
 <tr>
	<td Style="text-align:center;border:1px solid black;"><?php echo $row['bloodgroup'] ?></td>
	<td Style="text-align:center;border:1px solid black;"><?php echo $row['available'] ?></td>
	<td Style="text-align:center;border:1px solid black;"><button><a style="text-decoration:none;color:red;font-size:20px;" href="supdate.php?id=<?php echo urlencode($row['id']);?>">Edit</a></button></td>
 </tr>
 <?php } ?>
 <?php } else{ ?>
 <p>Data is not avilable !!</p>
 <?php } ?>
 

 </table><br>
 <button style="margin-left:20px;background-color:white;"><a style="text-decoration:none;color:green;font-size:20px;" href="screate.php">Add Post</a></button>
 
	<section class="footer">
		<h3>&copy; Marjana Akter</h3>
	
	</section>
	</div>
</body>
</html>