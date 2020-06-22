<?php
	$connect=mysqli_connect("localhost","root","","blood bank");
	$massege="";
	if(isset($_POST['btn'])){
		//echo "<pre>";
		//print_r($_POST);
		$fname=$_POST['firstname'];
		$lname=$_POST['lastname'];
		$eaddress=$_POST['email'];
		$pnumber=$_POST['phoneno'];
		$bgroup=$_POST['blodgp'];
		$weight=$_POST['wght'];
		$address=$_POST['address'];
	  
		$sql="INSERT INTO donordetails(fname,lname,eaddress,pnumber,bgroup,weight,address) VALUES('$fname','$lname','$eaddress','$pnumber','$bgroup','$weight','$address')";
		
		if(mysqli_query($connect,$sql)){
			$massege="inserted successfully";
		}
		else{
			die("Query problem".mysqli_error($connect));
		}
		
	}

?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Saver life</title>
	<link href="Style.css" rel="stylesheet"/>
	<link rel="stylesheet" href="register.css" />
</head>
<body>
    <div class="wrapper">
    <?php
				include("include/header.php")
			?> 	
    <div id="wrapper">
	<div class="sec_main">
    <div class="registerbox">
	<br><br>
           
        <h1>Register</h1>
		
        <!--<form action="Home.php" method="get">-->
		<form name="registerform" action="" method="post" onsubmit="return validateform();">
		   
		   <p>Donar Details</p>
		   <input type="text" name="firstname" placeholder="First name*">
		   <input type="text" name="lastname" placeholder="Last name*">
		   <input type="text" name="email" placeholder="Email Address*">
		   <input type="text" name="phoneno" placeholder="Phone no*">
		   <input type="text" name="blodgp" placeholder="Blood Group*">
		   <input type="text" name="wght" placeholder="Weight">
		   <input type="text" name="address" placeholder="Address">
		   
		   <div style="color:#fff;font-size:20px;" id="show"> </div>
		   
           <input type="submit" name="btn" value="Submit">
        </form>
        <script>
					function validateform(){
						var firstname = document.registerform.firstname;
						var lastname = document.registerform.lastname;
						var email = document.registerform.email;
						var phoneno = document.registerform.phoneno;
						var blodgp = document.registerform.blodgp;
						var wght = document.registerform.wght;
						var address = document.registerform.address;
					
						if(firstname.value == ""){
							document.getElementById("show").innerHTML="Please Enter Your FirstName";
							return false;
						}
						if(lastname.value == ""){
							document.getElementById("show").innerHTML="Please Enter Your LastName";
							return false;
						}
						if((email.value.indexOf('@',0) < 0) || (email.value.indexOf('.',0) < 0)){
							document.getElementById("show").innerHTML="Please Enter a Valid Email Address";
							return false;
						}
						if(phoneno.value == ""){
							document.getElementById("show").innerHTML="Please Enter Your PhoneNumber";
							return false;
						}
						if(wght.value == ""){
							document.getElementById("show").innerHTML="Please put your Weight";
							return false;
						}
						if(blodgp.value == ""){
							document.getElementById("show").innerHTML="Please put your blood group";
							return false;
						}
						if(address.value == ""){
							document.getElementById("show").innerHTML="Please Enter Your Address";
							return false;
						}

					}
				</script>             
          
    </div> 
	</div>
	</div>
	<?php
		    include("include/fotter.php")
		?>	
	</div>
</body>	
</html>