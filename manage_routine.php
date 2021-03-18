<?php

include 'dbcon.php';
include 'functions.inc.php'; //contains imp functions
include 'top.inc.php'; // contasins top nav bar etc.

$routine_id = mysqli_real_escape_string($con,$_GET['id']);
 $res=mysqli_query($con,"select routine.class_id as cid, subject.id as sid, teacher.id as tid, slot.period, slot.time_start, slot.time_end from subject,teacher,routine,slot where routine.slot_id = slot.id and routine.teacher_id = teacher.id and routine.subject_id = subject.id and routine.id='$routine_id' ");
 
$row=mysqli_fetch_assoc($res);
$class_id=$row['cid'];
$subject_id=$row['sid'];
$teacher_id=$row['tid'];





if(isset($_POST['submit'])) { //on clicking register


  $sid=get_safe_value($con,$_POST['subject']); //get safe value is stored in function.inc.php
   $tid=get_safe_value($con,$_POST['teacher']);
   
   //$date = date('Y-m-d h:i:s');

      mysqli_query($con,"update routine set subject_id = '$sid', teacher_id = '$tid' where id ='$routine_id' ");

      header('location:routine.php');
   die();

         }


?>



<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Signup - Eduyard Admin Template</title>

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
  
 

<div class="account-container register">
  
  <div class="content clearfix">
    
    <form  method="post">
    
           
      
      <div class="login-fields">
        
        
        
        <div class="field">
          <h1 ><?php echo $row['period'] ?></h1>
          <p><?php echo $row['time_start'] ?>A.M -<?php echo $row['time_end'] ?> A.M</p>
          
        </div> <!-- /field -->
        
        <!-- /field -->
        <div class="field">
          <label for="class">Class:</label>
          <select name="subject" id="subject">
    <option>select subject
                              </option>
                              <?php

                              $res2 = mysqli_query($con,"select name,id from subject where class_id = '$class_id'");
                             while($row2=mysqli_fetch_assoc($res2))

                             {
                              if($row2['id']==$subject_id)
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
        </div> <!-- /field -->

        <div class="field">
          <label for="teacher">Teacher</label>
          <select name="teacher" id="teacher">
    <option>select teacher
                              </option>
                              <?php

                              $res3 = mysqli_query($con,"select name,id from teacher");
                             while($row3=mysqli_fetch_assoc($res3))

                             {
                              if($row3['id']==$teacher_id)
                              {
                                 echo "<option  selected value =".$row3['id'].">".$row3['name']."</option>";

                              }
                              else
                              {
                                 echo "<option value =".$row3['id'].">".$row3['name']."</option>";

                              }
                             }
                              
                              
                              ?>


                               </select>
        </div> <!-- /field -->

        
        
        
      </div> <!-- /login-fields -->
      
      <div class="login-actions">
        
        
                  
        <button class="button btn btn-primary btn-large" name="submit" type="submit"
        >Update</button>

        
      </div> <!-- .actions -->
      
    </form>
    
  </div> <!-- /content -->
  
</div> <!-- /account-container -->


<!-- Text Under Box -->
 <!-- /login-extra -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>
<script src="js/custom.js"></script>

</body>

 </html>

    
    
 

