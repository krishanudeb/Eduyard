<?php

include 'dbcon.php';
include 'functions.inc.php'; //contains imp functions


include 'top.inc.php'; // contasins top nav bar etc.


$msg='';





?>




<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>View Marks</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

   


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

<body>


    



    
<div class="subnavbar">

  <div class="subnavbar-inner">
  
    <div class="container">

      <ul class="mainnav">
      
        <li>
          <a href="index.html">
            <i class="icon-dashboard"></i>
            <span>Dashboard</span>
          </a>              
        </li>
        
        
        
        <li>
          <a href="reports.html">
            <i class="icon-list-alt"></i>
            <span>Reports</span>
          </a>            
        </li>
        
        <li>          
          <a href="guidely.html">
            <i class="icon-facetime-video"></i>
            <span>App Tour</span>
          </a>                    
        </li>
                
                
                <li>          
          <a href="charts.html">
            <i class="icon-bar-chart"></i>
            <span>Charts</span>
          </a>                    
        </li>
                
                
                <li class="active">         
          <a href="shortcodes.html">
            <i class="icon-code"></i>
            <span>Shortcodes</span>
          </a>                    
        </li>
        
        <li class="dropdown">         
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-long-arrow-down"></i>
            <span>Drops</span>
            <b class="caret"></b>
          </a>  
        
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

    </div> <!-- /container -->
  
  </div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
    
    
=======



?>





    
 <link rel="stylesheet" href="css/custom.css">   


<div class="main">
  
  <div class="main-inner">

      <div class="container">
  
        <div class="row">
          
          <div class="span12">          
            
            <div class="widget ">
              
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3>View Marks</h3>
            </div> <!-- /widget-header -->
          
          <div class="widget-content">


            <div class="tabbable">
            <ul class="nav nav-tabs">
              <li>
                <a href="#Class_Wise" data-toggle="tab">Class Wise</a>
              </li>
              <li  class="active"><a href="#jscontrols" data-toggle="tab">Student Wise</a></li>

              </li>
              <li  ><a href="#rank" data-toggle="tab">Rank</a></li>
              <li  ><a href="#analysis" data-toggle="tab">analysis</a></li>
            </ul>
            
            <br>
            
              <div class="tab-content">
                <div class="tab-pane" id="Class_Wise">
                
            
            <div class="control-group">                     
                      <select name="class_id" id="class_id" onclick="get_marks('')" required>
    <option value="">select class
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
                    </div> <!-- /control-group -->
            
            
                <body>
    <div class="container2" id="table" name="name">
      <h2>please select class to get marks</h2>
      <!--<table>
        <thead>
          <tr >

            
            
          <tr>  
        </thead>
        <tbody>
          <tr>
            <td>01</td>
            <td>Ali</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            <td>95</td>
          </tr>
          <tr>
            <td>02</td>
            <td>Salman</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            <td>95</td>
          </tr>
          <tr>
            <td>03</td>
            <td>Shan</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            <td>95</td>
          </tr>
          <tr>
            <td>04</td>
            <td>Aliyan</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            <td>95</td>
          </tr>
          <tr>
            <td>05</td>
            <td>Zeeshan</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            <td>95</td>
          </tr>
        </tbody>
        <!-- footer 
        <tfoot>
          <tr>
            <td colspan=3>Maximum Marks: </td>
            <td colspan=3>Marks Obtained: </td>
            <td colspan=2>Grade: </td>
          </tr>
        </tfoot> footer ends
      </table>-->
    </div>
  </body>
          </div>
                
                <div class="tab-pane active" id="jscontrols">

                  <div class="control-group">                     
                      <select name="class_id2" id="class_id2" onchange="get_rollno('')" required>
    <option value="">select class
                              </option>
                              <?php

                              $res2 = mysqli_query($con,"select * from class order by name asc");
                             while($row2=mysqli_fetch_assoc($res2))

                             {
                              if($row['id']==$class_id2)
                              {
                                 echo "<option  selected value =".$row2['id'].">".$row2['name']."</option>";

                              }
                              else
                              {
                                 echo "<option value =".$row2['id'].">".$row2['name']."</option>";

                              }
                             }
                              
                              
                              ?>


                               </select>      
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="student_id">Roll no</label>
                      <div class="controls">
                       <div class="form-group">
                              
                              <select class=" form-control" name="student_id" id="student_id" onclick="get_marks2('')" required>
                              <option>select Roll no
                              </option>
                              


                               </select> </div>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
            
            
                <body>
    <div class="container3" id="table2" name="table2">
      <h2>please select class and Roll no to get marks</h2>
      <!--<table>
        <thead>
          <tr >

            
            
          <tr>  
        </thead>
        <tbody>
          <tr>
            <td>01</td>
            <td>Ali</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            <td>95</td>
          </tr>
          <tr>
            <td>02</td>
            <td>Salman</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            <td>95</td>
          </tr>
          <tr>
            <td>03</td>
            <td>Shan</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            <td>95</td>
          </tr>
          <tr>
            <td>04</td>
            <td>Aliyan</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            <td>95</td>
          </tr>
          <tr>
            <td>05</td>
            <td>Zeeshan</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            <td>95</td>
          </tr>
        </tbody>
        <!-- footer 
        <tfoot>
          <tr>
            <td colspan=3>Maximum Marks: </td>
            <td colspan=3>Marks Obtained: </td>
            <td colspan=2>Grade: </td>
          </tr>
        </tfoot> footer ends
      </table>-->
    </div>
  </body>


                </div>  


                <div class="tab-pane" id="rank">

                  <div class="control-group">                     
                      <select name="class_id3" id="class_id3"  required>
    <option value="">select class
                              </option>
                              <?php

                              $res2 = mysqli_query($con,"select * from class order by name asc");
                             while($row2=mysqli_fetch_assoc($res2))

                             {
                              if($row['id']==$class_id2)
                              {
                                 echo "<option  selected value =".$row2['id'].">".$row2['name']."</option>";

                              }
                              else
                              {
                                 echo "<option value =".$row2['id'].">".$row2['name']."</option>";

                              }
                             }
                              
                              
                              ?>


                               </select>      
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="student_id">Term</label>
                      <div class="controls">
                       <div class="form-group">
                              
                              <select name="term_id" id="term_id" required onclick="get_rank('')" >
    <option value="">select term
                              </option>
                              <?php

                              $res = mysqli_query($con,"select * from term");
                             while($row=mysqli_fetch_assoc($res))

                             {
                              if($row['id']==$term_id)
                              {
                                 echo "<option  selected value =".$row['id'].">".$row['name']."</option>";

                              }
                              else
                              {
                                 echo "<option value =".$row['id'].">".$row['name']."</option>";

                              }
                             }
                              
                              
                              ?>


                               </select>   </div>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
            
            
                <body>
    <div class="container4" id="table3" name="table3">
      <h2>please select class and Roll no to get marks</h2>
      <!--<table>
        <thead>
          <tr >

            
            
          <tr>  
        </thead>
        <tbody>
          <tr>
            <td>01</td>
            <td>Ali</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            <td>95</td>
          </tr>
          <tr>
            <td>02</td>
            <td>Salman</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            <td>95</td>
          </tr>
          <tr>
            <td>03</td>
            <td>Shan</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            <td>95</td>
          </tr>
          <tr>
            <td>04</td>
            <td>Aliyan</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            <td>95</td>
          </tr>
          <tr>
            <td>05</td>
            <td>Zeeshan</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            <td>95</td>
          </tr>
        </tbody>
        <!-- footer 
        <tfoot>
          <tr>
            <td colspan=3>Maximum Marks: </td>
            <td colspan=3>Marks Obtained: </td>
            <td colspan=2>Grade: </td>
          </tr>
        </tfoot> footer ends
      </table>-->
    </div>
  </body>


                </div>  
            
            
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->
          
          
          
          
        </div> <!-- /row -->
  
      </div> <!-- /container -->
      
  </div> <!-- /main-inner -->
    
