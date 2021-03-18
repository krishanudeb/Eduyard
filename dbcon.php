<?php

$server= "localhost";
$user= "root";
$password= "";
$db = "eduyard";

$con= mysqli_connect($server,$user,$password,$db);

if($con){
    
}else{
    ?>
    <script>
           alert("connection unsuccessful");
        </script>
     
        <?php 

}
?>