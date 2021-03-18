<?php

include 'dbcon.php';
include 'functions.inc.php'; //contains imp functions

$class_id=get_safe_value($con,$_POST['class_id']);


$sql2="select routine.id, subject.name as sname, teacher.name as tname, slot.period, slot.time_start, slot.time_end from subject,teacher,routine,slot where routine.slot_id = slot.id and routine.teacher_id = teacher.id and routine.subject_id = subject.id and routine.class_id='$class_id' order by slot.time_start";

 $res2=mysqli_query($con,$sql2);

if(mysqli_num_rows($res2)>0)
{
    $html="
         
    <h4 class=><a href='manage_routine.php?id=".$class_id."'>Edit Routine </a></h4>
    <br>
    <table class='table table-striped table-bordered'>
        <thead>

        <th>Period</th>
        <th>Time</th>
        <th>Subject Name</th>
        <th>Teacher</th>
        <th>edit</th>

        </thead> 
            <tbody>

        ";
    

                                            

                                            
                                            

                          


                           while($row2=mysqli_fetch_assoc($res2))
                                            {     
                                               $html.= "<tr>";
                                               $html.="<td>".$row2['period']."</td>";
                                               $html.="<td>".$row2['time_start']."</td>";
                                               $html.="<td>".$row2['sname']."</td>";
                                               $html.="<td>".$row2['tname']."</td>";
                                               $html.="<td><button class='btn btn-warning' ><a href='manage_routine.php?id=".$row2['id']."'>Edit</button></td>";
                                               $html.= "</tr>";
                                               

                                            }


          



    
    echo $html;
}
else
{
   echo "<h2>No DATA available for now</h2>";
}
?>



