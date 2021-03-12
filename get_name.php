<?php

include 'dbcon.php';
include 'functions.inc.php'; //contains imp functions



$student_id=get_safe_value($con,$_POST['student_id']);
$res=mysqli_query($con,"select * from student where id='$student_id' ");

if(mysqli_num_rows($res)>0)
{
  while($row=mysqli_fetch_assoc($res))
    {
    
    $html="<label class='control-label' for='name'><strong>".$row['name']."</strong></label>";

     }

    

    echo $html;
}
else
{
   echo "<option>no students available</option>";
}
?>