</div> <!-- /main -->
    
    
    
 
<div class="extra">

  <div class="extra-inner">

    <div class="container">

      <div class="row">
                    <div class="span3">
                        <h4>
                            About Free Admin Template</h4>
                        <ul>
                            <li><a href="javascript:;">EGrappler.com</a></li>
                            <li><a href="javascript:;">Web Development Resources</a></li>
                            <li><a href="javascript:;">Responsive HTML5 Portfolio Templates</a></li>
                            <li><a href="javascript:;">Free Resources and Scripts</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Support</h4>
                        <ul>
                            <li><a href="javascript:;">Frequently Asked Questions</a></li>
                            <li><a href="javascript:;">Ask a Question</a></li>
                            <li><a href="javascript:;">Video Tutorial</a></li>
                            <li><a href="javascript:;">Feedback</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Something Legal</h4>
                        <ul>
                            <li><a href="javascript:;">Read License</a></li>
                            <li><a href="javascript:;">Terms of Use</a></li>
                            <li><a href="javascript:;">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Open Source jQuery Plugins</h4>
                        <ul>
                            <li><a href="">Open Source jQuery Plugins</a></li>
                            <li><a href="">HTML5 Responsive Tempaltes</a></li>
                            <li><a href="">Free Contact Form Plugin</a></li>
                            <li><a href="">Flat UI PSD</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                </div> <!-- /row -->

    </div> <!-- /container -->

  </div> <!-- /extra-inner -->

</div> <!-- /extra -->


    
    
<div class="footer">
  
  <div class="footer-inner">
    
    <div class="container">
      
      <div class="row">
        
          <div class="span12">
            &copy; 2013 <a href="#">Bootstrap Responsive Admin Template</a>.
          </div> <!-- /span12 -->
          
        </div> <!-- /row -->
        
    </div> <!-- /container -->
    
  </div> <!-- /footer-inner -->
  
</div> <!-- /footer -->

<script>


   
   function get_marks(stud_id)
   {
     

      var class_id=jQuery('#class_id').val();
      jQuery.ajax({

         url:'get_marks.php',
         type:'post',
         data:'class_id='+class_id,
         success:function(result) {
            jQuery('#table').html(result);
         }


      });
   }

   function get_rollno(stud_id)
   {


      var class_id2=jQuery('#class_id2').val();
      jQuery.ajax({

         url:'get_rollno.php',
         type:'post',
         data:'class_id='+class_id2+'&student_id='+student_id,
         success:function(result) {
            jQuery('#student_id').html(result);
         }


      });
   }

   function get_marks2(stud_id)
   {
     
      var class_id=jQuery('#class_id2').val();
      var student_id=jQuery('#student_id').val();
      jQuery.ajax({

         url:'get_marks2.php',
         type:'post',
         data:'student_id='+student_id+'&class_id='+class_id,
         success:function(result) {
            jQuery('#table2').html(result);
         }


      });
   }

   function get_rank(stud_id)
   {
     
      var term_id=jQuery('#term_id').val();
      var class_id=jQuery('#class_id3').val();
      jQuery.ajax({

         url:'get_rank.php',
         type:'post',
         data:'class_id='+class_id+'&term_id='+term_id,
         success:function(result) {
            jQuery('#table3').html(result);
         }


      });
   }

   
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href ); //save from resubmission when refresh happens
}
   

</script>
    


<script src="js/jquery-1.7.2.min.js"></script>
  
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>


  </body>

</html>
