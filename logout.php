<?php

//Destroying the seesion created

session_start();

session_destroy();

header('location:login.php');  //After session destroy, redirect to login page

?>