<?php


session_start();


$server   = "localhost";
$userName = "root";
$password = "";
$dbName   = "usersnti";


    $con = mysqli_connect($server,$userName,$password,$dbName);


if(!$con)  {


    die ('error:' .mysqli_connect_error());}

?>