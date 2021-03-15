<?php

include 'dbcon.php';
include 'functions.inc.php'; //contains imp functions

$msg='';

if(isset($_POST['submit'])) { //on clicking register


  $term_id=get_safe_value($con,$_POST['term_id']); //get safe value is stored in function.inc.php
   $subject_id=get_safe_value($con,$_POST['subject_id']);
   $marks=get_safe_value($con,$_POST['marks']);
   $student_id=get_safe_value($con,$_POST['student_id']);
   
   //$date = date('Y-m-d h:i:s');

   if(is_null($term_id) ||!isset($subject_id)|| is_null($marks) || is_null($student_id))
   {
    ?>
    <script type="text/javascript">
      alert("wrong");
    </script>

    <?php
   }

   $res=mysqli_query($con,"select * from marks where term_id='$term_id' and sub_id='$subject_id' and student_id='$student_id'");

   $check = mysqli_num_rows($res);

   if($check>0)
   {
        $msg="   <p style='color:red;'>  *marks for this student already exists for this particular subject</p>";
   }

   else
   {

     mysqli_query($con,"insert into marks(term_id,sub_id,marks,student_id) values('$term_id','$subject_id','$marks','$student_id')");

     $msg="<p style='color:green;'>  *marks successfully entered</p>";

   }


     

         }


?>




<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Account - Bootstrap Admin Template</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
   


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
    
    

<div class="main">
  
  <div class="main-inner">

      <div class="container">
  
        <div class="row">
          
          <div class="span12">          
            
            <div class="widget ">
              
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Mark Entry Section</h3>
            </div> <!-- /widget-header -->
          
          <div class="widget-content">
            
            
            
            
                <form id="edit-profile" class="form-horizontal" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
                  <fieldset>
                    
                    
                    
                    
                    <div class="control-group">                     
                      <select name="class_id" id="class_id" onchange="get_rollno('')" required>
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
                    
                    
                    <div class="control-group">                     
                      <label class="control-label" for="student_id">Roll no</label>
                      <div class="controls">
                       <div class="form-group">
                              
                              <select class=" form-control" name="student_id" id="student_id" onclick="get_name('')" required>
                              <option>select Roll no
                              </option>
                              


                               </select> </div>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    
                    <div class="control-group">                     
                      <label class="control-label" for="name">Name</label>
                      <div class="controls" name="name" id="name">
                        
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                     <div class="control-group">                     
                      <label class="control-label" for="student_id">Term</label>
                      <div class="controls">
                       <div class="control-group">                     
                      <select name="term_id" id="term_id" required onclick="get_subject('')" >
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


                               </select>      
                    </div> <!-- /control-group -->       
                    </div> <!-- /control-group -->

                     <div class="control-group">                     
                      <label class="control-label" for="student_id">Subject</label>
                      <div class="controls">
                       <div class="form-group">
                              
                              <select class=" form-control" name="subject_id" id="subject_id" onclick="get_name('')" required>
                              <option value="">select Subject
                              </option>
                              


                               </select> </div>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="firstname">Marks</label>
                      <div class="controls">
                        <input type="text" class="span2" id="marks" name="marks" placeholder="enter marks" required><p>out of 100</p>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    <div>
                      <p > <?php echo $msg ?> </p>
                      <div>
                    
                                        
                    
                      
                     <br />
                    
                      
                    <div class="form-actions">
                      <button type="submit" name="submit" class="btn btn-primary">Save</button> 
                      
                    </div> <!-- /form-actions -->
                  </fieldset>
                </form>
                </div>
                
                <div class="tab-pane active" id="jscontrols">
                  <form id="edit-profile2" class="form-vertical">
                    
                  </form>
                </div>
                

                




              </div>
              
              
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


   
   function get_rollno(stud_id)
   {


      var class_id=jQuery('#class_id').val();
      jQuery.ajax({

         url:'get_rollno.php',
         type:'post',
         data:'class_id='+class_id+'&student_id='+student_id,
         success:function(result) {
            jQuery('#student_id').html(result);
         }


      });
   }

   function get_name(student_id)
   {


      var student_id=jQuery('#student_id').val();
      jQuery.ajax({

         url:'get_name.php',
         type:'post',
         data:'student_id='+student_id,
         success:function(result) {
            jQuery('#name').html(result);
         }


      });
   }


   function get_subject(student_id)
   {
         if( !$('#class_id').val() ) {

      alert("enter class");


    }

      var class_id=jQuery('#class_id').val();
      jQuery.ajax({

         url:'get_subject.php',
         type:'post',
         data:'class_id='+class_id,
         success:function(result) {
            jQuery('#subject_id').html(result);
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
