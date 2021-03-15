<?php

include 'dbcon.php';
include 'functions.inc.php'; //contains imp functions

$total=0;
$count=0;

$student_id=get_safe_value($con,$_POST['student_id']);

$class_id=get_safe_value($con,$_POST['class_id']);


$sql2="select  distinct(student.name) as sname, marks.marks, subject.name as subname from student,marks,subject where student.id = '$student_id' and marks.student_id = '$student_id' and student.class_id ='$class_id' and subject.class_id= '$class_id' and marks.sub_id = subject.id";

 $res2=mysqli_query($con,$sql2);
if(mysqli_num_rows($res2)>0)
{
    $html="
         <h2>MARKS</h2>

    <table>
        <thead>

        <th>Name</th>
        
        <th>Subject Name</th>
        <th>Marks</th>

        </thead> 
            <tbody>

        ";
    

                                            

                                            
                                            

                          


                           while($row2=mysqli_fetch_assoc($res2))
                                            {     
                                                       $html.= "<tr>";
                                               $html.="<td>".$row2['sname']."</td>";
                                               
                                               $html.="<td>".$row2['subname']."</td>";
                                               $html.="<td>".$row2['marks']."</td>";

                                               $html.= "</tr>";
                                                   $total=$total + $row2['marks'];
                                                   $count++;
                                            }

                                            $totalmarks = $count * 100;
                                            $percentage = ( $total / $totalmarks ) * 100;

                                                 $html.="<tr><td colspan='3'><span > &ensp; Total:=".$total." out of ".$totalmarks."</span></td></tr>
                                                 <tr><td colspan='3'><span > &ensp; percentage:=".$percentage." %</span></td></tr>";
          



    
    echo $html;
}
else
{
   echo "<h2>No DATA available for now</h2>";
}




?>



