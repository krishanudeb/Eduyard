<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Notice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
</head>
<body>
<H1 align="center"> Send Notice Form </H1>
    <br><br>
    
    <div class="container">
    <form id="edit-profile" class="form-horizontal" action=""  method="post">
									<fieldset>
										
									
										
										<div class="control-group">											
											<label class="control-label" for="select">To Whom</label>
											<div class="controls">
												<select class="span6"id="to_whom" name="to_whom"> 
                                                    <option>To All</option>
                                                    <option>To Teachers</option>
                                                    
                                                </select>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="post_date">Post Date</label>
											<div class="controls">
												<input type="date" class="span6" id="post_date" name="post_date">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="subject">Purpose</label>
											<div class="controls">
												<input type="text" name="purpose" class="span2" id="purpose" placeholder="Enter Purpose">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<br />
										
										<div class="control-group">											
											<label class="control-label" for="notice">Notice</label>
											<div class="controls">
												<textarea name="message" row="100" column="200" class="span8" id="message" placeholder="Type Notice..."></textarea>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
                                        
                                        
                                    
											
                                            <div class="controls">
                                              <button type="submit" class="btn btn-primary" name="send_notice_button"  id="send_notice_button" ><i class="icon-ok"></i> Send Notice </button><br>
                                                
                                                
                                              </div>	<!-- /controls -->			
										</div> <!-- /control-group -->
                                        
										
									</fieldset>
								</form>
         </form>

</div>
</body>
</html>