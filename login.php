<?php
session_start();  //session started
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Login </title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>

	<?php

		include 'dbcon.php';  //Database connection

		//Details fetch from user
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];

			//validation query starts

			//username validation
			$user_search = "select * from admin where username='$username' ";
			$query = mysqli_query($con,$user_search);

			$username_count = mysqli_num_rows($query); //check if the username is found in the database table

			if($username_count)   //if found
			{
				$user_pass = mysqli_fetch_assoc($query);  //fetching password of the same user using this function

				$db_pass = $user_pass['password'];      // taking the same password in variable db_pass

				$_SESSION['name']=$user_pass['name']; //saving the username for future reference

				$pass_decode = password_verify ($password, $db_pass);  //decoding hashed password by checking if the entered password matches the hashed password db_pass

				if($pass_decode)
				{
					echo "Login Successful";
					?>
					<script>
						location.replace("index.php")
						</script>
					<?php
				}
				else
				{
				echo "Password Incorrect";
				}
			} 
			else{
				echo "Invalid Username";
		    }
		}

     ?>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
				EDUYARD			
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="signup.php" class="">
							Don't have an account?
						</a>
						
					</li>
					
					<!--<li class="">						
						<a href="index.html" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>
						
					</li>-->
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">  <!--htmlentities function is used to do query in same page-->
		
			<h1>Member Login</h1>		
			
			<div class="login-fields">
				
				<p>Please provide your details</p>
				
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="User Name" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in</label>
				</span>
									
				<button type="submit" name="submit" class="button btn btn-success btn-large">Log In</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->



<div class="login-extra">
	<a href="#">Reset Password</a>
</div> <!-- /login-extra -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>
