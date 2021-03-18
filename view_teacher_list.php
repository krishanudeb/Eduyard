<?php

include 'dbcon.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<script src ="jQuery/juqery_latest.js"></script>
</head>
<body>
    
<div class= "container">
<div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Teacher Information</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Teacher's Name </th>
                    <th> Contact </th>
                    <th> Address </th>
                    <th>User Name </th>
                    <th class="td-actions"> Edit </th>
                    <th class="td-actions"> Delete </th>
                  </tr>
                </thead>
                <tbody>
                  
                    <!-- Table information php code-->
                    <?php
                        $query=mysqli_query($con,"select * from teacher");
                        while($row=mysqli_fetch_array($query))
                        {
                            ?>

                        <tr>
                             <td> <?php echo $row['name'];?> </td>
                            <td> <?php echo $row['phone'];?></td>
                             <td> <?php echo $row['address'];?> </td>
                             <td><?php echo $row['username'];?> </td>
                            <td class="td-actions"><a href="edit_teacher.php?id=<?php echo $row['id'];?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-pencil"> Edit </i></a></td>  <!-- Redirect to edit_teacher.php to perform edit operation-->
                            <td> <a href="delete_teacher.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-trash"> Delete </i></a></td>  <!--Redirect to delete_teacher.php to perform delete operation-->
                         </tr>
                            <?php
                        }
                            

                    ?>

                 <!--End of php code-->
                
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
                    </div>

</body>
</html>