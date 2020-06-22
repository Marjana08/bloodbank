<?php
			session_start();

			if(isset($_SESSION['username'])){
				if(isset($_SESSION['password'])){
					header("Location: home.php");
				}
				
			}


			include("classes/loginandlogout.php");
			use App\classes\AdminLogin;
			
			$admin=new AdminLogin();

			$massage='';
			if(isset($_POST['camp'])){

			$massage=$admin->adminLogin($_POST);
			}
	?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet"  href="stylelogin.css" media="screen" />
</head>
<body>

	<div class="container">
	<div class="login_content">
		<form action="login.php" method="post">
			<h1>Admin Login</h1><br>
			<div class="un">
				<input type="text" placeholder="Username" required="" name="username"/>
				
			</div>
			<div class="un2">
				<input type="password" placeholder="Password" required="" name="password"/>
			</div >
			<div class="lon">
				<input type="submit" value="Log in" name="camp" />
			</div>
		</form>
	</div>
</div>
	<!--<section class="post">
		<section class="postdiv">
				<form action="login.php" method="post" enctype="multipart/from-data">
				  <input type="text" name="post"><br>
				  <input type="text" name="post1"><br>
				  <input type="submit" value="Delete">
				  <input type="submit" value="Edit">
				  <input type="submit" value="Post" name="camp">
				</form> 
		</section>
		
	</section>-->
</body>
</html>