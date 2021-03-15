<?php

include 'dbcon.php';
include 'functions.inc.php'; //contains imp functions

$class_id=get_safe_value($con,$_POST['class_id']);
//$student_id=get_safe_value($con,$_POST['student_id']);
$res=mysqli_query($con,"select * from student where class_id='$class_id' ");

if(mysqli_num_rows($res)>0)
{
    $html='';
    while($row=mysqli_fetch_assoc($res))
    {
      if($student_id==$row['id'])
      {
          $html.="<option value=".$row['id']." selected>".$row['roll_no']."</option>";
      }
      else
      {

         $html.="<option value=".$row['id'].">".$row['roll_no']."</option>";

      }
      
    }

    echo $html;
}
else
{
   echo "<option>no students available</option>";
}
?>

?>

