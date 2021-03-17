<?php

include 'dbcon.php';
include 'functions.inc.php'; //contains imp functions

if(isset($_POST['submit'])) { //on clicking register


  $name=get_safe_value($con,$_POST['name']); //get safe value is stored in function.inc.php
   $roll_no=get_safe_value($con,$_POST['rollno']);
   $address=get_safe_value($con,$_POST['address']);
   $phone=get_safe_value($con,$_POST['phone']);
   $guardian=get_safe_value($con,$_POST['guardian']);
   $class=get_safe_value($con,$_POST['class']);
   //$date = date('Y-m-d h:i:s');

      mysqli_query($con,"insert into student(name,roll_no,address,phone,guardian,class_id) values('$name','$roll_no','$address','$phone','$guardian','$class')");

         }


?>



<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Student Signup </title>

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
				Eduyard Admin Template				
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



<div class="account-container register">
	
	<div class="content clearfix">
		
		<form  method="post">
		
			<h1>Signup student </h1>			
			
			<div class="login-fields">
				
				<p>Enter student data:</p>
				
				<div class="field">
					<label for="firstname">Name:</label>
					<input type="text" id="name" name="name" value="" placeholder="Name" class="login" required />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="lastname">Roll no:</label>	
					<input type="text" id="rollno" name="rollno" value="" placeholder="Roll no" class="login" required />
				</div> <!-- /field -->
				
				
				<div class="field">
					<label for="email">Address:</label>
					<input type="text" id="address" name="address" value="" placeholder="address" class="login" required/>
				</div> <!-- /field -->

				<div class="field">
					<label for="email">Phone:</label>
					<input type="text" id="phone" name="phone" value="" placeholder="phone number" class="login" required/>
				</div> <!-- /field -->

				<div class="field">
					<label for="email">Guardian name:</label>
					<input type="text" id="guardian" name="guardian" value="" placeholder="Guardian name" class="login" required/>
				</div> <!-- /field -->
				<div class="field">
					<label for="class">Class:</label>
					<select name="class" id="class">
    <option>select class
                              </option>
                              <?php

                              $res = mysqli_query($con,"select * from class order by name asc");
                             while($row=mysqli_fetch_assoc($res))

                             {
                              if($row['id']==$class_id)
                              {
                                 echo "<option  selected value =".$row['id'].">".$row['name']."</option>";

                              }
                              else
                              {
                                 echo "<option value =".$row['id'].">".$row['name']."</option>";

                              }
                             }
                              
                              
                              ?>


                               </select>
				</div> <!-- /field -->

				
				
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" required/>
					<label class="choice" for="Field">Agree with the Terms & Conditions.</label>
				</span>
									
				<button class="button btn btn-primary btn-large" name="submit" type="submit"
				>Register</button>

				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Already have an account? <a href="login.html">Login to your account</a>
</div> <!-- /login-extra -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>
<script src="js/custom.js"></script>

</body>

 </html>
