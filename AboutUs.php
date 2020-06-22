<!DOCTYPE html>
<html>
	<head>
		<title>Saver life</title>
		<link href="Style.css" rel="stylesheet"/>
	</head>
	<body>
	    <div class="wrapper">
        <?php
			include("include/config.php");
			$sql="select * from aboutus";
			  
			$data=mysqli_query($conn,$sql);
			

			?>
			
		    <?php
				include("include/header.php")
			?>
		<div class="sec_main">
		<div class="sec">
			<h2>About Us</h2>
			<!--<p>Saver Life is a voluntary institution of medical and dental students of Bangladesh, works mainly on Safe Blood Transfusion .
			Saver Life started its journey on 5th February,1977 by some medical students with the motive of doing things for humanity.
			Saver Life has become a great social icon in Bangladesh with its own activities since birth.
			In this long period, Saver Life has very successfully arranged voluntary blood donation programs. 
			
			</p>
			-->
			<?php
							
					while($arr=mysqli_fetch_array($data))
						{
						
							echo $arr['aboutpost'];
						
						}
			?>
           			
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