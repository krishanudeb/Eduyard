<?php

$server= "localhost";
$user= "root";
$password= "";
$db = "eduyard";

$con= mysqli_connect($server,$user,$password,$db);

define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/woop2/');
 define('SITE_PATH','http://localhost/eduyard/');
 //define('SITE_PATH','http://eduyard.com/');
 //define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/');

 define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
 define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');


?>