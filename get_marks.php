<?php

include 'dbcon.php';
include 'functions.inc.php'; //contains imp functions

$class_id=get_safe_value($con,$_POST['class_id']);

$sql="select name from subject where class_id='$class_id' order by id desc";
$sql2="select student.name as sname,student.roll_no,subject.name as subname,marks.marks from student,subject,marks where student.id = marks.student_id and student.class_id= '$class_id' and marks.sub_id=subject.id order by student.roll_no  ";
$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res)>0)
{
    $html="
         <h2>MARKS</h2>

    <table>
        <thead>

        <th>Name</th>
        <th>Roll no</th>
        <th>Subject Name</th>
        <th>Marks</th>

        </thead> 
            <tbody>

        ";
    

                                            

                                            
                                            

                           $res2=mysqli_query($con,$sql2);


                           while($row2=mysqli_fetch_assoc($res2))
                                            {     
                                                       $html.= "<tr>";
                                               $html.="<td>".$row2['sname']."</td>";
                                               $html.="<td>".$row2['roll_no']."</td>";
                                               $html.="<td>".$row2['subname']."</td>";
                                               $html.="<td>".$row2['marks']."</td>";

                                               $html.= "</tr>";

                                            }
                                              echo $html;
}
else
{
   echo "<h2>No DATA available for now</h2>";
}
?>



