<?php
//session_start();
?>

<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Teacher Sign up</title>

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
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
				EDUYARD Teacher Sign up				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="">						
						<a href="login.html" class="">
							Already have an account? Login now
						</a>
						
					</li>
					<li class="">						
						<a href="index.html" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->

<!--Php Code starts-->
<?php

include 'dbcon.php';
include 'functions.inc.php'; 

if (isset($_POST['submit']))       //Details insertion on database table
	{
		$name = mysqli_real_escape_string($con,$_POST['name']);
		$phone = mysqli_real_escape_string($con,$_POST['phone']);
		$address = mysqli_real_escape_string($con,$_POST['address']);
		$username =mysqli_real_escape_string($con,$_POST['username']);
		$password =mysqli_real_escape_string($con,$_POST['password']);
		$cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

			//Password Encryption Code using Blowfish Algorithm
		$pass= password_hash($password,PASSWORD_BCRYPT);  
		$cpass= password_hash($cpassword,PASSWORD_BCRYPT);

		//user validation using phone toi avoid duplication

		$phonequery= "select * from teacher where phone='$phone' " ;
		$query= mysqli_query($con,$phonequery);

		$phonecount= mysqli_num_rows($query);

		$length = strlen($password); //if reqd in future

		if($phonecount>0)
			{
				echo "Contact already exist";
		    }
		 else
			 { 
				if($length<=7) // Minimum Character for password validation

					{   ?>

						<script>
							alert("Minimum 8 characters required");
							</script>
							<?php
					}

							else
							{
										//password validation
											if($password===$cpassword)
												{

													//insertion query
													$insertquery ="insert into teacher(name,phone,address,username, password, cpassword) values('$name','$phone','$address','$username','$pass','$cpass')";
													$iquery= mysqli_query($con,$insertquery);

													//insertion validation
													if($iquery)
													{
														?>
														<script>
															alert("insertion successful");
															</script>
															<?php 
													}

														else
														{
															?>
															<script>
															alert("insertion unsuccessful");
															</script>
																
															<?php 	
														}

												} 
											else
												{
												echo "Password not matching";
												}
								
							}
			
				}
	}
	?>
					<!-- Php Code End-->

<div class="account-container register">
	
	<div class="content clearfix">
		
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
		
			<h1>Teacher Signup </h1>			
			
			<div class="login-fields">
				
			<p>Create Teacher account:</p>
				
				<div class="field">
					<label for="name">Name:</label>
					<input type="text" id="name" name="name" value="" placeholder="Name" class="login" required />
				</div> <!-- /field -->
				
				
				<div class="field">
					<label for="phone">Phone Number:</label>	
					<input type="text" id="phone" name="phone" value="" placeholder="Phone Number" class="login" required />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="address">Address:</label>	
					<input type="text" id="address" name="address" value="" placeholder="Enter Address" class="login" required />
				</div> <!-- /field -->

				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="User Name" class="login" required />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login" required />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="cpassword">Confirm Password:</label>
					<input type="password" id="cpassword" name="cpassword" value="" placeholder="Confirm Password" class="login" required />
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" required />
					<label class="choice" for="Field">Agree with the Terms & Conditions.</label>
				</span>
									
				<button type="submit" name="submit"class="button btn btn-primary btn-large">Register</button>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Already have an account? <a href="teacher_login.php">Login to your account</a>
</div> <!-- /login-extra -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

 </html>
