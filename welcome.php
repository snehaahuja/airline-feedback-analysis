<?php
 if (isset($_POST['user']))
 {
     header("location: loginuserhtmlmain.php");
 }
 if (isset($_POST['admin']))
 {
     header("location: loginadminhtmlmain.php");
 }
?>

