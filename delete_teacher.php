<?php
include 'dbcon.php';

$id=$_GET["id"];
mysqli_query($con,"delete from teacher where id=$id");

?>

<script>
window.location= "view_teacher_list.php";

    </script>