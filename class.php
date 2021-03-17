<?php
session_start();   //session started

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Class Deatils</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">

<link rel="stylesheet" href="css1/bootstrap.min.css"/>
  <link rel="stylesheet" href="css1/bootstrap-responsive.min.css"/>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body>

<?php

include 'dbcon.php';


?>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">EDUYARD </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> <?php echo $_SESSION['name'];?> <b class="caret"></b></a>  <!--The Name of the user entered will be displayed using php session-->
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li><a href="index.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li><a href="reports.html"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
        <li><a href="guidely.html"><i class="icon-facetime-video"></i><span>App Tour</span> </a></li>
        <li><a href="charts.html"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
        <li><a href="shortcodes.html"><i class="icon-code"></i><span>Shortcodes</span> </a> </li>
        <li class="active"><a href="class.php"><i class="icon-th"></i><span>Class</span> </a> </li>-->
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="icons.html">Icons</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="pricing.html">Pricing Plans</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li>
            <li><a href="error.html">404</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Information based on Class</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<div class="tabbable">
						<ul class="nav nav-tabs">
						 
						  <!--<li  class="active"><a href="#jscontrols" data-toggle="tab">JS Controls</a></li>
						</ul>-->
						
						<br>
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal"  action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="GET">
									<fieldset>
										
                                        <div class="control-group">											
											<label class="control-label" for="radiobtns"></label>
											
                                            <div class="controls">
                                              <div class="btn-group">
                                              <a class="btn btn-primary"><i class="icon-user icon-white"></i> Select Class</a>
                                              <!--<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                              <ul class="dropdown-menu">-->

                                              <!--Code to select the class from drop down and when selected initiate function getclass() using AJAX, given below-->
                                               <select name="class_id" id="class_id" onchange="get_class('')" required>
    `                                        <option value="">Select Class</option>
                                                <?php
                                                  $res=mysqli_query($con,"select * from class");  //Display all the class present in table
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
                                                <!--End of drop Down Code-->
                                                </ul>
                                            </div>
                                              </div>	<!-- /controls -->			
										</div> <!-- /control-group -->
                           
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
								</div>
								
								<div class="tab-pane active" id="jscontrols">
									<form id="edit-profile2" class="form-vertical">
										<fieldset>
		                         
                    <!--Space inside the empty div where the result(table) of getclass.php will be displayed-->
                    <div id="class_table" class="table table-striped table-bordered">

                        </div>

											</div> <!-- /control-group -->                         
                                            
										</fieldset>
									</form>
								</div>
								
							</div>
						  
						  
						</div>
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	     

    

    
<script>
  function get_class(class_id)         //Taking class id from above and processing it via AJAX
  {
    var class_id=jQuery('#class_id').val();                 // Taking the value of class_id and passing it to getclass.php
    jQuery.ajax
    ({
      url:'getclass.php',
      type:'post',
      data:'class_id='+class_id,    //To pass the value of class_id and student_id, we took the 2 variables class_id and student_id
      success:function(result){                         //if function is sucess, we pass the result
        
        jQuery('#class_table').html(result);       //#class_table is the id of <table></table> where the result of getclass.php will be displayed
      }
    });
  }

  </script>


<script src="js/jquery-1.7.2.min.js"></script>
	
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>


</body>
</html>
