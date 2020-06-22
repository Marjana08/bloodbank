<!DOCTYPE html>
<html>
	<head>
		<title>Saver life</title>
		<link href="Style.css" rel="stylesheet"/>
	</head>
	<body>
	<div class="wrapper"> 
		    <?php
				include ("Admin/config.php");
				include ("Admin/Database.php");
				include("include/header.php")
			?>
			<?php
				$db= new Database();
				$query= "select * from stock1";
				$read= $db->select($query);
			 ?>
		<div class="sec_main">
		<div class="sec">
			
			<p>A Community of Voluntary Blood Donors of Bangladesh</p>
			<h2>STOCK DETAILS<h2>
			
			<table style="width:100%">
			  <tr>
				<th>Blood Group</th>
				<th>Avilable beg</th> 
	<?php if($read){?>
				<?php while($row =$read->fetch_assoc()){?>				
			  </tr>
			  <tr>
				<td><?php echo $row['bloodgroup'] ?></td>
				<td> <?php echo $row['available'] ?></td>				
			  </tr>
			  <?php } ?>
			 <?php } else{ ?>
			 <p>Data is not avilable !!</p>
			 <?php } ?>
			 
			</table>
					
		</div>
		<div>
		    <form class="searchbar">
						<input type="text">
						<br>
						<br>
						<input type="submit"value="Search">
            </form> 
		</div>
        <?php
		    include("include/slider.php")
		?>
        </div> 		
		
		<?php
		    include("include/fotter.php")
		?>
	</div>
		
	</body>
</html>