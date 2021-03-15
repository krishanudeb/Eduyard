<?php
include 'dbcon.php';
include 'functions.inc.php';  //important function to checkmate sql injection

$class_id=get_safe_value($con,$_POST['class_id']);  //class_id is the id passed by AJAX function of class.php and we use this function in this page to query the class as per id

$sql="select * from student where class_id='$class_id' ";   //query
$res=mysqli_query($con,$sql);                           //connection query and table display

$html="<table>                                              
<thead>
  <tr>
    <th>Roll No</th>
    <th>Name</th>
    <th>Guardian Name</th>
    <th>Contact </th>
    <th>Address</th>
   
    
  </tr>
</thead>
<tbody>";
if(mysqli_num_rows($res)>0)    //if class_id is found then details to be inserted
{ 

                
                while ($row2=mysqli_fetch_array($res))
                {
                          $html.="<tr>";            
                  $html.="<td >" .$row2["roll_no"]."</td>";
                  $html.="<td >" .$row2["name"]."</td>";
                  $html.="<td >" .$row2["guardian"]."</td>";
                  $html.="<td >" .$row2["phone"]."</td>";
                  $html.="<td >" .$row2["address"]."</td>";
                  $html.="</tr>"; 
                
                }
echo $html;
}
else
{
   echo "<h2>No DATA available for now</h2>";
}
                
?>