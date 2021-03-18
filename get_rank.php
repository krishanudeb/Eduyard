<?php

include 'dbcon.php';
include 'functions.inc.php'; //contains imp functions

$total=0;
$rank=0;

$term_id=get_safe_value($con,$_POST['term_id']);

$class_id=get_safe_value($con,$_POST['class_id']);


$sql2="select student.name as sname,student.roll_no, SUM(marks.marks) as m from student,subject,marks where student.id = marks.student_id and student.class_id= '$class_id' and marks.sub_id=subject.id and marks.term_id = '$term_id' GROUP BY student.roll_no order by marks.marks desc";



 $res2=mysqli_query($con,$sql2);
if(mysqli_num_rows($res2)>0)
{
    $html="
         

    <table>
        <thead>

        <th>Name</th>
        
        <th>Roll No</th>
        <th>Total Marks</th>
        <th>Rank</th>

        </thead> 
            <tbody>

        ";
    

                                            

                                            
                                            

                          


                           while($row2=mysqli_fetch_assoc($res2))
                                            {   
                                            
                                           $rank++;  
                                                       $html.= "<tr>";
                                               $html.="<td>".$row2['sname']."</td>";
                                               
                                               $html.="<td>".$row2['roll_no']."</td>";
                                               $html.="<td>".$row2['m']."</td>";
                                               $html.="<td>".$rank."</td>";
                                                $html.= "<tr>";

                                               
                                                  
                                            }

                                            

                                                 
          



    
    echo $html;
}
else
{
   echo "<h2>No DATA available for now</h2>";
}




?>
