<?php

include 'dbcon.php';

/* php Code to display unchanged details as per Database by passing id*/

$id=$_GET["id"];            
$name="";
$phone="";
$address="";
$username="";
$res=mysqli_query($con,"select * from teacher where id=$id");
while($row=mysqli_fetch_array($res))
{
    $name=$row['name'];
    $phone=$row['phone'];
    $address=$row['address'];
    $username=$row['username'];
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Teacher Details</title>
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
    

<div class="container">

<div class="account-container register">
	
	<div class="content clearfix">
		
		<form action="" method="POST">
		
			<h1>Edit Details </h1>			
			
			<div class="login-fields">
				
				
				<div class="field">
					<label for="name">Name:</label>
					<input type="text" id="name" name="name"  class="login" value="<?php echo $name;?>" required />
				</div> <!-- /field -->
				
				
				<div class="field">
					<label for="phone">Phone Number:</label>	
					<input type="text" id="phone" name="phone"   class="login" value="<?php echo $phone;?>" required />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="address">Address:</label>	
					<input type="text" id="address" name="address" class="login" value="<?php echo $address; ?>" required />
				</div> <!-- /field -->

				<div class="field">
					<label for="username">Username:</label>
					<input type="text" id="username" name="username"  class="login"value="<?php echo $username; ?>" readonly/>
				</div> <!-- /field -->
				
				
			</div> <!-- /login-fields -->
			
			
									
				<button type="submit" name="submit"class="button btn btn-primary btn-large">Update</button>
				
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
</div>
<?php
 if(isset($_POST['submit']))   //update query
 {
    mysqli_query($con,"update teacher set name='$_POST[name]',phone='$_POST[phone]',address='$_POST[address]' where id=$id");
    ?>

<script>
  alert ("Record Update Successfully");
    </script>

    <?php
 }

?>
</body>
</html>