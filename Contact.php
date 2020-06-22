<?php
	$connect=mysqli_connect("localhost","root","","blood bank");
	$massege="";
	if(isset($_POST['btn'])){
		//echo "<pre>";
		//print_r($_POST);
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pnumber=$_POST['mnumber'];
		$subject=$_POST['subject'];
		$sql="INSERT INTO contact(name,email,mnumber,subject) VALUES('$name','email','$pnumber','$subject')";
		
		if(mysqli_query($connect,$sql)){
			$massege="inserted successfully";
		}
		else{
			die("Query problem".mysqli_error($connect));
		}
		
	}

?>



<!DOCTYPE html>
<html>
	<head>
		<title>Saver life</title>
		<link href="Style.css" rel="stylesheet"/>
	</head>
	<body>
	    <div class="wrapper"> 
		   <?php
				include("include/header.php")
			?>
		<div class="form_main">
				  <div class="contact_form" >
				  	<h2>Contact Us</h2>
					    <form action="" method="post" onsubmit="return validateform();">
					    	<div class="form_one">
						    	<label>NAME</label>
						    	<input type="text" name="name" value="">
						    </div>
						    <div class="form_two">
						    	<label>E-MAIL</label>
						    	<input type="text" name="email" value="">
						    </div>
						    <div class="form_three">
						     <label>MOBILE.NO</label>
						    	<input type="text" name="mnumber" value="">
						    </div>
						    <div class="form_four">
						    	<label>COMMENT</label>
								<input type="text" name="subject" value="">
						    	<!-- <textarea> </textarea>-->
								
						    </div>
							
						 <div class="form_five">
						   		<input type="submit" name='btn' value="SEND">
						 </div>  
					    </form>
						
						
				  </div>
				  </div>
	
		
		
        <?php
		    include("include/fotter.php")
		?>
	</div>
		
	</body>
</html>