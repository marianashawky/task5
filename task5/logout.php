<?php
session_start();

session_destroy();



$Submit =$_POST["Submit1"];
 if(isset($Submit)){

    header("location:login.php"       );


 }


 else {

echo 'error';

 }

?>