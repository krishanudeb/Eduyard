<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin View Notice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<script src ="jQuery/juqery_latest.js"></script>

</head>
<body>
    <?php
    include 'dbcon.php';

    $query="select * from notice where to_whom ='To Teachers' ";
    $query_run=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($query_run)){
        ?>
        <div class="card">
            <div class="card-body">

                <h3 class="card-title">
                    <?php echo $row['purpose'];   ?><br>
                    <?php echo $row['post_date'];?><br>
                 </h3>
                 <p class="card-text"> <?php echo $row['message'] ?></p>
    </div>
    </div>
            <?php

    }

    ?>
</body>
</html>