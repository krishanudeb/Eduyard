<?php
session_start();

include 'dbcon.php';

if(isset($_POST['send_notice_button'])){
 
  /*$to_whom=mysqli_real_escape_string($con,$_POST['to_whom']);
  $post_date=mysqli_real_escape_string($con,$_POST['post_date']);
  $purpose=mysqli_real_escape_string($con,$_POST['purpose']);
  $message=mysqli_real_escape_string($con,$_POST['message']);*/
  $query= "insert into notice values(null,'$_POST[to_whom]','$_POST[post_date]','$_POST[purpose]','$_POST[message]')";
  $query_run=mysqli_query($con,$query);
  if($query_run){
    ?>
    <script>
     alert("Notice created");
     window.location.href(notice_admin.php);
  </script>
  <?php
  }
  else {
    ?>
    <script>
      alert("Please try again");
     window.location.href(notice_admin.php);
      </script>
      <?php
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin Notice Board</title>
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

<!--//JQuery code to load the content of create_notice.php into notice area-->
<script>  
  $(document).ready(function(){        //if the document is ready to load then we call the function
    $("#create_notice_button").click(function(){
      $("#noticearea").load('create_notice.php');  //when button id is clicled, the noticearea div loads the create_notice.php
    });
  });

  $(document).ready(function(){        //if the document is ready to load then we call the function
    $("#view_all_notice_button").click(function(){
      $("#noticearea").load('admin_view_notice.php');  //when button id is clicled, the noticearea div loads the admin_view_notice.php
    });
  });
  </script>

</head>
<body>
    
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">Eduyard- Notice Board </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> EGrappler.com <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="javascript:;">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div><br><br>

<!--Profile Card-->
<div class="container" id="main">
<div class="card">
  <img src="img/pp.jpg" alt="John" style="width:30%">
  <h1>Mr. Principal</h1>
  <p class="title"> Admin</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <p><button>Contact</button></p>
  </div>
  
  <!--The control buttons-->
  <div class="controls">
                                             
          <a class="btn btn-success" id="create_notice_button" >Create Notice</a>
          <a class="btn btn-primary" id="view_all_notice_button" >View All Notice</a>

          <!--<a class="btn btn-danger" href="#"> Delete Notice</a>-->
           </div>

  <hr style="width:100%", size="10", color=black > 


<br> <br>
<div id="noticearea">   <!--The details after clicking of the 2 buttons are shown under this div-->


</div>

</div>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href ); //save from resubmission when refresh happens
}
</script>
</body>
</html>