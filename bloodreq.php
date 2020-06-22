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
		$hname=$_POST['hosp'];
		$disease=$_POST['Disease'];
		$beg=$_POST['Beg'];
		$sql="INSERT INTO bloodreq(fname,lname,eaddress,pnumber,bgroup,weight,address,hospitalname,disease,beg) VALUES('$fname','$lname','$eaddress','$pnumber','$bgroup','$weight','$address','$hname','$disease','$beg')";
		
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
           
        <h1>Request for Blood</h1>
		
        <!--<form action="Home.php" method="get">-->
		<form name="registerform" action="" method="post" onsubmit="return validateform();">
		   <span><?php echo $massege; ?></span>
		   <p>Patient Details</p>
		   <input type="text" name="firstname" placeholder="First name*">
		   <input type="text" name="lastname" placeholder="Last name*">
		   <input type="email" name="email" placeholder="Email Address*">
		   <input type="number" name="phoneno" placeholder="Phone no*">
		   <input type="text" name="blodgp" placeholder="Blood Group*">
		   <input type="text" name="wght" placeholder="Weight">
		   <input type="text" name="address" placeholder="Address">
		   <input type="text" name="hosp" placeholder="Hospital">
		   <input type="text" name="Disease" placeholder="Disease">
		   <input type="text" name="Beg" placeholder="Beg Entity">
		   
		   
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
						var hosp = document.registerform.hosp;
						var Disease = document.registerform.Disease;
						var Beg = document.registerform.Beg;
					
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
						if(hosp.value == ""){
							document.getElementById("show").innerHTML="Please Enter Your Hospital";
							return false;
						}
						if(Disease.value == ""){
							document.getElementById("show").innerHTML="Please Enter Your Disease";
							return false;
						}
						if(Beg.value == ""){
							document.getElementById("show").innerHTML="Please Enter Your BegEntity";
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